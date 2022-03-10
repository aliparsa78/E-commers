<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Catagory;
use Auth;
use Session;
class FrontController extends Controller
{
  function index(){
      $future_product = Product::where('trending','1')->get();
      $trednig_catagory = Catagory::where('popular','1')->get();
      return view('frontend.index',compact('future_product','trednig_catagory'));
  }
  function catagory(){
    $catagory = Catagory::where('status','0')->get();
    return view('frontend.catagory.index',compact('catagory'));
  }
  function view_catagory($id){
    $product = Product::where('cat_id',$id)->get();
    $catagory = Catagory::find($id);
    
    return view('frontend.products.index',compact('product','catagory'));
  }
  function product_view($id){
      
      if(Product::where('id',$id)->exists()){
          $product = Product::where('id',$id)->first();
          return view('frontend/products/view',compact('product'));
      }else{
        return redirect('/')->with('status','Product not exists');
      }
    }
    
  
}
