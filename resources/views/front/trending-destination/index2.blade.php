
@extends('front.layout.app');

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
<section class="py-10 d-flex items-center bg-light-2 section_top">
  <div class="container">
    <div class="row y-gap-10 items-center justify-between">
      <div class="col-auto">
        <div class="row x-gap-10 y-gap-5 items-center text-14 text-light-1">

          <div class="col-auto">
            <a href="{{ url('/') }}">
              <div class="">Home</div>
            </a>
          </div>


          <div class="col-auto">
            <div class="">&gt;</div>
          </div>
          <div class="col-auto">
            <div class="text-dark-1">{{$single_propertys->title}}</div>
          </div>
        </div>
      </div>
      <input type="hidden" id="property_id" name="property_id" value="{{$single_propertys->id}}">
      <div class="col-auto">
        <!-- <a href="#" class="text-14 text-blue-1 underline">All Hotel in London</a> -->
      </div>
    </div>
  </div>
</section>



<section class="pt-40">
  <div class="container">
    <div class="row y-gap-20 justify-between items-end">
      <div class="col-auto">
        <div class="row x-gap-20  items-center">
          <div class="col-auto">
            <h1 class="text-30 sm:text-25 fw-600">{{$single_propertys->title}}</h1>
            
          </div>
          <div>
            @if($single_propertys->google_map_link)
            <div class="text-18 text-danger">
              <a href="{{ $single_propertys->google_map_link }}" target="_blank" >Google Map Link</a>
            </div>
            @endif
          </div>



        </div>

        <div class="row x-gap-20 y-gap-20 items-center">
          <div class="col-auto">
            <div class="d-flex items-center text-15 text-light-1">
              <i class="icon-location-2 text-16 mr-5"></i>
              {{$single_propertys->address}}
            </div>
          </div>

        
        </div>
      </div>

      <div class="col-auto">
        <div class="row x-gap-15 y-gap-15 items-center">
          <div class="col-auto">
            <div class="text-14">
              From
              <span class="text-22 text-dark-1 fw-500 d-flex flex-column">
                @php $propertyExist = \App\Models\PropertyWeekendDeal::where('property_id', $single_propertys->id)->first(); @endphp
                @if($propertyExist) 
                INR {{ number_format($propertyExist->price, 2) }}
                <strike class="text-16 text-dark-1 fw-500">INR {{ number_format($single_propertys->price, 2) }}</strike>
                @else 
                INR {{ number_format($single_propertys->price, 2) }}
                @endif
              </span>
            </div>
          </div>

          
        </div>
      </div>
    </div>

    @php
    $images = json_decode($single_propertys->image, true);
    // dd($images);
    @endphp

    <div class="galleryGrid -type-1 pt-30">
      <div class="galleryGrid__item relative d-flex">

        @if(!empty($images) && $images[0] != null)
        <img class="rounded-4 col-12" src="{{ asset('front/img/propertys/'.$images[0]) }}"  alt="image" class="rounded-4">
        @else
        <img class="rounded-4 col-12" src="{{ asset('front/img/No-Image.png') }}"  alt="image" class="rounded-4">
        @endif

        <div class="absolute px-20 py-20 col-12 d-flex justify-end">
          <button class="button -blue-1 size-40 rounded-full flex-center bg-white text-dark-1">
            <i class="icon-heart text-16"></i>
          </button>
        </div>
      </div>
      @foreach($images as $key=>$image)
      @if($key!=0)
      <div class="galleryGrid__item">
        <img src="{{ asset('front/img/propertys/'.$image) }}" alt="image" class="rounded-4">
      </div>
      @endif
      @endforeach
    </div>



  </div>
