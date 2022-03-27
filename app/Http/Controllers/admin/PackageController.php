<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PackageAttr;
use App\Models\PackageFeature;
use App\Models\PackageMode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{
    //
    public function index(){
        $active_modes = PackageMode::where('status',1)->get();
        $packages = Package::orderBy('created_at', 'DESC')->get();
        return view('admin.package.index', compact('packages','active_modes'));
    }
    public function create(){
        $active_modes = PackageMode::where('status',1)->get();
        $active_features = PackageFeature::where('status',1)->get();
        return view('admin.package.create', compact('active_modes','active_features'));
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'package_title' => 'required',
            'package_mode' => 'required',
            'number_of_user' => 'required',
            'package_features' => 'required',
            'price' => 'required',
            'status' => 'required'
        ]);
        $insert_id = Package::insertGetId([
            'package_title' => $request->package_title,
            'package_sub_title' => $request->package_sub_title,
            'mode_id' => $request->package_mode,
            'price' => $request->price,
            'number_of_user' => $request->number_of_user,
            'billed' => $request->bill,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);

        foreach($request->package_features as $fid){
            $pst = PackageAttr::create([
                'package_id' => $insert_id,
                'package_feature_id' => $fid
            ]);
        }
        if($insert_id && $pst){
            return back()->with('inserted','Package has been added successfully');
        }else{
            return back()->with('not_inserted','Something Happened Wrong');

        }
    }

    public function statusChange(Request $request){
        Package::find($request->package_id)->update([
            'status' => $request->status
        ]);
    }
    public function delete($id){
        Package::find($id)->delete();
        return back()->with('delete','Package deleted successfully');
    }

    public function update(Request $request){
        dd($request->all());
        
    }
}
