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
    public function delete($id){
        PackageFeature::find($id)->delete();
        return back()->with('delete','Package feature deleted successfully');
    }

    public function update(Request $request){
        PackageFeature::find($request->id)->update([
            'package_features' => $request->feature
        ]);
        return back()->with('updated','Package feature updated successfully');
    }
}
