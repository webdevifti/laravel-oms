@extends('admin.master')
@section('Content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Package List</h1>
        <a href="{{ route('package.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add New</a>
    </div>
    @if(session()->has('delete'))
        <div class="alert alert-success">
            {{ session()->get('delete') }}
        </div>
    @endif
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
                             <th>Status</th>
                             <th>Action</th>
                         </tr>
                     </tfoot>
                     <tbody>
                         @foreach($packages as $package)
                         <tr>
                             <td>{{ $package->package_title }}</td>
                             <td>{{ $package->rel_with_modes->package_mode }}</td>
                             <td>{{ $package->price }}</td>
                             <td>{{ $package->number_of_user }}</td>
                             <td>{{ $package->created_at->diffForHumans() }}</td>
                             
                             <td>
                                 <input data-id={{ $package->id }} class="toggle-class" type="checkbox" data-onstyle="success" data-toggle="toggle" data-offstyle="danger" data-on="Active" data-off="Inactive" {{ $package->status ? 'checked':'' }}>
                             </td>
                            <td>
                                
                                <a href="#" class="btn btn-success"> <i class="fas fa-pen fa-fw"></i></a>
                                <a href="{{ route('package.delete', $package->id) }}" onclick="return confirm('Are You Sure?')" class="btn btn-danger"> <i class="fas fa-trash fa-fw"></i></a>
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

@section('footer_script')
<script>
  
   $(function(){
       $('.toggle-class').on('change', function(){
           var status = $(this).prop('checked') == true ? 1:0;
           var package_id = $(this).data('id');

           $.ajax({
               type: 'GET',
               dataType: 'json',
               url: '/admin/package/statuschanege',
               data:{'status':status,'package_id': package_id},
               success: function(data){
                   console.log(data.success);
               }
           })
       })
   })
</script>
@endsection