@extends('Admin.layout.master')

@section('content')
    <div class="container">
        <h3>Banner Slider Video</h3>

        <div class="mb-3">
            <label>
                <input type="radio" name="videoType" value="embed" checked>
                Paste Embed Iframe
            </label>
            <label class="ms-3">
                <input type="radio" name="videoType" value="upload">
                Upload Video
            </label>
        </div>

        <form id="bannerVideoForm" method="POST" action="{{ route('admin.banner.video.save') }}">
            @csrf
            <input type="hidden" name="video_type" id="video_type" value="embed">
            <input type="hidden" name="uploaded_video" id="uploaded_video">

            <!-- Iframe Embed Input -->
            <div id="embedContainer" class="mb-3">
                <textarea name="embed_link" class="form-control" rows="4" placeholder='<iframe src="..."></iframe>'></textarea>
            </div>

            <!-- Dropzone Upload Input -->
            <div id="uploadContainer" class="mb-3" style="display:none;">
                <div id="videoDropzone" class="dropzone-custom"></div> <!-- avoid class="dropzone" -->

            </div>

            <button type="submit" class="btn btn-primary">Save Video</button>
        </form>
    </div>
@endsection
