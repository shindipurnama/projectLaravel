@extends('admin/admin')

@section('judul')
 <center><h2 class="h5 no-margin-bottom">Sales</h2></center>
@endsection
@section('konten')
<div class="col-lg-12">
	<div class="block margin-bottom-sm">
	  <div class="title"><strong>List Of Sales</strong></div>
	  <div class="table-responsive"> 
		 
	<div class="form-group">  
		<table class="table table-striped">
		  <thead>
			<tr>
			  <th></th>
			  <th>Nota Id</th>
			  <th>Customer Id</th>                                   
			  <th>User Id</th>                        
			  <th>Nota Date</th>
			  <th>Total Payment</th>
			  <th>Action</th>
		  </tr>
		</thead>
		<tbody>
		<tr>
		  <td>1</td>
		  <td>NT001</td>
		  <td>CS001</td>
		  <td>US001</td>
		  <td>03/03/2020</td>
		  <td>Rp. 40.000</td>
		  <td><a href="" class="btn btn-info">Edit</a>
			  <button type="button" data-toggle="modal" data-target="#myModaldel" class="btn btn-danger">Delete</button>
			  <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">View detail</button></td>
		</tr>
		<tr>
		  <td>2</td>
		  <td>NT002</td>
		  <td>CS002</td>
		  <td>US004</td>
		  <td>03/03/2020</td>
		  <td>Rp. 60.000</td>
		  <td><a href="" class="btn btn-info">Edit</a>
			  <button type="button" data-toggle="modal" data-target="#myModaldel1" class="btn btn-danger">Delete</button>
			  <button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-primary">View detail</button>
		  </td>
		</tr>
		<tr>
		  <td>3</td>
		  <td>NT003</td>
		  <td>CS003</td>
		  <td>US002</td>
		  <td>03/04/2020</td>
		  <td>Rp. 50.000</td>
		  <td><a href="" class="btn btn-info">Edit</a>
			  <button type="button" data-toggle="modal" data-target="#myModaldel2" class="btn btn-danger">Delete</button>
			  <button type="button" data-toggle="modal" data-target="#myModal2" class="btn btn-primary">View detail</button>
		  </td></tr>
		<tr>
		  <td>4</td>
		  <td>NT001</td>
		  <td>CS004</td>
		  <td>US002</td>
		  <td>03/05/2020</td>
		  <td>Rp. 70.000</td>
		  <td><a href="" class="btn btn-info">Edit</a>
			  <button type="button" data-toggle="modal" data-target="#myModaldel" class="btn btn-danger">Delete</button>
			  <button type="button" data-toggle="modal" data-target="#myModal3" class="btn btn-primary">View detail</button>
		  </td>
		</tr>
		</tbody>
		</table>
				  </div>
				  </div>
				  </div>
	 </div>
</div>
<!-- Modal detail SALES 1-->
<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-xl">
	<div class="modal-content" >
	  <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Detail View</strong>
		<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	  </div>
	  <div class="modal-body">
		  <div class="table-responsive"> 
			<div class="form-group">  
				<table class="table table-striped">
			  <thead>
				<tr>
				  <th></th>
				  <th>Nota Id</th>
				  <th>Product Id</th>                                   
				  <th>Quality</th>                        
				  <th>Selling Price</th>
				  <th>Discount</th>
				  <th>Total Price</th>
			  </tr>
			</thead>
			<tbody>
			<tr>
			  <td>1</td>
			  <td>NT001</td>
			  <td>PR001</td>
			  <td>2</td>
			  <td>Rp. 10.000</td>
			  <td>10%</td>
			  <td>Rp. 18.000</td>
			</tr>
			<tr>
			  <td>2</td>
			  <td>NT002</td>
			  <td>PR002</td>
			  <td>1</td>
			  <td>Rp. 22.000</td>
			  <td>0%</td>
			  <td>Rp. 22.000</td>
			</tr>
			</tbody>
			</table>
		 </div>
		 </div>
	  </div>
	  <div class="modal-footer">
		<button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
	  </div>
	</div>
  </div>
</div>
		
<!-- Modal detail SALES 2-->
<div id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-xl">
	<div class="modal-content" >
	  <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Detail View</strong>
		<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	  </div>
	  <div class="modal-body">
		  <div class="table-responsive"> 
			<div class="form-group">  
				<table class="table table-striped">
			  <thead>
				<tr>
				  <th></th>
				  <th>Nota Id</th>
				  <th>Product Id</th>                                   
				  <th>Quality</th>                        
				  <th>Selling Price</th>
				  <th>Discount</th>
				  <th>Total Price</th>
			  </tr>
			</thead>
			<tbody>
			<tr>
			  <td>1</td>
			  <td>NT002</td>
			  <td>PR003</td>
			  <td>2</td>
			  <td>Rp. 15.000</td>
			  <td>0%</td>
			  <td>Rp. 30.000</td>
			</tr>
			<tr>
			  <td>2</td>
			  <td>NT002</td>
			  <td>PR004</td>
			  <td>1</td>
			  <td>Rp. 30.000</td>
			  <td>0%</td>
			  <td>Rp. 30.000</td>
			</tr>
			</tbody>
			</table>
		 </div>
		 </div>
	  </div>
	  <div class="modal-footer">
		<button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
	  </div>
	</div>
  </div>
