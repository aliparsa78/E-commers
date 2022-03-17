<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Product;
use App\Models\Cart;
use Auth;

class WishlistController extends Controller
{
    function index(){
        $cart = Cart::all()->where('user_id',Auth::id())->first();
       
        $wishlist = Wishlist::where('user_id',Auth::id())->get();
        return view('frontend.wishlist.index',compact('wishlist','cart'));
    }
    function add(Request $req,$id){
        
        if(Auth::check()){
            if(Product::find($id)){
                $wish = new Wishlist();
                $wish->user_id = Auth::id();
                $wish->prod_id = $id;
                $wish->save();
                return redirect('/');
            }
        }else{
            return "Please Login to continue";
        }
    }
    function delete($id){
        if(Auth::check()){
            if(Wishlist::where('id',$id)->where('user_id',Auth::id())->exists()){
                $wish = Wishlist::where('id',$id)->where('user_id',Auth::id())->first();
                $wish->delete();
                return redirect('/');
            }

        }
    }
}
