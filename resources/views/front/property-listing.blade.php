@extends('front.layout.app')
@section('content')
<section class=" py-50" style="margin-top: 60px;">
    <div class="main">
        <div class="container">
            <!-- -------------------- propertyListing ------------------ -->
            <div class="propertyListing">
                <div class="propertyListingHeading">
                    <h3>List your property on Clock-Wise.com and start welcoming guests in no time!</h3>
                    <p>To get started, choose the type of property you want to list on Clock-Wise.com</p>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-3 col-md-6 mb-3">
                        <div class="propertyCardList">
                            <img src="front/img/hotels/4.png" alt="">
                            <div class="propertyCardList-Body">
                                <h5>Apartment</h5>
                                <p>Furnished and self-catering accommodation, where guests rent the entire place.</p>
                                <a href="#" class="btn btn-danger" id="apartmentButton">List Your Property</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 mb-3">
                        <div class="propertyCardList">
                            <img src="front/img/hotels/3.png" alt="">
                            <div class="propertyCardList-Body">
                                <h5>Homes</h5>
                                <p>Properties like apartments, holiday homes, villas, etc.</p>
                                <a href="#" class="btn btn-danger" id="homeButton">List Your Property</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 mb-3">
                        <div class="propertyCardList">
                            <img src="front/img/hotels/2.png" alt="">
                            <div class="propertyCardList-Body">
                                <h5>Hotel, B&Bs, and more</h5>
                                <p>Properties like hotels, B&Bs, guest houses, hostels, aparthotels, etc.</p>
                                <a href="#" class="btn btn-danger" id="hotelButton">List Your Property</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 mb-3">
                        <div class="propertyCardList">
                            <img src="front/img/hotels/1.png" alt="">
                            <div class="propertyCardList-Body">
                                <h5>Alternative places</h5>
                                <p>Properties like boats, campsites, luxury tents, etc.</p>
                                <a href="#" class="btn btn-danger" id="alternateButton">List Your Property</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- -------------------- propertyListing ------------------ -->
            <!-- -------------------- appartment ------------------ -->
            <div class="appartmentListing d-none">
                <div class="appartmentListingHeading mb-10">
                    <h3>List your property on Clock-Wise.com and start welcoming guests in no time!</h3>
                </div>
                <div class="appartmentCardList">
                    <div class="appartmentCardItems">
                        <i class="fa-solid fa-hotel"></i>
                        <span>Single Appartment</span>
                    </div>
                    <div class="appartmentCardItems">
                        <i class="fa-solid fa-hotel"></i>
                        <span>Multiple Appartments</span>
                    </div>
                </div>
                <div class="btnGroup mt-20">
                    <button class="btn btn-secondary rounded-pill mr-10 ">Back</button>
                    <button class="btn btn-success rounded-pill next-appartment-feedback">Next</button>
                </div>
            </div>
            <!-- -------------------- appartment ------------------ -->
            <!-- -------------------- appartment Feedback ------------------ -->
            <div class="appartmentFeedback d-none">
                <div class="appartmentFeedbackCard">
                    <span>You are Listing</span>
                    <i class="fa-solid fa-hotel"></i>
                    <h3>One apartment where guests can book the entire place</h3>
                    <p>Does this sound like your property?</p>
                </div>
                <div class="btnGroup mt-20">
                    <button class="btn btn-secondary rounded-pill mr-10 back-appartment-feedback">No, I need to make a change</button>
                    <a href="{{ url('property-listing-form') }}" class="btn btn-success rounded-pill ">Continue</a>
                </div>
            </div>
            <!-- -------------------- appartment Feedback ------------------ -->
        </div>
    </div>
</section>
@endsection