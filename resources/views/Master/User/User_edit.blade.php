@extends('admin/admin')

@section('judul')
     <center><h2 class="h5 no-margin-bottom">User Edit</h2></center>
@endsection

@section('konten')
<div class="col-lg-12">
	<div class="block margin-bottom-sm">
	 <div class="title"><strong>Please Fill The BOX</strong></div>
		@foreach ($user as $us)
	<form class="form-horizontal" action="UserUpdate" method="post">
		{{ @csrf_field() }}
	  <div class="form-group row" action="CategoriesStore" method="post">
		<label class="col-sm-3 form-control-label">User Id</label>
		<div class="col-sm-9">
		  <input type="text" value="{{ $us->USER_ID }}" class="form-control" name="idus" id="idus">
		</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">First Name</label>
		<div class="col-sm-9">
		  <input type="text" class="form-control" name="firstuser" id="firstuser" value="{{ $us->FIRST_NAME }}">
		</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Last Name</label>
			<div class="col-sm-9">
		 	 <input type="text" class="form-control" name="lastuser" id="lastuser" value="{{ $us->LAST_NAME }}">
			</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
	 	<label class="col-sm-3 form-control-label">Phone</label>
	  	<div class="col-sm-9">
			<input type="text" class="form-control" name="phoneuser" id="phoneuser" value="{{ $us->PHONE }}"><small class="help-block-none">Input with number</small>
	 	 </div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Email</label>
		<div class="col-sm-9">
		  <input type="email" class="form-control" name="emailuser" id="emailuser" value="{{ $us->EMAIL }}">
		</div>
	  </div>
	  <div class="line"></div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Password</label>
		<div class="col-sm-9">
		  <input type="password" class="form-control" name="passuser" id="passuser" value="{{ $us->PASSWORD }}">
		</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Job Status</label>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="jsuser" id="jsuser" value="{{ $us->JOB_STATUS }}">
		  </div>
	  </div>
	  <div class="line"></div>
			 
	<center><input type="submit"  value="Save" class="btn btn-primary"></td></center>
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
		<a href="UserIndex"><button type="submit" class="btn btn-primary">Yes</button></a>
		<button type="button" data-dismiss="modal" class="btn btn-info">Add More</button>
	  </div>
	</div>
  </div>
</div>
@endsection