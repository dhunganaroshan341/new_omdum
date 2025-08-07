Dropzone.autoDiscover = false; // Disable auto init

$(document).ready(function () {
    // Setup CSRF token for all AJAX requests globally
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

let imageDropzone;
let isResettingDropzone = false;
let isManualDelete = false;


// Function to reset modal and Dropzone UI
function resetUploadModal() {
    if (imageDropzone) {
        isResettingDropzone = true;
        imageDropzone.removeAllFiles(true);
        // Reset the flag AFTER Dropzone finishes triggering removedfile events
        setTimeout(() => {
            isResettingDropzone = false;
        }, 0);
    }

    $('#youtubeIframe').val('');
    $('#tour_package_id').val('');

    $('#btnImage').addClass('active btn-primary').removeClass('btn-outline-primary');
    $('#btnVideo').removeClass('active btn-secondary').addClass('btn-outline-secondary');

    $('#mydropzone').removeClass('d-none');
    $('#videoInputWrapper').addClass('d-none');
}



    // Close modal on #closeBtn click and reset
    $(document).on('click', '#closeBtn', function () {
        $('#uploadModal').modal('hide');
        resetUploadModal();
    });

    // Reset modal on bootstrap modal hidden event
    $('#uploadModal').on('hidden.bs.modal', function () {
        resetUploadModal();
    });

    // Open modal and initialize Dropzone + load existing images
   $(document).on("click", ".editUploads", function () {
    const tourPackageId = $(this).data('id');
    $('#tour_package_id').val(tourPackageId);
    $("#uploadModal").modal("show");

    // Create Dropzone if not already initialized
    if (!imageDropzone) {
        imageDropzone = new Dropzone("#mydropzone", {
            url: window.routes.packagesImageUpload,
            paramName: "images",
            method: "POST",
            acceptedFiles: "image/*",
            maxFilesize: 5,
            uploadMultiple: true,
            parallelUploads: 5,
            autoProcessQueue: false,
            addRemoveLinks: true,
            dictDefaultMessage: "Drag & drop images here or click to upload",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        // Add tour_package_id to upload request
        imageDropzone.on("sending", function (file, xhr, formData) {
            formData.append("tour_package_id", $("#tour_package_id").val());
        });

        // Handle success
        imageDropzone.on("successmultiple", function (files, response) {
            Swal.fire({
                icon: "success",
                title: "Images Uploaded Successfully!",
                showConfirmButton: false,
                timer: 1500,
            });

            imageDropzone.getAcceptedFiles().forEach((file) => {
                imageDropzone.removeFile(file);
            });

            $("#uploadModal").modal("hide");
        });

        // Handle upload error
        imageDropzone.on("errormultiple", function (files, response) {
            Swal.fire({
                icon: "error",
                title: "Upload Error",
                text: typeof response === "string" ? response : "Something went wrong.",
            });
            console.error(response);
        });

        // 🧠 MANUAL DELETE ONLY
        imageDropzone.on("removedfile", function (file) {
            if (!isManualDelete || isResettingDropzone) {
                isManualDelete = false;
                return;
            }

            if (file.serverId) {
                $.ajax({
                    url: `/admin/tour-package-images/delete/${file.serverId}`,
                    method: "DELETE",
                    headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
                    success: function () {
                        Swal.fire("Deleted!", "Image has been deleted.", "success");
                    },
                    error: function () {
                        Swal.fire("Failed!", "Could not delete image.", "error");
                    },
                });
            }

            isManualDelete = false;
        });
    }

    // 🧹 RESET Dropzone safely
    isResettingDropzone = true;
    imageDropzone.removeAllFiles(true);
    isResettingDropzone = false;

    // 📦 Load existing images from server
    $.ajax({
        url: `/admin/tour-package-images/${tourPackageId}`,
        method: "GET",
        success: function (images) {
            images.forEach(function (image) {
                const mockFile = {
                    name: image.image_path.split("/").pop(),
                    size: 123456,
                    accepted: true,
                    status: Dropzone.SUCCESS,
                    serverId: image.id,
                };

                imageDropzone.emit("addedfile", mockFile);
                imageDropzone.emit("thumbnail", mockFile, image.image_path);
                imageDropzone.emit("complete", mockFile);

                imageDropzone.files.push(mockFile);
            });
        },
        error: function () {
            console.error("Failed to load existing images");
        },
    });
});
// deleting dropzone
$(document).on("click", ".dz-remove", function () {
    isManualDelete = true;
});



    // Upload submit button click handler
    $('#uploadSubmitBtn').click(function () {
        if ($('#btnImage').hasClass('active')) {
            if (!imageDropzone || imageDropzone.getAcceptedFiles().length === 0) {
                Swal.fire({
                    icon: "warning",
                    title: "No Images Selected",
                    text: "Please add some images to upload."
                });
                return;
            }
            imageDropzone.processQueue(); // Start uploading all queued files
        } else {
            const iframeCode = $('#youtubeIframe').val().trim();
            if (!iframeCode) {
                Swal.fire({
                    icon: "warning",
                    title: "Missing Input",
                    text: "Please paste the YouTube iframe or URL."
                });
                return;
            }
            $.ajax({
                url: window.routes.packagesVideoUpload,
                method: "POST",
                data: {
                    iframe: iframeCode,
                    tour_package_id: $('#tour_package_id').val(),
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function () {
                    Swal.fire({
                        icon: "success",
                        title: "Video Added Successfully!",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $('#uploadModal').modal('hide');
                    $('#youtubeIframe').val('');
                },
                error: function () {
                    Swal.fire({
                        icon: "error",
                        title: "Upload Failed",
                        text: "There was a problem uploading the video. Please try again."
                    });
                }
            });
        }
    });

    // Toggle buttons logic for Image vs Video
    $('#btnImage').click(function () {
        $(this).addClass('active btn-primary').removeClass('btn-outline-primary');
        $('#btnVideo').removeClass('active btn-secondary').addClass('btn-outline-secondary');
        $('#mydropzone').removeClass('d-none');
        $('#videoInputWrapper').addClass('d-none');
    });

    $('#btnVideo').click(function () {
        $(this).addClass('active btn-secondary').removeClass('btn-outline-secondary');
        $('#btnImage').removeClass('active btn-primary').addClass('btn-outline-primary');
        $('#videoInputWrapper').removeClass('d-none');
        $('#mydropzone').addClass('d-none');
    });
});
