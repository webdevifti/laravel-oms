@extends('admin.master')
@section('Content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Organization List</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
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
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Admin</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Branches</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Other Details</a>
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
                                <img src="{{ asset('admin/img/placeholder.png') }}" height="170" width="100%" id="pic" alt="">
                                <div>
                                <input type="file" id="upload" hidden oninput="pic.src=window.URL.createObjectURL(this.files[0])" />
                                    <label class="imgUp" for="upload">Upload</label>
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
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, porro culpa odit fuga in quia neque quae accusamus sint, totam tenetur sit rerum mollitia! Assumenda vitae ad expedita modi voluptatum.</h1>
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