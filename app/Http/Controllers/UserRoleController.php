<?php

namespace App\Http\Controllers;

use App\Models\UserRole;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    public function create()
    {
        return view('dashboard.role.create');
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $data = new UserRole();
        $data->title = $request->title;
        $data->role_serial = $request->role_serial;
        $data->save();
        return redirect()->route('dashboard.role.view');
    }

    public function view(){
        $alldata = UserRole::get();
        return view('dashboard.role.index', compact('alldata'));
    }

    public function edit($id){
        $editdata = UserRole::find($id);
        return view('dashboard.role.edit',compact('editdata'));
    }

    public function update(Request $request,$id){
         $data = UserRole::find($id);
          $data->title = $request->title;
          $data->role_serial = $request->role_serial;
         $data->save();
         return redirect()->route('dashboard.role.view');

    }

    public function destory($id)
    {
        //
        UserRole::where('id',$id)->delete();
        return redirect()->back();
    }
}
