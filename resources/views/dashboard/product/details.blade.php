@extends('dashboard.layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <div style="margin-top: 100px;">
            <div class="card rounded-none">
                <div class="card-header pt-3 pb-1 d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="" style="font-size: 22px !important;">Product</h4>
                    </div>
                    <div class="d-flex justify-content-between">
                        <!-- <label class="switch">
                                <input v-if="data.is_visible" type="checkbox" @change="toggle" checked="">
                                <input v-else type="checkbox" @change="toggle">
                                <span class="switch-state" style="background-color: #4c6887;"></span>
                            </label> -->
                        <div class="ps-3 d-flex gap-2">
                            <a href="{{ route('dashboard.product.view') }}" class="btn btn-sm btn-primary"> All </a>
                            <a href="{{ route('dashboard.product.edit', $details->id) }}" class="btn btn-sm btn-secondary"> Edit </a>
                            <a href="{{ route('dashboard.product.create') }}" class="btn btn-sm btn-info"> Create </a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-4 py-2 form_area custom_scroll">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="/{{ $details->image }}" width="200" alt="">
                        </div>
                        <div class="col-md-8">
                            <style>
                                tr th:nth-child(1){
                                    width: 150px;
                                }
                                tr td{
                                    padding: 5px;
                                }
                                tr td:nth-child(2){
                                    padding: 0px 10px;
                                }
                            </style>
                            <table>
                                <tr>
                                    <th class="text-capitalize">product name</th>
                                    <td>:</td>
                                    <td>{{ $details->product_name }}</td>
                                </tr>
                                <tr>
                                    <th class="text-capitalize">product url</th>
                                    <td>:</td>
                                    <td>{{ $details->product_url }}</td>
                                </tr>
                                <tr>
                                    <th class="text-capitalize">is top product</th>
                                    <td>:</td>
                                    <td>{{ $details->is_top_product }}</td>
                                </tr>
                                <tr>
                                    <th class="text-capitalize">category</th>
                                    <td>:</td>
                                    <td>{{ $details->selected_categories }}</td>
                                </tr>
                                <tr>
                                    <th class="text-capitalize">cost</th>
                                    <td>:</td>
                                    <td>{{ $details->cost }}</td>
                                </tr>
                                <tr>
                                    <th class="text-capitalize">sales price</th>
                                    <td>:</td>
                                    <td>{{ $details->sales_price }}</td>
                                </tr>
                                <tr>
                                    <th class="text-capitalize">stock</th>
                                    <td>:</td>
                                    <td>{{ $details->stock }}</td>
                                </tr>
                                <tr>
                                    <th class="text-capitalize">low stock</th>
                                    <td>:</td>
                                    <td>{{ $details->low_stock }}</td>
                                </tr>
                                <tr>
                                    <th class="text-capitalize">video url</th>
                                    <td>:</td>
                                    <td>{{ $details->video_url }}</td>
                                </tr>
                                <tr>
                                    <th colspan="3">
                                        <br>
                                        SEO
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-capitalize">meta title</th>
                                    <td>:</td>
                                    <td>{{ $details->meta_title }}</td>
                                </tr>
                                <tr>
                                    <th class="text-capitalize">meta keywords</th>
                                    <td>:</td>
                                    <td>{{ $details->meta_keywords }}</td>
                                </tr>
                                <tr>
                                    <th class="text-capitalize">meta description</th>
                                    <td>:</td>
                                    <td>{{ $details->meta_description }}</td>
                                </tr>
                                <tr>
                                    <th class="text-capitalize">schema tag</th>
                                    <td>:</td>
                                    <td>{{ $details->schema_tag }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" my-2">
                <div class="card">
                    <div class="card-header p-1 text-capitalize">
                        <h4>short description</h4>
                    </div>
                    <div class="card-body">
                        {!! $details->short_description !!}
                    </div>
                </div>
            </div>
            
            <div class=" my-2">
                <div class="card">
                    <div class="card-header p-1 text-capitalize">
                        <h4>description</h4>
                    </div>
                    <div class="card-body">
                        {!! $details->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
