@extends('backend.layouts.app')
@section('content')


<div class="container">
	<div class="card shadow-card user-list-card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h2 class="card-heading">Hotel booking List <span class="count-circle">{{ count($bookings) ?? '0' }}</span></h2>
			{{-- <a href="{{ route('admin.property.add') }}" class="btn btn-info harshit">Add</a> --}}
		</div>
	</div>
	<div class="card mt-3 shadow-card user-list-card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<div style="display: flex; gap: 10px; align-items: center;">
				<form action="{{ url()->current() }}" method="get" style="display: flex;">
					<input type="text" class="form-control" name="invoice"  placeholder="Search invoice">
					<input type="date" class="form-control" name="check_in" id="check_in"  >

					<button class="btn btn-primary">Search</button>
				</form>
				<button class="btn btn-info" onclick="window.location.href='{{ url()->current() }}';">Reset</button>
			</div>
		</div>
	</div>


<br>

<div class="card shadow-card user-list-card2">
	<div class="card-body">
		<table class="table table-striped" id="dataTable">
			<thead>
				<tr>
					<th>No</th>
					<th>Invoice No</th>
                    <th>User Detail</th>   
					<th>Hotel Detail</th>
                    <th>Booking Date</th>      
                    <th>Payment Method</th>       
					<th>Paid Amount</th>                    	
					<th>Invoice</th>
				</tr>
			</thead>
			@if($bookings->isNotEmpty())
			@foreach($bookings as $booking)
			<tbody>					
				<td> {{ $loop->iteration }} </td>
                <td>
                    {{ $booking->invoice ?? 'N/A' }}
                </td>
				<td>
                    <p><b>Name :</b>{{ $booking->userDetail->name ?? 'N/A' }}</p> 
					<p><b>Mobile No :</b>{{ $booking->userDetail->mobile_no ?? 'N/A' }}</p>
					<p><b>Gmail :</b>{{ $booking->userDetail->email ?? 'N/A' }}</p>       
                </td>
                
                <td> 
					<b>{{ $booking->property->title ?? 'N/A' }}</b> 
                </td>
				<td>
					<p><b>Booking Date :</b>{{ \Carbon\Carbon::parse($booking->created_at)->format('d-M-Y') }} </p> 
					<p><b>Check In :</b>{{ \Carbon\Carbon::parse($booking->check_in)->format('d-M-Y') }} </p>
					<p><b>Check Out :</b>{{ \Carbon\Carbon::parse($booking->check_out)->format('d-M-Y') }} </p>
				</td>
				<td> 
					@if($booking->payment_method == '1')
						<b> Online</b>
						@else 
						<b>Offline</b>
					@endif

				</td>
				<td> 
					@if($booking->payment_method == '1')
						{{ $booking->amount ?? 'N/A' }}
						@else 
						<a href="javascript:void(0)" data-id="{{ $booking->id }}" data-amount="{{ $booking->amount }}" data-invoice="{{ $booking->invoice }}" data-user="{{  $booking->userDetail->name  }}" class="btn btn-success btn-sm collect-amount" >Collect Payment</a>
					@endif

				</td>
				<td style="display: flex; gap:2px;" >
                    <a href="{{ asset($booking->invoice_pdf) }}" download="{{ $booking->invoice_no }}">
                        <button class="btn btn-primary btn-sm">Download</button>
                    </a>

				</td>			
				
			</tbody>
			@endforeach
			@else
				<tr>
					<td colspan="8" class="text-center"> <b>No Property Found</b></td>
				</tr>
			@endif
		</table>
		<div class="d-flex justify-content-center">
			@if ($bookings instanceof \Illuminate\Pagination\LengthAwarePaginator)
				{{ $bookings->links('pagination::bootstrap-5') }}
			@endif
		</div>
	</div>
</div>
</div>

<div class="modal fade" id="collectAmount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header bg-light p-3">
				<h5 class="modal-title" id="collectAmountheader"></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="{{ route('admin.update.offline.amount') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="modal-body">
					<input type="hidden" name="id" id="id">
					<div class="mb-3">
						<label for="user_name" class="form-label">User Name</label>
						<input type="text" class="form-control" id="user_name" >
					</div>
					<div class="mb-3">
						<label for="user_name" class="form-label">Amount</label>
						<input type="text" class="form-control" id="amount" >
					</div>
					
					<div class="mb-3">
						<label for="status" class="form-label">Status</label>
						<select class="form-control" name="status" required>
							<option>--Choose Option--</option>
							<option value="1" >Collected</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Update</button>
				</div>
			</form>
		</div>
	</div>
</div>


@endsection

@push('js')

<script>
	$(document).on('click','.collect-amount',function(){
		var id = $(this).data('id');
		var invoice = $(this).data('invoice');
		var user = $(this).data('user');
		var amount = $(this).data('amount');
		$('#collectAmount').modal('show');
		$('#user_name').val(user);
		$('#amount').val(amount);
		$('#id').val(id);
		$('#collectAmountheader').text('Collect Payment From '+invoice);
	
	});
</script>

@endpush