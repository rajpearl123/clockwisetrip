@extends('front.layout.app');
@section('content')
@php 
    
    $trending_search_data = request()->get('treanding_search_data');
    $search_data = request()->get('search_data');

    if ($trending_search_data) {
        $formData = json_decode($trending_search_data, true);
    } else {
        $formData = []; 
    }

    if ($search_data) {
        $search_data = json_decode($search_data, true);
    } else {
        $search_data = []; 
    }
@endphp

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

{{-- For debugging purposes --}}



<section data-anim-wrap class="masthead -type-1 z-5 pt-80 pb-50">
    <div data-anim-child="fade" class="masthead__bg">
        <img src="#" alt="image" data-src="https://test.pearl-developer.com/clockwisehotel/public/images/1727247497.png" class="js-lazy">
    </div>
    <div class="container">
        <div class="row justify-center">
            <div class="col-auto">
                <div class="text-center">
                    <h1 data-anim-child="slide-up delay-4" class="text-60 lg:text-40 md:text-30 text-white ">Trending Destinations</h1>
                    <p data-anim-child="slide-up delay-5" class="text-white mt-6 md:mt-10">Book Your Dream Destinastion</p>
                </div>
                <div data-anim-child="slide-up delay-6" class="tabs -underline mt-30 js-tabs">
                    <div
                        class="tabs__controls d-flex x-gap-30 y-gap-20 justify-center sm:justify-start js-tabs-controls">
                        <div class="tab-itemss">
                            <button class="tabs__button text-15 fw-500 text-white pb-4 js-tabs-button is-tab-el-active"
                                data-tab-target=".-tab-item-1">Find Stay</button>
                        </div>

                        <div class="tab-itemss">
                            <button class="tabs__button text-15 fw-500 text-white pb-4 js-tabs-button "
                                data-tab-target=".-tab-item-2">Flight</button>
                        </div>
                        <div class="tab-itemss">
                            <button class="tabs__button text-15 fw-500 text-white pb-4 js-tabs-button "
                                data-tab-target=".-tab-item-3">Train</button>
                        </div>
                        <div class="tab-itemss">
                            <button class="tabs__button text-15 fw-500 text-white pb-4 js-tabs-button "
                                data-tab-target=".-tab-item-4">Bus</button>
                        </div>
                        <div class="tab-itemss">
                            <button class="tabs__button text-15 fw-500 text-white pb-4 js-tabs-button "
                                data-tab-target=".-tab-item-5">Rental Car</button>
                        </div>
                        <div class="tab-itemss">
                            <button class="tabs__button text-15 fw-500 text-white pb-4 js-tabs-button "
                                data-tab-target=".-tab-item-6">Rental Bike</button>
                        </div>
                        <div class="tab-itemss">
                            <button class="tabs__button text-15 fw-500 text-white pb-4 js-tabs-button "
                                data-tab-target=".-tab-item-7">Clockwise Room</button>
                        </div>
                        <div class="tab-itemss">
                            <button class="tabs__button text-15 fw-500 text-white pb-4 js-tabs-button "
                                data-tab-target=".-tab-item-8">Travel On EMI</button>
                        </div>
                    </div>

                    <div class="tabs__content mt-20 js-tabs-content">
                    <div class="tabs__pane -tab-item-1 is-tab-el-active">
                            <div class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
                                <div class="button-grid items-center">
                                    <div class="js-search">
                                        <div data-x-dd-click="searchMenu-loc">
                                            <h4 class="text-15 fw-500 ls-2 lh-16">
                                                <i class="fa-solid fa-hotel me-2"></i>Location
                                            </h4>
                                            <div class="text-15 text-light-1 ls-2 lh-16">
                                                <input id="location" autocomplete="off" type="search"  placeholder="{{ isset($search_data['location']) ?'' : 'Where are you going? ' }}"
                                                    class="js-search js-dd-focus form-control p-0 stay-input"  />
                                                    <span id="result" class="location-stay-result" style="{{ isset($search_data['location']) ? 'position: relative;
    top: -12px;' : 'padding-top: 0px;' }}">
                                                        {{ isset($search_data['location']) ? $search_data['location'] : '' }}
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="searchMenu-date px-20 lg:py-20 lg:px-0 js-form-dd js-calendar js-calendar-el d-flex align-items-center gap-3">
                                        <div data-x-dd-click="searchMenu-in-date" id="check-in">
                                            <h4 class="text-15 fw-500 ls-2 lh-16">Check in </h4>
                                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                                <span class="js-first-date" id="start_date_stay">{{ isset($search_data['check_in']) ? $search_data['check_in'] : 'Start Date' }}</span>
                                            </div>
                                        </div>
                                        <div data-x-dd-click="searchMenu-out-date" class="divider" id="check-out">
                                            <h4 class="text-15 fw-500 ls-2 lh-16">Check out </h4>
                                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                                <span class="js-last-date" id="end_date_stay">{{ isset($search_data['check_out']) ? $search_data['check_out'] : 'check_out' }}</span>
                                            </div>
                                        </div>

                                        <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-in-date"
                                            data-x-dd-toggle="-is-active">
                                            <!-- <div class="bg-white px-20 py-30 rounded-4">
                                                <div class="elCalendar js-calendar-el-calendar"></div>
                                            </div> -->
                                        </div>
                                    </div>

                                    <div class="searchMenu-guests px-20 lg:py-20 lg:px-0 js-form-dd js-form-counters">
                                        <div data-x-dd-click="searchMenu-guests">

                                            <h4 class="text-15 fw-500 ls-2 lh-16">Guest</h4>
                                            <div class="text-15 text-light-1 ls-2 lh-16">
                                                <span class="js-count-adult" id="js-count-adult-stay">{{ isset($search_data['adult']) ? $search_data['adult'] : '2' }}</span> adults -
                                                <span class="js-count-child" id="js-count-child-stay">{{ isset($search_data['children']) ? $search_data['children'] : '1' }}</span> children -
                                                <span class="js-count-room" id="js-count-room-stay">{{ isset($search_data['rooms']) ? $search_data['rooms'] : '1' }}</span> room
                                            </div>
                                        </div>
                                        <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests" data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 rounded-4">
                                                <div class="row y-gap-10 justify-between items-center">
                                                    <div class="col-auto">
                                                        <div class="text-15 fw-500">Adults</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="d-flex items-center js-counter" data-value-change="js-count-adult">
                                                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down" id="adult-minus-stay">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count" id="adult-count-value-stay">2</div>
                                                                <input type="hidden" name="adult-count-value-stay" id="adult-count-value-stay-input" value="">
                                                            </div>
                                                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up" id="adult-plus-stay">
                                                                <i class="icon-plus text-12"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-top-light mt-24 mb-24"></div>
                                                <div class="row y-gap-10 justify-between items-center">
                                                    <div class="col-auto">
                                                        <div class="text-15 lh-12 fw-500">Children</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="d-flex items-center js-counter" data-value-change="js-count-child">
                                                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down" id="children-minus-stay">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count" id="children-count-stay">1</div>
                                                                <input type="hidden" name="children-count-value-stay" id="children-count-value-stay-input" value="">
                                                            </div>
                                                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up" id="children-plus-stay">
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
                                                        <div class="d-flex items-center js-counter" data-value-change="js-count-room">
                                                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down" id="room-minus-stay">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count" id="room-count-stay">1</div>
                                                                <input type="hidden" name="room-count-value-stay" id="room-count-value-stay-input" value="">
                                                            </div>
                                                            <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up" id="room-plus-stay">
                                                                <i class="icon-plus text-12"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="button-item">
                                        <button
                                            class="mainSearch__submit button -redBtn-1 h-60 px-35 col-12 rounded-100 bg-blue-1 text-white" id="mainSearch__submit-stay">
                                            <i class="icon-search text-20 mr-10 searchIcon"></i>
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs__pane -tab-item-2 ">
                            <div class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
                                <div class="button-grid items-center">
                                    <div class="searchMenu-loc px-20 lg:py-20 lg:px-0 js-form-dd js-liverSearch">
                                        <div class="d-flex align-items-center gap-2">
                                            <div data-x-dd-click="searchMenu-loc" class="flight-input">
                                                <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                        class="fa-solid fa-plane-departure me-2"></i>Location</h4>
                                                <div class="text-15 text-light-1 ls-2 lh-16">
                                                    <input autocomplete="off" type="search"
                                                        placeholder="Airport or City" class="js-search js-dd-focus form-control p-0" />
                                                </div>
                                            </div>
                                            <div data-x-dd-click="searchMenu-loc " class="divider flight-input">
                                                <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                        class="fa-solid fa-plane-arrival me-2"></i>Location</h4>
                                                <div class="text-15 text-light-1 ls-2 lh-16">
                                                    <input autocomplete="off" type="search" placeholder="Where to?"
                                                        class="js-search js-dd-focus form-control p-0" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="searchMenu-loc__field shadow-2 js-popup-window"
                                            data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 sm:px-0 sm:py-15 rounded-4">
                                                <div class="y-gap-5 js-results">
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        London</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">
                                                                        Greater London, United Kingdom</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        New York</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">New
                                                                        York State, United States</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Paris</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">France
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Madrid</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">Spain
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Santorini</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">Greece
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="searchMenu-date px-20 lg:py-20 lg:px-0 js-form-dd js-calendar js-calendar-el d-flex align-items-center gap-3">
                                        <div data-x-dd-click="searchMenu-date">
                                            <h4 class="text-15 fw-500 ls-2 lh-16">Check in </h4>
                                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                                <span class="js-first-date">Wed 2 Mar</span>
                                            </div>
                                        </div>
                                        <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date"
                                            data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 rounded-4">
                                                <div class="elCalendar js-calendar-el-calendar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="searchMenu-date px-20 lg:py-20 lg:px-0 js-form-dd js-calendar js-calendar-el d-flex align-items-center gap-3">
                                        <div data-x-dd-click="searchMenu-date">
                                            <h4 class="text-15 fw-500 ls-2 lh-16"> Check out</h4>
                                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                                <span class="js-last-date">Fri 11 Apr</span>
                                            </div>
                                        </div>
                                        <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date"
                                            data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 rounded-4">
                                                <div class="elCalendar js-calendar-el-calendar"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="searchMenu-guests px-20 lg:py-20 lg:px-0 js-form-dd js-form-counters">
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
                                        <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests"
                                            data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 rounded-4">
                                                <div class="row y-gap-10 justify-between items-center">
                                                    <div class="col-auto">
                                                        <div class="text-15 fw-500">Adults</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change="js-count-adult">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">2</div>
                                                            </div>
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
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
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change="js-count-child">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">1</div>
                                                            </div>
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
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
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change="js-count-room">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">1</div>
                                                            </div>
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                                <i class="icon-plus text-12"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-item">
                                        <button
                                            class="mainSearch__submit button -redBtn-1 h-60 px-35 col-12 rounded-100 bg-blue-1 text-white">
                                            <i class="icon-search text-20 mr-10"></i>
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs__pane -tab-item-3 ">
                            <div class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
                                <div class="button-grid items-center">
                                    <div class="searchMenu-loc px-20 lg:py-20 lg:px-0 js-form-dd js-liverSearch">
                                        <div data-x-dd-click="searchMenu-loc">
                                            <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                    class="fa-solid fa-bus me-2"></i>Location</h4>
                                            <div class="text-15 text-light-1 ls-2 lh-16">
                                                <input autocomplete="off" type="search"
                                                    placeholder="Where are you going?"
                                                    class="js-search js-dd-focus form-control p-0 stay-input" />
                                            </div>
                                        </div>
                                        <div class="searchMenu-loc__field shadow-2 js-popup-window"
                                            data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 sm:px-0 sm:py-15 rounded-4">
                                                <div class="y-gap-5 js-results">
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        London</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">
                                                                        Greater London, United Kingdom</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        New York</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">New
                                                                        York State, United States</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Paris</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">France
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Madrid</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">Spain
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Santorini</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">Greece
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="searchMenu-date px-20 lg:py-20 lg:px-0 js-form-dd js-calendar js-calendar-el d-flex align-items-center gap-3">
                                        <div data-x-dd-click="searchMenu-in-date">
                                            <h4 class="text-15 fw-500 ls-2 lh-16">Check in </h4>
                                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                                <span class="js-first-date">Wed 2 Mar</span>
                                            </div>
                                        </div>
                                        <div data-x-dd-click="searchMenu-out-date" class="divider">
                                            <h4 class="text-15 fw-500 ls-2 lh-16"> Check out </h4>
                                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                                <span class="js-last-date">Fri 11 Apr</span>
                                            </div>
                                        </div>

                                        <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-in-date"
                                            data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 rounded-4">
                                                <div class="elCalendar js-calendar-el-calendar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="searchMenu-guests px-20 lg:py-20 lg:px-0 js-form-dd js-form-counters">
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
                                        <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests"
                                            data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 rounded-4">
                                                <div class="row y-gap-10 justify-between items-center">
                                                    <div class="col-auto">
                                                        <div class="text-15 fw-500">Adults</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change="js-count-adult">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">2</div>
                                                            </div>
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
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
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change="js-count-child">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">1</div>
                                                            </div>
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
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
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change="js-count-room">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">1</div>
                                                            </div>
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                                <i class="icon-plus text-12"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-item">
                                        <button
                                            class="mainSearch__submit button -redBtn-1 h-60 px-35 col-12 rounded-100 bg-blue-1 text-white">
                                            <i class="icon-search text-20 mr-10"></i>
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs__pane -tab-item-4 ">
                            <div class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
                                <div class="button-grid items-center">
                                    <div class="searchMenu-loc px-20 lg:py-20 lg:px-0 js-form-dd js-liverSearch">
                                        <div data-x-dd-click="searchMenu-loc">
                                            <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                    class="fa-solid fa-train me-2"></i>Location</h4>
                                            <div class="text-15 text-light-1 ls-2 lh-16">
                                                <input autocomplete="off" type="search"
                                                    placeholder="Where are you going?"
                                                    class="js-search js-dd-focus form-control p-0 stay-input" />
                                            </div>
                                        </div>
                                        <div class="searchMenu-loc__field shadow-2 js-popup-window"
                                            data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 sm:px-0 sm:py-15 rounded-4">
                                                <div class="y-gap-5 js-results">
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        London</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">
                                                                        Greater London, United Kingdom</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        New York</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">New
                                                                        York State, United States</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Paris</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">France
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Madrid</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">Spain
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Santorini</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">Greece
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="searchMenu-date px-20 lg:py-20 lg:px-0 js-form-dd js-calendar js-calendar-el d-flex align-items-center gap-3">
                                        <div data-x-dd-click="searchMenu-in-date">
                                            <h4 class="text-15 fw-500 ls-2 lh-16">Check in </h4>
                                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                                <span class="js-first-date">Wed 2 Mar</span>
                                            </div>
                                        </div>
                                        <div data-x-dd-click="searchMenu-out-date" class="divider">
                                            <h4 class="text-15 fw-500 ls-2 lh-16"> Check out </h4>
                                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                                <span class="js-last-date">Fri 11 Apr</span>
                                            </div>
                                        </div>

                                        <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-in-date"
                                            data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 rounded-4">
                                                <div class="elCalendar js-calendar-el-calendar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="searchMenu-guests px-20 lg:py-20 lg:px-0 js-form-dd js-form-counters">
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
                                        <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests"
                                            data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 rounded-4">
                                                <div class="row y-gap-10 justify-between items-center">
                                                    <div class="col-auto">
                                                        <div class="text-15 fw-500">Adults</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change="js-count-adult">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">2</div>
                                                            </div>
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
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
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change="js-count-child">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">1</div>
                                                            </div>
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
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
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change="js-count-room">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">1</div>
                                                            </div>
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                                <i class="icon-plus text-12"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-item">
                                        <button
                                            class="mainSearch__submit button -redBtn-1 h-60 px-35 col-12 rounded-100 bg-blue-1 text-white">
                                            <i class="icon-search text-20 mr-10"></i>
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs__pane -tab-item-5 ">
                            <div class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
                                <div class="button-grid items-center">
                                    <div class="searchMenu-loc px-20 lg:py-20 lg:px-0 js-form-dd js-liverSearch">
                                        <div data-x-dd-click="searchMenu-loc">
                                            <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                    class="fa-solid fa-motorcycle me-2"></i>Pickup Location</h4>
                                            <div class="text-15 text-light-1 ls-2 lh-16">
                                                <input autocomplete="off" type="search"
                                                    placeholder="Where are you going?"
                                                    class="js-search js-dd-focus form-control p-0" />
                                            </div>
                                        </div>
                                        <div class="searchMenu-loc__field shadow-2 js-popup-window"
                                            data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 sm:px-0 sm:py-15 rounded-4">
                                                <div class="y-gap-5 js-results">
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        London</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">
                                                                        Greater London, United Kingdom</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        New York</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">New
                                                                        York State, United States</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Paris</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">France
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Madrid</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">Spain
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Santorini</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">Greece
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-x-dd-click="searchMenu-loc" class="divider px-20 lg:py-20 lg:px-0">
                                        <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                class="fa-solid fa-motorcycle me-2"></i>Pickup Date</h4>
                                        <div class="text-15 text-light-1 ls-2 lh-16">
                                            <input autocomplete="off" type="date" class="js-search js-dd-focus form-control p-0" />
                                        </div>
                                    </div>
                                    <div data-x-dd-click="searchMenu-loc" class="divider px-20 lg:py-20 lg:px-0">
                                        <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                class="fa-solid fa-motorcycle me-2"></i>Time</h4>
                                        <div class="text-15 text-light-1 ls-2 lh-16">
                                            <input autocomplete="off" type="time" class="js-search js-dd-focus form-control p-0" />
                                        </div>
                                    </div>
                                    <div data-x-dd-click="searchMenu-loc" class="divider px-20 lg:py-20 lg:px-0">
                                        <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                class="fa-solid fa-motorcycle me-2"></i>Drop Off Date</h4>
                                        <div class="text-15 text-light-1 ls-2 lh-16">
                                            <input autocomplete="off" type="date" class="js-search js-dd-focus form-control p-0" />
                                        </div>
                                    </div>
                                    <div data-x-dd-click="searchMenu-loc" class="divider px-20 lg:py-20 lg:px-0">
                                        <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                class="fa-solid fa-motorcycle me-2"></i>Time</h4>
                                        <div class="text-15 text-light-1 ls-2 lh-16">
                                            <input autocomplete="off" type="time" class="js-search js-dd-focus form-control p-0" />
                                        </div>
                                    </div>
                                    <div class="button-item">
                                        <button
                                            class="mainSearch__submit button -redBtn-1 h-60 px-35 col-12 rounded-100 bg-blue-1 text-white">
                                            <i class="icon-search text-20 mr-10"></i>
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs__pane -tab-item-6 ">
                            <div class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
                                <div class="button-grid items-center">
                                    <div class="searchMenu-loc px-20 lg:py-20 lg:px-0 js-form-dd js-liverSearch">
                                        <div data-x-dd-click="searchMenu-loc">
                                            <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                    class="fa-solid fa-motorcycle me-2"></i>Pickup Location</h4>
                                            <div class="text-15 text-light-1 ls-2 lh-16">
                                                <input autocomplete="off" type="search"
                                                    placeholder="Where are you going?"
                                                    class="js-search js-dd-focus form-control p-0" />
                                            </div>
                                        </div>
                                        <div class="searchMenu-loc__field shadow-2  js-popup-window"
                                            data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 sm:px-0 sm:py-15 rounded-4">
                                                <div class="y-gap-5 js-results">
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        London</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">
                                                                        Greater London, United Kingdom</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        New York</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">New
                                                                        York State, United States</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Paris</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">France
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Madrid</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">Spain
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Santorini</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">Greece
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-x-dd-click="searchMenu-loc" class="divider px-20 lg:py-20 lg:px-0">
                                        <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                class="fa-solid fa-motorcycle me-2"></i>Pickup Date</h4>
                                        <div class="text-15 text-light-1 ls-2 lh-16">
                                            <input autocomplete="off" type="date" class="js-search js-dd-focus" />
                                        </div>
                                    </div>
                                    <div data-x-dd-click="searchMenu-loc" class="divider px-20 lg:py-20 lg:px-0">
                                        <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                class="fa-solid fa-motorcycle me-2"></i>Time</h4>
                                        <div class="text-15 text-light-1 ls-2 lh-16">
                                            <input autocomplete="off" type="time" class="js-search js-dd-focus" />
                                        </div>
                                    </div>
                                    <div data-x-dd-click="searchMenu-loc" class="divider px-20 lg:py-20 lg:px-0">
                                        <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                class="fa-solid fa-motorcycle me-2"></i>Drop Off Date</h4>
                                        <div class="text-15 text-light-1 ls-2 lh-16">
                                            <input autocomplete="off" type="date" class="js-search js-dd-focus" />
                                        </div>
                                    </div>
                                    <div data-x-dd-click="searchMenu-loc" class="divider px-20 lg:py-20 lg:px-0">
                                        <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                class="fa-solid fa-motorcycle me-2"></i>Time</h4>
                                        <div class="text-15 text-light-1 ls-2 lh-16">
                                            <input autocomplete="off" type="time" class="js-search js-dd-focus" />
                                        </div>
                                    </div>
                                    <div class="button-item">
                                        <button
                                            class="mainSearch__submit button -redBtn-1 h-60 px-35 col-12 rounded-100 bg-blue-1 text-white">
                                            <i class="icon-search text-20 mr-10"></i>
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs__pane -tab-item-7 ">
                            <div class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
                                <div class="button-grid items-center">
                                    <div class="searchMenu-loc px-20 lg:py-20 lg:px-0 js-form-dd js-liverSearch">
                                        <div data-x-dd-click="searchMenu-loc">
                                            <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                    class="fa-solid fa-landmark me-2"></i>Location</h4>
                                            <div class="text-15 text-light-1 ls-2 lh-16">
                                                <input autocomplete="off" type="search"
                                                    placeholder="Where are you going?"
                                                    class="js-search js-dd-focus form-control p-0" />
                                            </div>
                                        </div>
                                        <div class="searchMenu-loc__field shadow-2 js-popup-window"
                                            data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 sm:px-0 sm:py-15 rounded-4">
                                                <div class="y-gap-5 js-results">
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        London</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">
                                                                        Greater London, United Kingdom</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        New York</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">New
                                                                        York State, United States</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Paris</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">France
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Madrid</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">Spain
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Santorini</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">Greece
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="searchMenu-date px-20 lg:py-20 lg:px-0 js-form-dd js-calendar js-calendar-el d-flex align-items-center gap-3">
                                        <div data-x-dd-click="searchMenu-in-date">
                                            <h4 class="text-15 fw-500 ls-2 lh-16">Check in </h4>
                                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                                <span class="js-first-date">Wed 2 Mar</span>
                                            </div>
                                        </div>
                                        <div data-x-dd-click="searchMenu-out-date" class="divider">
                                            <h4 class="text-15 fw-500 ls-2 lh-16"> Check out </h4>
                                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                                <span class="js-last-date">Fri 11 Apr</span>
                                            </div>
                                        </div>

                                        <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-in-date"
                                            data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 rounded-4">
                                                <div class="elCalendar js-calendar-el-calendar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="searchMenu-guests px-20 lg:py-20 lg:px-0 js-form-dd js-form-counters">
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
                                        <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests"
                                            data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 rounded-4">
                                                <div class="row y-gap-10 justify-between items-center">
                                                    <div class="col-auto">
                                                        <div class="text-15 fw-500">Adults</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change="js-count-adult">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down-stay">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">2</div>
                                                            </div>
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up-stay">
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
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change="js-count-child">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">1</div>
                                                            </div>
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
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
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change="js-count-room">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">1</div>
                                                            </div>
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                                <i class="icon-plus text-12"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-item">
                                        <button
                                            class="mainSearch__submit button -redBtn-1 h-60 px-35 col-12 rounded-100 bg-blue-1 text-white">
                                            <i class="icon-search text-20 mr-10"></i>
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs__pane -tab-item-8 ">
                            <div class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
                                <div class="button-grid items-center">
                                    <div class="searchMenu-loc px-20 lg:py-20 lg:px-0 js-form-dd js-liverSearch">
                                        <div class="d-flex align-items-center gap-2">
                                            <div data-x-dd-click="searchMenu-loc">
                                                <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                        class="fa-solid fa-plane-departure me-2"></i>Location</h4>
                                                <div class="text-15 text-light-1 ls-2 lh-16">
                                                    <input autocomplete="off" type="search"
                                                        placeholder="Airport or City" class="js-search js-dd-focus form-control p-0" />
                                                </div>
                                            </div>
                                            <div data-x-dd-click="searchMenu-loc " class="divider">
                                                <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                        class="fa-solid fa-plane-arrival me-2"></i>Location</h4>
                                                <div class="text-15 text-light-1 ls-2 lh-16">
                                                    <input autocomplete="off" type="search" placeholder="Where to?"
                                                        class="js-search js-dd-focus form-control p-0" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="searchMenu-loc__field shadow-2 js-popup-window"
                                            data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 sm:px-0 sm:py-15 rounded-4">
                                                <div class="y-gap-5 js-results">
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        London</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">
                                                                        Greater London, United Kingdom</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        New York</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">New
                                                                        York State, United States</div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Paris</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">France
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Madrid</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">Spain
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                            <div class="d-flex">
                                                                <div class="icon-location-2 text-light-1 text-20 pt-4">
                                                                </div>
                                                                <div class="ml-10">
                                                                    <div
                                                                        class="text-15 lh-12 fw-500 js-search-option-target">
                                                                        Santorini</div>
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">Greece
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="searchMenu-date px-20 lg:py-20 lg:px-0 js-form-dd js-calendar js-calendar-el d-flex align-items-center gap-3">
                                        <div data-x-dd-click="searchMenu-in-date">
                                            <h4 class="text-15 fw-500 ls-2 lh-16">Check in </h4>
                                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                                <span class="js-first-date">Wed 2 Mar</span>
                                            </div>
                                        </div>
                                        <div data-x-dd-click="searchMenu-out-date" class="divider">
                                            <h4 class="text-15 fw-500 ls-2 lh-16"> Check out </h4>
                                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                                <span class="js-last-date">Fri 11 Apr</span>
                                            </div>
                                        </div>

                                        <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-in-date"
                                            data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 rounded-4">
                                                <div class="elCalendar js-calendar-el-calendar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="searchMenu-guests px-20 lg:py-20 lg:px-0 js-form-dd js-form-counters">
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
                                        <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests"
                                            data-x-dd-toggle="-is-active">
                                            <div class="bg-white px-20 py-30 rounded-4">
                                                <div class="row y-gap-10 justify-between items-center">
                                                    <div class="col-auto">
                                                        <div class="text-15 fw-500">Adults</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change="js-count-adult">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">2</div>
                                                            </div>
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
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
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change="js-count-child">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">1</div>
                                                            </div>
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
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
                                                        <div class="d-flex items-center js-counter"
                                                            data-value-change="js-count-room">
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                                                <i class="icon-minus text-12"></i>
                                                            </button>
                                                            <div class="flex-center size-20 ml-15 mr-15">
                                                                <div class="text-15 js-count">1</div>
                                                            </div>
                                                            <button
                                                                class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                                                <i class="icon-plus text-12"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-item">
                                        <button
                                            class="mainSearch__submit button -redBtn-1 h-60 px-35 col-12 rounded-100 bg-blue-1 text-white">
                                            <i class="icon-search text-20 mr-10"></i>
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-lg">
    <div class="container">
        <div class="row y-gap-30">
            <div class="col-md-3">
                <aside class="sidebar y-gap-40">
                    <div class="sidebar__item -no-border">
                        <h5 class="text-18 fw-500 mb-10">Search by property name</h5>
                        <div class="single-field relative d-flex items-center py-10">
                            <input class="pl-50 border-light text-dark-1 h-50 rounded-8" type="email" placeholder="e.g. Best Western">
                            <button class="absolute d-flex items-center h-full">
                                <i class="icon-search text-20 px-15 text-dark-1"></i>
                            </button>
                        </div>
                    </div>
                    <div class="sidebar__item">
                        <h5 class="text-18 fw-500 mb-10">Deals</h5>
                        <div class="sidebar-checkbox">
                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">Free cancellation</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="check_lists d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <p class="text-15 ml-10">Reserve now, pay at stay </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">Properties with special offers</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="sidebar__item">
                        <h5 class="text-18 fw-500 mb-10">Popular Filters</h5>
                        <div class="sidebar-checkbox">

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">Breakfast Included</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">92</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">Romantic</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">45</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">Airport Transfer</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">21</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">WiFi Included </div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">78</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">5 Star</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">679</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="sidebar__item pb-30">
                        <h5 class="text-18 fw-500 mb-10">Nightly Price</h5>
                        <div class="row x-gap-10 y-gap-30">
                            <div class="col-12">
                                <div class="js-price-rangeSlider">
                                    <div class="text-14 fw-500"></div>

                                    <div class="d-flex justify-between mb-20">
                                        <div class="text-15 text-dark-1">
                                            <span class="js-lower"></span>
                                            -
                                            <span class="js-upper"></span>
                                        </div>
                                    </div>

                                    <div class="px-5">
                                        <div class="js-slider"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar__item">
                        <h5 class="text-18 fw-500 mb-10">Amenities</h5>
                        <div class="sidebar-checkbox">

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Breakfast Included</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">92</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">WiFi Included </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">45</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Pool</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">21</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Restaurant </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">78</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Air conditioning </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">679</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="sidebar__item">
                        <h5 class="text-18 fw-500 mb-10">Star Rating</h5>
                        <div class="row x-gap-10 y-gap-10 pt-10">

                            <div class="col-auto">
                                <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">1</a>
                            </div>

                            <div class="col-auto">
                                <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">2</a>
                            </div>

                            <div class="col-auto">
                                <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">3</a>
                            </div>

                            <div class="col-auto">
                                <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">4</a>
                            </div>

                            <div class="col-auto">
                                <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">5</a>
                            </div>

                        </div>
                    </div>

                    <div class="sidebar__item">
                        <h5 class="text-18 fw-500 mb-10">Guest Rating</h5>
                        <div class="sidebar-checkbox">

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="form-radio d-flex items-center ">
                                        <div class="radio">
                                            <input type="radio" name="name">
                                            <div class="radio__mark">
                                                <div class="radio__icon"></div>
                                            </div>
                                        </div>
                                        <div class="ml-10">Any</div>
                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">92</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="form-radio d-flex items-center ">
                                        <div class="radio">
                                            <input type="radio" name="name">
                                            <div class="radio__mark">
                                                <div class="radio__icon"></div>
                                            </div>
                                        </div>
                                        <div class="ml-10">Wonderful 4.5+</div>
                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">45</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="form-radio d-flex items-center ">
                                        <div class="radio">
                                            <input type="radio" name="name">
                                            <div class="radio__mark">
                                                <div class="radio__icon"></div>
                                            </div>
                                        </div>
                                        <div class="ml-10">Very good 4+</div>
                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">21</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="form-radio d-flex items-center ">
                                        <div class="radio">
                                            <input type="radio" name="name">
                                            <div class="radio__mark">
                                                <div class="radio__icon"></div>
                                            </div>
                                        </div>
                                        <div class="ml-10">Good 3.5+ </div>
                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">78</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="sidebar__item">
                        <h5 class="text-18 fw-500 mb-10">Style</h5>
                        <div class="sidebar-checkbox">

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Budget</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">92</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Mid-range </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">45</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Luxury</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">21</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Family-friendly </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">78</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Business </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">679</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="sidebar__item">
                        <h5 class="text-18 fw-500 mb-10">Neighborhood</h5>
                        <div class="sidebar-checkbox">

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Central London</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">92</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Guests' favourite area </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">45</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Westminster Borough</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">21</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Kensington and Chelsea </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">78</div>
                                </div>
                            </div>

                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">

                                    <div class="d-flex items-center">
                                        <div class="form-checkbox ">
                                            <input type="checkbox" name="name">
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Oxford Street </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">679</div>
                                </div>
                            </div>

                        </div>
                    </div>


                </aside>
            </div>

            <div class="col-md-9">
                <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">
                        <div class="text-18"><span class="fw-500">{{count($formData)}} properties</span> in  {{ isset($search_data['location']) ? $search_data['location'] : '' }}</div>
                    </div>

                    <div class="col-auto">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-auto">
                                <button class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">
                                    <i class="icon-up-down text-14 mr-10"></i>
                                    Top picks for your search
                                </button>
                            </div>

                            <div class="col-auto d-none lg:d-block">
                                <button data-x-click="filterPopup" class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">
                                    <i class="icon-up-down text-14 mr-10"></i>
                                    Filter
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="filterPopup bg-white" data-x="filterPopup" data-x-toggle="-is-active">
                    <aside class="sidebar -mobile-filter">
                        <div data-x-click="filterPopup" class="-icon-close">
                            <i class="icon-close"></i>
                        </div>

                        <div class="sidebar__item">
                            <div class="flex-center ratio ratio-15:9 js-lazy" data-bg="img/general/map.png">
                                <button class="button py-15 px-24 -blue-1 bg-white text-dark-1 absolute" data-x-click="mapFilter">
                                    <i class="icon-destination text-22 mr-10"></i>
                                    Show on map
                                </button>
                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Search by property name</h5>
                            <div class="single-field relative d-flex items-center py-10">
                                <input id="search-single-property" type="text" name="property-name" class="pl-50 border-light text-dark-1 h-50 rounded-8" placeholder="e.g. Best Western">
                                <button id="search-button" class="absolute d-flex items-center h-full">
                                    <i class="icon-search text-20 px-15 text-dark-1"></i>
                                </button>
                            </div>
                            <!-- Display the results here -->
                            <div id="search-results"></div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Deals</h5>
                            <div class="sidebar-checkbox">

                                <div class="row items-center justify-between">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="form-checkbox">
                                                <input type="checkbox">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>
                                            <div class="text-15 ml-10">Free cancellation</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="form-checkbox">
                                                <input type="checkbox">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>
                                            <div class="text-15 ml-10">Reserve now, pay at stay </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="form-checkbox">
                                                <input type="checkbox">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>
                                            <div class="text-15 ml-10">Properties with special offers</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Popular Filters</h5>
                            <div class="sidebar-checkbox">

                                <div class="row items-center justify-between">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="form-checkbox">
                                                <input type="checkbox">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>
                                            <div class="text-15 ml-10">Breakfast Included</div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">92</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="form-checkbox">
                                                <input type="checkbox">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>
                                            <div class="text-15 ml-10">Romantic</div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">45</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="form-checkbox">
                                                <input type="checkbox">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>
                                            <div class="text-15 ml-10">Airport Transfer</div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">21</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="form-checkbox">
                                                <input type="checkbox">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>
                                            <div class="text-15 ml-10">WiFi Included </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">78</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="form-checkbox">
                                                <input type="checkbox">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>
                                            <div class="text-15 ml-10">5 Star</div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">679</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item pb-30">
                            <h5 class="text-18 fw-500 mb-10">Nightly Price</h5>
                            <div class="row x-gap-10 y-gap-30">
                                <div class="col-12">
                                    <div class="js-price-rangeSlider">
                                        <div class="text-14 fw-500"></div>

                                        <div class="d-flex justify-between mb-20">
                                            <div class="text-15 text-dark-1">
                                                <span class="js-lower"></span>
                                                -
                                                <span class="js-upper"></span>
                                            </div>
                                        </div>

                                        <div class="px-5">
                                            <div class="js-slider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Amenities</h5>
                            <div class="sidebar-checkbox">

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Breakfast Included</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">92</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">WiFi Included </div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">45</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Pool</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">21</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Restaurant </div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">78</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Air conditioning </div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">679</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Star Rating</h5>
                            <div class="row y-gap-10 x-gap-10 pt-10">

                                <div class="col-auto">
                                    <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">1</a>
                                </div>

                                <div class="col-auto">
                                    <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">2</a>
                                </div>

                                <div class="col-auto">
                                    <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">3</a>
                                </div>

                                <div class="col-auto">
                                    <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">4</a>
                                </div>

                                <div class="col-auto">
                                    <a href="#" class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">5</a>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Guest Rating</h5>
                            <div class="sidebar-checkbox">

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="form-radio d-flex items-center ">
                                            <div class="radio">
                                                <input type="radio" name="name">
                                                <div class="radio__mark">
                                                    <div class="radio__icon"></div>
                                                </div>
                                            </div>
                                            <div class="ml-10">Any</div>
                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">92</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="form-radio d-flex items-center ">
                                            <div class="radio">
                                                <input type="radio" name="name">
                                                <div class="radio__mark">
                                                    <div class="radio__icon"></div>
                                                </div>
                                            </div>
                                            <div class="ml-10">Wonderful 4.5+</div>
                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">45</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="form-radio d-flex items-center ">
                                            <div class="radio">
                                                <input type="radio" name="name">
                                                <div class="radio__mark">
                                                    <div class="radio__icon"></div>
                                                </div>
                                            </div>
                                            <div class="ml-10">Very good 4+</div>
                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">21</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="form-radio d-flex items-center ">
                                            <div class="radio">
                                                <input type="radio" name="name">
                                                <div class="radio__mark">
                                                    <div class="radio__icon"></div>
                                                </div>
                                            </div>
                                            <div class="ml-10">Good 3.5+ </div>
                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">78</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Style</h5>
                            <div class="sidebar-checkbox">

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Budget</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">92</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Mid-range </div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">45</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Luxury</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">21</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Family-friendly </div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">78</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Business </div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">679</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Neighborhood</h5>
                            <div class="sidebar-checkbox">

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Central London</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">92</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Guests' favourite area </div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">45</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Westminster Borough</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">21</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Kensington and Chelsea </div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">78</div>
                                    </div>
                                </div>

                                <div class="row items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Oxford Street </div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">679</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </aside>
                </div>

                <div class="mt-30"></div>

                <div class="row y-gap-30">
                @php
                    use Carbon\Carbon;
                    $datechckin1 = isset($search_data['check_in']) ? $search_data['check_in'] : today()->format('D d M');
                    $datecheckin = Carbon::createFromFormat('D d M', $datechckin1);

                    $checkindate = $datecheckin->format('Y-m-d');

                    $datechckout1 = isset($search_data['check_out']) ? $search_data['check_out'] : today()->format('D d M');
                    $datecheckout = Carbon::createFromFormat('D d M', $datechckout1);

                $checkoutdate = $datecheckout->format('Y-m-d');

                    $date1 = Carbon::createFromFormat('Y-m-d', $checkindate);
                    $date2 = Carbon::createFromFormat('Y-m-d', $checkoutdate);

                    $diffInDays = $date1->diffInDays($date2);
                @endphp


    @if(count($formData) > 0)
    @foreach($formData as $single_data)
    @php
        $rate_tax = DB::table('tax_and_rate')
            ->where('property_id', $single_data['id'])
            ->where('is_deleted', 0)
            ->first();
       
        if ($rate_tax) {
            $tax = $rate_tax->tax ?: 100; 
            $price_one_night = $rate_tax->rate_pr_night ?: 1000; 
        } else {
            $tax = 100; 
            $price_one_night = 1000; 
        }

        $total_tax = $tax * $diffInDays;
        $total_price = $price_one_night * $diffInDays;
    @endphp

    @php $decodedImages = json_decode($single_data['image'], true); @endphp
    @php $facilities = json_decode($single_data['facilities'], true); @endphp
        <div class="col-12">
            <div class="border-top-light pt-30">
                <div class="row x-gap-20 y-gap-20">
                    <div class="col-md-auto">
                        <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                            <div class="cardImage__content">
                                @if(!empty($decodedImages) && $decodedImages[0] != null)
                                    <img class="rounded-4 col-12" src="{{ asset('front/img/propertys/'.$decodedImages[0]) }}" alt="image" style=" object-fit: cover;">
                                @else
                                    <img class="rounded-4 col-12" src="{{ asset('front/img/No-Image.png') }}" alt="image" style="object-fit: cover;">
                                @endif
                            </div>


                            @if(Auth::check())
                                @php
                                    // Check if the user has already liked the property
                                    $userLiked = DB::table('likes')->where('user_id', Auth::id())->where('property_id', $single_data['id'])->exists();
                                @endphp
                                
                                <!-- Render the like button with dynamic data for the status (like/unlike) -->
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2" 
                                        id="like-button-change-status{{$single_data['id']}}" 
                                        data-property-id="{{ $single_data['id'] }}" 
                                        data-status="{{ $userLiked ? 'unlike' : 'like' }}"  
                                        style="{{ $userLiked ? 'color: red;' : '' }}">  <!-- Optionally change button color based on the like status -->
                                        <i class="fas fa-heart"></i>
                                </button>

                            @else
                                <p><a href="{{ route('login') }}">Log in</a> to like this property.</p>
                            @endif




                            <!-- <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md">
                        <h3 class="text-18 lh-16 fw-500">
                            {{ $single_data['title'] ?? '' }}<br class="lg:d-none">{{ $single_data['address'] ?? '' }}
                            <!-- <div class="d-inline-block ml-10">
                                @for($i = 0; $i < 5; $i++)
                                    <i class="icon-star text-10 text-yellow-2"></i>
                                @endfor
                            </div> -->
                        </h3>
                        <div class="row x-gap-10 y-gap-10 items-center pt-10">
                            <div class="col-auto">
                                <p class="text-14">{!! Str::limit($single_data['description'] ?? '', 100) !!}</p>
                            </div>
                            <!-- <div class="col-auto">
                                <button data-x-click="mapFilter" class="d-block text-14 text-blue-1 underline">Show on map</button>
                            </div> -->
                            <!-- <div class="col-auto">
                                <div class="size-3 rounded-full bg-light-1"></div>
                            </div>
                            <div class="col-auto">
                                <p class="text-14">2 km to city center</p>
                            </div> -->
                        </div>
                        <!-- <div class="text-14 lh-15 mt-20">
                            <div class="fw-500">King Room</div>
                            <div class="text-light-1">1 extra-large double bed</div>
                        </div> -->
                        <!-- <div class="text-14 text-green-2 lh-15 mt-10">
                            <div class="fw-500">Free cancellation</div>
                            <div class="">You can cancel later, so lock in this great price today.</div>
                        </div> -->
                        <div class="row x-gap-10 y-gap-10 pt-20">
                        @if(!empty($facilities))
                        @foreach($facilities as $facility)
                            <div class="col-auto">
                                <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">{{$facility}}</div>
                            </div>
                        @endforeach
                        @endif

                            <div class="col-auto">
                                <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">WiFi</div>
                            </div>
                            <div class="col-auto">
                                <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Spa</div>
                            </div>
                            <div class="col-auto">
                                <div class="border-light rounded-100 py-5 px-20 text-14 lh-14">Bar</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto text-right md:text-left">
                        <div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                            <div class="col-auto">
                                <!-- <div class="text-14 lh-14 fw-500">Exceptional</div>
                                <div class="text-14 lh-14 text-light-1">3,014 reviews</div> -->
                            </div>
                            <!-- <div class="col-auto">
                                <div class="flex-center text-white fw-600 text-14 size-40 rounded-4 bg-blue-1">4.8</div>
                            </div> -->
                        </div>
                        <div>
                            <div class="text-14 text-light-1 mt-50 md:mt-20">{{ $diffInDays }} nights, {{ isset($search_data['adult']) ? $search_data['adult'] : '0' }} adults</div>
                            <div class="text-22 lh-12 fw-600 mt-5">INR₹{{$total_price}}</div>
                            <div class="text-14 text-light-1 mt-5">+INR₹{{$total_tax}} taxes and charges</div>
                            <a href="{{ route('trendingDestinationDetailss', ['slug' => $single_data['slug']]) }}" class="button -md -dark-1 bg-blue-1 text-white mt-24">
    View Destination
