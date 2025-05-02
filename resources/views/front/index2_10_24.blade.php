@extends('front.layout.app')
@section('content')
<section data-anim-wrap class="masthead -type-1 z-5">
    <div data-anim-child="fade" class="masthead__bg">
        <img src="#" alt="image" data-src="{{ asset('images/'.$data->banner_image) }}" class="js-lazy">
    </div>
    <div class="container">
        <div class="row justify-center">
            <div class="col-auto">
                <div class="text-center">
                    <h1 data-anim-child="slide-up delay-4" class="text-60 lg:text-40 md:text-30 text-white">{{$data->title}}</h1>
                    <p data-anim-child="slide-up delay-5" class="text-white mt-6 md:mt-10">{{$data->sub_title}}</p>
                </div>
                <div data-anim-child="slide-up delay-6" class="tabs -underline mt-60 js-tabs">
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

                    <div class="tabs__content mt-30 md:mt-20 js-tabs-content">
                        <div class="tabs__pane -tab-item-1 is-tab-el-active">
                            <div class="mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
                                <div class="button-grid items-center">
                                    <div class="js-search">
                                        <div data-x-dd-click="searchMenu-loc">
                                            <h4 class="text-15 fw-500 ls-2 lh-16">
                                                <i class="fa-solid fa-hotel me-2"></i>Location
                                            </h4>
                                            <div class="text-15 text-light-1 ls-2 lh-16">
                                                <input id="location" autocomplete="off" type="search" placeholder="Where are you going?"
                                                    class="js-search js-dd-focus form-control p-0 stay-input" />
                                                <span id="result"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="searchMenu-date px-20 lg:py-20 lg:px-0 js-form-dd js-calendar js-calendar-el d-flex align-items-center gap-3">
                                        <div data-x-dd-click="searchMenu-in-date" id="check-in">
                                            <h4 class="text-15 fw-500 ls-2 lh-16">Check in </h4>
                                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                                <span class="js-first-date">Tue 10 Sep</span>
                                            </div>
                                        </div>
                                        <div data-x-dd-click="searchMenu-out-date" class="divider" id="check-out">
                                            <h4 class="text-15 fw-500 ls-2 lh-16"> Check out </h4>
                                            <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                                <span class="js-last-date">Tue 10 Sep</span>
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
                                                            data-value-change=".js-count-adult">
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
                                                            data-value-change=".js-count-child">
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
                                                            data-value-change=".js-count-room">
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
                                                            data-value-change=".js-count-adult">
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
                                                            data-value-change=".js-count-child">
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
                                                            data-value-change=".js-count-room">
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
                                                            data-value-change=".js-count-adult">
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
                                                            data-value-change=".js-count-child">
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
                                                            data-value-change=".js-count-room">
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
                                                            data-value-change=".js-count-adult">
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
                                                            data-value-change=".js-count-child">
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
                                                            data-value-change=".js-count-room">
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
                                                            data-value-change=".js-count-adult">
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
                                                            data-value-change=".js-count-child">
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
                                                            data-value-change=".js-count-room">
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
                                                            data-value-change=".js-count-adult">
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
                                                            data-value-change=".js-count-child">
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
                                                            data-value-change=".js-count-room">
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

<section class="layout-pt-md">
    <div class="container">
        <div class="sectionTitle -md">
            <h2 class="sectionTitle__title">Trending destinations</h2>
            <p class=" sectionTitle__text mt-5 sm:mt-0">Travellers searching for India also booked these</p>
        </div>
        <a href="{{ route('trendingDestination') }}">
            <div class="row trending-destinations-row">
                <div class="col-md-6 col-12 mb-20 mb-30">
                    <div class="destination-img">
                        <img src="https://t3.ftcdn.net/jpg/05/31/84/94/360_F_531849499_KF0e9rhJR7xXPqPLQPuVI2f7xn7GBnRQ.jpg" class="h-100 w-100">
                    </div>
                </div>

                <div class="col-md-6 col-12 mb-20 mb-30">
                    <div class="destination-img">
                        <img src="https://plus.unsplash.com/premium_photo-1661919589683-f11880119fb7?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZGVsaGl8ZW58MHx8MHx8fDA%3D"
                            class="h-100 w-100">
                    </div>
                </div>

                <div class="col-md-4 col-12 mb-30">
                    <div class="destination-img">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/East_facade_Hawa_Mahal_Jaipur_from_ground_level_%28July_2022%29_-_img_01.jpg" class="h-100 w-100">
                    </div>
                </div>

                <div class="col-md-4 col-12 mb-30">
                    <div class="destination-img">
                        <img src="https://static.toiimg.com/thumb/msid-105717782,width-748,height-499,resizemode=4,imgsize-107610/.jpg"
                            class="h-100 w-100">
                    </div>
                </div>

                <div class="col-md-4 col-12 mb-30">
                    <div class="destination-img">
                        <img src="https://media.istockphoto.com/id/539018660/photo/taj-mahal-hotel-and-gateway-of-india.jpg?s=612x612&w=0&k=20&c=L1LJVrYMS8kj2rJKlQMcUR88vYoAZeWbYIGkcTo6QV0="
                            class="h-100 w-100">
                    </div>
                </div>


            </div>
        </a>

    </div>
</section>

