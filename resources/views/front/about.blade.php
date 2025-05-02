@extends('front.layout.app')
@section('content')
<style>
  @media (max-width:425px) {
    .swiper-slide-new.swiper-slide-visible.swiper-slide-active {
      width: 100% !important;
    }
  }
</style>
<section class="section-bg mt-80 layout-pt-lg layout-pb-lg">
  <div class="section-bg__item col-12">
    <img src="front/img/pages/about/1.png" alt="image">
  </div>
  <div class="container">
    <div class="row justify-center text-center">
      <div class="col-xl-6 col-lg-8 col-md-10">
        <h1 class="text-40 md:text-25 fw-600 text-white">Looking for joy?</h1>
        <div class="text-white mt-15">Your trusted trip companion</div>
      </div>
    </div>
  </div>
</section>

<section class="layout-pt-lg layout-pb-md">
  <div data-anim-wrap="" class="container">
    <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
      <div class="col-auto">
        <div class="sectionTitle -md">
          <h2 class="sectionTitle__title">Why Choose Us</h2>
          <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
        </div>
      </div>
    </div>

    <div class="row y-gap-40 justify-between pt-50">

      <div data-anim-child="slide-up delay-2" class="col-lg-3 col-sm-6">

        <div class="featureIcon -type-1 ">
          <div class="d-flex justify-center">
            <img src="#" data-src="front/img/featureIcons/1/1.svg" alt="image" class="js-lazy">
          </div>

          <div class="text-center mt-30">
            <h4 class="text-18 fw-500">Best Price Guarantee</h4>
            <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>

      </div>

      <div data-anim-child="slide-up delay-3" class="col-lg-3 col-sm-6">

        <div class="featureIcon -type-1 ">
          <div class="d-flex justify-center">
            <img src="#" data-src="front/img/featureIcons/1/2.svg" alt="image" class="js-lazy">
          </div>

          <div class="text-center mt-30">
            <h4 class="text-18 fw-500">Easy &amp; Quick Booking</h4>
            <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>

      </div>

      <div data-anim-child="slide-up delay-4" class="col-lg-3 col-sm-6">

        <div class="featureIcon -type-1 ">
          <div class="d-flex justify-center">
            <img src="#" data-src="front/img/featureIcons/1/3.svg" alt="image" class="js-lazy">
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

<section class="layout-pt-md">
  <div class="container">
    <div class="row y-gap-30 justify-between items-center">
      <div class="col-lg-5">
        <h2 class="text-30 fw-600">{{$about_us->title}}</h2>
        <p class="mt-5">{{$about_us->subtitle}}</p>

        <p class="text-dark-1 mt-60 lg:mt-40 md:mt-20">
          {{$about_us->description}}
        </p>
      </div>

      <div class="col-lg-6">
        <img src="{{ asset('/images/' . $about_us->image) }}" alt="image" class="rounded-4" height="500" width="700">

      </div>
    </div>
  </div>
</section>

