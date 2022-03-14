@extends('layouts/admin')

@section('content')
    <div class="container py-5">
        <div class="card shadow">
            <div class="card-header">
                <h4>Order</h4>
            </div>
            <div class="card-body">
            <table class="table">
                    <thead>
                        <tr>
                            <th>user_id</th>
                            <th>status</th>
                            <th>Total Price</th>
                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order as $itme)
                        <tr>
                            <td>{{$itme->user_id}}</td>
                            <td>{{$itme->status == "0"? "pending":"completed"}}</td>
                            <td>{{$itme->total_price}}</td>
                            <td>
                                <a href="admin-view-order/{{$itme->id}}" class="btn btn-info">view</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection