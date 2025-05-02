@extends('backend.vendor.layouts.app')
@section('content')


<style>
    .user-list-card {
        margin-top: 80px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
    .user-list-card2 {
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
</style>

<div class="container">
    <div class="card shadow-card user-list-card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="card-heading">Add {{ $property->title ?? '--' }} Price</h2>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-card user-list-card2">
                <div class="card-body">  
                    <form action="{{ route('vendor.property.price.store') }}" method="POST" >
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <input type="hidden" name="property_id" value="{{ $property->id  }}">
                                <label>Date <span class="text-danger" >*</span></label>
                                <input type="date" class="form-control" id="date" name="date" required >
                            </div>
                            <div class="col-12 mt-6" style="margin-top:7%;">
                                <label>Price <span class="text-danger" >*</span></label>
                                <input type="tel" class="form-control" id="price" name="price" required >
                            </div>
                            <div class="col-4" style="margin-top:7%;">
                                <input type="submit" class="form-control btn btn-primary btn-sm" value="Submit" required >
                            </div>
                        </div> 
                    </form>    
                     
                  
                </div>
            </div>

        </div>
        <div class="col-md-8">
            <div class="card shadow-card user-list-card2">
                <div class="card-body">          
                    <table class="table table-striped" id="dataTable">
                        <thead>
                            <tr>      
                                <th>S No.</th>  
                                <th>Date</th>     
                                <th>Price</th> 
                                <th>Action</th>                  
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($propertPrices as $propertPrice)
                            <tr>                                
                                <td> {{ $loop->iteration }} </td>
                                <td>{{ \Carbon\Carbon::parse($propertPrice->date)->format('d-M-Y') }} </td>
                                <td> {{ $propertPrice->price ?? '--' }} </td>
                                <td>
                                    <a href="javascript::void(0)" class="btn btn-success btn-sm open-price-modal"
                                             data-id="{{ $propertPrice->id }}" 
                                             data-date="{{ $propertPrice->date }}"
                                             data-price="{{ $propertPrice->price }}"
                                    >Edit</a>
                                    <button onclick="deleteEntry({{ $propertPrice->id }})" class="btn btn-danger btn-sm">Delete</button>

                                </td>                               
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Price Modal</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('vendor.property.price.update') }}" method="POST" >
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <input type="hidden" name="property_id" value="{{ $property->id  }}">
                        <input type="hidden" name="property_prices_table_id" id="property_prices_table_id">
                        <label>Date <span class="text-danger" >*</span></label>
                        <input type="date" class="form-control" id="modal_date" name="date" required >
                    </div>
                    <div class="col-12 mt-6" style="margin-top:5%;">
                        <label>Price <span class="text-danger" >*</span></label>
                        <input type="tel" class="form-control" id="modal_price" name="price" required >
                    </div>
                </div>               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
      </div>
    </div>
  </div>

@endsection

@push('js')
<script>
    function deleteEntry(id) {
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
                window.location.href = "{{ route('vendor.property.price.delete', ':id') }}".replace(':id', id);
            }
        });
    }    
</script>

<script>
    $(document).ready(function () {
        let today = new Date();
        let year = today.getFullYear();
        let month = String(today.getMonth() + 1).padStart(2, '0'); 
        let day = String(today.getDate()).padStart(2, '0'); 
        let minDate = `${year}-${month}-${day}`; 
        $('#date,#modal_date').attr('min', minDate); 

        $('#price').on('input', function () {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });
</script>

<script>
    $(document).on('click','.open-price-modal',function(){
        var id = $(this).data('id');
        var date = $(this).data('date');
        var price = $(this).data('price');

        console.log("Id : " +id);
        console.log("Date : " +date);
        console.log("Price : " +price);

        $('#property_prices_table_id').val(id);
        $('#modal_date').val(date);
        $('#modal_price').val(price);
        $('#editModal').modal('show');


        
    })
</script>
@endpush
