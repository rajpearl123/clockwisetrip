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
    <form action="{{route('vendor.addProperty')}}" method="POST" id="user_information" enctype="multipart/form-data">
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
                                    @foreach($categories as $category)
                                        <label class="duolingo-btn">
                                            <input type="radio" id="radio-1" name="property_category_id" value="{{$category->id}}" class="bc-1">
                                            <img src="{{asset('front/img/property-category/'.$category->image)}}" alt="">
                                            <p class="btn-text m-0">{{$category->name}}</p>
                                        </label>                                   
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start justify-content-md-end button_group">
                        <button type="button" class="back-btn btn btn-primary ml-3">Back</button>
                        <button type="button" class="next-btn btn btn-primary ml-3 ">Next</button>
                    </div>
                </div>
                <div class="form-step">
                    <div class="row cssanimation sequence fadeInBottom">
                        <div class="col-lg-6 col-12 d-flex align-items-flex-start  justify-content-center">
                            <h2><strong>Basic information</strong></h2>
                        </div>
                        <div class="col-lg-6 col-12 col_height">
                            <div class="row">
                                <div class="form-group">
                                    <h5>What is the name of your property?</h5>
                                    <label for="propertyName" class="form-label">Property Name</label>
                                    <input type="text" class="form-control" id="propertyName" name="title" placeholder="Enter your property name" value="{{ old('title') }}">
                                </div>
                                <div class="form-group">
                                    <h5>Describe your property?</h5>
                                    <label for="propertyName" class="form-label">Property Description</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Enter your description">{{ old('description') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <h5>Where is the property you're listing?</h5>
                                    <div>
                                        <p>We may send a letter to confirm the location of your property, so make sure that the address is correct – it’s difficult to make changes to it later.</p>
                                        <div class="form_group">
                                            <label for="country_id" class="form-label">Country / Region</label>
                                            <select name="country_id" id="country_id" class="form-control select2">
                                                <option value="" disabled selected>---Select Country---</option>
                                                @foreach($countries as $country)
                                                    <option value="{{$country->id}}" {{ old('country_id') == $country->id ? 'selected' : '' }}>{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="state_id" class="form-label">State</label>
                                            <select class="form-control select2" name="state_id" id="state_id">
                                                <option value="" selected="" disabled="">--Select State--</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="city_id" class="form-label">City</label>
                                                <select class="form-control select2" name="city_id" id="city_id">
                                                    <option value="" selected disabled>--Select State--</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form_group">
                                            <label for="address" class="form-label">Find Your Address</label>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Start typing your address" value="{{ old('address') }}">
                                        </div>
                                        <div id="result" style="border: 1px solid #ccc; max-height: 200px; overflow-y: auto;"></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form_group">
                                                    <label for="postcode" class="form-label">Post Code</label>
                                                    <input type="number" class="form-control" id="postcode" placeholder="Post Code" value="{{ old('postcode') }}">
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="col-md-6">
                                                <h5>Pin the location of your property on the map and post the link below.</h5>
                                                <div class="form_group">
                                                    <input type="text" class="form-control" name="google_map_link" id="postcode" placeholder="Pinned location link" value="{{ old('google_map_link') }}">
                                                </div>
                                            </div>
                                        {{-- <div class="location_Iframe mt-3">
                                            <h5>Pin the location of your property on the map below</h5>
                                            <label for="location" class="form-label">Location</label>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.713108180843!2d77.615549!3d28.538336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c624b9e027fde%3A0x97e98c63f02b7c50!2sIndian%20Institute%20of%20Management!5e0!3m2!1sen!2sin!4v1652861489813!5m2!1sen!2sin" width="600" height="450" style="border:0;width:100%" allowfullscreen="" loading="lazy"></iframe>
                                            <button type="btn" class="btn btn-primary">Continue</button>
                                        </div> --}}
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
                            <h2><strong>Property Setup?</strong></h2>
                        </div>
                        <div class="col-lg-6 col-12 col_height">
                            <div class="row">
                                <div class="form-group">
                                    <h5>Where can people sleep?</h5>
                                    <div class="form_group">
                                        <label for="sleep-options" class="form-label">Sleeping Options</label>
                                        <select name="sleep_options" id="sleep-options" class="form-control">
                                            <option value="living-room" {{ old('sleep_options') == 'living-room' ? 'selected' : '' }}>Living Room</option>
                                            <option value="single-room" {{ old('sleep_options') == 'single-room' ? 'selected' : '' }}>Single Room</option>
                                            <option value="double-room" {{ old('sleep_options') == 'double-room' ? 'selected' : '' }}>Double Room</option>
                                        </select>
                                    </div>
                                    {{-- <div class="form_group">
                                        <label for="other-space" class="form-label">Other Spaces</label>
                                        <select name="other-space" id="other-space" class="form-control">
                                            <option value="United States">United States</option>
                                            <option value="Australia">Australia</option>
                                        </select>
                                    </div> --}}
                                    <div class="form_group">
                                        <h5>Which beds are available in this room?</h5>

                                        <label for="single-bed" class="form-label"></label>
                                        <select name="bed_type" id="single-bed" class="form-control">
                                            <option value="single-bed" {{ old('bed_type') == 'single-bed' ? 'selected' : '' }}>Single Bed</option>
                                            <option value="double-bed" {{ old('bed_type') == 'double-bed' ? 'selected' : '' }}>Double Bed</option>
                                            <option value="king-size" {{ old('bed_type') == 'king-size' ? 'selected' : '' }}>Large Bed (King Size)</option>
                                            <option value="superKing-size" {{ old('bed_type') == 'superKing-size' ? 'selected' : '' }}>Extra Large Double Bed (Super King Size)</option>
                                            <option value="bunk-size" {{ old('bed_type') == 'bunk-size' ? 'selected' : '' }}>Bunk Bed</option>
                                            <option value="Sofa-size" {{ old('bed_type') == 'Sofa-size' ? 'selected' : '' }}>Sofa Bed</option>
                                            <option value="futan-mat" {{ old('bed_type') == 'futan-mat' ? 'selected' : '' }}>Futan Mat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form_group">
                                        <label for="guest" class="form-label">How many guests can stay?</label>
                                        <input type="number" name="passenger_capacity" class="form-control" value="{{ old('passenger_capacity') }}">
                                    </div>
                                    <div class="form_group">
                                        <label for="bathroom" class="form-label">How many bathrooms are there?</label>
                                        <input type="number" name="bathrooms" class="form-control" value="{{ old('bathrooms') }}">

                                    </div>
                                    <div class="form_group">
                                        <label for="children_allowed" class="form-label">Do you allow children?</label>
                                        <div class="form-radio-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="children_allowed" value="yes" id="yes" {{ old('children_allowed') == 'yes' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="yes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="children_allowed" value="no" id="no" {{ old('children_allowed') == 'no' ? 'checked' : '' }}>
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
                                        <label for="general" class="form-label">General Facilities</label>
                                        @foreach($facilities as $facility)
                                            <div class="form-check">
                                                <!-- Ensure each checkbox has a unique ID -->
                                                <input class="form-check-input" type="checkbox" name="facilities[]" value="{{ $facility->id }}" id="facility" {{ in_array($facility->id, old('facilities', [])) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="facility-{{ $facility->id }}">
                                                    {{ $facility->name }}
                                                </label>
                                            </div>
                                        @endforeach
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
                                        <input class="form-check-input" type="radio" name="breakfast" value="yes" id="yes" {{ old('breakfast') == 'yes' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="breakfast" value="no" id="no" {{ old('breakfast') == 'no' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="no">
                                            No
                                        </label>
                                    </div>
                                </div>
                                <div class="form_group">
                                    <label for="genral" class="form-label">Is parking available to guests?</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="parking" value="yes" id="yes" {{ old('parking') == 'yes' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="parking" value="no" id="no" {{ old('parking') == 'no' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="no">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>What languages do you or your staff speak?</h5>
                                <div class="form_group">
                                    <label for="general" class="form-label">Select languages</label>
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="staff_language[]" value="english" id="English" {{ in_array('english', old('staff_language', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="English">
                                            English
                                        </label>
                                    </div>
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="staff_language[]" value="hindi" id="Hindi" {{ in_array('hindi', old('staff_language', [])) ? 'checked' : '' }}>
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
                                        <input type="time" class="form-control" id="checkInFrom" name="check_in_time" value="{{ old('check_in_time') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="genral" class="form-label">Check Out From</label>
                                        <input type="time" class="form-control" id="checkOutFrom" name="check_out_time" value="{{ old('check_out_time') }}">
                                    </div>
                                </div>
                                <div class="form-checkboxes mt-3">
                                    <div class="form-check form-switch">
                                        <!-- Smoking checkbox with proper name attribute -->
                                        <input class="form-check-input" type="checkbox" name="smoking" value="yes" role="switch" id="smoking" {{ old('smoking') == 'yes' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="smoking">Smoking allowed</label>
                                    </div>
                                    
                                    <div class="form-check form-switch">
                                        <!-- Pets checkbox with proper name attribute -->
                                        <input class="form-check-input" type="checkbox" name="pets" value="yes" role="switch" id="pets" {{ old('pets') == 'yes' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="pets">Pets allowed</label>
                                    </div>
                                    
                                    <div class="form-check form-switch">
                                        <!-- Parties checkbox with proper name attribute -->
                                        <input class="form-check-input" type="checkbox" name="parties" value="yes" role="switch" id="parties" {{ old('parties') == 'yes' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="parties">Parties/events allowed</label>
                                    </div>
                                </div>
                                
                            </div>
                            {{-- <div class="form-group">
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
                            </div> --}}
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
                                        <input type="file" id="photoFileInput" name="image[]" multiple >                                   
                                     </div>
                                    <p>jpg/jpeg or png</p>
                                </div>
                                <div class="divider-line"></div>
                                <div class="preview-images" id="previewImages"></div>
                                <p id="error-message" class="mb-3" style="color: red; display: none;">Please upload at least 5 images.</p>
                                {{-- <button type="button" class="btn btn-primary">Continue</button> --}}
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
                                <div class="card mt-30">
                                    <div class="card-body">
                                        <h6 class="mb-3">How much do you want to charge per night?</h6>
                                        <div class="form-group">
                                            <label for="price" class="form-label">Price guests pay</label>
                                            <input type="number" class="form-control mb-2" id="price" name="price" placeholder="Enter your price per night" value="{{ old('price') }}">
                                            <span>Including taxes, commission and charges</span>
                                        </div>
                                        <ol class="" style="list-style: none;">
                                            <p>15.00% Clockwisehotel.com commission</p>
                                            <li><b><i class="fa fa-check me-2" aria-hidden="true"></i> 24/7 help in your language</b></li>
                                            <li><b><i class="fa fa-check me-2" aria-hidden="true"></i> Save time with automatically confirmed bookings.</b></li>
                                            <li><b><i class="fa fa-check me-2" aria-hidden="true"></i> We promote your place on Google.</b></li>
                                        </ol>
                                        <p><strong>INR <span id="earnings">0.00</span></strong> Your earnings (including taxes)</p>
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
                                            <label for="gst" class="form-label">GST(Optional)</label>
                                            <input type="text" class="form-control mb-2" name="gst_number" id="gst" placeholder="Enter your GST" value="{{ old('gst_number') }}">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="pan" class="form-label">PAN <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control mb-2" name="pan_number" value="{{ old('pan_number', Auth::guard('vendor')->user()->pan_card) }}" id="pan" placeholder="Enter your PAN">
                                        </div>

                                        <div class="form-group">
                                            <label for="adhar" class="form-label">Please enter your 12-digit Aadhaar number</label>
                                            <input type="text" class="form-control mb-2" name="aadhar_number" value="{{ old('aadhar_number', Auth::guard('vendor')->user()->aadhar_number) }}" id="adhar" placeholder="Enter your Adhar Number">
                                        </div> -->
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="adhar" class="form-label">Upload Aadhar Front Picture </label>
                                                    <input type="file" class=" mb-2" name="adhar_front_image" id="adhar_front_image">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="adhar" class="form-label">Upload Aadhar Back Picture </label>
                                                    <input type="file" name="adhar_back_image" class="mb-2" id="adhar_back_image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="adhar" class="form-label">Upload PAN Front Picture </label>
                                                    <input type="file" class="mb-2" name="pan_front_image" id="pan_front_image">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="adhar" class="form-label">Upload PAN Back Picture </label>
                                                    <input type="file" class="mb-2" name="pan_back_image" id="pan_back_image">
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justif-content-start justify-content-md-end button_group">
                        <button type="button" class="back-btn btn btn-primary ml-3">Back</button>
                        <button type="submit" class="next-btn btn btn-primary ml-3">Submit</button>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#result').hide();  // Initially hide the result container
        var timeout;

        // Handle input in the location field and trigger the API call after a short delay
        $('#address').on('input', function () {
            clearTimeout(timeout); // Clear any previous timeout to avoid multiple API calls
            var cityName = $(this).val().trim(); // Trim whitespace
            console.log("City Name: " + cityName);

            if (cityName.length >= 1) {
                timeout = setTimeout(function () {
                    var apiKey = 'AIzaSyDuMG2WaY4Vwi0iM3XqPdUrNAcvjHtR8wE'; // Your actual API key
                    var url = `https://maps.googleapis.com/maps/api/geocode/json?address=${encodeURIComponent(cityName)}&key=${apiKey}&types=establishment|geocode|address`;

                    console.log('Making API Request:', url);

                    // API Request
                    $.get(url, function (data) {
                        console.log('API Response:', data);

                        if (data.status === 'OK') {
                            var results = data.results;
                            var resultHtml = '';

                            if (results.length === 0) {
                                $('#result').html('<p>No results found</p>');
                                $('#result').show();
                                return;
                            }

                            // Display formatted addresses as clickable options
                            results.forEach(function (result) {
                                var addressComponents = result.address_components;
                                var shortName = addressComponents.find(component => component.types.includes("locality"))?.short_name || "";

                                resultHtml += `
                                    <div class="result-item" data-address="${result.formatted_address}" data-shortname="${shortName}">
                                        ${result.formatted_address}
                                    </div>
                                `;
                            });

                            $('#result').html(resultHtml); // Update the result container
                            $('#result').show(); // Show the result container when there are results
                        } else if (data.status === 'ZERO_RESULTS') {
                            $('#result').html('<p>No results found</p>');
                            $('#result').show(); // Show even if no results are found
                        } else {
                            $('#result').html(`<p>Error: ${data.status}</p>`);
                            $('#result').show(); // Show error message if API returns an error
                        }
                    }).fail(function (error) {
                        console.error('Error fetching data from API:', error);  // Log the error
                        $('#result').html('<p>Error fetching data from API.</p>');
                        $('#result').show(); // Show error message if request fails
                    });
                }, 300); // Delay to avoid multiple API calls
            } else {
                $('#result').html(''); // Clear results if input is empty
                $('#result').hide(); // Hide results when input is cleared
            }
        });

        // Handle click event on result items (options)
        $(document).on('click', '.result-item', function () {
            var selectedAddress = $(this).data('address'); // Get the full address
            $('#address').val(selectedAddress); // Set the input value to the selected address
            $('#result').html(''); // Clear the results
            $('#result').hide(); // Hide the result container after selection
        });
    
    });
</script>
<script>
    $(document).ready(function() {
        $('#price').on('input', function() {
            var price = parseFloat($(this).val());
            if (!isNaN(price) && price > 0) {
                var commission = 0.15; // 15% commission
                var earnings = price - (price * commission);
                $('#earnings').text(earnings.toFixed(2)); // Display the earnings after commission
            } else {
                $('#earnings').text('0.00'); // Set to 0 if invalid price is entered
            }
        });
    });
</script>

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