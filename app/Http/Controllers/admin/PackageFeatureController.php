<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PackageFeature;
use Illuminate\Http\Request;

class PackageFeatureController extends Controller
{
    //
    public function index(){
        $features = PackageFeature::orderBy('created_at', 'DESC')->get();
        return view('admin.package.feature', compact('features'));
    }
    public function create(Request $request){
        $request->validate([
            'package_feature' => 'required',
            'status' => 'required'
        ]);
        $insert = PackageFeature::create([
            'package_features' => $request->package_feature,
            'status' => $request->status
        ]); 
        if($insert){
            return back()->with('inserted','Package Feature has been added successfully');
        }else{
            return back()->with('not_inserted','Something happened wrong');
        }
    }
    public function statusChange(Request $request){
        PackageFeature::find($request->feature_id)->update([
            'status' => $request->status
        ]);
        
    }
}
