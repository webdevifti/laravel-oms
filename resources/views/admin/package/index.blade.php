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
                                
                                <a href="#"  data-toggle="modal" data-target="#logoutModal_{{ $package->id }}" class="btn btn-success"> <i class="fas fa-pen fa-fw"></i></a>
                                <a href="{{ route('package.delete', $package->id) }}" onclick="return confirm('Are You Sure?')" class="btn btn-danger"> <i class="fas fa-trash fa-fw"></i></a>
                            </td>
                         </tr>
                         <div class="modal fade" id="logoutModal_{{ $package->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit the Package</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('package.update', $package->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $package->id }}" name="id">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mt-4">
                                                        <label for="">Package Title *</label>
                                                        <input type="text" name="package_title" placeholder="Package title" class="form-control" required value="{{ $package->package_title }}">
                                                        
                                                    </div>
                                                    <div class="mt-4">
                                                        <label for="">Package Mode *</label>
                                                        <select name="package_mode" class="form-control">
                                                            <option value="">--select mode--</option>
                                                            @foreach($active_modes as $mode)
                                                            @if($mode->id == $package->mode_id)
                                                                <option selected value="{{ $mode->id }}">{{ $mode->package_mode }}</option>
                                                                @else
                                                                <option value="{{ $mode->id }}">{{ $mode->package_mode }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        @error('package_mode') <span style="color: red">{{ $message }}</span> @enderror
                                                    </div>
                                                    <div class="mt-4">
                                                        <label for="">Number od user *</label>
                                                        <input type="text" name="number_of_user" placeholder="User Number" value="{{ $package->number_of_user }}" class="form-control">
                                                       
                                                    </div>
                                                    <div class="mt-4">
                                                        <label for="">Package Features *</label>
                                                        <select name="package_features[]" id="langOpt" multiple class="form-control">
                                                          @php
                                                              $active_features = \App\Models\PackageAttr::where('package_id',$package->id)->get();
                                                             
                                                          @endphp
                                                            @foreach($active_features as $feature)
                                                                <option selected value="{{ $feature->id }}">{{ $feature->rel_with_packagefeature->package_features }}</option>
                                                            @endforeach
                                                        </select>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mt-4">
                                                        <label for="">Package sub title</label>
                                                        <input type="text" name="package_sub_title" placeholder="Sub title" value="{{ $package->package_sub_title }}" class="form-control">
                                                    </div>
                                                    <div class="mt-4">
                                                        <label for="">Package Price *</label>
                                                        <input type="text" name="price" placeholder="Price" value="{{ $package->price }}" class="form-control">
                                                       
                                                    </div>
                                                    <div class="mt-4">
                                                        <label for="">Package Billed</label>
                                                        <select name="bill" class="form-control">
                                                            @if($package->billed == 'monthlyandyearly')
                                                            <option value="weeklyandmonthly">Weekly and Monthly</option>
                                                            <option selected value="monthlyandyearly">Monthly abd Yearly</option>
                                                            @else
                                                            <option value="monthlyandyearly">Monthly abd Yearly</option>
                                                            <option selected value="weeklyandmonthly">Weekly and Monthly</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                    <div class="mt-4">
                                                        <label for="">Status</label>
                                                        <select name="status" class="form-control">
                                                            @if($package->status == 1)
                                                            <option selected value="1">Active</option>
                                                            <option value="0">Deactive</option>
                                                            @else
                                                            <option value="1">Active</option>
                                                            <option selected value="0">Deactive</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
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