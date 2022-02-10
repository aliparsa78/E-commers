<?php

namespace App\Http\Controllers\Admin;

use File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Catagory;


class ProductController extends Controller
{
    function index(){
        $product = Product::all();
        return view('Admin.product.index',compact('product'));
    }

    function add(){
        $catagory = Catagory::all();
        return view('Admin.Product.add',compact('catagory'));
    }
    function insert(Request $req){
        $product = new Product();
        $product->cat_id = $req->input('cat_id');
        $product->name = $req->input('name');
        $product->slug = $req->input('slug');
        $product->small_description = $req->input('small_description');
        $product->description = $req->input('description');
        $product->original_price = $req->input('orginal_price');
        $product->selling_price = $req->input('selling_price');
        $product->qty = $req->input('qty');
        $product->tax = $req->input('tax');
        $product->status = $req->input('status') ==TRUE?'1':'0';
        $product->trending = $req->input('trending') ==TRUE?'1':'0';
        $product->meta_title = $req->input('meta_title');
        $product->meta_keyword = $req->input('meta_keyword');
        $product->meta_description = $req->input('meta_description');

        if($req->file('image')){
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/upload/product/',$filename);
            $product->image=$filename;
        }else{
            return "Image not selected";
        }
        $product->save();
        return redirect('/dashboard')->with('status','Product added successfuly');

    }
    
    function edite($id){
        $product = Product::find($id);
        $catagory = Catagory::all();
        return view('admin.product.edite',compact('product','catagory'));
    }
    function update(Request $req,$id){
        
        $product = Product::find($id);
        if($req->hasFile('image'))
        {

            $path = 'admin/assets/upload/product/'.$product->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $req->file('image');
            $exe = $file->getClientOriginalExtension();
            $filename = time().'.'.$exe;
            $file->move('admin/assets/upload/product/',$filename);
            $product->image = $filename;
        }
            $product->cat_id = $req->input('cat_id');
            $product->name = $req->input('name');
            $product->slug = $req->input('slug');
            $product->small_description = $req->input('small_description');
            $product->description = $req->input('description');
            $product->original_price = $req->input('orginal_price');
            $product->selling_price = $req->input('selling_price');
            $product->qty = $req->input('qty');
            $product->tax = $req->input('tax');
            $product->status = $req->input('status') ==TRUE?'1':'0';
            $product->trending = $req->input('trending') ==TRUE?'1':'0';
            $product->meta_title = $req->input('meta_title');
            $product->meta_keyword = $req->input('meta_keyword');
            $product->meta_description = $req->input('meta_description');
            $product->save();
            return redirect('/dashboard')->with('status','Product Update Successfuly');
    }
     function delete($id){
         $product = Product::find($id);
         $path = 'admin/assets/upload/product/'.$product->image;
         if(File::exists($path)){
             File::delete($path);
         }
         $product->delete();
         return redirect('/dashboard')->with('status','Product Deleted Successfuly');
     }

}
