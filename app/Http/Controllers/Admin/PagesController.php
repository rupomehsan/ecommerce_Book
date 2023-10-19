<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
        return view('dashboard.pages.admin.crud.index');
    }
    public function create(){
        return view('dashboard.pages.admin.crud.create');
    }
}
