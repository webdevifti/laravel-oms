@extends('admin.master')
@section('Content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Package</h1>
        <a href="{{ route('package.list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Go Back</a>
    </div>
    @if(session()->has('inserted'))
        <div class="alert alert-success">
            {{ session()->get('inserted') }}
        </div>
    @endif
    @if(session()->has('not_inserted'))
        <div class="alert alert-danger">
            {{ session()->get('not_inserted') }}
        </div>
    @endif
     <!-- Page Heading -->
   
     <!-- DataTales Example -->
     <form action="{{ route('package.store') }}" method="POST">
         @csrf
     <div class="card shadow mb-4">
         <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="mt-4">
                        <label for="">Package Title *</label>
                        <input type="text" name="package_title" placeholder="Package title" class="form-control">
                        @error('package_title') <span style="color: red">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-4">
                        <label for="">Package Mode *</label>
                        <select name="package_mode" class="form-control">
                            <option value="">--select mode--</option>
                            @foreach($active_modes as $mode)
                                <option value="{{ $mode->id }}">{{ $mode->package_mode }}</option>
                            @endforeach
                        </select>
                        @error('package_mode') <span style="color: red">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-4">
                        <label for="">Number od user *</label>
                        <input type="text" name="number_of_user" placeholder="User Number" class="form-control">
                        @error('number_of_user') <span style="color: red">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-4">
                        <label for="">Package Features *</label>
                        <select name="package_features[]" id="langOpt" multiple class="form-control">
                            @foreach($active_features as $feature)
                                <option value="{{ $feature->id }}">{{ $feature->package_features }}</option>
                            @endforeach
                        </select>
                        @error('package_features') <span style="color: red">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mt-4">
                        <label for="">Package sub title</label>
                        <input type="text" name="package_sub_title" placeholder="Sub title" class="form-control">
                    </div>
                    <div class="mt-4">
                        <label for="">Package Price *</label>
                        <input type="text" name="price" placeholder="Price" class="form-control">
                        @error('price') <span style="color: red">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-4">
                        <label for="">Package Billed</label>
                        <select name="bill" class="form-control">
                            <option value="monthlyandyearly">Monthly abd Yearly</option>
                            <option value="weeklyandmonthly">Weekly and Monthly</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <label for="">Status</label>
                        <select name="status" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Deactive</option>
                        </select>
                    </div>
                </div>
            </div>
         </div>
         <div class="card-footer">
            <div class="card-footer d-sm-flex align-items-center justify-content-between">
                <p style="visibility: hidden">test</p>
                <div class="action_buttons d-none d-sm-inline-block">
                    <button type="reset" class="btn btn-danger btn-sm">Cancel</button>
                    <button type="submit" class="btn btn-success btn-sm">Save</button>
                </div>
            </div>
         </div>
     </div>
    </form>

   
</div>
@endsection