<section class="layout-pt-md">
    <div class="container">
        <div class="sectionTitle -md">
            <h2 class="sectionTitle__title">Explore India</h2>
            <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
        </div>
        <div class="owl-carousel owl-theme explore-destination-swiper pt-40 sm:pt-20">
            <div class="item">
                <img
                    src="https://plus.unsplash.com/premium_photo-1661919589683-f11880119fb7?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZGVsaGl8ZW58MHx8MHx8fDA%3D">
                <div class="mt-10">
                    <h5>New Delhi</h5>
                    <p>2,921 properties</p>
                </div>
            </div>
            <div class="item">
                <img src="https://t3.ftcdn.net/jpg/05/31/84/94/360_F_531849499_KF0e9rhJR7xXPqPLQPuVI2f7xn7GBnRQ.jpg">
                <div class="mt-10">
                    <h5>Gurgaon</h5>
                    <p>Properties</p>
                </div>
            </div>
            <div class="item">
                <img src="https://t3.ftcdn.net/jpg/03/32/17/60/360_F_332176058_0uzsyxpVcODllUAWMG2DmbwS0CqBWqYM.jpg">
                <div class="mt-10">
                    <h5>Noida</h5>
                    <p>Properties</p>
                </div>
            </div>
            <div class="item">
                <img
                    src="https://static.toiimg.com/thumb/msid-105717782,width-748,height-499,resizemode=4,imgsize-107610/.jpg">
                <div class="mt-10">
                    <h5>Agra</h5>
                    <p>Properties</p>
                </div>
            </div>
            <div class="item">
                <img
                    src="https://upload.wikimedia.org/wikipedia/commons/4/41/East_facade_Hawa_Mahal_Jaipur_from_ground_level_%28July_2022%29_-_img_01.jpg">
                <div class="mt-10">
                    <h5>Jaipur</h5>
                    <p>Properties</p>
                </div>
            </div>
            <div class="item">
                <img
                    src="https://media.istockphoto.com/id/535168027/photo/india-goa-palolem-beach.jpg?s=612x612&w=0&k=20&c=iGV1Ue0Efj87dQirWnUpZVG1dNobUjfVvMGdKHTJ7Qg=">
                <div class="mt-10">
                    <h5>Goa</h5>
                    <p>Properties</p>
                </div>
            </div>
        </div>
    </div>
</section>

@php $propertycategorys = \App\Models\PropertyCategory::where('status','1')->get(); @endphp
<section class="layout-pt-md">
    <div class="container">
        <div class="sectionTitle -md">
            <h2 class="sectionTitle__title">Browse by property type in Gurgaon</h2>
        </div>
        <div class="owl-carousel owl-theme browse-property-swiper pt-40 sm:pt-20">

            @foreach($propertycategorys as $propertycategory)
            <a href="{{ route('propertyListSlug',$propertycategory->slug) }}">
                <div class="item">
                    @if($propertycategory->image != null)
                    <img src="{{ asset('front/img/property-category/'.$propertycategory->image) }}">
                    @else
                    <img src="{{ asset('front/img/No-Image.png') }}">
                    @endif
                    <div class="mt-10">
                        <h5>{{ $propertycategory->name ?? '' }}</h5>


                    </div>
                </div>
            </a>

            @endforeach






        </div>
    </div>
</section>


<section class="layout-pt-md layout-pb-md  tab-section">
    <div class="container">
        <div class="sectionTitle -md">
            <h2 class="sectionTitle__title">Quick and easy trip planner</h2>
            <p class=" sectionTitle__text mt-5 sm:mt-0">Pick a vibe and explore the top destinations in India
            </p>
        </div>






        <ul class="nav nav-pills mb-3 pt-40 sm:pt-20" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa-solid fa-city"></i> City</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa-solid fa-person-biking"></i> Outdoors</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="fa-regular fa-heart"></i> Romance</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false"><i class="fa-solid fa-umbrella-beach"></i> Beach</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="owl-carousel owl-theme explore-destination-swiper pt-40 sm:pt-20">
                    <div class="item">
                        <img
                            src="https://plus.unsplash.com/premium_photo-1661919589683-f11880119fb7?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZGVsaGl8ZW58MHx8MHx8fDA%3D">
                        <div class="mt-10">
                            <h5>New Delhi</h5>
                            <p>2,921 properties</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="https://t3.ftcdn.net/jpg/05/31/84/94/360_F_531849499_KF0e9rhJR7xXPqPLQPuVI2f7xn7GBnRQ.jpg">
                        <div class="mt-10">
                            <h5>Gurgaon</h5>
                            <p>Properties</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="https://t3.ftcdn.net/jpg/03/32/17/60/360_F_332176058_0uzsyxpVcODllUAWMG2DmbwS0CqBWqYM.jpg">
                        <div class="mt-10">
                            <h5>Noida</h5>
                            <p>Properties</p>
                        </div>
                    </div>
                    <div class="item">
                        <img
                            src="https://static.toiimg.com/thumb/msid-105717782,width-748,height-499,resizemode=4,imgsize-107610/.jpg">
                        <div class="mt-10">
                            <h5>Agra</h5>
                            <p>Properties</p>
                        </div>
                    </div>
                    <div class="item">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/4/41/East_facade_Hawa_Mahal_Jaipur_from_ground_level_%28July_2022%29_-_img_01.jpg">
                        <div class="mt-10">
                            <h5>Jaipur</h5>
                            <p>Properties</p>
                        </div>
                    </div>
                    <div class="item">
                        <img
                            src="https://media.istockphoto.com/id/535168027/photo/india-goa-palolem-beach.jpg?s=612x612&w=0&k=20&c=iGV1Ue0Efj87dQirWnUpZVG1dNobUjfVvMGdKHTJ7Qg=">
                        <div class="mt-10">
                            <h5>Goa</h5>
                            <p>Properties</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="owl-carousel owl-theme explore-destination-swiper pt-40 sm:pt-20">
                    <div class="item">
                        <img
                            src="https://plus.unsplash.com/premium_photo-1661919589683-f11880119fb7?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZGVsaGl8ZW58MHx8MHx8fDA%3D">
                        <div class="mt-10">
                            <h5>New Delhi</h5>
                            <p>2,921 properties</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="https://t3.ftcdn.net/jpg/05/31/84/94/360_F_531849499_KF0e9rhJR7xXPqPLQPuVI2f7xn7GBnRQ.jpg">
                        <div class="mt-10">
                            <h5>Gurgaon</h5>
                            <p>Properties</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="https://t3.ftcdn.net/jpg/03/32/17/60/360_F_332176058_0uzsyxpVcODllUAWMG2DmbwS0CqBWqYM.jpg">
                        <div class="mt-10">
                            <h5>Noida</h5>
                            <p>Properties</p>
                        </div>
                    </div>
                    <div class="item">
                        <img
                            src="https://static.toiimg.com/thumb/msid-105717782,width-748,height-499,resizemode=4,imgsize-107610/.jpg">
                        <div class="mt-10">
                            <h5>Agra</h5>
                            <p>Properties</p>
                        </div>
                    </div>
                    <div class="item">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/4/41/East_facade_Hawa_Mahal_Jaipur_from_ground_level_%28July_2022%29_-_img_01.jpg">
                        <div class="mt-10">
                            <h5>Jaipur</h5>
                            <p>Properties</p>
                        </div>
                    </div>
                    <div class="item">
                        <img
                            src="https://media.istockphoto.com/id/535168027/photo/india-goa-palolem-beach.jpg?s=612x612&w=0&k=20&c=iGV1Ue0Efj87dQirWnUpZVG1dNobUjfVvMGdKHTJ7Qg=">
                        <div class="mt-10">
                            <h5>Goa</h5>
                            <p>Properties</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                <div class="owl-carousel owl-theme explore-destination-swiper pt-40 sm:pt-20">
                    <div class="item">
                        <img
                            src="https://plus.unsplash.com/premium_photo-1661919589683-f11880119fb7?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8ZGVsaGl8ZW58MHx8MHx8fDA%3D">
                        <div class="mt-10">
                            <h5>New Delhi</h5>
                            <p>2,921 properties</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="https://t3.ftcdn.net/jpg/05/31/84/94/360_F_531849499_KF0e9rhJR7xXPqPLQPuVI2f7xn7GBnRQ.jpg">
                        <div class="mt-10">
                            <h5>Gurgaon</h5>
                            <p>Properties</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="https://t3.ftcdn.net/jpg/03/32/17/60/360_F_332176058_0uzsyxpVcODllUAWMG2DmbwS0CqBWqYM.jpg">
                        <div class="mt-10">
                            <h5>Noida</h5>
                            <p>Properties</p>
                        </div>
                    </div>
                    <div class="item">
                        <img
                            src="https://static.toiimg.com/thumb/msid-105717782,width-748,height-499,resizemode=4,imgsize-107610/.jpg">
                        <div class="mt-10">
                            <h5>Agra</h5>
                            <p>Properties</p>
                        </div>
                    </div>
                    <div class="item">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/4/41/East_facade_Hawa_Mahal_Jaipur_from_ground_level_%28July_2022%29_-_img_01.jpg">
                        <div class="mt-10">
                            <h5>Jaipur</h5>
                            <p>Properties</p>
                        </div>
                    </div>
                    <div class="item">
                        <img
                            src="https://media.istockphoto.com/id/535168027/photo/india-goa-palolem-beach.jpg?s=612x612&w=0&k=20&c=iGV1Ue0Efj87dQirWnUpZVG1dNobUjfVvMGdKHTJ7Qg=">
                        <div class="mt-10">
                            <h5>Goa</h5>
                            <p>Properties</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
        </div>
    </div>
</section>




<section class="layout-pt-md car-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 mb-20">
                <div class="mission-content">
                    <h1 class="rq-title">Flight Booking
                        <i class="rq-line"></i>
                    </h1>
                    <p class="mission-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <a href="{{ route('booking') }}" class="btn">Book Now</a>
                </div>
            </div>
            <div class="col-md-6 col-12 mb-20">
                <img src="front/img/flights/plane.gif" class="flight-gif">
            </div>
        </div>
    </div>
</section>













