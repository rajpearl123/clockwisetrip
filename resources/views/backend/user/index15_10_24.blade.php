@extends('backend.layouts.app')
@section('content')
<style>
	.user-list-card{
	margin-top: 80px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
	}

    .user-list-card2{
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

</style>
<div class="container">
<div class="card shadow-card user-list-card">
	<div class="card-header d-flex justify-content-between align-items-center">
		<h2 class="card-heading">User List</h2>
		<a href="" class="btn btn-dark btn-sm harshit" data-bs-toggle="modal" data-bs-target="#addUserModel">Add</a>
	</div>
</div>


<br>

<div class="card shadow-card user-list-card2">
	<div class="card-body">
		<table class="table table-striped" id="dataTable">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>                 
					<th>Email</th>	
					<!-- <th>Mobile No</th>				 -->
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			@foreach($users as $user)
			<tbody>					
				<td> {{ $loop->iteration }} </td>
				<td> {{ $user->name ?? '' }}</td>
				<td> {{ $user->email ?? '' }}</td>
				<!-- <td> {{ $user->mobile_no  ?? '' }}</td> -->
				<td> 
					<button 
						class="btn btn-sm {{ $user->status == 1 ? 'btn-success' : 'btn-danger' }} status-btn"
						data-id="{{ $user->id }}"
						data-status="{{ $user->status }}">
						{{ $user->status == 1 ? 'Active' : 'Inactive' }}
					</button>
				</td>
				<td style="d-flex; gap:2px;" >
					<a href="#" class="btn btn-primary btn-sm" >Edit</a>
					<button onclick="deleteUser({{ $user->id }})" class="btn btn-danger btn-sm" >Delete</button>
				</td>			
				
			</tbody>
			@endforeach
		</table>
	</div>
</div>
</div>


<div class="modal fade" id="addUserModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off" action="{{ route('admin.propertyCategory') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <!-- <input type="hidden" class="form-control" name="slug" required readonly > -->

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Email</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>

						<div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
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

@endsection

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
            confirmButtonText:'Delete ',
            customClass: {
                popup: 'swal2-large',
                content: 'swal2-large'
            }
        }).then((result) => {
            if (result.isConfirmed) {
				window.location.href = "{{ url('admin/user/delete') }}/" +id;				
                console.log("Harshit");
            }
        });
    }

	$(document).on('click', '.status-btn', function() {
        var button = $(this);
        var userId = button.data('id');
        var currentStatus = button.data('status') == 1 ? 0 : 1;
        $.ajax({
            url: '{{ route("admin.user.change.status", ":id") }}'.replace(':id', userId), // Generate URL with route helper
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
</script>
@endpush