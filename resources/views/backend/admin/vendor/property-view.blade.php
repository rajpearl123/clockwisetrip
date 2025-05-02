@extends('backend.layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="display: flex;justify-content: space-between;align-items: center;">
                    <h2>Property Details</h2>
                    <a href="{{ url('admin/property/list') }}" class="btn btn-success" >Back</a>
                </div>
            </div>
        </div>
    </div>

    <section class="my-new-slider-content">
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
                                <td>Name:</td>
                                <td>{{$property->title}}</td>
                            </tr>
                            <tr>
                                <td>Description:</td>
                                <td>{{ strip_tags($property->description) }}</td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td>{{$property->address}}</td>
                            </tr>
                            <tr>
                                <td>Google Map Link:</td>
                                <td>{{$property->google_map_link ?? 'N/A'}}</td>
                            </tr>
                            <tr>
                                <td>Passenger Capacity:</td>
                                <td>{{$property->passenger_capacity ?? 'N/A'}}</td>
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

                            {{-- <tr>
                                <td>Property Highlights:</td>
                                <td>
                                    <ul class="property-highlight-listss d-flex gap-2 align-items-center">
                                        <li>@foreach($highlightNames as $facilities)
                                        <li><i class="fa-solid fa-star"></i>{{ $facilities }}</li>
                                        @endforeach</i>
                                        </li>

                                    </ul>
                                </td>
                            </tr> --}}

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
    </section>

</div>




@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
@endpush