@extends('backend.vendor.layouts.app')
@section('title', 'Add Property')
@section('content')





<!-- <section class="mt-5 Add-property-new">
    <div class="container">
        <div class="row py-5 card mx-2 ">
            <h3 class="mb-3 ">Add Property</h3>
            <form action="{{route('vendor.addProperty')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image[]" multiple>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Category</label>
                        <select class="form-control" name="property_category_id">
                            <option value="" selected="" disabled="">--Select Category--</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" required="">
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Description</label>
                        <textarea class="form-control" rows="6" cols="5" name="description"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="customername-field" class="form-label">Country</label>
                            <select class="form-control select2" name="country_id" id="country_id">
                                <option value="" selected disabled>--Select Country--</option>
                                @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="customername-field" class="form-label">State</label>
                            <select class="form-control select2" name="state_id" id="state_id">
                                <option value="" selected="" disabled="">--Select State--</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="customername-field" class="form-label">City</label>
                            <select class="form-control select2" name="city_id" id="city_id">
                                <option value="" selected disabled>--Select State--</option>
                               
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" required="">

                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Price Per Night</label>
                        <input type="number" class="form-control" name="price" required="">
                    </div>
                </div>

                <div class="col-12" id="facility-inputs">
                    <div class="mb-3">
                        <label for="facility-field" class="form-label">Facility</label>
                        <select name="facility_id[]" id="facility-field" class="form-select select2" multiple>
                            @foreach($facilities as $facility)
                            <option value="{{ $facility->id }}">{{ $facility->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-12" id="highlight-inputs">
                    <div class="mb-3">
                        <label for="highlights-field" class="form-label">Highlight</label>
                        <select name="highlights_id[]" id="highlights-field" class="form-select select2" multiple>
                            <option value="" disabled>--Select Facilities--</option>
                            @foreach($facilities as $facility)
                            <option value="{{ $facility->id }}">{{ $facility->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="hstack gap-2 justify-content-end">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</section> -->

<section class="mt-5 py-5">
    <form action="#" method="POST" id="user_information">
        @csrf
        {{-- <input type="hidden" name="id" value="{{ $id }}"> --}}
        <div class="container my-4">

            <div class="progress_stepper">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="m-0">
                            <strong><span class="d-flex fw-bold"><span id="section-number">Section 1 </span> of
                                    13</span></strong>
                        </p>
                        <p><strong>Share info about your business</strong></p>
                    </div>
                    <div>
                        <p class="m-0"><strong>Due today:</strong></p>
                        <p><strong>$0</strong></p>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar" id="progress-bar"></div>
                </div>
            </div>

            <div class="multiple_form_data">

                <div class="form-step active ">
                    <div class="row cssanimation sequence fadeInBottom">
                        <div class="col-lg-6 col-12 d-flex align-items-flex-start justify-content-center">
                            <h2><strong>Choose Your Property Types?</strong></h2>
                        </div>
                        <div class="col-lg-6 col-12 col_height">

                            <div>
                                <div class="btn-wrapper">
                                    <label class=" duolingo-btn" for="radio-1">
                                        <input type="radio" id="radio-1" name="bussiness_details" value="NONE" class="bc-1">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqXVA9sTnb9WazLL_eaqAQNlNQGXVqxpWHy1S7g5fgQKBhwlqFw76y9VXHA9pFR9slggM&usqp=CAU" alt="">
                                        <p class="btn-text m-0">One Appartment</p>
                                    </label>
                                </div>
                                <div class="btn-wrapper">
                                    <label class=" duolingo-btn" for="radio-2">
                                        <input type="radio" id="radio-2" name="bussiness_details" value="SOME" class="bc-2">
                                        <img src="data:image/png;base64,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" alt="">
                                        <p class="btn-text m-0">Hotel</p>
                                    </label>
                                </div>
                                <div class="btn-wrapper">
                                    <label class=" duolingo-btn" for="radio-3">
                                        <input type="radio" id="radio-3" name="bussiness_details" value="NONE" class="bc-1">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqXVA9sTnb9WazLL_eaqAQNlNQGXVqxpWHy1S7g5fgQKBhwlqFw76y9VXHA9pFR9slggM&usqp=CAU" alt="">
                                        <p class="btn-text m-0">Homes</p>
                                    </label>
                                </div>
                                <div class="btn-wrapper">
                                    <label class=" duolingo-btn" for="radio-4">
                                        <input type="radio" id="radio-4" name="bussiness_details" value="NONE" class="bc-1">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqXVA9sTnb9WazLL_eaqAQNlNQGXVqxpWHy1S7g5fgQKBhwlqFw76y9VXHA9pFR9slggM&usqp=CAU" alt="">
                                        <p class="btn-text m-0">Alternate Place</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start justify-content-md-end button_group">
                        <button type="button" class="back-btn btn btn-primary ml-3">Back</button>
                        <button type="button" class="next-btn btn btn-primary ml-3 ">Next</button>
                    </div>
                </div>
                <!-- <div class="form-step">
                    <div class="row cssanimation sequence fadeInBottom">
                        <div class="col-lg-6 col-12 d-flex align-items-flex-start justify-content-center">
                            <h2><strong>How many apartments are you listing?</strong></h2>
                        </div>
                        <div class="col-lg-6 col-12 col_height">

                            <div>
                                <div class="btn-wrapper">
                                    <label class=" duolingo-btn" for="radio-1">
                                        <input type="radio" id="radio-1" name="bussiness_details" value="NONE" class="bc-1">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqXVA9sTnb9WazLL_eaqAQNlNQGXVqxpWHy1S7g5fgQKBhwlqFw76y9VXHA9pFR9slggM&usqp=CAU" alt="">
                                        <p class="btn-text m-0">One Appartment</p>
                                    </label>
                                </div>
                                <div class="btn-wrapper">
                                    <label class=" duolingo-btn" for="radio-2">
                                        <input type="radio" id="radio-2" name="bussiness_details" value="SOME" class="bc-2">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqXVA9sTnb9WazLL_eaqAQNlNQGXVqxpWHy1S7g5fgQKBhwlqFw76y9VXHA9pFR9slggM&usqp=CAU" alt="">
                                        <p class="btn-text m-0">Multiple Appartments</p>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start justify-content-md-end button_group">
                        <button type="button" class="back-btn btn btn-primary ml-3">Back</button>
                        <button type="button" class="next-btn btn btn-primary ml-3 ">Next</button>
                    </div>
                </div> -->
                <div class="form-step">
                    <div class="row cssanimation sequence fadeInBottom">
                        <div class="col-lg-6 col-12 d-flex align-items-flex-start  justify-content-center">
                            <h2><strong>Basic information</strong></h2>
                            <!-- <p>Just your best guess here is all we need!</p> -->
                        </div>
                        <div class="col-lg-6 col-12 col_height">
                            <div class="row">
                                <div class="form-group">
                                    <h5>What is the name of your property?</h5>
                                    <label for="propertyName" class="form-label">Property Name</label>
                                    <input type="text" class="form-control" id="propertyName" placeholder="Enter your property name">
                                </div>
                                <div class="form-group">
                                    <h5>Where is the property you're listing?</h5>
                                    <div>
                                        <p>We may send a letter to confirm the location of your property, so make sure that the address is correct – it’s difficult to make changes to it later.</p>
                                        <div class="form_group">
                                            <label for="country" class="form-label">Country / Region</label>
                                            <select name="country" id="country" class="form-control">
                                                <option value="United States">United States</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Canada">Canada</option>
                                                <option value="India">India</option>
                                                <option value="Japan">Japan</option>
                                                <option value="France">France</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Spain">Spain</option>
                                            </select>
                                        </div>
                                        <div class="form_group">
                                            <label for="address" class="form-label">Find Your Address</label>
                                            <input type="text" class="form-control" id="address" placeholder="Start typing your address">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form_group">
                                                    <label for="postcode" class="form-label">Post Code</label>
                                                    <input type="number" class="form-control" id="postcode" placeholder="Post Code">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form_group">
                                                    <label for="city" class="form-label">City</label>
                                                    <input type="text" class="form-control" id="city" placeholder="City">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="location_Iframe mt-3">
                                            <h5>Pin the location of your property on the map below</h5>
                                            <label for="location" class="form-label">Location</label>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.713108180843!2d77.615549!3d28.538336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c624b9e027fde%3A0x97e98c63f02b7c50!2sIndian%20Institute%20of%20Management!5e0!3m2!1sen!2sin!4v1652861489813!5m2!1sen!2sin" width="600" height="450" style="border:0;width:100%" allowfullscreen="" loading="lazy"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary">Continue</button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justif-content-start justify-content-md-end button_group">
                        <button type="button" class="back-btn btn btn-primary ml-3">Back</button>
                        <button type="button" class="next-btn btn btn-primary ml-3">Next</button>
                    </div>
                </div>
                <div class="form-step">
                    <div class="row cssanimation sequence fadeInBottom">
                        <div class="col-lg-6 col-12 d-flex align-items-flex-start  justify-content-center">
                            <h2><strong>Property Setup?</strong></h2>
                        </div>
                        <div class="col-lg-6 col-12 col_height">
                            <div class="row">
                                <div class="form-group">
                                    {{-- <h5>Where can people sleep?</h5>
                                    <div class="form_group">
                                        <label for="living-room" class="form-label">Living Room</label>
                                        <select name="living-room" id="living-room" class="form-control">
                                            <option value="United States">United States</option>
                                            <option value="Australia">Australia</option>
                                        </select>
                                    </div>
                                    <div class="form_group">
                                        <label for="other-space" class="form-label">Other Spaces</label>
                                        <select name="other-space" id="other-space" class="form-control">
                                            <option value="United States">United States</option>
                                            <option value="Australia">Australia</option>
                                        </select>
                                    </div> --}}
                                    <h5>Which beds are available in this room?</h5>
                                    <div class="form_group">
                                        <label for="single-bed" class="form-label"></label>
                                        <select name="single-bed" id="single-bed" class="form-control">
                                            <option value="single-bed">Single Bed</option>
                                            <option value="double-bed">Double Bed</option>
                                            <option value="king-size">Large Bed (King Size)</option>
                                            <option value="superKing-size">Extraa Large Double Bed (Super King Size)</option>
                                            <option value="bunk-size">Bunk Bed</option>
                                            <option value="Sofa-size">Sofa Bed</option>
                                            <option value="futan-mat">Futan Mat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form_group">
                                        <label for="guest" class="form-label">How many guests can stay?</label>
                                        <select name="guest" id="guest" class="form-control">
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                    <div class="form_group">
                                        <label for="bathroom" class="form-label">How many bathrooms are there?</label>
                                        <select name="bathroom" id="bathroom" class="form-control">
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                    <div class="form_group">
                                        <label for="children" class="form-label">Do you allow children?</label>
                                        <div class="form-radio-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="yes">
                                                <label class="form-check-label" for="yes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="no">
                                                <label class="form-check-label" for="no">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>What can guests use at your place?</h5>
                                    <div class="form_group">
                                        <label for="genral" class="form-label">General</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Ac">
                                            <label class="form-check-label" for="Ac">
                                                Air conditioning
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="heating">
                                            <label class="form-check-label" for="heating">
                                                Heating
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="wifi">
                                            <label class="form-check-label" for="wifi">
                                                Free Wifi
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="EVC">
                                            <label class="form-check-label" for="EVC">
                                                Electric vehicle charging station
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="cookie" class="form-label">Cooking and cleaning</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="kitchen">
                                            <label class="form-check-label" for="kitchen">
                                                Kitchen
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Kitchenette">
                                            <label class="form-check-label" for="Kitchenette">
                                                Kitchenette
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="washingmachine">
                                            <label class="form-check-label" for="washingmachine">
                                                Washing machine
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="entertaiment" class="form-label">Entertainment</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="tv">
                                            <label class="form-check-label" for="tv">
                                                Flat-screen TV
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Swimming pool">
                                            <label class="form-check-label" for="Swimming pool">
                                                Swimming pool
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="hot-tub">
                                            <label class="form-check-label" for="hot-tub">
                                                Hot tub
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="mini-bar">
                                            <label class="form-check-label" for="mini-bar">
                                                Minibar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="sauna">
                                            <label class="form-check-label" for="sauna">
                                                Sauna
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="entertaiment" class="form-label">Outside and view</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="balcony">
                                            <label class="form-check-label" for="balcony">
                                                Balcony
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="garden-view">
                                            <label class="form-check-label" for="garden-view">
                                                Garden view
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="Terrace">
                                            <label class="form-check-label" for="Terrace">
                                                Terrace
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="View">
                                            <label class="form-check-label" for="View">
                                                View
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justif-content-start justify-content-md-end button_group">
                        <button type="button" class="back-btn btn btn-primary ml-3">Back</button>
                        <button type="button" class="next-btn btn btn-primary ml-3">Next</button>
                    </div>
                </div>
                <div class="form-step">
                    <div class="row cssanimation sequence fadeInBottom">
                        <div class="col-lg-6 col-12 d-flex align-items-flex-start  justify-content-center">
                            <h2><strong>Services & Rules at your property?</strong></h2>
                        </div>
                        <div class="col-lg-6 col-12 col_height">
                            <div class="form-group">
                                <div class="form_group">
                                    <label for="genral" class="form-label">Do you serve guests breakfast?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="yes">
                                        <label class="form-check-label" for="yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="no">
                                        <label class="form-check-label" for="no">
                                            No
                                        </label>
                                    </div>
                                </div>
                                <div class="form_group">
                                    <label for="genral" class="form-label">Is parking available to guests?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="yes">
                                        <label class="form-check-label" for="yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="no">
                                        <label class="form-check-label" for="no">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>What languages do you or your staff speak?</h5>
                                <div class="form_group">
                                    <label for="genral" class="form-label">Select languages</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="English">
                                        <label class="form-check-label" for="English">
                                            English
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="Hindi">
                                        <label class="form-check-label" for="Hindi">
                                            Hindi
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <h5>House rules</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="genral" class="form-label">Check in From</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>15:00</option>
                                            <option value="1">22:00</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="genral" class="form-label">Check in Until</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>18:00</option>
                                            <option value="1">22:00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="genral" class="form-label">Check Out From</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>15:00</option>
                                            <option value="1">22:00</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="genral" class="form-label">Check Out Until</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>18:00</option>
                                            <option value="1">22:00</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-checkboxes mt-3">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="smoking">
                                        <label class="form-check-label" for="smoking">Smoking allowed</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="pets">
                                        <label class="form-check-label" for="pets">Pets allowed</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="parties">
                                        <label class="form-check-label" for="parties">Parties/events allowed</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Host profile</h5>
                                <label for="genral" class="form-label">Help your listing stand out by telling potential guests a bit more about yourself, your property and your neighbourhood. This information will be shown on your property page.</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="The property">
                                    <label class="form-check-label" for="The property">
                                        The property
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="The host">
                                    <label class="form-check-label" for="The host">
                                        The host
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="The neighbourhood">
                                    <label class="form-check-label" for="The neighbourhood">
                                        The neighbourhood
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="None of the above/I'll add these later">
                                    <label class="form-check-label" for="None of the above/I'll add these later">
                                        None of the above/I'll add these later
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end my-4">
                        <div class="d-flex justif-content-start justify-content-md-end button_group">
                            <button type="button" class="back-btn btn btn-primary ml-3">Back</button>
                            <button type="button" class="next-btn btn btn-primary ml-3">Next</button>
                        </div>
                    </div>
                </div>
                <div class="form-step ">
                    <div class="row cssanimation sequence fadeInBottom">
                        <div class="col-lg-6 col-12 d-flex align-items-flex-start  justify-content-center">
                            <h2><strong>What does your place look like?</strong></h2>
                        </div>
                        <div class="col-lg-6 col-12 col_height">
                            <div class="image-container">
                                <h5>Upload at least 5 photos of your property</h5>
                                <p>The more you upload, the more likely you are to get bookings. You can add more later.</p>
                                <div class="image-uploader-box">
                                    <span>Drag and Drop or</span>
                                    <div class="upload_img">
                                        <i class="fa-solid fa-camera-retro"></i>
                                        Upload Photos
                                        <input type="file" id="photoFileInput" accept="image/jpeg, image/png" multiple="" name="photoUploadBlock">
                                    </div>
                                    <p>jpg/jpeg or png, maximum 47MB each</p>
                                </div>
                                <div class="divider-line"></div>
                                <div class="preview-images" id="previewImages"></div>
                                <p id="error-message" class="mb-3" style="color: red; display: none;">Please upload at least 5 images.</p>
                                <button class="btn btn-primary">Continue</button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justif-content-start justify-content-md-end button_group">
                        <button type="button" class="back-btn btn btn-primary ml-3">Back</button>
                        <button type="button" class="next-btn btn btn-primary ml-3">Next</button>
                    </div>
                </div>
                <!-- <div class="form-step ">
                    <div class="row cssanimation sequence fadeInBottom">
                        <div class="col-lg-6 col-12 d-flex align-items-flex-start  justify-content-center">
                            <h2><strong>How you receive bookings?</strong></h2>
                        </div>

                        <div class="col-lg-6 col-12 col_height">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title">We're here to ensure you can receive booking safely</div>
                                            <ul>
                                                <li>✓ Set house rules guest must agree to before they stay </li>
                                                <li>✓ Request damage deposits for extra security</li>
                                                <li>✓ Report guest misconduct if something goes wrong</li>
                                                <li>✓ Receive protection against liability claims from guests and neighbours up to US$1,000,000 for every reservation</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="card mt-30">
                                        <div class="card-body">
                                            <h6>How can guests book your apartment?</h6>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    All guests can book instantly Recommended
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    All guests will need to request to book
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="mb-20 mt-20">Payments</h3>
                                        <div class="card mt-30">
                                            <div class="card-body">
                                                <h4>How can your guests pay for their stay?</h4>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Online, when they make a reservation. Clockwise will facilitate your guests’s payments with the Payments by Clockwise service.
                                                    </label>
                                                </div>
                                                <ol>
                                                    <li><i class="fa-solid fa-ban"></i> Fewer cancellations</li>
                                                    <li><i class="fa-solid fa-shield"></i> Fraud and card protection</li>
                                                    <li><i class="fa-regular fa-handshake"></i> More payment options for your guests</li>
                                                </ol>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        By credit card, at my property
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mt-30 bg-light">
                                            <div class="card-body">
                                                <h6 class="mb-3">Are you sure you want to require your guests to request to book?</h6>
                                                <ol class="pl-0">
                                                    <li><b>Your guest pays</b> through Clockwise with more options like PayPal, WeChat Pay and AliPay.</li>
                                                    <li><b>We facilitate your guest’s payment.</b> You don’t have to deal with fraud, chargebacks or invalid cards.</li>
                                                    <li><b>Clockwise sends payouts to you.</b> You'll receive a bank transfer by the 15th of each month that covers all bookings with a check-out in the previous month.</li>
                                                    <li></li>
                                                </ol>
                                                <h6 class="mb-3">The payment charge</h6>
                                                <p>You cover the 2.3% payment charge. Of course, no fees are collected when you waive a fee to offer guests free cancellation.</p>
                                                <p>The payment charge is based on payment processing fees as well as the average chargeback and fraud risk in your region, and is automatically deducted from each of your payouts.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12"></div>
                            </div>

                            
                            <input type="hidden" name="business_kind_text" value="">
                        </div>
                    </div>
                    <div class="d-flex justif-content-start justify-content-md-end button_group">
                        <button type="button" class="back-btn btn btn-primary ml-3">Back</button>
                        <button type="button" class="next-btn btn btn-primary ml-3">Next</button>
                    </div>
                </div> -->
                <div class="form-step">
                    <div class="row cssanimation sequence fadeInBottom">
                        <div class="col-lg-6 col-12 d-flex align-items-flex-start  justify-content-center">
                            <h2><strong>Price per night?</strong></h2>
                        </div>
                        <div class="col-lg-6 col-12 col_height">
                            <div>
                                <h3 class="mb-20 mt-20">Payments</h3>
                                <div class="card mt-30">
                                    <div class="card-body">
                                        <h4>Make your price competitive to increase your chances of getting more bookings.</h4>
                                        <p>This is the price range for properties similar to yours. <a href="#">Learn more</a></p>
                                        <div class="price-range-container">
                                            <div class="price-low-container"><span style="right: -30.5px;">₹&nbsp;88.44</span></div>
                                            <div class="price-median-container"><span style="transform: translateX(-61px);">Median: ₹&nbsp;905.95</span></div>
                                            <div class="price-high-container"><span style="left: -39.5px;">₹&nbsp;2,232.56</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-30 ">
                                    <div class="card-body">
                                        <h6 class="mb-3">How much do you want to charge per night?</h6>
                                        <div class="form-group">
                                            <label for="price" class="form-label">Price guests pay</label>
                                            <input type="number" class="form-control mb-2" id="price" placeholder="Enter your price per night">
                                            <span>Including taxes, commission and charges</span>
                                        </div>
                                        <ol class="" style="list-style: none;">
                                            <p>15.00%Booking.com commission</p>
                                            <li><b><i class="fa fa-check me-2" aria-hidden="true"></i> 24/7 help in your language</b></li>
                                            <li><b><i class="fa fa-check me-2" aria-hidden="true"></i> Save time with automatically confirmed bookings.</b></li>
                                            <li><b><i class="fa fa-check me-2" aria-hidden="true"></i> We promote your place on Google.</b></li>
                                        </ol>
                                        <p><strong>INR850.00</strong> Your earnings (including taxes)</p>
                                    </div>
                                </div>
                                <!-- <div class="card mt-30 ">
                                    <div class="card-body">
                                        <h6 class="mb-3">How much do you want to charge per night?</h6>
                                        <div class="form-group">
                                            <input type="checkbox" id="discount_check" name="discount_check" value="1">
                                            <label for="discount_check">Get guests’ attention with a 20% discount</label>
                                        </div>
                                        <span class="d-block mb-3">Give 20% off on your first 3 bookings or 90 days, whichever comes first. <a href="#">Learn more</a></span>
                                        <p class="text-success"><strike class="text-dark me-2">INR758,563.00 </strike> INR606,850.40 per night</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justif-content-start justify-content-md-end button_group">
                        <button type="button" class="back-btn btn btn-primary ml-3">Back</button>
                        <button type="button" class="next-btn btn btn-primary ml-3">Next</button>
                    </div>
                </div>
                <div class="form-step ">
                    <div class="row cssanimation sequence fadeInBottom">
                        <div class="col-lg-6 col-12 d-flex align-items-flex-start  justify-content-center">
                            <h2><strong>Cancellation policy</strong></h2>
                        </div>
                        <div class="col-lg-6 col-12 col_height">
                            <div>
                                <div class="card mt-30 ">
                                    <div class="card-body">
                                        <div class="d-flex align-items-baseline gap-3">
                                            <div class="d-flex flex-column">
                                                <h5 class="mb-3">Cancellation policy <i class="fa fa-exclamation-circle ms-2" aria-hidden="true"></i></h5>
                                                <span class="text-success">You’re 91% more likely to get bookings with the pre-selected cancellation policy settings than with a 30-day cancellation policy</span>
                                            </div>
                                            <!-- <div class="btn btn-outline-success">Edit</div> -->
                                        </div>
                                        <ol class="mt-3 p-0" style="list-style: none;">
                                            <li><i class="fa fa-check me-2" aria-hidden="true"></i> Guests can cancel their bookings for free up to 1 day before their arrival</li>
                                            <li><i class="fa fa-check me-2" aria-hidden="true"></i> Guests who cancel within 24 hours will have their cancellation fee waived</li>
                                        </ol>
                                    </div>
                                </div>
                                <!-- <div class="card mt-30 ">
                                    <div class="card-body">
                                        <div class="d-flex align-items-baseline gap-3">
                                            <div class="d-flex flex-column">
                                                <h5 class="mb-3">Price per group size <i class="fa fa-exclamation-circle ms-2" aria-hidden="true"></i></h5>
                                                <span class="text-danger">Set lower prices for smaller groups of guests to increase your chances of getting bookings</span>
                                            </div>
                                            <div class="btn btn-outline-success">Edit</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="group_size mt-3">
                                                    <h5>Occupancy</h5>
                                                    <ul style="list-style: none; padding: 0;">
                                                        <li>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <i class="fa-regular fa-user"></i>
                                                                ✕
                                                                <span>10</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <i class="fa-regular fa-user"></i>
                                                                ✕
                                                                <span>9</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <i class="fa-regular fa-user"></i>
                                                                ✕
                                                                <span>8</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <i class="fa-regular fa-user"></i>
                                                                ✕
                                                                <span>7</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <i class="fa-regular fa-user"></i>
                                                                ✕
                                                                <span>6</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <i class="fa-regular fa-user"></i>
                                                                ✕
                                                                <span>5</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <i class="fa-regular fa-user"></i>
                                                                ✕
                                                                <span>4</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <i class="fa-regular fa-user"></i>
                                                                ✕
                                                                <span>3</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <i class="fa-regular fa-user"></i>
                                                                ✕
                                                                <span>2</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <i class="fa-regular fa-user"></i>
                                                                ✕
                                                                <span>1</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="group_size mt-3">
                                                    <h5>Guests pay</h5>
                                                    <ul style="list-style: none; padding: 0;">
                                                        <li>
                                                            <span>INR 758,563.00</span>
                                                        </li>
                                                        <li>
                                                            <span>INR 758,563.00</span>
                                                        </li>
                                                        <li>
                                                            <span>INR 758,563.00</span>
                                                        </li>
                                                        <li>
                                                            <span>INR 758,563.00</span>
                                                        </li>
                                                        <li>
                                                            <span>INR 758,563.00</span>
                                                        </li>
                                                        <li>
                                                            <span>INR 758,563.00</span>
                                                        </li>
                                                        <li>
                                                            <span>INR 758,563.00</span>
                                                        </li>
                                                        <li>
                                                            <span>INR 758,563.00</span>
                                                        </li>
                                                        <li>
                                                            <span>INR 758,563.00</span>
                                                        </li>
                                                        <li>
                                                            <span>INR 758,563.00</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-4"></div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justif-content-start justify-content-md-end button_group">
                        <button type="button" class="back-btn btn btn-primary ml-3">Back</button>
                        <button type="button" class="next-btn btn btn-primary ml-3">Next</button>
                    </div>
                </div>
                <div class="form-step ">
                    <div class="row cssanimation sequence fadeInBottom">
                        <div class="col-lg-6 col-12 d-flex align-items-flex-start  justify-content-center">
                            <h2><strong>Goods and Services Tax</strong></h2>
                        </div>
                        <div class="col-lg-6 col-12 col_height">
                            <div>
                                <!-- <h3 class="mb-20 mt-20">Standard rate plan</h3> -->
                                <div class="card mt-30 ">
                                    <div class="card-body">
                                        <div class="d-flex align-items-baseline gap-3">
                                            <p class="">Due to regulations established by the Indian government, we need the following details. By submitting this information, you are confirming that your PAN and state registration are accurate.</p>
                                        </div>
                                        <h5>Are you registered for GST purposes?</h5>
                                        <div class="d-flex gap-3">
                                            <div class="form-group d-flex align-items-center gap-2">
                                                <input type="radio" class="form-check-input" name="register_gst" value="yes" id="register_gst_yes">
                                                <label for="register_gst_yes" class="form-label mb-0">Yes</label>
                                            </div>
                                            <div class="form-group d-flex align-items-center gap-2">
                                                <input type="radio" class="form-check-input" name="register_gst" value="no" id="register_gst_no">
                                                <label for="register_gst_no" class="form-label mb-0">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="gst" class="form-label">GST</label>
                                            <input type="text" class="form-control mb-2" id="gst" placeholder="Enter your GST">
                                        </div>
                                        <div class="form-group">
                                            <label for="pan" class="form-label">PAN</label>
                                            <input type="text" class="form-control mb-2" id="pan" placeholder="Enter your PAN">
                                        </div>

                                        <div class="form-group">
                                            <label for="adhar" class="form-label">Please enter your 12-digit Aadhaar number</label>
                                            <input type="text" class="form-control mb-2" id="adhar" placeholder="Enter your Adhar Number">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="adhar" class="form-label">Upload Aadhar Front Picture </label>
                                                    <input type="file" class=" mb-2" id="adhar_front">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="adhar" class="form-label">Upload Aadhar Back Picture </label>
                                                    <input type="file" class=" mb-2" id="adhar_back">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justif-content-start justify-content-md-end button_group">
                        <button type="button" class="back-btn btn btn-primary ml-3">Back</button>
                        <button type="button" class="next-btn btn btn-primary ml-3">Next</button>
                    </div>
                </div>

            </div>

        </div>
        <div class="appendDiv"></div>
    </form>
</section>

<!-- Modal -->
<div class="modal fade" id="selectionLimitModal" tabindex="-1" aria-labelledby="selectionLimitModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="selectionLimitModalLabel">Selection Limit Exceeded</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                You can only select up to 5 facilities in highlights.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</div>



@endsection

@push('js')

<script>
    const fillingAmntCard = document.getElementById('fillingAmntCard');
    const filingRadio = document.getElementById('filingRadio');
    const fillingAmntCard2 = document.getElementById('fillingAmntCard2');
    const filingRadio2 = document.getElementById('filingRadio2');
    fillingAmntCard.addEventListener('click', function() {
        filingRadio.checked = true;
    });
    fillingAmntCard2.addEventListener('click', function() {
        filingRadio2.checked = true;
    });
</script>
<script>
    const nextButtons = document.querySelectorAll('.next-btn');
    const backButtons = document.querySelectorAll('.back-btn');
    const formSteps = document.querySelectorAll('.form-step');
    const progressBar = document.getElementById('progress-bar');
    const sectionNumberDisplay = document.getElementById('section-number');
    let currentStep = 0;

    /* Handle "Next" button clicks to progress form steps */
    nextButtons.forEach((button) => {
        button.addEventListener('click', () => {
            if (currentStep < formSteps.length - 1) {
                formSteps[currentStep].classList.remove('active');
                currentStep++;
                formSteps[currentStep].classList.add('active');
                updateProgressBar();
                updateSectionNumber();
            }
        });
    });

    /* Handle "Back" button clicks to go back form steps */
    backButtons.forEach((button) => {
        button.addEventListener('click', () => {
            if (currentStep > 0) {
                formSteps[currentStep].classList.remove('active');
                currentStep--;
                formSteps[currentStep].classList.add('active');
                updateProgressBar();
                updateSectionNumber();
            }
        });
    });

    /* Update the progress bar based on current step */
    const updateProgressBar = () => {
        const progressPercentage = ((currentStep + 1) / formSteps.length) * 100;
        progressBar.style.width = progressPercentage + '%';
    };

    /* Update the section number display */
    const updateSectionNumber = () => {
        sectionNumberDisplay.innerText = currentStep + 1;
    };

    /* Populate the dropdown with states */
    const states = [
        "Alabama", "Alaska", "Arizona", "Arkansas", "California",
        "Colorado", "Connecticut", "Delaware", "Florida", "Georgia",
        "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa",
        "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland",
        "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri",
        "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey",
        "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio",
        "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina",
        "South Dakota", "Tennessee", "Texas", "Utah", "Vermont",
        "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"
    ];

    /* Function to populate a select element with states */
    const populateStates = (selectId) => {
        const select = document.getElementById(selectId);
        states.forEach(state => {
            const option = document.createElement("option");
            option.value = state;
            option.textContent = state;
            select.appendChild(option);
        });
    };


    populateStates("formation_state");
    populateStates("company_state");
    populateStates("state_require_RA");


    function getButtonValues() {
        const buttons = document.querySelectorAll('.duolingo-btn');
        const buttonData = [];

        buttons.forEach(button => {
            const choiceElement = button.querySelector('.btn-choice');
            const textElement = button.querySelector('.btn-text');

            if (choiceElement && textElement) {
                const choice = choiceElement.textContent.trim();
                const text = textElement.textContent.trim();
                buttonData.push({
                    choice,
                    text
                });
            }
        });
        return buttonData;
    }
</script>

<script>
    const toggleButton = document.getElementById('toggleButton');
    const toggleDiv = document.getElementById('toggleDiv');
    toggleButton.addEventListener('click', function() {
        if (toggleDiv.style.display === "none") {
            toggleDiv.style.display = "block";
        } else {
            toggleDiv.style.display = "none";
        }
    });
</script>



<script>
    /* // Handle button selection like radio buttons
                                                   // Handle button selection like radio buttons within a specific .form-step */
    document.querySelectorAll('.form-step').forEach(formStep => {
        const buttons = formStep.querySelectorAll('[id^="btn-"]');
        buttons.forEach(button => {
            button.addEventListener("click", () => {
                const index = button.id.split('-')[1];

                /* // Select the corresponding radio button and check it */
                const radioInput = formStep.querySelector(`#radio-${index}`);
                if (radioInput) {
                    radioInput.checked = true; // This checks the radio button
                }

                /* // Apply styles to the clicked button */

                // button.style.borderColor = "#33f28b";
                // button.style.backgroundColor = "#33f28b";
                // formStep.querySelector(`.bc-${index}`).style.borderColor = "#33f28b";
                // formStep.querySelector(`.bc-${index}`).style.color = "#000";
                // formStep.querySelector(`#bt-${index}`).style.color = "#000";
                button.style.borderColor = "#E22200";
                button.style.backgroundColor = "#E22200";
                formStep.querySelector(`.bc-${index}`).style.borderColor = "#E22200";
                formStep.querySelector(`.bc-${index}`).style.color = "#fff";
                formStep.querySelector(`#bt-${index}`).style.color = "#fff";

                /* // Reset styles for other buttons within this form-step */
                buttons.forEach(btn => {
                    if (btn.id !== button.id) {
                        const otherIndex = btn.id.split('-')[1];
                        btn.style.borderColor = "#e5e5e5";
                        btn.style.backgroundColor = "#ffffff";
                        formStep.querySelector(`.bc-${otherIndex}`).style.borderColor =
                            "#e5e5e5";
                        formStep.querySelector(`.bc-${otherIndex}`).style.color =
                            "#afafaf";
                        formStep.querySelector(`#bt-${otherIndex}`).style.color =
                            "#4b4b4b";
                    }
                });
            });
        });
    });

    /* // Support keyboard shortcuts for button selection (1, 2, 3 keys) in the current form-step */
    document.addEventListener("keypress", (event) => {
        if (event.key >= "1" && event.key <= "3") {
            document.querySelectorAll('.form-step').forEach(formStep => {
                const button = formStep.querySelector(`#btn-${event.key}`);
                if (button) {
                    button.click();
                }
            });
        }
    });


    /* // Support keyboard shortcuts for button selection (1, 2, 3 keys) */
    document.addEventListener("keypress", (event) => {
        if (event.key >= "1" && event.key <= "3") {
            document.querySelector(`#btn-${event.key}`).click();
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const alStateFilingFee = 236;

        function printPackageData(radio) {
            const selectedPackage = JSON.parse(radio.value);

            document.getElementById('orderSummaryTitle').textContent = `Order Summary - ${selectedPackage.package_name}`;
            document.getElementById('summaryAmount').textContent = `$${selectedPackage.price}`;
            document.getElementById('entityType').textContent = selectedPackage.package_name;
            document.getElementById('packageName').textContent = `${selectedPackage.package_name} Package`;
            document.getElementById('packagePrice').textContent = `$${selectedPackage.price}`;
            document.getElementById('filingFee').textContent = `$${alStateFilingFee}`;

            // Get the selected filing time fee
            const filingTimeFee = parseInt(document.querySelector('input[name="filingTime"]:checked')?.value || 0);

            // Calculate total
            const total = selectedPackage.price + alStateFilingFee + filingTimeFee;
            document.getElementById('totalAmount').textContent = `$${total}`;
        }

        // Listen for changes to the package selection
        const packageRadios = document.querySelectorAll('input[name="whole_package"]');
        packageRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                printPackageData(this);
            });
        });

        // Listen for changes to the filing time selection
        const filingTimeRadios = document.querySelectorAll('input[name="filingTime"]');
        filingTimeRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                const selectedPackageRadio = document.querySelector('input[name="whole_package"]:checked');
                if (selectedPackageRadio) {
                    printPackageData(selectedPackageRadio);
                }
            });
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function printedPackageData(element, packageId, packageName, price) {

        var htmlDiv = `
           <input type="hidden" name="package_name_dev" value="` + packageName + `">
           <input type="hidden" name="package_id_dev" value="` + packageId + `">
           <input type="hidden" name="package_price_dev" value="` + price + `">
       `;
        $('.appendDiv').html(htmlDiv);
        // alert(htmlDiv);

    }
</script>
<script>
    var swiper = new Swiper(".mobile_packages_section", {});
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const businessNameInput = document.getElementById('bussiness_name');
        const stateSelect = document.getElementById('formation_state');
        const nextButton = document.querySelector('.nxt-btn');

        // Function to check if inputs are valid
        function checkInputs() {
            // If either input is empty, disable the Next button
            if (businessNameInput.value.trim() === "" || stateSelect.value.trim() === "") {
                nextButton.disabled = true; // Disable Next button if inputs are empty
                nextButton.classList.add('disabled'); // Optional: Add a disabled class for styling
            } else {
                nextButton.disabled = false; // Enable Next button if inputs are filled
                nextButton.classList.remove('disabled');
            }
        }

        // Event listeners for inputs
        businessNameInput.addEventListener('input', checkInputs);
        stateSelect.addEventListener('change', checkInputs);

        // Initial check on page load
        checkInputs();
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleAnchor = document.getElementById("toggleAnchor");
        const pricingTableHeading = document.querySelector(".pricing-table-heading");
        toggleAnchor.addEventListener("click", function(event) {
            event.preventDefault();
            if (pricingTableHeading.style.display === "none" || !pricingTableHeading.style.display) {
                pricingTableHeading.style.display = "block";
                toggleAnchor.textContent = "Hide package details";
            } else {
                pricingTableHeading.style.display = "none";
                toggleAnchor.textContent = "See full package details";
            }
        });
    });
