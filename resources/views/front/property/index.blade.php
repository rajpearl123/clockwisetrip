@extends('front.layout.app');
@section('content')


<section class="py-10 d-flex items-center bg-light-2" style="margin-top: 65px;">
    <div class="container">
        <div class="row y-gap-10 items-center justify-between">
            <div class="col-auto">
                <div class="row x-gap-10 y-gap-5 items-center text-14 text-light-1">
                    <div class="col-auto">
                        <a href="{{ url('/') }}" target="_blank">
                            <div class="">Home</div>
                        </a>
                        
                    </div>
                    <div class="col-auto">
                        <div class="">&gt;</div>
                    </div>
                    <div class="col-auto">
                        <a href="{{ url('city-wise-property',$propertyDetail->city_id) }}" target="_blank">
                            <div class="">{{ $propertyDetail->cityName->name ?? 'N/A' }}</div>
                        </a>
                        
                    </div>
                    <div class="col-auto">
                        <div class="">&gt;</div>
                    </div>
                    <div class="col-auto">
                        <a href="{{ url('property-details',$propertyDetail->slug) }}" target="_blank">
                            <div class="text-dark-1">{{ $propertyDetail->title ?? 'N/A' }}</div>
                        </a>                        
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <a href="#" class="text-14 text-blue-1 underline">All Hotel in London</a>
            </div>
        </div>
    </div>
</section>

<div class="singleMenu js-singleMenu">
    <div class="singleMenu__content">
        <div class="container">
            <div class="row y-gap-20 justify-between items-center">
                <div class="col-auto">
                    <div class="singleMenu__links row x-gap-30 y-gap-10">
                        <!-- <div class="col-auto">
                            <a href="#overview">Overview</a>
                        </div>
                        <div class="col-auto">
                            <a href="#rooms">Rooms</a>
                        </div>
                        <div class="col-auto">
                            <a href="#reviews">Reviews</a>
                        </div>
                        <div class="col-auto">
                            <a href="#facilities">Facilities</a>
                        </div>
                        <div class="col-auto">
                            <a href="#faq">Faq</a>
                        </div> -->
                    </div>
                </div>

                <div class="col-auto">
                    <div class="row x-gap-15 y-gap-15 items-center">
                        <div class="col-auto">
                            <div class="text-14">
                                From
                                <span class="text-22 text-dark-1 fw-500">US$72</span>
                            </div>
                        </div>

                        <div class="col-auto">

                            <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                                Select Room <div class="icon-arrow-top-right ml-15"></div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="pt-40">
    <div class="container">
        <div class="row y-gap-20 justify-between items-end">
            <div class="col-auto">
                <div class="row x-gap-20  items-center">
                    <div class="col-auto">
                        <h1 class="text-30 sm:text-25 fw-600">{{ $propertyDetail->title }}</h1>
                    </div>

                    <!-- <div class="col-auto">

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                        <i class="icon-star text-10 text-yellow-1"></i>

                    </div> -->
                </div>
                @if(!empty($propertyDetail->address))
                <div class="row x-gap-20 y-gap-20 items-center">
                    <div class="col-auto">
                        <div class="d-flex items-center text-15 text-light-1">
                            <i class="icon-location-2 text-16 mr-5"></i>
                            {{ $propertyDetail->address }}
                        </div>
                    </div>

                    @if($propertyDetail->google_map_link)
                    <div class="col-auto">
                        <button data-x-click="mapFilter" class="text-blue-1 text-15 underline">Show on map</button>
                    </div>
                    @endif
                </div>
                @else
                <div class="text-red-1 text-15">No Address Found</div>
                @endif

            </div>

            <div class="col-auto">
                <div class="row x-gap-15 y-gap-15 items-center">
                    <div class="col-auto">
                        <div class="text-14">
                            From
                            <span class="text-22 text-dark-1 fw-500">US$72</span>
                        </div>
                    </div>

                    <div class="col-auto">

                        <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                            Select Room <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        @if(!empty($propertyDetail->image) && count($propertyDetail->image) > 0)
        <div class="galleryGrid -type-1 pt-30">
            @foreach($propertyDetail->image as $index => $image)
            @if($index < 4)
                <div class="galleryGrid__item relative d-flex">
                <img src="{{ asset('front/img/propertys/' . $image) }}" alt="image" class="rounded-4">

        </div>
        @endif
        @endforeach

        <!-- See All Photos Button -->

        <div class="galleryGrid__item relative d-flex">
            <img src="https://test.pearl-developer.com/clockwisehotel/public/front/img/rentals/1.png" alt="image" class="rounded-4">

            <div class="absolute px-10 py-10 col-12 h-full d-flex justify-end items-end">
                <a href="https://test.pearl-developer.com/clockwisehotel/public/front/img/rentals/2.png" class="button -blue-1 px-24 py-15 bg-white text-dark-1 js-gallery" data-gallery="gallery2">
                    See All Photos
                </a>
                <a href="https://test.pearl-developer.com/clockwisehotel/public/front/img/rentals/1.png" class="js-gallery" data-gallery="gallery2"></a>
                <a href="https://test.pearl-developer.com/clockwisehotel/public/front/img/rentals/2.png" class="js-gallery" data-gallery="gallery2"></a>
                <a href="https://test.pearl-developer.com/clockwisehotel/public/front/img/rentals/3.png" class="js-gallery" data-gallery="gallery2"></a>
                <a href="https://test.pearl-developer.com/clockwisehotel/public/front/img/rentals/4.png" class="js-gallery" data-gallery="gallery2"></a>
            </div>
        </div>
    </div>
    @else
    <p>No images available.</p>
    @endif


    </div>
