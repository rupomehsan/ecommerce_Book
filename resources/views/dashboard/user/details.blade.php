@extends('dashboard.layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <div style="margin-top: 100px;">
            <div class="card rounded-none">
                <div class="card-header pt-3 pb-1 d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="bn" style="font-size: 22px !important;">User Details</h4>
                    </div>
                    <div class="d-flex justify-content-between">
                        <!-- <label class="switch">
                                <input v-if="data.is_visible" type="checkbox" @change="toggle" checked="">
                                <input v-else type="checkbox" @change="toggle">
                                <span class="switch-state" style="background-color: #4c6887;"></span>
                            </label> -->
                        <div class="ps-3 d-flex gap-2"><a href="#/admin/blog/category" class="btn btn-sm btn-info"> All
                                Category </a><a href="#/admin/blog/create" class="btn btn-sm btn-info"> Create </a></div>
                    </div>
                </div>
                <div class="card-body px-4 py-2 form_area custom_scroll">
                    <div class="custom_table nowrap table-responsive w-100 h-100 custom_scroll">
                        <table class="table table-bordered table-hover text-center">

                            <tbody>
                                <tr>
                                    <th>First name:</th>
                                    <td>{{ $user_details->first_name }}</td>
                                </tr>

                                <tr>
                                    <th> Last name:</th>
                                    <td>{{ $user_details->last_name }}</td>
                                </tr>

                                <tr>
                                    <th>Product url:</th>
                                    <td>{{ $user_details->user_name }}</td>
                                </tr>

                                <tr>
                                    <th>Telegram id:</th>
                                    <td>{{ $user_details->telegram_id }}</td>
                                </tr>

                                <tr>
                                    <th>Telegram name:</th>
                                    <td>{{ $user_details->telegram_name }}</td>
                                </tr>

                                <tr>
                                    <th>Mobile number:</th>
                                    <td>{{ $user_details->mobile_number }}</td>
                                </tr>

                                <tr>
                                    <th>Image:</th>
                                    <td><img src="/{{ $user_details->photo }}" height="80" width="100" alt=""></td>
                                </tr>

                                <tr>
                                    <th>Email:</th>
                                    <td>{{ $user_details->email }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
