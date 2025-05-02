@extends('front.layout.app');
@section('content')





<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="border-top pt-90">
                <div class="row x-gap-20 y-gap-20 justify-content-center">
                <div class="d-flex justify-content-end ">
            <div class="-blue-1 py-2 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1 align-items-center d-inline">
                <a href="{{url('/')}}">
                Search More Properties
                </a>
                </div>
                    </div>
                    @if($properties->count() > 0)
                        @foreach($properties as $property)
                            <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch n">
                                <div class="cardImage ratio ratio-1:1 w-100 rounded-4">
                                    <div class="cardImage__content">
                                    <img class="rounded w-100" 
                                        src="{{ asset('front/img/property/' . (json_decode($property->image)[0] ?? 'default.jpg')) }}" 
                                        alt="image">                                
                                    </div>

                                    @if(Auth::check())
                                        @php
                                            $userLiked = DB::table('likes')->where('user_id', Auth::id())->where('property_id', $property->id)->exists();
                                        @endphp
                                        <button class="button -blue-1 bg-white size-30 rounded-full shadow-2" 
                                                id="like-button-change-status{{$property->id}}" 
                                                data-property-id="{{ $property->id }}" 
                                                data-status="{{ $userLiked ? 'unlike' : 'like' }}"  
                                                style="{{ $userLiked ? 'color: red;' : '' }}">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    @else
                                        <p><a href="{{ route('login') }}">Log in</a> to like this property.</p>
                                    @endif
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 d-flex align-items-center">
                                <div class="d-flex flex-column">
                                    <h3 class="text-18 lh-16 fw-500">
                                        {{ $property->title ?? '' }} <br class="d-none d-lg-block">{{ $property->address ?? '' }}
                                    </h3>
                                    <div class="row x-gap-10 y-gap-10 items-center pt-10">
                                        <div class="col-auto">
                                            <p class="text-14">{!! Str::limit($property->description ?? '', 100) !!}</p>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>

                            <div class="col-12 col-md-auto text-right md:text-left d-flex flex-column align-items-end justify-content-center">
                                <div>
                                    <!-- <div class="text-14 text-light-1 mt-50 md:mt-20">{{ $property->adult ?? '0' }} adults</div> -->
                                    <div class="text-22 lh-12 fw-600 mt-5">₹{{$property->price}} Per Night</div>
                                    <a href="{{ route('trendingDestinationDetails', ['slug' => $property->slug]) }}" class="button -md -dark-1 bg-blue-1 text-white mt-24">View Destination</a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No properties found.</p>
                        <div>
                            <a href="{{url('/')}}">
                                Search More Properties
                            </a>
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection