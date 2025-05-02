@if(count($formData) > 0)
    @foreach($formData as $single_data)
    @php
        $rate_tax = DB::table('tax_and_rate')
            ->where('property_id', $single_data['id'])
            ->where('is_deleted', 0)
            ->first();
       
        if ($rate_tax) {
            $price_one_night = $rate_tax->rate_pr_night ?: 1000; 
        } else {
            $price_one_night = 1000; 
        }

        $total_price = $price_one_night * $diffInDays;
    @endphp

    @php $decodedImages = json_decode($single_data['image'], true); @endphp
    @php $facilities = json_decode($single_data['facilities'], true); @endphp
      
      
        <div class="col-12">
            <div class="border-top-light pt-30">
                <div class="row x-gap-20 y-gap-20">
                    <div class="col-md-auto">
                        <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 rounded-4">
                            <div class="cardImage__content">
                                @if(!empty($decodedImages) && $decodedImages[0] != null)
                                    <img class="rounded-4 col-12" src="{{ asset('front/img/propertys/'.$decodedImages[0]) }}" alt="image" style=" object-fit: cover;">
                                @else
                                    <img class="rounded-4 col-12" src="{{ asset('front/img/No-Image.png') }}" alt="image" style="object-fit: cover;">
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
                                        style="{{ $userLiked ? 'color: red;' : '' }}">  <!-- Optionally change button color based on the like status -->
                                        <i class="fas fa-heart"></i>
                                </button>

                            @else
                                <p><a href="{{ route('login') }}">Log in</a> to like this property.</p>
                            @endif
