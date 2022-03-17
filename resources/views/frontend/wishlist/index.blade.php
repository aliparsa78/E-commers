    @extends('layouts.front')

    @section('title')
        Cart Product
    @endsection

    @section('content')

    <div class="container">
        <div class="card shadow mt-4">
            
                @if($wishlist->count()>0)
                <div class="card-body">
                @foreach($wishlist as $data)
                    <div class="row">   
                        <div class="col-md-1">
                            <img src="{{asset('admin/assets/upload/product/'.$data->products->image)}}" width="100%"  alt="">
                        </div>
                        <div class="col-md-11 ">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-4">
                                            {{$data->products->name}}
                                        </div>
                                        <div class="col-md-4">
                                            {{$data->products->selling_price}}
                                        </div>
                                        <div class="col-md-4">
                                            @if($data->products->qty >0)
                                            <p class="text-success font-weight-bold">In stock</p>
                                            @else
                                            <p class="text-success font-weight-bold">Out of stock</p>
                                            @endif
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-5 ">
                                    <p>
                                    @if($data->products->qty > 0)
                                    <form action="{{url('add-to-cart')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="qty" value="1">
                                        <input type="hidden" name="prod_id" value="{{$data->products->id}}" class="prod_id">

                                        <button type="submit" class="btn btn-success">add to cart <i class="fa fa-user"></i></button>
                                    </form>
                                    @endif
                                    <a href="{{url('delete-wish/'.$data->id)}}" class="btn btn-danger fa fa-trash">  Remove</a>
                                    </p>
                                </div>
                            </div>
                            <hr>
                        </div> 
                    </div> 
                @endforeach
            </div>
                @else
                <h4>Your wish list is empty !!</h4>
                @endif
            </div>
        </div>
    </div>
    @endsection