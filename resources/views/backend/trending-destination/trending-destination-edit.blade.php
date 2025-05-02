@extends('backend.layouts.app')
@section('content')

<div class="container">
    <div class="card shadow-card user-list-card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="card-heading">Homepage Treanding Destination</h2>
            <!-- <a href="" class="btn btn-dark btn-sm harshit" data-bs-toggle="modal" data-bs-target="#addproperty">Add</a> -->
        </div>
    </div>

    <div class="card shadow-card ">
        <div class="card-header d-flex justify-content-between align-items-center">
            <form style="width:100%" action="{{ route('admin.update-trending-destination', $destinationEdit->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 d-flex gap-3 mb-3">

                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" name="image" class="form-control" id="image" accept="image/*" />
                        <small class="form-text text-muted">Select a new image for this destination.</small>

                    </div>
                </div>
                <br>
                <div class="col-12">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection