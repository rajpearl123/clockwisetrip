@extends('front.layout.app')
@section('content')
<section class="py-sm-50" style="margin-top: 80px;">
    <div class="termsAndConditions">
        <div class="container">
            <div class="row">
                <div class="term-condition-Heading d-flex align-items=center justify-content-between">
                    <div class="heading">
                        <h2>{{$data->heading}}</h2>
                        <p>Last updated: {{ date('d M Y', strtotime($data->updated_at)) }}</p>
                    </div>
                    <div class="print-icon">
                        <a href="#"><i class="fa-solid fa-print"></i></a>
                    </div>
                </div>
                {!!$data->content!!}
            </div>
        </div>
    </div>
</section>
@endsection