<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\products\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductCategoryController extends Controller
{
    public function create()
    {
        $categories = ProductCategory::get();
        return view('dashboard.product_category.create', compact('categories'));
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => ['required'],
            'parent' => ['required'],
            'url' => ['required'],
            // 'image' => ['required'],
            'meta_title' => ['required'],
            'meta_information' => ['required'],
            'meta_keywords' => ['required'],

        ]);
        //dd($request->all());
        $data = new ProductCategory();
        $data->title = $request->title;
        $data->parent = $request->parent;
        $data->url = $request->url;
        if(request()->hasFile('image')){
            $data->image = Storage::put('/product_category_uploads', request()->file('image'));
        }
        $data->meta_title = $request->meta_title;
        $data->meta_information = $request->meta_information;
        $data->meta_keywords = $request->meta_keywords;
        $data->save();
        return redirect()->route('dashboard.product_category.view');
    }

    public function view()
    {
        $alldata = ProductCategory::get();
        return view('dashboard.product_category.index', compact('alldata'));
    }

    public function edit($id)
    {
        $editdata = ProductCategory::find($id);
        return view('dashboard.product_category.edit', compact('editdata'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => ['required'],
            'parent' => ['required'],
            'url' => ['required'],
            'meta_title' => ['required'],
            'meta_information' => ['required'],
            'meta_keywords' => ['required'],

        ]);

        $data = ProductCategory::find($id);
        $data->title = $request->title;
        $data->parent = $request->parent;
        $data->url = $request->url;

        if ($data->image && $request->hasFile('image')) {
            if (file_exists(public_path($data->image))) {
                if (public_path($data->image)) {
                    unlink(public_path($data->image));
                }
            }
            $data->image = Storage::put('/product_category_uploads', request()->file('image'));
        }

        $data->meta_title = $request->meta_title;
        $data->meta_information = $request->meta_information;
        $data->meta_keywords = $request->meta_keywords;
        $data->save();
        return redirect()->route('dashboard.product_category.view');
    }

    public function destory($id)
    {
        $product_ctegory = ProductCategory::where('id', $id)->first();
        if ($product_ctegory) {
            if (file_exists(public_path($product_ctegory->image))) {
                unlink(public_path($product_ctegory->image));
                $product_ctegory->delete();
                return redirect()->back();
            } else {
                $product_ctegory->delete();
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function details($id)
    {
        $details = ProductCategory::find($id);
        return view('dashboard.product_category.details', compact('details'));
    }
}
