@extends('backend.layouts.app')
@section('content')

<div class="container">
<div class="card shadow-card user-list-card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h2 class="card-heading">Property Treanding Destination</h2>
        <!-- <a href="" class="btn btn-dark btn-sm harshit" data-bs-toggle="modal" data-bs-target="#addproperty">Add</a> -->
    </div>
</div>

<div class="card shadow-card ">
    <div class="card-header d-flex justify-content-between align-items-center">
       <form style="width:100%" action="{{route('admin.store.treanding.destination')}}" method="post">
        @csrf
           <div class="row align-items-center">
                <div class="mb-3 col-6">
                    <label for="customername-field" class="form-label">Property</label>
                    @if($all_property->isNotEmpty())
                    <select class="form-control" name="property_id" >
                        <option value="" selected disabled >--Select Category--</option>
                        @foreach($all_property as $property)
                        <option value="{{ $property->id }}" > {{ $property->title }} </option>
                        @endforeach
                    </select>
                    @endif
                </div>
                  <div class="col-6">
                 <button type="submit" class="btn btn-success">Save</button>
             </div>
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
                    <th>Title</th>
                    <th>Description</th>      
                    <th>Address</th>                        
                    <!-- <th>Status</th> -->
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($properties as $property)
            <tbody>                 
                <td> {{ $loop->iteration }} </td>
                <td>
                    @php $decodedImages = json_decode($property->image, true); @endphp
        
                    @if(!empty($decodedImages) && $decodedImages[0] != null)
                       <img src="{{ asset('front/img/propertys/'.$decodedImages[0]) }}" style="height:50px; width:50px" >
                            @else 
                            <img src="{{ asset('front/img/No-Image.png') }}" style="height:50px; width:50px">
                    @endif
                </td>
                <td>
                    {{ Illuminate\Support\Str::limit($property->title, 25) }} 
                    <i class="fa fa-info-circle" data-toggle="tooltip" title="{{ $property->title }}"></i>         
                </td>
                <td>
                    {{ Illuminate\Support\Str::limit($property->description, 25) }} 
                    <i class="fa fa-info-circle" data-toggle="tooltip" title="{{ $property->description }}"></i>                    
                </td>
                <td> 
                    {{ Illuminate\Support\Str::limit($property->Address, 20) }} 
                    <i class="fa fa-info-circle" data-toggle="tooltip" title="{{ $property->address }}"></i>     
                </td>
               
                <td style="d-flex; gap:2px;" >
                    
                    <a onclick="deleteProperty({{ $property->id }})" class="btn btn-danger btn-sm" >Delete</a>

                </td>           
                
            </tbody>
            @endforeach
        </table>
    </div>
</div>
</div>


@endsection



