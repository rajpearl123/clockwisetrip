@extends('front.layout.app');
@section('content')
<div class="subheader">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="subheader-heading">
                    <h5>Car Details</h5>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
</div>
<div class="main-detailPage">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <section class="carDetailSpecification">
                    <div class="carTitle">
                        <h5 class="text-18 lh-16 fw-500 mt-5">Mercedes-Benz E-Class</h5>
                        <div class="titleBadge">Economy</div>
                    </div>
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="rounded-4 w-50" src="front/img/cars/1.png" alt="image">
                            </div>
                            <div class="carousel-item">
                                <img class="rounded-4 w-50" src="front/img/cars/1.png" alt="image">
                            </div>
                            <div class="carousel-item">
                                <img class="rounded-4 w-50" src="front/img/cars/1.png" alt="image">
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
                    <div class="carSpecs">
                        <div class="carSpecs-with-icon">
                            <div class="d-flex items-center">
                                <i class="icon-user-2"></i>
                                <p class="ixonTitle">4</p>
                            </div>
                            <div class="d-flex items-center">
                                <i class="icon-luggage"></i>
                                <p class="ixonTitle">1</p>
                            </div>
                            <div class="d-flex items-center">
                                <i class="icon-transmission"></i>
                                <p class="ixonTitle">Automatic</p>
                            </div>
                            <div class="d-flex items-center">
                                <i class="icon-speedometer"></i>
                                <p class="ixonTitle">Unlimited</p>
                            </div>
                            <div class="d-flex items-center">
                                <i class="icon-transmission"></i>
                                <p class="ixonTitle">Air conditioning</p>
                            </div>
                            <div class="d-flex items-center">
                                <i class="icon-speedometer"></i>
                                <p class="ixonTitle">Full to full</p>
                            </div>
                        </div>
                        <div class="includingPrice mt-20">
                            <h6>Included in the price</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex items-center gap-4">
                                        <i class="fa-solid fa-check"></i>
                                        <p class="ixonTitle">Free Cancellation</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex items-center gap-4">
                                        <i class="fa-solid fa-check"></i>
                                        <p class="ixonTitle">Price Guarantee</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex items-center gap-4">
                                        <i class="fa-solid fa-check"></i>
                                        <p class="ixonTitle">Instantly Confirmed</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex items-center gap-4">
                                        <i class="fa-solid fa-check"></i>
                                        <p class="ixonTitle">Third Party Liablities</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex items-center gap-4">
                                        <i class="fa-solid fa-check"></i>
                                        <p class="ixonTitle">Theft Protection</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex items-center gap-4">
                                        <i class="fa-solid fa-check"></i>
                                        <p class="ixonTitle">Damage Waviers</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="reviews">
                            <div class="flex-center text-dark-1 fw-600 text-14 size-40 rounded-4 bg-yellow-1">4.8</div>
                            <p>Execellent</p>
                            <a href="javascript:void(0)">(158 reviews)</a>
                        </div>
                    </div>
                </section>
                <div class="alertBox">
                    <i class="fa-solid fa-circle-info"></i>
                    Instant Confirmation: this Vehicle is available for booking. you will get your confirmation immediately.
                </div>
                <section class="driverDetails">
                    <form action="#">
                        <div class="mb-3">
                            <label for="name" class="form-label">First Name</label>
                            <input type="name" class="form-control" id="name" placeholder="Deiver Name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Last Name</label>
                            <input type="name" class="form-control" id="name" placeholder="Deiver Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Driver's Email">
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="mb-3">
                                    <label for="phone-number" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" id="name" placeholder="phone number">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label for="age" class="form-label">Driver Age</label>
                                    <input type="number" class="form-control" id="age" placeholder="18">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone-number" class="form-label">Vehicle Number</label>
                            <input type="text" class="form-control" id="name" placeholder="UK07V8288">
                        </div>
                    </form>
                </section>
            </div>
            <div class="col-md-6">
                <section class="pickUp-schedule">
                    <div class="pickUp mb-3">
                        <h5>Pick-Up</h5>
                        <span>March 15, 2022</span>
                        <span>Ahmedabad</span>
                    </div>
                    <div class="pickUp mb-3">
                        <h5>Drop-Off</h5>
                        <span>March 17, 2022</span>
                        <span>Delhi</span>
                    </div>
                </section>
                <section class="price-summary">
                    <div class="summary-heading">
                        <h5>Price Summary</h5>
                    </div>
                    <div class="summary-content">
                        <p>Car Rental Price</p>
                        <span>$220</span>
                    </div>
                    <p>Included in the price</p>
                    <div class="summary-content">
                        <p>Discount<span>(20% OFF)</span></p>
                        <span>-$20</span>
                    </div>
                    <div class="divider-line"></div>
                    <div class="totalAmount mb-30">
                        <p>Total Amount</p>
                        <span>$200</span>
                    </div>
                    <button class="btn button -redBtn-1 h-40 px-35 col-4 rounded-pill bg-blue-1 text-white m-auto">Book a Now</button>
                </section>
            </div>
        </div>
    </div>

</div>
@endsection