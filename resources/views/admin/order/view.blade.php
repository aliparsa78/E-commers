
@extends('layouts.front')
<base href="../public">
@section('title')
 My Order
@endsection

@section('content')
    <div class="container py-5">
        <div class="card-header bg-info font-weight-bold ">
            Order view
        </div>
        <div class="row">
            <div class="col-md-6">   
                    <div class="card p-4">
                        <label>firstname</label>
                        <div class="border1 p-2">{{$order->fname}}</div>
                        <label>lname</label>
                        <div class="border1 p-2">{{$order->lname}}</div>
                        <label>email</label>
                        <div class="border1 p-2">{{$order->email}}</div>
                        <label>phone</label>
                        <div class="border1 p-2">{{$order->phone}}</div>
                        <label>shopping address</label>
                        <div class="border1 p-2">
                            {{$order->address1}} <br>
                            {{$order->address2}} <br>
                            {{$order->city}} <br>
                            {{$order->status}} <br>
                            {{$order->country}}
                        </div>

                        <label>zipcode</label>
                        <div class="border1 p-2">{{$order->id}}</div>
                        

                    </div>
            </div>
            <div class="col-md-6">
                <table class="table">   
                    <thead>
                        <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Quantity Price</th>
                                    <th>Price</th>
                                    <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                            @php $id = 1; @endphp
                            @foreach($order->orderItems as $item)
                            <tr>
                                <td>{{$id++}}</td>
                                <td>{{$item->products->name}}</td>
                                <td>{{$item->qty}}</td>
                                <td>{{$item->products->selling_price}}</td>
                                <td>
                                    <img src="{{asset('admin/assets/upload/product/'.$item->products->image)}}" width="100px">
                                </td>
                            </tr>
                            <tr>
                                
                            </tr>
                            <tr>
                                
                            </tr>
                        
                            @endforeach
                    </tbody>
                </table>
                <h4>Total Price:{{$order->total_price}} </h4> <br>
                <div class="select">
                <form action="{{url('update-order/'.$order->id)}}" method="POST">
                    @csrf
                    <select class="form-select form-control" name="status" aria-label="Default select example">
                        <option {{$order->status == '0'?'selected':'' }}  value="0">Pending</option>
                        <option {{$order->status == '1'?'selected':'' }} value="1">Complited</option>
                    </select> <br>
                    <input type="submit" name="update" value="update" class="btn btn-info ">
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection