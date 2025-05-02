@extends('front.layout.app')
@section('content')
<section class="travel-on-emi" style="margin-top: 70px;">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-6 col-12 mb-20"> -->
            <div class="mission-content text-center">
                <h1 class="rq-title">
                    BOOK NOW PAY IN PARTS BEFORE YOUR HOLIDAY (ONLY FLIGHTS OPTION IS NOT AVAILABLE)
                    <i class="rq-line w-100 my-3"></i>
                </h1>
                <p>*Minimum Booking Amount payment needs to be paid at first,Later on Easy Installments before your Holiday</p>
                <a href="{{ route('booking') }}" class="btn mt-20">Click for New Holiday Packages & Offers</a>
            </div>
            <!-- </div> -->
        </div>
    </div>
</section>
<section class="planTrips py-50">
    <div class="container">
        <div class="planTrips-heading">
            <h3>Plan your Journey in Three Simple Steps !!</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-20">
                <div class="trip-detail text-center">
                    <div class="image">
                        <img src="front/img/tours/Find-Flight.webp" class="w-100 rounded-circle">
                    </div>
                    <div class="trip-content mt-20">
                        <h5>Find Your Flights</h5>
                        <p>You can find your flights on MakemyTrip,Yatra or any other site you like and note down your ticket price and flight details, Please make sure you select refundable flights in filter option,otherwise your application will be rejected,</p>
                        <a href="javascript:void(0)" class="mt-20">More Info ...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-20">
                <div class="trip-detail text-center">
                    <div class="image">
                        <img src="front/img/tours/submit-details.webp" class="w-100 rounded-circle">
                    </div>
                    <div class="trip-content mt-20">
                        <h5>Find Your Flights</h5>
                        <p>You can find your flights on MakemyTrip,Yatra or any other site you like and note down your ticket price and flight details, Please make sure you select refundable flights in filter option,otherwise your application will be rejected,</p>
                        <a href="javascript:void(0)" class="mt-20">More Info ...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-20">
                <div class="trip-detail text-center">
                    <div class="image">
                        <img src="front/img/tours/plans.webp" class="w-100 rounded-circle">
                    </div>
                    <div class="trip-content mt-20">
                        <h5>Find Your Flights</h5>
                        <p>You can find your flights on MakemyTrip,Yatra or any other site you like and note down your ticket price and flight details, Please make sure you select refundable flights in filter option,otherwise your application will be rejected,</p>
                        <a href="javascript:void(0)" class="mt-20">More Info ...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tripBenifits py-50">
    <div class="container">
        <div class="tripBenifits-heading">
            <h3>Benefits of Trip on EMI</h3>
        </div>
        <div class="tripBenifits-content">
            <ul>
                <li>No credit card required</li>
                <li>No documents, No filling forms , No credit check (Not affecting your CIBIL rating)</li>
                <li> Zero*% Interest </li>
                <li> You can plan your journey accordingly within your budget,Locking your fare in advance means getting cheaper ticket.</li>
                <li>With TravelonEmi.com you can plan journey in advance, find your flight, lock your fare and that too without paying the full ticket price. and all that for Zero*% interest.</li>
                <li>We can guarantee you no other website can lock your fare for more than 72 hours but we do.</li>
            </ul>
        </div>
    </div>
</section>
<section class="tripFrom py-50">
    <div class="container">
        <div class="formSection">
            <div class="tripForm-heading">
                <h3>Fill the form to book your Trip</h3>
            </div>
            <form action="#">
                <div class="mb-3">
                    <label for="name" class="form-label">Passenger Name</label>
                    <input type="name" class="form-control" id="name" aria-describedby="name">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Date Of Birth</label>
                    <input type="date" class="form-control" id="D_O_B" aria-describedby="date">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Passenger Phone Number</label>
                    <input type="number" class="form-control" id="number" aria-describedby="number">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Date Of Birth</label>
                    <input type="date" class="form-control" id="D_O_B" aria-describedby="date">
                </div>
                <div class="mb-3">
                    <label for="travelling-form" class="form-label">Travelling From</label>
                    <input type="name" class="form-control" id="travelling-form" aria-describedby="travelling-form">
                </div>
                <div class="mb-3">
                    <label for="travelling-to" class="form-label">Travelling To</label>
                    <input type="name" class="form-control" id="travelling-to" aria-describedby="travelling-to">
                </div>
                <div class="mb-3">
                    <label for="Price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="Price" aria-describedby="Price">
                </div>
                <div class="mb-3">
                    <label for="upload" class="form-label">File Upload</label>
                    <input type="file" class="form-control" id="upload" aria-describedby="upload">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn button -redBtn-1 h-40 px-35 col-4 rounded-pill bg-blue-1 text-white m-auto">Submit Form</button>
            </form>
        </div>
    </div>
</section>
@endsection