<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderItem;
use Auth;

class CheckoutController extends Controller
{
    function index(){
        $old_cartitem = Cart::where('user_id',Auth::id())->get();

        foreach($old_cartitem as $item){
            if(Product::where('id',$item->prod_id)->where('qty','<',$item->prod_qty)->exists()){
                $remove = Cart::where('user_id',Auth::id())->where('prod_id',$item->prod_id)->first();
                $remove->delete();
            }
        }

        $cartitem = Cart::where('user_id',Auth::id())->get();
        
        return view("Frontend.checkout",compact('cartitem'));
    }
    function place_order(Request $req){
        $order = new Order();
        $order->fname = $req->input('fname');
        $order->lname = $req->input('lname');
        $order->email = $req->input('email');
        $order->phone = $req->input('phone');
        $order->address1 = $req->input('address1');
        $order->address2 = $req->input('address2');
        $order->city = $req->input('city');
        $order->state = $req->input('state');
        $order->country = $req->input('country');
        $order->pincode = $req->input('pincode');
        $order->save();
        $o_id = $order->id;
        $cartitem = Cart::where('user_id',Auth::id())->get();
        foreach($cartitem as $item)
        {
            OrderItem::create([
                'order_id'=>$o_id,
                'prod_id'=> $item->prod_id,
                'qty' => $item->prod_qty,
                'price' => $item->products->selling_price,
                ]);

                $prod = Product::where('id',Auth::id())->first();
                $prod->qty = $prod->qty-$item->prod_qty;
                $prod->update();
        }
         
        if(Auth::user()->address1==NULL)
        {
        $user = User::where('id',Auth::id())->first();
        $user->lname = $req->input('lname');
        $user->phone = $req->input('phone');
        $user->address1 = $req->input('address1');
        $user->address2 = $req->input('address2');
        $user->city = $req->input('city');
        $user->state = $req->input('state');
        $user->country = $req->input('country');
        $user->pincode = $req->input('pincode');
        $user->update();
            
        }
        $cartitem = Cart::where('user_id',Auth::id())->get();
        Cart::destroy($cartitem);
        return redirect('/')->with('status','Product has been orderded successfuly!');

    }
}
