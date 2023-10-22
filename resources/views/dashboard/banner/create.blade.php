
@extends('dashboard.layouts.dashboard')
@section('content')
    <div class="container-fluid" style="margin-top: 100px;">
        <form action="{{ route('dashboard.banner.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div>
                    <div class="card-header py-3 position-sticky d-flex justify-content-between align-items-center">
                        <h6>Create user Role</h6>
                        <a href="#/admin/blog/category" class="router-link-active btn btn-info btn-sm">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group col-md-6">
                        <label for=""> title </label>
                        <div class="mt-1 mb-3"><input type="text" name="title" class="form-control mb-1" /></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> redirect_url </label>
                        <div class="mt-1 mb-3"><input type="text" name="redirect_url" class="form-control mb-1" /></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> image </label>
                        <div class="mt-1 mb-3"><input type="file" name="image" class="form-control mb-1" /></div>
                    </div>

                    
                </div>

                <div class="card-header py-2 position-sticky d-flex justify-content-start"><button type="submit"
                        class="btn btn-info btn-sm">Create</button></div>
            </div>
        </form>
    </div>
@endsection
