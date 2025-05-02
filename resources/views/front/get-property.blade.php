@extends('front.layout.app')
@section('content')
<section class="py-50" style="margin-top: 60px;">
    <div class="registrationBanner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="registrationBanner__content">
                        <h2 class="registrationBanner__title">List Your Holiday Home on Booking.com</h2>
                        <p class="registrationBanner__para">List your holiday home on Booking.com and start earning more income. Whether hosting is your sideline passion or full-time job, list your home today and quickly start earning more income.</p>
                        
                        <a href="{{ route('vendor.login') }}" class="submitBtn" type="button">Get Started Now</a>
                        <!-- <a href="#" class="submitBtn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Get Started Now</a> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="registrationBanner__form">
                        <div class="form-card">
                            <h5>Register for Free</h5>
                            <ul>
                                <li><i class="fas fa-check me-3"></i>45% of hosts get their first booking within a week</li>
                                <li><i class="fas fa-check me-3"></i>Choose between instant bookings and booking requests</li>
                                <li><i class="fas fa-check me-3"></i>We handle payments for you</li>
                            </ul>
                            <p>Already Started a registration</p>
                            
                            <a href="{{route('vendor.register')}}">
                            <button class="btn btn-red">Continue Your Registration</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="conditionsList">
    <div class="container">
        <h3>List with peace of mind</h3>
        <ul class="conditionListing">
            <li>
                <i class="far fa-check-circle"></i>
                <div class="conditionListContent">
                    <p>Damage payments</p>
                    <span>Our <a href="#">damage programme</a> covers your property in case of damages.</span>
                </div>
            </li>
            <li>
                <i class="far fa-check-circle"></i>
                <div class="conditionListContent">
                    <p>Get paid consistently and securely</p>
                    <span>Get guaranteed payouts and fraud protection through Payments by <a href="#"> Booking.com.</a></span>
                </div>
            </li>
            <li>
                <i class="far fa-check-circle"></i>
                <div class="conditionListContent">
                    <p>Your own house rules</p>
                    <span>Communicate your house rules to potential guests who must agree to them in order to book.</span>
                </div>
            </li>
            <li>
                <i class="far fa-check-circle"></i>
                <div class="conditionListContent">
                    <p>Verified guests</p>
                    <span>We verify guests email addresses and credit cards for partners on Payments by Booking.com.</span>
                </div>
            </li>
            <li>
                <i class="far fa-check-circle"></i>
                <div class="conditionListContent">
                    <p>Choose how you prefer to receive bookings</p>
                    <span>Either by letting guests book instantly, or by <a href="#">reviewing booking requests </a> before accepting them.</span>
                </div>
            </li>
            <li>
                <i class="far fa-check-circle"></i>
                <div class="conditionListContent">
                    <p>Robust support </p>
                    <span>Access support in 45 languages and manage your property through Pulse, our app for partners like you.</span>
                </div>
            </li>
            <li>
                <i class="far fa-check-circle"></i>
                <div class="conditionListContent">
                    <p>Protection from liability claims</p>
                    <span>Receive <a href="#">protection against liability claims</a> from guests and neighbours of up to €/£/$1,000,000 for each reservation.</span>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="startingBase">
    <div class="container">
        <h3>Stand out from the start</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="startingBase-Card">
                    <img src="front/img/icons/Review.png" alt="">
                    <h5>Import your reviews</h5>
                    <p>We import your review score from other platforms and display it on your Booking.com property page, so you don’t start at zero reviews.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="startingBase-Card">
                    <img src="front/img/icons/Puzzle.png" alt="">
                    <h5>Import your property details</h5>
                    <p>Seamlessly import your property details and sync your availability calendar with other platforms to make it easy to list and avoid double bookings.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="startingBase-Card">
                    <img src="front/img/icons/Search.png" alt="">
                    <h5>Stand out in the market</h5>
                    <p>The ‘New to Booking.com’ label helps you stand out in our search results.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="globallyCustomer">
    <div class="container">
        <h3>Reach a unique global customer base</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="globallyCustomer-Card mb-4">
                    <h5>2/3</h5>
                    <p>of holiday rental guests return to book with us again</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="globallyCustomer-Card mb-4">
                    <h5>48%</h5>
                    <p>of nights booked by travellers at the end of 2023 were for international stays.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="globallyCustomer-Card mb-4">
                    <h5>33%</h5>
                    <p>of holiday rental customers are at Genius Level 2 or 3. These travellers tend to spend more and book directly on our platform.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="globallyCustomer-Card mb-4">
                    <h5>30%</h5>
                    <p>of all nights booked on our platform were at a holiday rental. More and more travellers flex book both hotels and alternative accommodation.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hostsLikely">
    <div class="container">
        <h3>What hosts like you say</h3>
        <div class="row">
            <div class="col-md-4 mb-3">
                <a href="#" class="hostsCard">
                    <p>“I was able to list within 15 minutes, and no more than two hours later, I had my first booking!”</p>
                    <div class="bottom-card mt-3">
                        <img src="front/img/icons/Review.png" alt="">
                        <div class="card-content">
                            <h6>Parley Rose</h6>
                            <span>UK-based host</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="#" class="hostsCard">
                    <p>“I was able to list within 15 minutes, and no more than two hours later, I had my first booking!”</p>
                    <div class="bottom-card mt-3">
                        <img src="front/img/icons/Review.png" alt="">
                        <div class="card-content">
                            <h6>Parley Rose</h6>
                            <span>UK-based host</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="#" class="hostsCard">
                    <p>“I was able to list within 15 minutes, and no more than two hours later, I had my first booking!”</p>
                    <div class="bottom-card mt-3">
                        <img src="front/img/icons/Review.png" alt="">
                        <div class="card-content">
                            <h6>Parley Rose</h6>
                            <span>UK-based host</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="#" class="hostsCard">
                    <p>“I was able to list within 15 minutes, and no more than two hours later, I had my first booking!”</p>
                    <div class="bottom-card mt-3">
                        <img src="front/img/icons/Review.png" alt="">
                        <div class="card-content">
                            <h6>Parley Rose</h6>
                            <span>UK-based host</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="#" class="hostsCard">
                    <p>“I was able to list within 15 minutes, and no more than two hours later, I had my first booking!”</p>
                    <div class="bottom-card mt-3">
                        <img src="front/img/icons/Review.png" alt="">
                        <div class="card-content">
                            <h6>Parley Rose</h6>
                            <span>UK-based host</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="#" class="hostsCard">
                    <p>“I was able to list within 15 minutes, and no more than two hours later, I had my first booking!”</p>
                    <div class="bottom-card mt-3">
                        <img src="front/img/icons/Review.png" alt="">
                        <div class="card-content">
                            <h6>Parley Rose</h6>
                            <span>UK-based host</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="accordionsSection">
    <div class="container">
        <h3>Your questions answered</h3>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What happens if my property is damaged by a guest?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Property owners can request damage deposits from guests. Deposits help cover any potential damage caused by a guest, offering some reassurance that your property will be treated respectfully. If anything goes wrong, it can be reported to our team through our misconduct reporting feature.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        When will my property go online?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Once you’ve finished creating your listing, you can open your property for bookings on our site. We may ask you to verify your property before you can start accepting bookings, but you can use this time to get familiar with our extranet and get prepared for your first guests.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal started-modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Your Partner Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modalForm">
                    <form action="#">
                        <div class="form-group mb-4">
                            <label for="exampleInputEmail1" class="form-label mb-0">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <a href="{{url('/property-listing')}}" class="btn btn-danger w-100">Continue</a>
                        <div class="horizontal-line"></div>
                        <button class="btn btn-danger w-100">Sign in</button>
                        <p class="text-center mt-3">By signing in or creating an account, you agree with our Terms & conditions and Privacy statement All rights reserved. </p>
                        <span class="text-center d-block">Copyright (2006 - 2024) - ClockWise Ltd. All rights reserved.</span>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection