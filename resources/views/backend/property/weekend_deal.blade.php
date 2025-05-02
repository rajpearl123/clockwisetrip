@extends('backend.layouts.app')
@section('content')
<div class="container">
	<div class="card shadow-card user-list-card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h2 class="card-heading">Property Weekend Deal List</h2>
			<!-- <a href="" class="btn btn-dark btn-sm harshit" data-bs-toggle="modal" data-bs-target="#addproperty">Add</a> -->
		</div>
	</div>
	<div class="row">
		<div class="col-4">
			<div class="card shadow-card ">
				<div class="card-header d-flex justify-content-between align-items-center">
					<form style="width:100%" action="{{route('admin.store.propertyWeekendDeal')}}" method="post">
						@csrf
						<div class="row align-items-center">
							<div class="mb-3">
								<label for="customername-field" class="form-label">Choose Weekend Property</label> <span class="text-danger" >*</span>
								@if($all_property->isNotEmpty())
								<select class="form-control js-example-basic-single" name="property_id" required >
									<option value="" selected disabled >--Select Property--</option>
									@foreach($all_property as $property)
									<option value="{{ $property->id }}" > {{ $property->title }} </option>
									@endforeach
								</select>
								@endif
							</div>
							<div class="mb-3">
								<label class="form-label">Property Price</label> <span class="text-danger" >*</span>
								<input type="text" class="form-control number" name="price" required placeholder="Enter Property Price">
							</div>
							<div class="mb-3">
								<button type="submit" class="btn btn-success">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-8">
			<div class="card shadow-card user-list-card2">
				<div class="card-body">
					<table class="table table-striped" id="dataTable">
						<thead>
							<tr>
								<th>No</th>
								<th>Image</th>
								<th>Property Name</th>
								<th>Weekend Price Amount</th>
								<th>Action</th>
							</tr>
						</thead>
						@forelse ($weekend_deal_properties as $weekend_deal_propertie)
						<tbody>
							<td> {{ $loop->iteration }} </td>
							<td>
								@php $decodedImages = json_decode($weekend_deal_propertie->property->image, true); @endphp
								@if(!empty($decodedImages) && $decodedImages[0] != null)
								<img src="{{ asset('front/img/propertys/'.$decodedImages[0]) }}" style="height:50px; width:50px" >
								@else 
								<img src="{{ asset('front/img/No-Image.png') }}" style="height:50px; width:50px">
								@endif
							</td>
							<td>
								<a href="{{ route('trendingDestinationDetailss',$weekend_deal_propertie->property->slug) }}" target="_blank" style="color: black; text-decoration: none;" title="{{ $weekend_deal_propertie->property->title }}" >
								{{ Illuminate\Support\Str::limit($weekend_deal_propertie->property->title, 60) }} 
								<i class="fa fa-info-circle" data-toggle="tooltip" title="{{ $weekend_deal_propertie->property->title }}"></i>
								</a>
							</td>
							<td> 
								{{ $weekend_deal_propertie->price ?? '0' }}
							</td>
							<td style="d-flex; gap:2px;" >
								<a onclick="deleteProperty({{ $weekend_deal_propertie->id }})" class="btn btn-danger btn-sm" >Delete</a>
							</td>
						</tbody>
						@empty 
						<tbody>
							<td colspan="5" class="text-center">No Data Found</td>
						</tbody>
						@endforelse
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('js')


<script>
	function deleteProperty(id) {
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
	            // Dynamically append the id to the route URL
	            const deleteUrl = "{{ route('admin.propertyWeekDealDelete', ':id') }}".replace(':id', id);
	            window.location.href = deleteUrl;
	        }
	    });
	}
</script>
@endpush