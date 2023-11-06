<?php

namespace App\Http\Controllers;

use App\Models\orders\Order;
use App\Models\products\Product;
use App\Models\products\ProductStockLog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $total_products = Product::count();

        $total_stock = ProductStockLog::whereIn('type',['initial','puchase'])->sum('qty');
        $total_sold = ProductStockLog::where('type','sales')->sum('qty');
        $product_in_stock = $total_stock - $total_sold;

        return view('dashboard.index', [
            "total_products" => $total_products,
            "total_stock" => $total_stock,
            "total_sold" => $total_sold,
            "product_in_stock" => $product_in_stock,
        ]);
    }
}
