<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\products\ProductTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductTagController extends Controller
{
    public function create()
    {
        $product_tag = ProductTag::get();
         return view('dashboard.product_tag.create', compact('product_tag'));
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => ['required'],
            'parent' => ['required'],
            'url' => ['required'],
            'image' => ['required'],
            'meta_title' => ['required'],
            'meta_information' => ['required'],
            'meta_keywords' => ['required'],

        ]);
        //dd($request->all());
        $data = new ProductTag();
        $data->title = $request->title;
        $data->parent = $request->parent;
        $data->url = $request->url;
        $data->image = Storage::put('/product_tag_uploads', request()->file('image'));
        $data->meta_title = $request->meta_title;
        $data->meta_information = $request->meta_information;
        $data->meta_keywords = $request->meta_keywords;
        $data->save();
        return redirect()->route('dashboard.product_tag.view');
    }

    public function view()
    {
        $alldata = ProductTag::get();
        return view('dashboard.product_tag.index', compact('alldata'));
    }

    public function edit($id)
    {
        $editdata = ProductTag::find($id);
        return view('dashboard.product_tag.edit', compact('editdata'));
    }

    public function update(Request $request, $id)
    {
        $data = ProductTag::find($id);
        $data->title = $request->title;
        $data->parent = $request->parent;
        $data->url = $request->url;
        if ($request->hasFile('image')) {
            if (file_exists(public_path($data->image))){
            if (public_path($data->image)) {
                unlink(public_path($data->image));
            }
        }
            $data->image = Storage::put('/product_category_uploads', request()->file('image'));;
        }
        $data->meta_title = $request->meta_title;
        $data->meta_information = $request->meta_information;
        $data->meta_keywords = $request->meta_keywords;
        $data->save();
        return redirect()->route('dashboard.product_tag.view');
    }

    public function destory($id)
    {
        //
        $product_tag =  ProductTag::where('id', $id)->delete();
        if ($product_tag) {
            if (file_exists(public_path($product_tag->image))) {
                unlink(public_path($product_tag->image));
                $product_tag->delete();
                return redirect()->back();
            } else {
                $product_tag->delete();
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
        return redirect()->back();
    }


    public function details($id){
        $details = ProductTag::find($id);
         return view('dashboard.product_tag.details', compact('details'));
     }
}
