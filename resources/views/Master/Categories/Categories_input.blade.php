@extends('admin/admin')

@section('judul')
     <center><h2 class="h5 no-margin-bottom">Category Input</h2></center>
@endsection

@section('konten')
<div class="col-lg-12">
	<div class="block margin-bottom-sm">
	 <div class="title"><strong>Please Fill The BOX</strong></div>
 		<form class="form-horizontal" action="CategoriesStore" method="post">
			{{ @csrf_field() }}
			<div class="form-group row" >
				<label class="col-sm-3 form-control-label">Category Id</label>
				<div class="col-sm-9">
				  <input type="text" disabled=""  placeholder="Auto" class="form-control" name="idcat" id="idcat">
				</div>
			  </div>
			<div class="form-group row has-danger">
				<label class="col-sm-3 form-control-label">Category Name</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" name="namecat" id="namecat" required >
				</div>
			  </div>
			  <div class="form-group row">
				<label class="col-sm-3 form-control-label">Status</label>
				<div class="col-sm-9">
				  <select name="cats" class="form-control mb-3 mb-3" > 
					<option  value="0">Active</option>
					<option  value="1">Non - Active</option>
				  </select>
				</div>
			  </div>
			<center><input type="submit" value="add" class="btn btn-primary"></center>
		</form>
	</div>
</div>
<!-- Modal-->
<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-sm">
	<div class="modal-content" >
	  <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Add a new Caregory</strong>
		<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	  </div>
	  <div class="modal-body">
		  <h2>Are You Sure To Add This Data?</h2>
	  </div>
	  <div class="modal-footer">
		<a href="CategoriesIndex"><button type="submit" class="btn btn-primary">Yes</button></a>
		<button type="button" data-dismiss="modal" class="btn btn-info">Add More</button>
	  </div>
	</div>
  </div>
</div>
@endsection