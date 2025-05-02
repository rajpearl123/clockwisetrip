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

            <form action="{{ route('vendor.profile') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-12">
                        @if(Auth::guard('vendor')->user()->image != null)
                        <img src="{{ asset('/images/vendor/profile/'. $vendor->image)}}" alt="profile_photo" style="height: 75px; width:77px;border-radius: 50% !important; margin-left:462px">
                        @else
                        <img src="{{ asset('backend/images/users/avatar-1.jpg') }}" alt="profile_photo" style="height: 75px; width:77px;border-radius: 50% !important; margin-left:462px">
                        @endif
                    </div>

                    <div class="col-md-6 mt-3">
                        <label>Profile Picture:</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ Auth::guard('vendor')->user()->name ?? '' }}" required>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label>Email:</label>
                        <input type="text" class="form-control" name="email" value="{{ Auth::guard('vendor')->user()->email ?? '' }}" required>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Phone:</label>
                        <input type="text" class="form-control" name="mobile_no" value="{{ Auth::guard('vendor')->user()->mobile_no ?? '' }}" required>
                    </div>

                    <!-- <div class="col-md-6 mt-3">
                            <label>Pin Code</label>
                            <input type="text" class="form-control" name="pin_code" value="{{ $vendor->pin_code ?? old('pin_code')}}" required>                
                        </div>

                        <div class="col-md-6 mt-3">
                            <label>State</label>
                            <input type="text" class="form-control" name="state" value="{{ $vendor->state ?? old('state')}}" required>                
                        </div>

                        <div class="col-md-6 mt-3">
                            <label>City</label>
                            <input type="text" class="form-control" name="city" value="{{ $vendor->city ?? old('city')}}" required>                
                        </div> -->
                        </div>

                        <br><br>

                        <!-- <div class="position-relative">
                        <h6 class="mb-4 d-inline-block">Bank Account Details</h6>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Account Holder Name :</label>
                            <input type="text" class="form-control" name="account_holder_name" value="{{ $vendor->account_holder_name ?? old('account_holder_name')}}" required> 
                        </div>

                        <div class="col-md-6">
                            <label>Branch Name :</label>
                            <input type="text" class="form-control" name="bank_address" value="{{ $vendor->bank_address ?? old('bank_address')}}" required>                
                        </div>

                        <div class="col-md-6">
                            <label>IFSC Code :</label>
                            <input type="text" class="form-control" name="ifsc_code" value="{{ $vendor->ifsc_code ?? old('ifsc_code')}}" required>                
                        </div>
                        <div class="col-md-6">
                            <label>Account Number :</label>
                            <input type="text" class="form-control" name="account_no" value="{{ $vendor->account_no ?? old('account_no')}}" required>                
                        </div>

                        <div class="col-md-6">
                            <label>Account Type</label>
                            <select name="account_type" class="form-control" required>
                                <option value="" disabled {{ !isset($vendor->account_type) && !old('account_type') ? 'selected' : '' }}>--Select Account Type--</option>
                                <option value="Savings" {{ (old('account_type') == 'Savings' || (isset($vendor) && $vendor->account_type == 'Savings')) ? 'selected' : '' }}>Savings</option>
                                <option value="Current" {{ (old('account_type') == 'Current' || (isset($vendor) && $vendor->account_type == 'Current')) ? 'selected' : '' }}>Current</option>
                            </select>

                
                        </div>

                    </div> <br> -->
                        <div class="position-relative">
                            <h6 class="mb-4 d-inline-block">Legal Details</h6>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <label>Aadhar Number:</label>
                                <input type="text" class="form-control" name="aadhar_number" maxlength="12" placeholder="Enter Aadhar (e.g., 123456789456)" value="{{ $vendor->aadhar_number ?? old('aadhar_number')}}" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label>PAN Card:</label>
                                <input type="text" class="form-control" name="pan_card" maxlength="10" placeholder="Enter PAN (e.g., ABCDE1234F)" value="{{ $vendor->pan_card ?? old('pan_card')}}" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="aadhar_image">Aadhar Image:</label>
                                <input type="file" class="form-control" name="aadhar_image" id="aadhar_image" required>
                                <img src="{{ asset('images/vendor/documents/' . $vendor->aadhar_image) }}" alt="Aadhar Image" style="height: 100px; width: 100px;" class="mt-3">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="pan_image">PAN Image:</label>
                                <input type="file" class="form-control" name="pan_image" id="pan_image" required>
                                <img src="{{ asset('images/vendor/documents/' . $vendor->pan_image) }}" alt="Aadhar Image" style="height: 100px; width: 100px;" class="mt-3">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2 mt-3">
                                <input type="submit" class="btn btn-success btn-sm" value="Update">
                            </div>
                        </div>



            </form>


        </div>
    </div>
</div>



@endsection