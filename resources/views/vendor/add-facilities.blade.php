@extends('backend.layouts.app')
@section('title', 'Add Facility')
@section('content')

<section class="mt-5 Add-property-new">
    <div class="container">
        <div class="row py-3 card mx-2">
            <h3 class="mb-3">Add Facility</h3>
            <form action="{{route('admin.addFacility')}}" method="post">
                @csrf
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="customername-field" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" required="">
                        </div>
                    </div>  
                <div class="hstack gap-2 justify-content-end">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
    <div class="card shadow-card user-list-card mx-2 mt-0">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="card-heading">Facility List</h2>
        </div>

    <div class="shadow-card user-list-card2">
        <div class="card-body">
            
            <table class="table table-striped" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($facilities as $facility)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                           
                            <td>{{ $facility->name ?? '' }}</td>
                            <td>
                            <button 
                                class="btn btn-sm {{ $facility->status == 0 ? 'btn-success' : 'btn-danger' }} status-btn"
                                data-id="{{ $facility->id }}"
                                data-status="{{ $facility->status }}">
                                {{ $facility->status == 0 ? 'Active' : 'Inactive' }}
                            </button>
                            </td>
                            <td style="d-flex; gap:2px;">
                            <button onclick="deleteFacility({{ $facility->id }})" class="btn btn-danger btn-sm">Delete</button>                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
</section>

@endsection

@push('js')
    
<script>
    function deleteFacility(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Delete',
        }).then((result) => {
            if (result.isConfirmed) {
                var form = document.createElement('form');
                form.method = 'POST';
                form.action = "{{ route('admin.deleteFacility', ':id') }}".replace(':id', id);
                var csrfToken = document.createElement('input');
                csrfToken.type = 'hidden';
                csrfToken.name = '_token';
                csrfToken.value = '{{ csrf_token() }}';
                form.appendChild(csrfToken);
                document.body.appendChild(form);
                form.submit();
            }
        });
    }
</script>

<script>
    $(document).on('click', '.status-btn', function () {
        var button = $(this);
        var facilityId = button.data('id');
        var currentStatus = button.data('status');
        var newStatus = currentStatus == 0 ? 1 : 0; 
        
        $.ajax({
            url: "{{ route('admin.updateStatus', ':id') }}".replace(':id', facilityId),
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                status: newStatus
            },
            success: function (response) {
                if (response.success) {
                    button
                        .removeClass(currentStatus == 0 ? 'btn-success' : 'btn-danger')
                        .addClass(newStatus == 0 ? 'btn-success' : 'btn-danger')
                        .text(newStatus == 0 ? 'Active' : 'Inactive')
                        .data('status', newStatus);
                } else {
                    Swal.fire('Error', 'Unable to update the status.', 'error');
                }
            },
            error: function () {
                Swal.fire('Error', 'An error occurred while updating the status.', 'error');
            }
        });
    });
</script>

@endpush