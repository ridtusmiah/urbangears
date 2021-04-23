@extends('admin.layouts.default')
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
                    <h5 class="mt-1 mb-2">Congratulations!</h5>
                    <p class="mb-0">You have successfully updated the data.</p>
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
                    <h5 class="mt-1 mb-2">Data update faild!</h5>
                    <p class="mb-0">Again try to edit./p>
                  </div>
                </div>
              </div>
            </div>
    @endif

<div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Edit User</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
       		<form  method="post" action="{{ URL::to('updateCategory/'.$category->id) }}">
       			{{ csrf_field() }}
       			<div class="row col-md-12">
       				<div class="col-md-6">
	       				<div class="form-group">
		                  <input style="color: black;"  name="name" type="text" class="form-control input-rounded " placeholder="Enter User Name" value="{{ $category->name }}">
		              </div>
       				</div>
       				<div class="col-md-6">
       					
       				</div>
       			</div>
       	
               
                
                                          
               <button type="submit" class="btn btn-primary">Update</button>                            
             </form>
       
          </div>
        </div>
      </div>
    </div>


















 							






@stop