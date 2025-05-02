@extends('front.layout.app')
@section('content')
<section data-anim-wrap class="masthead -type-1 z-5">
    <div data-anim-child="fade" class="masthead__bg">
        <img src="#" alt="image" data-src="{{ asset('front/img/masthead/2/3.png') }}" class="js-lazy">
    </div>
    <div class="container">
        <div class="row justify-center">
            <div class="col-auto">
                <div class="text-center">
                    <h1 data-anim-child="slide-up delay-4" class="text-60 lg:text-40 md:text-30 text-white">
                        Extend your holiday with a long-term hotel or apartment stay</h1>
                    <p data-anim-child="slide-up delay-5" class="text-white mt-6 md:mt-10">Book a stay of 30 nights or more, many of which are at a reduced monthly-rental rate</p>
                </div>
                <div data-anim-child="slide-up delay-6" class="tabs -underline mt-50 js-tabs">
                    <div
                        class="tabs__controls d-flex x-gap-30 y-gap-20 justify-center sm:justify-start js-tabs-controls">
                        <div class="tab-itemss d-none">
                            <button class="tabs__button text-15 fw-500 text-white pb-4 js-tabs-button is-tab-el-active"
                                data-tab-target=".-tab-item-1">Find Stay</button>
                        </div>
                    </div>
                    <div class="tabs__content mt-30 md:mt-20 js-tabs-content">
                        <div class="tabs__pane -tab-item-1 is-tab-el-active">
                            <div class="mainSearch w-100 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
                                <div class="button-grid items-center justify-content-between">
                                    <div class="searchMenu-loc px-20 lg:py-20 lg:px-0 js-form-dd js-liverSearch">
                                        <div data-x-dd-click="searchMenu-loc">
                                            <h4 class="text-15 fw-500 ls-2 lh-16"><i
                                                    class="fa-solid fa-hotel me-2"></i>Location</h4>
                                            <div class="text-15 text-light-1 ls-2 lh-16">
                                                <input autocomplete="off" type="search"
                                                    placeholder="Where are you going?" class="js-search js-dd-focus form-control p-0" />
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
                                                                    <div class="text-14 lh-12 text-light-1 mt-5">Greater
                                                                        London, United Kingdom</div>
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
                                            <i class="icon-search text-20 mr-10 searchIcon"></i>
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
<section class="alert-notify py-40">
    <div class="container">
        <div class="row">
            <div class="notify-box">
                <div class="notify-icon"><i class="fa-solid fa-circle-info"></i></div>
                Get the advice you need. Check the latest COVID-19 restrictions before you travel. Learn more
            </div>
        </div>
    </div>
