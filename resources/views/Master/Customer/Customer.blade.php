@extends('admin/admin')

@section('judul')
     <center><h2 class="h5 no-margin-bottom">Customer</h2></center>
@endsection

@section('konten')
<div class="col-lg-12">
	<div class="block margin-bottom-sm">
	  <div class="title"><strong>List Of Customer</strong></div>
	  <div class="table-responsive"> 
		 
	<div class="form-group">  
		<table class="table table-striped">
		  <thead>
			<tr>
			  <th>#</th>
			  <th>User Id</th>
			  <th>First Name</th>
			  <th>Last Name</th>                                   
			  <th>Email</th>                        
			  <th>Phone</th>
			  <th>Street</th>
			  <th>City</th>
			  <th>State</th>
			  <th>Zip Code</th> 
			  <th>Status</th>
			  <th>Action</th>
			</tr>
		  </thead>
		  <tbody>
			@php $no = 1; @endphp
		  	@foreach ($customer as $cus)

		  <tr>
			  <td>{{ $no++ }}</td>
			  <td>{{ $cus->CUSTOMER_ID }}</td>
			  <td>{{ $cus->FIRST_NAME}}</td>
			  <td>{{ $cus->LAST_NAME}}</td>
			  <td>{{ $cus->PHONE}}</td>
			  <td>{{ $cus->EMAIL}}</td>
			  <td>{{ $cus->STREET}}</td>
			  <td>{{ $cus->CITY}}</td>
			  <td>{{ $cus->STATE}}</td>
			  <td>{{ $cus->ZIP_CODE}}</td>
			  @if($cus->CUSTOMER_STATUS == 0)
					<td><span class="badge badge-success">Active</span></td>
				@else
					<td><span class="badge badge-danger">Non-active</span></td>
				@endif
			  <td>
				  <a href="CustomerEdit{{ $cus->CUSTOMER_ID }}" class="btn btn-info">Edit</a>
				  <button type="button" data-toggle="modal" data-target="#myModaldel" class="btn btn-danger">Delete</button>
			  </td>
		  </tr>
		  @endforeach
	</tbody>
	</table>
	<div class="form-group">  
	<center><a href='CustomerCreate'><input type="submit" value="Add New Customer" class="btn btn-primary"></a></center>
		</div>
		</div>
	  </div>
	</div>
</div>
                     
<!-- Modal Hapus SALES -->       
<div id="myModaldel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-sm">
	<div class="modal-content" >
	  <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Delete Customer</strong>
		<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	  </div>
	  <div class="modal-body">
		  <h4>Are You Sure To Delete This Data?</h4>
	  </div>
	  <div class="modal-footer">
		<a href="CustomerDestroy/{{ $cus->CUSTOMER_ID }}"><button type="submit" class="btn btn-danger">Yes</button></a>
		<button type="button" data-dismiss="modal" class="btn btn-info">no</button>
	  </div>
	</div>
  </div>
</div> 
@endsection