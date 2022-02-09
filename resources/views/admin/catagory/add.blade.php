@extends('layouts/admin')
@section('content')
    <div class="container" >
    <div class="card ">
        <div class="card-header">
            <h4>Add catagory</h4>
        </div>       
        <div class="card-body">
            <form action="{{url('insert-catagory')}}"method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 " >
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" id="add-data">
                    </div>
                    <div class="col-md-6" >
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug" id="add-data">
                    </div>
                    <div class="col-md-12">
                        <label for="">Describtion</label>
                        <textarea name="describtion" rows="2" class="form-control" id="add-data"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" >
                    </div>
                    <div class="col-md-6">
                        <label for="">Popular</label>
                        <input type="checkbox" name="popular" >
                    </div>
                    <div class="col-md-12">
                        <label for="">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title"id="add-data">
                    </div>
                    <div class="col-md-12">
                        <label for="">Meta Keyword</label>
                        <textarea name="meta_keyword"rows="2"class="form-control" id="add-data"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="">Meta Describtion</label>
                        <textarea name="meta_describtion"rows="2"class="form-control" id="add-data"></textarea>
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