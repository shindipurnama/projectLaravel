@extends('admin/admin')

@section('judul')
     <center><h2 class="h5 no-margin-bottom">Product Edit</h2></center>
@endsection

@section('konten')
<div class="col-lg-12">
	<div class="block margin-bottom-sm">
	 <div class="title"><strong>Please Fill The BOX</strong></div>
		@foreach ($product as $pr)
	<form class="form-horizontal" action="ProductUpdate" method="post">
			{{ @csrf_field() }}
	  <div class="form-group row" >
		<label class="col-sm-3 form-control-label">Product Id</label>
		<div class="col-sm-9">
		  <input type="text" class="form-control" name="idpr" id="idpr" value="{{ $pr->PRODUCT_ID }}">
		</div>
	  </div>
	  <div class="form-group row" >
		<label class="col-sm-3 form-control-label">Categories</label>
		<div class="col-sm-9">
		<select id="inlineFormInput" name="idcat" class="form-control mb-3 mb-3">
				@foreach ($categories as $cat)        
				@if($cat->CATEGORY_STATUS == 0)           
                    <option value="{{ $cat->CATEGORY_ID }}">
						{{ $cat->CATEGORY_NAME }}
					</option>
				@else
					<option value="{{ $cat->CATEGORY_ID }}" disabled>
						{{ $cat->CATEGORY_NAME }} - Non-Active
					</option>
				@endif
                  @endforeach
			</select>
		</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Product Name</label>
		<div class="col-sm-9">
		 <input type="text" class="form-control" name="prname" id="prname" value="{{ $pr->PRODUCT_NAME }}">
		</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
	  <div class="input-group">
		  <label class="col-sm-3 form-control-label">Product Price</label>
		  <div class="input-group-prepend"><span class="input-group-text">Rp.</span></div>
		  	<input type="text" class="col-sm-2 form-control" name="prprice" id="prprice" value="{{ $pr->PRODUCT_PRICE }}">
		  <div class="input-group-append"><span class="input-group-text">.00</span></div>
		  </div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
		<label class="col-sm-3 form-control-label">Product Stock</label>
			<div class="col-sm-3">
		 	 <input type="number" class="form-control" name="prstock" id="prstock" value="{{ $pr->PRODUCT_STOCK }}">
			</div>
	  </div>
	  <div class="line"></div>
	  <div class="form-group row">
	 	<label class="col-sm-3 form-control-label">Explenation</label>
	  	<div class="col-sm-9">
			<input type="text" class="form-control" name="prex" id="prex" value="{{ $pr->EXPLANATION }}">
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