<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">
<!-- Mirrored from creativelayers.net/themes/gotrip-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 07:30:02 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Google fonts -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&amp;display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('front/css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

    <title>clockwisetrip.com</title>

    <style>
        .position-relative {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>

</head>

<body>
    <div class="preloader js-preloader">
        <div class="preloader__wrap">
            <div class="preloader__icon">
                <svg width="38" height="37" viewBox="0 0 38 37" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_41)">
                        <path
                            d="M32.9675 13.9422C32.9675 6.25436 26.7129 0 19.0251 0C11.3372 0 5.08289 6.25436 5.08289 13.9422C5.08289 17.1322 7.32025 21.6568 11.7327 27.3906C13.0538 29.1071 14.3656 30.6662 15.4621 31.9166V35.8212C15.4621 36.4279 15.9539 36.92 16.561 36.92H21.4895C22.0965 36.92 22.5883 36.4279 22.5883 35.8212V31.9166C23.6849 30.6662 24.9966 29.1071 26.3177 27.3906C30.7302 21.6568 32.9675 17.1322 32.9675 13.9422V13.9422ZM30.7699 13.9422C30.7699 16.9956 27.9286 21.6204 24.8175 25.7245H23.4375C25.1039 20.7174 25.9484 16.7575 25.9484 13.9422C25.9484 10.3587 25.3079 6.97207 24.1445 4.40684C23.9229 3.91841 23.6857 3.46886 23.4347 3.05761C27.732 4.80457 30.7699 9.02494 30.7699 13.9422ZM20.3906 34.7224H17.6598V32.5991H20.3906V34.7224ZM21.0007 30.4014H17.0587C16.4167 29.6679 15.7024 28.8305 14.9602 27.9224H16.1398C16.1429 27.9224 16.146 27.9227 16.1489 27.9227C16.152 27.9227 23.0902 27.9224 23.0902 27.9224C22.3725 28.8049 21.6658 29.6398 21.0007 30.4014ZM19.0251 2.19765C20.1084 2.19765 21.2447 3.33365 22.1429 5.3144C23.1798 7.60078 23.7508 10.6649 23.7508 13.9422C23.7508 16.6099 22.8415 20.6748 21.1185 25.7245H16.9322C15.2086 20.6743 14.2994 16.6108 14.2994 13.9422C14.2994 10.6649 14.8706 7.60078 15.9075 5.3144C16.8057 3.33365 17.942 2.19765 19.0251 2.19765V2.19765ZM7.28053 13.9422C7.28053 9.02494 10.3184 4.80457 14.6157 3.05761C14.3647 3.46886 14.1273 3.91841 13.9059 4.40684C12.7425 6.97207 12.102 10.3587 12.102 13.9422C12.102 16.7584 12.9462 20.7176 14.6126 25.7245H13.2259C9.33565 20.6126 7.28053 16.5429 7.28053 13.9422Z"
                            fill="#3554D1" />
                    </g>

                    <defs>
                        <clipPath id="clip0_1_41">
                            <rect width="36.92" height="36.92" fill="white" transform="translate(0.540039)" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </div>

        <div class="preloader__title">clockwisetrip.com</div>
    </div>

    <main>
        @include('front.layout.validate')
        <header data-add-bg="bg-red-1" class="header bg-green js-header" data-x="header" data-x-toggle="is-menu-opened">
            <div data-anim="fade" class="header__container px-20 sm:px-20">
                <div class="row justify-between items-center">
                    <div class="col-auto">
                        <div class="d-flex items-center">
                            <a href="{{ url('/') }}" class="header-logo mr-20" data-x="header-logo"
                                data-x-toggle="is-logo-dark">
                                <img src="{{ asset('front/img/logo/logo_3.png') }}" alt="logo icon">
                                <img src="{{ asset('front/img/logo/logo_3.png') }}" alt="logo icon">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="d-flex items-center">
                            <div class="row x-gap-20 items-center md:d-none">
                                <div class="col-auto">
                                    {{-- <button class="d-flex items-center text-16 text-white" data-x-click="currency">
                                        <span class="js-currencyMenu-mainTitle">INR</span>
                                        <i class="icon-chevron-sm-down text-7 ml-10"></i>
                                    </button> --}}
                                </div>
                                <div class="col-auto">
                                    <div class="w-1 h-20 bg-white-20"></div>
                                </div>
                                <div class="col-auto">
                                    <button class="d-flex items-center text-16 text-white" data-x-click="lang">
                                        <img src="{{ asset('front/img/general/india.png') }}" alt="image"
                                            class="rounded-full mr-10" height="20" width="20">
                                        <span class="js-language-mainTitle ">India</span>
                                        <i class="icon-chevron-sm-down text-7 ml-15"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
                                <a href="{{ url('get-property') }}"
                                    class="button px-20 fw-400 text-16 -white bg-white h-50 text-dark-1">List Your
                                    Property</a>
                                @if (Auth::check())
                                    <di
                                        class="button px-20 fw-400 text-16 border-white -outline-white h-50 text-white ml-20">
                                        <div class="user-dropdown">
                                            <div class="user-icon">
                                                <i class="fas fa-user-circle " style="font-size: 25px;"></i>
                                                <!-- Correct Font Awesome user icon -->
                                            </div>
                                            <div class="user-name">
                                                {{ Auth::user()->name }}
                                                <span class="dropdown-arrow">&#9662;</span> <!-- Dropdown arrow -->
                                            </div>
                                            <div class="dropdown-menu" style="margin-right: 100px;">
                                                <ul>
                                                    <li><a href="#">Manage Account</a></li>
                                                    <li><a href="{{ route('logout') }}">Sign Out</a></li>
                                                </ul>
                                            </div>
                                        </div>
                            </div>
                        @else
                            <a href="{{ route('register') }}"
                                class="button px-20 fw-400 text-16 border-white -outline-white h-50 text-white ml-20">Sign
                                In / Register</a>
                            @endif
                        </div>
                        <div class="d-none xl:d-flex x-gap-20 items-center text-white" data-x="header-mobile-icons"
                            data-x-toggle="text-white">
                            <div><a href="#!" class="d-flex items-center icon-user text-inherit text-22"></a></div>
                            <div><button class="d-flex items-center icon-menu text-inherit text-20"
                                    data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="mobile-menu" id="mobileMenu">
                <!-- <div class="mobile-menu-header">
      <a href="index.html" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
        <img src="{{ asset('front/img/logo/chockwisehotel_logo.png') }}" alt="logo icon">
        <img src="{{ asset('front/img/logo/chockwisehotel_logo.png') }}" alt="logo icon">
      </a>
    </div> -->
                <div class="col-auto">
                    <div class="d-block">
                        <div class="row x-gap-20 items-center mb-20">
                            <div class="col-auto">
                                <button class="d-flex items-center text-16 text-white" data-x-click="currency">
                                    <span class="js-currencyMenu-mainTitle">INR</span>
                                    <!-- <i class="icon-chevron-sm-down text-7 ml-10"></i> -->
                                </button>
                            </div>
                            <div class="col-auto">
                                <div class="w-1 h-20 bg-white-20"></div>
                            </div>
                            <div class="col-auto">
                                <button class="d-flex items-center text-16 text-white" data-x-click="lang">
                                    <img src="{{ asset('front/img/general/india.png') }}" alt="image"
                                        class="rounded-full mr-10" height="20" width="20">
                                    <span class="js-language-mainTitle ">India</span>
                                    <!-- <i class="icon-chevron-sm-down text-7 ml-15"></i> -->
                                </button>
                            </div>
                        </div>
                        <div class="d-flex items-center">
                            <a href="{{ url('get-property') }}"
                                class="button px-20 fw-400 text-16 -white bg-white h-50 text-dark-1">List Your
                                Property</a>
                            <a href="{{ route('register') }}"
                                class="button px-20 fw-400 text-16 border-white -outline-white h-50 text-white ml-20">Sign
                                In / Register</a>
                        </div>
                        <div class="d-none xxl:d-none xl:d-flex x-gap-20 items-center  text-white"
                            data-x="header-mobile-icons" data-x-toggle="text-white">
                            <div><a href="#!" class="d-flex items-center icon-user text-inherit text-22"></a>
                            </div>
                            <div><button class="d-flex items-center icon-menu text-inherit text-20"
                                    data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section data-anim-wrap class="masthead -type-1 z-5">
            <div data-anim-child="fade" class="masthead__bg">
                <img src="#" alt="image" data-src="{{ asset('front/img/masthead/1/bg.webp') }}"
                    class="js-lazy">
            </div>

            <div class="container">
                <div class="row justify-center">
                    <div class="col-xl-6 col-lg-7 col-md-9">
                        <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4">
                            <div class="row y-gap-20">
                                <div class="col-12">
                                    <h1 class="text-22 fw-500">Sign in or create an account</h1>
                                    <p class="mt-10">Already have an account? <a href="{{ route('login') }}"
                                            class="text-blue-1">Log in</a></p>
                                </div>

                                <form action="{{ route('register') }}" method="POST" class="sign-up-form">
                                    @csrf

                                    <div class="col-12 mb-5">
                                        <div class="form-input">
                                            <input class="user_name" type="text" required name="name"
                                                value="{{ old('name') }}" autocomplete="one-time-code" />
                                            <label class="lh-1 text-14 text-light-1">Name</label>
                                        </div>
                                        <span class="error text-danger" id="nameError"></span>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-input">
                                            <input class="email_input" type="email" name="email" required
                                                value="{{ old('email') }}" autocomplete="one-time-code" />
                                            <label class="lh-1 text-14 text-light-1">Email</label>
                                        </div>
                                        <span class="text-danger error" id="emailError"></span>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-input position-relative">
                                            <input type="password" name="password" id="password"
                                                autocomplete="one-time-code" required />
                                            <label class="lh-1 text-14 text-light-1">Password</label>
                                            <span class="toggle-password" onclick="togglePassword('password')">
                                                <i class="fas fa-eye text-light-1" id="eye-icon-password"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-input position-relative">
                                            <input type="password" name="cpassword" id="cpassword"
                                                autocomplete="one-time-code" required />
                                            <label class="lh-1 text-14 text-light-1">Confirm Password</label>
                                            <span class="toggle-password" onclick="togglePassword('cpassword')">
                                                <i class="fas fa-eye text-light-1" id="eye-icon-cpassword"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- <div class="col-12">
                                        <div class="d-flex">
                                            <div class="form-checkbox mt-5">
                                                <input type="checkbox" name="promotions" {{ old('promotions') ? 'checked' : '' }} />
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>
                                            <div class="text-15 lh-15 text-light-1 ml-10">Email me exclusive Agoda promotions. I can opt out later as stated in the Privacy Policy.</div>
                                        </div>
                                    </div> -->

                                    <div class="col-12">
                                        <button type="submit"
                                            class="button py-20 -dark-1 bg-blue-1 text-white mt-20">
                                            Sign Up
                                            <div class="icon-arrow-top-right ml-15"></div>
                                        </button>
                                    </div>
                                </form>

                            </div>

                            <div class="row y-gap-20 pt-30">
                                <div class="col-12">
                                    <div class="text-center">or sign in with</div>

                                    {{-- <a href="#"
                                        style="cursor: pointer;"
                                        class="button col-12 -outline-blue-1 text-blue-1 py-15 rounded-8 mt-10">
                                        <i class="icon-facebook text-15 mr-10"></i>
                                        Facebook
                                    </a>

                                    <a href="#"
                                        style="cursor: pointer;"
                                        class="button col-12 -outline-red-1 text-red-1 py-15 rounded-8 mt-15">
                                        <i class="icon-google text-15 mr-10"></i>
                                        Google
                                    </a> --}}


                                    <!-- <button class="button col-12 -outline-dark-2 text-dark-2 py-15 rounded-8 mt-15">
                                        <i class="icon-apple text-15 mr-10"></i>
                                        Apple
                                    </button> -->
                                </div>

                                <div class="col-12">
                                    <div class="text-center px-30">By signing in, I agree to GoTrip Terms of Use and
                                        Privacy Policy.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @php
            $footer_single = \App\Models\Footer::first();
        @endphp

        <footer class="footer -type-1">
            <div class="container">
                <div class="pt-60 pb-60">
                    <div class="row y-gap-40 justify-between xl:justify-start">
                        <div class="col-xl-2 col-lg-4 col-sm-6">
                            <h5 class="text-16 fw-500 mb-30">Contact Us</h5>

                            <div class="mt-30 footer-contact-info">
                                <div class="text-14 mt-30">Toll Free Customer Care</div>
                                <a href="tel:+918530653748" class="text-18 fw-500 text-blue-1 mt-5">+91
                                    {{ $footer_single->mobile_no }}</a>
                            </div>

                            <div class="mt-35 footer-contact-info">
                                <div class="text-14 mt-30">Need live support?</div>
                                <a href="mailto:info@example.com"
                                    class="text-18 fw-500 text-blue-1 mt-5">{{ $footer_single->email }}</a>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-4 col-sm-6">
                            <h5 class="text-16 fw-500 mb-30">Company</h5>
                            <div class="d-flex y-gap-10 flex-column">
                                <a href="#">About Us</a>
                                {{-- <a href="#">Careers</a> --}}
                                <a href="#">Blog</a>
                                {{-- <a href="#">Press</a>
                                <a href="#">Gift Cards</a>
                                <a href="#">Magazine</a> --}}
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-4 col-sm-6">
                            <h5 class="text-16 fw-500 mb-30">Support</h5>
                            <div class="d-flex y-gap-10 flex-column">
                                <a href="#">Contact</a>
                                {{-- <a href="#">Legal Notice</a> --}}
                                <a href="#">Privacy Policy</a>
                                <a href="#">Terms and Conditions</a>
                                {{-- <a href="#">Sitemap</a> --}}
                            </div>
                        </div>

                        {{-- <div class="col-xl-2 col-lg-4 col-sm-6">
                            <h5 class="text-16 fw-500 mb-30">Other Services</h5>
                            <div class="d-flex y-gap-10 flex-column">
                                <a href="#">Car hire</a>
                                <a href="#">Activity Finder</a>
                                <a href="#">Tour List</a>
                                <a href="#">Flight finder</a>
                                <a href="#">Cruise Ticket</a>
                                <a href="#">Holiday Rental</a>
                                <a href="#">Travel Agents</a>
                            </div>
                        </div> --}}

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
                                        Copyright <?php echo date('Y'); ?> . All Rights Reserved By <a
                                            href="https://pearlorganisation.com/" target="self" class="ml-5">PEARL
                                            ORGANISATION™</a>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex x-gap-15">
                                        <a href="#">Privacy</a>
                                        <a href="#">Terms</a>
                                        {{-- <a href="#">Site Map</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="row y-gap-10 items-center">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <button class="d-flex items-center text-14 fw-500 text-dark-1 mr-10">
                                            <i class="icon-globe text-16 mr-10"></i>
                                            <span class="underline">English (US)</span>
                                        </button>

                                        {{-- <button class="d-flex items-center text-14 fw-500 text-dark-1">
                                            <i class="icon-usd text-16 mr-10"></i>
                                            <span class="underline">USD</span>
                                        </button> --}}
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex x-gap-20 items-center">
                                        <a href="#"><i class="icon-facebook text-14"></i></a>
                                        <a href="#"><i class="icon-twitter text-14"></i></a>
                                        <a href="#"><i class="icon-instagram text-14"></i></a>
                                        <a href="#"><i class="icon-linkedin text-14"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <!-- <div class="langMenu is-hidden js-langMenu" data-x="lang" data-x-toggle="is-hidden">
        <div class="langMenu__bg" data-x-click="lang"></div>
        <div class="langMenu__content bg-white rounded-4">
            <div class="d-flex items-center justify-between px-20 py-20 sm:px-15 border-bottom-light">
                <div class="text-20 fw-500 lh-15">Select your language</div>
                <button class="pointer" data-x-click="lang">
                    <i class="icon-close"></i>
                </button>
            </div>
            <div class="modalGrid px-20 py-30 sm:px-15 sm:py-15">
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">English</div>
                        <div class="text-14 lh-15 mt-5 js-title">United States</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Türkçe</div>
                        <div class="text-14 lh-15 mt-5 js-title">Turkey</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Español</div>
                        <div class="text-14 lh-15 mt-5 js-title">España</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Français</div>
                        <div class="text-14 lh-15 mt-5 js-title">France</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Italiano</div>
                        <div class="text-14 lh-15 mt-5 js-title">Italia</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">English</div>
                        <div class="text-14 lh-15 mt-5 js-title">United States</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Türkçe</div>
                        <div class="text-14 lh-15 mt-5 js-title">Turkey</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Español</div>
                        <div class="text-14 lh-15 mt-5 js-title">España</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Français</div>
                        <div class="text-14 lh-15 mt-5 js-title">France</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Italiano</div>
                        <div class="text-14 lh-15 mt-5 js-title">Italia</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">English</div>
                        <div class="text-14 lh-15 mt-5 js-title">United States</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Türkçe</div>
                        <div class="text-14 lh-15 mt-5 js-title">Turkey</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Español</div>
                        <div class="text-14 lh-15 mt-5 js-title">España</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Français</div>
                        <div class="text-14 lh-15 mt-5 js-title">France</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Italiano</div>
                        <div class="text-14 lh-15 mt-5 js-title">Italia</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">English</div>
                        <div class="text-14 lh-15 mt-5 js-title">United States</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Türkçe</div>
                        <div class="text-14 lh-15 mt-5 js-title">Turkey</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Español</div>
                        <div class="text-14 lh-15 mt-5 js-title">España</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Français</div>
                        <div class="text-14 lh-15 mt-5 js-title">France</div>
                    </div>
                </div>
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Italiano</div>
                        <div class="text-14 lh-15 mt-5 js-title">Italia</div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="currencyMenu is-hidden js-currencyMenu" data-x="currency" data-x-toggle="is-hidden">
        <div class="currencyMenu__bg" data-x-click="currency"></div>

        <div class="currencyMenu__content bg-white rounded-4">
            <div class="d-flex items-center justify-between px-30 py-20 sm:px-15 border-bottom-light">
                <div class="text-20 fw-500 lh-15">Select your currency</div>
                <button class="pointer" data-x-click="currency">
                    <i class="icon-close"></i>
                </button>
            </div>

            <div class="modalGrid px-30 py-30 sm:px-15 sm:py-15">
                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">United States dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">USD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Australian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">AUD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Brazilian real</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BRL</span>
                            - R$
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Bulgarian lev</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BGN</span>
                            - ??.
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Canadian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">CAD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">United States dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">USD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Australian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">AUD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Brazilian real</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BRL</span>
                            - R$
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Bulgarian lev</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BGN</span>
                            - ??.
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Canadian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">CAD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">United States dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">USD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Australian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">AUD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Brazilian real</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BRL</span>
                            - R$
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Bulgarian lev</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BGN</span>
                            - ??.
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Canadian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">CAD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">United States dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">USD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Australian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">AUD</span>
                            - $
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Brazilian real</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BRL</span>
                            - R$
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Bulgarian lev</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">BGN</span>
                            - ??.
                        </div>
                    </div>
                </div>

                <div class="modalGrid__item js-item">
                    <div class="py-10 px-15 sm:px-5 sm:py-5">
                        <div class="text-15 lh-15 fw-500 text-dark-1">Canadian dollar</div>
                        <div class="text-14 lh-15 mt-5">
                            <span class="js-title">CAD</span>
                            - $
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="mapFilter" data-x="mapFilter" data-x-toggle="-is-active">
        <div class="mapFilter__overlay"></div>

        <div class="mapFilter__close">
            <button class="button -blue-1 size-40 bg-white shadow-2" data-x-click="mapFilter">
                <i class="icon-close text-15"></i>
            </button>
        </div>

        <div class="mapFilter__grid" data-x="mapFilter__grid" data-x-toggle="-filters-hidden">
            <div class="mapFilter-filter scroll-bar-1">
                <div class="px-20 py-20 md:px-15 md:py-15">
                    <div class="d-flex items-center justify-between">
                        <div class="text-18 fw-500">Filters</div>

                        <button class="size-40 flex-center rounded-full bg-blue-1" data-x-click="mapFilter__grid">
                            <i class="icon-chevron-left text-12 text-white"></i>
                        </button>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Popular Filters</h5>
                        <div class="sidebar-checkbox">
                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox" />
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
                                            <input type="checkbox" />
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
                                            <input type="checkbox" />
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
                                            <input type="checkbox" />
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>
                                        <div class="text-15 ml-10">WiFi Included</div>
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
                                            <input type="checkbox" />
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

                    <div class="mapFilter-filter__item">
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

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Amenities</h5>
                        <div class="sidebar-checkbox">
                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox" name="name" />
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
                                            <input type="checkbox" name="name" />
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">WiFi Included</div>
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
                                            <input type="checkbox" name="name" />
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
                                        <div class="form-checkbox">
                                            <input type="checkbox" name="name" />
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Restaurant</div>
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
                                            <input type="checkbox" name="name" />
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Air conditioning</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">679</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Star Rating</h5>
                        <div class="row x-gap-10 y-gap-10 pt-10">
                            <div class="col-auto">
                                <a href="#"
                                    class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">1</a>
                            </div>

                            <div class="col-auto">
                                <a href="#"
                                    class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">2</a>
                            </div>

                            <div class="col-auto">
                                <a href="#"
                                    class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">3</a>
                            </div>

                            <div class="col-auto">
                                <a href="#"
                                    class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">4</a>
                            </div>

                            <div class="col-auto">
                                <a href="#"
                                    class="button -blue-1 bg-blue-1-05 text-blue-1 py-5 px-20 rounded-100">5</a>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Guest Rating</h5>
                        <div class="sidebar-checkbox">
                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="form-radio d-flex items-center">
                                        <div class="radio">
                                            <input type="radio" name="name" />
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
                                    <div class="form-radio d-flex items-center">
                                        <div class="radio">
                                            <input type="radio" name="name" />
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
                                    <div class="form-radio d-flex items-center">
                                        <div class="radio">
                                            <input type="radio" name="name" />
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
                                    <div class="form-radio d-flex items-center">
                                        <div class="radio">
                                            <input type="radio" name="name" />
                                            <div class="radio__mark">
                                                <div class="radio__icon"></div>
                                            </div>
                                        </div>
                                        <div class="ml-10">Good 3.5+</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">78</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Style</h5>
                        <div class="sidebar-checkbox">
                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox" name="name" />
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
                                        <div class="form-checkbox">
                                            <input type="checkbox" name="name" />
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Mid-range</div>
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
                                            <input type="checkbox" name="name" />
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
                                        <div class="form-checkbox">
                                            <input type="checkbox" name="name" />
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Family-friendly</div>
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
                                            <input type="checkbox" name="name" />
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Business</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">679</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-filter__item">
                        <h5 class="text-18 fw-500 mb-10">Neighborhood</h5>
                        <div class="sidebar-checkbox">
                            <div class="row y-gap-10 items-center justify-between">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="form-checkbox">
                                            <input type="checkbox" name="name" />
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
                                        <div class="form-checkbox">
                                            <input type="checkbox" name="name" />
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Guests&#39; favourite area</div>
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
                                            <input type="checkbox" name="name" />
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
                                        <div class="form-checkbox">
                                            <input type="checkbox" name="name" />
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Kensington and Chelsea</div>
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
                                            <input type="checkbox" name="name" />
                                            <div class="form-checkbox__mark">
                                                <div class="form-checkbox__icon icon-check"></div>
                                            </div>
                                        </div>

                                        <div class="text-15 ml-10">Oxford Street</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15 text-light-1">679</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mapFilter-results scroll-bar-1">
                <div class="px-20 py-20 md:px-15 md:py-15">
                    <div class="row y-gap-10 justify-between">
                        <div class="col-auto">
                            <div class="text-14 text-light-1">
                                <span class="text-dark-1 text-15 fw-500">3,269 properties</span>
                                in Europe
                            </div>
                        </div>

                        <div class="col-auto">
                            <button class="button -blue-1 h-40 px-20 md:px-5 text-blue-1 bg-blue-1-05 rounded-100">
                                <i class="icon-up-down mr-10"></i>
                                Top picks for your search
                            </button>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="{{ asset('front/img/hotels/1.png') }}"
                                        data-src="{{ asset('front/img/hotels/1.png') }}" alt="image"
                                        class="js-lazy">
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="{{ asset('front/img/hotels/1.png') }}" alt="image"
                                        class="img-ratio rounded-4" />
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="{{ asset('front/img/hotels/1.png') }}" alt="image"
                                        class="img-ratio rounded-4" />
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="{{ asset('front/img/hotels/1.png') }}" alt="image"
                                        class="img-ratio rounded-4" />
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="{{ asset('front/img/hotels/1.png') }}" alt="image"
                                        class="img-ratio rounded-4" />
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="{{ asset('front/img/hotels/1.png') }}" alt="image"
                                        class="img-ratio rounded-4" />
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mapFilter-results__item">
                        <div class="row x-gap-20 y-gap-20">
                            <div class="col-md-auto">
                                <div class="ratio ratio-1:1 size-120">
                                    <img src="{{ asset('front/img/hotels/1.png') }}" alt="image"
                                        class="img-ratio rounded-4" />
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="row x-gap-20 y-gap-10 justify-between">
                                    <div class="col-lg">
                                        <h4 class="text-16 lh-17 fw-500">
                                            Great Northern Hotel, a Tribute Portfolio Hotel, London
                                            <span class="text-10 text-yellow-2">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </span>
                                        </h4>
                                    </div>

                                    <div class="col-auto">
                                        <button class="button -blue-1 size-30 flex-center bg-light-2 rounded-full">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="row y-gap-10 justify-between items-end pt-24 lg:pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="size-38 rounded-4 flex-center bg-blue-1">
                                                <span class="text-14 fw-600 text-white">4.8</span>
                                            </div>

                                            <div class="ml-10">
                                                <div class="text-13 lh-14 fw-500">Exceptional</div>
                                                <div class="text-12 lh-14 text-light-1">3,014 reviews</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="text-14 text-light-1 mr-10">8 nights</div>
                                            <div class="fw-500">US$72</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mapFilter-map">
                <div class="map js-map"></div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
    <script src="../../../unpkg.com/%40googlemaps/markerclusterer%402.5.3/dist/index.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('front/js/validate.js') }}"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: "Error Occurred",
                text: "{{ session('error') }}",
                showConfirmButton: true,
                iconColor: '#FF0000'
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            Swal.fire({
                position: "top-end",
                icon: "warning",
                title: "Validation Failed!",
                html: `<ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>`,
                showConfirmButton: true,
                iconColor: '#FFA500'
            });
        </script>
    @endif

    <script src="{{ asset('front/js/vendors.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>

    <script>
        function togglePassword(fieldId) {
            const passwordField = document.getElementById(fieldId);
            const eyeIcon = fieldId === 'password' ? document.getElementById('eye-icon-password') : document.getElementById(
                'eye-icon-cpassword');

            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);

            // Change the icon based on the visibility state
            if (type === 'password') {
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        }
    </script>

</body>

</html>
