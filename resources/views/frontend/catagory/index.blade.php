
@extends('layouts.front')

@section('title')
 Catagory 
@endsection

@section('content')
    <div class="py-5">
        <div class="container">
            <h2>All Catagories</h2><br><br>
            @if(Session::get('status'))
                <p class="text-danger">{{Session::get('status')}}</p>
            @endif
            <div class="row">
                @foreach($catagory as $item)
                    <div class="col-md-3 mb-4">
       
                        <a href="{{ url('view-catagory/'.$item->id)}}">
                            <div class="card">
                                <img src="{{asset('admin/assets/upload/catagory/'.$item->image)}}" alt="">
                                <div class="card-body">
                                    <h4>{{$item->name}}</h4>
                                    <p>{{$item->describtion}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach 
            </div>
        </div>
    </div>
@endsection

