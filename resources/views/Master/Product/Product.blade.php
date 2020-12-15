@extends('admin/admin')

@section('judul')
 <center><h2 class="h5 no-margin-bottom">Product</h2></center>
@endsection
@section('konten')
<div class="col-lg-12">
	<div class="block margin-bottom-sm">
	  <div class="title"><strong>List Of Product</strong></div>
	  <div class="table-responsive"> 
		 
	<div class="form-group">  
		<table class="table table-striped">
			  <thead>
				<tr>
				  <th>#</th>
				  <th>Product Id</th>
				  <th>Category Id</th>
				  <th>Product Name</th>                                   
				  <th>Product Price</th>                        
				  <th>Product Stock</th>
				  <th width="250px">Explanation</th>
				  <th>Action</th>
			  </tr>
		  </thead>
		  <tbody>
			 @php $no = 1; @endphp
		  	@foreach ($product as $pr)
			<tr>
			  <td>{{ $no++ }}</td>
			  <td>{{ $pr->PRODUCT_ID }}</td>
			  <td>{{ $pr->CATEGORY_ID }}</td>
			  <td>{{ $pr->PRODUCT_NAME }}</td>
			  <td>{{ $pr->PRODUCT_PRICE }}</td>
			  <td>{{ $pr->PRODUCT_STOCK }}</td>
			  <td>{{ $pr->EXPLANATION }}</td>
			  <td>
				  <a href="ProductEdit{{ $pr->PRODUCT_ID }}" class="btn btn-info">Edit</a>
				  <input type="submit" value="Delete" data-toggle="modal" data-target="#myModaldel" class="btn btn-danger">
			  </td>
		  </tr>
		   @endforeach
	  </tbody>
  </table>
	<center><a href='ProductCreate'><input type="submit" value="Add New Product" class="btn btn-primary"></a></center>
</div>
		</div>
	</div>
</div>

           
<!-- Modal Hapus SALES -->       
<div id="myModaldel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-sm">
	<div class="modal-content" >
	  <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Delete Product</strong>
		<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	  </div>
	  <div class="modal-body">
	 	 <h4>Are You Sure To Add This Data?</h4> <br> 
	  </div>
	  <div class="modal-footer" >
	  	<center>
		<a href="ProductDestroy/{{ $pr->PRODUCT_ID }}"><button type="submit" class="btn btn-danger">Yes</button></a>
		<button type="button" data-dismiss="modal" class="btn btn-info">No</button></center>
	  </div>
	</div>
  </div>
</div>

@endsection