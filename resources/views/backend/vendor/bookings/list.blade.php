@extends('backend.vendor.layouts.app')
@section('content')
<section>
<div class="container">
	<div class="card shadow-card user-list-card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h2 class="card-heading">Booking List</h2>
		</div>
	</div>
	<br>
	<div class="card shadow-card user-list-card2">
		<div class="card-body">
			<table class="table table-striped" id="dataTable">
				<thead>
					<tr>
						<th>No</th>
                        <th>Invoice ID</th>    
                        <th>Customer Name</th>
                        <th>Passengers</th>      
                        <th>Check-In - Check-Out</th>       
                        <th>Booking Date</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($bookings as $booking)
					<tr>
						<td>{{ $loop->iteration }}</td>
						
						<td>
                            {{ $booking->invoice }} 
                        </td>
						<td>
							{{ Illuminate\Support\Str::limit(strip_tags($booking->name)) }} <br>
                            <b><a href="mailto:{{$booking->email}}"><i class="fa fa-envelope"></i> {{$booking->email}}</a></b><br>
                            <b><a href="tel:{{$booking->mobile_no}}"><i class="fa fa-phone"></i> {{$booking->mobile_no}}</a></b><br>
                            <b><a href="https://www.google.com/maps?q={{ urlencode($booking->address) }}" target="_blank"><i class="fa fa-location"></i> {{ Illuminate\Support\Str::limit($booking->address, 25)}}</a> 
                            <i class="fa fa-info-circle" data-toggle="tooltip" title="{{ $booking->address }}"></i></b>
                        </td>
						<td>
                            {{ $booking->passenger }} 
                        </td>
						<td>
                            {{ \Carbon\Carbon::parse($booking->check_in)->format('d M Y') }} - {{ \Carbon\Carbon::parse($booking->check_out)->format('d M Y') }}
                        </td>
						<td>
                            {{ \Carbon\Carbon::parse($booking->created_at)->format('d M Y') }} 
                        </td>
						
                        <td>
                            @if(\Carbon\Carbon::parse($booking->created_at) < \Carbon\Carbon::now())
                                <span class="badge bg-success">Future Booking</span>
                            @elseif(\Carbon\Carbon::parse($booking->created_at)->isToday()) 
                                <span class="badge bg-primary">Today's Booking</span>
                            @else
                                <span class="badge bg-danger">Booking Expired</span>
                            @endif
                        </td>
                        <td>
                            ₹{{$booking->amount}}
                        </td>
						<td style="d-flex; gap:2px;">
							<a href="{{route('vendor.booking.view', $booking->id)}}">
							<button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button>
							</a>
                            <a href="{{ asset($booking->invoice_pdf) }}" download="{{ basename($booking->invoice_pdf) }}">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-download"></i>
                                </button>
                            </a>                             
                        </td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</section>


@endsection