</a>
<!-- <p>{{ $single_data['slug'] }}</p> -->

                                See Availability <div class="icon-arrow-top-right ml-15"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div><p>Data Not Found</p></div>
@endif






        

                </div>

                <div class="border-top-light mt-30 pt-30">
                    <div class="row x-gap-10 y-gap-20 justify-between md:justify-center">
                        <div class="col-auto md:order-1">
                            <button class="button -blue-1 size-40 rounded-full border-light">
                                <i class="icon-chevron-left text-12"></i>
                            </button>
                        </div>

                        <div class="col-md-auto md:order-3">
                            <div class="row x-gap-20 y-gap-20 items-center md:d-none">

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full">1</div>

                                </div>

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                                </div>

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full">3</div>

                                </div>

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full bg-light-2">4</div>

                                </div>

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full">5</div>

                                </div>

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full">...</div>

                                </div>

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full">20</div>

                                </div>

                            </div>

                            <div class="row x-gap-10 y-gap-20 justify-center items-center d-none md:d-flex">

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full">1</div>

                                </div>

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                                </div>

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full">3</div>

                                </div>

                            </div>

                            <div class="text-center mt-30 md:mt-10">
                                <div class="text-14 text-light-1">1 – 20 of 300+ properties found</div>
                            </div>
                        </div>

                        <div class="col-auto md:order-2">
                            <button class="button -blue-1 size-40 rounded-full border-light">
                                <i class="icon-chevron-right text-12"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-md bg-dark-2">
    <div class="container">
        <div class="row y-gap-30 justify-between items-center">
            <div class="col-auto">
                <div class="row y-gap-20  flex-wrap items-center">
                    <div class="col-auto">
                        <div class="icon-newsletter text-60 sm:text-40 text-white"></div>
                    </div>

                    <div class="col-auto">
                        <h4 class="text-26 text-white fw-600">Your Travel Journey Starts Here</h4>
                        <div class="text-white">Sign up and we'll send the best deals to you</div>
                    </div>
                </div>
            </div>

            <div class="col col-md-auto">
                <div class="single-field -w-410 d-flex x-gap-10 y-gap-20">
                    <div>
                        <input class="bg-white h-60" type="text" placeholder="Your Email">
                    </div>

                    <div>
                        <button class="button -md h-60 bg-blue-1 text-white">Subscribe</button>
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
    alert("fbjnkn");  // Debugging alert to confirm the script is running

    // Event listener for the input field
    $('#search-single-property').on('keyup', function() {
        console.log("Keyup event triggered"); 
        alert("erfhjghu");  // Debugging alert to confirm the event triggers
        
        var propertyName = $(this).val();  // Get the value of the input field

        // Check if the input is not empty
        if (propertyName.trim() !== '') {
            $.ajax({
                url: '{{ url('search-single-property') }}',  // Ensure this URL is correct
                method: 'GET',
                data: { property_name: propertyName },  // Send the search term as query parameter
                beforeSend: function() {
                    // Show a loading message or spinner while waiting for the response
                    $('#search-results').html('<p>Loading...</p>');
                },
                success: function(response) {
                    console.log(response);  // Debugging: log the response to check if data is returned
                    // Check if the response contains data and update the results
                    if (response.data) {
                        $('#search-results').html(response.data);
                    } else {
                        $('#search-results').html('<p>No results found.</p>');
                    }
                },
                error: function(xhr, status, error) {
                    // Handle error and display an error message
                    $('#search-results').html('<p>Error occurred. Please try again later.</p>');
                    toastr.error('Error occurred. Please try again.');
                }
            });
        } else {
            // Clear the results if the input is empty
            $('#search-results').html('');
        }
    });
});
</script>




