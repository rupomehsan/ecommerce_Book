@extends('dashboard.layouts.dashboard')
@section('content')
    
<div class="container-fluid" style="margin-top: 100px;">
    <form>
        <div class="card">
            <div>
                <div class="card-header py-3 position-sticky d-flex justify-content-between align-items-center">
                    <h6>Create blog category</h6>
                    <a href="#/admin/blog/category" class="router-link-active btn btn-info btn-sm">Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group col-md-6">
                    <label for=""> Category Name </label>
                    <div class="mt-1 mb-3"><input type="text" name="title" class="form-control mb-1" /></div>
                </div>
            </div>
            <div class="card-header py-2 position-sticky d-flex justify-content-start"><button class="btn btn-info btn-sm">Create</button></div>
        </div>
    </form>
</div>
@endsection
