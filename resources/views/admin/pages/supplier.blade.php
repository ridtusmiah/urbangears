@extends('admin.layouts.datatableLayout')
@section('css')

@endsection
@section('content')
@if(session()->has('msg') && session()->get('msg') == 1)
        <div class="col-xl-6">
              <div class="alert alert-success left-icon-big alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="alert-left-icon-big">
                    <span><i class="mdi mdi-check-circle-outline"></i></span>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-1 mb-2">Well!</h5>
                    <p class="mb-0">You have finally deleted the data.</p>
                  </div>
                </div>
              </div>
            </div>
    @endif
    @if(session()->has('msg') && session()->get('msg') == 2)
       <div class="col-xl-6">
              <div class="alert alert-danger left-icon-big alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="alert-left-icon-big">
                    <span><i class="mdi mdi-alert"></i></span>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-1 mb-2">Data deletion faild!</h5>
                    <p class="mb-0">Again try to delete./p>
                  </div>
                </div>
              </div>
            </div>
    @endif
 <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">User Datatable</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
          <!-- User table show -->
            <table id="example3" class="display min-w850">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($category as $cat)
                <tr>
                  <td>{{ $cat->id }}</td>
                  <td><img class="rounded-circle" width="35" src="{{asset('admin/public/images/profile/small/pic1.jpg')}}" alt=""></td>
                  <td>{{ $cat->name }}</td>
                  <td>
                    <div class="d-flex">
                       <a href="{{ URL::to('editCategory/'.$cat->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1" type="button"><i class="fa fa-pencil"></i></a>
                        <!--Delete Modal Trigger-->
                      <a href="#" class="btn btn-danger shadow btn-xs sharp"><i data-toggle="modal" data-target="#basicModal{{ $cat->id }}" class="fa fa-trash"></i></a>
                         <!--Delete Modal -->
                        <div class="modal fade" id="basicModal{{ $cat->id }}">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Are you sure?</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">You want to delete {{ $cat->username }}</div>
                              <div class="modal-footer">
                                <a type="button" class="btn btn-danger light"  data-dismiss="modal">Close</a>
                                <a href="{{ URL::to('deleteCategory/'.$cat->id) }}" type="button" class="btn btn-primary">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>                        
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
@section('script')



    <script>
   


    </script>
@endsection