<section class="layout-pt-md layout-pb-md">
    <div class="container">
        <div class="sectionTitle -md">
            <h2 class="sectionTitle__title">Deals for the weekend</h2>
            <p class=" sectionTitle__text mt-5 sm:mt-0">Save on stays for 23 August - 25 August
            </p>
        </div>


        <div class="owl-carousel owl-theme deal-property-swiper pt-40 sm:pt-20">
            <div class="item">
                <div class="hotelsCard -type-1 ">
                    <div class="hotelsCard__image">
                        <div class="cardImage ratio ratio-1:1">
                            <div class="cardImage__content">
                                <img class="rounded-4 col-12" src="{{ asset('front/img/hotels/1.png') }}"
                                    alt="image">
                            </div>
                            <div class="cardImage__wishlist">
                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                    <i class="icon-heart text-12"></i>
                                </button>
                            </div>
                            <div class="cardImage__leftBadge">
                                <div
                                    class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                                    Breakfast included
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hotelsCard__content mt-10">
                        <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                            <span>The Montcalm At Brewery London City</span>
                        </h4>
                        <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>
                        <div class="d-flex items-center mt-20">
                            <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8
                            </div>
                            <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                            <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                        </div>
                        <div class="mt-5">
                            <div class="fw-500">
                                Starting from <span class="text-blue-1">US$72</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>









<section class="layout-pt-md car-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 mb-20">
                <div class="mission-content">
                    <h1 class="rq-title">Car Booking
                        <i class="rq-line"></i>


                    </h1>
                    <p class="mission-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>

                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>


            <div class="col-md-6 col-12 mb-20">
                <div class="owl-carousel owl-theme car-booking">
                    <div class="item">
                        <img src="front/img/cars/slider-car1.png">


                    </div>
                </div>
            </div>



        </div>
    </div>


</section>