<section class="pt-60">
  <div class="container">
    <div class="border-bottom-light pb-40">
      <div class="row y-gap-30 justify-center text-center">

        <div class="col-xl-3 col-6">
          <div class="text-40 lg:text-30 lh-13 fw-600">4,958</div>
          <div class="text-14 lh-14 text-light-1 mt-5">Destinations</div>
        </div>

        <div class="col-xl-3 col-6">
          <div class="text-40 lg:text-30 lh-13 fw-600">2,869</div>
          <div class="text-14 lh-14 text-light-1 mt-5">Total Properties</div>
        </div>

        <div class="col-xl-3 col-6">
          <div class="text-40 lg:text-30 lh-13 fw-600">2M</div>
          <div class="text-14 lh-14 text-light-1 mt-5">Happy customers</div>
        </div>

        <div class="col-xl-3 col-6">
          <div class="text-40 lg:text-30 lh-13 fw-600">574,974</div>
          <div class="text-14 lh-14 text-light-1 mt-5">Our Volunteers</div>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="layout-pt-lg layout-pb-lg">
  <div class="container">
    <div class="row y-gap-20 justify-between items-end">
      <div class="col-auto">
        <div class="sectionTitle -md">
          <h2 class="sectionTitle__title">Our Team</h2>
          <p class=" sectionTitle__text mt-5 sm:mt-0">Lorem ipsum dolor sit amet</p>
        </div>
      </div>

      <div class="col-auto">

        <div class="d-flex x-gap-15 items-center justify-center">
          <div class="col-auto">
            <button class="d-flex items-center text-24 arrow-left-hover js-team-prev">
              <i class="icon icon-arrow-left"></i>
            </button>
          </div>



          <div class="col-auto">
            <button class="d-flex items-center text-24 arrow-right-hover js-team-next">
              <i class="icon icon-arrow-right"></i>
            </button>
          </div>
        </div>

      </div>
    </div>

    <div class="overflow-hidden pt-40 js-section-slider" data-gap="30" data-slider-cols="xl-5 lg-4 md-2 sm-2 base-1" data-nav-prev="js-team-prev" data-pagination="js-team-pag" data-nav-next="js-team-next">
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide-new">
          <div class="">
            <img src="front/img/team/1.png" alt="image" class="rounded-4 col-12">

            <div class="mt-10">
              <div class="text-18 lh-15 fw-500">Cody Fisher</div>
              <div class="text-14 lh-15">Medical Assistant</div>
            </div>
          </div>
        </div>
        <div class="swiper-slide swiper-slide-new">
          <div class="">
            <img src="front/img/team/2.png" alt="image" class="rounded-4 col-12">

            <div class="mt-10">
              <div class="text-18 lh-15 fw-500">Dianne Russell</div>
              <div class="text-14 lh-15">Web Designer</div>
            </div>
          </div>
        </div>
        <div class="swiper-slide swiper-slide-new">
          <div class="">
            <img src="front/img/team/3.png" alt="image" class="rounded-4 col-12">

            <div class="mt-10">
              <div class="text-18 lh-15 fw-500">Jerome Bell</div>
              <div class="text-14 lh-15">Marketing Coordinator</div>
            </div>
          </div>
        </div>
        <div class="swiper-slide swiper-slide-new">
          <div class="">
            <img src="front/img/team/4.png" alt="image" class="rounded-4 col-12">

            <div class="mt-10">
              <div class="text-18 lh-15 fw-500">Theresa Webb</div>
              <div class="text-14 lh-15">Nursing Assistant</div>
            </div>
          </div>
        </div>
        <div class="swiper-slide swiper-slide-new">
          <div class="">
            <img src="front/img/team/5.png" alt="image" class="rounded-4 col-12">

            <div class="mt-10">
              <div class="text-18 lh-15 fw-500">Cameron Williamson</div>
              <div class="text-14 lh-15">Dog Trainer</div>
            </div>
          </div>
        </div>
        <div class="swiper-slide swiper-slide-new">
          <div class="">
            <img src="front/img/team/6.png" alt="image" class="rounded-4 col-12">

            <div class="mt-10">
              <div class="text-18 lh-15 fw-500">Courtney Henry</div>
              <div class="text-14 lh-15">Medical Assistant</div>
            </div>
          </div>
        </div>
        <div class="swiper-slide swiper-slide-new">
          <div class="">
            <img src="front/img/team/7.png" alt="image" class="rounded-4 col-12">

            <div class="mt-10">
              <div class="text-18 lh-15 fw-500">Theresa Williamson</div>
              <div class="text-14 lh-15">Web Designer</div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center align-items-center mt-30">
        <div class="pagination -dots text-border js-team-pag"></div>
      </div>
    </div>
  </div>
</section>

