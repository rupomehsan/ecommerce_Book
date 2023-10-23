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
        return view('dashboard.banner.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required'],
            'redirect_url' => ['required'],
            'image' => ['required'],


        ]);
        //dd($request->all());
        $data = new EcomBanner();
        $data->title = $request->title;
        $data->redirect_url = $request->redirect_url;
        $data->image = Storage::put('/banner_uploads', request()->file('image'));
        $data->save();
        return redirect()->route('dashboard.banner.view');
    }

    public function view()
    {
        $alldata = EcomBanner::get();
        return view('dashboard.banner.index', compact('alldata'));
    }

    public function edit($id)
    {
        $editdata = EcomBanner::find($id);
        return view('dashboard.banner.edit', compact('editdata'));
    }

    public function update(Request $request, $id)
    {
        $data = EcomBanner::find($id);
        $data->title = $request->title;
        $data->redirect_url = $request->redirect_url;
        if ($request->hasFile('image')) {
            if (file_exists(public_path($data->image))){
            if (public_path($data->image)) {
                unlink(public_path($data->image));
            }
        }
            $data->image = Storage::put('/product_category_uploads', request()->file('image'));;
        }
        $data->save();
        return redirect()->route('dashboard.banner.view');
    }

    public function destory($id)
    {

        $banner = EcomBanner::where('id', $id)->first();
        if ($banner) {
            if (file_exists(public_path($banner->image))) {
                unlink(public_path($banner->image));
                $banner->delete();
                return redirect()->back();
            } else {
                $banner->delete();
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }


    public function details($id){
        $banner_details = EcomBanner::find($id);
         return view('dashboard.banner.details', compact('banner_details'));
     }

}
