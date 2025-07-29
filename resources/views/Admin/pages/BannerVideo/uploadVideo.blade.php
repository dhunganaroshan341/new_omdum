@extends('Admin.layout.master')

@section('content')
    <div class="container">
        <h3>Banner Slider Video</h3>

        <div class="mb-3">
            <label>
                <input type="radio" name="videoType" value="embed"
                    {{ optional($bannerVideo)->type !== 'upload' ? 'checked' : '' }}>
                Embed Video Link
            </label>
            <label>
                <input type="radio" name="videoType" value="upload"
                    {{ optional($bannerVideo)->type === 'upload' ? 'checked' : '' }}>
                Upload Video
            </label>
        </div>

        <form id="bannerVideoForm" method="POST" action="{{ route('admin.banner.video.save') }}"
            enctype="multipart/form-data">
            @csrf

            {{-- Embed Input --}}
            <div id="embedContainer"
                style="margin-top: 15px; {{ optional($bannerVideo)->type === 'upload' ? 'display:none;' : '' }}">
                <input type="url" name="embed_link" id="embedLink" placeholder="Paste embed video URL"
                    class="form-control"
                    value="{{ optional($bannerVideo)->type === 'embed' ? optional($bannerVideo)->url : '' }}">
            </div>

            {{-- Upload Input --}}
            <div id="uploadContainer"
                style="margin-top: 15px; {{ optional($bannerVideo)->type !== 'upload' ? 'display:none;' : '' }}">
                <div class="dropzone" id="videoDropzone"></div>
                <input type="hidden" name="uploaded_video" id="uploaded_video"
                    value="{{ optional($bannerVideo)->type === 'upload' ? optional($bannerVideo)->url : '' }}">
            </div>

            <input type="hidden" name="video_type" id="video_type" value="{{ optional($bannerVideo)->type ?? 'embed' }}">

            <button type="submit" class="btn btn-primary mt-3">Save Video</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        Dropzone.autoDiscover = false;

        let myDropzone;

        function toggleVideoInput(selectedType) {
            const embed = document.getElementById('embedContainer');
            const upload = document.getElementById('uploadContainer');
            const typeInput = document.getElementById('video_type');

            embed.style.display = (selectedType === 'embed') ? 'block' : 'none';
            upload.style.display = (selectedType === 'upload') ? 'block' : 'none';
            typeInput.value = selectedType;

            if (selectedType === 'upload' && !myDropzone) {
                myDropzone = new Dropzone("#videoDropzone", {
                    url: "{{ route('admin.banner.video.upload') }}",
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

                        // Show existing file
                        @if (optional($bannerVideo)->type === 'upload' && optional($bannerVideo)->url)
                            let mockFile = {
                                name: "{{ basename($bannerVideo->url) }}",
                                size: 12345678
                            };
                            this.emit("addedfile", mockFile);
                            this.emit("complete", mockFile);
                            mockFile.previewElement.classList.add('dz-success', 'dz-complete');
                        @endif
                    }
                });
            }

            if (selectedType === 'embed' && myDropzone) {
                myDropzone.removeAllFiles(true);
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            let selectedType = document.querySelector('input[name="videoType"]:checked').value;
            toggleVideoInput(selectedType);

            document.querySelectorAll('input[name="videoType"]').forEach(el => {
                el.addEventListener('change', function() {
                    toggleVideoInput(this.value);
                });
            });
        });
    </script>
@endpush
