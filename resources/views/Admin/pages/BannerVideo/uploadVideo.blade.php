@extends('Admin.layout.master')

@section('content')
    <h4>Banner Video Management</h4>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.banner.video.store') }}" method="POST">
        @csrf

        <input type="hidden" name="video_type" id="video_type" value="{{ old('video_type', $video->type ?? 'iframe') }}">
        <input type="hidden" name="url" id="uploaded_video" value="{{ old('url', $video->url ?? '') }}">

        <div class="mb-3">
            <label>Video Type:</label><br>
            <input type="radio" name="videoType" value="iframe"
                {{ old('video_type', $video->type ?? '') === 'iframe' ? 'checked' : '' }}> Iframe Embed
            <input type="radio" name="videoType" value="upload"
                {{ old('video_type', $video->type ?? '') === 'upload' ? 'checked' : '' }} class="ms-3"> Upload Video
        </div>

        <div id="embedContainer" class="mb-3">
            <label>Iframe Code</label>
            <textarea class="form-control" rows="4">{{ old('url', ($video->type ?? '') === 'iframe' ? $video->url : '') }}</textarea>
        </div>

        <div id="uploadContainer" class="mb-3" style="display:none;">
            <label>Upload Video</label>
            <div id="videoDropzone" class="dropzone"></div>
        </div>

        <button type="submit" class="btn btn-primary">Save Video</button>
    </form>

    <div id="bannerVideoApp" data-upload-url="{{ route('admin.banner.video.upload') }}"
        data-initial-video-type="{{ old('video_type', $video->type ?? 'iframe') }}">
    </div>
@endsection
