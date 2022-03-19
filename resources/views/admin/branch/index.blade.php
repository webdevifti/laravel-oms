@extends('admin.master')
@section('Content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New Branch</h1>
        <a href="{{ route('organization.request.view') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-left-arrow fa-sm text-white-50"></i> Go Back</a>
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
                    <a class="nav-item nav-link" id="nav-department-tab" data-toggle="tab" href="#nav-department" role="tab" aria-controls="nav-department" aria-selected="false">Department</a>
                    <a class="nav-item nav-link" id="nav-designation-tab" data-toggle="tab" href="#nav-designation" role="tab" aria-controls="nav-designation" aria-selected="false">Designation</a>
                    <a class="nav-item nav-link" id="nav-hierarchy-tab" data-toggle="tab" href="#nav-hierarchy" role="tab" aria-controls="nav-hierarchy" aria-selected="false">Hierarchy</a>
                    <a class="nav-item nav-link" id="nav-other-details-tab" data-toggle="tab" href="#nav-other-details" role="tab" aria-controls="nav-other-details" aria-selected="false">Other Details</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="basic_info" role="tabpanel" aria-labelledby="nav-basic-tab">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="mt-4">
                                <label for="ogn">Branch Name *</label>
                                <input type="text" class="form-control" id="ogn" name="branch_name" placeholder="Branch Name">
                            </div>
                            <div class="mt-4">
                                <label for="ogt">Branch Head </label>
                                <select name="branch_head" class="form-control" id="ogt">
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
                                <label for="ws">Email ID</label>
                                <input type="email" class="form-control" id="es" name="email" placeholder="Email Address">
                            </div>
                            <div class="mt-4">
                                <label for="sts">User Role</label>
                                <select name="user_rol" class="form-control" id="sts">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="mt-4">
                                <label for="ws">Branch Description</label>
                                <input type="text" class="form-control" id="es" name="b_desc" placeholder="Branch Description">
                            </div>
                            <div class="mt-4">
                                <label for="ws">Designation</label>
                                <input type="text" class="form-control" id="es" name="designation" placeholder="Desgination">
                            </div>
                            <div class="mt-4">
                                <label for="ws">Phone Number</label>
                                <input type="text" class="form-control" id="es" name="phon_number" placeholder="+987 88 822 978">
                            </div>
                            <div class="mt-4">
                                <label for="sts">Status</label>
                                <select name="status" class="form-control" id="sts">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
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
                <div class="tab-pane fade" id="nav-department" role="tabpanel" aria-labelledby="nav-department-tab">
                    <h3>Branch A</h3>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="mt-4">
                                <label for="ur">Department</label>
                                <select name="department" id="ur" class="form-control">
                                    <option value="oa">Organization Admin</option>
                                    <option value="om">Organization Moderator</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <label for="ur">Status</label>
                                <select name="status" id="ur" class="form-control">
                                    <option value="oa">Organization Admin</option>
                                    <option value="om">Organization Moderator</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="mt-4">
                                <label for="ur">Department Head</label>
                                <select name="d_head" id="ur" class="form-control">
                                    <option value="oa">Organization Admin</option>
                                    <option value="om">Organization Moderator</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="btns mt-4">
                        <button type="button" class="btn btn-danger">Cancel</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header"></div>
                        <div class="card-body">

                            <table class="table">
                                <thead>
                                    <th>Department Name</th>
                                    <th>Department Head</th>
                                    <th>Updated On</th>
                                    <th>Status</th>
                                    <th>Action</th>
        
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-designation" role="tabpanel" aria-labelledby="nav-designation-tab">
                    <h3>Branch A</h3>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="mt-4">
                                <label for="ur">Designation</label>
                                <select name="designation" id="ur" class="form-control">
                                    <option value="oa">Organization Admin</option>
                                    <option value="om">Organization Moderator</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <label for="ur">Status</label>
                                <select name="status" id="ur" class="form-control">
                                    <option value="oa">Organization Admin</option>
                                    <option value="om">Organization Moderator</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="mt-4">
                                <label for="ur">Department</label>
                                <select name="d" id="ur" class="form-control">
                                    <option value="oa">Organization Admin</option>
                                    <option value="om">Organization Moderator</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="btns mt-4">
                        <button type="button" class="btn btn-danger">Cancel</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header"></div>
                        <div class="card-body">

                            <table class="table">
                                <thead>
                                    <th>Designation Name</th>
                                    <th>Department</th>
                                    <th>Updated On</th>
                                    <th>Status</th>
                                    <th>Action</th>
        
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-hierarchy" role="tabpanel" aria-labelledby="nav-hierarchy-tab">
                    <h3>Branch A</h3>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="mt-4">
                                <label for="ur">Designation</label>
                                <select name="designation" id="ur" class="form-control">
                                    <option value="oa">Organization Admin</option>
                                    <option value="om">Organization Moderator</option>
                                </select>
                            </div>
                           
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="mt-4">
                                <label for="ur">Parent Designation</label>
                                <select name="d" id="ur" class="form-control">
                                    <option value="oa">Organization Admin</option>
                                    <option value="om">Organization Moderator</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="btns mt-4">
                        <button type="button" class="btn btn-danger">Cancel</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
                <div class="tab pane fade" id="nav-other-details" role="tabpanel" aria-labelledby="nav-other-details-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mt-4">
                                <label for="dgr">
                                    Whether any contructor? <br><br>
                                    <input type="radio" name="contructor" value="yes">Yes <br>
                                    <input type="radio" name="contructor" value="no">No
                                </label>

                            </div>
                            <div class="mt-4">
                                <label for="dgr">
                                    Whether sub contructor? <br><br>
                                    <input type="radio" name="subcontructor" value="yes">Yes <br>
                                    <input type="radio" name="subcontructor" value="no">No
                                </label>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mt-4">
                                <label for="">contructor category</label>
                                <select class="form-control" name="constructor_category" id="">
                                    <option value="">A</option>
                                    <option value="">B</option>
                                </select>
                           </div>
                           <div class="mt-4">
                               <label for="">contructor sub category</label>
                            <select class="form-control" name="constructor_subcategory" id="">
                                <option value="">A</option>
                                <option value="">B</option>
                            </select>
                       </div>
                        </div>
                        <div class="bts">
                            <button type="button" class="btn btn-danger">Cancel</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        </form>
        <div class="card-footer d-sm-flex align-items-center justify-content-between">
            <p style="visibility: hidden">test</p>
            <div class="action_buttons d-none d-sm-inline-block">
                <a href="" class="btn btn-danger btn-sm">Cancel</a>
                <a href="" class="btn btn-success btn-sm">Save</a>
            </div>
        </div>
     </div>
</div>
@endsection