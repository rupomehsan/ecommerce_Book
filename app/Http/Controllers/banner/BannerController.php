<?php

namespace App\Http\Controllers\banner;

use App\Http\Controllers\Controller;
use App\Models\exta\EcomBanner;
use App\Models\products\ProductTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function create()
    {
        return view('dashboard.product_category.create');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $data = new EcomBanner();
        $data->title = $request->title;
        $data->redirect_url = $request->redirect_url;
        $data->image = Storage::put('/banner_uploads', request()->file('image'));
        $data->save();
        return redirect()->route('dashboard.banner.view');
    }

    public function view(){
        $alldata = EcomBanner::get();
        return view('dashboard.banner.index', compact('alldata'));
    }

    public function edit($id){
        $editdata = EcomBanner::find($id);
        return view('dashboard.banner.edit',compact('editdata'));
    }

    public function update(Request $request,$id){
         $data = EcomBanner::find($id);
         $data->title = $request->title;
         $data->url = $request->redirect_url;
         if($request->hasFile('image')){
            $data->image = $this->saveImage($request);  
        }
         $data->save();
         return redirect()->route('dashboard.banner.view');

    }

    public function destory($id)
    {
        //
        EcomBanner::where('id',$id)->delete();
        return redirect()->back();
    }
}
