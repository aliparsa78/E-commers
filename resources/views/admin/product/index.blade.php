@extends('layouts/admin')

@section('content')
<div class="container" style="width:120%;">
<div class="card">
    <div class="card-header">
        <h4>Products</h4>
    </div>
    <div class="card-body">
        <div class="col-md-12">
        <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Id</th>
          <th>Catagory</th>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Sellign price</th>
          <th>image</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach($product as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->catagory->name}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->description}}</td>
          <td>{{$item->original_price}}</td>
          <td>{{$item->selling_price}}</td>
          <td>
          <img src="{{asset('admin/assets/upload/product/'.$item->image)}}" width="120px;" height="90px" alt="">
          </td>
          <td>
          <a href="{{url('edite-product/'.$item->id)}}" class="btn btn-primary">Edite</a>
          <a href="{{url('delete-product/'.$item->id)}}" class="btn btn-danger" >Delete</a>
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
