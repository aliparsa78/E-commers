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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="Rate-user" method = "Post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rate {{$product->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- star -->
                <div class="rating-css">
                    <div class="star-icon">
                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                        <label for="rating1" class="fa fa-star"></label>
                        <input type="radio" value="2" name="product_rating" id="rating2">
                        <label for="rating2" class="fa fa-star"></label>
                        <input type="radio" value="3" name="product_rating" id="rating3">
                        <label for="rating3" class="fa fa-star"></label>
                        <input type="radio" value="4" name="product_rating" id="rating4">
                        <label for="rating4" class="fa fa-star"></label>
                        <input type="radio" value="5" name="product_rating" id="rating5">
                        <label for="rating5" class="fa fa-star"></label>
                    </div>
                </div>
                <!-- endstar -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" name="submit" value="Submit Rate" class="btn btn-info">
            </div>
      </form>
    </div>
  </div>
</div>


<div class="container">
    <div class="card shadow productdata mt-5" id="add-to-cart">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="{{asset('admin/assets/upload/product/'.$product->image)}}" width="350px;" alt="product image">
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
                        <div class="col-md-6">
                       
                            <form action="add-to-cart" method="POST">
                                @csrf
                                <label for="Quentity">Quentity</label>
                                <input type="hidden" name="prod_id" value="{{$product->id}}" class="prod_id">
                                <div class="input-group text-center text-inline mb-3">
                                    <input type="number" name="qty" class=" inputqty mr-4" value="1" style="width:70px; border-radius:5px;">
                                    @if($product->qty>0)
                                        <button type="submit" class="btn btn-success me-3 float-start addtocartbtn">Add to Cart <i class="fa fa-shopping-cart"></i></button>
                                    @else
                                        <label class="badge bg-danger text-white" ></label>
                                    @endif
                                </div>
                            </form>
                        </div>
                        
                        <div class="col-md-6 mt-2">
                        <br>
                            <a href="add-to-wishlist/{{$product->id}}" class="btn btn-primary me-3 float-start addtocartbtn">Add to wishlist<i class="fa fa-shopping-cart"></i></a>
                            
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Rate This Product
                    </button>
                    
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
</body>
</html>

@section('scripts')
@endsection
