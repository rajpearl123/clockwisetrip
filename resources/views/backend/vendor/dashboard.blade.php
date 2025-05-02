@extends('backend.vendor.layouts.app')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col">

                <div class="h-100">
                    <div class="row mb-3 pb-1">
                        <div class="col-12">
                            <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                <div class="flex-grow-1">
                                    <h4 class="fs-16 mb-1">Good Morning, {{  Auth::guard('vendor')->user()->name ?? '' }}!</h4>
                                </div>
                            </div><!-- end card header -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->


                </div> <!-- end .h-100-->

            </div> <!-- end col -->

            <div class="container">
    <div class="row ml-3">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20" style="margin-left: 15px;">Total Properties</h6>
                    <h2 class="text-right" style="margin-left: 15px;"><i class="fa fa-house-user f-left"></i>
                    <span>{{$properties}}</span></h2>
                </div>
            </div>
        </div>
        
        <!-- <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20" style="margin-left: 15px;">Orders Received</h6>
                    <h2 class="text-right" style="margin-left: 15px;"><i class="fa fa-rocket f-left"></i><span>486</span></h2>
                    <p class="m-b-0" style="margin-left: 15px;">Completed Orders<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20" style="margin-left: 15px;">Orders Received</h6>
                    <h2 class="text-right" style="margin-left: 15px;"><i class="fa fa-refresh f-left"></i><span>486</span></h2>
                    <p class="m-b-0" style="margin-left: 15px;">Completed Orders<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20" style="margin-left: 15px;">Orders Received</h6>
                    <h2 class="text-right" style="margin-left: 15px;"><i class="fa fa-credit-card f-left"></i><span>486</span></h2>
                    <p class="m-b-0" style="margin-left: 15px;">Completed Orders<span class="f-right">351</span></p>
                </div>
            </div>
        </div> -->
    </div>
</div>

        </div>

    </div>
    <!-- container-fluid -->
</div>

@endsection

