<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Auth;

class CartController extends Controller
{
    function addtocart(Request $req){
         $product_id = $req->prod_id;
         $qty = $req->input('qty');
        if(Auth::check()){
            $product = Product::where('id',$product_id);
            if($product){
                // check wither product exist or not
                if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists()){
                    return "Product already exist";
                }else{
                // Insert data into cart table
                $cartitme = new Cart();
                $cartitme->prod_id = $product_id;
                $cartitme->user_id =Auth::id();
                $cartitme->prod_qty = $req->input('qty');
                $cartitme->save();
                return redirect('/catagory')->with('status','Product Added to cart');
                }
            }
        }else{
            return "no";
        }
    }
}
