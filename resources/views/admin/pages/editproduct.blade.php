@extends('admin.layouts.datepickerlayout')
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
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Edit Product</h4>
        </div>
        <div class="card-body">
          <div class="form-validation">
            <form class="form-valide" method="POST" action="{{ URL::to('updateproduct/'.$products->id) }}" novalidate="novalidate">

                        {{ csrf_field() }}
              <div class="row">
                <div class="col-xl-6">
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-username1">Product Name
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" value=" {{ $products->name }} "  required id="val-username1" name="name" placeholder="Enter a Product name..">
                      <span style="color: red"> {{ $errors->first('name') }} </span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label"   for="val-suggestions2">Details </label>
                    <div class="col-lg-6">
                      <textarea class="form-control" id="val-suggestions2"  valu name="details" rows="5" placeholder="What would you like to see?"> {{ $products->details }} </textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-username3">Buying Price
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" required class="form-control" value=" {{ $products->buying_price }} " id="val-username3" name="buying_price" placeholder="Enter buying price..">
                      <span style="color: red"> {{ $errors->first('buying_price') }} </span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-username4">Selling Price
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="val-username4" value=" {{ $products->selling_price }} " required name="selling_price" placeholder="Enter selling price..">
                      <span style="color: red"> {{ $errors->first('selling_price') }} </span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-username5">Quantity
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="val-username5" value=" {{ $products->stock }} " required name="stock" placeholder="Enter how many quantity of Product..">
                      <span style="color: red"> {{ $errors->first('stock') }} </span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-username11">Category
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <div class="form-group">
                          @php
                            $cat=DB::table('categories')->get(); 
                          @endphp
                          <select class="form-control default-select" required name="category_id">
                            <option disabled="" selected="">Select Category</option>
                            @foreach($cat as $row)
                            
                             <option value="{{ $row->id }}" @if ($products->category_id === $row->id) selected='selected' @endif> {{ $row->name}} </option>

                            @endforeach
                          </select>
                          <span style="color: red"> {{ $errors->first('category_id') }} </span>
                        </div>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-lg-4 col-form-label" for="val-username12">Supplier
                        <span class="text-danger">*</span>
                      </label>
                      <div class="col-lg-6">
                        <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="form-group">
                         @php
                            $supp=DB::table('suppliers')->get(); 
                          @endphp
                          <select class="form-control default-select " name="supplier_id">
                            <option disabled="" selected="">Menu</option>
                             @foreach($supp as $row)
                             <option value="{{ $row->id }}" @if ($products->supplier_id === $row->id) selected='selected' @endif> {{ $row->name}} </option>

                            <!-- <option value="{{ $row->id }}"> {{ $row->name}} </option> -->
                            @endforeach
                          </select>
                          <span style="color: red"> {{ $errors->first('supplier_id') }} </span>
                        </div>
                    </div>
                      <input type="text" class="form-control" id="val-username12" value=" {{ $products->supplier }} " name="supplier" placeholder="Either Select from menu or type here">
                    
                  </div>
                      </div>
                  </div>
                  
                   <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-username32">Buying Date
                     
                    </label>
                    <div class="col-lg-6">
                           <input name="buying_date" class="datepicker-default form-control" value="{{ $products->buying_date }}"  id="datepicker">
                    
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-username323">Sort Order
                     
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="val-username323" value=" {{ $products->sort_order }} " name="sort_order" placeholder="Enter sorting..">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-username332">Status
                      <span class="text-danger">*</span>

                    </label>
                    <div class="col-lg-6">
                       <div class="form-group">
                          <select class="form-control default-select "  value=" {{ $products->status }} " name="status">
                            <option value="">Select Status</option>
                              <option value="0" {{ $products->status == '0' ? 'selected' : '' }}>Inactive</option>
                              <option value="1" {{ $products->status == '1' ? 'selected' : '' }}>Active</option>
                                </select>
                          </select>
                          <span style="color: red"> {{ $errors->first('status') }} </span>
                        </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-8 ml-auto">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
@section('script')



    



@endsection