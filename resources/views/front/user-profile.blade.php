@extends('front.layout.app')
@section('content')

<style>
    .rounded-profile-image {
        border-radius: 50%;
        border: 2px solid #333;
        width: 100px;
        height: 100px;
        object-fit: cover;
    }
    .slide-new {
        display: flex;
    }
    .sidesection {
        width: 20%;
        transition: width 0.3s;
        position: fixed;
        top: 0;
        bottom: 0;
        z-index: 9;
        background-color: #f4f5f6;
    }
    .sidesection .sidebar_toggle {
        position: absolute;
        right: -20px;
        top: 125px;
        background-color: #d6d6d6;
        padding: 8px 15px;
        border-radius: 50%;
        width: 40px;
        height: 40px;
    }
    .sidebar_minimized {
        width: 1%;
    }
    .sidebar_minimized .sidebar_toggle i {
        transform: rotate(180deg);
    }
    .sidebar_minimized .side-bar-new-section {
        display: none;
    }
    .tab-slide-content-new {
        display: block;
        margin-left: 20px;
    }
    .my-profile-dashboard-new {
        width: 100%;
        margin-left: 20%;
        margin-bottom: 20px;
    }
    .mymy {
        display: none;
    }
    .slid-new-content {
        position: absolute;
        top: 120px;
        padding: 0px 20px;
    }
    .slid-new-content .nav-pills .nav-link {
        color: black;
        text-align: left;
    }
    .slid-new-content .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #d93025;
    }
    .wishlist-table-new {
        border: 1px solid var(--color-border);
    }
    @media (max-width:936px) {
        .sidesection {
            width: 30%;
        }
        .sidebar_minimized {
            width: 1%;
        }
    }
    @media (max-width:695px) {
        .slid-new-content .nav-pills .nav-link {
            font-size: 13px;
        }
    }
    @media (max-width:576px) {
        .sidesection {
            width: 50%;
        }
        .my-profile-dashboard-new {
            margin-left: 0;
        }
        .slid-new-content {
            padding: 0 20px;
        }
        .sidebar_minimized {
            width: 1%;
        }
        .dashboard-card-body span {
            word-break: break-all;
        }
    }
    @media (min-width:768px) and (max-width:1200px) {
        .dashboard-card-body span {
            word-break: break-all;
        }
    }
</style>

