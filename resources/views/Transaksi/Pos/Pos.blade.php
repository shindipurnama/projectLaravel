@extends('admin/admin')

@section('judul')
     <center><h2 class="h5 no-margin-bottom">POINT OF SALES</h2></center>
@endsection

@section('konten')

<div class="col-lg-12">
<div class="block margin-bottom-sm">
	<table width="100%">
		<thead>
		<th><label class="col-sm-form-control-label">Auto Id</label>
		<label for="inlineFormInput" class="sr-only">Name</label>
		<input id="inlineFormInput" type="text" disabled="" placeholder="Category Id" class="mr-sm-3 form-control"></th>
		<th><label class="col-sm-form-control-label">Category Name</label>
		<div class="col-sm-5">
		  <select id="inlineFormInput" name="account" class="form-control mb-3 mb-3">
			<option>Makanan</option>
			<option>Minuman</option>
			</select></th></div>
		</thead>
	</table>
	  <input type="text" placeholder="Enter Product Id or Scan" class="form-control">
	<br>
	<table width="100%" cellpadding="10px" bordercolorlight="#E8A7A8" border="2"> 
		<thead>
			<th></th>
			<th width="295">Product Name</th>
			<th width="45">Qty</th>
			<th width="212">Price</th>
			<th width="228">Sub Total</th>
		<td width="43"></thead>
		<tbody>
			<tr>
				<td width="28"><button class="btn btn-primary">x</button></td>
				<td>Jajan Sehat</td>
				<td><input type="number" width="40%" class="mr-sm-3 form-control"></td>
				<td>Rp. 22.000</td>
				<td>Rp. 22.000</td>
			</tr>
		</tbody>
	</table>
	
  </div>


<div class="row">
<div class="col-lg-8">
	<div class="block margin-bottom-sm">
		<label class="col-sm-form-control-label">Sub Total</label>
		<input id="inlineFormInput" type="text" disabled="" placeholder="Rp. 22.000" class="mr-sm-3 form-control">
		<label class="col-sm-form-control-label">Pajak</label>
		<input id="inlineFormInput" type="text" disabled="" placeholder="10%" class="mr-sm-3 form-control">
		<label class="col-sm-form-control-label">Discount</label>
		<input id="inlineFormInput" type="text" disabled="" placeholder="0" class="mr-sm-3 form-control">
	</div>
</div>

<div class="col-lg-4">
	<div class="block margin-bottom-sm">
		<label class="col-sm-form-control-label">Total</label>
		<input id="inlineFormInput" type="text" disabled="" placeholder="Rp. 22.000" class="mr-sm-3 form-control">
	</div>
</div>
</div>
</div>
@endsection