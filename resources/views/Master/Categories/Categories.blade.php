@extends('admin/admin')

@section('judul')
     <center><h2 class="h5 no-margin-bottom">Category</h2></center>
@endsection

@section('konten')
<div class="col-lg-12">
	<div class="block margin-bottom-sm">
	  <div class="title"><strong>List Of Category</strong></div>
	  <div class="table-responsive"> 
		 
	<div class="form-group">  
		<table class="table table-striped">
		  <thead>
			<tr>
			  <th>#</th>
			  <th>Category Id</th>
			  <th>Category Name</th>  
			  <th></th>	
			  <th>Action</th>
			</tr>
		  </thead>
		  <tbody>
			@php $no = 1; @endphp
		  	@foreach ($categories as $cat)

		  <tr>
			  <td>{{ $no++ }}</td>
			  <td>{{ $cat->CATEGORY_ID }}</td>
			  <td>{{ $cat->CATEGORY_NAME}}</td>
			  @if($cat->CATEGORY_STATUS == 0)
					<td><span class="badge badge-success">Active</span></td>
				@else
					<td><span class="badge badge-danger">Non-active</span></td>
				@endif
			  <td>
				  <a href="CategoriesEdit{{ $cat->CATEGORY_ID }}" class="btn btn-info" >Edit</a>
				  <button type="button" data-toggle="modal" data-target="#myModaldel" class="btn btn-danger">Delete</button>
			  </td>
		  </tr>
		  @endforeach
	</tbody>
	</table>
	<div class="form-group">  
	<center><a href='CategoriesCreate'><input type="submit" value="Add New Category" class="btn btn-primary"></a></center>
		</div>
		</div>
	  </div>
	</div>
</div>
           
<!-- Modal Hapus SALES -->       
<div id="myModaldel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-sm">
	<div class="modal-content" >
	  <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Delete Category</strong>
		<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	  </div>
	  <div class="modal-body">
	  	<h4>Are You Sure To Add This Data?</h4> <br> </h5>I adivse you to change the "Category Status" rather than delete it</h5>
	  </div>
	  <div class="modal-footer" >
	  	<center>
		<a href="CategoriesDestroy/{{ $cat->CATEGORY_ID }}"><button type="submit" class="btn btn-danger">Yes</button></a>
		<a href="CategoriesEdit{{ $cat->CATEGORY_ID }}" class="btn btn-success" >Change Status</a>
		<button type="button" data-dismiss="modal" class="btn btn-info">No</button></center>
	  </div>
	</div>
  </div>
</div>
@endsection