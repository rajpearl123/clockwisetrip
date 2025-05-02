@extends('backend.layouts.app')

@section('content')
<!-- Quill CSS -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<div class="container mt-5"><br><br>
    <div class="card shadow-card user-list-card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2 class="card-heading">Home</h2>
        </div>
    </div>
    <div class="bg-white p-4">
        <form action="{{ route('admin.store-home') }}" method="POST" enctype="multipart/form-data">
            @csrf 
        
            <div class="form-group col-6 pt-2">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $data->title ?? '') }}" required>
            </div>

            <div class="form-group col-6 pt-2">
                <label for="subtitle">Subtitle</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle', $data->sub_title ?? '') }}" required>
            </div>

            @if(isset($data) && $data->banner_image)
              <div class="col-6 pt-2">
                  <label>Current Image:</label><br>
                  <img src="{{ asset('/images/' . $data->banner_image) }}" alt="Current Image" style="max-width: 200px; height: 200px;">
              </div><br>
          @endif
          <br>
            <div class="form-group col-6 pt-2">
                <label for="image">Banner Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div><br>

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
