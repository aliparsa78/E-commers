@extends('layouts.front')

@section('title')
    Cart Product
@endsection

@section('content')
<div class="container">
    
        <div class="card shadow productdata" id="add-to-cart">
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
                            </div>
                            <div class="col-md-3 ml-5">
                                <label for="Quentity">Quentity</label>
                                <div class="input-group text-center text-inline mb-3">
                                    <input type="number" name="qty" class=" inputqty mr-4" value="{{$data->prod_qty}}" style="width:70px; border-radius:5px;">
                                </div>
                            </div>
                            <div class="col-md-3 ml-5">
                                <p>Remove</p>
                                <a href="{{url('delete-cart/'.$data->id)}}" class="btn btn-danger fa fa-trash">  Remove</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    
                </div>
            </div>
        @endforeach
        </div>
    
</div>
@endsection