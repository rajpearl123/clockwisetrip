@extends('front.layout.app');
@section('content')
<section data-anim-wrap class="masthead -type-1 z-5 pt-80 pb-50">
	<div data-anim-child="fade" class="masthead__bg">
		<img src="#" alt="image" data-src="https://test.pearl-developer.com/clockwisehotel/public/images/1727247497.png" class="js-lazy">
	</div>
	<div class="col-auto">
		<div class="text-center">
			<h1 data-anim-child="slide-up delay-4" class="text-60 lg:text-40 md:text-30 text-white ">Trending Destinations</h1>
			<p data-anim-child="slide-up delay-5" class="text-white mt-6 md:mt-10">Book Your Dream Destinastion</p>
		</div>
	</div>
</section>
<section class="layout-pt-md layout-pb-lg">
	<div class="container">
		<div class="row y-gap-30">
			<div class="col-md-12 col-12">
				<div class="row y-gap-10 items-center justify-between">
					<div class="col-auto">
						<div class="text-18"><span class="fw-500">{{count($properties)}} properties</span> in {{ isset($searchData['location']) ? $searchData['location'] : '' }}</div>
					</div>
					<div class="col-auto">
						<div class="row x-gap-20 y-gap-20">
							<div class="col-auto">
								<button class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">
								<i class="icon-up-down text-14 mr-10"></i>
								Top picks for your search
								</button>
							</div>
							<div class="col-auto d-none lg:d-block">
								<button data-x-click="filterPopup" class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">
								<i class="icon-up-down text-14 mr-10"></i>
								Filter
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-30"></div>
				<div class="row y-gap-30">
					@if(isset($properties))
						@foreach($properties as $single_data)
							@php $decodedImages = json_decode($single_data['image'], true); @endphp
							@php
							$propertyFacilities = json_decode($single_data['facilities'], true);
							$facilities = App\Models\Facility::whereIn('id', $propertyFacilities)->get();
							@endphp
							<div class="col-12">
								<div class="border-light p-3 rounded-4 shadow-sm">
									<div class="row x-gap-20 y-gap-20">
										<div class="col-md-3">
											<div class="cardImage ratio ratio-1:1 md:w-1/1 rounded-4">
												<div class="cardImage__content">
													@if(!empty($decodedImages) && $decodedImages[0] != null)
													<img class="rounded-4 col-12" src="{{ asset('front/img/propertys/'.$decodedImages[0]) }}" alt="image" style="width:100%; object-fit: cover;">
													@else
													<img class="rounded-4 col-12" src="{{ asset('front/img/No-Image.png') }}" alt="image" style="width:100%;object-fit: cover;">
													@endif
												</div>
												@if(Auth::check())
												@php
												// Check if the user has already liked the property
												$userLiked = DB::table('likes')->where('user_id', Auth::id())->where('property_id', $single_data['id'])->exists();
												@endphp
												<!-- Render the like button with dynamic data for the status (like/unlike) -->
												<button class="button -blue-1 bg-white size-30 rounded-full shadow-2"
													id="like-button-change-status{{$single_data['id']}}"
													data-property-id="{{ $single_data['id'] }}"
													data-status="{{ $userLiked ? 'unlike' : 'like' }}"
													style="{{ $userLiked ? 'color: red;' : '' }}">
												<i class="fas fa-heart"></i>
												</button>
												@else
												@endif
											</div>
										</div>
										<div class="col-md-6">
											<h3 class="text-18 lh-16 fw-500">
												{{ $single_data['title'] ?? '' }}<br class="lg:d-none">{{ $single_data['address'] ?? '' }}
											</h3>
											@if($single_data['google_map_link'])
											<div class="text-18 text-danger">
												<a href="{{ $single_data['google_map_link'] }}" target="_blank">Google Map Link</a>
											</div>
											@endif
											<div>
												<div class="mt-3" style="display: flex;
													gap: 10px;
													align-items: center;
													flex-wrap: wrap;">
													@if(!empty($facilities))
													@foreach($facilities as $facility)
													<div class="" style="padding: 2px 15px;
														border: 1px solid #d6d6d6;
														border-radius: 30px;
														margin-bottom: 5px;">
														<div class="">{{$facility->name}}</div>
													</div>
													@endforeach
													@endif
												</div>
											</div>
											{{-- 
											<p>{!! Str::limit($single_data['description'] ?? '', 100) !!}</p>
											--}}
										</div>
										<div class="col-md-3 text-right md:text-left">
											<div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
												<div class="col-auto">
												</div>
											</div>
											<div class="d-flex justify-content-center h-100 gap-3 flex-column">
												<div class="text-22 lh-12 fw-600 mt-5">
													<div class="text-14">
														From
														<span class="text-22 text-dark-1 fw-500">
														₹{{$single_data['price'] ?? '0' }}
														</span>
													</div>
												</div>
												<a href="{{ route('trendingDestinationDetailss', ['slug' => $single_data['slug']]) }}?search_data={{ request()->search_data }}" class="button -md -dark-1 bg-blue-1 text-white mt-24">
												View Property</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					@else
					<div>
						<p>No Property Found in {{$search_data['location'] ?? ''}}</p>
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
	$(document).ready(function() {
	    search_single_property
	    $('#search_single_property').on('keyup', function() {
	        console.log("Keyup event triggered");
	
	        var propertyName = $(this).val();
	        if (propertyName.trim() !== '') {
	            $.ajax({
	                url: '{{ url('
	                search - single - property ') }}',
	                method: 'GET',
	                data: {
	                    property_name: propertyName
	                },
	                beforeSend: function() {
	                    $('#search-results').html('<p>Loading...</p>');
	                },
	                success: function(response) {
	                    console.log(response);
	                    if (response.data) {
	                        $('#search-results').html(response.data);
	                    } else {
	                        $('#search-results').html('<p>No results found.</p>');
	                    }
	                },
	                error: function(xhr, status, error) {
	                    // Handle error and display an error message
	                    $('#search-results').html('<p>Error occurred. Please try again later.</p>');
	                    toastr.error('Error occurred. Please try again.');
	                }
	            });
	        } else {
	            // Clear the results if the input is empty
	            $('#search-results').html('');
	        }
	    });
	});
