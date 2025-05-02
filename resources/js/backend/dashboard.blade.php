@extends('backend.layouts.app')

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
                                    <h4 class="fs-16 mb-1">Good Morning, {{  Auth::guard('admin')->user()->name ?? '' }}!</h4>
                                </div>
                               
                            </div><!-- end card header -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                  

               

                </div> <!-- end .h-100-->

            </div> <!-- end col -->

         
        </div>

    </div>
    <!-- container-fluid -->
</div>

@endsection

