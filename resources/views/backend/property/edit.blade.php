@extends('backend.layouts.app')
@section('content')
<div class="container">
	<div class="card shadow-card user-list-card">
		<div class="card-header d-flex justify-content-between align-items-center">
			<h2 class="card-heading">Property Edit </h2>
			<a href="{{ route('admin.propertyList') }}" class="btn btn-info harshit">List</a>
		</div>
	</div>
	<br>
	<div class="card shadow-card user-list-card2">
		<div class="card-body">
			<form action="{{ route('admin.property.update') }}" method="POST" enctype="multipart/form-data" >
				@csrf
				<div class="row">
					<input type="hidden" name="id" value="{{ $property->id }}">
					<div class="col-md-12" style="margin-top: 2%;">
						<label>Property Images </label>
						@foreach($decodedImages as $index => $image)
						<div class="image-item" style="display: inline-block; margin-right: 5px;">
							<img src="{{ asset('front/img/propertys/'.$image) }}" alt="image" style="width: 100px; height: 100px; margin-right: 10px;">
							<button type="button" class="btn btn-danger btn-sm delete-image" data-image="{{ $index }}" data-index="{{ $index }}" style="display: block; margin-top: 5px;">Delete</button>
						</div>
						@endforeach
					</div>
					<div class="col-md-6" style="margin-top: 2%;">
						<label>Add Other Property Image <span class="text-danger" >*</span></label>
						<input type="file" class="form-control" name="image[]" multiple accept="image/*">
						@error('image')
						<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>
					<div class="col-md-6" style="margin-top: 2%;">
						<label>Category <span class="text-danger" >*</span></label>
						@if($categorys->isNotEmpty())
						<select class="form-control js-example-basic-single" name="property_category_id" >
							<option value="" selected="" disabled >--Select Category--</option>
							@foreach($categorys as $category)
							<option value="{{ $category->id }}" {{ $property->property_category_id == $category->id ? 'selected' : '' }} > {{ $category->name }} </option>
							@endforeach
						</select>
						@endif
						@error('property_category_id')
						<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>
					<div class="col-md-12" style="margin-top: 2%;">
						<label>Property Name<span class="text-danger" >*</span></label>
						<input type="text" class="form-control" name="title" value="{{ $property->title ?? 'N/A' }}" required>
						@error('title')
						<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>
					<div class="col-md-12" style="margin-top: 2%;">
						<label>Property Description <span class="text-danger" >*</span></label>
						<textarea class="form-control summernote" rows="6" cols="5" name="description">{!! $property->description ?? 'N/A' !!}</textarea>
						@error('description')
						<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>
					<div class="col-md-4" style="margin-top: 2%;">
						<label>Country<span class="text-danger" >*</span></label>
						@if($countrys->isNotEmpty())
						<select class="form-control js-example-basic-single" name="country_id" id="country_id">
							<option value="" selected disabled >--Select Country--</option>
							@foreach($countrys as $country)
							<option value="{{ $country->id }}" {{ $property->country_id == $country->id ? 'selected' : '' }}  > {{ $country->name }} </option>
							@endforeach
						</select>
						@error('country_id')
						<div class="text-danger">{{ $message }}</div>
						@enderror
						@endif
					</div>
					<div class="col-md-4" style="margin-top: 2%;">
						<label>State<span class="text-danger" >*</span></label>
						<select class="form-control js-example-basic-state" name="state_id" id="state_id">
							<option value="" selected disabled>--Select State--</option>
							@if(isset($states))
							@foreach($states as $state)
							<option value="{{ $state->id }}" {{ $property->state_id == $state->id ? 'selected' : '' }}>
							{{ $state->name }}
							</option>
							@endforeach
							@endif
						</select>
						@error('state_id')
						<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>
					<div class="col-md-4" style="margin-top: 2%;">
						<label>City<span class="text-danger" >*</span></label>
						<select class="form-control js-example-basic-city" name="city_id" id="city_id">
							<option value="" selected disabled>--Select City--</option>
							@if(isset($cities))
							@foreach($cities as $city)
							<option value="{{ $city->id }}" {{ $property->city_id == $city->id ? 'selected' : '' }}>
							{{ $city->name }}
							</option>
							@endforeach
							@endif
						</select>
						@error('city_id')
						<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>
					<div class="col-md-12" style="margin-top: 2%;">
						<label for="customername-field" class="form-label">Address</label>
						<textarea class="form-control" rows="6" cols="5" name="address"  >{{ $property->address ?? 'N/A' }}</textarea>
						@error('address')
						<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>
					<div class="col-md-6  property-facility" style="margin-top: 2%;">
						<label>Property Facility<span class="text-danger" >*</span></label>
						<select class="form-control js-example-basic-facility " name="facilities[]" id="facility_id" multiple>
							<option value="" disabled>--Select Facilities--</option>
							@if($facilities)                        
							@foreach($facilities as $facility)
							<option value="{{ $facility->id }}" @if(is_array($decodedFacilities) && in_array($facility->id, $decodedFacilities)) selected @endif>{{ $facility->name }}</option>
							@endforeach
							@endif
						</select>
						@error('facilities')
						<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>
					<div class="col-md-6" style="margin-top: 2%;">
						<label for="customername-field" class="form-label">Price Per Night <span class="text-danger" >*</span></label>
						<input type="number" class="form-control number" name="price" value="{{ $property->price ?? 'N/A' }}" required>
						@error('price')
						<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>
					<div class="col-md-6" style="margin-top: 2%;">
						<label for="customername-field" class="form-label">Google Map Link <span class="text-danger" >*</span></label>
						<input type="link" class="form-control" name="google_map_link" value="{{ $property->google_map_link ?? 'N/A' }}" required>
						@error('google_map_link')
						<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>
					<div class="col-md-6" style="margin-top: 2%;">
						<label for="customername-field" class="form-label">Passenger Capacity<span class="text-danger" >*</span></label>
						<input type="number" class="form-control" name="passenger_capacity" value="{{ $property->passenger_capacity ?? 'N/A' }}" required>
						@error('passenger_capacity')
						<div class="text-danger">{{ $message }}</div>
						@enderror
					</div>
					<div class="col-md-2" style="margin-top: 2%;">
						<input type="submit" class="form-control btn btn-success" value="Update">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
