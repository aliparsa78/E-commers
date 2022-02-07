@extends('layouts/admin')

@section('content')
<div class="container" >
    <div class="card " style="margint-bottom:200px; padding-bottom:100px;">
<div class="card">
    <div class="card-header">
        <h4>Catagory</h4>
    </div>
    <div class="card-body">
        <div class="col-md-12">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($catagory as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td lenght="100px;">
                         
                           {{$item->describtion}}
                           
                           </td>
                            
                            
                        <td>
                            <img src="{{asset('admin/assets/upload/catagory/'.$item->image)}}" width="150px;" height="150px" alt="">
                        </td>
                        <td>
                            <button class="btn btn-primary">Edite</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        
    </div>
</div>
</div>
@endsection
