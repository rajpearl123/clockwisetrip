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
            <h2 class="card-heading">Property Category List</h2>
            <a href="#" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#addpropertyCategory">Add</a>
        </div>
    </div>

    <br>

    <div class="card shadow-card user-list-card2">
        <div class="card-body">
            <!-- Search Box -->
           

            <table class="table table-striped" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($PropertyCategory as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if($category->image)
                                    <img src="{{ asset('front/img/property-category/'.$category->image) }}" style="height:50px; width:50px">
                                @else
                                    <img src="{{ asset('front/img/No-Image.png') }}" style="height:50px; width:50px">
                                @endif
                            </td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <span class="btn btn-{{ $category->status == '1' ? 'success' : 'danger' }} btn-sm">{{ $category->status == '1' ? 'Active' : 'Inactive' }}</span>
                            </td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#editpropertyCategory{{ $category->id }}" class="btn btn-primary btn-sm">Edit</a>
                                <button onclick="deletePropertyCategory({{ $category->id }})" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>

                        {{-- Edit Modal --}}
                        <div class="modal fade" id="editpropertyCategory{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-light p-3">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Property Category</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('admin.propertyCategoryEdit') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <input type="hidden" name="id" value="{{ $category->id }}">
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="file" class="form-control" name="image" accept="image/*">
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name" value="{{ $category->name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="status" class="form-label">Status</label>
                                                <select class="form-control" name="status" required>
                                                    <option value="1" {{ $category->status == '1' ? 'selected' : '' }}>Active</option>
                                                    <option value="0" {{ $category->status == '0' ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Save</button>
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

{{-- Add Modal --}}
<div class="modal fade" id="addpropertyCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Add Property Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.propertyCategory') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" accept="image/*" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>
   $(document).ready(function() {
    if ($.fn.dataTable.isDataTable('#dataTable')) {
        $('#dataTable').DataTable().destroy();
    }
    $('#dataTable').DataTable({
        
        "paging": true,
        "searching": true,
        "info": true,
        "lengthChange": true,
        // Add any other options you want
    });

    // Slug generation
    $('input[name="name"]').on('input', function() {
        var name = $(this).val();
        var slug = name.toLowerCase()
                       .replace(/ /g, '-')         
                       .replace(/[^\w-]+/g, '');   
        $('input[name="slug"]').val(slug);
    });
});


    function deletePropertyCategory(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: '',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Delete',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ url('admin/property/category/delete') }}/" + id;
            }
        });
    }
</script>
@endpush
