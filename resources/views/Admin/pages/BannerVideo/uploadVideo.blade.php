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

@push('scripts')
    <script>
        Dropzone.autoDiscover = false; // must be before any Dropzone init

        let myDropzone; // ✅ Make Dropzone instance accessible globally

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

            // Set initial state
            toggleInputs('embed');
        });

        function toggleInputs(type) {
            document.getElementById('video_type').value = type;
            document.getElementById('embedContainer').style.display = type === 'embed' ? 'block' : 'none';
            document.getElementById('uploadContainer').style.display = type === 'upload' ? 'block' : 'none';

            if (type === 'embed' && myDropzone) {
                myDropzone.removeAllFiles(true);
                document.getElementById('uploaded_video').value = '';
            }
        }

        // Add event listeners to radio buttons
        document.querySelectorAll('input[name="videoType"]').forEach(radio => {
            radio.addEventListener('change', function() {
                toggleInputs(this.value);
            });
        });
    </script>
@endpush
