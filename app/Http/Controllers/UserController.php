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
        $this->validate($request, [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'user_name' => ['required'],
            'password' => ['required'],
            'telegram_id' => ['required'],
            'telegram_name' => ['required'],
            'mobile_number' => ['required'],
            'photo' => ['required'],
            'email' => ['required'],


        ]);
       //dd($request->all());
        $data = new User();
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->user_name = $request->user_name;
        $data->password = $request->password;
        $data->telegram_id = $request->telegram_id;
        $data->telegram_name = $request->telegram_name;
        $data->mobile_number = $request->mobile_number;
        if($request->hasFile('photo')){
        $data->photo = Storage::put('/user_uploads', request()->file('photo'));
        }
       $data->email = $request->email;
    
        $data->save();
        return redirect()->route('dashboard.user.view');
    }

    public function view()
    {
        $alldata = User::get();
        return view('dashboard.user.index', compact('alldata'));
    }

    public function edit($id)
    {
        $editdata = User::find($id);
        return view('dashboard.user.edit', compact('editdata'));
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->user_name = $request->user_name;
        $data->password = $request->password;
        $data->telegram_id = $request->telegram_id;
        $data->telegram_name = $request->telegram_name;
        $data->mobile_number = $request->mobile_number;
        if ($request->hasFile('photo')) {
            if(public_path($data->photo)){
                unlink(public_path($data->photo));
            }
            $data->photo = Storage::put('/user_uploads', request()->file('photo'));
        }
        $data->email = $request->email;
        $data->save();
        return redirect()->route('dashboard.user.view');
    }

    public function destory($id)
    {
        $user = User::where('id', $id)->first();
        if ($user) {
            if (file_exists(public_path($user->photo))) {
                unlink(public_path($user->photo));
                $user->delete();
                return redirect()->back();
            } else {
                $user->delete();
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }


    public function details($id)
    {
        $user_details = User::find($id);
        return view('dashboard.user.details', compact('user_details'));
    }
}
