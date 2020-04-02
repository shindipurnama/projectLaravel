@extends('admin/admin')

@section('judul')
     <center><h2 class="h5 no-margin-bottom">Product Input</h2></center>
@endsection

@section('konten')
<div class="col-lg-12">
	<div class="block margin-bottom-sm">
	 <div class="title"><strong>Please Fill The BOX</strong></div>
	<form class="form-horizontal" action="ProductStore" method="post">
			{{ @csrf_field() }}
	  <div class="form-group row" >
		<label class="col-sm-3 form-control-label">Product Id</label>
		<div class="col-sm-9">
		  <input type="text" disabled="" placeholder="Auto" class="form-control" name="idpr" id="idpr">
		</div>
	  </div>
	  <div class="form-group row" >
		<label class="col-sm-3 form-control-label">Category Id</label>
		<div class="col-sm-9">
		  <select id="inlineFormInput" name="idcat" class="form-control mb-3 mb-3">
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
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Product Name</label>
		<div class="col-sm-9">
		  <input type="text" class="form-control" name="prname" id="prname">
		</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
	  <div class="input-group">
		  <label class="col-sm-3 form-control-label">Product Price</label>
		  <div class="input-group-prepend"><span class="input-group-text">Rp.</span></div>
		  	<input type="text" class="col-sm-2 form-control" name="prprice" id="prprice">
		  <div class="input-group-append"><span class="input-group-text">.00</span></div>
		  </div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Product Stock</label>
			<div class="col-sm-3">
		 	 <input type="number" class="form-control" name="prstock" id="prstock">
			</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
	 	<label class="col-sm-3 form-control-label">Explenation</label>
	  	<div class="col-sm-9">
			<input type="text" class="form-control" name="prex" id="prex">
	 	 </div>
	  </div>
	  <div class="line"></div>
	<center><input type="submit" value="add" class="btn btn-primary"></center>
	</form>
		</div>
</div>
<!-- Modal-->
<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-sm">
	<div class="modal-content" >
	  <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Add a new Product</strong>
		<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	  </div>
	  <div class="modal-body">
		  <h2>Are You Sure To Add This Data?</h2>
	  </div>
	  <div class="modal-footer">
		<a href="ProductIndex"><button type="submit" class="btn btn-primary">Yes</button></a>
		<button type="button" data-dismiss="modal" class="btn btn-info">Add More</button>
	  </div>
	</div>
  </div>
</div>
@endsection