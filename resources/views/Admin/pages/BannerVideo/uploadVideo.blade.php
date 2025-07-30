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
            <textarea class="form-control" rows="4" oninput="document.getElementById('uploaded_video').value = this.value">{{ old('url', ($video->type ?? '') === 'iframe' ? $video->url : '') }}</textarea>
        </div>

        <div id="uploadContainer" class="mb-3">
            <label>Upload Video</label>
            <div id="videoDropzone" class="dropzone"></div>
        </div>

        <button type="submit" class="btn btn-primary">Save Video</button>
    </form>
@endsection

@push('scripts')
    <script>
        Dropzone.autoDiscover = false;
        let myDropzone;

        document.addEventListener('DOMContentLoaded', function() {
            myDropzone = new Dropzone("#videoDropzone", {
                url: "{{ route('admin.banner.video.upload') }}",
                maxFiles: 1,
                acceptedFiles: 'video/*',
                addRemoveLinks: true,
                dictDefaultMessage: 'Drop your video here or click to upload',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(file, response) {
                    document.getElementById('uploaded_video').value = response.path;
                },
                removedfile: function(file) {
                    document.getElementById('uploaded_video').value = '';
                    file.previewElement.remove();
                }
            });

            // Set the initial visibility
            toggleInputs('{{ old('video_type', $video->type ?? 'iframe') }}');
        });

        function toggleInputs(type) {
            $('#video_type').val(type);
            $('#embedContainer').toggle(type === 'iframe');
            $('#uploadContainer').toggle(type === 'upload');

            if (type === 'iframe' && myDropzone) {
                myDropzone.removeAllFiles(true);
                $('#uploaded_video').val('');
            }
        }

        $('input[name="videoType"]').on('change', function() {
            toggleInputs(this.value);
        });
    </script>
@endpush
