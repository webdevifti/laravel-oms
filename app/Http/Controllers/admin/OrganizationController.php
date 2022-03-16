<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    //
    public function organization(){
        return view('admin.organization.organization-list');
    }
    public function requestList(){
        return view('admin.organization.organization-request-list');
    }
    public function requestView(){
        return view('admin.organization.view-organization');
    }
}
