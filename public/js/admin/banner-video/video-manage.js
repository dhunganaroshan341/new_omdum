

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


