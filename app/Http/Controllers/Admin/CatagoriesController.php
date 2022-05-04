<?php

namespace App\Http\Controllers\Admin;

use File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;

class CatagoriesController extends Controller
{
    public function index()
    {
        $catagory = Catagory::all();
        return view('Admin.catagory.index',['catagory'=>$catagory]);
    }
    public function add()
    {
        return view('Admin.catagory.add');
    }
    public function insert(Request $req){
        $catagory = new Catagory;
        
        $catagory->name=$req->input('name');
        $catagory->slug=$req->input('slug');
        $catagory->describtion=$req->input('describtion');
        $catagory->status=$req->input('status')==TRUE?'1':'0';
        $catagory->popular=$req->input('popular')==TRUE?'1':'0';
        $catagory->meta_title=$req->input('meta_title');
        $catagory->meta_describ=$req->input('meta_describtion');
        $catagory->meta_keyword=$req->input('meta_keyword');
        if($req->file('image')){
            $file = $req->file('image');
            $exe = $file->getClientOriginalExtension();
            $filename = time().'.'.$exe;
            $file->move('admin/assets/upload/catagory/',$filename);
            $catagory->image= $filename;
        
        }else{
            return "No";
        }
        
        $catagory->save();
        return redirect('/dashboard')->with('status','Catagory Added Successfuly');
        
    }
    
    function edite($id){
        $catagory=Catagory::find($id);
        return view('admin.catagory.edite',['catagory'=>$catagory]);
    }
    function update(Request $req,$id){
        $catagory = Catagory::find($id);
        if($req->hasFile('image')){
            $path ="admin/assets/upload/catagory/".$catagory->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $req->file('image');
            $exe = $file->getClientOriginalExtension();
            $filename = time().'.'.$exe;
            $file->move('admin/assets/upload/catagory/',$filename);
            $catagory->image= $filename; 
        }
       
        $catagory->name=$req->input('name');
        $catagory->slug=$req->input('slug');
        $catagory->describtion=$req->input('describtion');
        $catagory->status=$req->input('status')==TRUE?'1':'0';
        $catagory->popular=$req->input('popular')==TRUE?'1':'0';
        $catagory->meta_title=$req->input('meta_title');
        $catagory->meta_describ=$req->input('meta_describtion');
        $catagory->meta_keyword=$req->input('meta_keyword');
        $catagory->update();

        return redirect('/dashboard')->with('status','Catagory Update successfuly');
    }

    function delete($id){
        $catagory = Catagory::find($id);
        
        if($catagory->image){
            $path ="admin/assets/upload/catagory/".$catagory->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $catagory->delete();
        return redirect('/dashboard')->with('status','catagory deleted successfully');
    }

}
