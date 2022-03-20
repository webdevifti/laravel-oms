@extends('admin.master')
@section('Content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Package List</h1>
        <a href="{{ route('package.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
    </div>
     <!-- Page Heading -->
   
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Package Title</th>
                             <th>Package Mode</th>
                             <th>Pricing</th>
                             <th>No of user</th>
                             <th>Created On</th>
                             <th>Updated On</th>
                             <th>Status</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tfoot>
                         <tr>
                            <th>Package Title</th>
                             <th>Package Mode</th>
                             <th>Pricing</th>
                             <th>No of user</th>
                             <th>Created On</th>
                             <th>Updated On</th>
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
@endsection