<script>
 $(document).ready(function() {

    // Listen for clicks on any like button
    $(document).on('click', '[id^=like-button-change-status]', function() {
        var status = $(this).data('status');  // Get the current status (like or unlike)
        var propertyId = $(this).data('property-id');  // Get the property ID

        var button = $(this);  // Store reference to the button clicked

        $.ajax({
            url: '{{ route('property.like', ':property_id') }}'.replace(':property_id', propertyId),  // Dynamically replace the property ID in the route
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',  // CSRF token for security
                status: status  // Send the current like/unlike status
            },
            success: function(response) {
                if (response.success) {
                    // Update the UI based on the new like status
                    if (response.status === 'liked') {
                        button
                            .data('status', 'unlike')  // Update button status to "unlike"
                            .css('color', 'red');  // Optionally change color

                        // Show success toast when user likes the property
                        toastr.success('Saved to: My next trip!');
                    } else {
                        button
                            .data('status', 'like')  // Update button status to "like"
                            .css('color', '');  // Reset color

                        // Show info toast when user unlikes the property
                        toastr.info('Removed from: My next trip. ');
                    }
                } else {
                    // Show error toast if the action wasn't successful
                    toastr.error(response.message, 'Error');
                }
            },
            error: function(xhr) {
                // Show error toast if there was an issue with the AJAX request
                toastr.error('Error: ' + xhr.responseText, 'Error');
            }
        });
    });

});





