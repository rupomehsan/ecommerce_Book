@extends('dashboard.layouts.dashboard')
@section('content')
<div class="container-fluid">
    <div class="mt-100">
        <div class="card rounded-none">
            <div class="card-header pt-3 pb-1 d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="" style="font-size: 22px !important;">Order Details</h4>
                </div>

            </div>
            <div class="order-card m-3">
                <div>
                    <h5 class="p-3 order-bg text-white print-reset">অর্ডার এর বিবরণ </h5>
                </div>
                <div class="d-flex justify-content-between mx-5 my-3 ">
                    <p class="text-dark fw-bolder">শাখাঃ মোমেনশাহী মহানগর</p>
                    <p class="text-dark fw-bolder">তারিখঃ {{ $orderDetails->created_at->formatLocalized('%d / %m / %Y',
                        'bn') }}</p>
                </div>
                <div class="card-body px-4 py-2">
                    <div class="nowrap table-responsive w-100 h-100 ">
                        <table class="table table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th style="width: 50px;">ক্রমিক নং</th>
                                    <th style="width: 50px;">উপকরণ</th>
                                    <th style="width: 50px;">সংখ্যা</th>
                                    <th style="width: 50px;">একক মূল্য</th>
                                    <th style="width: 50px;">মোট মূল্য</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $orderDetails->order_products as $item)
                                <tr>
                                    <td>
                                        {{$loop->index + 1}}
                                        <div class="print-d-none">
                                            <a href="" class="text-danger">Delete</a>
                                        </div>
                                    </td>
                                    <td>{{$item->product->product_name}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>{{$item->product_price}} ট</td>
                                    <td>{{$item->qty * $item->product_price}} ট</td>

                                </tr>
                                @endforeach

                                <tr>
                                    <td colspan="4" class="text-end">মোট মূল্যঃ </td>
                                    <td> {{$orderDetails->total_price}} ট</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-end">ব্যাংক চার্জঃ </td>
                                    <td>৩০ ট</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-end" class="text-end">কুরিয়ার চার্জঃ </td>
                                    <td>১2০ ট</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-end">সর্বমোট মূল্যঃ </td>
                                    <td>{{$orderDetails->total_price + 120 +30}} ট</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <form method="post" action="{{route('dashboard.order.statusUpdate',$orderDetails->id)}}">
                   @csrf
                    <div class="py-2 order-bg d-flex justify-content-end px-3 gap-3 print-d-none">
                        <select name="order_status" class="form-control w-25" id="">
                            <option disabled selected>Select status</option>
                            <option {{$orderDetails->order_status == 'pending' ? 'selected' : ''}}
                                value="pending">Pending</option>
                            <option {{$orderDetails->order_status == 'accepted' ? 'selected' : ''}}
                                value="accepted">Accepted</option>
                            <option {{$orderDetails->order_status == 'processing' ? 'selected' : ''}}
                                value="processing">Processing</option>
                            <option {{$orderDetails->order_status == 'delivered' ? 'selected' : ''}}
                                value="delivered">Delivered</option>
                        </select>
                        <button type="submit" class="btn  border-light text-white">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
