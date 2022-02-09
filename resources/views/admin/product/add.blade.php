@extends('layouts/admin')
@section('content')
    <div class="container" >
    <div class="card ">
        <div class="card-header">
            <h4>Add Products</h4>
        </div>       
        <div class="card-body">
            <form action="{{url('insert-product')}}"method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Catagory</label>
                        <select name="cat_id" class="form-select form-control" id="add-data">
                        @foreach($catagory as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            
                        @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 " >
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" id="add-data">
                    </div>
                    <div class="col-md-6" >
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug" id="add-data">
                    </div>
                    <div class="col-md-12">
                        <label for="">Samall Describtion</label>
                        <textarea name="small_description" rows="2" class="form-control" id="add-data"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">Describtion</label>
                        <textarea name="description" rows="2" class="form-control" id="add-data"></textarea>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="">orginal Price</label>
                        <input type="number" name="orginal_price" class="form-control" id="add-data">
                    </div>
                    <div class="col-md-6">
                        <label for="">Selling Price</label>
                        <input type="number" name="selling_price"class="form-control" id="add-data">
                    </div>
                    <div class="col-md-6">
                        <label for="">Tex</label>
                        <input type="number" name="tax" class="form-control" id="add-data">
                    </div>
                    <div class="col-md-6">
                        <label for="">Quantity</label>
                        <input type="number" name="qty" class="form-control" id="add-data">
                    </div>
                    <div class="col-md-6">
                        <label for="">Status</label>
                        <input type="checkbox" name="status"  id="add-data">
                    </div>
                    <div class="col-md-6">
                        <label for="">Trending</label>
                        <input type="checkbox" name="trending"  id="add-data">
                    </div>
                    <div class="col-md-12">
                        <label for="">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title"id="add-data">
                    </div>
                    <div class="col-md-12">
                        <label for="">Meta Keyword</label>
                        <textarea name="meta_keyword" rows="1"class="form-control" id="add-data"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">Meta Describtion</label>
                        <textarea name="meta_description"rows="1"class="form-control" id="add-data"></textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control mb-5" id="add-data">
                    </div>
                    <div class="col-md-12 ">
                        <button type="submit" class="btn btn-primary">submit</button>
                     </div>
                </div>
            </form>
        </div>
    </div>
    </div>






@endsection
</div>
</main>