</script>




@if(session('success'))
<script>
    Swal.fire({
        position: "center",
        icon: "success",
        title: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 1500
    });
</script>
@endif
 <script>
    $(document).ready(function() {
        let timeout;

        $('#location').on('input', function() {
            clearTimeout(timeout);
            var cityName = $(this).val();

            if (cityName.length >= 1) { // Start searching after 1 character is entered
                timeout = setTimeout(function() {
                    var apiKey = 'AIzaSyB60LdW060ZpB6ZsvVTo_Rr2HIorwhKpXU'; // Replace with your actual API key
                    var url = `https://maps.googleapis.com/maps/api/geocode/json?address=${encodeURIComponent(cityName)}&key=${apiKey}`;

                    $.get(url, function(data) {
                        if (data.status === 'OK') {
                            var results = data.results;
                            var resultHtml = '';

                            results.forEach(function(result) {
                                var addressComponents = result.address_components;
                                var shortName = addressComponents.find(component => component.types.includes("locality"))?.short_name || "";

                                resultHtml += `
                                    <div class="result-item" data-address="${result.formatted_address}" data-shortname="${shortName}">
                                     ${result.formatted_address}
                                    </div>
                                    <hr>
                                `;
                            });

                            $('#result').html(resultHtml || '<p>Not Available</p>');
                        } else if (data.status === 'ZERO_RESULTS') {
                            $('#result').html('<p>Not Available</p>');
                        } else {
                            $('#result').html(`<p>Error: ${data.status}</p>`);
                        }
                    }).fail(function() {
                        $('#result').html('<p>Error fetching data from API.</p>');
                    });
                }, 300); 
            } else {
                $('#result').html('');
            }
        });

        
        $('#result').on('click', '.result-item', function() {
            var address = $(this).data('address');
            $('#location').val(address);
            $('#result').html(''); 
        });
    });

    $("#adult-plus-stay").on("click", function() {
    var adlt_value_stay = $("#adult-count-value-stay").text();
    var adlt_value_stay_inc = parseInt(adlt_value_stay) + 1;
    $("#adult-count-value-stay").text(adlt_value_stay_inc);
    $('#adult-count-value-stay-input').val(adlt_value_stay_inc);
    $("#js-count-adult-stay").text(adlt_value_stay_inc);
});

