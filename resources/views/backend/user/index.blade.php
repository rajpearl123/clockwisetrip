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
</style>

<div class="container">
    <div class="card shadow-card user-list-card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="card-heading">User List</h2>
            <a href="#" class="btn btn-dark btn-sm harshit" data-bs-toggle="modal" data-bs-target="#addUserModel">Add</a>
        </div>
    </div>

    <br>

    <div class="card shadow-card user-list-card2">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <div class="d-flex gap-2 align-items-center">
                    <input type="text" id="search" placeholder="Search..." class="form-control" style="width: 300px;">
                    <select id="status_filter" class="form-select" style="width: 200px;">
                        <option value="">All Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    <button id="filterSubmit" class="btn btn-primary btn-sm">Filter</button>
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
            </div>

            <table class="table table-striped" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name ?? '' }}</td>
                            <td>{{ $user->email ?? '' }}</td>
                            <td>{{ $user->mobile_no ?? '' }}</td>
                            <td>
                                <button 
                                    class="btn btn-sm {{ $user->status == 1 ? 'btn-success' : 'btn-danger' }} status-btn"
                                    data-id="{{ $user->id }}"
                                    data-status="{{ $user->status }}">
                                    {{ $user->status == 1 ? 'Active' : 'Inactive' }}
                                </button>
                            </td>
                            <td style="d-flex; gap:2px;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#editUser{{ $user->id }}" class="btn btn-primary btn-sm">Edit</a>
                                <button onclick="deleteUser({{ $user->id }})" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>

                        {{-- Edit Modal --}}
                        <div class="modal fade" id="editUser{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <input type="hidden" name="id" value="{{$user->id}}">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="customername-field" class="form-label">Name</label>
                                                    <input type="text" class="form-control user_name" name="name" value="{{$user->name?$user->name:''}}" required autocomplete="off">
                                                </div>
                                                <span class="error text-danger" id="nameError"></span>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="customername-field" class="form-label">Email</label>
                                                    <input type="text" class="form-control email_input" name="email" value="{{$user->email?$user->email:''}}" required autocomplete="off">
                                                </div>
                                                <span class="text-danger error" id="emailError"></span>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="customername-field" class="form-label">Mobile No</label>
                                                    <input type="text" class="form-control mobile_number" name="mobile_no" value="{{$user->mobile?$user->mobile_no:''}}" required autocomplete="off">
                                                </div>
                                                <span class="error text-danger" id="errorMobile"></span>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="customername-field" class="form-label">Password</label>
                                                    <input type="password" class="form-control" name="password" readonly>
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

<!-- Add User Modal -->
<div class="modal fade" id="addUserModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off" action="{{ route('admin.userAdd') }}" method="post" enctype="multipart/form-data">
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
                                <input type="text" class="form-control mobile_number" name="mobile_no" value={{$user->mobile_no}} required autocomplete="off">
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
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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
        var table = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route("admin.users.list") }}',
                data: function(d) {
                    d.search = $('#search').val();
                    d.status_filter = $('#status_filter').val();
                }
            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'mobile_no', name: 'mobile_no' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ],
        });

        // Handle filter button click
        $('#filterSubmit').on('click', function() {
            table.draw();
        });

        // Handle records per page
        $('#recordsPerPage').on('change', function() {
            table.page.len($(this).val()).draw();
        });
    });
</script>

@endsection