</script>
<script>
	$(document).ready(function() {
	    $(document).on('click', '[id^=like-button-change-status]', function() {
	        var status = $(this).data('status');
	        var propertyId = $(this).data('property-id');
	
	        var button = $(this);
	
	        $.ajax({
	            url:'{{route('property.like',':property_id')}}'.replace(':property_id', propertyId),
	            method: 'POST',
	            data: {
	                _token: '{{ csrf_token() }}',
	                status: status
	            },
	            success: function(response) {
	                if (response.success) {
	                    if (response.status === 'liked') {
	                        button
	                            .data('status', 'unlike')
	                            .css('color', 'red');
	                        toastr.success('Saved to: My next trip!');
	                    } else {
	                        button
	                            .data('status', 'like')
	                            .css('color', '');
	
	                        toastr.info('Removed from: My next trip. ');
	                    }
	                } else {
	                    toastr.error(response.message, 'Error');
	                }
	            },
	            error: function(xhr) {
	                toastr.error('Error: ' + xhr.responseText, 'Error');
	            }
	        });
	    });
	
	});
</script>
@if(session('success'))
<script>
	Swal.fire({
	    position: "center",
	    icon: "success",
	    title: "{{ session('success') }}",
	    showConfirmButton: false,
	    timer: 1500
	});