</section>
<section class="imageWithtext py-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="imageWithtext__content">
                    <h2>Book your stay</h2>
                    <p>
                        Book your stay with us and we will help you find the perfect hotel or apartment for your
                        stay. We offer a wide range of options to suit your needs and budget.
                    </p>
                    <a href="#" class="button -redBtn-1 h-60 px-35 w-50 rounded-100 bg-blue-1 text-white">
                        <i class="icon-search text-20 mr-10 searchIcon"></i>
                        Search
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="imageWithtext__img">
                    <img src="{{asset('front/img/gallery/1/1.png') }}" alt="image" class="js-lazy">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="extendBooking py-50">
    <div class="container">
        <div class="extendBooking-heading">
            <h3>Why book your extended stay with us</h3>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-20 ">
                <div class="extendBooking_content">
                    <i class="fa-solid fa-coins"></i>
                    <h5>Save more with long stay hotels</h5>
                    <p>Some hotels and holiday rentals on Clock-Wise.com now offer reduced monthly rates on extended stays, meaning you can save more when you stay longer.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-20 ">
                <div class="extendBooking_content">
                    <i class="fa-solid fa-calendar-plus"></i>
                    <h5>Combine work and play</h5>
                    <p>Pick a property that has everything you need to have a comfortable stay of 30 days or more.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-20 ">
                <div class="extendBooking_content">
                    <i class="fa-solid fa-house-signal"></i>
                    <h5>Over 1,3 million long term stays</h5>
                    <p>Choose from monthly rentals, hotels and everything in between. Rely on verified guest reviews to pick a place you can call home.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="propertyStayView py-50">
    <div class="propertyStayView-heading text-center mb-30">
        <h3>Our picks for a longer stay</h3>
        <p>These hotels and holiday rentals are popular for an extended stay</p>
    </div>
    <div class="container">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images-gallery">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <img src="{{asset('front/img/gallery/1/1.png') }}" alt="image" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    </div>
                                    <div class="col-md-3 pl-5 pr-5 mb-3">
                                        <img src="{{asset('front/img/gallery/1/2.png') }}" alt="image">
                                    </div>
                                    <div class="col-md-3 pl-5 pr-5 mb-3">
                                        <img src="{{asset('front/img/gallery/1/3.png') }}" alt="image">
                                    </div>
                                    <div class="col-md-3 pl-5 pr-5 mb-3">
                                        <img src="{{asset('front/img/gallery/1/2.png') }}" alt="image">
                                    </div>
                                    <div class="col-md-3 pl-5 pr-5 mb-3">
                                        <img src="{{asset('front/img/gallery/1/2.png') }}" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="propertyStayView_Details">
                                <h5>Astra Apartments Newcastle</h5>
                                <div class="propertyServices">
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-bell-concierge"></i>
                                        <h6>24 hour reception</h6>
                                    </div>
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-square-parking"></i>
                                        <h6>Free parking</h6>
                                    </div>
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-wifi"></i>
                                        <h6>Free WiFi</h6>
                                    </div>
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-gear"></i>
                                        <h6>Washing machine</h6>
                                    </div>
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-kitchen-set"></i>
                                        <h6>Kitchen</h6>
                                    </div>
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-wind"></i>
                                        <h6>Air conditioning</h6>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ex. Ducimus reiciendis aliquid vel odit unde rerum, optio ratione blanditiis commodi sapiente non ab dolorum incidunt tenetur corporis cum, voluptatibus minus perferendis libero impedit, quis neque. Accusamus, atque facilis, porro dignissimos quod voluptatibus beatae mollitia, possimus officiis eius quasi provident quos odio pariatur sequi maiores quidem corporis earum harum sapiente. Autem odit porro voluptates adipisci voluptatem minus ab mollitia earum harum sequi modi magni commodi provident amet similique pariatur, maxime molestias culpa dicta odio atque vel error eius. Suscipit perspiciatis velit recusandae officia at dignissimos perferendis illum, similique repellendus voluptatibus.</p>
                                <button class="button -redBtn-1 h-60 px-35 mt-20 w-50 rounded-100 bg-blue-1 text-white">Visit this property</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images-gallery">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <img src="{{asset('front/img/gallery/1/1.png') }}" alt="image">
                                    </div>
                                    <div class="col-md-3 pl-5 pr-5 mb-3">
                                        <img src="{{asset('front/img/gallery/1/2.png') }}" alt="image">
                                    </div>
                                    <div class="col-md-3 pl-5 pr-5 mb-3">
                                        <img src="{{asset('front/img/gallery/1/3.png') }}" alt="image">
                                    </div>
                                    <div class="col-md-3 pl-5 pr-5 mb-3">
                                        <img src="{{asset('front/img/gallery/1/2.png') }}" alt="image">
                                    </div>
                                    <div class="col-md-3 pl-5 pr-5 mb-3">
                                        <img src="{{asset('front/img/gallery/1/2.png') }}" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="propertyStayView_Details">
                                <h5>Casiola Vacations Homes</h5>
                                <div class="propertyServices">
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-bell-concierge"></i>
                                        <h6>24 hour reception</h6>
                                    </div>
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-square-parking"></i>
                                        <h6>Free parking</h6>
                                    </div>
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-wifi"></i>
                                        <h6>Free WiFi</h6>
                                    </div>
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-gear"></i>
                                        <h6>Washing machine</h6>
                                    </div>
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-kitchen-set"></i>
                                        <h6>Kitchen</h6>
                                    </div>
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-wind"></i>
                                        <h6>Air conditioning</h6>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ex. Ducimus reiciendis aliquid vel odit unde rerum, optio ratione blanditiis commodi sapiente non ab dolorum incidunt tenetur corporis cum, voluptatibus minus perferendis libero impedit, quis neque. Accusamus, atque facilis, porro dignissimos quod voluptatibus beatae mollitia, possimus officiis eius quasi provident quos odio pariatur sequi maiores quidem corporis earum harum sapiente. Autem odit porro voluptates adipisci voluptatem minus ab mollitia earum harum sequi modi magni commodi provident amet similique pariatur, maxime molestias culpa dicta odio atque vel error eius. Suscipit perspiciatis velit recusandae officia at dignissimos perferendis illum, similique repellendus voluptatibus.</p>
                                <button class="button -redBtn-1 h-60 px-35 mt-20 w-50 rounded-100 bg-blue-1 text-white">Visit this property</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images-gallery">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <img src="{{asset('front/img/gallery/1/1.png') }}" alt="image">
                                    </div>
                                    <div class="col-md-3 pl-5 pr-5 mb-3">
                                        <img src="{{asset('front/img/gallery/1/2.png') }}" alt="image">
                                    </div>
                                    <div class="col-md-3 pl-5 pr-5 mb-3">
                                        <img src="{{asset('front/img/gallery/1/3.png') }}" alt="image">
                                    </div>
                                    <div class="col-md-3 pl-5 pr-5 mb-3">
                                        <img src="{{asset('front/img/gallery/1/2.png') }}" alt="image">
                                    </div>
                                    <div class="col-md-3 pl-5 pr-5 mb-3">
                                        <img src="{{asset('front/img/gallery/1/2.png') }}" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="propertyStayView_Details">
                                <h5>SmartMents Business Berlin Apartments</h5>
                                <div class="propertyServices">
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-bell-concierge"></i>
                                        <h6>24 hour reception</h6>
                                    </div>
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-square-parking"></i>
                                        <h6>Free parking</h6>
                                    </div>
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-wifi"></i>
                                        <h6>Free WiFi</h6>
                                    </div>
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-gear"></i>
                                        <h6>Washing machine</h6>
                                    </div>
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-kitchen-set"></i>
                                        <h6>Kitchen</h6>
                                    </div>
                                    <div class="propertyServices__item">
                                        <i class="fa-solid fa-wind"></i>
                                        <h6>Air conditioning</h6>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, ex. Ducimus reiciendis aliquid vel odit unde rerum, optio ratione blanditiis commodi sapiente non ab dolorum incidunt tenetur corporis cum, voluptatibus minus perferendis libero impedit, quis neque. Accusamus, atque facilis, porro dignissimos quod voluptatibus beatae mollitia, possimus officiis eius quasi provident quos odio pariatur sequi maiores quidem corporis earum harum sapiente. Autem odit porro voluptates adipisci voluptatem minus ab mollitia earum harum sequi modi magni commodi provident amet similique pariatur, maxime molestias culpa dicta odio atque vel error eius. Suscipit perspiciatis velit recusandae officia at dignissimos perferendis illum, similique repellendus voluptatibus.</p>
                                <button class="button -redBtn-1 h-60 px-35 mt-20 w-50 rounded-100 bg-blue-1 text-white">Visit this property</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next d-none" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<section class="make_yourself py-50">
    <div class="container">
        <div class="sectionTitle text-center mb-30">
            <h3>Make yourself at home</h3>
            <p>Find somewhere to settle down in our selection of top long term hotels and long term rentals</p>
        </div>
        <div class="owl-carousel owl-theme browse-property-swiper pt-40 sm:pt-20">
            <div class="item">
                <img
                    src="https://media.istockphoto.com/id/119926339/photo/resort-swimming-pool.jpg?s=612x612&w=0&k=20&c=9QtwJC2boq3GFHaeDsKytF4-CavYKQuy1jBD2IRfYKc=">
                <div class="mt-10">
                    <h5>Hotels</h5>
                    <p>23 Aug-24 Aug, 2 adults</p>
                    <p>492 available</p>
                </div>
            </div>
            <div class="item">
                <img
                    src="https://media.istockphoto.com/id/1393537665/photo/modern-townhouse-design.webp?b=1&s=170667a&w=0&k=20&c=vlUsVGOI_lm_cZUwwHZWeBL5RRfxYHExELD5vOGTwV8=">
                <div class="mt-10">
                    <h5>Apartments</h5>
                    <p>23 Aug-24 Aug, 2 adults</p>
                    <p>492 available</p>
                </div>
            </div>
            <div class="item">
                <img
                    src="https://media.istockphoto.com/id/641448082/photo/beautiful-tropical-beach-front-hotel-resort-with-swimming-pool-sunshine.webp?b=1&s=170667a&w=0&k=20&c=66dpZvYuwIeXCufS_Q9PV0pBZiJKagF11s0ZlSB6DNQ=">
                <div class="mt-10">
                    <h5>Resorts</h5>
                    <p>23 Aug-24 Aug, 2 adults</p>
                    <p>492 available</p>
                </div>
            </div>
            <div class="item">
                <img src="https://t4.ftcdn.net/jpg/03/70/64/43/360_F_370644357_MDF4UXLAXTyyi2OyuK66tWW9cA2f8svL.jpg">
                <div class="mt-10">
                    <h5>Villas</h5>
                    <p>23 Aug-24 Aug, 2 adults</p>
                    <p>492 available</p>
                </div>
            </div>
            <div class="item">
                <img
                    src="https://loveincorporated.blob.core.windows.net/contentimages/gallery/14fe2a96-66ef-4192-a38e-520f04373e97-2473a59b-ab84-4133-8bc1-9f1aa286d76b-waterslide-home-exterior.jpg">
                <div class="mt-10">
                    <h5>Holiday Homes</h5>
                    <p>23 Aug-24 Aug, 2 adults</p>
                    <p>492 available</p>
                </div>
            </div>
            <div class="item">
                <img src="https://www.newconcept180.com/images/blog/deck-addition.png">
                <div class="mt-10">
                    <h5>Guest Houses</h5>
                    <p>23 Aug-24 Aug, 2 adults</p>
                    <p>492 available</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="propertyStayView_lightbox modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('front/img/gallery/1/1.png') }}" alt="image" class="w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('front/img/gallery/1/2.png') }}" alt="image" class="w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('front/img/gallery/1/3.png') }}" alt="image" class="w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection