<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class FrontController extends Controller
{
  function index(){
      $future_product = Product::where('trending','1')->get();
      return view('frontend.index',compact('future_product'));
  }
}
