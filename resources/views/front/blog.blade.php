@extends('front.layout.app')
@section('content')
<section data-anim="fade" class="d-flex items-center py-15 border-top-light">
  <div class="container">
    <div class="row y-gap-10 items-center justify-between">
      <div class="col-auto">
        <div class="row x-gap-10 y-gap-5 items-center text-14 text-light-1">
          <div class="col-auto">
            <div class="">Europe</div>
          </div>
          <div class="col-auto">
            <div class="">&gt;</div>
          </div>
          <div class="col-auto">
            <div class="">United Kingdom (UK)</div>
          </div>
          <div class="col-auto">
            <div class="">&gt;</div>
          </div>
          <div class="col-auto">
            <div class="text-dark-1">London</div>
          </div>
        </div>
      </div>

      <div class="col-auto">
        <a href="#" class="text-14 text-light-1">London Tourism: Best of London</a>
      </div>
    </div>
  </div>
</section>

<section data-anim-wrap="" class="layout-pt-md layout-pb-lg">
  <div class="container">
    <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
      <div class="col-auto">
        <div class="sectionTitle -md">
          <h2 class="sectionTitle__title">Travel articles</h2>
          <p class=" sectionTitle__text mt-5 sm:mt-0">Lorem ipsum is placeholder text commonly used in site.</p>
        </div>
      </div>
    </div>

    <div data-anim-child="slide-up delay-2" class="tabs -pills-3 pt-30 js-tabs">
      <div class="tabs__controls row x-gap-10 justify-center js-tabs-controls">

        <div class="col-auto">
          <button class="tabs__button text-14 fw-500 px-20 py-10 rounded-4 bg-light-2 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">Art and culture</button>
        </div>

        <div class="col-auto">
          <button class="tabs__button text-14 fw-500 px-20 py-10 rounded-4 bg-light-2 js-tabs-button " data-tab-target=".-tab-item-2">Beaches</button>
        </div>

        <div class="col-auto">
          <button class="tabs__button text-14 fw-500 px-20 py-10 rounded-4 bg-light-2 js-tabs-button " data-tab-target=".-tab-item-3">Adventure travel</button>
        </div>

        <div class="col-auto">
          <button class="tabs__button text-14 fw-500 px-20 py-10 rounded-4 bg-light-2 js-tabs-button " data-tab-target=".-tab-item-4">Explore</button>
        </div>

        <div class="col-auto">
          <button class="tabs__button text-14 fw-500 px-20 py-10 rounded-4 bg-light-2 js-tabs-button " data-tab-target=".-tab-item-5">Family holidays</button>
        </div>

        <div class="col-auto">
          <button class="tabs__button text-14 fw-500 px-20 py-10 rounded-4 bg-light-2 js-tabs-button " data-tab-target=".-tab-item-6">Air travel</button>
        </div>

        <div class="col-auto">
          <button class="tabs__button text-14 fw-500 px-20 py-10 rounded-4 bg-light-2 js-tabs-button " data-tab-target=".-tab-item-7">Food and drink</button>
        </div>

      </div>

      <div class="tabs__content pt-30 js-tabs-content">

        <div class="tabs__pane -tab-item-1 is-tab-el-active">
          <div class="row y-gap-30">

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/1.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/2.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/3.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/4.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/5.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/6.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/7.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/8.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/9.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

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

        <div class="tabs__pane -tab-item-2 ">
          <div class="row y-gap-30">

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/1.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/2.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/3.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/4.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/5.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/6.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/7.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/8.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/9.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

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

        <div class="tabs__pane -tab-item-3 ">
          <div class="row y-gap-30">

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/1.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/2.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/3.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/4.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/5.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/6.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/7.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/8.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/9.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

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

        <div class="tabs__pane -tab-item-4 ">
          <div class="row y-gap-30">

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/1.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/2.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/3.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/4.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/5.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/6.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/7.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/8.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/9.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

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

        <div class="tabs__pane -tab-item-5 ">
          <div class="row y-gap-30">

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/1.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/2.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/3.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/4.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/5.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/6.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/7.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/8.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/9.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

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

        <div class="tabs__pane -tab-item-6 ">
          <div class="row y-gap-30">

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/1.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/2.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/3.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/4.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/5.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/6.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/7.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/8.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/9.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

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

        <div class="tabs__pane -tab-item-7 ">
          <div class="row y-gap-30">

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/1.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/2.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/3.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/4.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/5.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/6.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/7.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/8.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

            </div>

            <div class="col-lg-4 col-sm-6">

              <a href="" class="blogCard -type-1 d-block ">
                <div class="blogCard__image">
                  <div class="ratio ratio-4:3 rounded-8">
                    <img class="img-ratio js-lazy" src="#" data-src="front/img/blog/grids/9.png" alt="image">
                  </div>
                </div>

                <div class="pt-20">
                  <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
                  <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                </div>
              </a>

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
  </div>
</section>

<section class="layout-pt-md layout-pb-md bg-dark-2">
  <div class="container">
    <div class="row y-gap-30 justify-between items-center">
      <div class="col-auto">
        <div class="d-flex y-gap-20 flex-wrap items-center">
          <div class="icon-newsletter text-60 sm:text-40 text-white"></div>

          <div class="ml-30">
            <h4 class="text-26 text-white fw-600">Your Travel Journey Starts Here</h4>
            <div class="text-white">Sign up and we'll send the best deals to you</div>
          </div>
        </div>
      </div>

      <div class="col-auto">
        <div class="single-field d-flex x-gap-10 y-gap-20">
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
@endsection