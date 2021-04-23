@extends('admin.layouts.cartLayout')
@section('content')
<nav class="navbar navbar-dark bg-dark">
 
    <span class="navbar-brand mb-0 h1">ICECREAM SHOP POS</span>
</nav>
 
<div class="row">
 
    <div class="col-sm-3">
 
        <div class="container">
            <div class="list-group-item list-group-item-action active">Item</div>
 
 
        <div class="panel-body bg-dark" style="color: white">
            
            <form id="frm-project">
                <div class="form-group">
 
                    <div>     
                        <img src="{{asset('/images/chocolate-ice.jpg')}}"  id="Chocolate" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                            <b>Chocolate</b>
                    </div>
                     
 
                    <div>
                    <img src="{{asset('/images/mango.jpg')}}" id="Mango" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                        <b>Mango</b>
                    </div>
 
                    <div>
                    <img src="{{asset('/images/venila.jpg')}}" id="Venila" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                        <b>Venila</b>
                    </div>
 
                    <div>
                    <img src="{{asset('/images/sww.jpg')}}" id="Strawberry" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                        <b>Strawberry</b>
                    </div>
 
                    <div>
                    <img src="{{asset('/images/mixfruit.jpg')}}" id="MixFruit" class="photo" width="100" height="100" data-toggle="modal" data-target="#exampleModal">
                        <b>MixFruit</b>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
 
    <div class="col-sm-6">
        <div class="container">
            <div class="list-group-item list-group-item-action active">AddProducts</div>
            <table id="tbl-item" class="table table-dark table-bordered" cellpadding="0" cellspacing="0" width="100%" align="center">
                <thead>
 
                <tr>
                    <th>Delete</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
 
                <tbody>
 
                </tbody>
 
            </table>
        </div>
    </div>
 
    <div class="col-sm-3">
        <div class="list-group-item list-group-item-action active">Bill</div>
        <div>
            <label>Total</label>
            <input type="text" style="color: yellow; background: black; font-size: 30px;" id="total" name="total" placeholder="Total" required>
        </div>
        </br>
 
        <div>
            <input type="button" class="btn btn-warning" value="reset" name="reset" id="reset">
        </div>
 
    </div>
 
</div>
 
 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Qty</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <input type="number" style="color: yellow; background: black; font-size: 30px;" id="qty" name="qty" placeholder="Qty" required>
                </div>
            </div>
 
 
 
 
            <div class="modal-footer">
                <input type="button" class="btn btn-info" value="Add" name="add" id="add" onclick="add()">
 
 
            </div>
        </div>
    </div>
</div>
 
<script src="{{asset('/component/jquery/jquery.js')}}"></script>
 
<script src="{{asset('/component/jquery/jquery.min.js')}}"></script>
 
<script type="text/javascript">
 
    var total = 0;
    var tot = 0;
 
    var item = null;
    var price = 0;
 
 
    var a = "";
 
    $("img").on("click",function()
        {
 
            a = $(this).prop('id')
 
        });
 
 
    function add()
    {
        if(a == "Chocolate")
        {
 
            item = "Chocolate";
            price = 32;
 
 
        }
        else if(a == "Mango")
        {
            item = "Mango";
            price = 35;
 
        }
        else if(a == "Venila")
        {
            item = "Venila";
            price = 40;
 
        }
        else if(a == "Strawberry")
        {
            item = "Strawberry";
            price = 45;
 
        }
 
        else if(a == "MixFruit")
        {
            item = "Strawberry";
            price = 35;
 
        }
 
        var qty = $('#qty').val();
        tot = qty * price;
 
        var table1 =
 
            "<tr>" +
            "<td><button type='button' name='record' class='btn btn-warning' onclick='deleterow(this)'>Delete</td>" +
            "<td>" + item    +  "</td>" +
            "<td>" + price    +  "</td>" +
 
            "<td>" + qty    +  "</td>" +
 
            "<td>" + tot    +  "</td>" +
 
            "</tr>" ;
 
 
        total += Number(tot);
        $('#total').val(total);
 
 
        $("table tbody").append(table1);
        $("exampleModal").modal('toggle');
        $('#qty').val("1");
 
 
    }
 
    function deleterow(e)
    {
        total_cost = parseInt($(e).parent().parent().find('td:last').text(),10);
        total -= total_cost;
        $('#total').val(total);
        $(e).parent().parent().remove();
 
    aler(1);
 
    }
 
    $('#reset').click(function()
    {
        location.reload();
    });
 
</script>
 
 @endsection