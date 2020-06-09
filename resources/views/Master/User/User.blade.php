@extends('admin/admin')

@section('judul')
 <center><h2 class="h5 no-margin-bottom">User</h2></center>@endsection
@section('konten')
<div class="col-lg-12">
	<div class="block margin-bottom-sm">
	  <div class="title"><strong>List Of User</strong></div>
	  <div class="table-responsive"> 
		 
	<div class="form-group">  
		<table class="table table-striped">
			  <thead>
				<tr>
				  <th>#</th>
				  <th>User Id</th>
				  <th>First Name</th>
				  <th>Last Name</th>
				  <th>UserName</th>
				  <th>Jabatan</th>                                   
				  <th>Email</th>                        
				  <th>Phone</th>
				  <th>Password</th>
				  <th>Job Status</th>
				  <th>Action</th>
			  </tr>
		  </thead>
		  <tbody>
			 @php $no = 1; @endphp
		  	@foreach ($user as $us)
			<tr>
			  <td>{{ $no++ }}</td>
			  <td>{{ $us->USER_ID }}</td>
			  <td>{{ $us->FIRST_NAME }}</td>
			  <td>{{ $us->LAST_NAME }}</td>
			  <td>{{ $us->USERNAME }}</td>
			  @if($us->JABATAN == 0)
					<td><span class="badge badge-warning">Admin</span></td>
				@else
					<td><span class="badge badge-primary">Kasir</span></td>
				@endif
			  <td>{{ $us->EMAIL }}</td>
			  <td>{{ $us->PHONE }}</td>
			  <td>{{ $us->PASSWORD }}</td>
			  @if($us->JOB_STATUS == 0)
					<td><span class="badge badge-success">Active</span></td>
				@else
					<td><span class="badge badge-danger">Non-active</span></td>
				@endif
			  <td><a href="UserEdit{{ $us->USER_ID }}" class="btn btn-info">Edit</a>
				  <button type="button" data-toggle="modal" data-target="#myModaldel" class="btn btn-danger">Delete</button>
		  </tr>
			   @endforeach
	  </tbody>
  </table>
			<center><a href='UserCreate'><input type="submit" value="Add New User" class="btn btn-primary"></a></center>
			</div>
		</div>
	</div>
</div>
           
<!-- Modal Hapus SALES -->       
<div id="myModaldel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-sm">
	<div class="modal-content" >
	  <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Delete User</strong>
		<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	  </div>
	  <div class="modal-body">
	  		<h4>Are You Sure To Add This Data?</h4> <br> </h5>I adivse you to change the "Job Status" rather than delete it</h5>
	  </div>
	  <div class="modal-footer" >
	  	<center>
			<a href="UserDestroy/{{ $us->USER_ID }}"><button type="submit" class="btn btn-danger">Yes</button></a>
			<a href="UserEdit{{ $us->USER_ID }}" class="btn btn-success" >Change Status</a>
			<button type="button" data-dismiss="modal" class="btn btn-info">No</button></center>
	  </div>
	</div>
  </div>
</div>

@endsection