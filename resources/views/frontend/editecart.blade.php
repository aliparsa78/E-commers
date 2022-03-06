@extends('layouts.front')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title')
    Cart Product
   @endsection
   <base href="../public">
</head>
<body>
    
@section('content')
<div class="container">
    
        <div class="card shadow productdata" id="add-to-cart">
        @php  $total = 0; @endphp
        <!-- $product get data from cart table -->
       
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                    <img src="{{asset('admin/assets/upload/product/'.$product->products->image)}}" width="150px;" height="120px;"  alt="">
                    </div>
                    <div class="col-md-9 ml-3">
                        <div class="row">
                            <div class="col-md-3 ml-3">
                            <p>{{$product->products->name}}</p>
                            {{$product->products->selling_price}}
                            </div>
                            <div class="col-md-6">
                            @if($product->prod_qty < $product->products->qty)
                            <form action="update-cart/{{$product->id}}" method="post">
                                @csrf
                                    <label >quantity</label>
                                    
                                    <input type="number" name="qty" value ="{{$product->prod_qty}}">
                                    
                                    <input type="submit" class="btn btn-success" value="Update" style="float:right; margin-right:-60px;margin-top:-10px;">
                                </form>
                                
                                @else
                                <h3>Out of stock</h3>
                                <a href="{{url('/mycart')}}" class="btn btn-info">Back to cart</a>
                                @endif
                            </div>
                        </div>
                        <hr>
                    </div>
                    
                </div>  
            </div>
           =
        </div>
</div>
@endsection
</body>
</html>



