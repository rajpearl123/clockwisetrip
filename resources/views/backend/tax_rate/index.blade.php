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
            <h2 class="card-heading"> Price</h2>
            <a href="#" class="btn btn-dark btn-sm harshit" data-bs-toggle="modal" data-bs-target="#addTaxModel">Add</a>
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
                        <th>Categoty</th>
                        <th>Property</th>
                        <th>Price</th>
                        <th>Room Type</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($taxs as $tax)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tax->category_name ?? '' }}</td>
                            <td>{{ $tax->property_title ?? '' }}</td>
                            <td>{{ $tax->rate_pr_night ?? '' }}</td>
                            <td>{{ $tax->room_type ?? '' }}</td>
                            <td>
                                <button 
                                    class="btn btn-sm {{ $tax->is_deleted == 0 ? 'btn-success' : 'btn-danger' }} status-btn"
                                    data-id="{{ $tax->id }}"
                                    data-status="{{ $tax->is_deleted }}">
                                    {{ $tax->is_deleted == 0 ? 'Active' : 'Inactive' }}
                                </button>
                            </td>
                            <td style="d-flex; gap:2px;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#editTaxPrice{{ $tax->id }}" class="btn btn-primary btn-sm">Edit</a>
                                <button onclick="deleteUser({{ $tax->id }})" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>



                       {{-- Edit Modal --}}
                <div class="modal fade" id="editTaxPrice{{ $tax->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="exampleModalLabel">Edit and Price</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('admin.taxUpdate') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <input type="hidden" name="id" value="{{ $tax->id }}">

                        <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Category</label>
                                <select class="form-control" name="porperty_category_id" id="porperty_category_id" required autocomplete="off">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" 
                                            @if($category->id == $tax->category_id) selected @endif>
                                            {{$category->name}}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                            <!-- <span class="error text-danger" id="errorMobile"></span> -->
                      </div>

                     <?php
                        $proprty_types = DB::table('propertys')->where('property_category_id', $tax->category_id)->get();
                    ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Property</label>
                                <select class="form-control" name="property_id" id="property_id" required autocomplete="off">
                                    <option value="">Select Property</option>
                                    @if(isset($tax->property_id))
                                        @foreach($proprty_types as $property_type)
                                            <option value="{{ $property_type->id }}" 
                                                @if($property_type->id == $tax->property_id) selected @endif>
                                                {{ $property_type->title }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <!-- <span class="error text-danger" id="errorMobile"></span> -->
                    </div>


                  


                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                            <label for="customername-field" class="form-label">Room Type</label>
                                <select class="form-control" name="room_type" id="room_type"  autocomplete="off">
                                    <option value="">Select Room Type</option>
                                     @foreach($room_types as $room)
                                 <option value="{{ $room->id }}" 
                                    @if($tax->room_type == $room->id) selected @endif>
                                    {{ $room->room_type }}
                                </option>

                                     @endforeach
                                </select>
                            </div>
                        </div>
                            <!-- <span class="error text-danger" id="errorMobile"></span> -->
                      </div>


                    
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                            <label for="customername-field" class="form-label">Price</label>
                            <input type="text" class="form-control" value="{{$tax->rate_pr_night}}" name="price" required autocomplete="off">
                            </div>
                        </div>
                            <!-- <span class="error text-danger" id="errorMobile"></span> -->
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

                        <!-- End edit Model -->
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('front.layout.validate')

<!-- Add User Modal -->
<div class="modal fade" id="addTaxModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Add Price</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off" action="{{ route('admin.tax.add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Category</label>
                                <select class="form-control" name="porperty_category_id" id="porperty_category_id" required autocomplete="off">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            <!-- <span class="error text-danger" id="errorMobile"></span> -->
                      </div>

                      <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Property</label>
                                <select class="form-control" name="property_id" id="property_id" required autocomplete="off">
                                    <option value="">Select Property</option>
                                   
                                </select>
                            </div>
                        </div>
                            <!-- <span class="error text-danger" id="errorMobile"></span> -->
                      </div>

                  


                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                            <label for="customername-field" class="form-label">Room Type</label>
                                <select class="form-control" name="room_type" id="room_type"  autocomplete="off">
                                    <option value="">Select Room Type</option>
                                     @foreach($room_types as $room)
                                     <option value="{{$room->id}}">{{$room->room_type}}</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>
                            <!-- <span class="error text-danger" id="errorMobile"></span> -->
                      </div>

                  


                    <!-- <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                            <label for="customername-field" class="form-label">Tax</label>
                            <input type="text" class="form-control" name="tax" required autocomplete="off">
                            </div>
                        </div>
                            
                      </div> -->

                   

                    
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                            <label for="customername-field" class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" required autocomplete="off">
                            </div>
                        </div>
                            <!-- <span class="error text-danger" id="errorMobile"></span> -->
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
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
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
                window.location.href = "{{ url('admin/tax/delete') }}/" + id;				
            }
        });
    }

    $(document).on('click', '.status-btn', function() {
        var button = $(this);
        var Id = button.data('id');
        var currentStatus = button.data('status') == 1 ? 0 : 1;
        $.ajax({
            url: '{{ route("admin.tax.change.status", ":id") }}'.replace(':id', Id),
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
    if (!$.fn.DataTable.isDataTable('#dataTable')) {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route("admin.tax-rate") }}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'porperty_category_id', name: 'category_name' },
                { data: 'property_id', name: 'property_title' },
                { data: 'room_type', name: 'room_type' },
                { data: 'price', name: 'rate_pr_night' },
                { data: 'status', name: 'is_deleted' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ],
            pageLength: 10, // Default number of rows per page
            lengthMenu: [10, 25, 50, 100], // Options for rows per page
            searchDelay: 300, // Delay for search
            language: {
                search: "Filter records:", // Custom search label
                lengthMenu: "Show _MENU_ entries", // Custom length menu label
            },
        });
    }
});

</script>
<script>
$(document).ready(function() {
    $('#porperty_category_id').change(function() {
     
        var categoryId = $(this).val();  // Change to categoryId for clarity
    
        if (categoryId) {
            $.ajax({
                url: '{{ route("admin.get.property", ":id") }}'.replace(':id', categoryId),  
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#property_id').empty().append('<option value="">Select Property</option>');
                    $.each(data, function(key, value) {
                        $('#property_id').append('<option value="' + value.id + '">' + value.title + '</option>');
                    });
                    $('#property_id').prop('disabled', false);
                }
            });
        } else {
            $('#property_id').empty().append('<option value="">Select Property</option>').prop('disabled', true);
        }
    });
});

</script>

<script>
$(document).ready(function() {
    $('#porperty_category_id_edit').change(function() {
     
        var categoryId = $(this).val();  // Change to categoryId for clarity
    
        if (categoryId) {
            $.ajax({
                url: '{{ route("admin.get.property", ":id") }}'.replace(':id', categoryId),  
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#property_id_edit').empty().append('<option value="">Select Property</option>');
                    $.each(data, function(key, value) {
                        $('#property_id_edit').append('<option value="' + value.id + '">' + value.title + '</option>');
                    });
                    $('#property_id_edit').prop('disabled', false);
                }
            });
        } else {
            $('#property_id_edit').empty().append('<option value="">Select Property</option>').prop('disabled', true);
        }
    });
});

</script>
@endpush

@endsection
