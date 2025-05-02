@extends('backend.vendor.layouts.app')
@section('content')
<section>
<div class="container my-4">
	<div class="card shadow-card user-list-card">
		<div class="card-header d-flex flex-wrap justify-content-between align-items-center">
			<h2 class="card-heading mb-2 mb-md-0">Invoice ID: {{$booking->invoice}}</h2>
			{{-- Optional Action Button --}}
            <a href="{{ asset($booking->invoice_pdf) }}" download="{{ basename($booking->invoice_pdf) }}">
                <button class="btn btn-primary btn-sm">
                    <i class="fas fa-download"></i> Invoice
                </button>
            </a> 		</div>
        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10 mb-4">
                    <div class="card shadow-card booking-card">
                        <div class="card-body">
                            <!-- Swiper Section -->
                            <div class="swiper mySwiper-new-main my-main-slide mb-3">
                                <div class="swiper-wrapper">
                                    @foreach($propertyImages as $image)
                                        <div class="swiper-slide">
                                            <img
                                                src="{{ asset('front/img/propertys/'.$image) }}" 
                                                class="img-fluid rounded" alt="Property Image" />
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next"><i class="fa-solid fa-arrow-right"></i></div>
                                <div class="swiper-button-prev"><i class="fa-solid fa-arrow-left"></i></div>
                                <div class="swiper-pagination"></div>
                            </div>

                            <!-- QR Image Section -->
                            <div class="text-end mb-3">
                                <img src="{{ asset('/'.$booking->qr_image) }}" class="img-fluid rounded" alt="QR Code">
                            </div>

                            <!-- Booking Details -->
                            <h6><b>Property:</b> {{ $property->title }}</h6>
                            <p><b>Check-In:</b> {{ \Carbon\Carbon::parse($booking->check_in)->format('d M Y') }}</p>
                            <p><b>Check-Out:</b> {{ \Carbon\Carbon::parse($booking->check_out)->format('d M Y') }}</p>
                            <p><b>Address:</b> {{ $booking->address }}</p>
                            <p><b>Contact:</b> 
                                <a href="tel:{{ $booking->mobile_no }}" class="text-decoration-none">
                                    <i class="fa fa-phone"></i> {{ $booking->mobile_no }}
                                </a>
                            </p>
                            <p><b>Email:</b> 
                                <a href="mailto:{{ $booking->email }}" class="text-decoration-none">
                                    <i class="fa fa-envelope"></i> {{ $booking->email }}
                                </a>
                            </p>
                            <p><b>Payment Status:</b>
                            @if($booking->payment_method == 1)
                                <span class="badge bg-success">Paid Via Razorpay</span>
                            @elseif($booking->payment_method == 2)
                                <span class="badge bg-danger">Unpaid</span>
                            @endif
                            </p>
                            <p><b>Amount Paid:</b> {{$booking->amount}}</p>
                            <p><b>Clockwise Commission:</b> {{$booking->admin_commision}}</p>
                            <p><b>GST Amount:</b> {{$booking->gst}}</p>
                            <p><b>Your Earning:</b> {{$booking->amount - $booking->admin_commision - $booking->gst}}</p>
                            <p>
                                <b>Countdown:</b> 
                                <div id="countdown-{{ $booking->id }}"></div>
                            </p>
                        </div>

                        <!-- Card Footer -->
                        <div class="card-footer text-end">
                            <a href="{{ route('vendor.addPropertyView') }}" class="btn btn-success btn-sm">Accept</a>
                            <a href="#" class="btn btn-danger btn-sm">Reject</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
</section>

@endsection
