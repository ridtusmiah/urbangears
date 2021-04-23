@extends('admin.layouts.datatableLayout')
@section('css')
              


@endsection
@section('content')



<div class="container-fluid">
  <div class="form-head mb-4">
    <h2 class="text-black font-w600 mb-0">POS</h2>
  </div>
  <div class="bootstrap-badge">
    @php
        $cat=DB::table('categories')->get(); 
    @endphp
     @foreach($cat as $row)
            <a href="javascript:void()" class="badge badge-rounded badge badge-rounded badge-primary"> {{ $row->name }} </a>
          
      @endforeach
          </div>

  <div class="row">
      	<div class="col-lg-5">
  		





            



<div class="pricingTable">
                    
                    <ul  class="">
                      <table class="table" >     
                        <thead>
                          <tr>
                           
                            <th><strong>Name</strong></th>
                            <th><strong>Qty</strong></th>
                            <th><strong>Price</strong></th>
                            <th><strong>Sub Total</strong></th>
                            <th><strong>Action</strong></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody id="cart">
                          
                          
                        </tbody>
                      </table>
                        
                    </ul>
                    <div id="pricing" class="pricingTable-header">
                        
                       

                    </div>

                    <a href="#" type="button" id="submit" class="pricingTable-signup">Sign Up</a>
  </div>










  	</div>

  	<div class="col-lg-7">
  		<div class="container">
    <h2>All products</h2>
<!--     <table id="example3" class="display min-w850">
        <thead>
            <th>Product</th>
            <th>Price</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>

        <tbody>
            @if($products)
                @foreach($products as $p)
                    <tr>
                        <td>{{ $p->product }}</td>
                        <td>{{ $p->price }}</td>
                        <td>{{ $p->category }}</td>
                        <td><button>Edit</button></td>
                        <td><button>Delete</button></td>
                        
                    </tr> 
                @endforeach   
            @endif
        </tbody>
    </table> -->

<div id="demo"></div>
     <table id="example3" class="display min-w850">
              <thead>
                <tr>
                  <th>Action</th>
                  <th>#</th>
                  <th>Code</th>
                  <th>Product</th>
  		            <th>Buying Price</th>
                  <th>Selling Price</th>
                  <th>details</th>
  		            <th>Category</th>
  		            <th>Stock</th>
  		            
		            
                </tr>
              </thead>
              <tbody>
                @if($products)
                @foreach($products as $p)
                    <tr>
                       @if($p->stock > 0 )
                       <td> <a href="#" id="addproduct" class="addproduct" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></td> 
                       @endif
                       @if($p->stock == 0 )
                       <td>
                         <span class="badge light badge-danger">Stock Out</span>
                       </td>
                       @endif
                      <td class="nr">{{ $p->id }}</td>
                      <td> {{ $p->product_code }} </td>
                       <td class="name">{{ $p->product }}</td>
                       <td >{{ $p->buying_price }}</td>
                       <td class="price">{{ $p->selling_price }}</td>
                       <td><div class="bootstrap-popover d-inline-block">
              <button type="button" class="btn  btn-sm px-4 " data-container="body" data-toggle="popover" data-placement="top" data-content="{{ $p->details }}" title="Popover in Right">View</button>
            </div></td>
                       <td>{{ $p->category }}</td>
                       <td>{{ $p->stock }}</td>
                      
                @endforeach   
            @endif
        </tbody>
              </tbody>
            </table>


</div>
  	</div>

  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
  var selected = [];

  var len =0;

$(".addproduct").click(function() {
  //$("#cart").html("");
  
    var $row = $(this).closest("tr");    // Find the row
    
    var $name = $row.find(".name").text(); // Find the text
    var $price = $row.find(".price").text(); 
    var $quantity = 1;
    // Find the text
    
    // Let's test it out
   var object = {name: $name,quantity: $quantity, price: $price};

        selected.push(object);
        var cost = 0;
        len = selected.length;

        for (i=0; i<len; i++) {
          var j = i+1;
          var str = '<tr>\
                         <td> '+selected[i].name+' </td>\
                         <td>\
                          <form>\
                            <input type="number" class="quantity" value="" name="qty" maxlength="3" max="999" min="1" />\
                          </form>\
                          </td>\
                         <td><input type="number"  name="net_p" class="net_price" maxlength="99999" max="9999999" min="1" value="'+selected[i].price+'">\
                         </td>\
                         <td class="total_price table-default total"></td>\
                         <td><a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a></td>\
                        </tr>; '
      
      $("#pricing").html("");
      var str2 ='  <div class="price-value">\
                            <p>Quantity:</p>\
                            <p>Product: 00.00</p>\
                            <p>Vat: 0</p>\
                        </div>\
                        <h3 class="" style="font-size: 35px">Total</h3>\
                        <h5 class="grandTotal" style="font-size: 30px"></h5>'
      $('#pricing').append(str2); 
  
   
      


       $('#cart').append(str); 
       
        selected = [];
      } 
     
       
});








$('body').on('change', ".quantity", update);

function calculateSum() {
    var sum = 0;
    $(".total_price").each(function() {
      var value = $(this).text().replace('$', '');
      if (!isNaN(value) && value.length != 0) {
        sum += parseFloat(value);
      }
    });
    return sum;
}
function update() {
  var qty = parseInt($(this).val());
  var net = parseFloat($(this).parents('tr').find(".net_price").val());
  var total = qty * net;
  $(this).parents('tr').find(".total_price").text("$" + total);
  var grandTotall = $(".grandTotal").text('$' + calculateSum());

alert(grandTotall);

}


$("#submit").click(function() {

 

});






















})

</script>
@endsection
@section('script')

    



@endsection