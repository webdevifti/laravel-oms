@extends('admin.master')
@section('Content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Package</h1>
        <a href="{{ route('package.list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Go Back</a>
    </div>
     <!-- Page Heading -->
   
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="mt-4">
                        <label for="">Package Title</label>
                        <input type="text" name="package_title" placeholder="Package title" class="form-control">
                    </div>
                    <div class="mt-4">
                        <label for="">Package Mode</label>
                        <select name="package_mode" class="form-control">
                            <option value="">a</option>
                            <option value="">a</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <label for="">Number od user</label>
                        <input type="text" name="nou" placeholder="User Number" class="form-control">
                    </div>
                    <div class="mt-4">
                        <label for="">Package Features</label>
                        <select name="package_features" class="form-control">
                            <option value="">a</option>
                            <option value="">a</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mt-4">
                        <label for="">Package sub title</label>
                        <input type="text" name="package_sub_title" placeholder="Sub title" class="form-control">
                    </div>
                    <div class="mt-4">
                        <label for="">Package Price</label>
                        <input type="text" name="price" placeholder="Price" class="form-control">
                    </div>
                    <div class="mt-4">
                        <label for="">Package Billed</label>
                        <select name="bill" class="form-control">
                            <option value="">a</option>
                            <option value="">a</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <label for="">Status</label>
                        <select name="status" class="form-control">
                            <option value="">a</option>
                            <option value="">a</option>
                        </select>
                    </div>
                </div>
            </div>
         </div>
         <div class="card-footer">
            <div class="card-footer d-sm-flex align-items-center justify-content-between">
                <p style="visibility: hidden">test</p>
                <div class="action_buttons d-none d-sm-inline-block">
                    <a href="" class="btn btn-danger btn-sm">Cancel</a>
                    <a href="" class="btn btn-success btn-sm">Save</a>
                </div>
            </div>
         </div>
     </div>

   
</div>
@endsection