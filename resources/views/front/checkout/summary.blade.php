@extends('front.layout.app');

@section('content')
@php $propertyExist = \App\Models\PropertyWeekendDeal::where('property_id', $property->id)->first(); @endphp
<section class="checkout_summary mt-120">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="profile_checkout_card">
                    <img src="{{ asset('front/img/propertys/'.$decoedImage[0]) }}" alt="profile">
                    <div class="profile_checkout_content">
                        <h3>{{ $property->title ?? 'N/A' }}</h3>
                        <p>{{ $property->address ?? 'N/A' }}</p>
                        <p class="mt-2 mb-0 product_price" id="property_price" data-price="{{ $propertyExist ? $propertyExist->price : $property->price }}">
                            @if($propertyExist) 
                                ₹ <strike>{{ $property->price ?? '0' }}  </strike>   &nbsp
                                 {{ $propertyExist->price ?? '0' }}
                                @else
                              ₹ {{ $property->price ?? '0' }}     
                            @endif                   
                        </p>
                        <p class="mt-2 mb-0 product_price" >
                            Passanger Capacity : {{ $property->passenger_capacity ?? '0' }}                       
                        </p>
                    </div>
                </div>
            </div>
           
            <form id="summaryForm" action="{{ route('hotel.booking.store') }}" method="POST">
                <div class="row">
                @csrf
                <input type="hidden" name="property_id" value="{{ $property->id }}">
                <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                <input type="hidden" name="transaction_via" value="razorpay">
                <input type="hidden" name="amount" id="paid_amount">
                <input type="hidden" name="passenger" id="passenger_capacity_">
                <input type="hidden" name="admin_commision" id="admin_commision_">
                <input type="hidden" name="gst" id="gst_">
                <input type="hidden" name="merchant_order_id" value="<?= rand(11111, 99999) . time() ?>">
         
                <div class="col-md-6">
                    <div class="checkout_form">
                        <h5 class="column_heading">User Details</h5>
                        
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="full_name">Full Name <span class="text-danger" > * </span></label>
                                        <input type="text" class="form-control" name="name" id="full_name" value="{{ Auth::User()->name ?? 'N/A' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email<span class="text-danger" > * </span></label>
                                        <input type="text" class="form-control" name="email" id="email" value="{{ Auth::User()->email ?? 'N/A' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number<span class="text-danger" > * </span></label>
                                        <input type="text" class="form-control" name="mobile_no" id="mobile_no" value="{{ Auth::User()->mobile_no ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="passenger">Maximum Occupancy<span class="text-danger" > * </span></label>
                                        <input type="text" class="form-control" id="passenger_capacity" placeholder="Enter Maximum Occupancy">
                                        <span class="text-danger" id="passenger_capacity_error" ></span>
                                        
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address">Address<span class="text-danger" > * </span></label>
                                        <input type="text" class="form-control" name="address" required value="{{ Auth::User()->address ?? '' }}">
                                        <span class="text-danger" id="address_error" ></span>

                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="checkout_summary-card">
                        <h5 class="column_heading">Order Summary</h5>
                        <div class="summery-table-wrap">
                            <table class="table summery-table mb--30">
                                <tbody>
                                    <tr>
                                        <td style="width:50%;">
                                            <input type="date" name="check_in" placeholder="Check In" id="start_date" class="form-control start_date">
                                        </td>
                                        <td>
                                            <input type="date" name="check_out" placeholder="Check Out" id="end_date" class="form-control end_date">
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <td>Total Day Spent</td>
                                        <td class="order-total-discount" name="day" id="day_count"> </td>
                                    </tr>
                                
                                    <tr class="order-total">
                                        <td> Service Charges (15%)</td>
                                        <td class="order-total-discount" name="admin_commision" id="admin_commision"> </td>
                                    </tr>
                                    <tr class="order-shipping">
                                        <td>GST (18%)</td>
                                        <td class="order-total-discount" name="gst" id="gst"></td>
                                    </tr>
                                    <tr class="order-total hide-total">
                                        <td>Paid Amount</td>
                                        <td class="order-total-amount subtotal-amount-refresh" id="total_amount">0.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="payment-methods">
                                <div class="payment-option">
                                    <input type="radio" name="payment_method" value="1" id="razorpay" checked>
                                    <label for="razorpay">Razorpay</label>
                                </div>
                                <div class="payment-option">
                                    <input type="radio" name="payment_method" value="2" id="pop">
                                    <label for="pop">POP (Pay on Property)</label>
                                </div>
                            </div>                          
                            <button data-booking-id="{{ $property->id }}" type="submit" class=" button -redBtn-1 h-50 mt-3 px-35 col-12 rounded-100 bg-blue-1 text-white" id="pay_now">Pay Now</button>
                            <span id="capacity_alert" class="text-danger" ></span>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>



