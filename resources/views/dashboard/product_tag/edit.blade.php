
@extends('dashboard.layouts.dashboard')
@section('content')
    <div class="container-fluid" style="margin-top: 100px;">
        <form action="{{ route('dashboard.product_tag.update',$editdata->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div>
                    <div class="card-header py-3 position-sticky d-flex justify-content-between align-items-center">
                        <h6>Product tag Edit</h6>
                        <a href="#/admin/blog/category" class="router-link-active btn btn-info btn-sm">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group col-md-6">
                        <label for=""> title </label>
                        <div class="mt-1 mb-3"><input type="text" value="{{$editdata->title}}" name="title" class="form-control mb-1" /></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> parent </label>
                        <div class="mt-1 mb-3"><input type="text" value="{{$editdata->parent}}" name="parent" class="form-control mb-1" /></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> url </label>
                        <div class="mt-1 mb-3"><input type="text" value="{{$editdata->url}}"  name="url" class="form-control mb-1" /></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> image </label>
                        <img src="{{asset($editdata->image)}}" height="80" width='100' alt="">
                        <div class="mt-1 mb-3"><input type="file" value="{{$editdata->image}}"  name="image" class="form-control mb-1" /></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> meta_title </label>
                        <div class="mt-1 mb-3"><input type="text" value="{{$editdata->meta_title}}"  name="meta_title" class="form-control mb-1" /></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> meta_information </label>
                        <div class="mt-1 mb-3"><input type="text" value="{{$editdata->meta_information}}"  name="meta_information" class="form-control mb-1" /></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> meta_keywords </label>
                        <div class="mt-1 mb-3"><input type="text" value="{{$editdata->meta_keywords}}"  name="meta_keywords" class="form-control mb-1" /></div>
                    </div>

                </div>

                <div class="card-header py-2 position-sticky d-flex justify-content-start"><button type="submit"
                        class="btn btn-info btn-sm">Update</button></div>
            </div>
        </form>
    </div>
@endsection
