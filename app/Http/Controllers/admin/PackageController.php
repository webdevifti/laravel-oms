<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PackageFeature;
use App\Models\PackageMode;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //
    public function index(){
       
        return view('admin.package.index');
    }
    public function create(){
        $active_modes = PackageMode::where('status',1)->get();
        $active_features = PackageFeature::where('status',1)->get();
        return view('admin.package.create', compact('active_modes','active_features'));
    }
    public function store(Request $request){
        $request->validate([
            'package_title' => 'required',
            'package_mode' => 'required',
            'number_of_user' => 'required',
            'package_features' => 'required',
            'package_sub_title' => 'required',
            'price' => 'required',
            'bill' => 'required',
            'status' => 'required'
        ]);
        $
    }
 
}