$("#adult-minus-stay").on("click", function() {
    var adlt_value_stay = $("#adult-count-value-stay").text();
    var adlt_value_stay_dec = parseInt(adlt_value_stay) - 1;
    
    // Validation to prevent negative values
    if (adlt_value_stay_dec >= 1) {
        $("#adult-count-value-stay").text(adlt_value_stay_dec);
        $('#adult-count-value-stay-input').val(adlt_value_stay_dec);
        $("#js-count-adult-stay").text(adlt_value_stay_dec);
    }
});

$("#children-plus-stay").on("click", function() {
    var children_value_stay = $("#children-count-stay").text();
    var children_value_stay_inc = parseInt(children_value_stay) + 1;
    $("#children-count-stay").text(children_value_stay_inc);
    $('#children-count-value-stay-input').val(children_value_stay_inc);
    $("#js-count-child-stay").text(children_value_stay_inc);
});

$("#children-minus-stay").on("click", function() {
    var children_value_stay = $("#children-count-stay").text();
    var children_value_stay_dec = parseInt(children_value_stay) - 1;
    
    // Validation to prevent negative values
    if (children_value_stay_dec >= 0) {
        $("#children-count-stay").text(children_value_stay_dec);
        $('#children-count-value-stay-input').val(children_value_stay_dec);
        $("#js-count-child-stay").text(children_value_stay_dec);
    }
});

