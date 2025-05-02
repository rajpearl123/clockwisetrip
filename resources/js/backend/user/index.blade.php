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
		<a href="" class="btn btn-dark btn-sm harshit" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</a>
	</div>
</div>


<br>

<div class="card shadow-card user-list-card2">
	<div class="card-body">
		<table class="table table-striped" id="dataTable">
			<thead>
				<tr>
					<th>No</th>
					<th>NAME</th>                 
					<th>Email</th>	
					<th>Mobile No</th>				
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			@foreach($users as $user)
			<tbody>					
				<td> {{ $loop->iteration }} </td>
				<td> {{ $user->name ?? '' }}</td>
				<td> {{ $user->email ?? '' }}</td>
				<td> {{ $user->mobile_no  ?? '' }}</td>
				<td> 
					@if($user->status == '1')
						<a href="" class="btn btn-success btn-sm">Active</a>
							@elseif($user->status == '0')
							<a href="" class="btn btn-danger btn-sm">In-Active</a>
					@endif
				</td>
				<td style="d-flex; gap:2px;" >
					<a href="" class="btn btn-primary btn-sm" >Edit</a>
					<a href="" class="btn btn-danger btn-sm" >Suspend</a>
				</td>			
				
			</tbody>
			@endforeach
		</table>
	</div>
</div>
</div>

@endsection

@push('js')


@endpush