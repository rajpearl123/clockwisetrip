@extends('front.layout.app');
@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<section class="py-10 mt-80 d-flex items-center bg-light-2">
  <div class="container">
    <div class="row y-gap-10 items-center justify-between">
      <div class="col-auto">
        <div class="row x-gap-10 y-gap-5 items-center text-14 text-light-1">
          <div class="col-auto">
            <div class="">Home</div>
          </div>
          <div class="col-auto">
            <div class="">&gt;</div>
          </div>
          <!-- <div class="col-auto">
            <div class="">London Hotels</div>
          </div> -->
          <div class="col-auto">
            <div class="">&gt;</div>
          </div>
          <div class="col-auto">
            <!-- <div class="text-dark-1">Great Northern Hotel, a Tribute Portfolio Hotel, London</div> -->
                         <div class="text-dark-1">{{$single_propertys->title}}</div>
          </div>
        </div>
      </div>
        <input type="hidden" id="property_id" name="property_id" value="{{$single_propertys->id}}">
      <div class="col-auto">
        <!-- <a href="#" class="text-14 text-blue-1 underline">All Hotel in London</a> -->
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
            <div class="col-auto">
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
            </div>
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
            <h1 class="text-30 sm:text-25 fw-600">{{$single_propertys->title}}</h1>
          </div>

          <div class="col-auto">

            <i class="icon-star text-10 text-yellow-1"></i>

            <i class="icon-star text-10 text-yellow-1"></i>

            <i class="icon-star text-10 text-yellow-1"></i>

            <i class="icon-star text-10 text-yellow-1"></i>

            <i class="icon-star text-10 text-yellow-1"></i>

          </div>
        </div>

        <div class="row x-gap-20 y-gap-20 items-center">
          <div class="col-auto">
            <div class="d-flex items-center text-15 text-light-1">
              <i class="icon-location-2 text-16 mr-5"></i>
              <!-- Moscow Road, Kensington and Chelsea, London, W2 4EL, United Kingdom -->
               {{$single_propertys->address}}
            </div>
          </div>

          <div class="col-auto">
            <!-- <button data-x-click="mapFilter" class="text-blue-1 text-15 underline">Show on map</button> -->
          </div>
        </div>
      </div>

      <div class="col-auto">
        <div class="row x-gap-15 y-gap-15 items-center">
          <div class="col-auto">
            <div class="text-14">
              From
              <span class="text-22 text-dark-1 fw-500">
    INR {{ number_format($price_tax->rate_pr_night, 2) }}
</span>
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
    @php
    $base_url = "https://test.pearl-developer.com/clockwisehotel/public/front/img/propertys/";
    $images = is_string($single_propertys->image)
              ? json_decode($single_propertys->image, true)
              : $single_propertys->image;
    $limited_images = array_slice($images, 0, 4); // Limit to the first 4 images
@endphp

    <div class="galleryGrid -type-1 pt-30">
      <div class="galleryGrid__item relative d-flex">

        <img src="{{ $base_url .$limited_images[0] }}" alt="image" class="rounded-4">

        <div class="absolute px-20 py-20 col-12 d-flex justify-end">
          <button class="button -blue-1 size-40 rounded-full flex-center bg-white text-dark-1">
            <i class="icon-heart text-16"></i>
          </button>
        </div>
      </div>


      

  @foreach($limited_images as $key=>$image)
  @if($key!=0)
  <div class="galleryGrid__item">
      <img src="{{ $base_url . $image }}" alt="image" class="rounded-4">
  </div>
  @endif
  @endforeach

      <!-- <div class="galleryGrid__item">
        <img src="https://test.pearl-developer.com/clockwisehotel/public/front/img/rentals/2.png" alt="image" class="rounded-4">
      </div>

      <div class="galleryGrid__item relative d-flex">
        <img src="https://test.pearl-developer.com/clockwisehotel/public/front/img/rentals/3.png" alt="image" class="rounded-4">

        <div class="absolute h-full col-12 flex-center">
          <a href="https://www.youtube.com/watch?v=ANYfx4-jyqY" class="button -blue-1 size-40 rounded-full flex-center bg-white text-dark-1 js-gallery" data-gallery="gallery1">
            <i class="icon-play text-16"></i>
          </a>
        </div>
      </div>

      <div class="galleryGrid__item">
        <img src="https://test.pearl-developer.com/clockwisehotel/public/front/img/rentals/4.png" alt="image" class="rounded-4">
      </div>

      <div class="galleryGrid__item relative d-flex">
        <img src="https://test.pearl-developer.com/clockwisehotel/public/front/img/rentals/1.png" alt="image" class="rounded-4">

        <div class="absolute px-10 py-10 col-12 h-full d-flex justify-end items-end">
          <a href="https://test.pearl-developer.com/clockwisehotel/public/front/img/rentals/2.png" class="button -blue-1 px-24 py-15 bg-white text-dark-1 js-gallery" data-gallery="gallery2">
            See All 90 Photos
          </a>
          <a href="https://test.pearl-developer.com/clockwisehotel/public/front/img/rentals/1.png" class="js-gallery" data-gallery="gallery2"></a>
          <a href="https://test.pearl-developer.com/clockwisehotel/public/front/img/rentals/2.png" class="js-gallery" data-gallery="gallery2"></a>
          <a href="https://test.pearl-developer.com/clockwisehotel/public/front/img/rentals/3.png" class="js-gallery" data-gallery="gallery2"></a>
          <a href="https://test.pearl-developer.com/clockwisehotel/public/front/img/rentals/4.png" class="js-gallery" data-gallery="gallery2"></a>
        

        </div>
      </div> -->
    </div>
  </div>
