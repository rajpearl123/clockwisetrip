@extends('backend.layouts.app')
@section('content')

<div class="container">
    <div class="card shadow-card user-list-card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="card-heading">Vendor List</h2>
            <a href="#" class="btn btn-dark btn-sm harshit" data-bs-toggle="modal" data-bs-target="#addUserModel">Add Vendor</a>
        </div>
    </div>

    <br>

    <div class="card shadow-card user-list-card2">
        <div class="card-body">
            <!-- <div class="d-flex justify-content-between mb-3">
                <div>
                    <input type="text" id="search" placeholder="Search..." class="form-control" style="width: 300px; display: inline-block;">
                </div>
                <div>
                    <label for="recordsPerPage">Records per page:</label>
                    <select id="recordsPerPage" class="form-select" style="width: auto; display: inline-block;">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div> -->

            <table class="table table-striped" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendors as $vendor)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('/images/vendor/profile/'. $vendor->image)}}" alt="N/A" style="height: 55px; width:65px;border-radius: 50%" >
                            </td>
                            <td>{{ $vendor->name ?? '' }}</td>
                            <td>{{ $vendor->email ?? '' }}</td>
                            <td>{{ $vendor->mobile_no ?? '' }}</td>
                            <td>
                                <button 
                                    class="btn btn-sm {{ $vendor->status == 0 ? 'btn-success' : 'btn-danger' }} status-btn"
                                    data-id="{{ $vendor->id }}"
                                    data-status="{{ $vendor->status }}">
                                    {{ $vendor->status == 0 ? 'Approved' : 'Suspended' }}
                                </button>
                            </td>
                            <td style="d-flex; gap:2px;">
                                <a href="{{route('admin.vendorView', $vendor->id)}}">
                                    <button class="btn btn-primary btn-sm">View</button>
                                </a>
                                <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#editUser{{ $vendor->id }}" class="btn btn-primary btn-sm">Edit</a> -->
                                <button onclick="deleteUser({{ $vendor->id }})" class="btn btn-danger btn-sm" onclick="confirm">Delete</button>
                            </td>
                        </tr>



                         {{-- Edit Modal --}}
                         <div class="modal fade" id="editUser{{ $vendor->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-light p-3">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('admin.userUpdate') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <input type="hidden" name="id" value="{{$vendor->id}}">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="customername-field" class="form-label">Name</label>
                                                        <input type="text" class="form-control user_name" name="name"  value="{{$vendor->name?$vendor->name:''}}" required autocomplete="off">
                                                    </div>
                                                    <span class="error text-danger" id="nameError"></span>
                                                </div>

                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="customername-field" class="form-label">Email</label>
                                                        <input type="text" class="form-control email_input" name="email" value="{{$vendor->email?$vendor->email:''}}" required autocomplete="off">
                                                    </div>
                                                    <span class="text-danger error" id="emailError"></span>
                                                </div>

                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="customername-field" class="form-label">Mobile No</label>
                                                        <input type="text" class="form-control mobile_number" name="mobile_no" value="{{$vendor->mobile?$vendor->mobile:''}}" required autocomplete="off">
                                                    </div>
                                                    <span class="error text-danger" id="errorMobile"></span>
                                                </div>

                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="customername-field" class="form-label">Password</label>
                                                        <input type="password" class="form-control" name="password"  readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="submit" class="btn btn-success">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('front.layout.validate')
<img src="{{ asset('front/img/logo/chockwisehotel_logo.png') }}" id="loaderimg" style="display:none"/>

<!-- Add User Modal -->
<div class="modal fade" id="addUserModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Add Vendor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off" action="{{ route('admin.vendorAdd') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Name</label>
                                <input type="text" class="form-control user_name" name="name" required autocomplete="off">
                            </div>
                            <span class="error text-danger" id="nameError"></span>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Email</label>
                                <input type="text" class="form-control email_input" name="email" required autocomplete="off">
                            </div>
                            <span class="text-danger error" id="emailError"></span>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Mobile No</label>
                                <input type="text" class="form-control mobile_number" name="mobile_no" required autocomplete="off">
                            </div>
                            <span class="error text-danger" id="errorMobile"></span>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
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
                window.location.href = "{{ route('admin.vendorDelete', ':id') }}".replace(':id', id);
            }
        });
    }

    $(document).on('click', '.status-btn', function() {
        $('#loaderimg').show();
        $('.status-btn').prop('disabled', true);
        var button = $(this);
        var userId = button.data('id');
        var currentStatus = button.data('status') == 1 ? 0 : 1;
        $.ajax({
            url: '{{ route("admin.vendorStatusUpdate", ":id") }}'.replace(':id', userId),
            type: 'POST',
            data: {
                status: currentStatus,
                _token: '{{ csrf_token() }}' 
            },
            success: function(response) {
                if (currentStatus == 0) {
                    $('#loaderimg').hide();
                    $('.status-btn').prop('disabled', false);

                    button.removeClass('btn-danger').addClass('btn-success').text('Approved');
                    button.data('status', 0);
                } else {
                    $('#loaderimg').hide();
                    $('.status-btn').prop('disabled', false);

                    button.removeClass('btn-success').addClass('btn-danger').text('Suspended');
                    button.data('status', 1);
                }
            },
            error: function(xhr) {
                $('#loaderimg').hide();
                $('.status-btn').prop('disabled', false);

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
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'mobile_no', name: 'mobile_no' },
                    { data: 'status', name: 'status' },
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                ],
            });
        }
    });
</script>
@endpush

@endsection
