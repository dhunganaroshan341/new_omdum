Dropzone.autoDiscover = false; // Prevent auto-init

$(document).ready(function () {
    // Global AJAX CSRF
    $.ajaxSetup({
        headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") }
    });

    let imageDropzone;
    let isResettingDropzone = false;

    // Reset Upload Modal
    function resetUploadModal() {
        if (imageDropzone) {
            isResettingDropzone = true;
            imageDropzone.removeAllFiles(true);
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

    // Close modal reset
    $(document).on('click', '#closeBtn', function () {
        $('#uploadModal').modal('hide');
        resetUploadModal();
    });

    $('#uploadModal').on('hidden.bs.modal', function () {
        resetUploadModal();
    });

    // Open modal and init Dropzone
    $(document).on("click", ".editUploads", function () {
        const tourPackageId = $(this).data('id');
        $('#tour_package_id').val(tourPackageId);
        $("#uploadModal").modal("show");

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

            // Add tour_package_id on upload
            imageDropzone.on("sending", function (file, xhr, formData) {
                formData.append("tour_package_id", $("#tour_package_id").val());
            });

            // Upload success
            imageDropzone.on("successmultiple", function (files) {
                Swal.fire({
                    icon: "success",
                    title: "Images Uploaded Successfully!",
                    showConfirmButton: false,
                    timer: 1500,
                });

                imageDropzone.getAcceptedFiles().forEach(file => imageDropzone.removeFile(file));
                $("#uploadModal").modal("hide");
            });

            // Upload error
            imageDropzone.on("errormultiple", function (files, response) {
                Swal.fire({
                    icon: "error",
                    title: "Upload Error",
                    text: typeof response === "string" ? response : "Something went wrong.",
                });
                console.error(response);
            });

            // Manual delete handling
            $(document).on("click", ".dz-remove", function () {
                const previewElement = $(this).closest(".dz-preview")[0];
                const file = imageDropzone.files.find(f => f.previewElement === previewElement);
                if (file) {
                    file._manualDelete = true; // mark as manual delete
                }
            });

            // Remove file event
            imageDropzone.on("removedfile", function (file) {
                if (!file._manualDelete || isResettingDropzone) {
                    file._manualDelete = false;
                    return;
                }

                if (file.serverId) {
                    $.ajax({
                        url: `/admin/tour-package-images/delete/${file.serverId}`,
                        method: "DELETE",
                        success: function () {
                            Swal.fire("Deleted!", "Image has been deleted.", "success");
                        },
                        error: function () {
                            Swal.fire("Failed!", "Could not delete image.", "error");
                        },
                    });
                }

                file._manualDelete = false;
            });
        }

        // Reset Dropzone before loading new images
        isResettingDropzone = true;
        imageDropzone.removeAllFiles(true);
        isResettingDropzone = false;

        // Load existing images
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

    // Upload submit handler
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
            imageDropzone.processQueue();
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

    // Toggle buttons (Image/Video)
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
