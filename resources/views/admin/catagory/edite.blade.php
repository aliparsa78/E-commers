@extends('layouts/admin')
@section('content')
    <div class="container" >
    <div class="card ">
        <div class="card-header">
            <h4>Edite catagory</h4>
        </div>       
        <div class="card-body">
            <form action="{{url('update-catagory/'.$catagory->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="col-md-6 " >
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" id="add-catagory" value="{{$catagory->name}}">
                    </div>
                    <div class="col-md-6" >
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug" id="add-catagory" value="{{$catagory->slug}}">
                    </div>
                    <div class="col-md-12">
                        <label for="">Describtion</label>
                        <textarea name="describtion" rows="1" class="form-control" id="add-catagory">{{$catagory->describtion}}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" id="add-catagory" {{$catagory->status =='1'?'checked':''}}>
                    </div>
                    <div class="col-md-6">
                        <label for="">Popular</label>
                        <input type="checkbox" name="popular"  {{$catagory->popular =='1'?'checked':''}}>
                    </div>
                    <div class="col-md-12">
                        <label for="">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title"id="add-catagory" value="{{$catagory->meta_title}}">
                    </div>
                    <div class="col-md-12">
                        <label for="">Meta Keyword</label>
                        <textarea name="meta_keyword"rows="1"class="form-control" id="add-catagory">{{$catagory->meta_keyword}}</textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">Meta Describtion</label>
                        <textarea name="meta_describtion"rows="2"class="form-control" id="add-catagory">{{$catagory->meta_describ}}</textarea>
                    </div>
                    @if($catagory->image)
                        <img src="{{asset('admin/assets/upload/catagory/'.$catagory->image)}}" name="curent_image" id="e-img" ><br><br>
                    @endif
                    
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control" id="add-catagory">
                    </div>
                    <div class="col-md-12 mb-6">
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