<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\orders\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        // dd(request()->type);
        $condition = [];
        if (request()->has('type') && request()->input('type')) {
            $condition['order_status'] = request()->input('type');
        }
        $orders = Order::with(['order_payment', 'user', 'order_shipping_address'])->where($condition)->paginate(5);
        // dd($orders);
        return view('dashboard.order.index', compact('orders'));
    }

    public function create()
    {
        $product_categories = ProductCategory::orderBy('id', 'DESC')->get();

        return view('dashboard.product.create', compact('product_categories'));
    }

    public function store(Request $request)
    {


        return redirect()->route('dashboard.product.details', ['id' => $data->id])
            ->with('success', 'product created');
    }



    public function details($id)
    {
        $orderDetails = Order::with(['order_products.product:id,product_name'])->find($id);
        // dd($orderDetails);s
        return view('dashboard.order.details', compact('orderDetails'));
    }

    public function edit($id)
    {
        $data = Product::find($id);
        $product_categories = ProductCategory::orderBy('id', 'DESC')->get();
        return view('dashboard.product.edit', compact('data', 'product_categories'));
    }

    public function discount($id)
    {
        $data = Product::with('discount')->find($id);
        return view('dashboard.product.discount', compact('data'));
    }

    public function discount_submit($id)
    {


        return redirect()->back()->with('success', 'discount set successfully.');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('dashboard.product.details', ['id' => $data->id])
            ->with('success', 'product information updated');
    }

    public function order_status_update(Request $request, $id)
    {
        // dd($id,$request->all());
        $order = Order::where('id',$id)->first();
        $order->order_status = $request->order_status;
        $order->update();
        return redirect()->route('dashboard.order.all')
            ->with('success', 'Order status updated');
    }

    public function destory($id)
    {

        return redirect()->back();
    }
}
