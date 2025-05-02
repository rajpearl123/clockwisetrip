@extends('backend.vendor.layouts.app')
@section('content')
<style>
</style>
<div class="container">
	<div class="card shadow-card user-list-card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h2 class="card-heading">Property List</h2>
			<a href="{{route('vendor.addPropertyView')}}" class="btn btn-dark btn-sm harshit" >Add Property</a>
		</div>
	</div>
	<br>
	<div class="card shadow-card user-list-card2">
		<div class="card-body">
			<table class="table table-striped" id="dataTable">
				<thead>
					<tr>
						<th>No</th>
                        <th>Image</th>    
                        <th>Name</th>
                        <th>Description</th>      
                        <th>Address</th>       
                        <th>Status</th>
                        <th>Special Price </th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($properties as $property)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>
							@php
							$images = json_decode($property->image, true);
							$randomImage = $images && count($images) > 0 ? $images[array_rand($images)] : 'default.jpg';
							@endphp
							<img src="{{ asset('front/img/propertys/' . $randomImage) }}" alt="N/A" style="height:50px; width:50px">
						</td>
						<td>
                            {{ Illuminate\Support\Str::limit($property->title, 25) }} 
                            <i class="fa fa-info-circle" data-toggle="tooltip" title="{{ $property->title }}"></i>  
                        </td>
						<td>
							{{ Illuminate\Support\Str::limit(strip_tags($property->description, 25)) }} 
                            <i class="fa fa-info-circle" data-toggle="tooltip" title="{{ strip_tags($property->description) }}"></i>  
						</td>
						<td>
                            {{ Illuminate\Support\Str::limit($property->address, 20) }} 
                            <i class="fa fa-info-circle" data-toggle="tooltip" title="{{ $property->address }}"></i>    <br> 
                            <b>Country :</b> {{ $property->countryDetail->name }} <br>
                            <b>State :</b>{{ $property->stateDetail->name }} <br>
                            <b>City :</b>{{ $property->cityDetail->name }} <br>
                        </td>
						<td>
							<label class="switch">
                                <input type="checkbox" class="status-toggle" data-id="{{ $property->id }}" {{ $property->status ? 'checked' : '' }}>
                               <span class="slider round"></span>
                           </label> 
						</td>
						<td>
							<a href="{{ route('vendor.property.price', $property->id) }}" class="btn btn-dark btn-sm" >Add</a>
						</td>
						<td style="d-flex; gap:2px;">
							<a href="{{route('vendor.propertyView', $property->id)}}">
							<button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button>
							</a>
							<a href="{{route('vendor.editPropertyView', $property->id)}}">
							<button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
							</a>
							<button onclick="deleteUser({{ $property->id }})" class="btn btn-danger btn-sm" onclick="confirm"><i class="fas fa-trash"></i></button>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
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
	        confirmButtonText: 'Delete',
	        customClass: {
	            popup: 'swal2-large',
	            content: 'swal2-large'
	        }
	    }).then((result) => {
	        if (result.isConfirmed) {
	            window.location.href = "{{ route('vendor.deleteProperty', ':id') }}".replace(':id', id);
	        }
	    });
	}

</script>


<script>
	$(document).ready(function() {
		$('#loader').hide();
		$('.status-toggle').change(function() {
			var status = $(this).prop('checked') == true ? 1 : 0;
			var property_id = $(this).data('id');
			$('#loader').show();

			$.ajax({
				url: '{{ url('vendor/property/update-status') }}',
				type: 'POST',
				data: {
					'_token': $('meta[name="csrf-token"]').attr('content'),
					'property_id': property_id,
					'status': status
				},
				success: function(response) {
					$('#loader').hide();
					iziToast.info({
						title: 'Info',
						message: response.message,
						position: 'topRight',
						timeout: 3000,
					});
				},
				error: function(xhr, status, error) {
					$('#loader').hide();
                    var errorMessage = xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : 'Error updating status!';
					iziToast.error({
						title: 'Error',
						message: errorMessage,
						position: 'topRight',
						timeout: 3000
					});
				}
			});
		});
	});
</script>
@endpush