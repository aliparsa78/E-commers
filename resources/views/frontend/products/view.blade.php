<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="frontend/css/style.css">
    <link rel="stylesheet" href="frontend/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/bootstrap/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend/bootstrap/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <base href="/public">
</head>
<body>
@extends('layouts.front')

@section('title')
    view-product
@endsection

@section('content')
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{asset('admin/assets/upload/product/'.$product->image)}}" width="400px;" alt="product image">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0 ml-2">
                            {{$product->name}}
                            <label class =" badge bg-danger" style="font-size:18px; float:right; color:white">{{$product->trending == 1?'Trending':''}}</label>
                        </h2>
                        <hr>
                        <label class="me-3" >Original Price : <s> {{$product->original_price}}</s></label>
                        <label class="font-weight-bold">Selling Price : {{$product->selling_price}} </label>

                        <p class="mt-3">
                            {!! $product->small_description !!}
                        </p>
                        <hr>
                        @if($product->qty>0)
                            <label class="badge bg-success text-white" >In stack</label>
                        @else
                            <label class="badge bg-danger text-white" >Out of stock</label>
                        @endif
                        <div class="row ">
                            <div class="col-md-3">
                                <label for="Quentity">Quentity</label>
                                <div class="input-group text-center text-inline mb-3">
                                    <span class="input-group-text">-</span>
                                    <input type="text" name="quantity" value="1" class="form-control">
                                    <span class="input-group-text">+</span>
                                </div>
                            </div>
                            <div class="col-md-9 mt-2">
                                <br>
                                <button type="button" class="btn btn-success me-3 float-start">Add to wishlist</button>
                                <button type="button" class="btn btn-primary me-3 float-start">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>