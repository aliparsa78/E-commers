<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    function addtocart(Request $req){
            if($req->input("qty")<=0 || $req->input("qty")>10){
                return redirect('/catagory')->with('status',"Quantity should be in ranch 1 - 10");
            }else{
                $product_id = $req->prod_id;
                $qty = $req->input('qty');
                if(Auth::check()){
                    $product = Product::where('id',$product_id);
                    if($product){
                        // check wither product exist or not
                        if(Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists()){
                            return response()->json(['status'=>$product->name."Already exist"]);
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
            }   }
    }
    
    function mycart(Request $req){
        $product = Cart::where('user_id',Auth::id())->get();
        // $user_id = Auth::id();
        // $data = DB::table('carts')->join("products","carts.prod_id",'=','products.id')
        // ->where('carts.user_id',$user_id)
        // ->select('products.*')->get();
    
        return view('frontend.mycart',compact('product'));
    }

    function delete_cart($id){
        $cart = Cart::find($id);
        if(Cart::where('prod_id',$id)->where('user_id',Auth::id())->exists()){
        $cart->delete();
        return redirect("/catagory")->with('status','Cart item deleted successfuly');
        }
    }
}
