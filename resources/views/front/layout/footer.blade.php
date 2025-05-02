<footer class="footer -type-1">
    @php
    $footer_single = \App\Models\Footer::first();
    @endphp
    <div class="container">
        <div class="pt-60 pb-60">
            <div class="row y-gap-40 justify-between xl:justify-start">
                <div class="col-xl-3 col-md-6 col-6">
                    <h5 class="text-16 fw-500 mb-30">Contact Us</h5>
                    <div class="mt-30 footer-contact-info">
                        <div class="text-14 mt-30">Toll Free Customer Care</div>
                        <a href="tel:+918530653748" class="text-18 fw-500 text-blue-1 mt-5">+91 {{$footer_single->mobile_no}}</a>
                    </div>
                    <div class="mt-35 footer-contact-info">
                        <div class="text-14 mt-30">Need live support?</div>
                        <a href="mailto:info@example.com" class="text-18 fw-400 text-blue-1 mt-5">{{$footer_single->email}}</a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-6">
                    <h5 class="text-16 fw-500 mb-30">Company</h5>
                    <div class="d-flex y-gap-10 flex-column">
                        <a href="{{ url('about')}}">About Us</a>
                        <!--<a href="{{url('career')}}">Careers</a>-->
                        <a href="{{url('blog')}}">Blog</a>
                        <a href="{{url('term')}}">Press</a>
                        <a href="#">Gift Cards</a>
                        <!-- <a href="#">Magazine</a> -->
                    </div>
                </div>
                <div class="col-xl-2 col-md-3 col-6">
                    <h5 class="text-16 fw-500 mb-30">Support</h5>
                    <div class="d-flex y-gap-10 flex-column">
                        <a href="{{url('contactus')}}">Contact</a>
                        <a href="{{url('privacy-policy')}}">Privacy Policy</a>
                        <a href="{{url('terms-and-conditions')}}">Terms and Conditions</a>
                        <a href="{{url('sitemap')}}">Sitemap</a>
                    </div>
                </div>
                <!--<div class="col-xl-2 col-md-4 col-6">-->
                <!--    <h5 class="text-16 fw-500 mb-30">Other Services</h5>-->
                <!--    <div class="d-flex y-gap-10 flex-column">-->
                <!--        <a href="{{url('carbooking')}}">Car Hire</a>-->
                <!--        <a href="{{url('bikebooking')}}">Bike Hire</a>-->
                <!--        <a href="{{url('travel-on-emi')}}">Travel On Emi's</a>-->
                <!--        <a href="{{url('booking')}}">Flight Finder</a>-->
                <!--        <a href="{{url('trainbooking')}}">Train Finder</a>-->
                <!--        <a href="{{url('busbooking')}}">Bus Finder</a>-->
                <!--        <a href="{{url('monthlystays')}}">Clockwise Room</a>-->
                <!--    </div>-->
                <!--</div>-->
                {{-- <div class="col-xl-2 col-sm-6 col-12">
                    <h5 class="text-16 fw-500 mb-30">Mobile</h5>
                    <div class="d-flex items-center px-5 py-10 rounded-4 border-light">
                        <div class="icon-apple text-24"></div>
                        <div class="ml-20">
                            <div class="text-14 text-light-1">Download on the</div>
                            <div class="text-15 lh-1 fw-500">Apple Store</div>
                        </div>
                    </div>
                    <div class="d-flex items-center px-5 py-10 rounded-4 border-light mt-20">
                        <div class="icon-play-market text-24"></div>
                        <div class="ml-20">
                            <div class="text-14 text-light-1">Get in on</div>
                            <div class="text-15 lh-1 fw-500">Google Play</div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="py-20 border-top-light">
            <div class="row justify-between items-center y-gap-10">
                <div class="col-auto">
                    <div class="row x-gap-30 y-gap-10">
                        <div class="col-auto">
                            <div class="d-flex items-center">
                                Copyright 2024 . All Rights Reserved By <a href="https://pearlorganisation.com/" target="self" class="ml-5">Pearl Organisation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="row y-gap-10 items-center">
                        <div class="col-auto">
                            <div class="d-flex items-center">
                                <button class="d-flex items-center text-14 fw-500 text-dark-1 mr-10">
                                    <i class="fa-solid fa-globe text-16 me-2"></i>
                                    <span class="underline">Hindi (Hn)</span>
                                </button>
                                <button class="d-flex items-center text-14 fw-500 text-dark-1">
                                    <i class="fas fa-rupee-sign text-16 mr-10"></i>
                                    <span class="underline">INR</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="d-flex x-gap-20 items-center">
                                <a href="#"><i class="fa-brands fa-facebook-f text-14"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter text-14"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram text-14"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in text-14"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>