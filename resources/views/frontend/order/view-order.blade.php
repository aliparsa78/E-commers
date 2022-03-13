
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
            <?php if($order->count() > 0){
            ?>
            <div class="col-md-6">   
                <div class="card p-4">
                    <label>firstname</label>
                    <div class="border p-2">{{$order->fname}}</div>
                    <label>lname</label>
                    <div class="border p-2">{{$order->lname}}</div>
                    <label>email</label>
                    <div class="border p-2">{{$order->email}}</div>
                    <label>phone</label>
                    <div class="border p-2">{{$order->phone}}</div>
                    <label>shopping address</label>
                    <div class="border p-2">
                        {{$order->address1}} <br>
                        {{$order->address2}} <br>
                        {{$order->city}} <br>
                        {{$order->status}} <br>
                        {{$order->country}}
                    </div>

                    <label>zipcode</label>
                    <div class="border p-2">{{$order->id}}</div>
                    

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
                <h4>Total Price:{{$order->total_price}} </h4>
            </div>
            <?php }
            else{
                ?>
                return "you don't have any ordered data";
             <?php }
            ?>
        </div>
    </div>
@endsection