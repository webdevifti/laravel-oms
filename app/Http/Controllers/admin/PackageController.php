<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //
    public function index(){
        return view('admin.package.index');
    }
    public function create(){
        return view('admin.package.create');
    }
    public function mode(){
        return view('admin.package.mode');
    }
}
