@extends('admin.master')
@section('Content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">New Organization Requests List</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
     <!-- Page Heading -->
   
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                            <th>Select</th>
                            <th>Organization Name</th>
                            <th>Email</th>
                            <th>Contact Person</th>
                            <th>Contact No</th>
                            <th>Business Category</th>
                            <th>Created On</th>
                            <th>Status</th>
                            <th>Action</th>
                         </tr>
                     </thead>
                     <tfoot>
                         <tr>
                            <th>Select</th>
                            <th>Organization Name</th>
                            <th>Email</th>
                            <th>Contact Person</th>
                            <th>Contact No</th>
                            <th>Business Category</th>
                            <th>Created On</th>
                            <th>Status</th>
                            <th>Action</th>
                         </tr>
                     </tfoot>
                     <tbody>
                         <tr>
                            <td><input type="checkbox"></td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>
                                <label class="badge badge-warning">Pending</a>
                            </td>
                            <td>
                                <a href="{{ route('organization.request.view') }}" class="btn btn-info"> <i class="fas fa-eye fa-fw"></i>View</a>
                            </td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>

</div>
@endsection