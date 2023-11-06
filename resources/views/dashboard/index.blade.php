@extends('dashboard.layouts.dashboard')
@section('content')
    <div>
        <div>
            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5>Dashboard</h5>
                        </div>
                        <div class="col-lg-6">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends --><!-- Container-fluid starts -->
            <div class="container-fluid">
                <div class="card border-widgets shadow mb-4">
                    <div class="row m-0">
                        <div class="col-xl-3 col-6 xs-width-100">
                            <div class="crm-top-widget card-body">
                                <div class="d-flex">
                                    <i class="icon-shopping-cart font-primary align-self-center me-3"></i>
                                    <div>
                                        <span class="mt-0">Total Products</span>
                                        <h4 class="counter">
                                            {{ $total_products }}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-6 xs-width-100">
                            <div class="crm-top-widget card-body">
                                <div class="d-flex">
                                    <i class="icon-shopping-cart font-secondary align-self-center me-3"></i>
                                    <div>
                                        <span class="mt-0">Total Product Stock</span>
                                        <h4 class="counter"> {{ $total_stock  }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-6 xs-width-100">
                            <div class="crm-top-widget card-body">
                                <div class="d-flex">
                                    <i class="icon-shopping-cart font-success align-self-center me-3"></i>
                                    <div>
                                        <span class="mt-0">Total Sales</span>
                                        <h4 class="counter">{{ $total_sold }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-6 xs-width-100">
                            <div class="crm-top-widget card-body">
                                <div class="d-flex">
                                    <i class="icon-shopping-cart font-info align-self-center me-3"></i>
                                    <div>
                                        <span class="mt-0">Present Stock</span>
                                        <h4 class="counter">
                                            {{ $product_in_stock }}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Container-fluid starts -->
        </div>
    </div>
@endsection
