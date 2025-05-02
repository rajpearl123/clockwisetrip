@extends('front.layout.app')
@section('content')

<section class="py-50" style="margin-top: 80px;background-color: #f4f5f6;">
<div class="container">
    <div class="row">
    @foreach($propertys as $property)
    <div class="col-md-4">
        <a href="{{ route('propertySlug', $property->slug) }}">
            <div class="categorycardsItems">
                @if($property->image != null)
                    @php
                        $image_array = json_decode($property->image, true);
                    @endphp
                    <div id="carousel{{ $property->id }}" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($image_array as $key => $image)
                                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                    <img src="{{ asset('front/img/propertys/'.$image) }}" class="d-block w-100" alt="{{ $property->title }}">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $property->id }}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $property->id }}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                @else 
                    <img src="{{ asset('front/img/No-Image.png') }}" style="height:50px; width:50px" alt="No Image">
                @endif
                <div class="categoryCardsContent">
                    <h5>{{ $property->title ?? '' }}</h5>
                    <p>{{ $property->description ?? '' }}</p>
                    <a href="#" class="categoryCardsLink">Read More</a>
                </div>
            </div>
        </a>
    </div>
@endforeach

    </div>
</div>

</section>


@endsection