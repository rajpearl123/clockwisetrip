@extends('front.layout.app')
@section('content')
<!-- <section class="propertyListingForm py-70" style="margin-top: 70px;">
    <div class="container">
        <h3>Basic Information</h3>
        <form action="#">
            <div class="row">
                <div class="form-group">
                    <h5>What is the name of your property?</h5>
                    <label for="exampleInputEmail1" class="form-label">Property Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter your property name">  
                </div>
                <div class="form-group">
                    <h5>Where is the property you're listing?</h5>

                    <div>
                        <p>We may send a letter to confirm the location of your property, so make sure that the address is correct – it’s difficult to make changes to it later.</p>
                        <label for="exampleInputEmail1" class="form-label">Country / Region</label>
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
                        <label for="exampleInputEmail1" class="form-label">Find Your Address</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Start typing your address">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Post Code</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Post Code">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">City</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="City">
                            </div>
                        </div>
                        <div class="location_Iframe">
                            <h5>Pin the location of your property on the map below</h5>
                            <label for="exampleInputEmail1" class="form-label">Location</label>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.713108180843!2d77.615549!3d28.538336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c624b9e027fde%3A0x97e98c63f02b7c50!2sIndian%20Institute%20of%20Management!5e0!3m2!1sen!2sin!4v1652861489813!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <button class="button -redBtn-1  p-3 w-50 m-auto rounded-100 bg-blue-1 text-white">Continue</button>
            </div>
        </form>
    </div>
</section> -->



<section class="property-tabs py-70" style="margin-top: 70px;">
    <div class="container">
        <ul class="nav nav-tabs" id="propertyTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Basic Information</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Property Setup</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab3-tab" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Photos</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab4-tab" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Pricing</a>
            </li>
        </ul>

        <div class="tab-content mt-4" id="propertyTabContent">
            <!-- Tab 1: Basic Information -->
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <!-- Your existing section content goes here -->
                <section class="propertyListingForm py-30">
                    <div class="container">
                        <h3>Basic Information</h3>
                        <form action="#">
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
                                        <label for="address" class="form-label">Find Your Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="Start typing your address">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="postcode" class="form-label">Post Code</label>
                                                <input type="number" class="form-control" id="postcode" placeholder="Post Code">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="city" class="form-label">City</label>
                                                <input type="text" class="form-control" id="city" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="location_Iframe mt-3">
                                            <h5>Pin the location of your property on the map below</h5>
                                            <label for="location" class="form-label">Location</label>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.713108180843!2d77.615549!3d28.538336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c624b9e027fde%3A0x97e98c63f02b7c50!2sIndian%20Institute%20of%20Management!5e0!3m2!1sen!2sin!4v1652861489813!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <button class="button p-3 w-50 m-auto rounded-100 bg-blue-1 text-white">Continue</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>

            <!-- Tab 2: Amenities -->
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <section class="propertySetup propertyListingForm  py-30">
                    <h3>Property Setup</h3>
                    <form action="#">
                        <div class="row">
                            <div class="form-group">
                                <h5>Where can people sleep?</h5>
                                <label for="living-room" class="form-label">Living Room</label>
                                <select name="living-room" id="living-room" class="form-control">
                                    <option value="United States">United States</option>
                                    <option value="Australia">Australia</option>
                                </select>
                                <label for="other-space" class="form-label">Other Spaces</label>
                                <select name="other-space" id="other-space" class="form-control">
                                    <option value="United States">United States</option>
                                    <option value="Australia">Australia</option>
                                </select>
                                <h5>Which beds are available in this room?</h5>
                                <label for="single-bed" class="form-label">Single Bed</label>
                                <select name="single-bed" id="single-bed" class="form-control">
                                    <option value="1">1</option>
                                </select>
                                <label for="double-bed" class="form-label">Double Bed</label>
                                <select name="double-bed" id="double-bed" class="form-control">
                                    <option value="1">1</option>
                                </select>
                                <label for="king-size" class="form-label">Large Bed (King Size)</label>
                                <select name="king-size" id="king-size" class="form-control">
                                    <option value="1">1</option>
                                </select>
                                <label for="superKing-size" class="form-label">Extraa Large Double Bed (Super King Size)</label>
                                <select name="superKing-size" id="superKing-size" class="form-control">
                                    <option value="1">1</option>
                                </select>
                                <label for="bunk-size" class="form-label">Bunk Bed</label>
                                <select name="bunk-size" id="bunk-size" class="form-control">
                                    <option value="1">1</option>
                                </select>
                                <label for="Sofa-size" class="form-label">Sofa Bed</label>
                                <select name="Sofa-size" id="Sofa-size" class="form-control">
                                    <option value="1">1</option>
                                </select>
                                <label for="futan-mat" class="form-label">Futan Mat</label>
                                <select name="futan-mat" id="futan-mat" class="form-control">
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="guest" class="form-label">How many guests can stay?</label>
                                <select name="guest" id="guest" class="form-control">
                                    <option value="1">1</option>
                                </select>
                                <label for="bathroom" class="form-label">How many bathrooms are there?</label>
                                <select name="bathroom" id="bathroom" class="form-control">
                                    <option value="1">1</option>
                                </select>
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
                            <div class="form-group">
                                <h5>What can guests use at your place?</h5>
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
                            <div class="form-group">
                                <h5>Services at your property</h5>
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
                            <div class="form-group">
                                <h5>What languages do you or your staff speak?</h5>
                                <label for="genral" class="form-label">Select languages</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="English">
                                    <label class="form-check-label" for="English">
                                        English
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="French">
                                    <label class="form-check-label" for="French">
                                        French
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Italian">
                                    <label class="form-check-label" for="Italian">
                                        Italian
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Russian">
                                    <label class="form-check-label" for="Russian">
                                        Russian
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="Spanish">
                                    <label class="form-check-label" for="Spanish">
                                        Spanish
                                    </label>
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
                            <button class="button p-3 w-50 m-auto rounded-100 bg-blue-1 text-white">Continue</button>
                        </div>
                    </form>
                </section>
            </div>

            <!-- Tab 3: Pricing -->
            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                <section class="photos py-30">
                    <h3>What Does Your Property you like</h3>
                    <div class="image-container">
                        <h5>Upload at least 5 photos of your property</h5>
                        <p>The more you upload, the more likely you are to get bookings. You can add more later.</p>
                        <div class="image-uploader-box">
                            <span>Drag and Drop or</span>
                            <div>
                                <i class="fa-solid fa-camera-retro"></i>
                                Upload Photos
                            </div>
                            <p>jpg/jpeg or png, maximum 47MB each</p>
                            <input type="file" id="photoFileInput" accept="image/jpeg, image/png" multiple="" name="photoUploadBlock">
                        </div>
                        <div class="divider-line"></div>
                        <div class="preview-images" id="previewImages"></div>
                        <p id="error-message" class="mb-3" style="color: red; display: none;">Please upload at least 5 images.</p>
                        <button class="button -blue-1 w-50 p-2 m-auto rounded-100 bg-blue-1 text-white">Continue</button>
                    </div>
                </section>
            </div>

            <!-- Tab 4: Photos -->
            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                <section class="pricing py-30">
                    <h3 class="mb-20">How you receive bookings</h3>
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


                            <div>
                                <h3 class="mb-20 mt-20">Price per night</h3>

                                <div class="card mt-30 bg-light">
                                    <div class="card-body">
                                        <h4>How much do you want to charge per night?</h4>
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




                </section>
            </div>
        </div>
    </div>
</section>


@endsection