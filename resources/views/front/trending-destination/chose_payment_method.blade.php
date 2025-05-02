@extends('front.layout.app')
@section('content')

<!-- Toastr CSS (Toast library for toast notifications) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .h-50 {

        height: 50px !important;
        text-decoration: none;
    }
</style>

<!-- Your Custom Styles -->
<style>
    .your-details-new-updation {
        display: flex;
        align-items: center;
    }

    .details-first-one {
        background: rgba(26, 182, 79, 0.12);
        font-size: 12px;
        font-weight: bold;
        padding: 3px 7px;
        border-radius: 4px;
        margin-right: 16px;
        color: rgb(26, 182, 79);
    }

    .details-first-two {
        font-size: 20px;
        font-weight: bold;
        line-height: 1.4;
        flex-grow: 1;
    }

    .details-first-three {
        font-size: 14px;
        font-weight: 600;
        line-height: 1.71;
        color: rgb(238, 46, 36);
        border: 1px solid rgb(240, 240, 240);
        padding: 6px 12px;
        cursor: pointer;
        border-radius: 4px;
    }

    .updated-new-details {
        font-size: 14px;
        line-height: 1.71;
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
    }

    .new-two {
        width: 1px;
        height: 20px;
        border-right: 1px solid rgb(223, 223, 223);
    }

    .choose-payments {
        font-weight: 700;
        line-height: 20px;
        font-size: 19px;
        color: #141414;
        margin-bottom: 10px;
    }

    .secure-new {
        text-align: center;
        font-weight: 400;
        line-height: 20px;
        font-size: 14px;
        display: flex;
        color: #141414;
        background: #F5F5F5;
        padding: 8px 16px 8px;
        border-radius: 6px;
    }

    .payments-buttons-new {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }

    /* reamaing payments */
    .left-card-new .btn-light {
        border: 1px solid rgb(240, 241, 243);
        margin-bottom: 12px;
        min-width: 100%;
        cursor: pointer;
        font-size: 16px;
        line-height: 1.75;
        color: rgb(0, 0, 0);
        box-shadow: rgba(0, 0, 0, 0.09) 0px 4px 16px 0px;
        background-color: white;
        text-align: start;

    }

    .left-card-new .paying {
        box-sizing: border-box;
        cursor: pointer;
        margin-bottom: 12px;
        padding: 13px;
        font-size: 16px;
        line-height: 1.43;
        color: #fff;
        border: 1px solid;
        border-color: #d93025;
        background-color: #d93025;


    }

    .left-card-new .paying:hover {
        background-color: white;
        color: #d93025;
    }

    .first-bank {
        border: 0.5px solid #f4ebeb;
        padding: 10px 0px;
        margin-bottom: 3px;
    }

    .first-bank a {
        text-decoration: none;
        color: rgb(22, 22, 22);
    }

    .left-card-new i {
        font-size: 18px;
        margin-right: 5px;
    }

    .tab-my-content {
        display: block;
    }

    .tab-my-content i {
        font-size: 20px;
        margin-right: 10px;
    }

    .credit-form .form-control:focus {
        border-color: initial;
        box-shadow: none;
    }

    .tab-my-content .accordion-button:not(.collapsed) {
        background-color: initial;
        color: initial;

    }

    .tab-my-content .accordion-button:focus {
        box-shadow: none;
        border-color: initial;

    }

    .bank-anchors img {
        width: 23px;
        margin: 10px
    }

    @media (min-width:991px) {

        .pay-options-new .left-card-new .btn-light,
        .pay-options-new h6,
        .accordion-button {
            font-size: 14px;
        }

        .tab-my-content .accordion-button {
            padding: 10px;

        }



    }

    @media (max-width:991px) {
        .left-card-new .nav {
            width: 100%;
            padding: 0;
            margin: 0;
        }


    }

    /*  */
</style>

