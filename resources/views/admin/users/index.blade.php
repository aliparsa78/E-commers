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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $itme)
                        <tr>
                            <td>{{$itme->name.''.$itme->lname}}</td>
                            <td>{{$itme->email}}</td>
                            <td>{{$itme->phone}}</td>
                            <td>
                                <a href="user-view/{{$itme->id}}" class="btn btn-info">view</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection