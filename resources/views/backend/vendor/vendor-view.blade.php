@extends('backend.layouts.app')
@section('content')
<div class="container">
   <div class="vendor-list-details">
      <div class="vendor-profile-image d-flex align-items-center gap-2 text">
         <img src="{{ asset('/images/vendor/profile/'. $vendor->image)}}" alt="">
         <div>
            <p><b>Name:</b> {{$vendor->name}}</p>
            <p><b>Email:</b> {{$vendor->email}}</p>
            <p><b>Phone:</b> {{$vendor->mobile_no}}</p>
            <p><b>Aadhar Number:</b> {{$vendor->aadhar_number}}</p>
            <p><b>PAN Number:</b> {{$vendor->pan_card}}</p>
         </div>
      </div>
      <!-- <div>
         <h5 class="card-title text-bold" style="margin-bottom: 1rem;">Bank Details</h5>
         <p><b>Account Holder:</b> {{$vendor->account_holder_name}}</p>
         <p><b>Account Number:</b> {{$vendor->account_no}}</p>
         <p><b>Account Type:</b> {{$vendor->account_type}}</p>
         <p><b>IFSC Code:</b> {{$vendor->ifsc_code}}</p>
         <p><b>Branch:</b> {{$vendor->bank_address}}</p> 
      </div> -->
      
   </div>
</div>
<br>
   <div class="container">
      <div class="card shadow-card user-list-card">
         <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="card-heading">Properties</h2>
         </div>
      </div>
      <br>
      <div class="card shadow-card user-list-card2">
         <div class="card-body">
            
            <table class="table table-striped" id="dataTable">
               <thead>
                  <tr>
                     <th>S.no</th>
                     <th>Thumbnail</th>
                     <th>Tittle</th>
                     <th>Description</th>
                     <th>Category</th>
                     <th>Price</th>
                     <th>Status</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($properties as $property)
                  <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>
                        @php
                            $images = json_decode($property->image, true);
                            $randomImage = $images && count($images) > 0 ? $images[array_rand($images)] : null;
                        @endphp
                        <img src="{{ asset('front/img/propertys/' . $randomImage) }}" alt="N/A" style="height: 60px; width:65px;border-radius: 50%" >
                    </td>
                     <td>{{ $property->title ?? '' }}</td>
                     <td>
                        {{ Str::limit($property->description ?? '', 30) }}
                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $property->description ?? '' }}">
                            <i class="mdi mdi-information"></i>
                        </button>
                    </td>
                     <td>{{ $property->category_name ?? '' }}</td>
                     <td>{{$property->price ?? ''}}</td>
                     <td>
                        <button 
                           class="btn btn-sm {{ $property->status == 0 ? 'btn-success' : 'btn-danger' }} status-btn"
                           data-id="{{ $property->id }}"
                           data-status="{{ $property->status }}">
                        {{ $property->status == 0 ? 'Approved' : 'Suspended' }}
                        </button>
                     </td>
                     <td style="d-flex; gap:2px;">
                        <a href="{{route('admin.vendorPropertyView', $property->id)}}">
                        <button class="btn btn-primary btn-sm">view</button>
                        </a>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
@endsection
@push('js')
<script>
   $(document).on('click', '.status-btn', function() {
       $('#loaderimg').show();
       $('.status-btn').prop('disabled', true);
       var button = $(this);
       var userId = button.data('id');
       var currentStatus = button.data('status') == 1 ? 0 : 1;
       $.ajax({
           url: '{{ route("admin.vendorPropertyStatus", ":id") }}'.replace(':id', userId),
           type: 'POST',
           data: {
               status: currentStatus,
               _token: '{{ csrf_token() }}' 
           },
           success: function(response) {
               if (currentStatus == 0) {
                   $('#loaderimg').hide();
                   $('.status-btn').prop('disabled', false);
   
                   button.removeClass('btn-danger').addClass('btn-success').text('Approved');
                   button.data('status', 0);
               } else {
                   $('#loaderimg').hide();
                   $('.status-btn').prop('disabled', false);
   
                   button.removeClass('btn-success').addClass('btn-danger').text('Suspended');
                   button.data('status', 1);
               }
           },
           error: function(xhr) {
               $('#loaderimg').hide();
               $('.status-btn').prop('disabled', false);
   
               console.error(xhr);
               alert('Error updating status');
           }
       });
   });
   
</script>
@endpush
