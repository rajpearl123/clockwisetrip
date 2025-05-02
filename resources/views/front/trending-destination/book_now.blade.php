@extends('front.layout.app')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    .btn213{
        border-color: #d93025;
    background-color: #ffffff !important;
    color: #d93025 !important;

    }
</style>


<section class="py-10 mt-80 d-flex items-center bg-light-2">
    <div class="container mt-4">
        <!-- Back Button -->
        <div class="mb-3 mt-5">
            <a href="#" class="text-danger text-decoration-none mt-4">
                <!-- <i class="fas fa-chevron-left"></i> Modify your booking -->
            </a>
        </div>
        
        <!-- Notification -->
        <!-- <div class="alert alert-warning text-center mb-4" role="alert">
            <i class="bi bi-stars"></i> <strong>Yay!</strong> You just saved ₹10000 on this booking!
        </div> -->

        <div class="row">
            <!-- Left Section -->
            <div class="col-md-6">
                <div class="card p-4">
                    <h5 class="mb-4">1. Enter your details</h5>
                    <p class="text-muted">We will use these details to share your booking information</p>
                    
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="full_name" value="{{ Auth::user()->name ?? '' }}" placeholder="Enter first and last name">
                    </div>
                    
                    <div class="mb-3">
                        <label for="" class="form-label">Mobile Number</label>
                        <div class="input-group">
                            <span class="input-group-text">+91</span>
                            <input type="number" class="form-control" id="mobileNumber" value="{{ Auth::user()->mobile_no ?? '' }}" name="mobile_no" placeholder="e.g. 1234567890">
                        </div>
                    </div>

                    <form id="sendOtpForm">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email ?? '' }}" placeholder="name@abc.com" required>
                                <span id="email_status" class="input-group-text" style="display:none;"><i class="fas fa-check-circle text-success email_verify_icon" style="display:none;"></i><span class="text-success email_verify_icon" style="display:none;">Verified<span></span>
                            </div>
                        </div>

                        <!-- Initially disabled, enabled after email validation -->
                        <button type="submit" id="send_code" class="button py-20 -dark-1 bg-blue-1 text-white">Send passcode</button>
                     </form>

                    <div class="mb-3 match_otp" style="display: none;">
                        <label for="" class="form-label">Enter OTP</label>
                        <input type="text" class="form-control" id="match_otp" name="match_otp" placeholder="Enter OTP">
                    </div>

                    <!-- Resend OTP Button -->
                    <button type="button" id="resend_otp" class="btn btn-secondary" style="display: none;">Resend OTP</button>

                    <!-- <button type="button" class="c-w3zyrw">Pay ₹30670</button> -->
                    <input type="hidden"  id="pay_payment" value="{{ $propertyDetail->price * $no_of_nights ?? '' }}">
                    <input type="hidden"  id="no_of_nights" value="{{ $no_of_nights }}">
                    <input type="hidden"  id="check_in" value="{{ $check_in }}">
                    <input type="hidden"  id="check_out" value="{{ $check_out }}">
                    <input type="hidden"  id="no_of_room" value="{{ $no_of_room }}">
                    <input type="hidden"  id="no_of_guest" value="{{ $no_of_guest }}">

                    <input type="hidden"  id="property_id" name="property_id" value="{{$propertyDetail->id}}">

                    <!-- Pay Now Button (Initially hidden) -->
                    <button type="submit" id="pay_now" class="button py-20 -dark-1 bg-blue-1 text-white" style="display: none;">₹ {{ $propertyDetail->price * $no_of_nights * $no_of_room}} Pay Now</button>

                </div>
            </div>
           

            @php
                $base_url = "https://test.pearl-developer.com/clockwisehotel/public/front/img/propertys/";
                $images = is_string($propertyDetail->image)
                          ? json_decode($propertyDetail->image, true)
                          : $propertyDetail->image;
                $limited_images = array_slice($images, 0, 4); // Limit to the first 4 images
            @endphp
            <!-- Right Section -->
            <div class="col-md-6">
                <div class="card p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img style="width: 70px; height:70px" src="{{ $base_url . $limited_images[0] }}" class="me-3 rounded" alt="Hotel Image">
                        <div>
                            <h6 class="mb-1">{{$propertyDetail->title}} in {{$propertyDetail->address}}</h6>
                            <!-- <p class="text-success mb-0"><i class="far fa-star"></i>4.4 <span class="text-muted">(0 Ratings) - Very Good</span></p> -->
                        </div>
                    </div>
                    <hr>
                    <p><strong>{{$no_of_nights}} Nights</strong></p>
                    <p><i class="bi bi-calendar3"></i> {{$check_in}} – {{$check_out}} | {{$no_of_room}} Room, {{$no_of_guest}} Guests</p>
                    
                    <p class="d-flex justify-content-between">Room price for {{$no_of_nights}} Nights X {{$no_of_room}} Rooms <span>₹ {{$propertyDetail->price * $no_of_nights *$no_of_room}}</span></p>
                    <!-- <p class="d-flex justify-content-between">Instant discount: <span>-₹47524</span></p> -->
                    <!-- <p class="d-flex justify-content-between">9% Coupon Discount:<span> -₹10000</span></p> -->

                    <h5 class="d-flex justify-content-between">Payable Amount: <span class="text-danger" id="payable_amount">₹ {{$propertyDetail->price * $no_of_nights *$no_of_room }}</span></h5>
                    <hr>
                    <!-- <p class="text-danger text-center" style="background: #ff00001c;"><i class="fas fa-bolt"></i> 7 people booked this hotel in the last 6 hours</p> -->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- jQuery and Toastr JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
   
