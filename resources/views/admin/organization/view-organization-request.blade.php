@extends('admin.master')
@section('Content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Organization Request List</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Add New</a> --}}
    </div>
     <!-- Page Heading -->
   
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <form action="">
         <div class="card-body">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-basic-tab" data-toggle="tab" href="#basic_info" role="tab" aria-controls="nav-basic" aria-selected="true">Basic Info</a>
                    <a class="nav-item nav-link" id="nav-address-tab" data-toggle="tab" href="#nav-address" role="tab" aria-controls="nav-address" aria-selected="false">Address</a>
                    <a class="nav-item nav-link" id="nav-admin-tab" data-toggle="tab" href="#nav-admin" role="tab" aria-controls="nav-admin" aria-selected="false">Admin</a>
                    <a class="nav-item nav-link" id="nav-branches-tab" data-toggle="tab" href="#nav-branches" role="tab" aria-controls="nav-branches" aria-selected="false">Branches</a>
                    <a class="nav-item nav-link" id="nav-other-details-tab" data-toggle="tab" href="#nav-other-details" role="tab" aria-controls="nav-other-details" aria-selected="false">Other Details</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="basic_info" role="tabpanel" aria-labelledby="nav-basic-tab">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="mt-4">
                                <label for="ogn">Organization Name *</label>
                                <input type="text" class="form-control" id="ogn" name="organization_name" placeholder="Organization Name">
                            </div>
                            <div class="mt-4">
                                <label for="ogt">Organization Type *</label>
                                <select name="organization_type" class="form-control" id="ogt">
                                    <option value="">Organization Type</option>
                                    <option value="">ABCD</option>
                                    <option value="">EFGH</option>
                                    <option value="">IGKL</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <label for="bcat">Business Category *</label>
                                <select name="business_category" class="form-control" id="bcat">
                                    <option value="">Business Category</option>
                                    <option value="">ABCD</option>
                                    <option value="">EFGH</option>
                                    <option value="">IGKL</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <label for="ws">Website</label>
                                <input type="url" class="form-control" id="es" name="website" placeholder="https://www.example.com">
                            </div>
                            <div class="mt-4">
                                <label for="sts">Status</label>
                                <select name="status" class="form-control" id="sts">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="m-auto" style="width: 350px;">
                                <p>Organization Logo</p>
                                {{-- <img src="{{ asset('admin/img/placeholder.png') }}" height="170" width="100%" id="pic" alt=""> --}}
                                <div>
                                <input type="file" name="logo" />
                                </div>
                            </div>

                        
                        </div>
                    </div>
                  
                </div>
                <div class="tab-pane fade" id="nav-address" role="tabpanel" aria-labelledby="nav-address-tab">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="mt-4">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        
                        <div class="col-lg-6 col-md-6">
                           
                            <div class="mt-4">
                                <label for="c">Country</label>
                                <select name="country" class="form-control" id="c">
                                    <option value="">select country</option>
                                    <option value="">A</option>
                                    <option value="">B</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <label for="cty">City</label>
                                <select name="city" class="form-control" id="cty">
                                    <option value="">select city</option>
                                    <option value="">A</option>
                                    <option value="">B</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <label for="ltd">Latitude</label>
                                <input type="text" class="form-control" id="ltd" name="latitude" placeholder="Latitude">
                            </div>
                            <div class="mt-4">
                                <label for="po">Post Office</label>
                                <input type="text" class="form-control" id="po" name="post_office" placeholder="Post Office">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mt-4">
                                <label for="st">State</label>
                                <select name="state" class="form-control" id="st">
                                    <option value="">select State</option>
                                    <option value="">A</option>
                                    <option value="">B</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <label for="zip">Zip Code</label>
                                <input type="text" class="form-control" id="zip" name="zip_code" placeholder="Zip Code">
                            </div>
                            <div class="mt-4">
                                <label for="longi">Longitude</label>
                                <input type="text" class="form-control" id="longi" name="longitude" placeholder="Longitude">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-admin" role="tabpanel" aria-labelledby="nav-admin-tab">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="mt-4">
                                <label for="oa">Organization Admin</label>
                                <input type="text" class="form-control" id="oa" name="organization_admin" placeholder="Organization Admin">
                            </div>
                            <div class="mt-4">
                                <label for="email">Email ID</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email ID">
                            </div>
                            <div class="mt-4">
                                <label for="ur">User Role</label>
                                <select name="user_role" id="ur" class="form-control">
                                    <option value="oa">Organization Admin</option>
                                    <option value="om">Organization Moderator</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="m-auto">
                                <p>Avatar</p>
                                {{-- <img src="{{ asset('admin/img/user-avatar.png') }}" height="100" width="100" style="border-radius: 50%" id="avatar" alt=""> --}}
                                <div>
                                <input type="file" name="avatar" />
                                </div>
                            </div>
                            <div class="mt-4">
                                <label for="d">Designation</label>
                                <input type="text" class="form-control" id="d" name="degination" placeholder="Desgination">
                            </div>
                            <div class="mt-4">
                                <label for="pn">Phone Number</label>
                                <input type="text" class="form-control" id="pn" name="phone_number" placeholder="+94 4930 493020">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-branches" role="tabpanel" aria-labelledby="nav-branches-tab">
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">Organization A</h1>
                                <a href="{{ route('admin.branch') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td>
                                               <input type="checkbox" checked data-toggle="toggle"  data-on="Active" data-off="Deactive" data-onstyle="success" data-offstyle="danger">
                                           </td>
                                           <td>
                                               <a href="#" class="btn btn-success"> <i class="fas fa-pen fa-fw"></i></a>
                                               <a href="#" class="btn btn-danger"> <i class="fas fa-trash fa-fw"></i></a>
                                           </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-other-details" role="tabpanel" aria-labelledby="nav-other-details-tab">
                    <div class="mt-4">
                        <label for="">Default Language</label>
                        <select name="language" id="" class="form-control">
                            <option value="">Arabic</option>
                            <option value="">English</option>
                        </select>
                    </div>
                </div>
            </div>
         </div>
        </form>
        <div class="card-footer d-sm-flex align-items-center justify-content-between">
            <p style="visibility: hidden">test</p>
            <div class="action_buttons d-none d-sm-inline-block">
                <a href="" class="btn btn-danger btn-sm">Cancel</a>
                <a href="" class="btn btn-danger btn-sm">Deny</a>
                <a href="" class="btn btn-success btn-sm">Approve</a>
            </div>
        </div>
     </div>
</div>
@endsection