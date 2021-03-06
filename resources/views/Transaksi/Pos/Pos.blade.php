@extends('admin/admin')

@section('judul')
     <center><h2 class="h5 no-margin-bottom">POINT OF SALES</h2></center>
@endsection

@section('konten')

`<div class="col-lg-12">
<form class="form-horizontal" action="PosStore" method="post">
			{{ @csrf_field() }}
<div class="row">
	<div class="col-lg-3">
		<div class="block margin-bottom-sm">
			<label for="inlineFormInput" class="col-sm-form-control-label">Nota</label>
				<input name="notaid" id="notaid" type="text" disabled="" placeholder="AUTO" 
				class="mr-sm-3 form-control">
			<label for="inlineFormInput" class="col-sm-form-control-label">Date</label>
				<input name='date' id="date" type="date"  class="mr-sm-3 form-control" >
		</div>
	</div>

	<div class="col-lg-5">
		<div class="block margin-bottom-sm">
			<label for="inlineFormInput" class="col-sm-form-control-label">User</label>
				<select id="inlineFormInput" name="iduser" class="form-control mb-0 mb-0">
				<option disabled selected>Pilih User</option>
					@foreach ($user as $us)                   
						<option value="{{ $us->USER_ID }}">
							@if($us->JOB_STATUS == 0)
									{{ $us->FIRST_NAME }} {{ $us->LAST_NAME }}
								@endif
						</option>
						@endforeach
				</select>
			<label for="inlineFormInput" class="col-sm-form-control-label">Customer</label>
				<select id="inlineFormInput" name="idcus" class="form-control mb-0 mb-0">
					<option disabled selected>Pilih Customer</option>
					@foreach ($customer as $cus)                   
						<option value="{{ $cus->CUSTOMER_ID }}">
							@if($cus->CUSTOMER_STATUS == 0)
									{{ $cus->FIRST_NAME }} {{ $cus->LAST_NAME }}
								@endif
						</option>
						@endforeach
				</select>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="block margin-bottom-sm">
				<label class="col-sm-form-control-label">Category ID</label>
				<input for="inlineFormInput" type="text" disabled="" placeholder="AUTO" 
					class="mr-sm-1 form-control">
				<label for="inlineFormInput" class="col-sm-form-control-label">Category Name</label>
					<select id="inlineFormInput" name="idcat" class="form-control mb-0 mb-0">
					<option disabled selected>Pilih Category</option>
						@foreach ($categories as $cat)                   
							<option value="{{ $cat->CATEGORY_ID }}">
								@if($cat->CATEGORY_STATUS == 0)
										{{ $cat->CATEGORY_NAME }}
									@endif
							</option>
							@endforeach
					</select>
			</div>
		</div>
	</div>


	<div class="block margin-bottom-sm">
	<center>
	  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
	  	Select Product</button>
	<br><br>
	</center>
	<table id="keranjang" width="100%" cellpadding="10px" bordercolorlight="#E8A7A8" border="2"> 
		<thead>
			<th width="295">Product Name</th>
			<th width="45">Qty</th>
			<th width="212">Price</th>
			<th width="45">Discount</th>
			<th width="228">Sub Total</th>
			<th width="43"> Action</th>
		</thead>
		<tbody>
		</tbody>
	</table>
	</div>



<div class="row">
	<div class="col-lg-8">
		<div class="block margin-bottom-sm">
			<label class="col-sm-form-control-label">Sub Total</label>
			<input id="subtotal-val" type="text" disabled="" placeholder="Rp.0" class="mr-sm-3 form-control">
			<label class="col-sm-form-control-label">Tax</label>
			<input id="pajak" type="text" disabled="" placeholder="10%" class="mr-sm-3 form-control">
		</div>
	</div>

	<div class="col-lg-4">
		<div class="block margin-bottom-sm">
			<label class="col-sm-form-control-label">Total</label>
			<input id="total-val" name="total" type="text" placeholder="Rp.0" class="mr-sm-3 form-control">
			<center> <br> 
			<button type="submit" class="btn btn-success">add payment</button>
			<button type="reset" class="btn btn-warning">cancel</button></center> 
		</div>
	</div>
</div>
</form>
</div>

<!-- Modal Product-->
  <div class="modal fade bd-example-modal-lg" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">          
          <h4 class="modal-title">Product</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
		<div class="table-responsive"> 
         	<table width="100%" cellpadding="10px" bordercolorlight="#E8A7A8" border="2"> 
		<thead>
			<th width="295">Product ID</th>
			<th width="45">Category ID</th>
			<th width="212">Product Name</th>
			<th width="228">Product Price</th>
			<th width="228">Product Stock</th>
			<th width="228">Explanation</th>
			<th width="45">Action</th>
		</thead>
		<tbody>
			@foreach($product as $pr)
                      <tr>
                      	  <td>{{ $pr->PRODUCT_ID }}</td>
						  <td>{{ $pr->CATEGORY_ID }}</td>
						  <td>{{ $pr->PRODUCT_NAME }}</td>
						  <td>{{ $pr->PRODUCT_PRICE }}</td>
						  <td>{{ $pr->PRODUCT_STOCK }}</td>
						  <td>{{ $pr->EXPLANATION }}</td>
						  <td><input type="button" onclick="pilihBarang('{{ $pr -> PRODUCT_ID }}')" 
						  value="add" class="btn btn-info"></td>
                    </tr>
             @endforeach
		</tbody>
	</table>
	</div>
 </div>
        
      </div>
    <!-- end of modal content -->      

  

          </div>
        </div>
      </div>
</div>

<script>
	var barang = <?php echo json_encode($product); ?>;
	console.log(barang[0]["PRODUCT_NAME"]);
	var colnum=0;

	function getVal(event){
		if (event.keyCode === 13) {
			modal();
		}
	}

	function pilihBarang(id){
		var index;
		for(var i=0;i<barang.length;i++){
			if(barang[i]["PRODUCT_ID"]==id){
				console.log(barang[i]);
				index=i;
				break;
			}
		}
		$("#myModal").modal("hide");

		var table = document.getElementById("keranjang");
		var row = table.insertRow(table.rows.length);
		row.setAttribute('id','col'+colnum);
		var id = 'col'+colnum;
		colnum++;

		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);
		var cell5 = row.insertCell(4);
		var cell6 = row.insertCell(5);
		console.log(index);
		cell1.innerHTML = '<input type="hidden" name="id['+barang[index]["PRODUCT_ID"]+']" value="'+barang[index]["PRODUCT_ID"]+'">'+barang[index]["PRODUCT_NAME"];
		cell2.innerHTML = '<input type="number" name="qty['+barang[index]["PRODUCT_ID"]+']" value="1" oninput="recount(\''+barang[index]["PRODUCT_ID"]+'\')" id="qty'+barang[index]["PRODUCT_ID"]+'">';		
		cell3.innerHTML = '<input type="hidden" id="harga'+barang[index]["PRODUCT_ID"]+'" name="harga['+barang[index]["PRODUCT_ID"]+']" value="'+barang[index]["PRODUCT_PRICE"]+'">'+barang[index]["PRODUCT_PRICE"];
		cell4.innerHTML = '<input class="discount" type="number" name="discount['+barang[index]["PRODUCT_ID"]+']" value="0" oninput="recount(\''+barang[index]["PRODUCT_ID"]+'\')" id="discount'+barang[index]["PRODUCT_ID"]+'">';	
		cell5.innerHTML = '<input type="hidden" class="subtotal" name="subtotal['+barang[index]["PRODUCT_ID"]+']" value="'+barang[index]["PRODUCT_PRICE"]+'" id="subtotal'+barang[index]["PRODUCT_ID"]+'"><span id="subtotalval'+barang[index]["PRODUCT_ID"]+'">'+barang[index]["PRODUCT_PRICE"]+'</span>';
		cell6.innerHTML = '<button onclick="hapusEl(\''+id+'\')"  class="btn btn-danger">Del</button>';

		total();
		
	}
	function lm(i){
		var min =  document.getElementById("qty"+i).value;
		if(min <= 1){

		}else{
		min--;
		document.getElementById("qty"+i).value = min;
		recount(i);
		}
	}
	function ln(i){
		var plus =  document.getElementById("qty"+i).value;
		console.log(plus);
		plus++;
		document.getElementById("qty"+i).value = plus;
		console.log(plus);
		recount(i);
	}
	function total(){
		var subtotals = document.getElementsByClassName("subtotal");
		var total = 0;
		for(var i=0; i<subtotals.length;++i){
			total += Number(subtotals[i].value); 
		}
		document.getElementById("subtotal-val").value = total;
		total = parseInt(110/100*total);
		document.getElementById("total-val").value = total;

	}

	function recount(id){

		var price = document.getElementById("harga"+id).value;
		var sembarang = document.getElementById("qty"+id).value;
		var discount = document.getElementById("discount"+id).value;

		var lego = Number(price*sembarang)-discount; 
		document.getElementById("subtotal"+id).value = lego;
		document.getElementById("subtotalval"+id).innerHTML = lego;
		total();
	}

	function modal(){
		$("#myModal").modal("show");
		document.getElementById("myText").value = "";
	}
	function hapusEl(idCol) {
		document.getElementById(idCol).remove();
		total();
	}

</script>

@endsection