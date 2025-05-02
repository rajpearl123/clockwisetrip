@extends('front.layout.app')

@section('content')
<section>
    <div class="container my-5" id="invoice-content">
        <div class="text-center mb-4 mt-3">
            <img src="{{ asset('front/img/logo/chockwisehotel_logo.png') }}" alt="ClockWise Hotel Logo" style="width: 120px; height: auto;">
        </div>

        @php
            $user = Auth::user();
            $booking = DB::table('orders')
                ->where('user_id', $user->id)
                ->orderBy('created_at', 'desc')
                ->first();
            $propertyDetail = DB::table('propertys')->where('id', $booking->property_id ?? null)->first();
            $bookingDates = DB::table('booking_now')->where('property_id', $booking->property_id ?? null)->first();
        @endphp

        <div class="card shadow mt-3">
            <div class="card-header text-black">
                <h2>Invoice for ClockWise Hotel</h2>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Invoice Information</h6>
                        <p>Invoice ID: <span class="text-secondary">{{ $booking->order_id ?? '---' }}</span></p>
                        <p>Booking Date: <span class="text-secondary">{{ now()->format('d-m-Y H:i:s') }}</span></p>
                        <p>Rooms Booked: <span class="text-secondary">{{ $bookingDates->room ?? '---' }}</span></p>
                        <p>Booked Dates: <span class="text-secondary">{{ \Carbon\Carbon::parse($bookingDates->check_in_time ?? now())->format('d-M-Y') }} to {{ \Carbon\Carbon::parse($bookingDates->check_out_time ?? now())->format('d-M-Y') }}</span></p>
                    </div>

                    <div class="col-md-6">
                        <h6 class="fw-bold">User Details</h6>
                        <p>Name: <span class="text-secondary">{{ $user->name ?? 'N/A' }}</span></p>
                        <p>Mobile: <span class="text-secondary">+91 {{ $user->mobile_no ?? 'N/A' }}</span></p>
                        <p>Email: <a href="mailto:{{ $user->email }}" class="text-primary">{{ $user->email }}</a></p>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <h6 class="fw-bold">Hotel Details</h6>
                        <p>Hotel Name: <span class="text-secondary">{{ $propertyDetail->title ?? '---' }}</span></p>
                        <p>Hotel Address: <span class="text-secondary">{{ $propertyDetail->address ?? '---' }}</span></p>
                    </div>
                    <div class="col-md-6">
                        <h6 class="fw-bold">Payment Details</h6>
                        <p>Total Amount: <span class="text-secondary">₹ {{ $booking->amount ?? '---' }}</span></p>
                    </div>
                </div>

                <hr>

                <div class="text-center">
                    <p>Thank you for booking with us. Please keep this invoice for your records.</p>
                    <p>For queries, contact our support team at <a href="mailto:support@clockwisehotel.com" class="text-primary">support@clockwisehotel.com</a>.</p>
                </div>

                <div class="text-center mt-4">
                    <button onclick="saveInvoiceAsPDF()" id="save-button" class="btn btn-danger btn-lg mt-2 btn-primary">Save as PDF</button>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
<script>
function saveInvoiceAsPDF() {
    document.getElementById('save-button').style.display = 'none';

    var content = document.getElementById('invoice-content');
    var opt = {
        margin:       0.5,
        filename:     'invoice_clockwise.pdf',
        image:        { type: 'jpeg', quality: 0.85 },
        html2canvas:   { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter' }
    };

    html2pdf().from(content).set(opt).save();
}
</script>

@endsection
