@extends('front.layout.app');
@section('content')
<style>
    .pricing .noUi-base:first-of-type {
        display: none;
    }
</style>
<section class="pt-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h1 class="text-30 fw-600 mt-20">Rental Bikes</h1>
                </div>

                <div class="mainSearch -col-5 border-light bg-white px-20 py-20 lg:px-20 lg:pt-5 lg:pb-20 rounded-4 mt-30">
                    <div class="button-grid items-center">

                        <div class="searchMenu-loc pr-30 pl-10 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                            <div data-x-dd-click="searchMenu-loc">
                                <h4 class="text-15 fw-500 ls-2 lh-16">Pick up location</h4>

                                <div class="text-15 text-light-1 ls-2 lh-16">
                                    <input autocomplete="off" type="search" placeholder="City or Airport" class="js-search js-dd-focus form-control p-0">
                                </div>
                            </div>


                            <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                                <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4">
                                    <div class="y-gap-5 js-results">

                                        <div>
                                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                <div class="d-flex">
                                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                    <div class="ml-10">
                                                        <div class="text-15 lh-12 fw-500 js-search-option-target">London</div>
                                                        <div class="text-14 lh-12 text-light-1 mt-5">Greater London, United Kingdom</div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                        <div>
                                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                <div class="d-flex">
                                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                    <div class="ml-10">
                                                        <div class="text-15 lh-12 fw-500 js-search-option-target">New York</div>
                                                        <div class="text-14 lh-12 text-light-1 mt-5">New York State, United States</div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                        <div>
                                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                <div class="d-flex">
                                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                    <div class="ml-10">
                                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Paris</div>
                                                        <div class="text-14 lh-12 text-light-1 mt-5">France</div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                        <div>
                                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                <div class="d-flex">
                                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                    <div class="ml-10">
                                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Madrid</div>
                                                        <div class="text-14 lh-12 text-light-1 mt-5">Spain</div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                        <div>
                                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                <div class="d-flex">
                                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                    <div class="ml-10">
                                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Santorini</div>
                                                        <div class="text-14 lh-12 text-light-1 mt-5">Greece</div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                            <div data-x-dd-click="searchMenu-loc">
                                <h4 class="text-15 fw-500 ls-2 lh-16">Drop off location</h4>

                                <div class="text-15 text-light-1 ls-2 lh-16">
                                    <input autocomplete="off" type="search" placeholder="City or Airport" class="js-search js-dd-focus form-control p-0">
                                </div>
                            </div>


                            <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                                <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4">
                                    <div class="y-gap-5 js-results">

                                        <div>
                                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                <div class="d-flex">
                                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                    <div class="ml-10">
                                                        <div class="text-15 lh-12 fw-500 js-search-option-target">London</div>
                                                        <div class="text-14 lh-12 text-light-1 mt-5">Greater London, United Kingdom</div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                        <div>
                                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                <div class="d-flex">
                                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                    <div class="ml-10">
                                                        <div class="text-15 lh-12 fw-500 js-search-option-target">New York</div>
                                                        <div class="text-14 lh-12 text-light-1 mt-5">New York State, United States</div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                        <div>
                                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                <div class="d-flex">
                                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                    <div class="ml-10">
                                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Paris</div>
                                                        <div class="text-14 lh-12 text-light-1 mt-5">France</div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                        <div>
                                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                <div class="d-flex">
                                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                    <div class="ml-10">
                                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Madrid</div>
                                                        <div class="text-14 lh-12 text-light-1 mt-5">Spain</div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                        <div>
                                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                                <div class="d-flex">
                                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                                    <div class="ml-10">
                                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Santorini</div>
                                                        <div class="text-14 lh-12 text-light-1 mt-5">Greece</div>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="searchMenu-date px-30 lg:py-20 lg:px-0 js-form-dd js-calendar js-calendar-el">

                            <div data-x-dd-click="searchMenu-date">
                                <h4 class="text-15 fw-500 ls-2 lh-16">Pick up</h4>

                                <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                    <span class="js-first-date">Wed 2 Mar</span>
                                    -
                                    <span class="js-last-date">Fri 11 Apr</span>
                                </div>
                            </div>


                            <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                                <div class="bg-white px-30 py-30 rounded-4">
                                    <div class="elCalendar js-calendar-el-calendar">
                                        <div class="elCalendar__slider js-calendar-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight">
                                            <div class="swiper-wrapper" id="swiper-wrapper-661010320917747643" aria-live="polite" style="height: 360px;">

                                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        january 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="1" data-week="Sun" data-month="jan" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>



                                                            <div data-index="2" data-week="Mon" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="3" data-week="Tue" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="4" data-week="Wed" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="5" data-week="Thu" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="6" data-week="Fri" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="7" data-week="Sat" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="8" data-week="Sun" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="9" data-week="Mon" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="10" data-week="Tue" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="11" data-week="Wed" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="12" data-week="Thu" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="13" data-week="Fri" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="14" data-week="Sat" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="15" data-week="Sun" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="16" data-week="Mon" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="17" data-week="Tue" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="18" data-week="Wed" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="19" data-week="Thu" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="20" data-week="Fri" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="21" data-week="Sat" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="22" data-week="Sun" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="23" data-week="Mon" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="24" data-week="Tue" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="25" data-week="Wed" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="26" data-week="Thu" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="27" data-week="Fri" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="28" data-week="Sat" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="29" data-week="Sun" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="30" data-week="Mon" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="31" data-week="Tue" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="32" data-week="Wed" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        february 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="33" data-week="Sun" data-month="feb" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="34" data-week="Mon" data-month="feb" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="35" data-week="Tue" data-month="feb" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="36" data-week="Wed" data-month="feb" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>



                                                            <div data-index="37" data-week="Thu" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="38" data-week="Fri" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="39" data-week="Sat" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="40" data-week="Sun" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="41" data-week="Mon" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="42" data-week="Tue" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="43" data-week="Wed" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="44" data-week="Thu" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="45" data-week="Fri" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="46" data-week="Sat" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="47" data-week="Sun" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="48" data-week="Mon" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="49" data-week="Tue" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="50" data-week="Wed" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="51" data-week="Thu" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="52" data-week="Fri" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="53" data-week="Sat" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="54" data-week="Sun" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="55" data-week="Mon" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="56" data-week="Tue" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="57" data-week="Wed" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="58" data-week="Thu" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="59" data-week="Fri" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="60" data-week="Sat" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="61" data-week="Sun" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="62" data-week="Mon" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="63" data-week="Tue" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="64" data-week="Wed" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="65" data-week="Thu" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="3 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        march 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="66" data-week="Sun" data-month="mar" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="67" data-week="Mon" data-month="mar" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="68" data-week="Tue" data-month="mar" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="69" data-week="Wed" data-month="mar" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="70" data-week="Thu" data-month="mar" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>



                                                            <div data-index="71" data-week="Fri" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="72" data-week="Sat" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="73" data-week="Sun" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="74" data-week="Mon" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="75" data-week="Tue" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="76" data-week="Wed" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="77" data-week="Thu" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="78" data-week="Fri" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="79" data-week="Sat" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="80" data-week="Sun" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="81" data-week="Mon" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="82" data-week="Tue" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="83" data-week="Wed" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="84" data-week="Thu" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="85" data-week="Fri" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="86" data-week="Sat" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="87" data-week="Sun" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="88" data-week="Mon" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="89" data-week="Tue" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="90" data-week="Wed" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="91" data-week="Thu" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="92" data-week="Fri" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="93" data-week="Sat" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="94" data-week="Sun" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="95" data-week="Mon" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="96" data-week="Tue" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="97" data-week="Wed" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="98" data-week="Thu" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="99" data-week="Fri" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="100" data-week="Sat" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="101" data-week="Sun" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="4 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        april 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="102" data-week="Sun" data-month="apr" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>



                                                            <div data-index="103" data-week="Mon" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="104" data-week="Tue" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="105" data-week="Wed" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="106" data-week="Thu" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="107" data-week="Fri" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="108" data-week="Sat" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="109" data-week="Sun" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="110" data-week="Mon" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="111" data-week="Tue" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="112" data-week="Wed" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="113" data-week="Thu" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="114" data-week="Fri" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="115" data-week="Sat" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="116" data-week="Sun" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="117" data-week="Mon" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="118" data-week="Tue" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="119" data-week="Wed" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="120" data-week="Thu" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="121" data-week="Fri" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="122" data-week="Sat" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="123" data-week="Sun" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="124" data-week="Mon" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="125" data-week="Tue" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="126" data-week="Wed" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="127" data-week="Thu" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="128" data-week="Fri" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="129" data-week="Sat" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="130" data-week="Sun" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="131" data-week="Mon" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="132" data-week="Tue" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="5 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        may 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="133" data-week="Sun" data-month="may" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="134" data-week="Mon" data-month="may" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="135" data-week="Tue" data-month="may" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>



                                                            <div data-index="136" data-week="Wed" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="137" data-week="Thu" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="138" data-week="Fri" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="139" data-week="Sat" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="140" data-week="Sun" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="141" data-week="Mon" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="142" data-week="Tue" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="143" data-week="Wed" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="144" data-week="Thu" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="145" data-week="Fri" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="146" data-week="Sat" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="147" data-week="Sun" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="148" data-week="Mon" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="149" data-week="Tue" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="150" data-week="Wed" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="151" data-week="Thu" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="152" data-week="Fri" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="153" data-week="Sat" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="154" data-week="Sun" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="155" data-week="Mon" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="156" data-week="Tue" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="157" data-week="Wed" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="158" data-week="Thu" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="159" data-week="Fri" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="160" data-week="Sat" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="161" data-week="Sun" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="162" data-week="Mon" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="163" data-week="Tue" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="164" data-week="Wed" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="165" data-week="Thu" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="166" data-week="Fri" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="6 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        june 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="167" data-week="Sun" data-month="jun" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="168" data-week="Mon" data-month="jun" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="169" data-week="Tue" data-month="jun" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="170" data-week="Wed" data-month="jun" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="171" data-week="Thu" data-month="jun" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="172" data-week="Fri" data-month="jun" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>



                                                            <div data-index="173" data-week="Sat" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="174" data-week="Sun" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="175" data-week="Mon" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="176" data-week="Tue" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="177" data-week="Wed" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="178" data-week="Thu" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="179" data-week="Fri" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="180" data-week="Sat" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="181" data-week="Sun" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="182" data-week="Mon" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="183" data-week="Tue" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="184" data-week="Wed" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="185" data-week="Thu" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="186" data-week="Fri" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="187" data-week="Sat" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="188" data-week="Sun" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="189" data-week="Mon" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="190" data-week="Tue" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="191" data-week="Wed" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="192" data-week="Thu" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="193" data-week="Fri" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="194" data-week="Sat" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="195" data-week="Sun" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="196" data-week="Mon" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="197" data-week="Tue" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="198" data-week="Wed" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="199" data-week="Thu" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="200" data-week="Fri" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="201" data-week="Sat" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="202" data-week="Sun" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="7 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        july 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="203" data-week="Sun" data-month="jul" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>



                                                            <div data-index="204" data-week="Mon" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="205" data-week="Tue" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="206" data-week="Wed" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="207" data-week="Thu" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="208" data-week="Fri" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="209" data-week="Sat" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="210" data-week="Sun" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="211" data-week="Mon" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="212" data-week="Tue" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="213" data-week="Wed" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="214" data-week="Thu" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="215" data-week="Fri" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="216" data-week="Sat" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="217" data-week="Sun" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="218" data-week="Mon" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="219" data-week="Tue" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="220" data-week="Wed" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="221" data-week="Thu" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="222" data-week="Fri" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="223" data-week="Sat" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="224" data-week="Sun" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="225" data-week="Mon" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="226" data-week="Tue" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="227" data-week="Wed" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="228" data-week="Thu" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="229" data-week="Fri" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="230" data-week="Sat" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="231" data-week="Sun" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="232" data-week="Mon" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="233" data-week="Tue" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="234" data-week="Wed" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="8 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        august 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="235" data-week="Sun" data-month="aug" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="236" data-week="Mon" data-month="aug" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="237" data-week="Tue" data-month="aug" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="238" data-week="Wed" data-month="aug" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>



                                                            <div data-index="239" data-week="Thu" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="240" data-week="Fri" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="241" data-week="Sat" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="242" data-week="Sun" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="243" data-week="Mon" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="244" data-week="Tue" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="245" data-week="Wed" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="246" data-week="Thu" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="247" data-week="Fri" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="248" data-week="Sat" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="249" data-week="Sun" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="250" data-week="Mon" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="251" data-week="Tue" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="252" data-week="Wed" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="253" data-week="Thu" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="254" data-week="Fri" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="255" data-week="Sat" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="256" data-week="Sun" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="257" data-week="Mon" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="258" data-week="Tue" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="259" data-week="Wed" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="260" data-week="Thu" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="261" data-week="Fri" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="262" data-week="Sat" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="263" data-week="Sun" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="264" data-week="Mon" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="265" data-week="Tue" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="266" data-week="Wed" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="267" data-week="Thu" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="268" data-week="Fri" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="269" data-week="Sat" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="9 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        september 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">



                                                            <div data-index="270" data-week="Sun" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="271" data-week="Mon" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="272" data-week="Tue" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="273" data-week="Wed" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="274" data-week="Thu" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="275" data-week="Fri" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="276" data-week="Sat" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="277" data-week="Sun" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="278" data-week="Mon" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="279" data-week="Tue" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="280" data-week="Wed" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="281" data-week="Thu" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="282" data-week="Fri" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="283" data-week="Sat" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="284" data-week="Sun" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="285" data-week="Mon" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="286" data-week="Tue" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="287" data-week="Wed" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="288" data-week="Thu" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="289" data-week="Fri" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="290" data-week="Sat" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="291" data-week="Sun" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="292" data-week="Mon" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="293" data-week="Tue" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="294" data-week="Wed" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="295" data-week="Thu" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="296" data-week="Fri" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="297" data-week="Sat" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="298" data-week="Sun" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="299" data-week="Mon" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="10 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        october 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="300" data-week="Sun" data-month="oct" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="301" data-week="Mon" data-month="oct" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>



                                                            <div data-index="302" data-week="Tue" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="303" data-week="Wed" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="304" data-week="Thu" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="305" data-week="Fri" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="306" data-week="Sat" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="307" data-week="Sun" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="308" data-week="Mon" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="309" data-week="Tue" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="310" data-week="Wed" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="311" data-week="Thu" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="312" data-week="Fri" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="313" data-week="Sat" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="314" data-week="Sun" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="315" data-week="Mon" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="316" data-week="Tue" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="317" data-week="Wed" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="318" data-week="Thu" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="319" data-week="Fri" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="320" data-week="Sat" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="321" data-week="Sun" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="322" data-week="Mon" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="323" data-week="Tue" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="324" data-week="Wed" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="325" data-week="Thu" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="326" data-week="Fri" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="327" data-week="Sat" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="328" data-week="Sun" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="329" data-week="Mon" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="330" data-week="Tue" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="331" data-week="Wed" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="332" data-week="Thu" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="11 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        november 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="333" data-week="Sun" data-month="nov" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="334" data-week="Mon" data-month="nov" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="335" data-week="Tue" data-month="nov" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="336" data-week="Wed" data-month="nov" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="337" data-week="Thu" data-month="nov" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>



                                                            <div data-index="338" data-week="Fri" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="339" data-week="Sat" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="340" data-week="Sun" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="341" data-week="Mon" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="342" data-week="Tue" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="343" data-week="Wed" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="344" data-week="Thu" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="345" data-week="Fri" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="346" data-week="Sat" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="347" data-week="Sun" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="348" data-week="Mon" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="349" data-week="Tue" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="350" data-week="Wed" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="351" data-week="Thu" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="352" data-week="Fri" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="353" data-week="Sat" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="354" data-week="Sun" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="355" data-week="Mon" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="356" data-week="Tue" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="357" data-week="Wed" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="358" data-week="Thu" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="359" data-week="Fri" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="360" data-week="Sat" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="361" data-week="Sun" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="362" data-week="Mon" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="363" data-week="Tue" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="364" data-week="Wed" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="365" data-week="Thu" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="366" data-week="Fri" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="367" data-week="Sat" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="12 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        december 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">



                                                            <div data-index="368" data-week="Sun" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="369" data-week="Mon" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="370" data-week="Tue" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="371" data-week="Wed" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="372" data-week="Thu" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="373" data-week="Fri" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="374" data-week="Sat" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="375" data-week="Sun" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="376" data-week="Mon" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="377" data-week="Tue" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="378" data-week="Wed" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="379" data-week="Thu" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="380" data-week="Fri" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="381" data-week="Sat" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="382" data-week="Sun" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="383" data-week="Mon" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="384" data-week="Tue" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="385" data-week="Wed" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="386" data-week="Thu" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="387" data-week="Fri" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="388" data-week="Sat" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="389" data-week="Sun" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="390" data-week="Mon" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="391" data-week="Tue" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="392" data-week="Wed" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="393" data-week="Thu" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="394" data-week="Fri" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="395" data-week="Sat" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="396" data-week="Sun" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="397" data-week="Mon" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="398" data-week="Tue" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <button class="elCalendar__sliderNav -prev flex-center js-calendar-slider-prev swiper-button-disabled" disabled="" tabindex="-1" aria-label="Previous slide" aria-controls="swiper-wrapper-661010320917747643" aria-disabled="true">
                                                <i class="icon icon-chevron-left text-14"></i>
                                            </button>

                                            <button class="elCalendar__sliderNav -next flex-center js-calendar-slider-next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-661010320917747643" aria-disabled="false">
                                                <i class="icon icon-chevron-right text-14"></i>
                                            </button>
                                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="searchMenu-date px-30 lg:py-20 lg:px-0 js-form-dd js-calendar js-calendar-el">

                            <div data-x-dd-click="searchMenu-date">
                                <h4 class="text-15 fw-500 ls-2 lh-16">Drop off</h4>

                                <div class="capitalize text-15 text-light-1 ls-2 lh-16">
                                    <span class="js-first-date">Wed 2 Mar</span>
                                    -
                                    <span class="js-last-date">Fri 11 Apr</span>
                                </div>
                            </div>


                            <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                                <div class="bg-white px-30 py-30 rounded-4">
                                    <div class="elCalendar js-calendar-el-calendar">
                                        <div class="elCalendar__slider js-calendar-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight">
                                            <div class="swiper-wrapper" id="swiper-wrapper-9a1b3bc7caacca3e" aria-live="polite" style="height: 360px;">

                                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        january 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="1" data-week="Sun" data-month="jan" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>



                                                            <div data-index="2" data-week="Mon" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="3" data-week="Tue" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="4" data-week="Wed" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="5" data-week="Thu" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="6" data-week="Fri" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="7" data-week="Sat" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="8" data-week="Sun" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="9" data-week="Mon" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="10" data-week="Tue" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="11" data-week="Wed" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="12" data-week="Thu" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="13" data-week="Fri" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="14" data-week="Sat" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="15" data-week="Sun" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="16" data-week="Mon" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="17" data-week="Tue" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="18" data-week="Wed" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="19" data-week="Thu" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="20" data-week="Fri" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="21" data-week="Sat" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="22" data-week="Sun" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="23" data-week="Mon" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="24" data-week="Tue" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="25" data-week="Wed" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="26" data-week="Thu" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="27" data-week="Fri" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="28" data-week="Sat" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="29" data-week="Sun" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="30" data-week="Mon" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="31" data-week="Tue" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="32" data-week="Wed" data-month="jan" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        february 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="33" data-week="Sun" data-month="feb" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="34" data-week="Mon" data-month="feb" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="35" data-week="Tue" data-month="feb" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="36" data-week="Wed" data-month="feb" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>



                                                            <div data-index="37" data-week="Thu" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="38" data-week="Fri" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="39" data-week="Sat" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="40" data-week="Sun" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="41" data-week="Mon" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="42" data-week="Tue" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="43" data-week="Wed" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="44" data-week="Thu" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="45" data-week="Fri" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="46" data-week="Sat" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="47" data-week="Sun" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="48" data-week="Mon" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="49" data-week="Tue" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="50" data-week="Wed" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="51" data-week="Thu" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="52" data-week="Fri" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="53" data-week="Sat" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="54" data-week="Sun" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="55" data-week="Mon" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="56" data-week="Tue" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="57" data-week="Wed" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="58" data-week="Thu" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="59" data-week="Fri" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="60" data-week="Sat" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="61" data-week="Sun" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="62" data-week="Mon" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="63" data-week="Tue" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="64" data-week="Wed" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="65" data-week="Thu" data-month="feb" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="3 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        march 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="66" data-week="Sun" data-month="mar" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="67" data-week="Mon" data-month="mar" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="68" data-week="Tue" data-month="mar" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="69" data-week="Wed" data-month="mar" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="70" data-week="Thu" data-month="mar" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>



                                                            <div data-index="71" data-week="Fri" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="72" data-week="Sat" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="73" data-week="Sun" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="74" data-week="Mon" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="75" data-week="Tue" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="76" data-week="Wed" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="77" data-week="Thu" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="78" data-week="Fri" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="79" data-week="Sat" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="80" data-week="Sun" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="81" data-week="Mon" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="82" data-week="Tue" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="83" data-week="Wed" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="84" data-week="Thu" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="85" data-week="Fri" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="86" data-week="Sat" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="87" data-week="Sun" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="88" data-week="Mon" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="89" data-week="Tue" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="90" data-week="Wed" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="91" data-week="Thu" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="92" data-week="Fri" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="93" data-week="Sat" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="94" data-week="Sun" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="95" data-week="Mon" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="96" data-week="Tue" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="97" data-week="Wed" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="98" data-week="Thu" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="99" data-week="Fri" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="100" data-week="Sat" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="101" data-week="Sun" data-month="mar" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="4 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        april 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="102" data-week="Sun" data-month="apr" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>



                                                            <div data-index="103" data-week="Mon" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="104" data-week="Tue" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="105" data-week="Wed" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="106" data-week="Thu" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="107" data-week="Fri" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="108" data-week="Sat" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="109" data-week="Sun" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="110" data-week="Mon" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="111" data-week="Tue" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="112" data-week="Wed" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="113" data-week="Thu" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="114" data-week="Fri" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="115" data-week="Sat" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="116" data-week="Sun" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="117" data-week="Mon" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="118" data-week="Tue" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="119" data-week="Wed" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="120" data-week="Thu" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="121" data-week="Fri" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="122" data-week="Sat" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="123" data-week="Sun" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="124" data-week="Mon" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="125" data-week="Tue" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="126" data-week="Wed" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="127" data-week="Thu" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="128" data-week="Fri" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="129" data-week="Sat" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="130" data-week="Sun" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="131" data-week="Mon" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="132" data-week="Tue" data-month="apr" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="5 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        may 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="133" data-week="Sun" data-month="may" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="134" data-week="Mon" data-month="may" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="135" data-week="Tue" data-month="may" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>



                                                            <div data-index="136" data-week="Wed" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="137" data-week="Thu" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="138" data-week="Fri" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="139" data-week="Sat" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="140" data-week="Sun" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="141" data-week="Mon" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="142" data-week="Tue" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="143" data-week="Wed" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="144" data-week="Thu" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="145" data-week="Fri" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="146" data-week="Sat" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="147" data-week="Sun" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="148" data-week="Mon" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="149" data-week="Tue" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="150" data-week="Wed" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="151" data-week="Thu" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="152" data-week="Fri" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="153" data-week="Sat" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="154" data-week="Sun" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="155" data-week="Mon" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="156" data-week="Tue" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="157" data-week="Wed" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="158" data-week="Thu" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="159" data-week="Fri" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="160" data-week="Sat" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="161" data-week="Sun" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="162" data-week="Mon" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="163" data-week="Tue" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="164" data-week="Wed" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="165" data-week="Thu" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="166" data-week="Fri" data-month="may" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="6 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        june 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="167" data-week="Sun" data-month="jun" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="168" data-week="Mon" data-month="jun" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="169" data-week="Tue" data-month="jun" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="170" data-week="Wed" data-month="jun" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="171" data-week="Thu" data-month="jun" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="172" data-week="Fri" data-month="jun" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>



                                                            <div data-index="173" data-week="Sat" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="174" data-week="Sun" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="175" data-week="Mon" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="176" data-week="Tue" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="177" data-week="Wed" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="178" data-week="Thu" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="179" data-week="Fri" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="180" data-week="Sat" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="181" data-week="Sun" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="182" data-week="Mon" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="183" data-week="Tue" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="184" data-week="Wed" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="185" data-week="Thu" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="186" data-week="Fri" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="187" data-week="Sat" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="188" data-week="Sun" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="189" data-week="Mon" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="190" data-week="Tue" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="191" data-week="Wed" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="192" data-week="Thu" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="193" data-week="Fri" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="194" data-week="Sat" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="195" data-week="Sun" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="196" data-week="Mon" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="197" data-week="Tue" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="198" data-week="Wed" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="199" data-week="Thu" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="200" data-week="Fri" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="201" data-week="Sat" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="202" data-week="Sun" data-month="jun" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="7 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        july 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="203" data-week="Sun" data-month="jul" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>



                                                            <div data-index="204" data-week="Mon" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="205" data-week="Tue" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="206" data-week="Wed" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="207" data-week="Thu" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="208" data-week="Fri" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="209" data-week="Sat" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="210" data-week="Sun" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="211" data-week="Mon" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="212" data-week="Tue" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="213" data-week="Wed" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="214" data-week="Thu" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="215" data-week="Fri" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="216" data-week="Sat" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="217" data-week="Sun" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="218" data-week="Mon" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="219" data-week="Tue" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="220" data-week="Wed" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="221" data-week="Thu" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="222" data-week="Fri" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="223" data-week="Sat" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="224" data-week="Sun" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="225" data-week="Mon" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="226" data-week="Tue" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="227" data-week="Wed" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="228" data-week="Thu" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="229" data-week="Fri" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="230" data-week="Sat" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="231" data-week="Sun" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="232" data-week="Mon" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="233" data-week="Tue" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="234" data-week="Wed" data-month="jul" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="8 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        august 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="235" data-week="Sun" data-month="aug" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="236" data-week="Mon" data-month="aug" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="237" data-week="Tue" data-month="aug" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="238" data-week="Wed" data-month="aug" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>



                                                            <div data-index="239" data-week="Thu" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="240" data-week="Fri" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="241" data-week="Sat" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="242" data-week="Sun" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="243" data-week="Mon" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="244" data-week="Tue" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="245" data-week="Wed" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="246" data-week="Thu" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="247" data-week="Fri" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="248" data-week="Sat" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="249" data-week="Sun" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="250" data-week="Mon" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="251" data-week="Tue" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="252" data-week="Wed" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="253" data-week="Thu" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="254" data-week="Fri" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="255" data-week="Sat" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="256" data-week="Sun" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="257" data-week="Mon" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="258" data-week="Tue" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="259" data-week="Wed" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="260" data-week="Thu" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="261" data-week="Fri" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="262" data-week="Sat" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="263" data-week="Sun" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="264" data-week="Mon" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="265" data-week="Tue" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="266" data-week="Wed" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="267" data-week="Thu" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="268" data-week="Fri" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="269" data-week="Sat" data-month="aug" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="9 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        september 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">



                                                            <div data-index="270" data-week="Sun" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="271" data-week="Mon" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="272" data-week="Tue" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="273" data-week="Wed" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="274" data-week="Thu" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="275" data-week="Fri" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="276" data-week="Sat" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="277" data-week="Sun" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="278" data-week="Mon" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="279" data-week="Tue" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="280" data-week="Wed" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="281" data-week="Thu" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="282" data-week="Fri" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="283" data-week="Sat" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="284" data-week="Sun" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="285" data-week="Mon" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="286" data-week="Tue" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="287" data-week="Wed" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="288" data-week="Thu" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="289" data-week="Fri" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="290" data-week="Sat" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="291" data-week="Sun" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="292" data-week="Mon" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="293" data-week="Tue" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="294" data-week="Wed" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="295" data-week="Thu" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="296" data-week="Fri" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="297" data-week="Sat" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="298" data-week="Sun" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="299" data-week="Mon" data-month="sep" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="10 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        october 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="300" data-week="Sun" data-month="oct" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="301" data-week="Mon" data-month="oct" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>



                                                            <div data-index="302" data-week="Tue" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="303" data-week="Wed" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="304" data-week="Thu" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="305" data-week="Fri" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="306" data-week="Sat" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="307" data-week="Sun" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="308" data-week="Mon" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="309" data-week="Tue" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="310" data-week="Wed" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="311" data-week="Thu" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="312" data-week="Fri" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="313" data-week="Sat" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="314" data-week="Sun" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="315" data-week="Mon" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="316" data-week="Tue" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="317" data-week="Wed" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="318" data-week="Thu" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="319" data-week="Fri" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="320" data-week="Sat" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="321" data-week="Sun" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="322" data-week="Mon" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="323" data-week="Tue" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="324" data-week="Wed" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="325" data-week="Thu" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="326" data-week="Fri" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="327" data-week="Sat" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="328" data-week="Sun" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="329" data-week="Mon" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="330" data-week="Tue" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="331" data-week="Wed" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="332" data-week="Thu" data-month="oct" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="11 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        november 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">

                                                            <div data-index="333" data-week="Sun" data-month="nov" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="334" data-week="Mon" data-month="nov" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="335" data-week="Tue" data-month="nov" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="336" data-week="Wed" data-month="nov" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="337" data-week="Thu" data-month="nov" class="elCalendar__sell -dark">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>



                                                            <div data-index="338" data-week="Fri" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="339" data-week="Sat" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="340" data-week="Sun" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="341" data-week="Mon" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="342" data-week="Tue" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="343" data-week="Wed" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="344" data-week="Thu" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="345" data-week="Fri" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="346" data-week="Sat" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="347" data-week="Sun" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="348" data-week="Mon" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="349" data-week="Tue" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="350" data-week="Wed" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="351" data-week="Thu" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="352" data-week="Fri" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="353" data-week="Sat" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="354" data-week="Sun" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="355" data-week="Mon" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="356" data-week="Tue" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="357" data-week="Wed" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="358" data-week="Thu" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="359" data-week="Fri" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="360" data-week="Sat" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="361" data-week="Sun" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="362" data-week="Mon" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="363" data-week="Tue" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="364" data-week="Wed" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="365" data-week="Thu" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="366" data-week="Fri" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="367" data-week="Sat" data-month="nov" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="swiper-slide" role="group" aria-label="12 / 12" style="width: 420px;">
                                                    <div class="capitalize text-28 fw-500 text-center mb-10">
                                                        december 2024
                                                    </div>

                                                    <div class="elCalendar__month">
                                                        <div class="elCalendar__header">
                                                            <div class="elCalendar__header__sell">Sun</div>
                                                            <div class="elCalendar__header__sell">Mon</div>
                                                            <div class="elCalendar__header__sell">Tue</div>
                                                            <div class="elCalendar__header__sell">Wed</div>
                                                            <div class="elCalendar__header__sell">Thu</div>
                                                            <div class="elCalendar__header__sell">Fri</div>
                                                            <div class="elCalendar__header__sell">Sat</div>
                                                        </div>

                                                        <div class="elCalendar__body">



                                                            <div data-index="368" data-week="Sun" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    1
                                                                </span>
                                                            </div>

                                                            <div data-index="369" data-week="Mon" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    2
                                                                </span>
                                                            </div>

                                                            <div data-index="370" data-week="Tue" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    3
                                                                </span>
                                                            </div>

                                                            <div data-index="371" data-week="Wed" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    4
                                                                </span>
                                                            </div>

                                                            <div data-index="372" data-week="Thu" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    5
                                                                </span>
                                                            </div>

                                                            <div data-index="373" data-week="Fri" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    6
                                                                </span>
                                                            </div>

                                                            <div data-index="374" data-week="Sat" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    7
                                                                </span>
                                                            </div>

                                                            <div data-index="375" data-week="Sun" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    8
                                                                </span>
                                                            </div>

                                                            <div data-index="376" data-week="Mon" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    9
                                                                </span>
                                                            </div>

                                                            <div data-index="377" data-week="Tue" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    10
                                                                </span>
                                                            </div>

                                                            <div data-index="378" data-week="Wed" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    11
                                                                </span>
                                                            </div>

                                                            <div data-index="379" data-week="Thu" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    12
                                                                </span>
                                                            </div>

                                                            <div data-index="380" data-week="Fri" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    13
                                                                </span>
                                                            </div>

                                                            <div data-index="381" data-week="Sat" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    14
                                                                </span>
                                                            </div>

                                                            <div data-index="382" data-week="Sun" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    15
                                                                </span>
                                                            </div>

                                                            <div data-index="383" data-week="Mon" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    16
                                                                </span>
                                                            </div>

                                                            <div data-index="384" data-week="Tue" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    17
                                                                </span>
                                                            </div>

                                                            <div data-index="385" data-week="Wed" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    18
                                                                </span>
                                                            </div>

                                                            <div data-index="386" data-week="Thu" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    19
                                                                </span>
                                                            </div>

                                                            <div data-index="387" data-week="Fri" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    20
                                                                </span>
                                                            </div>

                                                            <div data-index="388" data-week="Sat" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    21
                                                                </span>
                                                            </div>

                                                            <div data-index="389" data-week="Sun" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    22
                                                                </span>
                                                            </div>

                                                            <div data-index="390" data-week="Mon" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    23
                                                                </span>
                                                            </div>

                                                            <div data-index="391" data-week="Tue" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    24
                                                                </span>
                                                            </div>

                                                            <div data-index="392" data-week="Wed" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    25
                                                                </span>
                                                            </div>

                                                            <div data-index="393" data-week="Thu" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    26
                                                                </span>
                                                            </div>

                                                            <div data-index="394" data-week="Fri" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    27
                                                                </span>
                                                            </div>

                                                            <div data-index="395" data-week="Sat" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    28
                                                                </span>
                                                            </div>

                                                            <div data-index="396" data-week="Sun" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    29
                                                                </span>
                                                            </div>

                                                            <div data-index="397" data-week="Mon" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    30
                                                                </span>
                                                            </div>

                                                            <div data-index="398" data-week="Tue" data-month="dec" class="elCalendar__sell">
                                                                <span class="js-date">
                                                                    31
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <button class="elCalendar__sliderNav -prev flex-center js-calendar-slider-prev swiper-button-disabled" disabled="" tabindex="-1" aria-label="Previous slide" aria-controls="swiper-wrapper-9a1b3bc7caacca3e" aria-disabled="true">
                                                <i class="icon icon-chevron-left text-14"></i>
                                            </button>

                                            <button class="elCalendar__sliderNav -next flex-center js-calendar-slider-next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-9a1b3bc7caacca3e" aria-disabled="false">
                                                <i class="icon icon-chevron-right text-14"></i>
                                            </button>
                                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="searchMenu-guests px-30 lg:py-20 lg:px-0 js-form-dd js-form-counters">

                            <div data-x-dd-click="searchMenu-guests">
                                <h4 class="text-15 fw-500 ls-2 lh-16">Passenger (optional)</h4>

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

                        <div class="button-item">
                            <button class="mainSearch__submit button -dark-1 py-20 px-35 col-12 rounded-4 bg-yellow-1 text-dark-1">
                                <i class="icon-search text-20 mr-10"></i>
                                Search
                            </button>
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
            <div class="col-xl-3 col-lg-4 lg:d-none">
                <aside class="sidebar y-gap-40">
                    <div class="sidebar__item -no-border">
                        <div class="flex-center ratio ratio-15:9 js-lazy loaded" data-ll-status="loaded" style="background-image: url(&quot;img/general/map.png&quot;);">
                            <button data-x-click="mapFilter" class="button py-15 px-24 -blue-1 bg-white text-dark-1 absolute">
                                <i class="icon-destination text-22 mr-10"></i>
                                Show on map
                            </button>
                        </div>
                    </div>

                    <div class="sidebar__item -no-border">
                        <h5 class="text-18 fw-500 mb-10">Location (Heathrow Airport)</h5>
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

                                        <div class="text-15 ml-10">Airport (meet &amp; greet)</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">$92</div>
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

                                        <div class="text-15 ml-10">Airport (shuttle) </div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">$45</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="sidebar__item">
                        <h5 class="text-18 fw-500 mb-10">Bikes Category</h5>
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

                                        <div class="text-15 ml-10">Scooty</div>
                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">$92</div>
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

                                        <div class="text-15 ml-10">Bike</div>
                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">$45</div>
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

                                        <div class="text-15 ml-10">Super Bike</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">$21</div>
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

                                        <div class="text-15 ml-10">Bullet</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">$78</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__item pb-30">
                        <h5 class="text-18 fw-500 mb-10">Price</h5>
                        <div class="row x-gap-10 y-gap-30">
                            <div class="col-12">
                                <div class="js-price-rangeSlider">
                                    <div class="text-14 fw-500"></div>

                                    <div class="d-flex justify-between mb-20">
                                        <div class="text-15 text-dark-1">
                                            <span class="js-lower">$0</span>
                                            -
                                            <span class="js-upper">$500</span>
                                        </div>
                                    </div>

                                    <div class="px-5">
                                        <div class="js-slider pricing">
                                            <div class="noUi-base">
                                                <div class="noUi-connects">
                                                    <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.25, 1);"></div>
                                                </div>
                                                <div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 5;">
                                                    <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="500.0" aria-valuenow="0.0" aria-valuetext="$0">
                                                        <div class="noUi-touch-area"></div>
                                                    </div>
                                                </div>
                                                <div class="noUi-origin" style="transform: translate(-75%, 0px); z-index: 6;">
                                                    <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="2000.0" aria-valuenow="500.0" aria-valuetext="$500">
                                                        <div class="noUi-touch-area"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar__item">
                        <h5 class="text-18 fw-500 mb-10">Mileage/Kilometres</h5>
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

                                        <div class="text-15 ml-10">Limited</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">$92</div>
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

                                        <div class="text-15 ml-10">Unlimited</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">$45</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="sidebar__item">
                        <h5 class="text-18 fw-500 mb-10">Transmission</h5>
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

                                        <div class="text-15 ml-10">Electric</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">$92</div>
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

                                        <div class="text-15 ml-10">Manual</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">$45</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="sidebar__item">
                        <h5 class="text-18 fw-500 mb-10">Fuel Policy</h5>
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

                                        <div class="text-15 ml-10">Full to full</div>

                                    </div>

                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">$92</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </aside>
            </div>

            <div class="col-xl-9 col-lg-8">
                <div class="row y-gap-10 items-center justify-between">
                    <div class="col-auto">
                        <div class="text-18"><span class="fw-500">3,269 properties</span> in Europe</div>
                    </div>
                    <div class="col-auto">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-auto">
                                <button class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">
                                    <i class="icon-up-down text-14 mr-10"></i>
                                    Sort
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

                        <div class="sidebar__item -no-border">
                            <h5 class="text-18 fw-500 mb-10">Location (Heathrow Airport)</h5>
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

                                            <div class="text-15 ml-10">Airport (meet &amp; greet)</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$92</div>
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

                                            <div class="text-15 ml-10">Airport (shuttle) </div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$45</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Car Category</h5>
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

                                            <div class="text-15 ml-10">Small</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$92</div>
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

                                            <div class="text-15 ml-10">Medium</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$45</div>
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

                                            <div class="text-15 ml-10">Large</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$21</div>
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

                                            <div class="text-15 ml-10">Premium</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$78</div>
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

                                            <div class="text-15 ml-10">SUV</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$679</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item pb-30">
                            <h5 class="text-18 fw-500 mb-10">Price</h5>
                            <div class="row x-gap-10 y-gap-30">
                                <div class="col-12">
                                    <div class="js-price-rangeSlider">
                                        <div class="text-14 fw-500"></div>

                                        <div class="d-flex justify-between mb-20">
                                            <div class="text-15 text-dark-1">
                                                <span class="js-lower">$0</span>
                                                -
                                                <span class="js-upper">$500</span>
                                            </div>
                                        </div>

                                        <div class="px-5">
                                            <div class="js-slider noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr pricing">
                                                <div class="noUi-base">
                                                    <div class="noUi-connects">
                                                        <div class="noUi-connect" style="transform: translate(0%, 0px) scale(0.25, 1);"></div>
                                                    </div>
                                                    <div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 5;">
                                                        <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="500.0" aria-valuenow="0.0" aria-valuetext="$0">
                                                            <div class="noUi-touch-area"></div>
                                                        </div>
                                                    </div>
                                                    <div class="noUi-origin" style="transform: translate(-75%, 0px); z-index: 6;">
                                                        <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="2000.0" aria-valuenow="500.0" aria-valuetext="$500">
                                                            <div class="noUi-touch-area"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Supplier</h5>
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

                                            <div class="text-15 ml-10">Avis</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$92</div>
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

                                            <div class="text-15 ml-10">Budget</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$45</div>
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

                                            <div class="text-15 ml-10">Sixt</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$21</div>
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

                                            <div class="text-15 ml-10">Europcar</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$78</div>
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

                                            <div class="text-15 ml-10">Enterprise</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$679</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Car Specifications</h5>
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

                                            <div class="text-15 ml-10">With air conditioning</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$92</div>
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

                                            <div class="text-15 ml-10">Automatic transmission</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$45</div>
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

                                            <div class="text-15 ml-10">Manual transmission</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$21</div>
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

                                            <div class="text-15 ml-10">2 doors</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$78</div>
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

                                            <div class="text-15 ml-10">4 doors</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$679</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Mileage/Kilometres</h5>
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

                                            <div class="text-15 ml-10">Limited</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$92</div>
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

                                            <div class="text-15 ml-10">Unlimited</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$45</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Transmission</h5>
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

                                            <div class="text-15 ml-10">Automatic</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$92</div>
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

                                            <div class="text-15 ml-10">Manual</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$45</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Fuel Policy</h5>
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

                                            <div class="text-15 ml-10">Full to full</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$92</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </aside>
                </div>

                <div class="mt-30"></div>

                <div class="row y-gap-30">

                    <div class="col-12">
                        <div class="border-top-light pt-30">
                            <div class="row x-gap-20 y-gap-20">
                                <div class="col-md-auto">
                                    <div class="relative d-flex">
                                        <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                                            <div class="cardImage__content">
                                                <img class="rounded-4 col-12" src="front/img/bike/Bike.png" alt="image">
                                            </div>
                                            <div class="cardImage__wishlist">
                                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                                    <i class="icon-heart text-12"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="d-flex flex-column h-full justify-between">
                                        <div class="">
                                            <div class="row x-gap-5 items-center">
                                                <div class="col-auto">
                                                    <div class="text-14 text-light-1">Heathrow Airport</div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="size-3 rounded-full bg-light-1"></div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-14 text-light-1">Bike</div>
                                                </div>
                                            </div>
                                            <h3 class="text-18 lh-16 fw-500 mt-5">
                                                Yamaha R6<span class="text-15 text-light-1">or similar</span>
                                            </h3>
                                        </div>
                                        <div class="col-lg-7 mt-20">
                                            <div class="row y-gap-5">
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-user-2"></i>
                                                        <div class="text-14 ml-10">2</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-luggage"></i>
                                                        <div class="text-14 ml-10">1</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-transmission"></i>
                                                        <div class="text-14 ml-10">Manual</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-speedometer"></i>
                                                        <div class="text-14 ml-10">Unlimited</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-speedometer"></i>
                                                        <div class="text-14 ml-10">Full to full</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-20">
                                            <div class="d-flex items-center">
                                                <i class="icon-check text-10"></i>
                                                <div class="text-14 fw-500 ml-10">Free Amendments</div>
                                            </div>
                                            <div class="d-flex items-center mt-5">
                                                <i class="icon-check text-10"></i>
                                                <div class="text-14 fw-500 text-green-2 ml-10">Free Cancellation</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-auto text-right md:text-left">
                                    <div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                                        <div class="col-auto">
                                            <div class="text-14 lh-14 fw-500">Exceptional</div>
                                            <div class="text-14 lh-14 text-light-1">3,014 reviews</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="flex-center text-dark-1 fw-600 text-14 size-40 rounded-4 bg-yellow-1">4.8</div>
                                        </div>
                                    </div>
                                    <div class="text-22 lh-12 fw-600 mt-70 md:mt-20">US$70</div>
                                    <div class="text-14 text-light-1 mt-5">Total</div>
                                    <a href="#" class="button h-50 px-24 bg-dark-1 -yellow-1 text-white mt-24">
                                        View Detail <div class="icon-arrow-top-right ml-15"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="border-top-light pt-30">
                            <div class="row x-gap-20 y-gap-20">
                                <div class="col-md-auto">
                                    <div class="relative d-flex">
                                        <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                                            <div class="cardImage__content">
                                                <img class="rounded-4 col-12" src="front/img/bike/Bike.png" alt="image">
                                            </div>
                                            <div class="cardImage__wishlist">
                                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                                    <i class="icon-heart text-12"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="d-flex flex-column h-full justify-between">
                                        <div class="">
                                            <div class="row x-gap-5 items-center">
                                                <div class="col-auto">
                                                    <div class="text-14 text-light-1">Heathrow Airport</div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="size-3 rounded-full bg-light-1"></div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-14 text-light-1">Bike</div>
                                                </div>
                                            </div>
                                            <h3 class="text-18 lh-16 fw-500 mt-5">
                                                Yamaha R6<span class="text-15 text-light-1">or similar</span>
                                            </h3>
                                        </div>
                                        <div class="col-lg-7 mt-20">
                                            <div class="row y-gap-5">
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-user-2"></i>
                                                        <div class="text-14 ml-10">2</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-luggage"></i>
                                                        <div class="text-14 ml-10">1</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-transmission"></i>
                                                        <div class="text-14 ml-10">Manual</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-speedometer"></i>
                                                        <div class="text-14 ml-10">Unlimited</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-speedometer"></i>
                                                        <div class="text-14 ml-10">Full to full</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-20">
                                            <div class="d-flex items-center">
                                                <i class="icon-check text-10"></i>
                                                <div class="text-14 fw-500 ml-10">Free Amendments</div>
                                            </div>
                                            <div class="d-flex items-center mt-5">
                                                <i class="icon-check text-10"></i>
                                                <div class="text-14 fw-500 text-green-2 ml-10">Free Cancellation</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-auto text-right md:text-left">
                                    <div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                                        <div class="col-auto">
                                            <div class="text-14 lh-14 fw-500">Exceptional</div>
                                            <div class="text-14 lh-14 text-light-1">3,014 reviews</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="flex-center text-dark-1 fw-600 text-14 size-40 rounded-4 bg-yellow-1">4.8</div>
                                        </div>
                                    </div>
                                    <div class="text-22 lh-12 fw-600 mt-70 md:mt-20">US$70</div>
                                    <div class="text-14 text-light-1 mt-5">Total</div>
                                    <a href="#" class="button h-50 px-24 bg-dark-1 -yellow-1 text-white mt-24">
                                        View Detail <div class="icon-arrow-top-right ml-15"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="border-top-light pt-30">
                            <div class="row x-gap-20 y-gap-20">
                                <div class="col-md-auto">
                                    <div class="relative d-flex">
                                        <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                                            <div class="cardImage__content">
                                                <img class="rounded-4 col-12" src="front/img/bike/Bike.png" alt="image">
                                            </div>
                                            <div class="cardImage__wishlist">
                                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                                    <i class="icon-heart text-12"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="d-flex flex-column h-full justify-between">
                                        <div class="">
                                            <div class="row x-gap-5 items-center">
                                                <div class="col-auto">
                                                    <div class="text-14 text-light-1">Heathrow Airport</div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="size-3 rounded-full bg-light-1"></div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-14 text-light-1">Bike</div>
                                                </div>
                                            </div>
                                            <h3 class="text-18 lh-16 fw-500 mt-5">
                                                Yamaha R6<span class="text-15 text-light-1">or similar</span>
                                            </h3>
                                        </div>
                                        <div class="col-lg-7 mt-20">
                                            <div class="row y-gap-5">
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-user-2"></i>
                                                        <div class="text-14 ml-10">2</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-luggage"></i>
                                                        <div class="text-14 ml-10">1</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-transmission"></i>
                                                        <div class="text-14 ml-10">Manual</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-speedometer"></i>
                                                        <div class="text-14 ml-10">Unlimited</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-speedometer"></i>
                                                        <div class="text-14 ml-10">Full to full</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-20">
                                            <div class="d-flex items-center">
                                                <i class="icon-check text-10"></i>
                                                <div class="text-14 fw-500 ml-10">Free Amendments</div>
                                            </div>
                                            <div class="d-flex items-center mt-5">
                                                <i class="icon-check text-10"></i>
                                                <div class="text-14 fw-500 text-green-2 ml-10">Free Cancellation</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-auto text-right md:text-left">
                                    <div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                                        <div class="col-auto">
                                            <div class="text-14 lh-14 fw-500">Exceptional</div>
                                            <div class="text-14 lh-14 text-light-1">3,014 reviews</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="flex-center text-dark-1 fw-600 text-14 size-40 rounded-4 bg-yellow-1">4.8</div>
                                        </div>
                                    </div>
                                    <div class="text-22 lh-12 fw-600 mt-70 md:mt-20">US$70</div>
                                    <div class="text-14 text-light-1 mt-5">Total</div>
                                    <a href="#" class="button h-50 px-24 bg-dark-1 -yellow-1 text-white mt-24">
                                        View Detail <div class="icon-arrow-top-right ml-15"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="border-top-light pt-30">
                            <div class="row x-gap-20 y-gap-20">
                                <div class="col-md-auto">
                                    <div class="relative d-flex">
                                        <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                                            <div class="cardImage__content">
                                                <img class="rounded-4 col-12" src="front/img/bike/Bike.png" alt="image">
                                            </div>
                                            <div class="cardImage__wishlist">
                                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                                    <i class="icon-heart text-12"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="d-flex flex-column h-full justify-between">
                                        <div class="">
                                            <div class="row x-gap-5 items-center">
                                                <div class="col-auto">
                                                    <div class="text-14 text-light-1">Heathrow Airport</div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="size-3 rounded-full bg-light-1"></div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-14 text-light-1">Bike</div>
                                                </div>
                                            </div>
                                            <h3 class="text-18 lh-16 fw-500 mt-5">
                                                Yamaha R6<span class="text-15 text-light-1">or similar</span>
                                            </h3>
                                        </div>
                                        <div class="col-lg-7 mt-20">
                                            <div class="row y-gap-5">
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-user-2"></i>
                                                        <div class="text-14 ml-10">2</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-luggage"></i>
                                                        <div class="text-14 ml-10">1</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-transmission"></i>
                                                        <div class="text-14 ml-10">Manual</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-speedometer"></i>
                                                        <div class="text-14 ml-10">Unlimited</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-speedometer"></i>
                                                        <div class="text-14 ml-10">Full to full</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-20">
                                            <div class="d-flex items-center">
                                                <i class="icon-check text-10"></i>
                                                <div class="text-14 fw-500 ml-10">Free Amendments</div>
                                            </div>
                                            <div class="d-flex items-center mt-5">
                                                <i class="icon-check text-10"></i>
                                                <div class="text-14 fw-500 text-green-2 ml-10">Free Cancellation</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-auto text-right md:text-left">
                                    <div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                                        <div class="col-auto">
                                            <div class="text-14 lh-14 fw-500">Exceptional</div>
                                            <div class="text-14 lh-14 text-light-1">3,014 reviews</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="flex-center text-dark-1 fw-600 text-14 size-40 rounded-4 bg-yellow-1">4.8</div>
                                        </div>
                                    </div>
                                    <div class="text-22 lh-12 fw-600 mt-70 md:mt-20">US$70</div>
                                    <div class="text-14 text-light-1 mt-5">Total</div>
                                    <a href="#" class="button h-50 px-24 bg-dark-1 -yellow-1 text-white mt-24">
                                        View Detail <div class="icon-arrow-top-right ml-15"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="border-top-light pt-30">
                            <div class="row x-gap-20 y-gap-20">
                                <div class="col-md-auto">
                                    <div class="relative d-flex">
                                        <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                                            <div class="cardImage__content">
                                                <img class="rounded-4 col-12" src="front/img/bike/Bike.png" alt="image">
                                            </div>
                                            <div class="cardImage__wishlist">
                                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                                    <i class="icon-heart text-12"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="d-flex flex-column h-full justify-between">
                                        <div class="">
                                            <div class="row x-gap-5 items-center">
                                                <div class="col-auto">
                                                    <div class="text-14 text-light-1">Heathrow Airport</div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="size-3 rounded-full bg-light-1"></div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-14 text-light-1">Bike</div>
                                                </div>
                                            </div>
                                            <h3 class="text-18 lh-16 fw-500 mt-5">
                                                Yamaha R6<span class="text-15 text-light-1">or similar</span>
                                            </h3>
                                        </div>
                                        <div class="col-lg-7 mt-20">
                                            <div class="row y-gap-5">
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-user-2"></i>
                                                        <div class="text-14 ml-10">2</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-luggage"></i>
                                                        <div class="text-14 ml-10">1</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-transmission"></i>
                                                        <div class="text-14 ml-10">Manual</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-speedometer"></i>
                                                        <div class="text-14 ml-10">Unlimited</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-speedometer"></i>
                                                        <div class="text-14 ml-10">Full to full</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-20">
                                            <div class="d-flex items-center">
                                                <i class="icon-check text-10"></i>
                                                <div class="text-14 fw-500 ml-10">Free Amendments</div>
                                            </div>
                                            <div class="d-flex items-center mt-5">
                                                <i class="icon-check text-10"></i>
                                                <div class="text-14 fw-500 text-green-2 ml-10">Free Cancellation</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-auto text-right md:text-left">
                                    <div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                                        <div class="col-auto">
                                            <div class="text-14 lh-14 fw-500">Exceptional</div>
                                            <div class="text-14 lh-14 text-light-1">3,014 reviews</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="flex-center text-dark-1 fw-600 text-14 size-40 rounded-4 bg-yellow-1">4.8</div>
                                        </div>
                                    </div>
                                    <div class="text-22 lh-12 fw-600 mt-70 md:mt-20">US$70</div>
                                    <div class="text-14 text-light-1 mt-5">Total</div>
                                    <a href="#" class="button h-50 px-24 bg-dark-1 -yellow-1 text-white mt-24">
                                        View Detail <div class="icon-arrow-top-right ml-15"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="border-top-light pt-30">
                            <div class="row x-gap-20 y-gap-20">
                                <div class="col-md-auto">
                                    <div class="relative d-flex">
                                        <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                                            <div class="cardImage__content">
                                                <img class="rounded-4 col-12" src="front/img/bike/Bike.png" alt="image">
                                            </div>
                                            <div class="cardImage__wishlist">
                                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                                    <i class="icon-heart text-12"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="d-flex flex-column h-full justify-between">
                                        <div class="">
                                            <div class="row x-gap-5 items-center">
                                                <div class="col-auto">
                                                    <div class="text-14 text-light-1">Heathrow Airport</div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="size-3 rounded-full bg-light-1"></div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="text-14 text-light-1">Bike</div>
                                                </div>
                                            </div>
                                            <h3 class="text-18 lh-16 fw-500 mt-5">
                                                Yamaha R6<span class="text-15 text-light-1">or similar</span>
                                            </h3>
                                        </div>
                                        <div class="col-lg-7 mt-20">
                                            <div class="row y-gap-5">
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-user-2"></i>
                                                        <div class="text-14 ml-10">2</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-luggage"></i>
                                                        <div class="text-14 ml-10">1</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-transmission"></i>
                                                        <div class="text-14 ml-10">Manual</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-speedometer"></i>
                                                        <div class="text-14 ml-10">Unlimited</div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="d-flex items-center">
                                                        <i class="icon-speedometer"></i>
                                                        <div class="text-14 ml-10">Full to full</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-20">
                                            <div class="d-flex items-center">
                                                <i class="icon-check text-10"></i>
                                                <div class="text-14 fw-500 ml-10">Free Amendments</div>
                                            </div>
                                            <div class="d-flex items-center mt-5">
                                                <i class="icon-check text-10"></i>
                                                <div class="text-14 fw-500 text-green-2 ml-10">Free Cancellation</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-auto text-right md:text-left">
                                    <div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                                        <div class="col-auto">
                                            <div class="text-14 lh-14 fw-500">Exceptional</div>
                                            <div class="text-14 lh-14 text-light-1">3,014 reviews</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="flex-center text-dark-1 fw-600 text-14 size-40 rounded-4 bg-yellow-1">4.8</div>
                                        </div>
                                    </div>
                                    <div class="text-22 lh-12 fw-600 mt-70 md:mt-20">US$70</div>
                                    <div class="text-14 text-light-1 mt-5">Total</div>
                                    <a href="#" class="button h-50 px-24 bg-dark-1 -yellow-1 text-white mt-24">
                                        View Detail <div class="icon-arrow-top-right ml-15"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



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


@endsection