</script>

<!-- 
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const radioGroupButtonMap = {
            'bussiness_details': '.fist-btn',
            'first_year_employee_details': '.sec-btn'
        };

        const updateButtonState = (groupName, buttonSelector) => {
            const selectedButton = document.querySelector(`input[name="${groupName}"]:checked`);
            const button = document.querySelector(buttonSelector);
            if (button) {
                button.disabled = !selectedButton; 
            }
        };

        Object.entries(radioGroupButtonMap).forEach(([groupName, buttonSelector]) => {
            const buttons = document.querySelectorAll(`input[name="${groupName}"]`);
            const button = document.querySelector(buttonSelector);
            updateButtonState(groupName, buttonSelector);
            buttons.forEach(radio => {
                radio.addEventListener('change', () => {
                    updateButtonState(groupName, buttonSelector);
                });
            });
            if (!button) {
                console.error(`Button with selector "${buttonSelector}" not found.`);
            }
        });
    });
</script> -->



















<script>
    $(document).ready(function() {
        $('#highlights-field').on('change', function() {
            if ($(this).val().length > 5) {
                $('#selectionLimitModal').modal('show');

                const selectedValues = $(this).val();
                selectedValues.pop();
                $(this).val(selectedValues).trigger('change');
            }
        });
    });
</script>



