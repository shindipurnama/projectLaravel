@extends('admin/admin')

@section('judul')
     <center><h2 class="h5 no-margin-bottom">Category Edit</h2></center>
@endsection

@section('konten')
<div class="col-lg-12">
	<div class="block margin-bottom-sm">
	 <div class="title"><strong>Please Fill The BOX</strong></div>
		@foreach ($categories as $cat)
 		<form class="form-horizontal" action="CategoriesUpdate" method="post">
			{{ @csrf_field() }}
			<div class="form-group row" >
				<label class="col-sm-3 form-control-label">Category Id</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" name="idcat" id="idcat" value="{{ $cat->CATEGORY_ID }}" requaried>
				</div>
			  </div>
			<div class="form-group row has-danger">
				<label class="col-sm-3 form-control-label">Category Name</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" name="namecat" id="namecat" 
						 value="{{ $cat->CATEGORY_NAME }}">
				</div>
			  </div>
			  <div class="form-group row">
				<label class="col-sm-3 form-control-label">Status</label>
				<div class="col-sm-9">
				<select name="cats" class="form-control mb-3 mb-3" > 
				@if($cat->CATEGORY_STATUS == 0)
					<option selected  value="0">Active</option>
					<option  value="1">Non - Active</option>
				@else
					<option  value="0">Active</option>
					<option selected  value="1">Non - Active</option>
				@endif
			</select>
				</div>
			  </div>
			<center><input type="submit" value="Save" class="btn btn-primary"></center>
		</form>
		@endforeach
	</div>
</div>
<!-- Modal-->
<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-sm">
	<div class="modal-content" >
	  <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Edit Caregory</strong>
		<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	  </div>
	  <div class="modal-body">
		  <h3>Are You Sure To Add This Data? i adivse you to change the "Status Category" rather than delete it</h3>
	  </div>
	  <div class="modal-footer">
		<a href="CategoriesUpdate"><button type="submit" class="btn btn-primary">Yes</button></a>
		<button type="button" data-dismiss="modal" class="btn btn-info">Add More</button>
	  </div>
	</div>
  </div>
</div>
@endsection