@extends('dashboard.layouts.dashboard')
@section('content')
<div class="container-fluid">
    <div style="margin-top: 100px;">
        <div class="card rounded-none">
            <div class="card-header pt-3 pb-1 d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="" style="font-size: 22px !important;">All Orders</h4>
                </div>
                <div class="d-flex justify-content-between">
                    <!-- <label class="switch">
                            <input v-if="data.is_visible" type="checkbox" @change="toggle" checked="">
                            <input v-else type="checkbox" @change="toggle">
                            <span class="switch-state" style="background-color: #4c6887;"></span>
                        </label> -->
                    <div class="ps-3 d-flex gap-2">
                        <a href="{{ route('dashboard.product.create') }}" class="btn btn-sm btn-info"> Create </a>
                    </div>
                </div>
            </div>
            <div class="card-body px-4 py-2 form_area custom_scroll">
                <div class="custom_table nowrap table-responsive w-100 h-100 custom_scroll">
                    <table class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th style="width: 50px;">Id</th>
                                <th style="width: 50px;text-align:left;">Order Id</th>
                                <th style="width: 50px;">Payment Id</th>
                                <th style="width: 200px">Customer</th>
                                <th style="width: 50px;">Phone</th>
                                <th style="width: 50px;">Total</th>
                                <th style="width: 50px;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{$item->invoice_id}}</td>
                                <td>{{$item->order_product?$item->order_product->trx_id:"N/A"}}</td>
                                <td>{{$item->user->full_name}}</td>
                                <td>{{$item->invoice_id}}</td>
                                <td>{{$item->invoice_id}}</td>
                                <td>{{$item->invoice_id}}</td>
                                <td class="text-start">
                                    <b>
                                        {{ $item->product_name }}
                                    </b>
                                    <div class="d-flex mt-2 gap-2 flex-wrap border-top py-1">
                                        <a href="{{route('dashboard.product.edit',$item->id)}}" class="text-info"> Edit
                                        </a>
                                        <a href="{{route('dashboard.product.details',$item->id)}}" class="text-warning">
                                            Details </a>
                                        <a href="{{route('dashboard.product.discount',$item->id)}}"
                                            class="text-primary"> Discount </a>
                                        <a onclick="return confirm(`delete data?`)"
                                            href="{{route('dashboard.product.destory',$item->id)}}"
                                            class="text-danger">delete </a>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer py-2">
                <nav aria-label="Page navigation example" class="">

                    {{ $all_data->links() }}

                    {{-- <ul class="pagination pagination-warning">
                        <li class="page-item">
                            <a class="page-link"><span>« Previous</span></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link"
                                href="http://127.0.0.1:8000/api/v1/navbar-menu-details/all?orderByType=DESC&amp;sub_menu_slug=vrti-notis-82634719&amp;page=1"><span>1</span></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link"><span>Next »</span></a>
                        </li>
                    </ul> --}}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
