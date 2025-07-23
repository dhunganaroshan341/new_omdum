$(document).ready(function () {
    // Initialize Summernote editor
    $(".summernote").summernote({
        height: 300
    });

    // Initialize DataTable
    var table = $("#data-page-show").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "/admin/pages/get-data",
            type: "GET",
            cache: false
        },
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, 'All']],
        order: [[2, 'asc']], // Adjust column index for ordering if needed
        columns: [
            { data: "DT_RowIndex", name: "DT_RowIndex", orderable: false, searchable: false },
            { data: "image", name: "image", orderable: false, searchable: false },
            { data: "title", name: "title" },
            { data: "seo_title", name: "seo_title" },
            { data: "description", name: "description" },
            { data: "status", name: "status", orderable: false, searchable: false },
            { data: "action", name: "action", orderable: false, searchable: false }
        ]
    });

    // Clear modal inputs and errors
    function clearModal() {
        $("#validationErrors").addClass('d-none').html("");
        $(".summernote").summernote("code", "");
        $(".pageImageData").html("");
        $("#formModal form")[0].reset();
    }

    // Show images modal (for multiple images)
    $(document).on("click", ".imageListPopup", function () {
        $("#imageModal").modal("show");
        $("#pageImageTitle").text("Image List");
        let id = $(this).data('id');

        $.ajax({
            type: "GET",
            url: "/admin/pages/detail/" + id,
            success: function (response) {
                $(".fetch-page-image-data").html("");
                if (response.images && response.images.length > 0) {
                    response.images.forEach((image, index) => {
                        let imagePath = '/uploads/' + image.path.replace('//', '/');
                        $(".fetch-page-image-data").append(`
                            <div class="carousel-item ${index === 0 ? 'active' : ''}">
                                <img src="${imagePath}" class="d-block w-100" alt="Page Image">
                            </div>
                        `);
                    });
                } else {
                    $(".fetch-page-image-data").html('<p class="text-center">No images available.</p>');
                }
            }
        });
    });

    // Add Page button clicked
    $(document).on("click", ".addPageBtn", function () {
        clearModal();
        $("#formModal").modal("show");
        $(".submitBtn").show();
        $(".updateBtn").hide();
        $(".form").attr("id", "addForm");
    });

    // Add Page form submit
    $(document).off("submit", "#addForm").on("submit", "#addForm", function (event) {
        event.preventDefault();
        $(".submitBtn").prop("disabled", true);

        let formdata = new FormData(this);

        $.ajax({
            type: "POST",
            url: "/admin/pages/store",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.success) {
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: "Page Added Successfully",
                        showConfirmButton: false,
                        timer: 1500,
                    });
                    table.draw();
                    $("#formModal").modal("hide");
                } else {
                    Swal.fire({
                        icon: "warning",
                        title: "Something went wrong!",
                        text: "Please try again!",
                    });
                }
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessages = '<ul>';
                    $.each(errors, function (key, value) {
                        errorMessages += '<li>' + value[0] + '</li>';
                    });
                    errorMessages += '</ul>';
                    $('#validationErrors').removeClass('d-none').html(errorMessages);
                }
            },
            complete: function () {
                $(".submitBtn").prop("disabled", false);
            }
        });
    });

    // Edit Page button clicked
    $(document).on("click", ".editPageButton", function () {
        clearModal();
        let id = $(this).data("id");
        $("#formModal").modal("show");
        $(".submitBtn").hide();
        $(".updateBtn").show();
        $(".form").attr("id", "updateForm");

        $.ajax({
            type: "GET",
            url: "/admin/pages/detail/" + id,
            success: function (response) {
                $("#page_title").val(response.message.title);
                $("#seo_title").val(response.message.seo_title);
                $("#seo_description").val(response.message.seo_description);
                $(".summernote").summernote("code", response.message.description);

                if (response.images && response.images.length > 0) {
                    $(".pageImageData").html("");
                    response.images.forEach((image) => {
                        let imagePath = '/uploads/' + image.path.replace('//', '/');
                        $(".pageImageData").append(`
                            <li class="image-item">
                                <img src="${imagePath}" alt="Image" class="img-thumbnail" width="100">
                                <button type="button" class="btn btn-danger btn-sm remove-image" data-image-id="${image.id}">
                                    Remove
                                </button>
                            </li>
                        `);
                    });
                }
            }
        });

        // Update Page form submit
        $(document).off("submit", "#updateForm").on("submit", "#updateForm", function (event) {
            event.preventDefault();
            $(".updateBtn").prop("disabled", true);

            let formdata = new FormData(this);

            $.ajax({
                type: "POST",
                url: "/admin/pages/edit/" + id,
                data: formdata,
                processData: false,
                contentType: false,
                success: function (response) {
                    Swal.fire({
                        icon: "success",
                        title: "Updated",
                        text: "Page Updated Successfully",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $("#formModal").modal("hide");
                    table.draw();
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let errorMessages = '<ul>';
                        $.each(errors, function (key, value) {
                            errorMessages += '<li>' + value[0] + '</li>';
                        });
                        errorMessages += '</ul>';
                        $('#validationErrors').removeClass('d-none').html(errorMessages);
                    }
                },
                complete: function () {
                    $(".updateBtn").prop("disabled", false);
                }
            });
        });
    });

    // Remove image button click
    $(document).on("click", ".remove-image", function () {
        let imageId = $(this).data("image-id");
        let btn = $(this);

        $.ajax({
            type: "DELETE",
            url: "/admin/pages/image/delete",
            data: { image_id: imageId },
            success: function (response) {
                if (response.success) {
                    btn.closest(".image-item").remove();
                    table.draw();
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Failed to delete image",
                    });
                }
            },
            error: function () {
                Swal.fire({
                    icon: "error",
                    title: "Failed to delete image",
                });
            }
        });
    });

    // Status toggle
    $(document).on("change", ".statusIdData", function () {
        let id = $(this).data("id");
        let checkbox = $(this);
        checkbox.prop("disabled", true);

        Swal.fire({
            icon: "warning",
            title: "Are you sure?",
            showCancelButton: true,
            cancelButtonColor: "#d33",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Yes, change it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "/admin/pages/status/" + id,
                    success: function () {
                        checkbox.prop("disabled", false);
                        table.draw();
                    },
                    error: function () {
                        checkbox.prop("disabled", false);
                        Swal.fire({
                            icon: "error",
                            title: "Status update failed"
                        });
                    }
                });
            } else {
                checkbox.prop("disabled", false);
                checkbox.prop("checked", !checkbox.prop("checked"));
            }
        });
    });

    // Delete page
    $(document).on("click", ".deleteData", function () {
        let id = $(this).data("id");

        Swal.fire({
            icon: "warning",
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            showCancelButton: true,
            cancelButtonColor: "#d33",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "DELETE",
                    url: "/admin/pages/delete/" + id,
                    success: function (response) {
                        if (response.success) {
                            Swal.fire({
                                icon: "success",
                                title: "Deleted!",
                                text: "Page deleted successfully",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            table.draw();
                        } else {
                            Swal.fire({
                                icon: "warning",
                                title: "Unable to delete",
                                text: response.message
                            });
                        }
                    },
                    error: function () {
                        Swal.fire({
                            icon: "error",
                            title: "Something went wrong!"
                        });
                    }
                });
            }
        });
    });
});
