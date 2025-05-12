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
                    <input type="text" class="form-control" id="title" name="title"
                        value="{{ old('title', $data->title ?? '') }}" required>
                </div>

                <div class="form-group col-6 pt-2">
                    <label for="subtitle">Subtitle</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle"
                        value="{{ old('subtitle', $data->sub_title ?? '') }}" required>
                </div>

                @if (isset($data) && $data->banner_image)
                    <div class="col-6 pt-2">
                        <label>Current Image:</label><br>
                        <img src="{{ asset('/images/' . $data->banner_image) }}" alt="Current Image"
                            style="max-width: 200px; height: 200px;">
                    </div><br>
                @endif
                <br>
                <div class="form-group col-6 pt-2">
                    <label for="image">Banner Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div><br>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card shadow-sm border-0">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Add Banner</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.banner-store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter title"
                                            value="{{ $banner->title }}" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea name="description" class="form-control" rows="4" placeholder="Enter description" required> {{ $banner->description }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="image" class="form-label">Upload Image</label>
                                        <input type="file" name="image" class="form-control">

                                        @if (isset($banner) && $banner->image)
                                            <div class="mt-2">
                                                <img src="{{ asset($banner->image) }}" alt="Current Image" width="150">
                                            </div>
                                        @endif
                                    </div>

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success">Submit Banner</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('js')
    <script>
        // Additional JavaScript can be added here if needed
    </script>
@endpush
