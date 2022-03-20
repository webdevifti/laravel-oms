@extends('admin.master')
@section('Content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Package Features</h1>
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
        {{-- <a href="{{ route('package.list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add New</a> --}}
    </div>
     <!-- Page Heading -->
   
    <form action="{{ route('package.feature.create') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="mt-4">
                    <label for="">Package Feature</label>
                    <input type="text" placeholder="Package Feature" name="package_feature" class="form-control">
                    <span style="color: red">@error('package_feature') {{ $message }} @enderror</span>
                </div>
             
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="mt-4">
                    <label for="">Status</label>
                    <select name="status" class="form-control" id="">
                        <option value="">Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>
                    </select>
                    <span style="color: red">@error('status') {{ $message }} @enderror</span>
                </div>
            </div>
        </div>
        <div class="btns mt-4">
            <button type="reset" class="btn btn-danger btn-sm">Cancel</button>
            <button type="submit" class="btn btn-success btn-sm">Save</button>
        </div>
    </form>
    <div class="card shadow mt-4 mb-4">
        <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Package Features</th>
                             <th>Created On</th>
                             <th>Status</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tfoot>
                         <tr>
                            <th>Package Features</th>
                            <th>Created On</th>
                            <th>Status</th>
                            <th>Action</th>
                         </tr>
                     </tfoot>
                     <tbody>
                         @foreach($features as $feature)
                         <tr>
                             <td>{{ $feature->package_features }}</td>
                             <td>{{ $feature->created_at->diffForHumans() }}</td>
                             <td>
                                 @if($feature->status == 1)
                                    <input type="checkbox" checked data-toggle="toggle"  data-on="Active" data-off="Deactive" data-onstyle="success" data-offstyle="danger">
                                @else 
                                    <input type="checkbox" checked data-toggle="toggle"  data-on="Deactive" data-off="Active" data-onstyle="danger" data-offstyle="success">
                                @endif
                            </td>
                            <td>
                                <a href="#" class="btn btn-success"> <i class="fas fa-pen fa-fw"></i></a>
                                <a href="#" class="btn btn-danger"> <i class="fas fa-trash fa-fw"></i></a>
                            </td>
                         </tr>
                         @endforeach
                     </tbody>
                 </table>
             </div>
         </div>
    </div>

   
</div>
@endsection