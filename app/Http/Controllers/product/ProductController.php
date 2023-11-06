<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\products\Product;
use App\Models\products\ProductCategory;
use App\Models\products\ProductOffer;
use App\Models\products\ProductStock;
use App\Models\products\ProductStockLog;
use App\Models\siturl\SiteUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function create()
    {
        $product_categories = ProductCategory::orderBy('id', 'DESC')->get();

        return view('dashboard.product.create', compact('product_categories'));
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'product_name' => ['required'],
            'product_url' => ['required', 'unique:products'],
            'selected_categories' => ['required', 'numeric'],

            'sales_price' => ['required', 'numeric'],
            'stock' => ['required', 'numeric', 'integer'],
            'low_stock' => ['required', 'numeric', 'integer'],

            'image' => ['required'],
            'short_description' => ['required'],
            'description' => ['required'],

            'meta_title' => ['required'],
            'meta_keywords' => ['required'],
            'meta_description' => ['required'],
            // 'schema_tag' => ['required'],

        ]);

        $data = new Product();

        $data->product_name = $request->product_name;
        $data->product_url = $request->product_url;

        $data->selected_categories = $request->selected_categories;
        $data->short_description = $request->short_description;
        $data->description = $request->description;

        if ($request->hasFile('image')) {
            $data->image = Storage::put('/uploads/products', request()->file('image'));
        }

        $data->cost = $request->cost;
        $data->sales_price = $request->sales_price;

        $data->stock = $request->stock;
        $data->low_stock = $request->low_stock;

        $data->meta_title = $request->meta_title;
        $data->meta_keywords = $request->meta_keywords;
        $data->meta_description = $request->meta_description;
        $data->schema_tag = $request->schema_tag;
        $data->video_url = $request->video_url;
        $data->save();

        $url = SiteUrl::where('url_for_table','products')->where('url_for_table_id',$data->id)->first();
        if(!$url){
            $url = new SiteUrl();
        }
        $url->url = $data->product_url;
        $url->save();

        return redirect()->route('dashboard.product.details', ['id' => $data->id])
            ->with('success', 'product created');
    }

    public function view()
    {
        $all_data = Product::with([
                'discount'
            ])
            ->orderBy('id', 'DESC')
            ->paginate(10);

        foreach ($all_data->items() as $item) {
            $total_sold = ProductStockLog::where('product_id',$item->id)->where('type','sales')->sum('qty');
            $total_stock = ProductStockLog::where('product_id',$item->id)->whereIn('type',['initial','puchase'])->sum('qty');

            $item->total_sold = $total_sold;
            $item->total_stock = $total_stock;
        }
        return view('dashboard.product.index', compact('all_data'));
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
        $this->validate(request(), [
            'discount_percent' => ['required'],
            'discount_flat_amount' => ['required'],
            'discount_price' => ['required'],
        ]);

        $discount = ProductOffer::create([
            'product_id' => $id,
            "start_date" => request()->start_date,
            "end_date" => request()->end_date,
            "main_price" => request()->main_price,
            "discount_percent" => request()->discount_percent,
            "discount_flat_amount" => request()->discount_flat_amount,
            "discount_price" => request()->discount_price,
        ]);

        return redirect()->back()->with('success', 'discount set successfully.');
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'product_name' => ['required'],
            'selected_categories' => ['required', 'numeric'],

            'sales_price' => ['required', 'numeric'],
            'stock' => ['required', 'numeric', 'integer'],
            'low_stock' => ['required', 'numeric', 'integer'],

            'short_description' => ['required'],
            'description' => ['required'],

            'meta_title' => ['required'],
            'meta_keywords' => ['required'],
            'meta_description' => ['required'],
            // 'schema_tag' => ['required'],

        ]);

        $data = Product::find($id);

        if ($data->product_url != request()->product_url) {
            $this->validate(request(), [
                'product_url' => ['required', 'unique:products'],
            ]);
        }

        $data->product_name = $request->product_name;
        $data->product_url = $request->product_url;

        $data->selected_categories = $request->selected_categories;
        $data->short_description = $request->short_description;
        $data->description = $request->description;

        $data->sales_price = $request->sales_price;

        $data->stock = $request->stock;
        $data->low_stock = $request->low_stock;
        $data->meta_title = $request->meta_title;

        $data->meta_keywords = $request->meta_keywords;
        $data->meta_description = $request->meta_description;
        $data->schema_tag = $request->schema_tag;
        $data->video_url = $request->video_url;

        if ($request->hasFile('image')) {
            if ($data->image && file_exists(public_path($data->image))) {
                if (public_path($data->image)) {
                    unlink(public_path($data->image));
                }
            }
            $data->image = Storage::put('/product_uploads', request()->file('image'));
        }

        $data->save();

        $url = SiteUrl::where('url_for_table','products')->where('url_for_table_id',$data->id)->first();
        if(!$url){
            $url = new SiteUrl();
        }
        $url->url = $data->product_url;
        $url->save();

        return redirect()->route('dashboard.product.details', ['id' => $data->id])
            ->with('success', 'product information updated');
    }

    public function destory($id)
    {
        $product = Product::where('id', $id)->first();
        if ($product) {
            if (file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
                $product->delete();
                return redirect()->back();
            } else {
                $product->delete();
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
        return redirect()->back();
    }
}