<script>
    $(document).ready(function() {
        $("#country_id").on('change', function() {
            var countryId = $(this).val();
            console.log(countryId);
            $.ajax({
                url: "{{ url('vendor/get-state') }}/" + countryId,
                method: "GET",

                success: function(response) {
                    if (response) {
                        var dataString = JSON.stringify(response);
                        console.log(dataString);
                        var StatesDropdown = $('select[name="state_id"]');
                        StatesDropdown.empty();
                        StatesDropdown.append('<option selected disabled>--Select State--</option>');
                        $.each(response, function(index, state) {
                            StatesDropdown.append('<option value="' + state.id + '">' + state.name + '</option>');
                        });
                    } else {
                        console.error("Empty response received.");
                        alert("Empty response received.");
                    }
                },
                error: function(xhr, status, error) {
                    console.error('An error occurred:', error);
                }
            });
        });
    });
</script>

<script>
    $("#state_id").on('change', function() {
        var stateId = $(this).val();
        if (!stateId) {
            alert("Please select a state first.");
            return;
        }

        console.log(stateId);

        $.ajax({
            url: "{{ url('vendor/get-city') }}/" + stateId,
            method: "GET",
            success: function(response) {
                if (response) {
                    var dataString = JSON.stringify(response);
                    console.log(dataString);
                    var cityDropdown = $('select[name="city_id"]');
                    cityDropdown.empty();
                    cityDropdown.append('<option selected disabled>--Select City--</option>');
                    $.each(response, function(index, city) {
                        cityDropdown.append('<option value="' + city.id + '">' + city.name + '</option>');
                    });
                } else {
                    console.error("Empty response received.");
                    alert("Empty response received.");
                }
            },
            error: function(xhr, status, error) {
                console.error('An error occurred:', error);
            }
        });
    });
</script>


@endpush