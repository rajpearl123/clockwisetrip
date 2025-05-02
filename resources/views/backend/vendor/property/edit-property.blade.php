
@extends('backend.vendor.layouts.app')
@section('title', 'Add Property')
@section('content')
<style>
    .Add-property-new .card {
        margin-top: 80px;

    }
</style>
<section class="mt-5 Add-property-new">
    <div class="container">
        <div class="row py-5 card mx-2">
            <h3 class="mb-3">Edit Property</h3>
            <form action="{{route('vendor.editProperty',$property->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <div class="mb-3">
                <div class="col-md-12" style="margin-top: 2%;">
						<label>Property Images </label>
						@foreach($decodedImages as $index => $image)
						<div class="image-item" style="display: inline-block; margin-right: 5px;">
							<img src="{{ asset('front/img/propertys/'.$image) }}" alt="image" style="width: 100px; height: 100px; margin-right: 10px;">
							<button type="button" class="btn btn-danger btn-sm delete-image" data-image="{{ $index }}" data-index="{{ $index }}" style="display: block; margin-top: 5px;">Delete</button>
						</div>
						@endforeach
					</div>
                    <label for="customername-field" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image[]" multiple accept="image/*">
                    
                    <div id="imagePreview" class="mt-2"></div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Category</label>
                        <select class="form-control" name="property_category_id">
                            <option value="" selected disabled>--Select Category--</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" 
                                        @if($category->id == $property->property_category_id) selected @endif>
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Title</label>
                        <input type="text" class="form-control" value="{{$property->title}}" name="title" required="">
                    </div>
                </div>

                <!-- <div class="col-12">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Description</label>
                        <textarea class="form-control" rows="6" cols="5" name="description">{{$property->description}}</textarea>
                    </div>
                </div> -->

                <!-- <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="customername-field" class="form-label">Country</label>
                            <select class="form-control select2" name="country_id" id="country_id">
                                <option value="" selected disabled>--Select Country--</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}" 
                                            @if($country->id == $property->country_id) selected @endif>
                                        {{$country->name}}
                                    </option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                        <label for="state_id" class="form-label">State</label>
                            <select class="form-control select2" name="state_id" id="state_id">
                                <option value="" selected disabled>--Select State--</option>
                                @foreach($states as $state)
                                    <option value="{{$state->id}}" 
                                            @if($state->id == $property->state_id) selected @endif>
                                        {{$state->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="customername-field" class="form-label">City</label>
                            <select class="form-control select2" name="city_id" id="city_id">
                                <option value="" selected="" disabled="">--Select City--</option>
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}" 
                                            @if($city->id == $property->city_id) selected @endif>
                                        {{$city->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div> -->
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Address</label>
                        <input type="text" class="form-control" value="{{$property->address}}" name="address" required="">

                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="customername-field" class="form-label">Price Per Night</label>
                        <input type="number" class="form-control" name="price" value="{{$property->price}}" required="">
                    </div>
                </div>

                <div class="col-12" id="facility-inputs">
                    <div class="mb-3">
                        <label for="facility-field" class="form-label">Facility</label>
                        <select class="form-control select2" name="facility_id[]" id="facility_id" multiple>
                            <option value="" disabled>--Select City--</option>
                            @foreach($facilities as $facility)
                                <option value="{{ $facility->id }}" 
                                        @if(in_array($facility->id, $selectedFacilities)) selected @endif>
                                    {{ $facility->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="hstack gap-2 justify-content-end">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
@push('js')
<script>
    $(document).ready(function() {
        function addNewInputGroup(button) {
            var newInputGroup = button.closest('.input-group').clone();
            newInputGroup.find('img').attr('src', 'https://test.pearl-developer.com/clockwisehotel/public/backend/images/minus.png');
            newInputGroup.find('button').attr('id', 'remove-highlight').click(function() {
                $(this).closest('.input-group').remove();
            });
            newInputGroup.css('margin-top', '5px');
            button.closest('.input-group').after(newInputGroup);
        }
        $('#add-highlight').click(function() {
            addNewInputGroup($(this));
        });
        $('#add-facility').click(function() {
            addNewInputGroup($(this));
        });
    });
</script>
<script>
    $(document).ready(function(){
        $("#country_id").on('change',function(){
            var countryId = $(this).val();
            console.log(countryId);
            $.ajax({
                url: "{{ url('vendor/get-state') }}/" + countryId,
                method : "GET",

                success:function(response){
                    if(response){
                        var dataString = JSON.stringify(response);
                        console.log(dataString);
                        var StatesDropdown = $('select[name="state_id"]');
                        StatesDropdown.empty();
                        StatesDropdown.append('<option selected disabled>--Select State--</option>');
                        $.each(response, function(index, state) {
                            StatesDropdown.append('<option value="' + state.id + '">' + state.name + '</option>');
                        });
                    }else{
                        console.error("Empty response received.");
                        alert("Empty response received.");
                    }
                },
                error: function(xhr, status, error) {
                    console.error('An error occurred:', error);
                }
            });
        });
    });
</script>

<script>
   $("#state_id").on('change', function(){
        var stateId = $(this).val();
        if(!stateId) {
            alert("Please select a state first.");
            return;
        }

        console.log(stateId);

        $.ajax({
            url: "{{ url('vendor/get-city') }}/"+stateId,
            method : "GET",
            success:function(response){
                if(response){
                    var dataString = JSON.stringify(response);
                    console.log(dataString);
                    var cityDropdown = $('select[name="city_id"]');
                    cityDropdown.empty();
                    cityDropdown.append('<option selected disabled>--Select City--</option>');
                    $.each(response, function(index, city) {
                        cityDropdown.append('<option value="' + city.id + '">' + city.name + '</option>');
                    });
                }else{
                    console.error("Empty response received.");
                    alert("Empty response received.");
                }
            },
            error: function(xhr, status, error) {
                console.error('An error occurred:', error);
            }
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
@endpush
