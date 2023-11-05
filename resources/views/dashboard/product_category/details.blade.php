@extends('dashboard.layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <div style="margin-top: 100px;">
            <div class="card rounded-none">
                <div class="card-header pt-3 pb-1 d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="" style="font-size: 22px !important;">Product Categories</h4>
                    </div>
                    <div class="d-flex justify-content-between">
                        <!-- <label class="switch">
                                <input v-if="data.is_visible" type="checkbox" @change="toggle" checked="">
                                <input v-else type="checkbox" @change="toggle">
                                <span class="switch-state" style="background-color: #4c6887;"></span>
                            </label> -->
                        <div class="ps-3 d-flex gap-2">
                            <a href="{{ route('dashboard.product_category.view') }}" class="btn btn-sm btn-primary"> All </a>
                            <a href="{{ route('dashboard.product_category.edit', $details->id) }}" class="btn btn-sm btn-secondary"> Edit </a>
                            <a href="{{ route('dashboard.product_category.create') }}" class="btn btn-sm btn-info"> Create </a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-4 py-2 form_area custom_scroll">
                    <div class="custom_table nowrap table-responsive w-100 h-100 custom_scroll">
                        <table class="table table-bordered table-hover text-center">

                            <tbody>
                                <tr>
                                    <th>Category name:</th>
                                    <td>{{ $details->title }}</td>
                                </tr>

                                <tr>
                                    <th> parent:</th>
                                    <td>{{ $details->parent }}</td>
                                </tr>

                                <tr>
                                    <th>Product url:</th>
                                    <td>{{ $details->url }}</td>
                                </tr>

                                <tr>
                                    <th>image:</th>
                                    <td><img src="/{{ $details->image }}" height="80" width="100" alt=""></td>
                                </tr>

                                <tr>
                                    <th>meta_title:</th>
                                    <td>{{ $details->meta_title }}</td>
                                </tr>

                                <tr>
                                    <th>meta_information:</th>
                                    <td>{{ $details->meta_information }}</td>
                                </tr>

                                <tr>
                                    <th>meta_keywords:</th>
                                    <td>{{ $details->meta_keywords }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
