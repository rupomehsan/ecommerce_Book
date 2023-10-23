@extends('dashboard.layouts.dashboard')
@section('content')
    <div class="container-fluid" style="margin-top: 100px;">
        <form action="{{ route('dashboard.product_category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div>
                    <div class="card-header py-3 position-sticky d-flex justify-content-between align-items-center">
                        <h6>Product Category create</h6>
                        <a href="{{ route('dashboard.product_category.view') }}" class="router-link-active btn btn-info btn-sm">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group col-md-6">
                        <label for=""> title </label>
                        <div class="mt-1 mb-3"><input type="text" name="title" class="form-control mb-1" /></div>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6 my-3">
                        <label for="" class="my-2"> parent </label>
                        <select name="parent" id="cars" class="form-control">
                            <option value="" selected disabled>select parent category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->parent }}</option>
                            @endforeach
                        </select>
                        @error('parent')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> url </label>
                        <div class="mt-1 mb-3"><input type="text" name="url" class="form-control mb-1" /></div>
                        @error('url')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> image </label>
                        <div class="mt-1 mb-3"><input type="file" name="image" class="form-control mb-1" /></div>
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> meta_title </label>
                        <div class="mt-1 mb-3"><input type="text" name="meta_title" class="form-control mb-1" /></div>
                        @error('meta_title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> meta_information </label>
                        <div class="mt-1 mb-3"><input type="text" name="meta_information" class="form-control mb-1" />
                        </div>
                        @error('meta_information')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> meta_keywords </label>
                        <div class="mt-1 mb-3"><input type="text" name="meta_keywords" class="form-control mb-1" /></div>
                        @error('meta_keywords')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="card-header py-2 position-sticky d-flex justify-content-start"><button type="submit"
                        class="btn btn-info btn-sm">Create</button></div>
            </div>
        </form>
    </div>
@endsection