</section>

<section class="pt-30">
    <div class="container">
        <div class="row y-gap-30">
            <div class="col-xl-8">
                <div class="row y-gap-40">
                    <div class="col-12">
                        <div class="px-24 py-20 rounded-4 bg-green-1">
                            <div class="row x-gap-20 y-gap-20 items-center">
                                <div class="col-auto">
                                    <div class="flex-center size-60 rounded-full bg-white">
                                        <i class="icon-star text-yellow-1 text-30"></i>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <h4 class="text-18 lh-15 fw-500">This property is in high demand!</h4>
                                    <div class="text-15 lh-15">7 travelers have booked today.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="overview" class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">Overview</h3>
                        <p class="text-dark-1 text-15 mt-20">
                            <span id="short-description">
                                {{ Str::limit($propertyDetail->description, 150, '...') }}
                            </span>
                            <span id="full-description" style="display: none;">
                                {{ $propertyDetail->description }}
                            </span>
                        </p>
                        <a href="#" class="d-block text-14 text-blue-1 fw-500 underline mt-10" id="toggle-button">Show More</a>
                    </div>
                    <div class="col-12">
                        <h3 class="text-22 fw-500">Property highlights</h3>
                        <div class="row y-gap-20 pt-30">

                            @foreach($propertyDetail->facilities as $facility)
                            <div class="col-lg-3 col-6">
                                <div class="text-center">
                                    <div class="text-15 lh-1 mt-10">{{ $facility }}</div>
                                </div>
                            </div>
                            @endforeach



                        </div>
                    </div>



                    <script>
                        document.getElementById('toggle-button').addEventListener('click', function(event) {
                            event.preventDefault();
                            const shortDescription = document.getElementById('short-description');
                            const fullDescription = document.getElementById('full-description');

                            if (shortDescription.style.display === 'none') {
                                shortDescription.style.display = 'inline';
                                fullDescription.style.display = 'none';
                                this.textContent = 'Show More';
                            } else {
                                shortDescription.style.display = 'none';
                                fullDescription.style.display = 'inline';
                                this.textContent = 'Show Less';
                            }
                        });
                    </script>


                    <!-- <div class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">Most Popular Facilities</h3>
                        <div class="row y-gap-10 pt-20">

                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-no-smoke"></i>
                                    <div class="text-15">Non-smoking rooms</div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-wifi"></i>
                                    <div class="text-15">Free WiFi</div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-parking"></i>
                                    <div class="text-15">Parking</div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-kitchen"></i>
                                    <div class="text-15">Kitchen</div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-living-room"></i>
                                    <div class="text-15">Living Area</div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="d-flex x-gap-15 y-gap-15 items-center">
                                    <i class="icon-shield"></i>
                                    <div class="text-15">Safety &amp; security</div>
                                </div>
                            </div>

                        </div>
                    </div> -->


                </div>
            </div>

            <div class="col-xl-4">
                <div class="ml-50 lg:ml-0">
                    <div class="px-30 py-30 border-light rounded-4 shadow-4">
                        <div class="d-flex items-center justify-between">
                            <div class="">
                                <span class="text-20 fw-500">US$72</span>
                                <span class="text-14 text-light-1 ml-5">nights</span>
                            </div>

                            <div class="d-flex items-center">
                                <div class="text-14 text-right mr-10">
                                    <div class="lh-15 fw-500">Exceptional</div>
                                    <div class="lh-15 text-light-1">3,014 reviews</div>
                                </div>

                                <div class="size-40 flex-center bg-blue-1 rounded-4">
                                    <div class="text-14 fw-600 text-white">4.8</div>
                                </div>
                            </div>
                        </div>

                        <div class="row y-gap-20 pt-30">
                            <div class="col-12">

                                <div class="searchMenu-date px-20 py-10 border-light rounded-4 -right js-form-dd js-calendar js-calendar-el">

                                    <div data-x-dd-click="searchMenu-date">
                                        <h4 class="text-15 fw-500 ls-2 lh-16">Check in - Check out</h4>

                                        <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                            <span class="js-first-date">Wed 2 Mar</span>
                                            -
                                            <span class="js-last-date">Fri 11 Apr</span>
                                        </div>
                                    </div>


                                    <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                                        <div class="bg-white px-30 py-30 rounded-4">
                                            <div class="elCalendar js-calendar-el-calendar"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12">

                                <div class="searchMenu-guests px-20 py-10 border-light rounded-4 js-form-dd js-form-counters">

                                    <div data-x-dd-click="searchMenu-guests">
                                        <h4 class="text-15 fw-500 ls-2 lh-16">Guest</h4>

                                        <div class="text-15 text-light-1 ls-2 lh-16">
                                            <span class="js-count-adult">2</span> adults
                                            -
                                            <span class="js-count-child">1</span> childeren
                                            -
                                            <span class="js-count-room">1</span> room
                                        </div>
                                    </div>


                                    <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests" data-x-dd-toggle="-is-active">
                                        <div class="bg-white px-30 py-30 rounded-4">
                                            <div class="row y-gap-10 justify-between items-center">
                                                <div class="col-auto">
                                                    <div class="text-15 fw-500">Adults</div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="d-flex items-center js-counter" data-value-change=".js-count-adult">
                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                            <i class="icon-minus text-12"></i>
                                                        </button>

                                                        <div class="flex-center size-20 ml-15 mr-15">
                                                            <div class="text-15 js-count">2</div>
                                                        </div>

                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                            <i class="icon-plus text-12"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="border-top-light mt-24 mb-24"></div>

                                            <div class="row y-gap-10 justify-between items-center">
                                                <div class="col-auto">
                                                    <div class="text-15 lh-12 fw-500">Children</div>
                                                    <div class="text-14 lh-12 text-light-1 mt-5">Ages 0 - 17</div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="d-flex items-center js-counter" data-value-change=".js-count-child">
                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                            <i class="icon-minus text-12"></i>
                                                        </button>

                                                        <div class="flex-center size-20 ml-15 mr-15">
                                                            <div class="text-15 js-count">1</div>
                                                        </div>

                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                            <i class="icon-plus text-12"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="border-top-light mt-24 mb-24"></div>

                                            <div class="row y-gap-10 justify-between items-center">
                                                <div class="col-auto">
                                                    <div class="text-15 fw-500">Rooms</div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="d-flex items-center js-counter" data-value-change=".js-count-room">
                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                            <i class="icon-minus text-12"></i>
                                                        </button>

                                                        <div class="flex-center size-20 ml-15 mr-15">
                                                            <div class="text-15 js-count">1</div>
                                                        </div>

                                                        <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                            <i class="icon-plus text-12"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12">
                                <button class="button -dark-1 px-35 h-60 col-12 bg-blue-1 text-white">
                                    Check availability
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="px-30 py-30 border-light rounded-4 mt-30">
                        <!-- <div class="flex-center ratio ratio-15:9 mb-15 js-lazy" data-bg="img/general/map.png">
                  <button data-x-click="mapFilter" class="button py-15 px-24 -blue-1 bg-white text-dark-1 absolute">
                    <i class="icon-location text-22 mr-10"></i>
                    Show on map
                  </button>
                </div> -->

                        <div class="row y-gap-10">
                            <div class="col-12">
                                <div class="d-flex items-center">
                                    <i class="icon-award text-20 text-blue-1"></i>
                                    <div class="text-14 fw-500 ml-10">Exceptional location - Inside city center</div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex items-center">
                                    <i class="icon-pedestrian text-20 text-blue-1"></i>
                                    <div class="text-14 fw-500 ml-10">Exceptional for walking</div>
                                </div>
                            </div>
                        </div>

                        <div class="border-top-light mt-15 mb-15"></div>

                        <div class="text-15 fw-500">Popular landmarks</div>

                        <div class="d-flex justify-between pt-10">
                            <div class="text-14">Royal Pump Room Museum</div>
                            <div class="text-14 text-light-1">0.1 km</div>
                        </div>

                        <div class="d-flex justify-between pt-5">
                            <div class="text-14">Harrogate Turkish Baths</div>
                            <div class="text-14 text-light-1">0.1 km</div>
                        </div>

                        <a href="#" class="d-block text-14 fw-500 underline text-blue-1 mt-10">Show More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section id="rooms" class="pt-30">
    <div class="container">
        <div class="row pb-20">
            <div class="col-auto">
                <h3 class="text-22 fw-500">Available Rooms</h3>
            </div>
        </div>

        <div class="border-light rounded-4 px-30 py-30 sm:px-20 sm:py-20">
            <div class="row y-gap-20">
                <div class="col-12">
                    <h3 class="text-18 fw-500 mb-15">Standard Twin Room</h3>
                    <div class="roomGrid">
                        <div class="roomGrid__header">
                            <div>Room Type</div>
                            <div>Benefits</div>
                            <div>Sleeps</div>
                            <div>Price for 5 nights</div>
                            <div>Select Rooms</div>
                            <div></div>
                        </div>

                        <div class="roomGrid__grid">
                            <div>
                                <div class="ratio ratio-1:1">
                                    <img src="https://test.pearl-developer.com/clockwisehotel/public/front/img/rentals/1.png" alt="image" class="img-ratio rounded-4">
                                </div>

                                <div class="y-gap-5 mt-20">

                                    <div class="d-flex items-center">
                                        <i class="icon-no-smoke text-20 mr-10"></i>
                                        <div class="text-15">Non-smoking rooms</div>
                                    </div>

                                    <div class="d-flex items-center">
                                        <i class="icon-wifi text-20 mr-10"></i>
                                        <div class="text-15">Free WiFi</div>
                                    </div>

                                    <div class="d-flex items-center">
                                        <i class="icon-parking text-20 mr-10"></i>
                                        <div class="text-15">Parking</div>
                                    </div>

                                    <div class="d-flex items-center">
                                        <i class="icon-kitchen text-20 mr-10"></i>
                                        <div class="text-15">Kitchen</div>
                                    </div>

                                </div>

                                <a href="#" class="d-block text-15 fw-500 underline text-blue-1 mt-15">Show Room Information</a>
                            </div>

                            <div class="y-gap-30">

                                <div class="roomGrid__content">
                                    <div>
                                        <div class="text-15 fw-500 mb-10">Your price includes:</div>

                                        <div class="y-gap-8">

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Pay at the hotel</div>
                                            </div>

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Pay nothing until March 30, 2022</div>
                                            </div>

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Free cancellation before April 1, 2022</div>
                                            </div>

                                        </div>
                                    </div>

                                    <div>
                                        <div class="d-flex items-center text-light-1">
                                            <div class="icon-man text-24"></div>
                                            <div class="icon-man text-24"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="text-18 lh-15 fw-500">US$72</div>
                                        <div class="text-14 lh-18 text-light-1">Includes taxes and charges</div>
                                    </div>

                                    <div>

                                        <div class="dropdown js-dropdown js-price-1-active">
                                            <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-1-toggle" data-el-toggle-active=".js-price-1-active">
                                                <span class="js-dropdown-title">1 (US$ 3,120)</span>
                                                <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                                            </div>

                                            <div class="toggle-element -dropdown  js-click-dropdown js-price-1-toggle">
                                                <div class="text-14 y-gap-15 js-dropdown-list">

                                                    <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="roomGrid__content">
                                    <div>
                                        <div class="text-15 fw-500 mb-10">Your price includes:</div>

                                        <div class="y-gap-8">

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Pay at the hotel</div>
                                            </div>

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Pay nothing until March 30, 2022</div>
                                            </div>

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Free cancellation before April 1, 2022</div>
                                            </div>

                                        </div>
                                    </div>

                                    <div>
                                        <div class="d-flex items-center text-light-1">
                                            <div class="icon-man text-24"></div>
                                            <div class="icon-man text-24"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="text-18 lh-15 fw-500">US$72</div>
                                        <div class="text-14 lh-18 text-light-1">Includes taxes and charges</div>
                                    </div>

                                    <div>

                                        <div class="dropdown js-dropdown js-price-2-active">
                                            <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-2-toggle" data-el-toggle-active=".js-price-2-active">
                                                <span class="js-dropdown-title">1 (US$ 3,120)</span>
                                                <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                                            </div>

                                            <div class="toggle-element -dropdown  js-click-dropdown js-price-2-toggle">
                                                <div class="text-14 y-gap-15 js-dropdown-list">

                                                    <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="roomGrid__content">
                                    <div>
                                        <div class="text-15 fw-500 mb-10">Your price includes:</div>

                                        <div class="y-gap-8">

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Pay at the hotel</div>
                                            </div>

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Pay nothing until March 30, 2022</div>
                                            </div>

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Free cancellation before April 1, 2022</div>
                                            </div>

                                        </div>
                                    </div>

                                    <div>
                                        <div class="d-flex items-center text-light-1">
                                            <div class="icon-man text-24"></div>
                                            <div class="icon-man text-24"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="text-18 lh-15 fw-500">US$72</div>
                                        <div class="text-14 lh-18 text-light-1">Includes taxes and charges</div>
                                    </div>

                                    <div>

                                        <div class="dropdown js-dropdown js-price-3-active">
                                            <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-3-toggle" data-el-toggle-active=".js-price-3-active">
                                                <span class="js-dropdown-title">1 (US$ 3,120)</span>
                                                <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                                            </div>

                                            <div class="toggle-element -dropdown  js-click-dropdown js-price-3-toggle">
                                                <div class="text-14 y-gap-15 js-dropdown-list">

                                                    <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div>
                                <div class="text-14 lh-1">3 rooms for</div>
                                <div class="text-22 fw-500 lh-17 mt-5">US$72</div>


                                <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white mt-10">
                                    Reserve <div class="icon-arrow-top-right ml-15"></div>
                                </a>


                                <div class="text-15 fw-500 mt-30">You'll be taken to the next step</div>

                                <ul class="list-disc y-gap-4 pt-5">

                                    <li class="text-14">Confirmation is immediate</li>

                                    <li class="text-14">No registration required</li>

                                    <li class="text-14">No booking or credit card fees!</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-light rounded-4 px-30 py-30 sm:px-20 sm:py-20 mt-20">
            <div class="row y-gap-20">
                <div class="col-12">
                    <h3 class="text-18 fw-500 mb-15">Deluxe King Room</h3>
                    <div class="roomGrid">
                        <div class="roomGrid__header">
                            <div>Room Type</div>
                            <div>Benefits</div>
                            <div>Sleeps</div>
                            <div>Price for 5 nights</div>
                            <div>Select Rooms</div>
                            <div></div>
                        </div>

                        <div class="roomGrid__grid">
                            <div>
                                <div class="ratio ratio-1:1">
                                    <img src="https://test.pearl-developer.com/clockwisehotel/public/front/img/rentals/2.png" alt="image" class="img-ratio rounded-4">
                                </div>

                                <div class="y-gap-5 mt-20">

                                    <div class="d-flex items-center">
                                        <i class="icon-no-smoke text-20 mr-10"></i>
                                        <div class="text-15">Non-smoking rooms</div>
                                    </div>

                                    <div class="d-flex items-center">
                                        <i class="icon-wifi text-20 mr-10"></i>
                                        <div class="text-15">Free WiFi</div>
                                    </div>

                                    <div class="d-flex items-center">
                                        <i class="icon-parking text-20 mr-10"></i>
                                        <div class="text-15">Parking</div>
                                    </div>

                                    <div class="d-flex items-center">
                                        <i class="icon-kitchen text-20 mr-10"></i>
                                        <div class="text-15">Kitchen</div>
                                    </div>

                                </div>

                                <a href="#" class="d-block text-15 fw-500 underline text-blue-1 mt-15">Show Room Information</a>
                            </div>

                            <div class="y-gap-30">

                                <div class="roomGrid__content">
                                    <div>
                                        <div class="text-15 fw-500 mb-10">Your price includes:</div>

                                        <div class="y-gap-8">

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Pay at the hotel</div>
                                            </div>

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Pay nothing until March 30, 2022</div>
                                            </div>

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Free cancellation before April 1, 2022</div>
                                            </div>

                                        </div>
                                    </div>

                                    <div>
                                        <div class="d-flex items-center text-light-1">
                                            <div class="icon-man text-24"></div>
                                            <div class="icon-man text-24"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="text-18 lh-15 fw-500">US$72</div>
                                        <div class="text-14 lh-18 text-light-1">Includes taxes and charges</div>
                                    </div>

                                    <div>

                                        <div class="dropdown js-dropdown js-price-1-active">
                                            <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-1-toggle" data-el-toggle-active=".js-price-1-active">
                                                <span class="js-dropdown-title">1 (US$ 3,120)</span>
                                                <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                                            </div>

                                            <div class="toggle-element -dropdown  js-click-dropdown js-price-1-toggle">
                                                <div class="text-14 y-gap-15 js-dropdown-list">

                                                    <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="roomGrid__content">
                                    <div>
                                        <div class="text-15 fw-500 mb-10">Your price includes:</div>

                                        <div class="y-gap-8">

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Pay at the hotel</div>
                                            </div>

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Pay nothing until March 30, 2022</div>
                                            </div>

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Free cancellation before April 1, 2022</div>
                                            </div>

                                        </div>
                                    </div>

                                    <div>
                                        <div class="d-flex items-center text-light-1">
                                            <div class="icon-man text-24"></div>
                                            <div class="icon-man text-24"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="text-18 lh-15 fw-500">US$72</div>
                                        <div class="text-14 lh-18 text-light-1">Includes taxes and charges</div>
                                    </div>

                                    <div>

                                        <div class="dropdown js-dropdown js-price-2-active">
                                            <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-2-toggle" data-el-toggle-active=".js-price-2-active">
                                                <span class="js-dropdown-title">1 (US$ 3,120)</span>
                                                <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                                            </div>

                                            <div class="toggle-element -dropdown  js-click-dropdown js-price-2-toggle">
                                                <div class="text-14 y-gap-15 js-dropdown-list">

                                                    <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="roomGrid__content">
                                    <div>
                                        <div class="text-15 fw-500 mb-10">Your price includes:</div>

                                        <div class="y-gap-8">

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Pay at the hotel</div>
                                            </div>

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Pay nothing until March 30, 2022</div>
                                            </div>

                                            <div class="d-flex items-center text-green-2">
                                                <i class="icon-check text-12 mr-10"></i>
                                                <div class="text-15">Free cancellation before April 1, 2022</div>
                                            </div>

                                        </div>
                                    </div>

                                    <div>
                                        <div class="d-flex items-center text-light-1">
                                            <div class="icon-man text-24"></div>
                                            <div class="icon-man text-24"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="text-18 lh-15 fw-500">US$72</div>
                                        <div class="text-14 lh-18 text-light-1">Includes taxes and charges</div>
                                    </div>

                                    <div>

                                        <div class="dropdown js-dropdown js-price-3-active">
                                            <div class="dropdown__button d-flex items-center rounded-4 border-light px-15 h-50 text-14" data-el-toggle=".js-price-3-toggle" data-el-toggle-active=".js-price-3-active">
                                                <span class="js-dropdown-title">1 (US$ 3,120)</span>
                                                <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                                            </div>

                                            <div class="toggle-element -dropdown  js-click-dropdown js-price-3-toggle">
                                                <div class="text-14 y-gap-15 js-dropdown-list">

                                                    <div><a href="#" class="d-block js-dropdown-link">2 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">3 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">4 (US$ 3,120)</a></div>

                                                    <div><a href="#" class="d-block js-dropdown-link">5 (US$ 3,120)</a></div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div>
                                <div class="text-14 lh-1">3 rooms for</div>
                                <div class="text-22 fw-500 lh-17 mt-5">US$72</div>


                                <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white mt-10">
                                    Reserve <div class="icon-arrow-top-right ml-15"></div>
                                </a>


                                <div class="text-15 fw-500 mt-30">You'll be taken to the next step</div>

                                <ul class="list-disc y-gap-4 pt-5">

                                    <li class="text-14">Confirmation is immediate</li>

                                    <li class="text-14">No registration required</li>

                                    <li class="text-14">No booking or credit card fees!</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="pt-40">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10">
                <div class="row">
                    <div class="col-auto">
                        <h3 class="text-22 fw-500">Leave a Reply</h3>
                        <p class="text-15 text-dark-1 mt-5">Your email address will not be published.</p>
                    </div>
                </div>

                <div class="row y-gap-30 pt-30">

                    <div class="col-xl-4">
                        <div class="text-15 lh-1 fw-500">Location</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="text-15 lh-1 fw-500">Staff</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="text-15 lh-1 fw-500">Cleanliness</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="text-15 lh-1 fw-500">Value for money</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="text-15 lh-1 fw-500">Comfort</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="text-15 lh-1 fw-500">Facilities</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="text-15 lh-1 fw-500">Free WiFi</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                </div>



                <div class="mt-40 mb-30 leave-review-section">
                    <div class="d-flex items-center">
                        <div>
                            <img src="https://test.pearl-developer.com/website_redesigning/public/profile_images/1728450478.webp" alt="User Image" class="rounded-full" style="width: 50px; height: 50px;">
                        </div>

                        <div class="ml-20">
                            <h6>Admin</h6>
                            <span>2024-08-02 06:06:03</span>
                        </div>
                    </div>



                    <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur neque diam, finibus eget eleifend ac, commodo id lorem. Aliquam blandit suscipit placerat. Nullam volutpat auctor lectus a rhoncus. </p>
                    <hr>
                </div>



                <div class="row y-gap-30 pt-20">
                    <div class="col-xl-6">

                        <div class="form-input ">
                            <input type="text" required="">
                            <label class="lh-1 text-16 text-light-1">Text</label>
                        </div>

                    </div>
                    <div class="col-xl-6">

                        <div class="form-input ">
                            <input type="text" required="">
                            <label class="lh-1 text-16 text-light-1">Email</label>
                        </div>

                    </div>
                    <div class="col-12">

                        <div class="form-input ">
                            <textarea required="" rows="4" class="w-100"></textarea>
                            <label class="lh-1 text-16 text-light-1">Write Your Comment</label>
                        </div>

                    </div>
                    <div class="col-auto">

                        <a href="#" class="button -md -dark-1 bg-blue-1 text-white">
                            Post Comment <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                    </div>
                </div>

            </div>
            .
        </div>
    </div>
</section>

@endsection