@extends('admin/admin')

@section('judul')
     <center><h2 class="h5 no-margin-bottom">User Input</h2></center>
@endsection

@section('konten')
<div class="col-lg-12">
	<div class="block margin-bottom-sm">
	 <div class="title"><strong>Please Fill The BOX</strong></div>
	<form class="form-horizontal" action="UserStore" method="post">
		<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">User Id</label>
		<div class="col-sm-9">
		  <input type="text" disabled="" placeholder="Auto" class="form-control" name="iduser" id="iduser">
		</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">First Name</label>
		<div class="col-sm-9">
		  <input type="text" class="form-control" name="firstuser" id="firstuser" required>
		</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Last Name</label>
			<div class="col-sm-9">
		 	 <input type="text" class="form-control" name="lastuser" id="lastuser">
			</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Username</label>
			<div class="col-sm-9">
		 	 <input type="text" class="form-control" name="username" id="username" required>
			</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Jabatan</label>
		<div class="col-sm-9">
		<select name="jabatan" class="form-control mb-3 mb-3" > 
			<option  value="0">Admin</option>
			<option  value="1">Kasir</option>
		  </select>
		  </div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
	 	<label class="col-sm-3 form-control-label">Phone</label>
	  	<div class="col-sm-9">
			<input type="text" class="form-control" name="phoneuser" id="phoneuser" required><small class="help-block-none">Input with number</small>
	 	 </div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label" required>Email</label>
		<div class="col-sm-9">
		  <input type="email" class="form-control" name="emailuser" id="emailuser" required>
		</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label" required>Password</label>
		<div class="col-sm-9">
		  <input type="password" placeholder="Password" class="form-control" name="passuser" id="passuser" required>
		</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label" required>Confirm Password</label>
		<div class="col-sm-9">
		  <input type="password" placeholder="Confirm Password" class="form-control" name="passuser" id="copass" onkeyup="cekPass()">
			<p id="eror" style="color:red"></p>		  
		</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Job Status</label>
		<div class="col-sm-9">
		<select name="jsuser" class="form-control mb-3 mb-3" > 
			<option  value="0">Active</option>
			<option  value="1">Non - Active</option>
		  </select>
		  </div>
	  </div>
	  <div class="line"></div>
	<center><input type="submit" value="add" class="btn btn-primary"></td></center>
	</form>
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

<script>
	function cekPass()
	{
		var pass = document.getElementById('passuser').value;
		var copass = document.getElementById('copass').value;
		var text = document.getElementById('eror');
		if(pass != copass)
		{
			text.style.color='red';
			text.innerHTML='Password is not Correct';
		}
		else
		{
			text.style.color = 'green';
			text.innerHTML = 'Password is Correct';
		}	
	}
</script>

@endsection