</script>
@endif
<script>
	$(document).ready(function() {
	    let timeout;
	
	    $('#location').on('input', function() {
	        clearTimeout(timeout);
	        var cityName = $(this).val();
	
	        if (cityName.length >= 1) { // Start searching after 1 character is entered
	            timeout = setTimeout(function() {
	                var apiKey = 'AIzaSyDuMG2WaY4Vwi0iM3XqPdUrNAcvjHtR8wE'; // Replace with your actual API key
	                var url = `https://maps.googleapis.com/maps/api/geocode/json?address=${encodeURIComponent(cityName)}&key=${apiKey}`;
	
	                $.get(url, function(data) {
	                    if (data.status === 'OK') {
	                        var results = data.results;
	                        var resultHtml = '';
	
	                        results.forEach(function(result) {
	                            var addressComponents = result.address_components;
	                            var shortName = addressComponents.find(component => component.types.includes("locality"))?.short_name || "";
	
	                            resultHtml += `
	                                <div class="result-item" data-address="${result.formatted_address}" data-shortname="${shortName}">
	                                 ${result.formatted_address}
	                                </div>
	                                <hr>
	                            `;
	                        });
	
	                        $('#result').html(resultHtml || '<p>Not Available</p>');
	                    } else if (data.status === 'ZERO_RESULTS') {
	                        $('#result').html('<p>Not Available</p>');
	                    } else {
	                        $('#result').html(`<p>Error: ${data.status}</p>`);
	                    }
	                }).fail(function() {
	                    $('#result').html('<p>Error fetching data from API.</p>');
	                });
	            }, 300);
	        } else {
	            $('#result').html('');
	        }
	    });
	
	
	    $('#result').on('click', '.result-item', function() {
	        var address = $(this).data('address');
	        $('#location').val(address);
	        $('#result').html('');
	    });
	});
	
	$("#adult-plus-stay").on("click", function() {
	    var adlt_value_stay = $("#adult-count-value-stay").text();
	    var adlt_value_stay_inc = parseInt(adlt_value_stay) + 1;
	    $("#adult-count-value-stay").text(adlt_value_stay_inc);
	    $('#adult-count-value-stay-input').val(adlt_value_stay_inc);
	    $("#js-count-adult-stay").text(adlt_value_stay_inc);
	});
	
	$("#adult-minus-stay").on("click", function() {
	    var adlt_value_stay = $("#adult-count-value-stay").text();
	    var adlt_value_stay_dec = parseInt(adlt_value_stay) - 1;
	
	    // Validation to prevent negative values
	    if (adlt_value_stay_dec >= 1) {
	        $("#adult-count-value-stay").text(adlt_value_stay_dec);
	        $('#adult-count-value-stay-input').val(adlt_value_stay_dec);
	        $("#js-count-adult-stay").text(adlt_value_stay_dec);
	    }
	});
	
	$("#children-plus-stay").on("click", function() {
	    var children_value_stay = $("#children-count-stay").text();
	    var children_value_stay_inc = parseInt(children_value_stay) + 1;
	    $("#children-count-stay").text(children_value_stay_inc);
	    $('#children-count-value-stay-input').val(children_value_stay_inc);
	    $("#js-count-child-stay").text(children_value_stay_inc);
	});
	
	$("#children-minus-stay").on("click", function() {
	    var children_value_stay = $("#children-count-stay").text();
	    var children_value_stay_dec = parseInt(children_value_stay) - 1;
	
	    // Validation to prevent negative values
	    if (children_value_stay_dec >= 0) {
	        $("#children-count-stay").text(children_value_stay_dec);
	        $('#children-count-value-stay-input').val(children_value_stay_dec);
	        $("#js-count-child-stay").text(children_value_stay_dec);
	    }
	});
	
	$("#room-plus-stay").on("click", function() {
	    var room_value_stay = $("#room-count-stay").text();
	    var room_value_stay_inc = parseInt(room_value_stay) + 1;
	    $("#room-count-stay").text(room_value_stay_inc);
	    $('#room-count-value-stay-input').val(room_value_stay_inc);
	    $("#js-count-room-stay").text(room_value_stay_inc);
	});
	
	$("#room-minus-stay").on("click", function() {
	    var room_value_stay = $("#room-count-stay").text();
	    var room_value_stay_dec = parseInt(room_value_stay) - 1;
	
	    // Validation to prevent negative values
	    if (room_value_stay_dec >= 1) {
	        $("#room-count-stay").text(room_value_stay_dec);
	        $('#room-count-value-stay-input').val(room_value_stay_dec);
	        $("#js-count-room-stay").text(room_value_stay_dec);
	    }
	});
	
	$("#mainSearch__submit-stay").on("click", function(e) {
	    e.preventDefault(); // Prevent the default form submission
	
	    // Get values
	    var location = $("#location").val();
	    var start_date = $("#start_date_stay").text();
	    var end_date = $("#end_date_stay").text();
	    var adult_value = $("#js-count-adult-stay").text();
	    var child_value = $("#js-count-child-stay").text();
	    var room_value = $("#js-count-room-stay").text();
	
	    // Prepare data to send
	    var formData = {
	        location: location,
	        start_date: start_date,
	        end_date: end_date,
	        adult_count: adult_value,
	        child_count: child_value,
	        room_count: room_value
	    };
	
	    // AJAX request
	    // AJAX request
	    $.ajax({
	        type: 'GET',
	        url: '{{ url('
	        search - stay ') }}', // Ensure this matches your route definition
	        data: formData,
	        success: function(response) {
	            // Handle success (e.g., redirect or show a message)
	            console.log(response);
	
	            if (response.success) {
	                condole.log(response);
	                var redirectUrl = '{{ url('
	                trending - destination ') }}' +
	                    '?treanding_search_data=' + encodeURIComponent(JSON.stringify(response.data)) +
	                    '&search_data=' + encodeURIComponent(JSON.stringify(response.search_data));
	
	                window.location.href = redirectUrl;
	            } else {
	                console.log(response.message || "An error occurred.");
	            }
	        },
	        error: function(xhr, status, error) {
	            console.error(error);
	            console.log("An error occurred: " + error);
	        }
	    });
	
	});
</script>
@endsection