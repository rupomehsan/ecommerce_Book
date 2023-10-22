@extends('dashboard.layouts.dashboard')
@section('content')
    <div class="container-fluid" style="margin-top: 100px;">
        <form action="{{ route('dashboard.user.update', $editdata->id) }}" method="POST" enctype="multipart/form-data">
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
                        <label for=""> first_name </label>
                        <div class="mt-1 mb-3"><input type="text" value="{{$editdata->first_name}}" name="first_name" class="form-control mb-1" /></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> last_name </label>
                        <div class="mt-1 mb-3"><input type="text" value="{{$editdata->last_name}}" name="last_name" class="form-control mb-1" /></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> user_name </label>
                        <div class="mt-1 mb-3"><input type="text" value="{{$editdata->user_name}}" name="user_name" class="form-control mb-1" /></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> password </label>
                        <div class="mt-1 mb-3"><input type="text" value="{{$editdata->password}}" name="password" class="form-control mb-1" /></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> telegram_id </label>
                        <div class="mt-1 mb-3"><input type="text" value="{{$editdata->telegram_id}}" name="telegram_id" class="form-control mb-1" /></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> telegram_name </label>
                        <div class="mt-1 mb-3"><input type="text" value="{{$editdata->telegram_name}}" name="telegram_name" class="form-control mb-1" /></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> mobile_number </label>
                        <div class="mt-1 mb-3"><input type="text" value="{{$editdata->mobile_number}}" name="mobile_number" class="form-control mb-1" /></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> photo </label>
                        <br>
                        <img src="{{asset($editdata->photo)}}" height='80' width='100'>
                        <div class="mt-1 mb-3"><input type="file" value="{{$editdata->photo}}" name="photo" class="form-control mb-1" /></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> email </label>
                        <div class="mt-1 mb-3"><input type="text" value="{{$editdata->email}}" name="email" class="form-control mb-1" /></div>
                    </div>

                </div>

                <div class="card-header py-2 position-sticky d-flex justify-content-start"><button type="submit"
                        class="btn btn-info btn-sm">Create</button></div>
            </div>
        </form>
    </div>
@endsection