</section>
<section class="pt-30">
  <div class="container">
    <div class="row y-gap-30">
      <div class="col-xl-8">
        <div class="row y-gap-40">
       

          <div class="col-sm-5">
            <h3 class="text-22 fw-500">Most Popular Facilities</h3>
            <div class="row y-gap-10 pt-20">
              @php
              $propertyFacilities = is_string($single_propertys->facilities)
              ? json_decode($single_propertys->facilities, true)
              : $single_propertys->facilities;
              if (is_array($propertyFacilities)) {
              $facilities = DB::table('facilities')->whereIn('id', $propertyFacilities)->get();
              } else {
              $facilities = DB::table('facilities')->where('id', $propertyFacilities)->get();
              }
              @endphp
              @foreach($facilities as $f)
              <div class="col-md-6">
                <div class="d-flex x-gap-15 y-gap-15 items-center">
                  <i class="icon-shield"></i>
                  <div class="text-15">{{ $f->name ?? '' }}</div>
                </div>
              </div>
              @endforeach
            </div>
          </div>

          <div id="overview" class="col-12">
            <h3 class="text-22 fw-500 pt-20 border-top-light">Overview</h3>
            <p class="text-dark-1 text-15 mt-10">
              {!! html_entity_decode(strip_tags($single_propertys->description)) !!}
            </p>
          </div>


        </div>
      </div>

      <div class="col-xl-4">
        <div class="ml-50 lg:ml-0">
          <div class="px-30 py-30 border-light rounded-4 shadow-4">
            <div class="d-flex items-center justify-between">
            
            </div>


            <div class="row y-gap-20 pt-30">
              <div class="col-12">
                <div class="searchMenu-date px-20 py-10 border-light rounded-4 -right js-form-dd js-calendar js-calendar-el">
                  <!-- Display for Selected Dates -->
                  <div style="display: flex; justify-content: space-between;flex-direction:column;">
                      <label for="start_date">Check In<span class="text-danger" >*</span>  </label>
                      <input type="date" class="p-2" name="start_date" id="start_date" value="" style="width:100%;margin-bottom:10px;border:1px solid #d6d6d6;">
                  </div>
                  <div style="display: flex; justify-content: space-between;flex-direction:column;">
                    <label for="end_date">Check Out<span class="text-danger" >*</span>  </label>
                    <input type="date" class="p-2" name="end_date" id="end_date" value="" style="width:100%;margin-bottom:10px;border:1px solid #d6d6d6;">
                </div>
                </div>
              </div>
              <div class="col-12">
                <!-- <button id="book_now_id" class="button -dark-1 px-35 h-60 col-12 bg-blue-1 text-white">
                  Book Now
                </button> -->
                @if(auth()->check())
                <a href="{{ route('checkout.summary') }}?property_id={{ $single_propertys->id }}&search_data={{ request()->search_data }}" class="button -dark-1 px-35 h-60 col-12 bg-blue-1 text-white proceed-to-checkout">
                  Proceed to Checkout
                </a>
                @else
                <a href="{{route('login')}}?redirect_url={{ urlencode(url()->current()) }}?search_data={{ request()->search_data }}">
                  <button id="" class="button -dark-1 px-35 h-60 col-12 bg-blue-1 text-white booking_btn">
                    Proceed to Checkout
                  </button>
                </a>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>







<section class="pt-40">
  <div class="container">
    <div class="row">
      <div class="col-xl-8 col-lg-10">
        <div class="row">
          <div class="col-auto">
            <h3 class="text-22 fw-500">Leave a Reviews</h3>
            <div class="row y-gap-30 pt-20">
              <div class="col-xl-6">
                <form id="post_comment" action="{{ route('comments.store') }}" method="POST" autocomplete="off">
                  @csrf
                  <div class="form-input">
                    <input type="hidden" id="name" value="{{ Auth::user()->name ?? '' }}" name="name" required>
                  </div>
                  <input type="hidden" name="property_id" value="{{ $single_propertys->id }}">
              </div>

              <div class="col-xl-6">
                <div class="form-input">
                  <input type="hidden" id="email" value="{{ Auth::user()->email ?? '' }}" name="email" required>
                </div>
              </div>

              <div class="col-12 col-lg-12">
                <div class="form-input new-form-input">
                  <textarea id="comment" name="comment" rows="3" required></textarea>
                  <label class="lh-1 text-16 text-light-1">Write Your Reviews</label>
                </div>
              </div>

              <div class="col-auto">
                @if(auth()->check())
                <button type="submit" class="button -md -dark-1 bg-blue-1 text-white">
                  Post Reviews
                  <div class="icon-arrow-top-right ml-15"></div>
                </button>
                @else
                <a href="{{ url('login') }}?redirect_url={{ urlencode(url()->current()) }}" class="button -md -dark-1 bg-blue-1 text-white">
                  Post Reviews
                  <div class="icon-arrow-top-right ml-15"></div>
                </a>
                @endif
              </div>
              </form>
            </div>
          </div>
          <div class="pt-30" id="comment_section">
            <h3>Posted Replies</h3>
            <div class="row" style="overflow-y: scroll; max-height: 500px;">
              @foreach($comments as $comment)
              <div class="col-md-12 mb-3">
                <div class="reply p-3 border rounded d-flex gap-3">
                  <img src="{{ asset('/public/profile_images/' . ($single_user && $single_user->profile_image ? $single_user->profile_image : 'https://example.com/path/to/default-logo.png')) }}" alt="" style="border-radius: 50%;width:50px;height:50px;">
                  <div>
                    <p><strong>{{ $comment->name }}</strong></p>
                  <p>{{ $comment->comment }}</p>
                  <p><small>{{ $comment->created_at->format('F j, Y \a\t h:i A') }}</small></p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            @if($comments->isEmpty())
            <p>No comments yet.</p>
            @endif
          </div>
        </div>
      </div>
    </div>
