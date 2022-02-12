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
Products 
@endsection

@section('content')
<div class="py-7">
    <div class="container">
    <H1>{{$catagory->slug}}</H1>
        <div class="row">
            
                @foreach($product as $item)
                <div class="col-md-3 mb-3 mt-5">
                    <div class="card">
                        <img src="{{asset('admin/assets/upload/product/'.$item->image)}}" alt="">
                        <div class="card-body">
                            <h5>{{$item->name}}</h5>
                            <p>{{$item->selling_price}}</p>  
                        </div>
                    </div>        
                </div> 
                @endforeach 
              
        </div>
    </div>
</div>
@endsection
</body>
</html>