@extends('backend.vendor.layouts.app')
@section('content')

<div class="container">
<div class="card shadow-card user-list-card">
	<div class="card-header d-flex justify-content-between align-items-center">
		<h2 class="card-heading">Vendor Profile </h2>
		<!-- <a href="" class="btn btn-dark btn-sm harshit" data-bs-toggle="modal" data-bs-target="#addpropertyCategory">Add</a> -->
	</div>
</div>


<br>

<div class="card shadow-card user-list-card2">
	<div class="card-body"> 

        <form action="{{ route('vendor.profile') }}" method="POST" enctype="multipart/form-data" >
            @csrf
          <div class="row">

                <div class="col-md-12">
                    @if(Auth::guard('vendor')->user()->image != null)
                        <img src="">
                        @else
                        <img src="{{ asset('backend/images/users/avatar-1.jpg') }}" alt="profile_photo" style="height: 75px; width:77px;border-radius: 50% !important; margin-left:462px" >
                    @endif
                </div>

                <div class="col-md-6">
                    <label>Profile Picture</label>
                    <input type="file" class="form-control" name="image">
                </div>

                <div class="col-md-6">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ Auth::guard('vendor')->user()->name ?? '' }}">                
                </div>

                <div class="col-md-6">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{ Auth::guard('vendor')->user()->email ?? '' }}">                
                </div>

                <div class="col-md-6">
                    <label>Pin Code</label>
                    <input type="text" class="form-control" name="pin_code">                
                </div>

                <div class="col-md-6">
                    <label>State</label>
                    <input type="text" class="form-control" name="pin_code">                
                </div>

                <div class="col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control" name="pin_code">                
                </div>
            </div>

            <br><br>

            <div class="position-relative">
                <h6 class="mb-4 d-inline-block" >Bank Account Details</h6>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label>Account Holder Name</label>
                    <input type="text" class="form-control" name="account_holder_name">
                </div>

                <div class="col-md-6">
                    <label>Bank Address</label>
                    <input type="text" class="form-control" name="bank_address">                
                </div>

                <div class="col-md-6">
                    <label>IFSC Code</label>
                    <input type="text" class="form-control" name="ifsc_code">                
                </div>

                <div class="col-md-6">
                    <label>Account Type</label>
                    <select class="form-control" >
                        <option value="" selected disabled >--Select Account Type--</option>
                        <option value="Savings" >Savings</option>
                        <option value="Current" >Current</option>
                    </select>         
                </div>

            </div> <br>

            <div class="row">
                 <div class="col-md-2">
                    <input type="submit" class="btn btn-success btn-sm" value="Update" >
                 </div>
            </div>

            
            
        </form>
       
		
	</div>
</div>
</div>









@endsection