<section class="section-bg layout-pt-lg layout-pb-lg">
  <div class="section-bg__item -mx-20 bg-light-2"></div>

  <div class="container">
    <div class="row justify-center text-center">
      <div class="col-auto">
        <div class="sectionTitle -md">
          <h2 class="sectionTitle__title">Overheard from travelers</h2>
          <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
        </div>
      </div>
    </div>

    <div class="overflow-hidden pt-80 js-section-slider" data-gap="30" data-slider-cols="xl-3 lg-3 md-2 sm-1 base-1">
      <div class="swiper-wrapper">

        <div class="swiper-slide swiper-slide-new">
          <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40">
            <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
            <p class="testimonials__text lh-18 fw-500 text-dark-1">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."</p>

            <div class="pt-20 mt-28 border-top-light">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img class="size-60" src="front/img/avatars/1.png" alt="image">
                </div>

                <div class="col-auto">
                  <div class="text-15 fw-500 lh-14">Courtney Henry</div>
                  <div class="text-14 lh-14 text-light-1 mt-5">Web Designer</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide swiper-slide-new">
          <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40">
            <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
            <p class="testimonials__text lh-18 fw-500 text-dark-1">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."</p>

            <div class="pt-20 mt-28 border-top-light">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img class="size-60" src="front/img/avatars/1.png" alt="image">
                </div>

                <div class="col-auto">
                  <div class="text-15 fw-500 lh-14">Courtney Henry</div>
                  <div class="text-14 lh-14 text-light-1 mt-5">Web Designer</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide swiper-slide-new">
          <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40">
            <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
            <p class="testimonials__text lh-18 fw-500 text-dark-1">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."</p>

            <div class="pt-20 mt-28 border-top-light">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img class="size-60" src="front/img/avatars/1.png" alt="image">
                </div>

                <div class="col-auto">
                  <div class="text-15 fw-500 lh-14">Courtney Henry</div>
                  <div class="text-14 lh-14 text-light-1 mt-5">Web Designer</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide swiper-slide-new">
          <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40">
            <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
            <p class="testimonials__text lh-18 fw-500 text-dark-1">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."</p>

            <div class="pt-20 mt-28 border-top-light">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img class="size-60" src="front/img/avatars/1.png" alt="image">
                </div>

                <div class="col-auto">
                  <div class="text-15 fw-500 lh-14">Courtney Henry</div>
                  <div class="text-14 lh-14 text-light-1 mt-5">Web Designer</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide swiper-slide-new">
          <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40">
            <h4 class="text-16 fw-500 text-blue-1 mb-20">Hotel Equatorial Melaka</h4>
            <p class="testimonials__text lh-18 fw-500 text-dark-1">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic."</p>

            <div class="pt-20 mt-28 border-top-light">
              <div class="row x-gap-20 y-gap-20 items-center">
                <div class="col-auto">
                  <img class="size-60" src="front/img/avatars/1.png" alt="image">
                </div>

                <div class="col-auto">
                  <div class="text-15 fw-500 lh-14">Courtney Henry</div>
                  <div class="text-14 lh-14 text-light-1 mt-5">Web Designer</div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="row y-gap-30 items-center pt-40 sm:pt-20">
      <div class="col-xl-4">
        <div class="row y-gap-30 text-dark-1">
          <div class="col-sm-5 col-6">
            <div class="text-30 lh-15 fw-600">13m+</div>
            <div class="lh-15">Happy People</div>
          </div>

          <div class="col-sm-5 col-6">
            <div class="text-30 lh-15 fw-600">4.88</div>
            <div class="lh-15">Overall rating</div>

            <div class="d-flex x-gap-5 items-center pt-10">

              <div class="icon-star text-dark-1 text-10"></div>

              <div class="icon-star text-dark-1 text-10"></div>

              <div class="icon-star text-dark-1 text-10"></div>

              <div class="icon-star text-dark-1 text-10"></div>

              <div class="icon-star text-dark-1 text-10"></div>

            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-8">
        <div class="row y-gap-30 justify-between items-center">

          <div class="col-md-auto col-sm-6">
            <div class="d-flex justify-center">
              <img src="front/img/clients/1.svg" alt="image">
            </div>
          </div>

          <div class="col-md-auto col-sm-6">
            <div class="d-flex justify-center">
              <img src="front/img/clients/2.svg" alt="image">
            </div>
          </div>

          <div class="col-md-auto col-sm-6">
            <div class="d-flex justify-center">
              <img src="front/img/clients/3.svg" alt="image">
            </div>
          </div>

          <div class="col-md-auto col-sm-6">
            <div class="d-flex justify-center">
              <img src="front/img/clients/4.svg" alt="image">
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

      <div class="col-auto">
        <div class="single-field -w-410 d-flex x-gap-10 y-gap-20">
          <div>
            <input class="bg-white h-60" type="text" placeholder="Your Email">
          </div>

          <div>
            <button class="button px-20 fw-400 text-16 border-white -outline-white h-60 text-white ml-20">Subscribe</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  var swiper = new Swiper('.js-section-slider', {
    slidesPerView: 1, // Default for mobile
    spaceBetween: 10, // Space between slides
    navigation: {
      nextEl: '.js-team-next',
      prevEl: '.js-team-prev',
    },
    pagination: {
      el: '.js-team-pag',
      clickable: true,
    },
    breakpoints: {
      400: {
        slidesPerView: 1,
        spaceBetween: 40,
      },
      640: { // When window width is >= 640px
        slidesPerView: 1,
        spaceBetween: 40,
      },
      768: { // When window width is >= 768px
        slidesPerView: 2,
        spaceBetween: 40,
      },
      1024: { // When window width is >= 1024px
        slidesPerView: 4,
        spaceBetween: 30,
      },
      1280: { // When window width is >= 1280px
        slidesPerView: 5,
        spaceBetween: 30,
      }
    }
  });
</script>
@endsection