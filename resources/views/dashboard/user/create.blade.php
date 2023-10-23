@extends('dashboard.layouts.dashboard')
@section('content')
    <div class="container-fluid" style="margin-top: 100px;">
        <form action="{{ route('dashboard.user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div>
                    <div class="card-header py-3 position-sticky d-flex justify-content-between align-items-center">
                        <h6>Create user </h6>
                        <a href="{{ route('dashboard.user.view') }}" class="router-link-active btn btn-info btn-sm">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group col-md-6">
                        <label for=""> first_name </label>
                        <div class="mt-1 mb-3"><input type="text" name="first_name" class="form-control mb-1" /></div>
                        @error('first_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> last_name </label>
                        <div class="mt-1 mb-3"><input type="text" name="last_name" class="form-control mb-1" /></div>
                        @error('last_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> user_name </label>
                        <div class="mt-1 mb-3"><input type="text" name="user_name" class="form-control mb-1" /></div>
                        @error('user_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> password </label>
                        <div class="mt-1 mb-3"><input type="text" name="password" class="form-control mb-1" /></div>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> telegram_id </label>
                        <div class="mt-1 mb-3"><input type="text" name="telegram_id" class="form-control mb-1" /></div>
                        @error('telegram_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> telegram_name </label>
                        <div class="mt-1 mb-3"><input type="text" name="telegram_name" class="form-control mb-1" /></div>
                        @error('telegram_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> mobile_number </label>
                        <div class="mt-1 mb-3"><input type="text" name="mobile_number" class="form-control mb-1" /></div>
                        @error('mobile_number')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> photo </label>
                        <div class="mt-1 mb-3"><input type="file" name="photo" class="form-control mb-1" /></div>
                        @error('photo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> email </label>
                        <div class="mt-1 mb-3"><input type="text" name="email" class="form-control mb-1" /></div>
                        @error('email')
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