$(document).ready(function() {
    // Global CSRF Token setup for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Function to enable the "Send passcode" button if email is valid
    $('#email').on('input', function() {
        var email = $('#email').val();
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/; // Simple email regex validation
        
        // Enable the button if email matches the pattern
        if (emailPattern.test(email)) {
            $('#send_code').prop('disabled', false);
            $('#email_status').show(); // Show verify icon
        } else {
            $('#send_code').prop('disabled', true);
            $('#email_status').hide(); // Hide verify icon
        }
    });

    // Click event for Send OTP button
    $('#send_code').on('click', function(e) {
        e.preventDefault(); // Prevent the default form submission
        
        var email = $('#email').val();
        
        // Basic email validation (although we already validated it on input)
        if (email == "") {
            alert("Please enter a valid email address.");
            return;
        }

        // Data to be sent in the AJAX request
        var data = {
            email: email
        };

        // AJAX request to send the OTP
        $.ajax({
            url: "{{ url('send-otp') }}", // Replace with your actual route
            type: 'POST',
            data: data,
            success: function(response) {
                $(".match_otp").css('display', 'block');
                $('#resend_otp').css('display', 'inline-block'); 
                $('#send_code').css('display', 'none');
                toastr.success(response.message); 
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                alert('Error sending OTP. Please try again.');
            }
        });
    });

    // Resend OTP functionality
    $('#resend_otp').on('click', function() {
        var email = $('#email').val();

        if (email == "") {
            toastr.error("Please enter your email address.");
            return;
        }

        // Disable the Resend OTP button for a cooldown period of 30 seconds
        $('#resend_otp').prop('disabled', true);

        // AJAX request to resend OTP
        $.ajax({
            url: '{{ url('resend-otp') }}', // Replace with your actual route
            method: 'POST',
            data: { email: email },
            success: function(response) {
                toastr.success(response.message);
                // Re-enable the button after 30 seconds
                setTimeout(function() {
                    $('#resend_otp').prop('disabled', false);
                }, 30000); // 30 seconds cooldown
            },
            error: function(xhr) {
                toastr.error('Error resending OTP. Please try again.');
            }
        });
    });

    // Submit OTP for verification
    $('#match_otp').on('input', function() {
        var email = $('#email').val();
        var otp = $('#match_otp').val();

        $.ajax({
            url: '{{url('verify-otp')}}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                email: email,
                otp: otp,
            },
            success: function(response) {
                toastr.success(response.message);
                // Hide OTP section and show Pay Now button
                $('.match_otp').hide();
                $('#resend_otp').hide();
                $('#send_code').hide();
                $('#pay_now').show();
                $('#pay_payment').show();
                $(".email_verify_icon").css('display', 'block');

            },
            error: function(xhr) {
                if (otp.length === 6) {
                    toastr.error(xhr.responseJSON.message);    
                }
            }
        });
    });

    // Pay Now button click event
    // $('#pay_now').on('click', function() {
    //     // You can add your logic here to proceed with the payment.
    //     toastr.success('Proceeding to payment...');
    //     window.location.href = '{{ url("payment-page") }}'; // Replace with actual payment route
    // });
});



 $('#pay_now').on('click', function() {
        var email = $('#email').val();
        var full_name = $('#fullName').val();
        var mobile_no = $('#mobileNumber').val();
        var pay_payment_value = $('#pay_payment').val();
        var property_id=  $('#property_id').val();
        var no_of_nights=  $('#no_of_nights').val();
        var check_in=  $('#check_in').val();
        var check_out=  $('#check_out').val();
        var no_of_room=  $('#no_of_room').val();
        var no_of_guest=  $('#no_of_guest').val();
        var randomString = generateRandomString(500); 

        console.log(property_id, mobile_no, pay_payment_value, no_of_nights, check_in, check_out, no_of_room, no_of_guest);
        $.ajax({
            url: "{{route('book.now.store.other.detail')}}",
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                email: email,
                full_name: full_name,
                mobile_no: mobile_no,
                property_id: property_id,
                pay_payment_value: pay_payment_value,
                check_in: check_in,
                check_out: check_out,
                no_of_room: no_of_room,
                no_of_guest: no_of_guest,
                random_string: randomString
            },
            success: function(response) {
                var redirectUrl = "{{ route('booking-now') }}" 
                                    + "?random_string=" + randomString 
                                    + "&email=" + encodeURIComponent(email) 
                                    + "&full_name=" + encodeURIComponent(full_name) 
                                    + "&pay_payment_value=" + encodeURIComponent(pay_payment_value) 
                                    + "&property_id=" + encodeURIComponent(property_id) 
                                    + "&mobile_no=" + encodeURIComponent(mobile_no)
                                    + "&check_in=" + encodeURIComponent(check_in)
                                    + "&check_out=" + encodeURIComponent(check_out)
                                    + "&no_of_room=" + encodeURIComponent(no_of_room)
                                    + "&no_of_nights=" + encodeURIComponent(no_of_nights)
                                    + "&no_of_guest=" + encodeURIComponent(no_of_guest);
                                   
                window.location.href = redirectUrl;
                // toastr.success(response.message);
            
            },
            error: function(xhr) {
                if (xhr.responseJSON && xhr.responseJSON.error) {
                    toastr.error(xhr.responseJSON.error); // Display the error message from the server
                } else {
                    toastr.error('An unexpected error occurred.'); // Fallback message
                }
            }
        });
    });
    function generateRandomString(length) {
        var randomString = '';
        while (randomString.length < length) {
            randomString += Math.random().toString(36).substring(2); // Generate random string and append
        }
        return randomString.substring(0, length); // Ensure the string length is exactly 'length'
    }
</script>

@endsection
