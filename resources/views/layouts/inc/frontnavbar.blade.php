<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    @yield('title')
  </title>
  <link rel="stylesheet" href="frontend/css/style.css">
    <link rel="stylesheet" href="frontend/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/bootstrap/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend/bootstrap/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="">
    
</head>

<body>
<nav class="navbar">
    <ul class="nav justify-content-end">
        <li class="nav-item ">
        <a class="nav-link " href="#" id="e-shop">E-Shop</a>
        </li>
    
    </ul>
  <ul class="nav ">
    <li class="nav-item active"> 
      <a class="nav-link" href="/">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('catagory') }}">Catagory</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Pricing</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('login')}}">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Regester</a>
    </li>
    <?php 
      use App\Http\Controllers\Auth\LoginController;
      use App\Models\Cart;
      if(Auth::user()){
        $count = Cart::all()->count();
      
    ?>
    
    <li class="nav-item">
      <a class="nav-link " href="{{url('mycart')}}">Mycart {{$count}}</a>
    </li>
    <?php
    }
    ?>
  </ul>
</nav>