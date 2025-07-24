@extends('Admin.layout.master')

@section('content')
    <div class="container">
        <h3>Banner Slider Video</h3>

        <div>
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

            {{-- Embed Video Input --}}
            <div id="embedContainer"
                style="margin-top: 15px; {{ optional($bannerVideo)->type === 'upload' ? 'display:none;' : '' }}">
                <input type="url" name="embed_link" id="embedLink" placeholder="Paste embed video URL"
                    class="form-control"
                    value="{{ optional($bannerVideo)->type === 'embed' ? optional($bannerVideo)->url : '' }}">
            </div>

            {{-- Upload Video Dropzone --}}
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

            if (selectedType === 'embed') {
                embed.style.display = 'block';
                upload.style.display = 'none';

                // Optional: Clean up Dropzone files if switching away
                if (myDropzone) {
                    myDropzone.removeAllFiles(true);
                }

            } else {
                embed.style.display = 'none';
                upload.style.display = 'block';

                // Initialize Dropzone if not already done
                if (!myDropzone) {
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

                            @if (optional($bannerVideo)->type === 'upload' && optional($bannerVideo)->url)
                                const mockFile = {
                                    name: "Existing Video",
                                    size: 12345678
                                };
                                this.emit("addedfile", mockFile);
                                this.emit("complete", mockFile);
                                mockFile.previewElement.classList.add('dz-success', 'dz-complete');
                            @endif
                        }
                    });
                }
            }

            typeInput.value = selectedType;
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Initial setup
            const selectedType = document.querySelector('input[name="videoType"]:checked').value;
            toggleVideoInput(selectedType);

            // Handle radio switch
            document.querySelectorAll('input[name="videoType"]').forEach(el => {
                el.addEventListener('change', function() {
                    toggleVideoInput(this.value);
                });
            });
        });
    </script>
@endpush