<section class="py-10 mt-80 d-flex items-center bg-light-2">
    <div class="container mt-4">

        <!-- Back Button -->
        <div class="mb-3 mt-5">
            <a href="#" class="text-danger text-decoration-none mt-4">
                <i class="fas fa-chevron-left"></i> Modify your booking
            </a>
        </div>

        <!-- Notification -->
        <div class="alert alert-warning text-center mb-4" role="alert">
            <i class="bi bi-stars"></i> <strong>Yay!</strong> You just saved ₹10000 on this booking!
        </div>

        <div class="row">
            <!-- Left Section -->
            <div class="col-md-6">
                <div class="card p-4">
                    <div class="your-details-new-updation">
                        <div class="details-first-one">1</div>
                        <div class="details-first-two"><span>Your details</span></div>
                        <!-- <div class="details-first-three"> <span>Modify</span></div> -->
                    </div>

                    <div class="updated-new-details">
                        <div class="new-one">{{$full_name}}</div>
                        <div class="new-two"></div>
                        <div class="new-one">{{$email}}</div>
                        <div class="new-two"></div>
                        <div class="new-one">{{$mobile_no}}</div>
                    </div>
                </div>


                <div class="card p-4 mt-1">
                    <div class="payment-method-updations">
                        <p class="choose-payments">Choose payment method to pay</p>
                        <p class="secure-new">100% safe and secure payments</p>
                        <div class="payments-buttons-new mt-3">
                            <!-- <a href="{{ url('bookings/' . $propert_details->id . '/' . $propert_details->id) }}"
                                class="btn btn-success">Pay Later</a> -->
                            <!-- <button type="button" class="btn btn-secondary">Google pay</button> -->
                            <!-- <a href="javascript:void(0)" class="proceedToPay btn btn-primary">Razor pay</a> -->
                        </div>
                    </div>
                    <!-- new payment-remaining  -->
                    <div class="row mt-5 pay-options-new">
                        <div class="col-lg-5">
                            <div class="left-card-new">

                                <!-- <button type="button" class="btn btn-light paying  ">Pay now</button> -->

                                <div class="d-flex align-items-start ">
                                    <div class="nav flex-column nav-pills me-md-3">
                                        <a href="{{ url('bookings/' . $propert_details->id . '/' . $propert_details->id) }}" class=" btn btn-light paying text-center" data-bs-target="#v-pills-home">Pay Later
                                        </a>
                                        <a href="javascript:void(0)" class="text-center btn btn-light paying proceedToPay" id="v-pills-home-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
                                            role="tab" aria-controls="v-pills-home" aria-selected="true">Razor Pay</a>

                                      <!--   <button class="btn btn-light paying" id="v-pills-profile-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"
                                            role="tab" aria-controls="v-pills-profile" aria-selected="false"><i
                                                class="fa-regular fa-credit-card"></i> credit/debit/Atm
                                            cards</button>
                                        <button class="btn btn-light paying" id="v-pills-messages-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button"
                                            role="tab" aria-controls="v-pills-messages" aria-selected="false"><i
                                                class="fa-solid fa-wallet"></i> wallet</button>
                                        <button class="btn btn-light paying" id="v-pills-settings-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button"
                                            role="tab" aria-controls="v-pills-settings" aria-selected="false"><i
                                                class="fa-solid fa-building-columns"></i> Netbanking</button>
 -->

                                    </div>

                                </div>

                            </div>
                        </div>
                      
                    </div>


                    <!--  -->

                </div>

            </div>

            <!-- Right Section -->
            <div class="col-md-6">
                <div class="card p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img style="width: 70px; height:70px"
                            src="https://test.pearl-developer.com/clockwisehotel/public/front/img/propertys/67120e39cab68.jpg"
                            class="me-3 rounded" alt="Hotel Image">
                        <div>
                            <h6 class="mb-1"> {{ $propert_details->title }} in  {{$propert_details->address}}</h6>
                            <!-- <p class="text-success mb-0"><i class="far fa-star"></i>4.4 <span class="text-muted">(0
                                    Ratings) - Very Good</span></p> -->
                        </div>
                    </div>
                    <hr>
                    <p><strong>{{ $no_of_nights }} Nights</strong></p>
                    <p><i class="bi bi-calendar3"></i>{{$check_in}} – {{$check_out}} | {{$no_of_room}} Room, {{$no_of_guest}} Guests</p>
                    <!-- <p><strong>Classic</strong></p> -->
                    <p class="d-flex justify-content-between">Room price for {{$no_of_nights}} Nights X ₹{{$propert_details->price}} (Price Per Night)<span>₹{{$propert_details->price * $no_of_nights}}</span>
                    </p>
                    <!-- <p class="d-flex justify-content-between">Instant discount: <span>-₹47524</span></p>
                    <p class="d-flex justify-content-between">9% Coupon Discount:<span> -₹10000</span></p> -->

                    <h5 class="d-flex justify-content-between">Payable Amount: <span class="text-danger"
                            id="payable_amount">₹{{$propert_details->price * $no_of_nights * $no_of_room}}</span></h5>
                    <hr>
                    <!-- <p class="text-danger text-center" style="background: #ff00001c;"><i class="fas fa-bolt"></i> 7
                        people booked this hotel in the last 6 hours</p> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- bootstrap js link -->
@php
$user=Auth::user();
$payableAmount = $pay_payment_value * $no_of_room
@endphp

<form method="POST" id="razorpay-form" action="{{ url('booking-store') }}">
    @csrf
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="transaction_via" value="razorpay">
     <input type="hidden" name="pay_payment_value" value="{{$pay_payment_value * $no_of_room}}">
      <input type="hidden" name="property_id" value="{{$property_id}}">
      <input type="hidden" name="mobile_no" value="{{$mobile_no}}">
    <input type="hidden" name="order_id" value="<?= rand(11111, 99999) . time(); ?>">
</form>



<!-- jQuery (necessary for Toastr) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Toastr JS (Toast library for toast notifications) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    // Check if the session contains a flash message
    @if(session('message'))
    toastr.success("{{ session('message') }}");
    @endif
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var razorpay_options = {
        key: "rzp_test_Y2okL9veQEr5BY",
        amount: " {{$payableAmount * 100}}",
        name: 'Hotel City Castel',
        description: "Hotel City Castel",
        netbanking: true,
        currency: "INR",
        prefill: {
            name: "{{ $user->name }}",
            email: "{{ $user->email }}",
            contact: "{{ $mobile_no }}",
        },
        notes: {
            soolegal_order_id: '11702624235',
        },
        handler: function(transaction) {
            // console.log(transaction);
            document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
            document.getElementById('razorpay-form').submit();
        },
        "modal": {
            "ondismiss": function() {
                location.reload()
            }
        }
    };
    var razorpay_submit_btn, razorpay_instance;

    function razorpaySubmit(el) {
        if (typeof Razorpay == 'undefined') {
            setTimeout(razorpaySubmit, 200);
            if (!razorpay_submit_btn && el) {
                razorpay_submit_btn = el;
                el.disabled = true;
                el.value = 'Please wait...';
            }
        } else {
            if (!razorpay_instance) {
                razorpay_instance = new Razorpay(razorpay_options);
                if (razorpay_submit_btn) {
                    razorpay_submit_btn.disabled = false;
                    razorpay_submit_btn.value = "Pay Now";
                }
            }
            razorpay_instance.open();
        }
    }

    $(".proceedToPay").click(function(e) {
        e.preventDefault();
        razorpaySubmit(e);
    });
</script>

@endsection