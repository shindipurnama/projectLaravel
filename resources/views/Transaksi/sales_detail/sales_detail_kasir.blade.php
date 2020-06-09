@extends('kasir/kasir')

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
				@php $no = 1; @endphp
				@foreach ($sales_detail as $sd)
				<tr>
				<td>{{ $no++ }}</td>
				<td>{{ $sd->NOTA_ID }}</td>
				<td>{{ $sd->PRODUCT_ID }}</td>
				<td>{{ $sd->QUANTITY }}</td>
				<td>{{ $sd->SELLING_PRICE }}</td>
				<td>{{ $sd->DISCOUNT }}</td>
				<td>{{ $sd->TOTAL_PRICE }}</td>
				</tr>
				@endforeach
		</tbody>
		</table>
		<center><a href="SalesIndex"><input type="submit" value="Sales" class="btn btn-primary"></a></center>
	 </div>
     </div>
	 </div>
</div>
</div>
@endsection