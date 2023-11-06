@extends('dashboard.layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <div style="margin-top: 100px;">
            <div class="card rounded-none">
                <div class="card-header pt-3 pb-1 d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="" style="font-size: 22px !important;">Product Discount</h4>
                    </div>
                    <div class="d-flex justify-content-between">
                        <!-- <label class="switch">
                                <input v-if="data.is_visible" type="checkbox" @change="toggle" checked="">
                                <input v-else type="checkbox" @change="toggle">
                                <span class="switch-state" style="background-color: #4c6887;"></span>
                            </label> -->
                        <div class="ps-3 d-flex gap-2">
                            <a href="{{ route('dashboard.product.view') }}" class="btn btn-sm btn-primary"> All </a>
                            <a href="{{ route('dashboard.product.edit', $data->id) }}" class="btn btn-sm btn-secondary"> Edit </a>
                            <a href="{{ route('dashboard.product.create') }}" class="btn btn-sm btn-info"> Create </a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-4 py-2 form_area custom_scroll">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="" method="POST">
                                @csrf
                                <h5 class="mb-3">{{ $data->product_name }}</h5>
                                <div class="form-group mb-4">
                                    <label for="" class="text-capitalize">product price</label>
                                    <input type="text" value="{{ $data->sales_price }}" readonly class="form-control my-1" name="main_price">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="" class="text-capitalize">product discount percent</label>
                                    <input type="text"
                                        value="{{$data->discount?$data->discount->discount_percent:''}}"
                                        onkeyup="calc_discount(`discount_percent`)"
                                        class="form-control my-1"
                                        name="discount_percent">
                                    @error('discount_percent')
                                        <div class="text-warning">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="" class="text-capitalize">discount flat amount</label>
                                    <input type="text"
                                        value="{{$data->discount?$data->sales_price - $data->discount->discount_price:''}}"
                                        onkeyup="calc_discount(`discount_flat_amount`)"
                                        class="form-control my-1"
                                        name="discount_flat_amount">
                                    @error('discount_flat_amount')
                                    <div class="text-warning">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="" class="text-capitalize">discount price</label>
                                    <input
                                        value="{{$data->discount?$data->discount->discount_price:$data->sales_price}}"
                                        type="text"
                                        readonly
                                        class="form-control my-1"
                                        name="discount_price">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="" class="text-capitalize">start date</label>
                                    <input type="date" onclick="event.target.showPicker()" value="{{ \Carbon\Carbon::now()->toDateString() }}" class="form-control my-1" name="start_date">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="" class="text-capitalize">end date</label>
                                    <input type="date" onclick="event.target.showPicker()" value="{{ \Carbon\Carbon::now()->addDays(60)->toDateString() }}" class="form-control my-1" name="end_date">
                                </div>

                                <div>
                                    <button class="btn btn-info">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
