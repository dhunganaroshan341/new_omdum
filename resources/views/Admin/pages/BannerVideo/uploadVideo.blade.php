@extends('Admin.layout.master')

@section('content')
    <div class="container">
        <h3>Banner Slider Video</h3>

        <div>
            <label><input type="radio" name="videoType" value="embed" checked> Embed Video Link</label>
            <label><input type="radio" name="videoType" value="upload"> Upload Video</label>
        </div>

        <form id="bannerVideoForm" method="POST" action="{{ route('admin.banner.video.save') }}"
            enctype="multipart/form-data">
            @csrf

            {{-- Embed Video Input --}}
            <div id="embedContainer" style="margin-top: 15px;">
                <input type="url" name="embed_link" id="embedLink" placeholder="Paste embed video URL"
                    class="form-control"
                    value="{{ optional($bannerVideo)->type === 'embed' ? optional($bannerVideo)->url : '' }}">
            </div>

            {{-- Upload Video Dropzone --}}
            <div id="uploadContainer" style="display: none; margin-top: 15px;">
                <div class="dropzone" id="videoDropzone"></div>
                <input type="hidden" name="uploaded_video" id="uploaded_video"
                    value="{{ optional($bannerVideo)->type === 'upload' ? optional($bannerVideo)->url : '' }}">
            </div>

            <input type="hidden" name="video_type" id="video_type" value="embed">

            <button type="submit" class="btn btn-primary mt-3">Save Video</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('input[name="videoType"]').forEach(el => {
            el.addEventListener('change', function() {
                if (this.value === 'embed') {
                    document.getElementById('embedContainer').style.display = 'block';
                    document.getElementById('uploadContainer').style.display = 'none';
                    document.getElementById('video_type').value = 'embed';
                } else {
                    document.getElementById('embedContainer').style.display = 'none';
                    document.getElementById('uploadContainer').style.display = 'block';
                    document.getElementById('video_type').value = 'upload';
                }
            });
        });

        // Dropzone config

        Dropzone.autoDiscover = false;

        document.addEventListener('DOMContentLoaded', function() {
            const myDropzone = new Dropzone("#videoDropzone", {
                url: "{{ route('admin.banner.video.upload') }}", // Your upload route
                maxFiles: 1,
                acceptedFiles: 'video/*',
                addRemoveLinks: true,
                dictDefaultMessage: 'Drop your video here or click to upload',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                init: function() {
                    this.on("maxfilesexceeded", function(file) {
                        this.removeAllFiles();
                        this.addFile(file);
                    });

                    this.on("success", function(file, response) {
                        document.getElementById('uploaded_video').value = response.path;
                    });

                    this.on("removedfile", function() {
                        document.getElementById('uploaded_video').value = '';
                    });
                }
            });
        });
    </script>
@endpush
