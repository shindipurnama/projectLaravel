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
			@php $no = 1; @endphp
		  	@foreach ($sales as $sls)
			<tr>
				<td>{{ $no++ }}</td>
				<td>{{ $sls->NOTA_ID }}</td>
				<td>{{ $sls->CUSTOMER_ID }}</td>
				<td>{{ $sls->USER_ID }}</td>
				<td>{{ $sls->NOTA_DATE }}</td>
				<td>{{ $sls->TOTAL_PAYMENT }}</td>
				<td><input type="submit" value="DETAIL" data-toggle="modal" data-target="#myModal{{ $sls->NOTA_ID }}" class="btn btn-danger btn-sm"> 
				<a href="invoicePDF/{{ $sls->NOTA_ID }}" class="btn btn-secondary btn-sm">Invoice</a></td>
			</tr>
			
			@endforeach
		</tbody>
		</table>
		<center><a href="SalesDetail"><input type="submit" value="Details of Sales Recap" class="btn btn-primary"></a>
		<a href="salesPDF"><input type="submit" value="Print Sales" class="btn btn-success"></a></center>
				  </div>
				  </div>
				  </div>
	 </div>
</div>
			<!-- Modal detail SALES 1-->
			@foreach($sales as $sls)
			<div id="myModal{{ $sls->NOTA_ID }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
				<div role="document" class="modal-dialog modal-xl">
					<div class="modal-content" >
					<div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Detail View</strong>
						<button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
					</div>
					<div class="modal-body">
					
					@if( ($sls->NOTA_ID)  ==  ($sls->NOTA_ID) )
					<div class="form-inline">
					<div class="col-md-3 col-sm-6">
					@foreach($user as $us)
						@if (($sls->USER_ID) == ($us->USER_ID))
							<div class="icon-user-1"><strong>User</strong></div>
							<input type="text" disabled="" value="{{ $us->FIRST_NAME }} {{ $us->LAST_NAME }}" class="form-control">
						@endif
					@endforeach
					</div>

					<div class="col-md-3 col-sm-6">
					@foreach($customer as $cus)
						@if (($sls->CUSTOMER_ID) == ($cus->CUSTOMER_ID))
							<div class="icon-user-1"><strong>Customer</strong></div>
							<input type="text" disabled="" value="{{ $cus->FIRST_NAME }} {{ $cus->LAST_NAME }}" class="form-control">
						@endif
					@endforeach
					</div>

					<div class="col-md-3 col-sm-6">
							<div class="icon-new-file"><strong>Date</strong></div>
							<input type="text" disabled="" value="{{ $sls->NOTA_DATE }}" class="form-control">
					</div>

					<div class="col-md-3 col-sm-6">
							<div class="icon-windows"><strong>Total Payment</strong></div>
							<input type="text" disabled="" value="{{ $sls->TOTAL_PAYMENT }}" class="form-control">
					</div>
					</div>
						<div class="table-responsive"> 
							<div class="form-group">  
							<table class="table table-striped" id="keranjang" width="100%">
							<thead>
								<tr>
								<th></th>
								<th>Nota Id</th>
								<th>Product Name</th>                                   
								<th>Quantity</th>      
								<th>Discount</th>
								<th>Selling Price</th>
								<th>Total Price</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								@php $no = 1; @endphp
								@foreach($sales_detail as $salesdetail)
								@foreach($product as $pr)
									<tr id="col{{ $loop->iteration }}">
									@if (($sls->NOTA_ID) == ($salesdetail->NOTA_ID) && (($salesdetail->PRODUCT_ID) == ($pr->PRODUCT_ID)) )
										<td>{{ $no++ }}</td>
										<td>{{ $salesdetail->NOTA_ID }} </td>  
										<td>{{ $pr->PRODUCT_NAME }}</td>    
										<td>{{ $salesdetail->QUANTITY }}</td>
										<td>{{ $salesdetail->DISCOUNT }}</td>
										<td>{{ $salesdetail->SELLING_PRICE }}</td>
										<td>{{ $salesdetail->TOTAL_PRICE }}</td>
									@endif
									</tr>
									@endforeach
									@endforeach
								
							</tbody>
							</table>
						</div>
						</div>
					
					@endif
					<div class="modal-footer">
						<button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
					</div>
					</div>
				</div>
				</div>
				</div> 
				@endforeach
@endsection
		
                  