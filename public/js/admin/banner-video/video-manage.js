Dropzone.autoDiscover = false;
let myDropzone;

document.addEventListener('DOMContentLoaded', function() {
    myDropzone = new Dropzone("#videoDropzone", {
        url: window.BannerVideoConfig.uploadUrl,
        maxFiles: 1,
        acceptedFiles: 'video/*',
        addRemoveLinks: true,
        dictDefaultMessage: 'Drop your video here or click to upload',
        headers: {
            'X-CSRF-TOKEN': window.BannerVideoConfig.csrfToken
        },
        success: function(file, response) {
            document.getElementById('uploaded_video').value = response.path;
        },
        removedfile: function(file) {
            document.getElementById('uploaded_video').value = '';
            file.previewElement.remove();
        }
    });

    // Initial toggle
    toggleInputs(window.BannerVideoConfig.initialVideoType);

    // Event listener for radio change
    document.querySelectorAll('input[name="videoType"]').forEach(radio => {
        radio.addEventListener('change', function() {
            toggleInputs(this.value);
        });
    });
});

function toggleInputs(type) {
    document.getElementById('video_type').value = type;
    document.getElementById('embedContainer').style.display = (type === 'iframe') ? 'block' : 'none';
    document.getElementById('uploadContainer').style.display = (type === 'upload') ? 'block' : 'none';

    if (type === 'iframe' && myDropzone) {
        myDropzone.removeAllFiles(true);
        document.getElementById('uploaded_video').value = '';
    }
}
