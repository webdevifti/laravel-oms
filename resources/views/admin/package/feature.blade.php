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
        @if(session()->has('delete'))
            <div class="alert alert-success">
                {{ session()->get('delete') }}
            </div>
        @endif
        @if(session()->has('updated'))
        <div class="alert alert-success">
            {{ session()->get('updated') }}
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
                                <input data-id={{ $feature->id }} class="toggle-class" type="checkbox" data-onstyle="success" data-toggle="toggle" data-offstyle="danger" data-on="Active" data-off="Inactive" {{ $feature->status ? 'checked':'' }}>
                            </td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#logoutModal_{{ $feature->id }}" class="btn btn-success"> <i class="fas fa-pen fa-fw"></i></a>
                                <a href="{{ route('package.feature.delete', $feature->id) }}" onclick="return confirm('Are You Sure?')"  class="btn btn-danger"> <i class="fas fa-trash fa-fw"></i></a>
                            </td>
                         </tr>
                         <div class="modal fade" id="logoutModal_{{ $feature->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                         <div class="modal-dialog" role="document">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Edit the Feature</h5>
                                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">×</span>
                                     </button>
                                 </div>
                                 <div class="modal-body">
                                     <form action="{{ route('package.feature.update', $feature->id) }}" method="POST">
                                         @csrf
                                         <input type="hidden" value="{{ $feature->id }}" name="id">
                                         <div class="mt-4">
                                            <input class="form-control" name="feature" type="text" value="{{ $feature->package_features }}" required>
                                         </dfiv>
                                         <div class="mt-4">
                                             <button type="submit" class="btn btn-success">Update</button>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
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
           var feature_id = $(this).data('id');

           $.ajax({
               type: 'GET',
               dataType: 'json',
               url: '/admin/package/feature/statuschanege',
               data:{'status':status,'feature_id': feature_id},
               success: function(data){
                   console.log(data.success);
               }
           })
       })
   })
</script>
@endsection