</section>

<section class="pt-30">
  <div class="container">
    <div class="row y-gap-30">
      <div class="col-xl-8">
        <div class="row y-gap-40">
          <div class="col-12">
            <h3 class="text-22 fw-500">Property highlights</h3>
            <div class="row y-gap-20 pt-30">

              <div class="col-lg-3 col-6">
                <div class="text-center">
                  <i class="icon-city text-24 text-blue-1"></i>
                  <div class="text-15 lh-1 mt-10">In London City Centre</div>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="text-center">
                  <i class="icon-airplane text-24 text-blue-1"></i>
                  <div class="text-15 lh-1 mt-10">Airport transfer</div>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="text-center">
                  <i class="icon-bell-ring text-24 text-blue-1"></i>
                  <div class="text-15 lh-1 mt-10">Front desk [24-hour]</div>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="text-center">
                  <i class="icon-tv text-24 text-blue-1"></i>
                  <div class="text-15 lh-1 mt-10">Premium TV channels</div>
                </div>
              </div>

            </div>
          </div>

          <div id="overview" class="col-12">
            <h3 class="text-22 fw-500 pt-40 border-top-light">Overview</h3>
            <!-- <p class="text-dark-1 text-15 mt-20">
              You can directly book the best price if your travel dates are available, all discounts are already included. In the following house description you will find all information about our listing.
              <br><br>
              2-room terraced house on 2 levels. Comfortable and cosy furnishings: 1 room with 1 french bed and radio. Shower, sep. WC. Upper floor: (steep stair) living/dining room with 1 sofabed (110 cm, length 180 cm), TV. Exit to the balcony. Small kitchen (2 hot plates, oven,
            </p> -->
            <!-- <a href="#" class="d-block text-14 text-blue-1 fw-500 underline mt-10">Show More</a> -->

            <p class="text-dark-1 text-15 mt-20">
              {{$single_propertys->description}}
            </p>
          </div>

          <div class="col-12">
            <h3 class="text-22 fw-500 pt-40 border-top-light">Most Popular Facilities</h3>
            <div class="row y-gap-10 pt-20">

              <!-- <div class="col-md-5">
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
              </div> -->

              @php
    // Decode facilities JSON into an array
    $facilities = is_string($single_propertys->facilities) 
                  ? json_decode($single_propertys->facilities, true) 
                  : $single_propertys->facilities;
@endphp

@foreach($facilities as $f)
    <div class="col-md-5">
        <div class="d-flex x-gap-15 y-gap-15 items-center">
            <i class="icon-shield"></i>
            <div class="text-15">{{ $f }}</div>
        </div>
    </div>
@endforeach



            </div>
          </div>

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
        </div>
      </div>

      <div class="col-xl-4">
        <div class="ml-50 lg:ml-0">
          <div class="px-30 py-30 border-light rounded-4 shadow-4">
            <div class="d-flex items-center justify-between">
              <div class="">
                <span class="text-20 fw-500">    INR {{ number_format($price_tax->rate_pr_night, 2) }}
                </span>
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
                      <span class="js-first-date" id="js-first-date">Wed 2 Mar</span>
                      -
                      <span class="js-last-date" id="js-last-date">Fri 11 Apr</span>
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
                      <span class="js-count-adult" id="js-count-adult">2</span> adults
                      -
                      <span class="js-count-child" id="js-count-child">1</span> childeren
                      -
                      <span class="js-count-room" id="js-count-room">1</span> room
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
                <button  id="book_now_id" class="button -dark-1 px-35 h-60 col-12 bg-blue-1 text-white">
                  Book Now
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

<section id="rooms" class="pt-30">
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
</section>

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
              <textarea required="" rows="4"></textarea>
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
    </div>
  </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
   $(document).ready(function() {
    // Global CSRF Token setup for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Click event for Book Now button
    $('#book_now_id').on('click', function() {
        var check_in = $("#js-first-date").text();
        var check_out = $("#js-last-date").text();
        var no_of_adult = parseInt($("#js-count-adult").text());
        var no_of_child = parseInt($("#js-count-child").text());
        var no_of_room = parseInt($("#js-count-room").text());
        var property_id = parseInt($("#property_id").val());

        if (check_in && check_out) {
            var data = {
                check_in: check_in,
                check_out: check_out,
                no_of_adult: no_of_adult,
                no_of_child: no_of_child,
                no_of_room: no_of_room,
                property_id: property_id
            };

            $.ajax({
                url: '{{ route('book.now.store') }}',  // Replace with your route
                type: 'POST',
                data: data,
                success: function(response) {
                    console.log(response);
                    
                    // Redirect with booking data as URL parameters
                    var redirectUrl = "{{ route('book.now') }}" + "?check_in=" + check_in + "&check_out=" + check_out + "&no_of_adult=" + no_of_adult + "&no_of_child=" + no_of_child + "&no_of_room=" + no_of_room + "&property_id=" + property_id;
                    window.location.href = redirectUrl;
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again.');
                }
            });
        } else {
            alert('Please select check-in and check-out dates.');
        }
    });
});

</script>



@endsection