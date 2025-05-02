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

</style>
<div class="container">
<div class="card shadow-card user-list-card">
	<div class="card-header d-flex justify-content-between align-items-center">
		<h2 class="card-heading">Property List</h2>
		<a href="" class="btn btn-dark btn-sm harshit" data-bs-toggle="modal" data-bs-target="#addproperty">Add</a>
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
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			@foreach($propertys as $property)
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
                    {{ Illuminate\Support\Str::limit($property->address, 20) }} 
                    <i class="fa fa-info-circle" data-toggle="tooltip" title="{{ $property->address }}"></i>     
                </td>
				<td> 
					@if($property->status == '1')
						<a href="" class="btn btn-success btn-sm">Active</a>
							@elseif($property->status == '0')
							<a href="" class="btn btn-danger btn-sm">In-Active</a>
					@endif
				</td>
				<td style="d-flex; gap:2px;" >
					<a href="javascript:void(0)" class="btn btn-primary btn-sm edit-details" data-url="{{ route('admin.editPropertyDetail', $property->id) }}" >Edit</a>
					<a href="" class="btn btn-danger btn-sm" >Delete</a>
				</td>			
				
			</tbody>
			@endforeach
		</table>
	</div>
</div>
</div>



{{-- Add Modal --}}
@php $categorys = DB::table('property_categorys')->where('status','1')->get();  @endphp
<div class="modal fade" id="addproperty" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Add Property</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off" action="{{ route('admin.propertyList') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">

                        <input type="hidden" class="form-control" name="slug" required readonly >

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image[]" multiple required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Category</label>
                                @if($categorys->isNotEmpty())
                                <select class="form-control" name="property_category_id" >
                                    <option value="" selected disabled >--Select Category--</option>
                                    @foreach($categorys as $category)
                                    <option value="{{ $category->id }}" > {{ $category->name }} </option>
                                    @endforeach
                                </select>
                                @endif
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Description</label>
                                <textarea class="form-control" rows="6" cols="5" name="description"  ></textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" required>

                            </div>
                        </div>

                        <div class="col-12" id="facility-inputs">
                            <div class="mb-3">
                                <label for="facility-field" class="form-label">Facility</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="facilities[]">
                                    <button type="button" class="btn btn-outline-secondary" id="add-facility"><img src="{{ asset('backend/images/add.png') }}" style="height:17px;" ></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- Edit Modal --}}
@php $categorys = DB::table('property_categorys')->where('status','1')->get();  @endphp
<div class="modal fade" id="editproperty" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Edit Property</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off" action="{{ route('admin.updatePropertyDetail') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="property_id" id="property-id">

                <div class="modal-body">
                    <div class="row">

                        <input type="hidden" class="form-control" name="slug" required readonly >

                       
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="image-field" class="form-label">Existing Images</label>
                                <div id="existing-images" class="mb-3">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="image-field" class="form-label">Upload New Images</label>
                                <input type="file" class="form-control" name="image[]" multiple>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Category</label>
                                @if($categorys->isNotEmpty())
                                <select class="form-control" name="property_category_id" id="property_category_id" >                                  
                                    @foreach($categorys as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == "property_category_id" ? 'selected' : '' }} > {{ $category->name }} </option>
                                    @endforeach
                                </select>
                                @endif
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="title" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Description</label>
                                <textarea class="form-control" rows="6" cols="5" name="description" id="description"  ></textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" id="address" required>

                            </div>
                        </div>

                        <div class="col-12" id="facility-inputs2">
                            <label for="facility-field" class="form-label">Previous Facility</label>
                            <!-- Facilities will be dynamically added here -->
                        </div>

                        <div class="col-12" id="facility-inputs3" >
                            <div class="mb-3">
                                <label for="facility-field" class="form-label">Add New Facility</label>
                                <div class="input-group">
                                    <input type="text" class="form-control"  id="new-facility2" name="facilities[]">
                                    <button type="button" class="btn btn-outline-secondary" id="add-facility2" ><img src="{{ asset('backend/images/add.png') }}" style="height:17px;" ></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
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
    $(document).ready(function(){
        $('.edit-details').on('click',function(e){          
            e.preventDefault();
            var url = $(this).data('url');
            // alert(url);
            $.ajax({
                url : url,
                method: 'GET',
                success:function(response){
                    if(response){
                        var dataToString = JSON.stringify(response);
                        console.log(dataToString);
                        $("#editproperty").modal('show');
                        $("#property-id").val(response.id);
                        $("#title").val(response.title);
                        $("#property_category_id").val(response.property_category_id);
                        $("#description").val(response.description);
                        $("#address").val(response.address);
                        $("#existing-images").empty();

                        var images = JSON.parse(response.image);
                        images.forEach(function(image, index){
                            var imageElement = `
                            <div class="image-item" style="display: inline-block; margin-right: 5px;">
                                <img src="{{ asset('front/img/propertys/${image}') }}" class="img-thumbnail" style="width: 100px; height: auto;">
                                <button type="button" class="btn btn-danger btn-sm delete-image" data-image="${image}" data-index="${index}" style="display: block; margin-top: 5px;">Delete</button>
                            </div>
                            `;
                            
                            $("#existing-images").append(imageElement);
                        });

                        var facilitiess = JSON.parse(response.facilities);
                        // alert(facilitiess);
                        facilitiess.forEach(function(facility, index){
                            var facilitiesElement = `
                             <div class="col-12" id="facility-inputs2">
                                <div class="mb-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="facilities[]" value="${facility}">
                                        <button type="button" class="btn btn-outline-secondary remove-facility" data-index="${index}">
                                            <img src="{{ asset('backend/images/minus.png') }}" style="height:17px;">
                                        </button>
                                    </div>
                                </div>
                            </div>

                            `;
                            $("#facility-inputs2").append(facilitiesElement);

                        });

                        
                       

                        var modalTitle = "Edit " + response.title + " Property";
                        $(".modal-title").text(modalTitle);


                    }else{
                        console.error("Empty response received.");
                        alert("Empty response received.");
                    }
                   

                },

                error:function(error){
                    console.log("An Error occoured :", error);
                }
            });
        });

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