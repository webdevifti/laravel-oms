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

    <!-- Content Row -->
    <div class="row">
        {{-- <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam blanditiis quae aspernatur mollitia totam aperiam voluptates reprehenderit excepturi ab ipsam beatae numquam libero officiis voluptate, fugit velit odio illum ipsum?</p>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci libero deserunt quas! Omnis quasi voluptas, adipisci libero non cum maxime aperiam incidunt deserunt ipsam voluptatum repellat reiciendis ducimus accusamus impedit.</h4>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, porro culpa odit fuga in quia neque quae accusamus sint, totam tenetur sit rerum mollitia! Assumenda vitae ad expedita modi voluptatum.</h1>
            </div>
        </div> --}}

    </div>
</div>
@endsection