<section class="layout-pt-md layout-pb-md">
    <div class="container">
        <div class="row y-gap-20">
            <div data-anim="slide-up" class="col-md-6">
                <div class="ctaCard -type-1 rounded-4 ">
                    <div class="ctaCard__image ratio ratio-63:55">
                        <img class="img-ratio js-lazy" src="#"
                            data-src="{{ asset('front/img/backgrounds/1.png') }}" alt="image">
                    </div>
                    <div class="ctaCard__content py-70 px-70 lg:py-30 lg:px-20">
                        <h4 class="text-40 lg:text-26 text-white">Things to do on<br> your trip</h4>
                        <div class="d-inline-block mt-30">
                            <a href="#"
                                class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Experiences</a>
                        </div>
                    </div>
                </div>
            </div>
            <div data-anim="slide-up delay-1" class="col-md-6">
                <div class="ctaCard -type-1 rounded-4 ">
                    <div class="ctaCard__image ratio ratio-63:55">
                        <img class="img-ratio js-lazy" src="#"
                            data-src="{{ asset('front/img/backgrounds/2.png') }}" alt="image">
                    </div>
                    <div class="ctaCard__content py-70 px-70 lg:py-30 lg:px-20">
                        <div class="text-15 fw-500 text-white mb-10">Enjoy Summer Deals</div>
                        <h4 class="text-40 lg:text-26 text-white">Up to 70% Discount!</h4>
                        <div class="d-inline-block mt-30">
                            <a href="#" class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Learn
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md car-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 mb-20">
                <div class="mission-content">
                    <h1 class="rq-title">Bike Rental
                        <i class="rq-line"></i>
                    </h1>
                    <p class="mission-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <a href="{{ route('booking') }}" class="btn">Book Now</a>
                </div>
            </div>
            <div class="col-md-6 col-12 mb-20">
                <img src="front/img/bike/Bike.png" class="bike-gif">
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-md hotel-recommendation">
    <div data-anim="slide-up delay-1" class="container">
        <div class="row y-gap-10 justify-between items-end">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Recommended</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
                </div>
            </div>
            <div class="col-sm-auto">
                <div class="dropdown js-dropdown js-hotel-active">
                    <div class="dropdown__button d-flex items-center rounded-4 border-light justify-between text-16 fw-500 px-20 h-50 w-140 sm:w-full text-14"
                        data-el-toggle=".js-hotel-toggle" data-el-toggle-active=".js-hotel-active">
                        <span class="js-dropdown-title">Hotel</span>
                        <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
                    </div>
                    <div class="toggle-element -dropdown  js-click-dropdown js-hotel-toggle">
                        <div class="text-14 y-gap-15 js-dropdown-list">
                            <div><a href="#" class="d-block js-dropdown-link">Animation</a></div>
                            <div><a href="#" class="d-block js-dropdown-link">Design</a></div>
                            <div><a href="#" class="d-block js-dropdown-link">Illustration</a></div>
                            <div><a href="#" class="d-block js-dropdown-link">Lifestyle</a></div>
                            <div><a href="#" class="d-block js-dropdown-link">Business</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative overflow-hidden pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar
            data-slider-cols="xl-4 lg-3 md-2 sm-2 base-1" data-nav-prev="js-hotels-prev"
            data-pagination="js-hotels-pag" data-nav-next="js-hotels-next">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#!" class="hotelsCard -type-1 ">
                        <div class="hotelsCard__image">
                            <div class="cardImage ratio ratio-1:1">
                                <div class="cardImage__content">
                                    <img class="rounded-4 col-12" src="{{ asset('front/img/hotels/1.png') }}"
                                        alt="image">
                                </div>
                                <div class="cardImage__wishlist">
                                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                        <i class="icon-heart text-12"></i>
                                    </button>
                                </div>
                                <div class="cardImage__leftBadge">
                                    <div
                                        class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                                        Breakfast included
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hotelsCard__content mt-10">
                            <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                                <span>The Montcalm At Brewery London City</span>
                            </h4>
                            <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>
                            <div class="d-flex items-center mt-20">
                                <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8
                                </div>
                                <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                                <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                            </div>
                            <div class="mt-5">
                                <div class="fw-500">
                                    Starting from <span class="text-blue-1">US$72</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#!" class="hotelsCard -type-1 ">
                        <div class="hotelsCard__image">
                            <div class="cardImage ratio ratio-1:1">
                                <div class="cardImage__content">
                                    <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="col-12" src="{{ asset('front/img/hotels/2.png') }}"
                                                    alt="image">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="col-12" src="{{ asset('front/img/hotels/1.png') }}"
                                                    alt="image">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="col-12" src="{{ asset('front/img/hotels/3.png') }}"
                                                    alt="image">
                                            </div>
                                        </div>
                                        <div class="cardImage-slider__pagination js-pagination"></div>
                                        <div class="cardImage-slider__nav -prev">
                                            <button
                                                class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                                                <i class="icon-chevron-left text-10"></i>
                                            </button>
                                        </div>
                                        <div class="cardImage-slider__nav -next">
                                            <button
                                                class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                                                <i class="icon-chevron-right text-10"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="cardImage__wishlist">
                                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                        <i class="icon-heart text-12"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="hotelsCard__content mt-10">
                            <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                                <span>Staycity Aparthotels Deptford Bridge Station</span>
                            </h4>
                            <p class="text-light-1 lh-14 text-14 mt-5">Ciutat Vella, Barcelona</p>
                            <div class="d-flex items-center mt-20">
                                <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8
                                </div>
                                <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                                <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                            </div>
                            <div class="mt-5">
                                <div class="fw-500">
                                    Starting from <span class="text-blue-1">US$72</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#!" class="hotelsCard -type-1 ">
                        <div class="hotelsCard__image">
                            <div class="cardImage ratio ratio-1:1">
                                <div class="cardImage__content">
                                    <img class="rounded-4 col-12" src="{{ asset('front/img/hotels/3.png') }}"
                                        alt="image">
                                </div>
                                <div class="cardImage__wishlist">
                                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                        <i class="icon-heart text-12"></i>
                                    </button>
                                </div>
                                <div class="cardImage__leftBadge">
                                    <div
                                        class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                                        Best Seller
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hotelsCard__content mt-10">
                            <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                                <span>The Westin New York at Times Square</span>
                            </h4>
                            <p class="text-light-1 lh-14 text-14 mt-5">Manhattan, New York</p>
                            <div class="d-flex items-center mt-20">
                                <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8
                                </div>
                                <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                                <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                            </div>
                            <div class="mt-5">
                                <div class="fw-500">
                                    Starting from <span class="text-blue-1">US$72</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#!" class="hotelsCard -type-1 ">
                        <div class="hotelsCard__image">
                            <div class="cardImage ratio ratio-1:1">
                                <div class="cardImage__content">
                                    <img class="rounded-4 col-12" src="{{ asset('front/img/hotels/4.png') }}"
                                        alt="image">
                                </div>
                                <div class="cardImage__wishlist">
                                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                        <i class="icon-heart text-12"></i>
                                    </button>
                                </div>
                                <div class="cardImage__leftBadge">
                                    <div
                                        class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                                        Top Rated
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hotelsCard__content mt-10">
                            <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                                <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                            </h4>
                            <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>
                            <div class="d-flex items-center mt-20">
                                <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8
                                </div>
                                <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                                <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                            </div>
                            <div class="mt-5">
                                <div class="fw-500">
                                    Starting from <span class="text-blue-1">US$72</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#!" class="hotelsCard -type-1 ">
                        <div class="hotelsCard__image">
                            <div class="cardImage ratio ratio-1:1">
                                <div class="cardImage__content">
                                    <img class="rounded-4 col-12" src="{{ asset('front/img/hotels/1.png') }}"
                                        alt="image">
                                </div>
                                <div class="cardImage__wishlist">
                                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                        <i class="icon-heart text-12"></i>
                                    </button>
                                </div>
                                <div class="cardImage__leftBadge">
                                    <div
                                        class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                                        Breakfast included
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hotelsCard__content mt-10">
                            <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                                <span>The Montcalm At Brewery London City</span>
                            </h4>
                            <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>
                            <div class="d-flex items-center mt-20">
                                <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8
                                </div>
                                <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                                <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                            </div>
                            <div class="mt-5">
                                <div class="fw-500">
                                    Starting from <span class="text-blue-1">US$72</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#!" class="hotelsCard -type-1 ">
                        <div class="hotelsCard__image">
                            <div class="cardImage ratio ratio-1:1">
                                <div class="cardImage__content">
                                    <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="col-12" src="{{ asset('front/img/hotels/2.png') }}"
                                                    alt="image">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="col-12" src="{{ asset('front/img/hotels/1.png') }}"
                                                    alt="image">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="col-12" src="{{ asset('front/img/hotels/3.png') }}"
                                                    alt="image">
                                            </div>
                                        </div>
                                        <div class="cardImage-slider__pagination js-pagination"></div>
                                        <div class="cardImage-slider__nav -prev">
                                            <button
                                                class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                                                <i class="icon-chevron-left text-10"></i>
                                            </button>
                                        </div>
                                        <div class="cardImage-slider__nav -next">
                                            <button
                                                class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                                                <i class="icon-chevron-right text-10"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="cardImage__wishlist">
                                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                        <i class="icon-heart text-12"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="hotelsCard__content mt-10">
                            <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                                <span>Staycity Aparthotels Deptford Bridge Station</span>
                            </h4>
                            <p class="text-light-1 lh-14 text-14 mt-5">Ciutat Vella, Barcelona</p>
                            <div class="d-flex items-center mt-20">
                                <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8
                                </div>
                                <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                                <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                            </div>
                            <div class="mt-5">
                                <div class="fw-500">
                                    Starting from <span class="text-blue-1">US$72</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#!" class="hotelsCard -type-1 ">
                        <div class="hotelsCard__image">
                            <div class="cardImage ratio ratio-1:1">
                                <div class="cardImage__content">
                                    <img class="rounded-4 col-12" src="{{ asset('front/img/hotels/3.png') }}"
                                        alt="image">
                                </div>
                                <div class="cardImage__wishlist">
                                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                        <i class="icon-heart text-12"></i>
                                    </button>
                                </div>
                                <div class="cardImage__leftBadge">
                                    <div
                                        class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                                        Best Seller
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hotelsCard__content mt-10">
                            <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                                <span>The Westin New York at Times Square</span>
                            </h4>
                            <p class="text-light-1 lh-14 text-14 mt-5">Manhattan, New York</p>
                            <div class="d-flex items-center mt-20">
                                <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8
                                </div>
                                <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                                <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                            </div>
                            <div class="mt-5">
                                <div class="fw-500">
                                    Starting from <span class="text-blue-1">US$72</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#!" class="hotelsCard -type-1 ">
                        <div class="hotelsCard__image">
                            <div class="cardImage ratio ratio-1:1">
                                <div class="cardImage__content">
                                    <img class="rounded-4 col-12" src="{{ asset('front/img/hotels/4.png') }}"
                                        alt="image">
                                </div>
                                <div class="cardImage__wishlist">
                                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                        <i class="icon-heart text-12"></i>
                                    </button>
                                </div>
                                <div class="cardImage__leftBadge">
                                    <div
                                        class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">
                                        Top Rated
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hotelsCard__content mt-10">
                            <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                                <span>DoubleTree by Hilton Hotel New York Times Square West</span>
                            </h4>
                            <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>
                            <div class="d-flex items-center mt-20">
                                <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">4.8
                                </div>
                                <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                                <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                            </div>
                            <div class="mt-5">
                                <div class="fw-500">
                                    Starting from <span class="text-blue-1">US$72</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="d-flex x-gap-15 items-center justify-center pt-40 sm:pt-20">
                <div class="col-auto">
                    <button class="d-flex items-center text-24 arrow-left-hover js-hotels-prev">
                        <i class="icon icon-arrow-left"></i>
                    </button>
                </div>
                <div class="col-auto">
                    <div class="pagination -dots text-border js-hotels-pag"></div>
                </div>
                <div class="col-auto">
                    <button class="d-flex items-center text-24 arrow-right-hover js-hotels-next">
                        <i class="icon icon-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="layout-pt-md car-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 mb-20">
                <div class="mission-content">
                    <h1 class="rq-title">Train Booking
                        <i class="rq-line"></i>


                    </h1>
                    <p class="mission-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>

                    <a href="#" class="btn">Book Now</a>
                </div>
            </div>


            <div class="col-md-6 col-12 mb-20">
                <img src="front/img/train/train.png" class="flight-gif">
            </div>



        </div>
    </div>


