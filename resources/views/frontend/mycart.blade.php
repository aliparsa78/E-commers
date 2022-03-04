@extends('layouts.front')

@section('title')
    Cart Product
@endsection

@section('content')
<div class="container">
    
        <div class="card shadow productdata" id="add-to-cart">
        @php  $total = 0; @endphp
        <!-- $product get data from cart table -->
        @foreach($product as $data)
            <div class="card-body">
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
                                <a href="{{url('edite-cart/'.$data->id)}}" class="btn btn-success fa fa-trash">  Update</a>
                                <p>Remove</p>
                                <a href="{{url('delete-cart/'.$data->id)}}" class="btn btn-danger fa fa-trash">  Remove</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    
                </div>  
            </div>
            @php $total += $data->products->selling_price*$data->prod_qty; @endphp
            @endforeach
        </div>
        <div class="card">
            <div class="card-footer">
            <h5>Total price:{{$total}}</h5>
            </div>
        </div>
        
        
</div>
@endsection