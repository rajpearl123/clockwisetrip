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
		<h2 class="card-heading">Property Category List</h2>
		<a href="" class="btn btn-dark btn-sm harshit" data-bs-toggle="modal" data-bs-target="#addpropertyCategory">Add</a>
	</div>
</div>


<br>

<div class="card shadow-card user-list-card2">
	<div class="card-body">
		<table class="table table-striped" id="dataTable">
			<thead>
				<tr>
					<th>No</th>
                    <th>IMAGE</th>    
					<th>NAME</th>                 
					<th>Slug</th>	
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			@foreach($PropertyCategory as $PropertyCategory)
			<tbody>					
				<td> {{ $loop->iteration }} </td>
                <td>
                    @if($PropertyCategory->image != null)
                        <img src="{{ asset('front/img/property-category/'.$PropertyCategory->image) }}" style="height:50px; width:50px" >
                        @else 
                        <img src="{{ asset('front/img/No-Image.png') }}" style="height:50px; width:50px">
                    @endif
                </td>
				<td> {{ $PropertyCategory->name ?? '' }}</td>
				<td> {{ $PropertyCategory->slug ?? '' }}</td>
				<td> 
					@if($PropertyCategory->status == '1')
						<a href="" class="btn btn-success btn-sm">Active</a>
							@elseif($PropertyCategory->status == '0')
							<a href="" class="btn btn-danger btn-sm">In-Active</a>
					@endif
				</td>
				<td style="d-flex; gap:2px;" >
					<a href="" data-bs-toggle="modal" data-bs-target="#editpropertyCategory{{ $PropertyCategory->id }}" class="btn btn-primary btn-sm" >Edit</a>
					<button onclick="deletePropertCategory({{ $PropertyCategory->id }})" class="btn btn-danger btn-sm" >Delete</button>
				</td>			
				
			</tbody>

{{-- Edit Modal --}}
<div class="modal fade" id="editpropertyCategory{{ $PropertyCategory->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Edit Property Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off" action="{{ route('admin.propertyCategoryEdit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id" value="{{ $PropertyCategory->id }}" >

                        @if($PropertyCategory->image != null)
                            <img src="{{ asset('front/img/property-category/'.$PropertyCategory->image) }}" style="height:88px; width:155px; margin-left:140px;" >
                            @else 
                            <img src="{{ asset('front/img/No-Image.png') }}" style="height:88px; width:155px; margin-left:140px;">
                        @endif

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image"    >
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $PropertyCategory->name }}" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">status</label>
                                <select class="form-control" name="status" required>
                                    <option value="1" {{ $PropertyCategory->status == '1' ? 'selected' : '' }} >Active</option>
                                    <option value="0" {{ $PropertyCategory->status == '0' ? 'selected' : '' }} >In-Active</option>

                                </select>    
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
			@endforeach
		</table>
	</div>
</div>
</div>



{{-- Add Modal --}}
<div class="modal fade" id="addpropertyCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Add Property Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off" action="{{ route('admin.propertyCategory') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" class="form-control" name="slug" required readonly >

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Photo</label>
                                <input type="file" class="form-control" name="image" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" required>
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





@endsection



@push('js')
<script>
    $(document).ready(function(){
        $('input[name="name"]').on('input', function() {
            var name = $(this).val();
            var slug = name.toLowerCase()
                           .replace(/ /g, '-')         // Replace spaces with -
                           .replace(/[^\w-]+/g, '');   // Remove all non-word characters
            $('input[name="slug"]').val(slug);
        });     

    });
    
</script>

<script>
    function deletePropertCategory(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: '',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText:'Delete ',
            customClass: {
                popup: 'swal2-large',
                content: 'swal2-large'
            }
        }).then((result) => {
            if (result.isConfirmed) {
				window.location.href = "{{ url('admin/property/category/delete') }}/" +id;				
                console.log("Harshit");
            }
        });
    }
</script>

@endpush