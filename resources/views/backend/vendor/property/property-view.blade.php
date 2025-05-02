@extends('backend.vendor.layouts.app')
@section('title', 'Add Property')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


<style>
    .property-inner-carousel-div {
        border-radius: 30px;

    }

    .property-slider-carousel-div {
        width: 80%;
        margin: auto;
    }

    .customer-review img {
        width: 50px;
        height: 50px;
        border-radius: 50%;

    }

    .property-highlight-listss {
        list-style: none;
        padding-left: 0;
    }

    .property-highlight-listss li {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .property-detailss h4 {
        font-size: 25px;
        color: #000;
    }

    .customer-review {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 10px;
        padding: 10px;
    }

    .property-content-details-section {
        background: #fff;
        padding: 16px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .vendor-properties-details {
        margin-top: 100px;
    }

    .property-detailss {
        display: flex;
        align-items: baseline;
        gap: 10px;
    }

    .property-detailss p {
        margin-bottom: 0;
        font-size: 16px;
    }

    .property-detailss span {
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 1px;
    }

    .propertyy-highlights-detaillss h4 {
        color: #000;
        margin-top: 15px;
    }

    .vendor-properties-details .property-details-tittle {
        font-size: 26px;
        color: #000;
    }

    .vendor-properties-details .swiper {
        width: 100%;
        height: 100%;
    }

    .vendor-properties-details .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .vendor-properties-details .swiper-slide img {
        display: block;
        object-fit: cover;
    }

    .vendor-properties-details .swiper {
        width: 100%;
        height: 300px;
        margin-left: auto;
        margin-right: auto;
    }

    .vendor-properties-details .swiper-slide {
        background-size: cover;
        background-position: center;
    }

    .vendor-properties-details .mySwiper2 {

        width: 100%;
    }

    .vendor-properties-details .mySwiper {
        height: 20%;
        box-sizing: border-box;
        padding: 10px 0;
    }

    .vendor-properties-details .mySwiper .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
    }

    .vendor-properties-details .mySwiper .swiper-slide-thumb-active {
        opacity: 1;
    }

    .vendor-properties-details .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .swiper-button-next:after,
    .swiper-button-prev:after {
        display: none;
    }

    /* akhil-css */

    .my-new-slider-content .swiper {
        width: 100%;
        height: 350px;
        border-radius: 10px;
    }

    .my-new-slider-content .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .my-new-slider-content .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        cursor: pointer;
        transition: 0.3s;
    }

    .my-new-slider-content .swiper-slide img:hover {
        transform: scale(1.1);
    }

    .my-new-slider-content .accordion-button::after {
        content: "+";
        font-size: 20px;
        font-weight: bold;
        position: absolute;
        right: 15px;
        color: #f06548;
    }

    .my-new-slider-content .accordion-button:not(.collapsed)::after {
        background-image: none;
    }

    .my-new-slider-content .accordion-button.collapsed::after {
        content: "-";
        color: #f06548;
    }

    .my-new-slider-content .accordion-button::after {
        background-image: none;
    }

    .my-new-slider-content .fa-solid:before {
        color: white;
    }

    .property-content-details-section .fa-solid::before {
        color: initial;
    }

    .my-new-slider-content .fa-solid:after {
        color: white;
    }

    .my-new-slider-content .swiper-button-next {
        background-color: #f06548;
    }

    .my-new-slider-content .swiper-button-prev {
        background-color: #f06548;
    }

    .my-new-slider-content .swiper-pagination-bullet {
        background-color: #f06548;
    }

    .my-new-slider-content .accordion-button {
        color: #f06548;
        background-color: #fff;
    }

    /*  */
</style>



<!-- akhil -->
<section class="my-new-slider-content">
    <div class="container">
        <!-- Swiper -->
        <div class="swiper mySwiper-new-main my-main-slide">
            <div class="swiper-wrapper">
                @foreach($property->images as $image)
                    <div class="swiper-slide">
                        <img
                            src="{{asset('front/img/propertys/'.$image)}}" />
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"><i class="fa-solid fa-arrow-right"></i></div>
            <div class="swiper-button-prev"><i class="fa-solid fa-arrow-left"></i></div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="my-3">
            <div class="property-content-details-section">
                <!-- Property Details Table -->
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Field</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tittle:</td>
                            <td>{{$property->title}}</td>
                        </tr>
                        <tr>
                            <td>Location:</td>
                            <td>{{$property->address}}</td>
                        </tr>

                        <tr>
                            <td>Prices:</td>
                            <td>{{$property->price}}</td>
                        </tr>
                        <tr>
                            <td>Category:</td>
                            <td>{{$category->name}}</td>
                        </tr>
                        <tr>
                            <td>Do they provide breakfast?</td>
                            <td>{{ucfirst($property->breakfast)}}</td>
                        </tr>
                        <tr>
                            <td>No of Bathrooms available:</td>
                            <td>{{$property->bathrooms}}</td>
                        </tr>
                        <tr>
                            <td>Which type of bed they provides?</td>
                            <td>{{ ucfirst(str_replace('-', ' ', $property->bed_type)) }}</td>
                        </tr>
                        <tr>
                            <td>Do they allow parking?</td>
                            <td>{{$property->parking}}</td>
                        </tr>
                        <tr>
                            <td>Which language their staff speaks?</td>
                            <td>
                            {{ $property->staff_language ? collect(json_decode($property->staff_language, true))->map(fn($lang) => ucfirst($lang))->implode(', ') : 'N/A' }}                            </td>
                        </tr>
                        <tr>
                            <td>Passenger capacity:</td>
                            <td>{{$property->passenger_capacity}}</td>
                        </tr>
                        <tr>
                            <td>Do they allow childrens?</td>
                            <td>{{$property->children_allowed}}</td>
                        </tr>
                        <tr>
                            <td>Their Check-In time?</td>
                            <td>{{$property->check_in_time}}</td>
                        </tr>
                        <tr>
                            <td>Their Check-Out time?</td>
                            <td>{{$property->check_out_time}}</td>
                        </tr>
                        <tr>
                            <td>Do they allow smoking?</td>
                            <td>{{$property->smoking}}</td>
                        </tr>
                        <tr>
                            <td>Do they allow pets?</td>
                            <td>{{$property->pets}}</td>
                        </tr>
                        <tr>
                            <td>Do they allow parties?</td>
                            <td>{{$property->parties}}</td>
                        </tr>

                        <!-- Property Facilities -->
                        <tr>
                            <td>Property Facilities:</td>
                            <td>
                                <ul class="property-highlight-listss d-flex gap-2 align-items-center">
                                    <li>
                                        @foreach($facilityNames as $facilities)
                                        <li><i class="fa-solid fa-star"></i>{{ $facilities }}</li>
                                        @endforeach</i> 
                                    </li>
                                    
                                </ul>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- accordian -->
            <!-- <div class="accordion mt-3" id="accordionExample2">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne2">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
                        <div class="accordion-body">
                            This is the second item's accordion body. You can place any content here as well.
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

</section>
<!--  -->


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<!-- akhil swiper-js -->
<script>
    var swiper = new Swiper(".mySwiper-new-main", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<!--  -->
<script>
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
</script>

@endsection