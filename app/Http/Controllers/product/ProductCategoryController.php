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
        return view('dashboard.product_category.create');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $data = new ProductCategory();
        $data->title = $request->title;
        $data->parent = $request->parent;
        $data->url = $request->url;
        $data->image = Storage::put('/product_category_uploads', request()->file('image'));
        $data->meta_title = $request->meta_title;
        $data->meta_information = $request->meta_information;
        $data->meta_keywords = $request->meta_keywords;
        $data->save();
        return redirect()->route('dashboard.product_category.view');
    }

    public function view(){
        $alldata = ProductCategory::get();
        return view('dashboard.product_category.index', compact('alldata'));
    }

    public function edit($id){
        $editdata = ProductCategory::find($id);
        return view('dashboard.product_category.edit',compact('editdata'));
    }

    public function update(Request $request,$id){
         $data = ProductCategory::find($id);
         $data->title = $request->title;
         $data->parent = $request->parent;
         $data->url = $request->url;
         if($request->hasFile('photo')){
            $data->image = $this->saveImage($request);  
        }
         $data->meta_title = $request->meta_title;
         $data->meta_information = $request->meta_information;
         $data->meta_keywords = $request->meta_keywords;
         $data->save();
         return redirect()->route('dashboard.product_category.view');

    }

    public function destory($id)
    {
        //
        ProductCategory::where('id',$id)->delete();
        return redirect()->back();
    }
}
