@extends('backend.layouts.app')

@section('content')
<!-- Quill CSS -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<div class="container mt-5"><br><br>
<div class="card shadow-card user-list-card">
	<div class="card-header d-flex justify-content-between align-items-center">
		<h2 class="card-heading">Privacy Policy</h2>
	</div>
</div>
  <div class="bg-white p-4">
    <form action="{{ route('admin.store-privacy-policy') }}" method="post" enctype="multipart/form-data"> 
      @csrf
      <label for="heading">Enter Heading</label>
      <input type="text" id="heading" class="form-control" name="heading" value="{{ old('heading', $data->heading ?? '') }}" placeholder="Enter your heading here" required>

      <h5 class="pt-3">Body Content</h5>
      <div id="editor" style="height: 300px;">{!! old('content', $data->content ?? '') !!}</div>
      <button type="submit" class="btn btn-primary mt-3" id="submit">Submit</button>
      <textarea id="content" name="content" style="display: none;">{!! old('content', $data->content ?? '') !!}</textarea>
    </form>
  </div>
</div>
@endsection

@push('js')
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    // Initialize Quill editor
    var quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                ['bold', 'italic', 'underline'],       
                ['link', 'image'],                       
                [{ 'list': 'ordered' }, { 'list': 'bullet' }] 
            ]
        }
    });

    // Set editor content from textarea (for updates)
    quill.root.innerHTML = document.getElementById('content').value;

    // Handle form submission
    document.getElementById('submit').addEventListener('click', function () {
        var content = quill.root.innerHTML; 
        document.getElementById('content').value = content; // Set the content in the hidden textarea
    });
</script>
@endpush