</div>
         
<!-- Modal Detail SALES 3-->
<div id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-xl">
	<div class="modal-content" >
	  <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Detail View</strong>
		<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	  </div>
	  <div class="modal-body">
		  <div class="table-responsive"> 
			<div class="form-group">  
				<table class="table table-striped">
			  <thead>
				<tr>
				  <th></th>
				  <th>Nota Id</th>
				  <th>Product Id</th>                                   
				  <th>Quality</th>                        
				  <th>Selling Price</th>
				  <th>Discount</th>
				  <th>Total Price</th>
			  </tr>
			</thead>
			<tbody>
			<tr>
			  <td>1</td>
			  <td>NT003</td>
			  <td>PR003</td>
			  <td>2</td>
			  <td>Rp. 15.000</td>
			  <td>0%</td>
			  <td>Rp. 30.000</td>
			</tr>
			<tr>
			  <td>2</td>
			  <td>NT002</td>
			  <td>PR005</td>
			  <td>2</td>
			  <td>Rp. 10.000</td>
			  <td>0%</td>
			  <td>Rp. 20.000</td>
			</tr>
			</tbody>
			</table>
		 </div>
		 </div>
	  </div>
	  <div class="modal-footer">
		<button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
	  </div>
	</div>
  </div>
</div>
         
<!-- Modal detail SALES 4-->
<div id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-xl">
	<div class="modal-content" >
	  <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Detail View</strong>
		<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	  </div>
	  <div class="modal-body">
		  <div class="table-responsive"> 
			<div class="form-group">  
				<table class="table table-striped">
			  <thead>
				<tr>
				  <th></th>
				  <th>Nota Id</th>
				  <th>Product Id</th>                                   
				  <th>Quality</th>                        
				  <th>Selling Price</th>
				  <th>Discount</th>
				  <th>Total Price</th>
			  </tr>
			</thead>
			<tbody>
			<tr>
			  <td>1</td>
			  <td>NT004</td>
			  <td>PR003</td>
			  <td>2</td>
			  <td>Rp. 15.000</td>
			  <td>0%</td>
			  <td>Rp. 30.000</td>
			</tr>
			<tr>
			  <td>2</td>
			  <td>NT002</td>
			  <td>PR004</td>
			  <td>1</td>
			  <td>Rp. 30.000</td>
			  <td>0%</td>
			  <td>Rp. 30.000</td>
			</tr>
			<tr>
			  <td>2</td>
			  <td>NT002</td>
			  <td>PR001</td>
			  <td>1</td>
			  <td>Rp. 10.000</td>
			  <td>0%</td>
			  <td>Rp. 10.000</td>
			</tr>
			</tbody>
			</table>
		 </div>
		 </div>
	  </div>
	  <div class="modal-footer">
		<button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
	  </div>
	</div>
  </div>
</div>
           
<!-- Modal Hapus SALES -->       
<div id="myModaldel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-sm">
	<div class="modal-content" >
	  <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Delete Sales</strong>
		<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	  </div>
	  <div class="modal-body">
		  <h4>Are You Sure To Delete This Data?</h4>
	  </div>
	  <div class="modal-footer">
		<a href="SalesIndex"><button type="submit" class="btn btn-danger">Yes</button></a>
		<button type="button" data-dismiss="modal" class="btn btn-info">no</button>
	  </div>
	</div>
  </div>
</div>

<!-- Modal Hapus SALES 1-->       
<div id="myModaldel1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-sm">
	<div class="modal-content" >
	  <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Delete Salesr</strong>
		<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	  </div>
	  <div class="modal-body">
		  <h4>Are You Sure To Delete This Data?</h4>
	  </div>
	  <div class="modal-footer">
		<a href="SalesIndex"><button type="submit" class="btn btn-danger">Yes</button></a>
		<button type="button" data-dismiss="modal" class="btn btn-info">no</button>
	  </div>
	</div>
  </div>
</div>

<!-- Modal Hapus SALES 2-->       
<div id="myModaldel2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-sm">
	<div class="modal-content" >
	  <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Delete Sales</strong>
		<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	  </div>
	  <div class="modal-body">
		  <h4>Are You Sure To Delete This Data?</h4>
	  </div>
	  <div class="modal-footer">
		<a href="SalesIndex"><button type="submit" class="btn btn-danger">Yes</button></a>
		<button type="button" data-dismiss="modal" class="btn btn-info">no</button>
	  </div>
	</div>
  </div>
</div>

<!-- Modal Hapus SALES 3-->       
<div id="myModaldel3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-sm">
	<div class="modal-content" >
	  <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Delete Sales</strong>
		<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
	  </div>
	  <div class="modal-body">
		  <h4>Are You Sure To Delete This Data?</h4>
	  </div>
	  <div class="modal-footer">
		<a href="SalesIndex"><button type="submit" class="btn btn-danger">Yes</button></a>
		<button type="button" data-dismiss="modal" class="btn btn-info">no</button>
	  </div>
	</div>
  </div>
</div>
@endsection
		
                  