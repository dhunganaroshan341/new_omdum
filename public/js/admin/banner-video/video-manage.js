Dropzone.autoDiscover = false;

let myDropzone;

$(document).ready(function () {
    // Init Dropzone
    myDropzone = new Dropzone("#videoDropzone", {
        url: "/admin/banner-video/file-upload", // Make sure this route exists!
        maxFiles: 1,
        acceptedFiles: 'video/*',
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // ensure csrf token is in <head>
        },
        success: function (file, response) {
            $('#uploaded_video').val(response.path);
        },
        removedfile: function (file) {
            $('#uploaded_video').val('');
            file.previewElement.remove();
        }
    });

    // Toggle inputs
    $('input[name="videoType"]').on('change', function () {
        const type = $(this).val();
        $('#video_type').val(type);

        if (type === 'embed') {
            $('#embedContainer').show();
            $('#uploadContainer').hide();
            if (myDropzone) {
                myDropzone.removeAllFiles(true);
                $('#uploaded_video').val('');
            }
        } else {
            $('#embedContainer').hide();
            $('#uploadContainer').show();
        }
    });
});
