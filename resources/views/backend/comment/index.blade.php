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
            <h2 class="card-heading">Comments</h2>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Comment</th>
                        <th>Status</th>
                    </tr>
                </thead>
               <tbody>
                @foreach($comments as $comment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $comment->name ?? '' }}</td>
                        <td>{{ $comment->email ?? '' }}</td>
                        <td>{{ $comment->comment ?? '' }}</td>
                        <td>
                        <button 
                            class="btn btn-sm {{ $comment->is_status == 0 ? 'btn-success' : 'btn-warning' }} status-btn"
                            data-id="{{ $comment->id }}"
                            data-status="{{ $comment->is_status }}">
                            {{ $comment->is_status == 0 ? 'Approve' : 'Pending' }}
                        </button>
                    </td>
                  </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>



@push('js')
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script>
$(document).on('click', '.status-btn', function() {
    var button = $(this);
    var commentId = button.data('id');  // Get the comment ID
    var currentStatus = button.data('status');  // Get the current status
    var newStatus = currentStatus == 0 ? 1 : 0;  // Toggle between 0 (Approve) and 1 (Pending)

    $.ajax({
        url: '{{ route("admin.comments.update.status", ":id") }}'.replace(':id', commentId),  // Make sure the route is correct
        type: 'POST',
        data: {
            status: newStatus,
            _token: '{{ csrf_token() }}'  // CSRF token for security
        },
        success: function(response) {
            // Toggle the button's appearance based on the new status
            if (newStatus == 0) {
                button.removeClass('btn-warning').addClass('btn-success').text('Approve');
                button.data('status', 0);
            } else {
                button.removeClass('btn-success').addClass('btn-warning').text('Pending');
                button.data('status', 1);
            }

            // Optional: Show a success message (using Toastr, for example)
            toastr.success(response.message);
        },
        error: function(xhr) {
            console.error(xhr);
            toastr.error('Error updating status');
        }
    });
});


</script>


@endpush

@endsection
