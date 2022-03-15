@extends('layouts/admin')

@section('content')
    <div class="container py-5">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="mt-3">User Details <a href="{{url('users')}}" class="btn btn-info btn-sm float-end">Back</a></h4>
                
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 mt-2">
                            <label for="">Role</label>
                            <div class="border p-2"> {{$users->rol_us =='0'?'user':'admin'}}</div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="">Name</label>
                            <div class="border p-2"> {{$users->name}}</div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="">LastName</label>
                            <div class="border p-2"> {{$users->lname}}</div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="">Email</label>
                            <div class="border p-2"> {{$users->email}}</div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="">Phone</label>
                            <div class="border p-2"> {{$users->phone}}</div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="">Address1</label>
                            <div class="border p-2"> {{$users->address1}}</div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="">Address2</label>
                            <div class="border p-2"> {{$users->address2}}</div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="">City</label>
                            <div class="border p-2"> {{$users->city}}</div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="">Country</label>
                            <div class="border p-2"> {{$users->country}}</div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="">State</label>
                            <div class="border p-2"> {{$users->state}}</div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="">PinCode</label>
                            <div class="border p-2"> {{$users->pincode}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection