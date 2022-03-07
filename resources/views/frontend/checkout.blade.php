@extends('layouts.front')

@section('title')
 Checkout  
@endsection

@section('content')
    <div class="container mt-5">
    <form action="{{url('place-order')}}" method="Post">
        @csrf
        <div class="row">
            <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h4>Basic Detail</h4>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6">
                                    <label">FirstName</label>
                                    <input type="text"value="{{Auth::user()->name}}" name="fname" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label">LastName</label>
                                    <input type="text" value="{{Auth::user()->lname}}" name="lname" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label">Email</label>
                                    <input type="email" value="{{Auth::user()->email}}" name="email" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label">Phone</label>
                                    <input type="text" value="{{Auth::user()->phone}}" name="phone" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label">address1</label>
                                    <input type="text" value="{{Auth::user()->address1}}" name="address1" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label">address2</label>
                                    <input type="text" value="{{Auth::user()->address2}}" name="address2" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label">City</label>
                                    <input type="text" value="{{Auth::user()->city}}" name="city" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label">state</label>
                                    <input type="text" value="{{Auth::user()->state}}" name="state" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label">Country</label>
                                    <input type="text" value="{{Auth::user()->country}}" name="country" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label">Pincode</label>
                                    <input type="text"value="{{Auth::user()->pincode}}" name="pincode" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h4>Order Details</h4>
                            <hr>
                                <table class="table table-checkout shadow">
                                    <tbody>
                                    <th>Name</th>
                                    <th>Qty</th>
                                    <th>Selling_price</th>
                                    @foreach($cartitem as $item)
                                        <tr>                                      
                                            <td>{{$item->products->name}}</td>
                                            <td>{{$item->prod_qty}}</td>
                                            <td>{{$item->products->selling_price}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>                        
                        </div>
                        <input type="submit" class="btn btn-primary mb-2" style="width:190px; margin-left:230px;" value="Place Order">

                    </div>

                
                
            </div>
        </div>
    </form>
    </div>
@endsection