</section>











<section class="layout-pt-md layout-pb-lg">
    <div data-anim-wrap class="container">
        <div class="row y-gap-20 justify-between">
            <div data-anim-child="slide-up delay-1" class="col-lg-3 col-sm-6">
                <div class="featureIcon -type-1 ">
                    <div class="d-flex justify-center">
                        <img src="#" data-src="{{ asset('front/img/featureIcons/1/1.svg') }}"
                            alt="image" class="js-lazy">
                    </div>
                    <div class="text-center mt-30">
                        <h4 class="text-18 fw-500">Best Price Guarantee</h4>
                        <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div data-anim-child="slide-up delay-2" class="col-lg-3 col-sm-6">
                <div class="featureIcon -type-1 ">
                    <div class="d-flex justify-center">
                        <img src="#" data-src="{{ asset('front/img/featureIcons/1/2.svg') }}"
                            alt="image" class="js-lazy">
                    </div>
                    <div class="text-center mt-30">
                        <h4 class="text-18 fw-500">Easy & Quick Booking</h4>
                        <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div data-anim-child="slide-up delay-3" class="col-lg-3 col-sm-6">
                <div class="featureIcon -type-1 ">
                    <div class="d-flex justify-center">
                        <img src="#" data-src="{{ asset('front/img/featureIcons/1/3.svg') }}"
                            alt="image" class="js-lazy">
                    </div>
                    <div class="text-center mt-30">
                        <h4 class="text-18 fw-500">Customer Care 24/7</h4>
                        <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md car-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 mb-20">
                <div class="mission-content">
                    <h1 class="rq-title">Clock-Wise Room
                        <i class="rq-line"></i>
                    </h1>
                    <p class="mission-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <a href="{{ route('booking') }}" class="btn">Book Now</a>
                </div>
            </div>
            <div class="col-md-6 col-12 mb-20">
                <img src="front/img/hotels/ClockWiseHotel.jpg" class="ml-sm-50">
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-lg layout-pb-lg bg-lightRed-2">
    <div data-anim-wrap class="container">
        <div class="row y-gap-40 justify-between">
            <div data-anim-child="slide-up delay-1" class="col-xl-5 col-lg-6">
                <h2 class="text-30">What our customers are<br> saying us?</h2>
                <p class="mt-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius tortor
                    nibh, sit amet tempor nibh finibus et. Aenean eu enim justo.</p>
                <div class="row y-gap-30 pt-60 lg:pt-40">
                    <div class="col-sm-5 col-6">
                        <div class="text-30 lh-15 fw-600">13m+</div>
                        <div class="text-light-1 lh-15">Happy People</div>
                    </div>
                    <div class="col-sm-5 col-6">
                        <div class="text-30 lh-15 fw-600">4.88</div>
                        <div class="text-light-1 lh-15">Overall rating</div>
                        <div class="d-flex x-gap-5 items-center pt-10">
                            <div class="icon-star text-blue-1 text-10"></div>
                            <div class="icon-star text-blue-1 text-10"></div>
                            <div class="icon-star text-blue-1 text-10"></div>
                            <div class="icon-star text-blue-1 text-10"></div>
                            <div class="icon-star text-blue-1 text-10"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-anim-child="slide-up delay-2" class="col-lg-6">
                <div class="overflow-hidden js-testimonials-slider-3" data-scrollbar>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row items-center x-gap-30 y-gap-20">
                                <div class="col-auto">
                                    <img src="#" data-src="{{ asset('front/img/avatars/1.png') }}"
                                        alt="image" class="js-lazy">
                                </div>
                                <div class="col-auto">
                                    <h5 class="text-16 fw-500">Annette Black</h5>
                                    <div class="text-15 text-light-1 lh-15">UX / UI Designer</div>
                                </div>
                            </div>
                            <p class="text-18 fw-500 text-dark-1 mt-30 sm:mt-20">The place is in a great location in
                                Gumbet. The area is safe and beautiful. The apartment was comfortable and the host was
                                kind and responsive to our requests.</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="row items-center x-gap-30 y-gap-20">
                                <div class="col-auto">
                                    <img src="#" data-src="{{ asset('front/img/avatars/1.png') }}"
                                        alt="image" class="js-lazy">
                                </div>
                                <div class="col-auto">
                                    <h5 class="text-16 fw-500">Annette Black</h5>
                                    <div class="text-15 text-light-1 lh-15">UX / UI Designer</div>
                                </div>
                            </div>
                            <p class="text-18 fw-500 text-dark-1 mt-30 sm:mt-20">The place is in a great location in
                                Gumbet. The area is safe and beautiful. The apartment was comfortable and the host was
                                kind and responsive to our requests.</p>
                        </div>
                        <div class="swiper-slide">
                            <div class="row items-center x-gap-30 y-gap-20">
                                <div class="col-auto">
                                    <img src="#" data-src="{{ asset('front/img/avatars/1.png') }}"
                                        alt="image" class="js-lazy">
                                </div>
                                <div class="col-auto">
                                    <h5 class="text-16 fw-500">Annette Black</h5>
                                    <div class="text-15 text-light-1 lh-15">UX / UI Designer</div>
                                </div>
                            </div>
                            <p class="text-18 fw-500 text-dark-1 mt-30 sm:mt-20">The place is in a great location in
                                Gumbet. The area is safe and beautiful. The apartment was comfortable and the host was
                                kind and responsive to our requests.</p>
                        </div>
                    </div>
                    <div class="d-flex items-center mt-60 sm:mt-20 js-testimonials-slider-pag">
                        <div class="text-dark-1 fw-500 js-current">01</div>
                        <div class="slider-scrollbar bg-border ml-20 mr-20 w-max-300 js-scrollbar"></div>
                        <div class="text-dark-1 fw-500 js-all">05</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md car-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 mb-20">
                <div class="mission-content">
                    <h1 class="rq-title">Travel On EMI
                        <i class="rq-line"></i>
                    </h1>
                    <p class="mission-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <a href="{{ route('booking') }}" class="btn">Book Now</a>
                </div>
            </div>
            <div class="col-md-6 col-12 mb-20">
                <img src="front/img/hotels/travelOnEmi.jpg" class="ml-sm-50">
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-lg layout-pb-md">
    <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Get inspiration for your next trip</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames</p>
                </div>
            </div>
        </div>
        <div class="row y-gap-30 pt-40">
            <div data-anim-child="slide-left delay-1" class="col-lg-4 col-sm-6">
                <a href="#" class="blogCard -type-1 d-block ">
                    <div class="blogCard__image">
                        <div class="ratio ratio-4:3 rounded-4 rounded-8">
                            <img class="img-ratio js-lazy" src="#"
                                data-src="{{ asset('front/img/blog/1.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="mt-20">
                        <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this
                            winter</h4>
                        <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                    </div>
                </a>
            </div>
            <div data-anim-child="slide-left delay-2" class="col-lg-4 col-sm-6">
                <a href="#" class="blogCard -type-1 d-block ">
                    <div class="blogCard__image">
                        <div class="ratio ratio-4:3 rounded-4 rounded-8">
                            <img class="img-ratio js-lazy" src="#"
                                data-src="{{ asset('front/img/blog/2.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="mt-20">
                        <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an
                            uncertain time</h4>
                        <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                    </div>
                </a>
            </div>
            <div data-anim-child="slide-left delay-3" class="col-lg-4 col-sm-6">
                <a href="#" class="blogCard -type-1 d-block ">
                    <div class="blogCard__image">
                        <div class="ratio ratio-4:3 rounded-4 rounded-8">
                            <img class="img-ratio js-lazy" src="#"
                                data-src="{{ asset('front/img/blog/1.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="mt-20">
                        <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right
                            now</h4>
                        <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-lg">
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Destinations we love</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
                </div>
            </div>
        </div>
        <div class="tabs -pills pt-40 js-tabs">
            <div class="tabs__controls d-flex js-tabs-controls">
                <div>
                    <button class="tabs__button fw-500 text-15 px-20 py-15 rounded-4 js-tabs-button is-tab-el-active"
                        data-tab-target=".-tab-item-1">Regions</button>
                </div>
                <div>
                    <button class="tabs__button fw-500 text-15 px-20 py-15 rounded-4 js-tabs-button "
                        data-tab-target=".-tab-item-2">Cities</button>
                </div>
                <div>
                    <button class="tabs__button fw-500 text-15 px-20 py-15 rounded-4 js-tabs-button "
                        data-tab-target=".-tab-item-3">Places of interest</button>
                </div>
            </div>
            <div class="tabs__content pt-30 js-tabs-content">
                <div class="tabs__pane -tab-item-1 is-tab-el-active">
                    <div class="row y-gap-20">
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Hawai</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Istanbul</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">San Diego</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Phuket</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Reykjavik</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Santorini</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Los Angeles</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">İbiza</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Boston</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Florence</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Mykonos</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">London</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Paris</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Dubai</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Krakow</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Jersey</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Prag</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Amsterdam</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Rome</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Miami</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tabs__pane -tab-item-2 ">
                    <div class="row y-gap-20">
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Hawai</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Istanbul</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">San Diego</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Phuket</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Reykjavik</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Santorini</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Los Angeles</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">İbiza</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Boston</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Florence</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Mykonos</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">London</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Paris</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Dubai</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Krakow</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Jersey</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Prag</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Amsterdam</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Rome</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Miami</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tabs__pane -tab-item-3 ">
                    <div class="row y-gap-20">
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Hawai</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Istanbul</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">San Diego</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Phuket</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Reykjavik</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Santorini</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Los Angeles</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">İbiza</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Boston</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Florence</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Mykonos</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">London</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Paris</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Dubai</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Krakow</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Jersey</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Prag</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Amsterdam</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Rome</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Miami</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-md bg-red-2">
    <div class="container">
        <div class="row y-gap-30 justify-between items-center">
            <div class="col-md-auto">
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
            <div class="col-md-auto">
                <div class="single-field -w-410 d-flex x-gap-10 y-gap-20">
                    <div>
                        <input class="bg-white h-60" type="text" placeholder="Your Email">
                    </div>
                    <div>
                        <button class="button px-20 py-20 fw-400 text-16 -white bg-white h-100 text-dark-1">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                }, 300); // Delay to allow for user input
            } else {
                $('#result').html(''); // Clear result if input is less than 1 character
            }
        });

        // Handle click on result item
        $('#result').on('click', '.result-item', function() {
            var address = $(this).data('address');
            $('#location').val(address); // Update input field with selected address
            $('#result').html(''); // Clear results
        });
    });

    $(document).ready(function() {
        alert("rtgijiotj");
    const $adultCountDisplay = $('.js-count-adult');
    const $childCountDisplay = $('.js-count-child');
    const $roomCountDisplay = $('.js-count-room');

    const $adultUpButton = $('.js-up[data-value-change=".js-count-adult"]');
    const $adultDownButton = $('.js-down[data-value-change=".js-count-adult"]');
    
    const $childUpButton = $('.js-up[data-value-change=".js-count-child"]');
    const $childDownButton = $('.js-down[data-value-change=".js-count-child"]');
    
    const $roomUpButton = $('.js-up[data-value-change=".js-count-room"]');
    const $roomDownButton = $('.js-down[data-value-change=".js-count-room"]');

    let adultCount = 2;
    let childCount = 1;
    let roomCount = 1;

    // Update display
    function updateDisplay() {
        $adultCountDisplay.text(adultCount);
        $childCountDisplay.text(childCount);
        $roomCountDisplay.text(roomCount);
    }

    // Adult counter
    $adultUpButton.on('click', function() {
        adultCount++;
        updateDisplay();
    });

    $adultDownButton.on('click', function() {
        if (adultCount > 1) {
            adultCount--;
            updateDisplay();
        }
    });

    // Child counter
    $childUpButton.on('click', function() {
        childCount++;
        updateDisplay();
    });

    $childDownButton.on('click', function() {
        if (childCount > 0) {
            childCount--;
            updateDisplay();
        }
    });

    // Room counter
    $roomUpButton.on('click', function() {
        roomCount++;
        updateDisplay();
    });

    $roomDownButton.on('click', function() {
        if (roomCount > 1) {
            roomCount--;
            updateDisplay();
        }
    });

    // Initial display
    updateDisplay();
});

</script>









@endsection