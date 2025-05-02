<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">

<head>
    <meta charset="UTF-8">
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
    <style>
        .user-dropdown {
            position: relative;
            display: inline-block;
        }

        .user-icon img {
            width: 30px;
            /* Adjust size as needed */
            height: 30px;
            /* Adjust size as needed */
            border-radius: 50%;
            /* Makes it circular */
        }

        .user-name {
            display: inline-block;
            cursor: pointer;
            padding-left: 10px;
            /* Space between icon and name */
        }

        .dropdown-arrow {
            margin-left: 5px;
            /* Space between name and arrow */
        }

        .dropdown-menu {
            display: none;
            /* Hidden by default */
            position: absolute;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            min-width: 160px;
            /* Adjust width as needed */
            z-index: 1;
        }

        .user-dropdown:hover .dropdown-menu {
            display: block;
            /* Show on hover */
        }

        .dropdown-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .dropdown-menu li {
            padding: 8px 12px;
        }

        .dropdown-menu li a {
            text-decoration: none;
            color: black;
        }

        .dropdown-menu li:hover {
            background-color: #f1f1f1;
        }

        .dropdown-menu {
            margin-right: 100px;
            /* Adjust margin as needed */
        }

        .redBg img {
            width: 350px;
        }

        .form-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .form-content h2 {
            font-size: 30px;
            color: #1b1c1d;
            font-weight: 600;
            line-height: 42px;
        }

        .form-content p {
            font-size: 20px;
            color: #404141;
            font-weight: 400;
            line-height: 26px;
            text-align: center;
        }

        form.form-section {
            margin-top: 40px;
            display: flex;
            flex-direction: column;
        }

        input.form-control {
            border: 1px solid #d6d6d6;
            border-radius: 4px;
            padding: 5px 15px;
            min-height: 40px;
            transition: all 0.2s cubic-bezier(0.165, 0.84, 0.44, 1);
            font-size: 14px;
            color: #1b1c1d;
            margin-bottom: 10px;
        }

        .forgotSubmitBtn {
            padding: 15px 0;
            background-color: #d93025;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            vertical-align: middle;
            text-align: center;
            font-weight: 500;
            font-size: 15px;
            line-height: 1.2;
            border-radius: 4px;
            border: 1px solid transparent;
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .form-section a {
            font-size: 20px;
            text-transform: capitalize;
            text-decoration: none;
            color: #d93025;
            text-align: center;
            margin: 20px 0;
            font-weight: 700;
        }

        .alert-success {
            color: #28a745;
            /* Change to your desired success color */
            font-size: 18px;
            margin-top: 10px;
        }

        .alert-danger {
            color: #dc3545;
            font-size: 18px;
            margin-top: 10px;
        }

        .redBg {
            background-color: #d93025;
            padding: 10px 0;
        }

        .forgotPasswordScreen {
            background-color: #f4f5f6;
            margin: 70px auto;
            padding: 40px;
            width: 50%;
        }

        @media screen and (max-width: 1024px) {
            .forgotPasswordScreen {
                width: 80%;
            }
        }

        @media screen and (max-width: 768px) {
            .forgotPasswordScreen {
                width: 100%;
            }
        }

        @media screen and (max-width: 576px) {
            .redBg img {
                width: 250px;
            }
        }
    </style>
    <title>clockwisehotel.com</title>
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
        <div class="preloader__title">clockwisehotel.com</div>
    </div>
    <main>
        <header data-add-bg="bg-red-1" class="header bg-green js-header" data-x="header" data-x-toggle="is-menu-opened">
            <div data-anim="fade" class="header__container px-20 sm:px-20">
                <div class="row justify-between items-center">
                    <div class="col-auto">
                        <div class="d-flex items-center">
                            <a href="{{ url('/') }}" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
                                <img src="{{ asset('front/img/logo/chockwisehotel_logo.png') }}" alt="logo icon">
                                <img src="{{ asset('front/img/logo/chockwisehotel_logo.png') }}" alt="logo icon">
                            </a>
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
                                    <i class="icon-chevron-sm-down text-7 ml-10"></i>
                                </button>
                            </div>
                            <div class="col-auto">
                                <div class="w-1 h-20 bg-white-20"></div>
                            </div>
                            <div class="col-auto">
                                <button class="d-flex items-center text-16 text-white" data-x-click="lang">
                                    <img src="{{ asset('front/img/general/india.png') }}" alt="image" class="rounded-full mr-10" height="20" width="20">
                                    <span class="js-language-mainTitle ">India</span>
                                    <i class="icon-chevron-sm-down text-7 ml-15"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex items-center">
                            <a href="{{ url('get-property') }}" class="button px-20 fw-400 text-16 -white bg-white h-50 text-dark-1">List Your Property</a>
                            <a href="{{ route('register') }}" class="button px-20 fw-400 text-16 border-white -outline-white h-50 text-white ml-20">Sign In / Register</a>
                        </div>
                        <div class="d-none xxl:d-none xl:d-flex x-gap-20 items-center  text-white" data-x="header-mobile-icons" data-x-toggle="text-white">
                            <div><a href="#!" class="d-flex items-center icon-user text-inherit text-22"></a></div>
                            <div><button class="d-flex items-center icon-menu text-inherit text-20" data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <section>
            <div class="d-flex items-center redBg">
                <a href="{{url('/')}}" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
                    <img src="{{ asset('front/img/logo/chockwisehotel_logo.png') }}" alt="logo icon">
                </a>
            </div>
            <div class="container">
                <div class="forgotPasswordScreen">
                    <div class="form-content">
                        <i class="fas fa-exclamation"></i>
                        <h2 class="text-center">Forgot Password</h2>
                        <p>Enter your email address and we will send you a link to reset your password.</p>
                    </div>
                    @if (session('status'))
                    <div class="alert alert-success" style="font-size:18px;margin-top:10px;">
                        {{ session('status') }}
                        <p>Please check your email to reset password.</p>
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger" style="font-size:18px;margin-top:10px;">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('password.email') }}" method="post" class="form-section">
                        @csrf
                        <input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
                        <button type="submit" class="forgotSubmitBtn">Submit</button>
                        <a href="{{route('login')}}">back to Login</a>
                    </form>
                </div>
            </div>

        </section>

    </main>
    <!-- JavaScript -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
    <script src="../../../unpkg.com/%40googlemaps/markerclusterer%402.5.3/dist/index.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('front/js/vendors.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkInInput = document.querySelector('#check-in .js-first-date');
            const checkOutInput = document.querySelector('#check-out .js-last-date');

            // Initialize Flatpickr for Check-in
            const checkInCalendar = flatpickr(checkInInput, {
                dateFormat: "D d M", // Custom date format
                onChange: function(selectedDates, dateStr, instance) {
                    checkInInput.textContent = dateStr; // Update the span with the selected date

                    // Set minDate for the Check-out calendar to prevent selecting dates before the check-in date
                    checkOutCalendar.set('minDate', selectedDates[0]);
                }
            });

            // Initialize Flatpickr for Check-out
            const checkOutCalendar = flatpickr(checkOutInput, {
                dateFormat: "D d M",
                onChange: function(selectedDates, dateStr, instance) {
                    checkOutInput.textContent = dateStr;
                }
            });

            // Event listener for showing Check-in calendar
            document.getElementById('check-in').addEventListener('click', function() {
                checkInCalendar.open();
            });

            // Event listener for showing Check-out calendar
            document.getElementById('check-out').addEventListener('click', function() {
                checkOutCalendar.open();
            });
        });
    </script>
    <script>
        document.getElementById('apartmentButton').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector('.propertyListing').classList.add('d-none');
            document.querySelector('.appartmentListing').classList.remove('d-none');
            document.querySelector('.appartmentListing').setAttribute('data-property-type', 'apartment');
        });
        document.querySelector('.btn-secondary').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector('.appartmentListing').classList.add('d-none');
            document.querySelector('.propertyListing').classList.remove('d-none');
        });
    </script>
    <script>
        const nextButton = document.querySelector('.next-appartment-feedback');
        const backButton = document.querySelector('.back-appartment-feedback');
        const appartmentListing = document.querySelector('.appartmentListing');
        const appartmentFeedback = document.querySelector('.appartmentFeedback');
        const propertyListing = document.querySelector('.propertyListing');

        nextButton.addEventListener('click', function() {
            appartmentListing.classList.add('d-none');
            appartmentFeedback.classList.remove('d-none');
        });

        backButton.addEventListener('click', function() {
            appartmentFeedback.classList.add('d-none');
            propertyListing.classList.remove('d-none');
        });
    </script>
    <script>
        document.getElementById('photoFileInput').addEventListener('change', function(event) {
            const fileInput = event.target;
            const files = fileInput.files;
            const previewContainer = document.getElementById('previewImages');
            const errorMessage = document.getElementById('error-message');

            errorMessage.style.display = 'none';
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                console.log(file, "fweefeffff");
                if (file.type === 'image/jpeg' || file.type === 'image/png') {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const imgElement = document.createElement('img');
                        imgElement.src = e.target.result;
                        imgElement.style.maxWidth = '150px';
                        imgElement.style.margin = '10px';
                        imgElement.classList.add('preview-image');
                        previewContainer.appendChild(imgElement);
                    };
                    reader.readAsDataURL(file);
                }
            }
            const totalImages = previewContainer.getElementsByTagName('img').length;
            if (totalImages < 5) {
                errorMessage.textContent = 'Please upload at least 5 images.';
                errorMessage.style.display = 'block';
            } else {
                errorMessage.style.display = 'none';
            }
        });

        document.querySelector('.user-name').addEventListener('click', function() {
            const dropdownMenu = document.querySelector('.dropdown-menu');
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.user-name')) {
                const dropdowns = document.getElementsByClassName("dropdown-menu");
                for (let i = 0; i < dropdowns.length; i++) {
                    dropdowns[i].style.display = "none";
                }
            }
        }
    </script>
</body>

</html>