@extends('backend.layouts.app')

@section('content')
<!-- Quill CSS -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<div class="container mt-5"><br><br>
    <div class="card shadow-card user-list-card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="card-heading">Update Footer</h2>
        </div>
    </div>
    <div class="bg-white p-4">
        <form action="{{ route('admin.store-footer') }}" method="POST" enctype="multipart/form-data">
            @csrf 
        
            <div class="form-group col-6 pt-2">
                <label for="title">Mobile no</label>
                <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{ old('mobile_no', $data->mobile_no ?? '') }}" required>
            </div>

            <div class="form-group col-6 pt-2">
                <label for="subtitle">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $data->email ?? '') }}" required>
            </div> 
          <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection

@push('js')
<script>
    // Additional JavaScript can be added here if needed
</script>
@endpush
