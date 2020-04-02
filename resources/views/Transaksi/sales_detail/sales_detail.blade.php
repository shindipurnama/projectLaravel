@extends('admin/admin')

@section('judul')
 <center><h2 class="h5 no-margin-bottom">Sales Detail</h2></center>
@endsection
@section('konten')
<div class="col-lg-12">
	<div class="block margin-bottom-sm">
	  <div class="title"><strong>List Of Sales Detail</strong></div>
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
</div>
</div>
@endsection