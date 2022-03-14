<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminat\Facade\DB;

class OrderAdminController extends Controller
{
    function index(){
        $order = Order::where('status','0')->get();
        return view('admin.order.index',compact('order'));
    }

    function view($id){
        $order = Order::where('id',$id)->first();
        return view('admin.order.view',compact('order'));
    }
    function update(Request $req,$id){
        
        $order = Order::find($id);
        $order->status = $req->status;
        $order->update();
        return redirect('orders');
        
    }
}
