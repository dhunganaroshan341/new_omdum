<!-- Upload Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-upload me-2"></i> Upload Media</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <!-- Toggle buttons -->
                <div class="mb-3 text-center">
                    <button id="btnImage" class="btn btn-outline-primary active me-2">Upload Image</button>
                    <button id="btnVideo" class="btn btn-outline-secondary">Add YouTube Video</button>
                </div>

                <!-- Dropzone for Images -->
                <form action="{{ route('admin.tour-packages.uploadImages') }}" class="dropzone" id="imageDropzone"
                    enctype="multipart/form-data" style="min-height: 200px; border: 2px dashed #0d6efd; padding: 20px;">
                </form>

                <!-- YouTube iframe input -->
                <div id="videoInputWrapper" class="d-none">
                    <label for="youtubeIframe" class="form-label">YouTube Video Iframe or URL</label>
                    <textarea id="youtubeIframe" class="form-control" rows="3"
                        placeholder="Paste the YouTube embed iframe code or video URL here"></textarea>
                    <small class="form-text text-muted">Example iframe: &lt;iframe
                        src="https://www.youtube.com/embed/VIDEO_ID" ...&gt;&lt;/iframe&gt; or just the URL.</small>
                </div>

            </div>

            <div class="modal-footer">
                <button id="uploadSubmitBtn" type="button" class="btn btn-success">Upload</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>

    <script>
        $(function() {
            Dropzone.autoDiscover = false;

            var imageDropzone = new Dropzone("#imageDropzone", {
                paramName: "images", // The name that will be used to transfer the file
                acceptedFiles: "image/*",
                maxFilesize: 5, // MB
                uploadMultiple: true,
                parallelUploads: 5,
                autoProcessQueue: false,
                dictDefaultMessage: "Drag & drop images here or click to upload",
            });

            $('#btnImage').click(function() {
                $(this).addClass('active btn-primary').removeClass('btn-outline-primary');
                $('#btnVideo').removeClass('active btn-secondary').addClass('btn-outline-secondary');
                $('#imageDropzone').removeClass('d-none');
                $('#videoInputWrapper').addClass('d-none');
            });

            $('#btnVideo').click(function() {
                $(this).addClass('active btn-secondary').removeClass('btn-outline-secondary');
                $('#btnImage').removeClass('active btn-primary').addClass('btn-outline-primary');
                $('#videoInputWrapper').removeClass('d-none');
                $('#imageDropzone').addClass('d-none');
            });

            $('#uploadSubmitBtn').click(function() {
                if ($('#btnImage').hasClass('active')) {
                    if (imageDropzone.getAcceptedFiles().length === 0) {
                        alert('Please add some images to upload.');
                        return;
                    }
                    imageDropzone.processQueue();
                } else {
                    var iframeCode = $('#youtubeIframe').val().trim();
                    if (!iframeCode) {
                        alert('Please paste the YouTube iframe or URL.');
                        return;
                    }
                    $.ajax({
                        url: "{{ route('admin.tour-packages.uploadYoutube') }}",
                        method: "POST",
                        data: {
                            iframe: iframeCode,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            alert('Video iframe/URL submitted successfully!');
                            $('#uploadModal').modal('hide');
                            $('#youtubeIframe').val('');
                        },
                        error: function() {
                            alert('Upload failed, please try again.');
                        }
                    });
                }
            });

            imageDropzone.on("sendingmultiple", function(data, xhr, formData) {
                formData.append('_token', '{{ csrf_token() }}');
            });

            imageDropzone.on("successmultiple", function(files, response) {
                alert('Images uploaded successfully!');
                imageDropzone.removeAllFiles();
                $('#uploadModal').modal('hide');
            });

            imageDropzone.on("errormultiple", function(files, response) {
                alert('Error uploading images.');
            });
        });
    </script>
@endpush