<main class="slide-new">
    <section class="sidesection">
        <div class="slid-new-content">
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">My Profile</button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">My Wishlist</button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">My Booking</button>
                </div>
            </div>
        </div>
        <button class="sidebar_toggle"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
    </section>

    <section class="profile-dashboard-section my-profile-dashboard-new">
        <div class="container">
            <div class="tab-content tab-slide-content-new" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    <div class="row mt-4">
                        <div class="col-12 col-md-6 mb-2">
                            <div class="sidebar-nav-s">
                                <div class="sidebar-logo mb-3">
                                    <h3 class="mb-2 mt-1">My Profile</h3>
                                    <div class="card position-relative">
                                        <img src="{{ asset('/public/profile_images/' . ($single_user && $single_user->profile_image ? $single_user->profile_image : 'https://example.com/path/to/default-logo.png')) }}" alt="Current Image" class="card-img-top rounded-profile-image">
                                        <a href="" class="profile-edit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="fa-solid fa-user-pen"></i>
                                        </a>
                                        <div class="card-body dashboard-card-body">
                                            <p>{{ $single_user->name ?? '' }}</p>
                                            <span><a href="tel:{{ $single_user->mobile ?? '+91 85306 53748' }}">{{ $single_user->mobile_no ?? '' }}</a></span>
                                            <span><a href="mailto:{{ $single_user->email ?? 'abc@domain.com' }}">{{ $single_user->email ?? '' }}</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-1" class="dashboard-content tab-content current">
                                    <div class="my_profile-section">
                                        <form action="{{ route('update.user.profile.other') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="my-profile-form-content">
                                                <hr>
                                                @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                                <div class="profile-form-content">
                                                    <div class="row mb-4">
                                                        <div class="col-12 col-md-6 col-lg-6 my-profile-field">
                                                            <label for="first_name" class="form-label">First Name</label>
                                                            <input type="text" class="form-control kevalalpha" id="first_name" name="first_name" placeholder="First name" value="{{ $single_user->first_name ?? '' }}" autocomplete="off" required>
                                                            <div id="nameError" class="text-danger"></div>
                                                        </div>
                                                        <div class="col-12 col-md-6 col-lg-6 my-profile-field">
                                                            <label for="last_name" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control kevalalpha" id="last_name" name="last_name" placeholder="Last name" value="{{ $single_user->last_name ?? '' }}" autocomplete="off" required>
                                                            <div id="nameError" class="text-danger"></div>
                                                        </div>
                                                        <div class="col-12 my-profile-field">
                                                            <label for="user_name" class="form-label">User Name</label>
                                                            <input type="text" class="form-control user_name" id="user_name" name="user_name" placeholder="User name" value="{{ $single_user->user_name ?? '' }}" autocomplete="off" required>
                                                            <span class="error text-danger" id="nameError"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div id="tab-1" class="dashboard-content tab-content current">
                                    <div class="my_profile-section">
                                        <div class="contactDetails">
                                            <div class="change-password-profile mt-3" id="changepassword"></div>
                                            <div class="profile-form-content">
                                                <div class="row mb-5">
                                                    <div class="col-12 my-profile-field">
                                                        <label for="email" class="form-label">Email Address</label>
                                                        <input type="email" class="form-control email_input" name="email" id="email" placeholder="name@example.com" value="{{ $single_user->email ?? '' }}" autocomplete="off" required>
                                                        <span class="text-danger error" id="emailError"></span>
                                                    </div>
                                                    <div class="col-12 my-profile-field">
                                                        <label for="mobile_no" class="form-label">Mobile Number</label>
                                                        <input type="text" class="form-control mobile_number" id="mobile_no" name="mobile_no" placeholder="Mobile Number" value="{{ $single_user->mobile_no ?? '' }}" autocomplete="off" required>
                                                        <span class="error text-danger" id="errorMobile"></span>
                                                    </div>
                                                    <div class="col-12 col-md-6 col-lg-6 my-profile-field">
                                                        <label for="country" class="form-label">Country</label>
                                                        <select class="form-control" id="country" name="country" required>
                                                            <option value="">Select Country</option>
                                                        </select>
                                                        <div id="countryError" class="text-danger"></div>
                                                    </div>
                                                    <div class="col-12 col-md-6 col-lg-6 my-profile-field">
                                                        <label for="state" class="form-label">State</label>
                                                        <input type="text" class="form-control kevalalpha" id="state" name="state" placeholder="State" value="{{ $single_user->state ?? '' }}" autocomplete="off">
                                                        <div id="stateError" class="text-danger"></div>
                                                    </div>
                                                    <div class="col-12 my-profile-field">
                                                        <label for="city" class="form-label">City</label>
                                                        <input type="text" class="form-control kevalalpha" id="city" name="city" placeholder="City" value="{{ $single_user->city ?? '' }}" autocomplete="off">
                                                        <div id="cityError" class="text-danger"></div>
                                                    </div>
                                                    <div class="col-12 my-profile-field">
                                                        <label for="address" class="form-label">Address</label>
                                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{ $single_user->Address ?? '' }}" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="save-change-btn">
                                                <button type="submit" class="btn btn-primary">Save Change</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                    <table class="table table-hover wishlist-table-new">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Wishlist content remains unchanged --}}
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <table class="table table-hover wishlist-table-new">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Order ID</th>
                                <th scope="col">Payment Method</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Invoice</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $booking)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $booking->order_id }}</td>
                                <td>{{ $booking->payment_method }}</td>
                                <td>{{ $booking->amount }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Change profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('update.user.profile') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="file" name="profile_image">
                </div>
                <div class="modal-footer">
                    <div class="profile-edit-btn">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                    <div class="profile-edit-save-btn">
                        <button type="submit" class="btn btn-primary">Save Change</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
<script>
    Swal.fire({
        position: "center",
        icon: "success",
        title: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 1500
    });
</script>
@endif

<script>
    $(document).ready(function() {
        // Fetch countries from REST Countries API
        $.ajax({
            url: 'https://restcountries.com/v3.1/all',
            method: 'GET',
            success: function(data) {
                const countryDropdown = $('#country');
                const countries = data.sort((a, b) => a.name.common.localeCompare(b.name.common));
                countries.forEach(country => {
                    countryDropdown.append(`<option value="${country.name.common}">${country.name.common}</option>`);
                });
                // Set the saved country if available
                @if($single_user && $single_user->country)
                    countryDropdown.val("{{ $single_user->country }}");
                @endif
            },
            error: function() {
                $('#countryError').text('Failed to load countries.');
            }
        });

        // Sidebar toggle
        $('.sidebar_toggle').click(function() {
            $('.sidesection').toggleClass('sidebar_minimized');
            $('.slid-new-content').toggleClass('mymy');
        });
    });
</script>

@endsection