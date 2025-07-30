Dropzone.autoDiscover = false;

$(document).ready(function() {
    const app = $('#bannerVideoApp');
    const uploadUrl = app.data('upload-url');
    const initialVideoType = app.data('initial-video-type');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    const embedContainer = $('#embedContainer');
    const uploadContainer = $('#uploadContainer');
    const videoTypeInput = $('#video_type');
    const uploadedVideoInput = $('#uploaded_video');
    const embedTextarea = embedContainer.find('textarea');

    let myDropzone = new Dropzone("#videoDropzone", {
        url: uploadUrl,
        maxFiles: 1,
        acceptedFiles: 'video/*',
        addRemoveLinks: true,
        dictDefaultMessage: 'Drop your video here or click to upload',
        success: function(file, response) {
            uploadedVideoInput.val(response.path);
        },
        removedfile: function(file) {
            uploadedVideoInput.val('');
            file.previewElement.remove();
        }
    });

    function toggleInputs(type) {
        videoTypeInput.val(type);

        if(type === 'iframe') {
            embedContainer.show();
            uploadContainer.hide();

            if(myDropzone) myDropzone.removeAllFiles(true);
            uploadedVideoInput.val(embedTextarea.val());
        } else {
            embedContainer.hide();
            uploadContainer.show();
            uploadedVideoInput.val('');
        }
    }

    // Sync hidden input on textarea change
    embedTextarea.on('input', function() {
        uploadedVideoInput.val($(this).val());
    });

    // Initial toggle state
    toggleInputs(initialVideoType);

    // Radio change event
    $('input[name="videoType"]').on('change', function() {
        toggleInputs($(this).val());
    });
});
