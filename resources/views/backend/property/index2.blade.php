@extends('backend.layouts.app')
@section('content')


<div class="container">
	<div class="card shadow-card user-list-card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h2 class="card-heading">Property List</h2>
			<a href="{{ route('admin.property.add') }}" class="btn btn-info harshit">Add</a>
		</div>
	</div>
	<div class="card mt-3 shadow-card user-list-card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<div style="display: flex; gap: 10px; align-items: center;">
				<form action="{{ url()->current() }}" method="get" style="display: flex;">
					<input type="text" class="form-control" name="title" required placeholder="Search property name">
					<button class="btn btn-primary">Search</button>
				</form>
				<button class="btn btn-info" onclick="window.location.href='{{ url()->current() }}';">Reset</button>
			</div>
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
					<th>Added By</th>                    	
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			@if($propertys->isNotEmpty())
			@foreach($propertys as $property)
			<tbody>					
				<td> {{ $loop->iteration }} </td>
                <td>
                    @php $decodedImages = json_decode($property->image, true); @endphp
                    @if(!empty($decodedImages) && $decodedImages[0] != null)
                       <img src="{{ asset('front/img/propertys/'.$decodedImages[0]) }}" style="height:50px; width:50px" >
                            @else 
                            <img src="{{ asset('front/img/No-Image.png') }}" style="height:50px; width:50px">
                    @endif
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
				@if($property->added_by == 'admin')		
					{{ 'Admin' }}
					@else 
					<p style="margin-bottom:2%;">Name : {{ $property->vendorDetail->name ?? 'N/A' }}</p>
					<p style="margin-bottom:2%;" >📞 : {{ $property->vendorDetail->mobile_no ?? 'N/A' }}</p>
					<p>📧 : {{ $property->vendorDetail->email ?? 'N/A' }}</p>
				@endif
				</td>
				<td> 
					<label class="switch">
                        <input type="checkbox" class="status-toggle" data-id="{{ $property->id }}" {{ $property->status ? 'checked' : '' }}>
                       <span class="slider round"></span>
                   </label> 
				</td>
				<td style="display: flex; gap:2px;" >
                    <a href="{{route('admin.vendorPropertyView', $property->id)}}">
                        <button class="btn btn-primary btn-sm">view</button>
                    </a>
					<a href="{{ route('admin.property.edit',$property->slug) }}" class="btn btn-warning btn-sm" >Edit</a>
                    <a onclick="deleteProperty({{ $property->id }})" class="btn btn-danger btn-sm" >Delete</a>

				</td>			
				
			</tbody>
			@endforeach
			@else
				<tr>
					<td colspan="8" class="text-center"> <b>No Property Found</b></td>
				</tr>
			@endif
		</table>
		<div class="d-flex justify-content-center">
			@if ($propertys instanceof \Illuminate\Pagination\LengthAwarePaginator)
				{{ $propertys->links('pagination::bootstrap-5') }}
			@endif
		</div>
	</div>
</div>
</div>

<div class="circle-container" id="loader">
	<div class="dots_contain">
		<div class="animated-circle one"></div>
		<div class="animated-circle two"></div>
		<div class="animated-circle three"></div>
	</div>
</div>

@endsection

@push('js')


<script>
	$(document).ready(function() {
		$('#loader').hide();
		$('.status-toggle').change(function() {
			var status = $(this).prop('checked') == true ? 1 : 0;
			var property_id = $(this).data('id');
			$('#loader').show();

			$.ajax({
				url: '{{ url('admin/property/update-status') }}',
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
						message: 'Property status updated successfully!',
						position: 'topRight',
						timeout: 3000,
					});
				},
				error: function(xhr, status, error) {
					$('#loader').hide();
					iziToast.error({
						title: 'Error',
						message: 'Error updating status!',
						position: 'topRight',
						timeout: 3000
					});
				}
			});
		});
	});
</script>






@endpush