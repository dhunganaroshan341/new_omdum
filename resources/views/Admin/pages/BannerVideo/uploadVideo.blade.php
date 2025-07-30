@extends('Admin.layout.master')

@section('content')
    <div class="container">
        <h3>Banner Slider Video</h3>

        <form method="POST" action="{{ url('admin/banner-video/upload') }}" enctype="multipart/form-data">
            @csrf

            <!-- Video Type Selection -->
            <div class="mb-3">
                <label><input type="radio" name="videoType" value="embed" checked> Embed via iframe</label>
                <label class="ms-3"><input type="radio" name="videoType" value="upload"> Upload video</label>
            </div>

            <!-- Embed Input -->
            <div id="embedContainer">
                <input type="text" class="form-control" name="embed_code" placeholder="Paste iframe embed code here">
            </div>

            <!-- Dropzone Upload -->
            <div id="uploadContainer" style="display: none;">
                <input type="hidden" name="uploaded_video" id="uploaded_video">
                <div id="videoDropzone" class="dropzone border border-dashed p-4 rounded text-center">
                    <div class="dz-message">Drop your video here or click to upload</div>
                </div>
            </div>

            <input type="hidden" name="video_type" id="video_type" value="embed">

            <button type="submit" class="btn btn-primary mt-3">Save</button>
        </form>
    </div>
@endsection