$("#room-plus-stay").on("click", function() {
    var room_value_stay = $("#room-count-stay").text();
    var room_value_stay_inc = parseInt(room_value_stay) + 1;
    $("#room-count-stay").text(room_value_stay_inc);
    $('#room-count-value-stay-input').val(room_value_stay_inc);
    $("#js-count-room-stay").text(room_value_stay_inc);
});

$("#room-minus-stay").on("click", function() {
    var room_value_stay = $("#room-count-stay").text();
    var room_value_stay_dec = parseInt(room_value_stay) - 1;
    
    // Validation to prevent negative values
    if (room_value_stay_dec >= 1) {
        $("#room-count-stay").text(room_value_stay_dec);
        $('#room-count-value-stay-input').val(room_value_stay_dec);
        $("#js-count-room-stay").text(room_value_stay_dec);
    }
});

$("#mainSearch__submit-stay").on("click", function(e) {
    e.preventDefault(); // Prevent the default form submission

    // Get values
    var location = $("#location").val();
    var start_date = $("#start_date_stay").text();
    var end_date = $("#end_date_stay").text();
    var adult_value = $("#js-count-adult-stay").text();
    var child_value = $("#js-count-child-stay").text();
    var room_value = $("#js-count-room-stay").text();

    // Prepare data to send
    var formData = {
        location: location,
        start_date: start_date,
        end_date: end_date,
        adult_count: adult_value,
        child_count: child_value,
        room_count: room_value
    };

    // AJAX request
       // AJAX request
$.ajax({
    type: 'GET',
    url: '{{ url('search-stay') }}', // Ensure this matches your route definition
    data: formData,
    success: function(response) {
        // Handle success (e.g., redirect or show a message)
        console.log(response);
        
        if (response.success) {
            // Redirect to the new URL with array values
            var redirectUrl = '{{ url('trending-destination') }}' + 
                '?treanding_search_data=' + encodeURIComponent(JSON.stringify(response.data)) + 
                '&search_data=' + encodeURIComponent(JSON.stringify(response.search_data));
                
            // Redirect to the new URL
            window.location.href = redirectUrl;
        } else {
            // Handle the case where the response indicates failure
            alert(response.message || "An error occurred.");
        }
    },
    error: function(xhr, status, error) {
        // Handle error
        console.error(error);
        alert("An error occurred: " + error);
    }
});


});





</script>
@endsection