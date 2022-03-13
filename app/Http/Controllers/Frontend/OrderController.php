<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Auth;

class OrderController extends Controller
{
    function index(){
        $order = Order::where('user_id',Auth::id())->get();
        return view('frontend.order/order',compact('order'));
    }
    function view_order($id){
         $order = Order::where('id',$id)->where('user_id',Auth::id())->first();

       return view('frontend.order.view-order',compact('order'));
        
    }
}
