@extends('layouts.front')

@section('title')
    Cart Product
@endsection

@section('content')

<div class="container">
    
        <div class="card shadow productdata mt-3" id="add-to-cart">
        @php  $total = 0; @endphp
        <!-- $product get data from cart table -->
    
        
         @if($product->count() > 0)
            <div class="card-body">
                @foreach($product as $data)
                    <div class="row">   
                        <div class="col-md-2">
                            <img src="{{asset('admin/assets/upload/product/'.$data->products->image)}}" width="150px;" height="120px;"  alt="">
                        </div>
                        <div class="col-md-9 ml-3">
                            <div class="row">
                                <div class="col-md-3 ml-3">
                                <p>{{$data->products->name}}</p>
                                {{$data->products->selling_price}}
                                </div>
                                <div class="col-md-3 ml-5">
                                    
                                    <label for="Quentity">Quentity</label>
                                    <div class="input-group text-center text-inline mb-3">
                                        <input type="number" name="qty" class=" inputqty mr-4" value="{{$data->prod_qty}}" style="width:70px; border-radius:5px;">
                                    </div>
                                    
                                </div>
                                <div class="col-md-3 ml-5">
                                <p>update</p>
                                    <a href="{{url('edite-cart/'.$data->id)}}" class="btn btn-success fa fa-edit">  Update</a>
                                    <p>Remove</p>
                                    <a href="{{url('delete-cart/'.$data->id)}}" class="btn btn-danger fa fa-trash">  Remove</a>
                                </div>
                            </div>
                            <hr>
                        </div> 
                    </div> 
                    @php $total += $data->products->selling_price*$data->prod_qty; @endphp 
                @endforeach
            </div>
        @else
            <div class="card-body text-center">
                <h4>Your <i class="fa fa-shopping-cart "></i> Cart is Empty</h4>
            </div>
        @endif
        </div>
        <div class="card">
            <div class="card-footer">
                
                <h5>Total price:{{$total}}</h5>
                <a href="{{url('checkout')}}" class="btn btn-info" style="float:right; margin-top:-50px;">Checkout</a>
            </div>
            
        </div>
        <br><br>
        
        
</div>
@endsection