</section>


@endsection

@push('js')

<script>
 $(document).ready(function() {
    $('#post_comment').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();

        // Make the AJAX request
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: function(response) {
                iziToast.info({
                    title: 'Success',
                    message: 'Comment added successfully!',
                    position: 'topRight',
                    timeout: 3000,
                });
                $('#post_comment')[0].reset(); // Reset the form
                $('#comment_section').load(location.href + ' #comment_section'); 
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    var errorMessages = [];

                    // Extract error messages
                    $.each(errors, function(key, messages) {
                        errorMessages.push(messages[0]); 
                    });
                    iziToast.error({
                        title: 'Validation Error',
                        message: errorMessages.join('<br>'), 
                        position: 'topRight',
                        timeout: 5000, 
                    });
                } else if (xhr.status === 401) {
                    iziToast.error({
                        title: 'Unauthorized',
                        message: xhr.responseJSON.message || 'Please log in to post a comment.',
                        position: 'topRight',
                        timeout: 3000,
                    });
                } else {
                    iziToast.error({
                        title: 'Error',
                        message: 'An error occurred. Please try again later.',
                        position: 'topRight',
                        timeout: 3000,
                    });
                }
                console.error(xhr.responseText);
            }
        });
    });
});

</script>

<script>
 $(document).ready(function () {
    function getQueryParam(param) {
        var urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }
    var searchData = getQueryParam('search_data');
    
    if (searchData) {
        var data = JSON.parse(decodeURIComponent(searchData));
        if (data.adult) {
            $('#js-count-adult').text(data.adult);
        }
        if (data.children) {
            $('#js-count-child').text(data.children);
        }
        if (data.rooms) {
            $('#js-count-room').text(data.rooms);
        }
        if (data.check_in) {
            $('#start_date').val(data.check_in); 
        }
        if (data.check_out) {
            $('#end_date').val(data.check_out); 
        }
    } else {
        console.error('search_data parameter not found in the URL');
    }
});
</script>

<script>
  $(document).ready(function () {
    let today = new Date().toISOString().split('T')[0];
    $('#start_date').attr('min', today);

    $('#start_date').on('change', function () {
        let selectedDate = $(this).val();
        $('#end_date').attr('min', selectedDate);
    });

    $('.proceed-to-checkout').on('click', function (e) {
        let startDate = $('#start_date').val();
        let endDate = $('#end_date').val();
        if (!startDate || !endDate) {
            alert('Please fill in both Check-In and Check-Out dates.');
            return false;
        }
        function getQueryParam(param) {
        var urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }
        var searchData = getQueryParam('search_data');
        console.log("Your Search Data : "+searchData);
        // alert("Your Search Data : "+searchData);
        
        if(searchData == null){
          searchData = JSON.stringify({
            check_in: startDate,
            check_out: endDate
          });
          let propertyId = @json($single_propertys->id);
          console.log("New Search Data: " + searchData);
          let updatedUrl = `{{ route('checkout.summary') }}?property_id=${propertyId}&search_data=${encodeURIComponent(searchData)}`;
          $(this).attr('href', updatedUrl);
          // alert("Updated URL: " + updatedUrl);
          window.location.href = updatedUrl;
          console.log("Updated URL: ", updatedUrl);       
         
        }
       
        return true;
    });
});
</script>

@endpush