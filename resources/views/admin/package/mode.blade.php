@extends('admin.master')
@section('Content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Package Mode</h1>
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
        {{-- <a href="{{ route('package.list') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Add New</a> --}}
    </div>
     <!-- Page Heading -->
   
    <form action="{{ route('admin.package.mode.create') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="mt-4">
                    <label for="">Package Mode</label>
                    <input type="text" placeholder="Package mode" name="package_mode" class="form-control">
                    <span style="color: red">@error('package_mode') {{ $message }} @enderror</span>
                </div>
                <div class="mt-4">
                    <label for="">No Of Days</label>
                    <input type="text" placeholder="No of Days" name="no_of_days" class="form-control">
                    <span style="color: red">@error('no_of_days') {{ $message }} @enderror</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="mt-4">
                    <label for="">Package Description</label>
                    <input type="text" placeholder="Package mode description" name="package_mode_desc" class="form-control">
                    <span style="color: red">@error('package_mode_desc') {{ $message }} @enderror</span>
                </div>
                <div class="mt-4">
                    <label for="">Status</label>
                    <select name="mode_status" class="form-control" id="">
                        <option value="">Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>
                    </select>
                    <span style="color: red">@error('mode_status') {{ $message }} @enderror</span>
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
                             <th>Package Mode</th>
                             <th>Mode Description</th>
                             <th>No Of Days</th>
                             <th>Created On</th>
                             <th>Status</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tfoot>
                         <tr>
                            <th>Package Mode</th>
                            <th>Mode Description</th>
                            <th>No Of Days</th>
                            <th>Created On</th>
                            <th>Status</th>
                            <th>Action</th>
                         </tr>
                     </tfoot>
                     <tbody>
                         @foreach($modes as $mode)
                         <tr>
                             <td>{{ $mode->package_mode }}</td>
                             <td>{{ $mode->package_mode_desc }}</td>
                             <td>{{ $mode->no_of_days }}</td>
                             <td>{{ $mode->created_at->diffForHumans() }}</td>
                             <td>
                                <input data-id={{ $mode->id }} class="toggle-class" type="checkbox" data-onstyle="success" data-toggle="toggle" data-offstyle="danger" data-on="Active" data-off="Inactive" {{ $mode->status ? 'checked':'' }}>
                            </td>
                            <td>
                                <a href="#" class="btn btn-success"> <i class="fas fa-pen fa-fw"></i></a>
                                <a href="{{ route('package.mode.delete', $mode->id) }}" onclick="return confirm('Are You Sure?')" class="btn btn-danger"> <i class="fas fa-trash fa-fw"></i></a>
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
           var mode_id = $(this).data('id');

           $.ajax({
               type: 'GET',
               dataType: 'json',
               url: '/admin/package/mode/statuschanege',
               data:{'status':status,'mode_id': mode_id},
               success: function(data){
                   console.log(data.success);
               }
           })
       })
   })
</script>
@endsection