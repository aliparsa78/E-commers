<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    function index(){
        $user = User::all();
        return view('Admin.users.index',compact('user'));
    }
    function view($id){
        $users = User::find($id);
        return view('Admin.users.view',compact('users'));
    }
}