@push('js')
<script>
    $(document).ready(function(){
        $('input[name="title"]').on('input', function() {
            var name = $(this).val();
            var slug = name.toLowerCase()
                           .replace(/ /g, '-')         // Replace spaces with -
                           .replace(/[^\w-]+/g, '');   // Remove all non-word characters
            $('input[name="slug"]').val(slug);
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("#add-facility").click(function(){
            // alert(121);
            var newRow = `
                <div class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="facilities[]">
                        <button type="button" class="btn btn-outline-secondary remove-facility"><img src="{{ asset('backend/images/minus.png') }}" style="height:17px;" ></button>
                    </div>
                </div>
            `;
            $("#facility-inputs").append(newRow);
        });

        $(document).on('click', '.remove-facility', function() {
            $(this).closest('.mb-3').remove();
       });

    })
</script>

<script>

function deleteProperty(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: '',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Delete',
        customClass: {
            popup: 'swal2-large',
            content: 'swal2-large'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            // Dynamically append the id to the route URL
            const deleteUrl = "{{ route('admin.treandingDestinationDelete', ':id') }}".replace(':id', id);
            window.location.href = deleteUrl;
        }
    });
}

    $(document).ready(function(){
        // $('.edit-details').on('click',function(e){          
        //     e.preventDefault();
        //     var url = $(this).data('url');
        //     // alert(url);
        //     $.ajax({
        //         url : url,
        //         method: 'GET',
        //         success:function(response){
        //             if(response){
        //                 var dataToString = JSON.stringify(response);
        //                 console.log(dataToString);
        //                 $("#editproperty").modal('show');
        //                 $("#property-id").val(response.id);
        //                 $("#title").val(response.title);
        //                 $("#property_category_id").val(response.property_category_id);
        //                 $("#description").val(response.description);
        //                 $("#tax_rate").val(response.tax_rate);
        //                 $("#address").val(response.address);
        //                 $("#existing-images").empty();

        //                 var images = JSON.parse(response.image);
        //                 images.forEach(function(image, index){
        //                     var imageElement = `
        //                     <div class="image-item" style="display: inline-block; margin-right: 5px;">
        //                         <img src="{{ asset('front/img/propertys/${image}') }}" class="img-thumbnail" style="width: 100px; height: auto;">
        //                         <button type="button" class="btn btn-danger btn-sm delete-image" data-image="${image}" data-index="${index}" style="display: block; margin-top: 5px;">Delete</button>
        //                     </div>
        //                     `;
                            
        //                     $("#existing-images").append(imageElement);
        //                 });

        //                 var facilitiess = JSON.parse(response.facilities);
        //                 // alert(facilitiess);
        //                 facilitiess.forEach(function(facility, index){
        //                     var facilitiesElement = `
        //                      <div class="col-12" id="facility-inputs2">
        //                         <div class="mb-3">
        //                             <div class="input-group">
        //                                 <input type="text" class="form-control" name="facilities[]" value="${facility}">
        //                                 <button type="button" class="btn btn-outline-secondary remove-facility" data-index="${index}">
        //                                     <img src="{{ asset('backend/images/minus.png') }}" style="height:17px;">
        //                                 </button>
        //                             </div>
        //                         </div>
        //                     </div>

        //                     `;
        //                     $("#facility-inputs2").append(facilitiesElement);

        //                 });

                        
                       

        //                 var modalTitle = "Edit " + response.title + " Property";
        //                 $(".modal-title").text(modalTitle);


        //             }else{
        //                 console.error("Empty response received.");
        //                 alert("Empty response received.");
        //             }
                   

        //         },

        //         error:function(error){
        //             console.log("An Error occoured :", error);
        //         }
        //     });
        // });

        $(document).on('click', '.remove-facility', function(){
            $(this).closest('.mb-3').remove();
        });

        $(document).on('click', '#add-facility2', function() {      
          
                // alert(121);
                var newRow = `
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="facilities[]">
                            <button type="button" class="btn btn-outline-secondary remove-facility"><img src="{{ asset('backend/images/minus.png') }}" style="height:17px;" ></button>
                        </div>
                    </div>
                `;
                $("#facility-inputs3").append(newRow);
           
        });

        $('form').on('submit', function() {
            $('input[name="facilities[]"]').each(function() {
                if (!$(this).val()) {
                    $(this).closest('.mb-3').remove();
                }
            });
        });



        $(document).on('click','.delete-image', function(){
            var image = $(this).data('image');
            var index = $(this).data('index');
            // alert(image);
            var $imagePath = $(this).closest('.image-item');

            if(confirm('Are you Sure Want To Delete This Image?')){
                $imagePath.remove();

                $.ajax({
                    url : '{{ url('admin/remove/propert/image') }}',
                    method : 'POST',
                    data : {
                        _token: '{{ csrf_token() }}',
                        image: image,
                        index: index,
                        property_id: $("#property-id").val()
                    },
                    success:function(success){
                        if(success){
                            console.log("Image Path Delete Successfully!");
                            $imageItem.fadeOut(400, function() {
                                $(this).remove();
                            });
                        }else{
                            console.error("Error deleting image:", response.message);
                            alert("Error deleting image: " + response.message);
                        }
                    },
                    error:function(error){
                        console.log("An Error occurred:", error);
                    }
                });

              
            } // end of if
        });
    });
</script>

@endpush