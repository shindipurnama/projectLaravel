@extends('admin/admin')

@section('judul')
     <center><h2 class="h5 no-margin-bottom">Customer Input</h2></center>
@endsection

@section('konten')
<div class="col-lg-12">
	<div class="block margin-bottom-sm">
	 <div class="title"><strong>Please Fill The BOX</strong></div>
		@foreach ($customer as $cus)
	<form class="form-horizontal" action="CustomerUpdate" method="post">
		{{ @csrf_field() }}
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Customer Id</label>
		<div class="col-sm-9">
		  <input type="text" class="form-control" name="idcus" id="idcus" value="{{ $cus->CUSTOMER_ID }}">
		</div>
	  </div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">First Name</label>
		<div class="col-sm-9">
		  <input type="text" class="form-control" name="firstcus" id="firstcus" value="{{ $cus->FIRST_NAME}}">
		</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Last Name</label>
			<div class="col-sm-9">
		 	 <input type="text" class="form-control" name="lastcus" id="lastcus" value="{{ $cus->LAST_NAME}}">
			</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
	 	<label class="col-sm-3 form-control-label">Phone</label>
	  	<div class="col-sm-9">
			<input type="text" class="form-control" name="phonecus" id="phonecus" value="{{ $cus->PHONE }}"><small class="help-block-none">Input with number</small>
	 	 </div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Email</label>
		<div class="col-sm-9">
		  <input type="email" class="form-control" name="emailcus" id="emailcus" value="{{ $cus->PHONE }}">
		</div>
	  </div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Street</label>
		<div class="col-sm-9">
		  <input type="text" class="form-control" name="streetcus" id="namecus" value="{{ $cus->STREET }}">
		</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">City</label>
		<div class="col-sm-9">
		  <input type="text" class="form-control" name="citycus" id="citycus" value="{{ $cus->CITY }}">
		</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">State</label>
		<div class="col-sm-9">
		  <input type="text" class="form-control" name="statecus" id="statecus" value="{{ $cus->STATE }}">
		</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Zip Code</label>
		<div class="col-sm-9">
		  <input type="text" class="form-control" name="zccus" id="zccus" value="{{ $cus->ZIP_CODE }}">
		</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Status</label>
		<div class="col-sm-9">
		  <select name="cuss" class="form-control mb-3 mb-3" > 
			<option disabled selected>Pilih Status</option>
			<option  value="0">Active</option>
			<option  value="1">Non - Active</option>
		  </select>
		</div>
	  </div>
	  <div class="line"></div>
	<center><input type="submit" value="Save" class="btn btn-primary"></center>
	</form>
		@endforeach
</div>
</div>
<!-- Modal-->
<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-sm">
	<div class="modal-content" >
	  <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Add a new User</strong>
		<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	  </div>
	  <div class="modal-body">
		  <h2>Are You Sure To Add This Data?</h2>
	  </div>
	  <div class="modal-footer">
		<a href="CustomerIndex"><button type="submit" class="btn btn-primary">Yes</button></a>
		<button type="button" data-dismiss="modal" class="btn btn-info">Add More</button>
	  </div>
	</div>
  </div>
</div>
@endsection