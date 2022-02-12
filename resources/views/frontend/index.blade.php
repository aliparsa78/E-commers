
@extends('layouts.front')

@section('title')
 WELCOME TO E-SHOP 
@endsection

@section('content')

@include('layouts.inc.slider')
<div class="py-5">
    <div class="container">
        <div class="row">
            <h1>Futured Products</h1>
            <div class="owl-carousel owl-theme">  
                @foreach($future_product as $item)
                    <div class="item">
                        <div class="card">
                            <img src="{{asset('admin/assets/upload/product/'.$item->image)}}" alt="">
                            <div class="card-body">
                                <h5>{{$item->name}}</h5>
                                <p>{{$item->selling_price}}</p>
                                
                            </div>
                        </div>
                    </div>
                @endforeach 
            </div>
        </div>
    </div>
</div>
<!--   End Future Product    --->

<div class="py-1">
    <div class="container">
        <div class="row">
            <h1>Trending Catagory</h1><br><br>
            <div class="owl-carousel owl-theme">  
                @foreach($trednig_catagory as $trend)
                    <div class="item">
                        <a href="{{url('view-catagory/'.$trend->id)}}">
                            <div class="card">
                                <img src="{{asset('admin/assets/upload/catagory/'.$trend->image)}}" alt="">
                                <div class="card-body">
                                    <h5>{{$trend->name}}</h5>
                                    <p>{{$trend->selling_price}}</p>  
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach 
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
   $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
@endsection