<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function create()
    {
        return view('dashboard.user.create');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $data = new User();
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->user_name = $request->user_name;
        $data->password = $request->password;
        $data->telegram_id = $request->telegram_id;
        $data->telegram_name = $request->telegram_name;
        $data->mobile_number = $request->mobile_number;
        $data->photo = Storage::put('/user_uploads', request()->file('photo'));
        $data->email = $request->email;
        $data->save();
        return redirect()->route('dashboard.user.view');
    }

    public function view(){
        $alldata = User::get();
        return view('dashboard.user.index', compact('alldata'));
    }

    public function edit($id){
        $editdata = User::find($id);
        return view('dashboard.user.edit',compact('editdata'));
    }

    public function update(Request $request,$id){
         $data = User::find($id);
         $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->user_name = $request->user_name;
        $data->password = $request->password;
        $data->telegram_id = $request->telegram_id;
        $data->telegram_name = $request->telegram_name;
        $data->mobile_number = $request->mobile_number;
        if($request->hasFile('photo')){
            $data->photo = $this->saveImage($request);  
        }
        $data->email = $request->email;
         $data->save();
         return redirect()->route('dashboard.user.view');

    }

    public function destory($id)
    {
        //
        User::where('id',$id)->delete();
        return redirect()->back();
    }
}