@push('js')
<script>
	$(document).ready(function () {
	   $("#country_id").on('change', function () {
	       var countryId = $(this).val();
	       console.log("Selected Country ID: ", countryId);
	
	       $.ajax({
	           url: "{{ url('admin/get-states') }}/" + countryId,
	           method: "GET",
	           success: function (response) {
	               if (response && response.length > 0) {
	                   var statesDropdown = $('#state_id');
	                   statesDropdown.empty();
	                   statesDropdown.append('<option selected disabled>--Select State--</option>');
	
	                   $.each(response, function (index, state) {
	                       statesDropdown.append('<option value="' + state.id + '">' + state.name + '</option>');
	                   });
	
	                   // Clear City Dropdown
	                   $('#city_id').empty().append('<option selected disabled>--Select City--</option>');
	               } else {
	                   alert("No states found for the selected country.");
	               }
	           },
	           error: function (xhr, status, error) {
	               console.error('Error fetching states:', error);
	               alert("An error occurred while fetching states.");
	           }
	       });
	   });
	   $("#state_id").on('change', function () {
	       var stateId = $(this).val();
	       console.log("Selected State ID: ", stateId);
	
	       $.ajax({
	           url: "{{ url('admin/get-cities') }}/" + stateId,
	           method: "GET",
	           success: function (response) {
	               if (response && response.length > 0) {
	                   var citiesDropdown = $('#city_id');
	                   citiesDropdown.empty();
	                   citiesDropdown.append('<option selected disabled>--Select City--</option>');
	
	                   $.each(response, function (index, city) {
	                       citiesDropdown.append('<option value="' + city.id + '">' + city.name + '</option>');
	                   });
	               } else {
	                   alert("No cities found for the selected state.");
	               }
	           },
	           error: function (xhr, status, error) {
	               console.error('Error fetching cities:', error);
	               alert("An error occurred while fetching cities.");
	           }
	       });
	   });
	});
</script>
<script>
	$(document).on('click','.delete-image', function(){
	      var image = $(this).data('image');
	      var index = $(this).data('index');
	      var property_id = @json($property->id);
	      // alert(image);
	      var $imagePath = $(this).closest('.image-item');
	      if(confirm('Are you Sure Want To Delete This Image?')){
	          $imagePath.remove();
	
	          $.ajax({
	              url : '{{ url('admin/remove/propert/image') }}',
	              method : 'POST',
	              data : {
	                  _token: '{{ csrf_token() }}',
	                  image: image,
	                  index: index,
	                  property_id: property_id
	              },
	              success:function(success){
	                  if(success){
	                      console.log("Image Path Delete Successfully!");
	                      $imageItem.fadeOut(400, function() {
	                          $(this).remove();
	                      });
	                  }else{
	                      console.error("Error deleting image:", response.message);
	                      alert("Error deleting image: " + response.message);
	                  }
	              },
	              error:function(error){
	                  console.log("An Error occurred:", error);
	              }
	          });
	      } 
	  });
</script>
<script>
	$(document).ready(function(){
	    $('input[name="title"]').on('input', function() {
	        var name = $(this).val();
	        var slug = name.toLowerCase()
	                       .replace(/ /g, '-')       
	                       .replace(/[^\w-]+/g, '');   
	        $('input[name="slug"]').val(slug);
	    });
	});
</script>
@endpush