@endsection

@push('js')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>


<script>
    $(document).ready(function() {
        function getQueryParam(param) {
            var urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }
        var searchData = getQueryParam('search_data');
        console.log("Url Is : "+searchData);
  
        var adultCount = getQueryParam('adult_count');
        var childCount = getQueryParam('child_count');
        var roomCount = getQueryParam('room_count');
        var searchData = getQueryParam('search_data');
  
        if (searchData) {
            var data = JSON.parse(decodeURIComponent(searchData));
            if (data.check_in) {
                $('#start_date').val(data.check_in);  
            }
            if (data.check_out) {
                $('#end_date').val(data.check_out);  
            }
            if (adultCount) {
                $('#js-count-adult').text(adultCount); 
            } else {
                $('#js-count-adult').text(data.adult || '0');  
            }
            if (childCount) {
                $('#js-count-child').text(childCount);  
            } else {
                $('#js-count-child').text(data.children || '0');  
            }
  
            if (roomCount) {
                $('#js-count-room').text(roomCount);  
            } else {
                $('#js-count-room').text(data.rooms || '0');  
            }
        }
    });
  </script>

<script>
   $(document).ready(function () {
    let razorpay_instance; // Declare Razorpay instance globally
    let razorpay_submit_btn; // Store submit button reference
    let razorpayPaymentId = ""; // Store Razorpay payment ID

    // Razorpay options
    let razorpay_options = {
        key: "{{ env('RAZORPAY_KEY') }}",
        amount: "0", // Initialize with 0, will be updated dynamically
        name: "Clock Wise Hotel",
        description: "Hotel Booking Service",
        netbanking: true,
        currency: "INR",
        prefill: {
            name: "{{ Auth::User()->name }}",
            email: "{{ Auth::User()->email }}",
            contact: "{{ '1212121212' }}"
        },
        handler: function (transaction) {
            razorpayPaymentId = transaction.razorpay_payment_id;
            console.log("Payment ID: " + razorpayPaymentId);
            document.getElementById('razorpay_payment_id').value = razorpayPaymentId;
            document.getElementById('summaryForm').submit();
        },
        modal: {
            ondismiss: function () {
                location.reload();
            }
        }
    };

    // Update summary and Razorpay amount
    function updateSummary() {
        var start_date = $('#start_date').val();
        var end_date = $('#end_date').val();
        var property_price = $('#property_price').data('price');
        var admin_commission_percentage = 15; // Percentage
        var gst_percentage = 18; // Percentage

        console.log("Start Date: " + start_date);
        console.log("End Date: " + end_date);
        console.log("Price: " + property_price);

        if (start_date && end_date && property_price) {
            var start = new Date(start_date);
            var end = new Date(end_date);
            var timeDiff = end - start;
            var dayCount = Math.ceil(timeDiff / (1000 * 60 * 60 * 24)); // Convert ms to days

            if (dayCount > 0) {
                var base_amount = dayCount * property_price;
                var admin_commission_amount = (base_amount * admin_commission_percentage) / 100;
                var gst_amount = (base_amount * gst_percentage) / 100;
                var total_amount = base_amount + admin_commission_amount + gst_amount;

                // Update the DOM
                $('#day_count').text(dayCount + ' days');
                $('#admin_commision').html(
                    `(${dayCount} days * ${property_price} * ${admin_commission_percentage}%) = ${admin_commission_amount.toFixed(2)}`
                );
                $('#gst').html(
                    `(${dayCount} days * ${property_price} * ${gst_percentage}%) = ${gst_amount.toFixed(2)}`
                );
                $('#total_amount').html(
                    `Base Amount: ${base_amount.toFixed(2)} + Admin Commission: ${admin_commission_amount.toFixed(2)} + GST: ${gst_amount.toFixed(2)} = ${total_amount.toFixed(2)}`
                );
                $('#paid_amount').val(total_amount);
                $('#admin_commision_').val(admin_commission_amount);
                $('#gst_').val(gst_amount);

                // Update Razorpay options
                updateRazorpayOptions(total_amount);

                return total_amount;
            } else {
                alert("End date must be later than the start date.");
            }
        } else {
            alert("Please fill in all the fields (Start Date, End Date, and Property Price).");
        }
    }

    // Update Razorpay options dynamically
    function updateRazorpayOptions(totalAmount) {
        let totalAmountInPaise = (totalAmount * 100).toFixed(0); // Convert to paise
        razorpay_options.amount = totalAmountInPaise;
        console.log("Updated Razorpay Amount (in paise): " + totalAmountInPaise);
    }

    // Call updateSummary on page load and input changes
    updateSummary();
    $('.start_date, .end_date').on('change', function () {
        updateSummary();
    });

    $('#passenger_capacity').on('input', function () {
        var passenger = parseInt($(this).val(), 10);
        var capacity = @json($property->passenger_capacity);
        console.log("Passenger: " + passenger);
        console.log("Capacity: " + capacity);
        $('#passenger_capacity_').val(passenger);
        if (passenger > capacity) {
            $('#pay_now').hide();
            $('#capacity_alert').text(
                'Please look for another property. Your passenger limit extends the property capacity.'
            ).show();
        } else {
            $('#pay_now').show();
            $('#capacity_alert').text('').hide();
        }
    });

    // Form submission
    $("#summaryForm").submit(function (e) {
        e.preventDefault();
        let isValid = true;

        const name = $('#full_name').val();
        const email = $('#email').val();
        const mobile_no = $('#mobile_no').val();
        const address = $('#address').val();
        const passenger_capacity = $('#passenger_capacity').val();
        const paymentMethod = $('input[name="payment_method"]:checked').val();

        if (name === '') {
            isValid = false;
            $('#full_name').addClass('is-invalid');
        } else {
            $('#full_name').removeClass('is-invalid');
        }

        if (email === '') {
            isValid = false;
            $('#email').addClass('is-invalid');
        } else {
            $('#email').removeClass('is-invalid');
        }

        if (mobile_no === '') {
            isValid = false;
            $('#mobile_no').addClass('is-invalid');
        } else {
            $('#mobile_no').removeClass('is-invalid');
        }

        if (address === '') {
            isValid = false;
            $('#address').addClass('is-invalid');
            $('#address_error').text('Address is required');
        } else {
            $('#address').removeClass('is-invalid');
            $('#address_error').text('');
        }

        if (passenger_capacity === '') {
            isValid = false;
            $('#passenger_capacity').addClass('is-invalid');
            $('#passenger_capacity_error').text('Passenger Capacity is required');
        } else {
            $('#passenger_capacity').removeClass('is-invalid');
            $('#passenger_capacity_error').text('');
        }

        if (isValid) {
            if (paymentMethod === '1') {
                razorpaySubmit(this);
            } else {
                this.submit();
            }
        }
    });

    // Razorpay submission
    function razorpaySubmit(el) {
        console.log("Razorpay Submit Called");
        $('.payAmountBtn').text('Please Wait...');
        $('.payAmountBtn').prop('disabled', true);

        // Ensure Razorpay amount is up-to-date
        updateSummary(); // Recalculate to ensure latest amount

        if (typeof Razorpay === 'undefined') {
            console.log("Razorpay SDK not loaded yet");
            setTimeout(() => razorpaySubmit(el), 200);
            if (!razorpay_submit_btn && el) {
                razorpay_submit_btn = el;
                el.disabled = true;
                el.value = 'Please wait...';
            }
        } else {
            if (!razorpay_instance) {
                console.log("Creating Razorpay instance");
                razorpay_instance = new Razorpay(razorpay_options);
                if (razorpay_submit_btn) {
                    razorpay_submit_btn.disabled = false;
                    razorpay_submit_btn.value = "Pay Now";
                }
            }
            console.log("Opening Razorpay checkout with amount: " + razorpay_options.amount);
            razorpay_instance.open();
        }
    }
});
</script>



@endpush