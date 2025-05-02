@extends('backend.layouts.app')
@section('content')

<style>
    .user-list-card {
        margin-top: 80px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .user-list-card2 {
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .rounded-profile-image {
        border-radius: 50%;
        object-fit: cover;
        width: 100px;
        height: 100px;
        background-color: #fff;
    }
</style>

<div class="container">
    <div class="card shadow-card user-list-card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="card-heading">Manage Your Profile</h2>
        </div>
    </div>

    <br>

    <div class="card shadow-card user-list-card2">
        <div class="card-body">
            <div class="row mt-4">
                <div class="col-12 col-md-6  mb-2">
                    <div class="sidebar-nav-s">
                        <div class="sidebar-logo mb-3">
                            <h3 class="mb-2 mt-1">My Profile</h3>
                            <div class="card position-relative">
                                <!-- <img src="public/front/img/avatars/2.png" alt="Current Image" class="card-img-top"> -->
                                <i class="fas fa-user-circle " style="font-size: 80px;"></i>
                                <a href="" class="profile-edit" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fa-solid fa-user-pen"></i>
                                </a>
                                <div class="card-body dashboard-card-body">
                                    <p>Ashish Verma</p>
                                    <span><a href="">6398069235</a></span>
                                    <span><a href="">Ashish@gmail.com</a></span>
                                </div>
                            </div>
                        </div>
                        <div id="tab-1" class="dashboard-content tab-content current">
                            <div class="my_profile-section">
                                <form action="{{route('update.user.profile.other')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="my-profile-form-content">
                                        <div class="profile-form-content">
                                            <div class="row mb-4">
                                                <div class="col-12 col-md-6 col-lg-6 my-profile-field mb-2">
                                                    <label for="first_name" class="form-label">First Name</label>
                                                    <input type="text" class="form-control kevalalpha" id="first_name" name="first_name" placeholder="First name" autocomplete="off" required>
                                                    <div id="nameError" class="text-danger"></div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-6 my-profile-field mb-2">
                                                    <label for="last_name" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control kevalalpha" id="last_name" name="last_name" placeholder="Last name" autocomplete="off" required>
                                                    <div id="nameError" class="text-danger"></div>
                                                </div>
                                                <div class="col-12 my-profile-field mb-2">
                                                    <label for="email" class="form-label">Email Address</label>
                                                    <input type="email" class="form-control email_input" name="email" id="email" placeholder="name@example.com" autocomplete="off" required>
                                                    <span class="text-danger error" id="emailError"></span>
                                                </div>
                                                <div class="col-12 my-profile-field mb-2">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="Password" readonly>
                                                </div>
                                                <div class="col-12 my-profile-field mb-2">
                                                    <label for="mobile_no" class="form-label">Mobile Number</label>
                                                    <input type="text" class="form-control mobile_number" id="mobile_no" name="mobile_no" placeholder="Mobile Number" autocomplete="off" required>
                                                    <span class="error text-danger" id="errorMobile"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <!-- Tab Contents -->
                    <div id="tab-1" class="dashboard-content tab-content current">
                        <div class="my_profile-section">
                            <form action="{{route('update.user.profile.other')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="my-profile-form-content">
                                    <!-- <hr>    -->
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="contactDetails">
                                        <div class="change-password-profile mt-3" id="changepassword">
                                            <!-- <h4 class="mb-2 mt-1">Contact Detail</h4> -->
                                        </div>
                                        <div class="profile-form-content">
                                            <div class="row mb-5">
                                                <div class="col-12 col-md-6 col-lg-6 my-profile-field mb-2">
                                                    <label for="country" class="form-label">Gender</label>
                                                    <div class="form-group d-flex align-items-center gap-3  ">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="male">
                                                            <label class="form-check-label" for="male">
                                                                Male
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="female">
                                                            <label class="form-check-label" for="female">
                                                                Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div id="nameError" class="text-danger"></div>
                                                </div>
                                                <div class="col-12 my-profile-field mb-2">
                                                    <label for="state" class="form-label">Languages</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Language</option>
                                                        <option value="1">English</option>
                                                        <option value="2">Spanish</option>
                                                        <option value="3">Dutch</option>
                                                    </select>
                                                    <div id="nameError" class="text-danger"></div>
                                                </div>
                                                <!-- <div class="col-12  my-profile-field mb-2">
                                                    <label for="address" class="form-label">Date of Birth</label>
                                                    <div class="select_group d-flex align-items-center gap-2">
                                                        <div class="group_item">
                                                            <select class="form-select" aria-label="Default select example">
                                                                <option selected>Date</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                            </select>
                                                        </div>
                                                        <div class="group_item">
                                                            <select class="form-select" aria-label="Default select example">
                                                                <option selected>Month</option>
                                                                <option value="1">January</option>
                                                                <option value="2">February</option>
                                                                <option value="3">March</option>
                                                                <option value="4">April</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                                <option value="8">August</option>
                                                                <option value="9">September</option>
                                                                <option value="10">October</option>
                                                                <option value="11">November</option>
                                                                <option value="12">December</option>
                                                            </select>
                                                        </div>
                                                        <div class="group_item">
                                                            <select class="form-select" aria-label="Default select example">
                                                                <option selected>Year</option>
                                                                <option value="1">2001</option>
                                                                <option value="2">2002</option>
                                                                <option value="3">2003</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="col-12 col-md-6 col-lg-6 my-profile-field mb-2">
                                                    <label for="country" class="form-label">Country</label>
                                                    <input type="text" class="form-control kevalalpha" id="country" name="country" placeholder="Country" autocomplete="off">
                                                    <div id="nameError" class="text-danger"></div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-6 my-profile-field mb-2">
                                                    <label for="state" class="form-label">State</label>
                                                    <input type="text" class="form-control kevalalpha" id="state" name="state" placeholder="State" autocomplete="off">
                                                    <div id="nameError" class="text-danger"></div>
                                                </div>
                                                <div class="col-12 my-profile-field mb-2">
                                                    <label for="city" class="form-label">City</label>
                                                    <input type="text" class="form-control kevalalpha" id="city" name="city" placeholder="City" autocomplete="off">
                                                    <div id="nameError" class="text-danger"></div>
                                                </div>
                                                <div class="col-12  my-profile-field mb-2">
                                                    <label for="address" class="form-label">Address</label>
                                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" autocomplete="off">
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
                    <!-- <div id="tab-2" class="dashboard-content tab-content">
            <div class="my_profile-section">
              <h3>My Profile</h3>
              <div class="my-profile-form-content">
                <hr>
                <div class="row">
                  <div class="col-6 my-profile-field mb-2">
                    <label for="" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="" placeholder="First name">
                  </div>
                  <div class="col-6 my-profile-field mb-2">
                    <label for="" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="" placeholder="Last name">
                  </div>
                  <div class="col-6 my-profile-field mb-2">
                    <label for="" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                  <div class="col-6 my-profile-field mb-2">
                    <label for="" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="" placeholder="Mobile Number">
                  </div>
                  <div class="col-6 my-profile-field mb-2">
                    <label for="" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="" placeholder="user name">
                  </div>
                  <div class="col-6 my-profile-field mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="" placeholder="password">
                  </div>
                </div>
                <div class="change-password-profile" id="changepassword">
            
                  <h4 class="">Change Password</h4>
                </div>
                <div class="row mb-5">
                  <div class="col-6 my-profile-field mb-2">
            
                    <input type="password" class="form-control" id="" placeholder="Old password">
                  </div>
                  <div class="col-6 my-profile-field mb-2">
            
                    <input type="password" class="form-control" id="" placeholder="New password">
                  </div>
                </div>
              </div>
            </div>
        </div> -->
                    <!-- <div id="tab-4" class="dashboard-content tab-content">
                        <h3>Logout</h3>
                    </div> -->
                </div>
            </div>


        </div>
    </div>
</div>




@push('js')
<script>
    function deleteUser(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: '',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Delete',
            customClass: {
                popup: 'swal2-large',
                content: 'swal2-large'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ url('admin/user/delete') }}/" + id;
            }
        });
    }

    $(document).on('click', '.status-btn', function() {
        var button = $(this);
        var userId = button.data('id');
        var currentStatus = button.data('status') == 1 ? 0 : 1;
        $.ajax({
            url: '{{ route("admin.user.change.status", ":id") }}'.replace(':id', userId),
            type: 'POST',
            data: {
                status: currentStatus,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                if (currentStatus == 1) {
                    button.removeClass('btn-danger').addClass('btn-success').text('Active');
                    button.data('status', 1);
                } else {
                    button.removeClass('btn-success').addClass('btn-danger').text('Inactive');
                    button.data('status', 0);
                }
            },
            error: function(xhr) {
                console.error(xhr);
                alert('Error updating status');
            }
        });
    });

    $(document).ready(function() {
        // Check if DataTable is already initialized
        if (!$.fn.DataTable.isDataTable('#dataTable')) {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route("admin.users.list") }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'mobile_no',
                        name: 'mobile_no'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
            });
        }
    });
</script>
@endpush

@endsection