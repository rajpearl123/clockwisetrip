@extends('backend.layouts.app')
@section('content')

<div class="container">
<div class="card shadow-card user-list-card">
	<div class="card-header d-flex justify-content-between align-items-center">
		<h2 class="card-heading">Property Add </h2>
		<a href="{{ route('admin.propertyList') }}" class="btn btn-info harshit">List</a>
	</div>
</div>
<br>
<div class="card shadow-card user-list-card2">
	<div class="card-body">
        <form action="{{ route('admin.property.add') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="row">
                <div class="col-md-6" style="margin-top: 2%;">
                    <label>Image <span class="text-danger" >*</span></label>
                    <input type="file" class="form-control" name="image[]" multiple accept="image/*" required>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6" style="margin-top: 2%;">
                    <label>Category <span class="text-danger" >*</span></label>
                    @if($categorys->isNotEmpty())
                    <select class="form-control select" name="property_category_id" >
                        <option value="" selected="" disabled >--Select Category--</option>
                        @foreach($categorys as $category)
                        <option value="{{ $category->id }}" > {{ $category->name }} </option>
                        @endforeach
                    </select>
                    @endif
                    @error('property_category_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12" style="margin-top: 2%;">
                    <label>Property Name<span class="text-danger" >*</span></label>
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}" required>
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12" style="margin-top: 2%;">
                    <label>Property Description <span class="text-danger" >*</span></label>
                    <textarea class="form-control summernote" rows="6" cols="5" name="description">{{ old('description') }}</textarea>
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
                        <option value="{{ $country->id }}" > {{ $country->name }} </option>
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
                    </select>
                    @error('state_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="col-md-4" style="margin-top: 2%;">
                    <label>City<span class="text-danger" >*</span></label>
                    <select class="form-control js-example-basic-city" name="city_id" id="city_id">
                        <option value="" selected disabled>--Select City--</option>
                    </select>
                    @error('city_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="col-md-12" style="margin-top: 2%;">
                    <label for="customername-field" class="form-label">Address</label>
                    <textarea class="form-control" rows="6" cols="5" name="address"  >{{ old('address') }}</textarea>
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
                            <option value="{{ $facility->id }}">{{ $facility->name }}</option>
                        @endforeach
                        @endif
                    </select>
                    @error('facilities')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
              
    
                <div class="col-md-6" style="margin-top: 2%;">
                    <label for="customername-field" class="form-label">Price Per Night <span class="text-danger" >*</span></label>
                    <input type="number" class="form-control" name="price" value="{{ old('price') }}" required>
                    @error('price')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="col-md-6" style="margin-top: 2%;">
                    <label for="customername-field" class="form-label">Google Map Link <span class="text-danger" >*</span></label>
                    <input type="link" class="form-control" name="google_map_link" value="{{ old('google_map_link') }}" required>
                    @error('google_map_link')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6" style="margin-top: 2%;">
                    <label for="customername-field" class="form-label">Passenger Capacity<span class="text-danger" >*</span></label>
                    <input type="number" class="form-control" name="passenger_capacity" value="{{ old('passenger_capacity') }}" required>
                    @error('passenger_capacity')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-2" style="margin-top: 2%;">
                    <input type="submit" class="form-control btn btn-success" value="Submit">
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
    // On Country Change
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

    // On State Change
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
     $('input[name="title"]').on('input', function() {
            var name = $(this).val();
            var slug = name.toLowerCase()
                           .replace(/ /g, '-')       
                           .replace(/[^\w-]+/g, '');   
            $('input[name="slug"]').val(slug);
        });
</script>

@endpush