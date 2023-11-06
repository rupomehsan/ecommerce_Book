<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\orders\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::with(['order_payment', 'user'])->get();
        dd($orders);
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
        $details = Product::find($id);
        return view('dashboard.product.details', compact('details'));
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

    public function destory($id)
    {

        return redirect()->back();
    }
}
