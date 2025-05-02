@extends('backend.layouts.app')
@section('content')
<style>
    .user-list-card{
    margin-top: 80px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .user-list-card2{
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
    .img {
    height: 70px !important;
    width: 70px !important;
}
/* Basic styling for the toggle button */
.btn-toggle {
    padding: 5px 10px;
    font-size: 14px;
    cursor: pointer;
    border-radius: 5px;
    border: none;
}

.btn-toggle.active {
    background-color: #28a745; /* Green for active (On) */
    color: white;
}

.btn-toggle.inactive {
    background-color: #dc3545; /* Red for inactive (Off) */
    color: white;
}

.btn-toggle:hover {
    opacity: 0.8;
}


</style>
<div class="container">
<div class="card shadow-card user-list-card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h2 class="card-heading">Homepage Treanding Destination</h2>
        <!-- <a href="" class="btn btn-dark btn-sm harshit" data-bs-toggle="modal" data-bs-target="#addproperty">Add</a> -->
    </div>
</div>

<div class="card shadow-card ">
    <div class="card-header d-flex justify-content-between align-items-center">
       <form style="width:100%" action="{{route('admin.add-trending-destination')}}" method="post" enctype="multipart/form-data"">
        @csrf
        <div class="col-12 d-flex gap-3 mb-3">
            <div class="form-group">
                <label for="country" class="form-label">Select Country</label>
                <select name="country" class="form-control" id="country_id">
                    <option value="" selected disabled>--Select Country--</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="state" class="form-label">Select State</label>
                <select name="state" id="state_id" class="form-control" required >
                    <option selected disabled  >--Select State--</option>
                </select>
            </div>
            <div class="form-group">
                <label for="city" class="form-label">Select City</label>
                <select name="city" id="city_id" class="form-control" required>
                    <option selected disabled>--Select City--</option>
                </select> 
            </div>
           
           
        </div>
             <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" name="image" class="form-control" id="image" accept="image/*" />
            </div>
            <br>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Save</button>
         </div>
       </form>
    </div>
</div>


<br>

<div class="card shadow-card user-list-card2">
    <div class="card-body">
        <table class="table table-striped" id="dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>    
                    <th>Destination</th>                           
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>    
                @foreach($destinationData as $destination)
                <tr>
                    <td>{{$destination->id}}</td>
                    <td><img class="img" src="{{ asset('images/' . $destination->image) }}" alt="N/A"></td>

                    <td>{{ $destination->state_name }}</td>

                    <td>
                        <!-- Toggle Button with Form -->
                        <form action="{{route('admin.status', $destination->id)}}" method="POST" id="status-form-{{ $destination->id }}">
                            @csrf
                           
                            <button type="submit" class="btn btn-toggle {{ $destination->status == 1 ? 'active' : 'inactive' }}" id="toggle-status-btn-{{ $destination->id }}">
                                {{ $destination->status == 1 ? 'Active' : 'Inactive' }}
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('admin.edit-trending-destination', $destination->id) }}">
                            <button type="button" class="btn btn-primary">Update</button>
                        </a>
                        <a href="{{ route('admin.delete-trending-destination', $destination->id) }}">
                            <button type="button" class="btn btn-danger">Delete</button>
                         </a>
                     </td>
                </tr>
                
                @endforeach
                <td>  </td>
                <td>
                
                
            </tbody>
        </table>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
   
        $("#country_id").on('change', function () {
            var countryId = $(this).val();
            console.log(countryId);

            $.ajax({
                url: "{{ route('admin.get.state', ':id') }}".replace(':id', countryId),
                method : "GET",

                success:function(response){
                    if(response){
                        var dataString = JSON.stringify(response);
                        console.log(dataString);

                        var StatesDropdown = $('select[name="state"]');
                        StatesDropdown.empty();
                        StatesDropdown.append('<option selected disabled>--Select State--</option>');

                        $.each(response, function(index, state) {
                            StatesDropdown.append('<option value="' + state.id + '">' + state.name + '</option>');
                        });

                    }else{
                        console.error("Empty response received.");
                        alert("Empty response received.");
                    }


                },
                error: function(xhr, status, error) {
                    console.error('An error occurred:', error);
                }

            });


        $("#state_id").on('change', function(){
            var stateId = $(this).val();
            console.log(stateId);

            $.ajax({
                url: "{{ route('admin.get.city', ':id') }}".replace(':id', stateId),
                method : "GET",

                success:function(response){
                    if(response){
                        var dataString = JSON.stringify(response);
                        console.log(dataString);

                        var cityDropdown = $('select[name="city"]');
                        cityDropdown.empty();
                        cityDropdown.append('<option selected disabled>--Select City--</option>');

                        $.each(response, function(index, city) {
                            cityDropdown.append('<option value="' + city.id + '">' + city.name + '</option>');
                        });

                    }else{
                        console.error("Empty response received.");
                        alert("Empty response received.");
                    }


                },
                error: function(xhr, status, error) {
                    console.error('An error occurred:', error);
                }

            });


        });
    })
</script>
<script>
$(document).ready(function() {
    @foreach($destinationData as $destination)
        $('#toggle-status-btn-{{ $destination->id }}').click(function(e) {
            e.preventDefault(); 

            let destinationId = {{ $destination->id }};
            let button = $(this);  

            $.ajax({
                url: 'admin/trending-destination/update-status/' + destinationId, 
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    if (response.status === 1) {
                        button.text('Active');
                        button.removeClass('inactive').addClass('active');
                    } else {
                        button.text('Inactive');
                        button.removeClass('active').addClass('inactive');
                    }
                },
                error: function(error) {
                    console.log('Error toggling status:', error);
                }
            });
        });
    @endforeach
});
</script>

@endsection


