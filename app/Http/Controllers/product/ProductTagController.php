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
        return view('dashboard.product_category.create');
    }
    public function store(Request $request)
    {
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
        return redirect()->route('dashboard.product_category.view');
    }

    public function view(){
        $alldata = ProductTag::get();
        return view('dashboard.product_tag.index', compact('alldata'));
    }

    public function edit($id){
        $editdata = ProductTag::find($id);
        return view('dashboard.product_tag.edit',compact('editdata'));
    }

    public function update(Request $request,$id){
         $data = ProductTag::find($id);
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
        ProductTag::where('id',$id)->delete();
        return redirect()->back();
    }
}
