<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PackageMode;
use Illuminate\Http\Request;

class PackageModeController extends Controller
{
    //
    public function mode(){
        $modes = PackageMode::orderBy('created_at','DESC')->get();
        return view('admin.package.mode', compact('modes'));
    }

    public function createMode(Request $request){
        $request->validate([
            'package_mode' => 'required',
            'no_of_days' => 'required',
            'package_mode_desc' => 'required',
            'mode_status' => 'required'
        ]);

        $insert = PackageMode::create([
            'package_mode' => $request->package_mode,
            'package_mode_desc' => $request->package_mode_desc,
            'no_of_days' => $request->no_of_days,
            'status' => $request->mode_status
        ]);

        if($insert){
            return back()->with('inserted','Package mode has been added successfully');
        }else{
            return back()->with('not_inserted','Something happened wrong');
        }
    }
    public function statusChange(Request $request){
        PackageMode::find($request->mode_id)->update([
            'status' => $request->status
        ]);
        
    }
}
