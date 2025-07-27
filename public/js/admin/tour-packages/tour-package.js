$(document).ready(function () {


    $('#formModal').on('shown.bs.modal', function () {
    $('.summernote').each(function () {
        if (!$(this).next().hasClass('note-editor')) {
            $(this).summernote({ height: 250 });
        }
    });
});
function generateSlug(text) {
    return text
        .toString()
        .toLowerCase()
        .trim()
        .replace(/[\s\W-]+/g, '-') // Replace spaces & non-word characters with hyphens
        .replace(/^-+|-+$/g, '');  // Remove leading/trailing hyphens
}
function populateTourPackageForm(tour_package) {
    // Show the modal
    $("#formModal").modal("show");

    // Fill input fields
    $("input[name='title']").val(tour_package.title);
    $("input[name='slug']").val(tour_package.slug);
    $("select[name='our_country_id']").val(tour_package.our_country_id);
    $("select[name='status']").val(tour_package.status);
    $("input[name='duration']").val(tour_package.duration);
    $("input[name='max_people']").val(tour_package.max_people);
    $("input[name='location']").val(tour_package.location);
    $("input[name='available_seats']").val(tour_package.available_seats);
    $("select[name='difficulty']").val(tour_package.difficulty);
    $("input[name='max_elevation']").val(tour_package.max_elevation);
    $("input[name='best_season']").val(tour_package.best_season);
    $("input[name='start_point']").val(tour_package.start_point);
    $("input[name='end_point']").val(tour_package.end_point);
     $("#top_deal").prop('checked', tour_package.top_deal == 1);
    $("#favourite_destination").prop('checked', tour_package.favourite_destination == 1);


    $("textarea[name='short_description']").val(tour_package.short_description);

    // For summernote fields
    $("textarea[name='long_description']").summernote('code', tour_package.long_description ?? '');
    $("textarea[name='itinerary']").summernote('code', tour_package.itinerary ?? '');

    // UI toggling
    $(".submitBtn").hide();
    $(".updateBtn").show().data("id", tour_package.id); // Store the ID for update
}


    function toggleMediaFields() {
            var selectedType = $('#type').val();

            if (selectedType === 'image') {
                // Show image-related fields
                $('#galleryMedia').closest('.col-md-12').show();
                $('#thumbnailImage').parent().show();
                $('#url-group').hide();
            } else if (selectedType === 'video' || selectedType === 'url') {
                // Show URL field, hide image-related
                $('#url-group').show();
                $('#galleryMedia').closest('.col-md-12').hide();
                $('#thumbnailImage').parent().hide();
            } else {
                // Default state
                $('#galleryMedia').closest('.col-md-12').hide();
                $('#thumbnailImage').parent().hide();
                $('#url-group').hide();
            }
        }

         function clearModal() {
        $("#testimonialImage").html("");
        $("#validationErrors").addClass("d-none").html("");
        $("#testimonialDescription").summernote("code", "");
    }


    function uploadThumbnail(tour_package_id, formElement) {
        let formData = new FormData(formElement);
        // Get title and generate slug
    let title = $('#title').val();
    let slug = generateSlug(title);

    // Append slug to FormData
    formData.append('slug', slug);

        $.ajax({
            type: "POST",
            url: `/admin/tour-packages/${tour_package_id}/upload`,
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.success) {
                    $("#thumbnailImage").attr("src", `/uploads/${response.filename}`);
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "Failed to upload thumbnail.",
                    });
                }
            },
            error: function (xhr) {
                Swal.fire({
                    icon: "error",
                    title: "Upload Error",
                    text: xhr.responseJSON?.message || "Something went wrong while uploading thumbnail.",
                });
            }
        });
    }

    // Initialize DataTable
    var table = $("#data-album-show").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
        url: "/admin/tour-packages/",
        type: "GET"
    },
    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        order: [2, 'asc'],
   columns: [
    { data: 'DT_RowIndex', orderable: false, searchable: false },
    { data: 'action', name: 'action', orderable: false, searchable: false },
    { data: 'title', name: 'title' },
    { data: 'country', name: 'country_name' }, // Important
    { data: 'images', name: 'images' },
    { data: 'duration', name: 'duration' },
    { data: 'itinerary', name: 'itinerary', orderable: false, searchable: false },
    { data: 'batches', name: 'batches', orderable: false, searchable: false },
    { data: 'package_includes', name: 'package_includes', orderable: false, searchable: false },
    { data: 'status', name: 'status', orderable: false, searchable: false }
]


    });

    // Add Tour Package
    $(document).on("click", ".addTourPackageBtn", function () {
        $("#formModal").modal("show");
        $(".updateBtn").hide();
        $("#thumbnailImage").hide();
        $(".submitBtn").show();
        $(".form").attr("id", 'addForm');

         // Initialize on page load
        toggleMediaFields();

        // Re-evaluate on dropdown change
        $('#type').on('change', function () {
            toggleMediaFields();
        });
        $("#addForm")[0].reset();
    });

    $(document).off('submit',"#addForm").on("submit", "#addForm", function (e) {
        e.preventDefault();

   // Sync summernote fields
    $(this).find('.summernote').each(function () {
        let content = $(this).summernote('code');
        $(this).val(content);
    });


        $(".submitBtn").prop("disabled", true);
        let formData = new FormData(this);
        $.ajax({
            type: "POST",
            url: "/admin/tour-packages/store",
            data: formData,
            processData: false,
            contentType: false,
            success: function () {
                Swal.fire({
                    icon: "success",
                    title: "Success",
                    text: " added successfully",
                    showConfirmButton: false,
                    timer: 1000
                });
                table.draw();
                $("#formModal").modal("hide");
            },
            error: function (xhr) {
                Swal.fire({
                    icon: "warning",
                    title: "Warning",
                    text: xhr.responseJSON?.message || "Validation error",
                    showConfirmButton: false,
                    timer: 1500
                });
            },
            complete: function () {
                $(".submitBtn").prop("disabled", false);
            }
        });
    });

    // Edit Tour Package
    $(document).on("click", ".editUserButton", function () {
        let id = $(this).data("id");

        // Open the modal and reset the form
        $("#formModal").modal("show");
        $(".submitBtn").hide();
        $("#thumbnailImage").show();
        $(".updateBtn").show();
        $(".form").attr("id", "updateForm");
        $("#updateForm")[0].reset();
        $("#albumModalLabel").text("Edit Tour Package");
        $("#type").hide();
               // Correctly hides the type <select>
    $("#url-group").hide();    // Hides the whole URL input group (label + input)
    $("#type-group").hide();    // Hides the whole URL input group (label + input)

        // loading show
                 $("#loading-paragraph").val('...loading..');
                 $("#title").val('...loading..');
        //end of loading show

        $.ajax({
            type: "GET",
            url: `/admin/tour-packages/show/${id}`,

            success: function (response) {
                if (response.success) {
                    let tour_package = response.message; // 👈 use message instead of tour_package
                //    tour package  populating
                    populateTourPackageForm(tour_package);


                    // Initialize summernote editors
                    $("textarea[name='long_description']").summernote({
                        height: 250,
                        code: tour_package.long_description || ''
                    });
                    $("textarea[name='itinerary']").summernote({
                        height: 250,
                        code: tour_package.itinerary || ''
                    });

                    // Toggle media fields based on type
                    toggleMediaFields();
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "Failed to load tour_package data.",
                    });
                }
            },

            error: function (xhr) {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Failed to load tour_package data. Please try again.",
                });
            }
        });


        $(document).off("submit").on("submit", "#updateForm", function (event) {
            event.preventDefault();



                // Sync summernote fields
    $(this).find('.summernote').each(function () {
        let content = $(this).summernote('code');
        $(this).val(content);
    });



            $(".updateBtn").prop("disabled", true);
            let formData = new FormData(this);
// Get title and generate slug
    let title = $('#title').val();
    let slug = generateSlug(title);

    // Append slug to FormData
    formData.append('slug', slug);
            $.ajax({
                type: "POST",
                url: `/admin/tour-packages/update/${id}`,
                data: formData,
                processData: false,
                contentType: false,
                // headers: { 'X-HTTP-Method-Override': 'PUT' },
                success: function () {
                    Swal.fire({
                        icon: "success",
                        title: "Updated",
                        text: "tour_package updated successfully",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    table.draw();
                    $("#formModal").modal("hide");
                },
                error: function (xhr) {
                    Swal.fire({
                        icon: "warning",
                        title: "Error",
                        text: xhr.responseJSON?.message || "Update failed",
                        showConfirmButton: false,
                        timer: 1500
                    });
                },
                complete: function () {
                    $(".updateBtn").prop("disabled", false);
                }
            });
        });
    });

   // Toggle Status
$(document).on("change", ".statusToggle", function () {
    let id = $(this).data("id");
    let checkbox = $(this);
    checkbox.prop("disabled", true);

    Swal.fire({
        icon: "warning",
        title: "Are you sure?",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, change it!"
    }).then(result => {
        if (result.isConfirmed) {
            $.ajax({
                url: "/admin/tour-packages/status/"+id,
                type: "PUT", // Corrected: type instead of "method" and "put"
                data: {
                    status: checkbox.prop("checked") ? "Active" : "InActive", // pass status value
                    _token: $('meta[name="csrf-token"]').attr("content") // ensure CSRF token is sent
                },
                success: function () {
                    table.draw();
                    checkbox.prop("disabled", false);
                },
                error: function () {
                    checkbox.prop("disabled", false);
                    checkbox.prop("checked", !checkbox.prop("checked")); // revert change on error
                }
            });
        } else {
            checkbox.prop("disabled", false);
            checkbox.prop("checked", !checkbox.prop("checked"));
        }
    });
});
$(document).on("change", ".toggleTopDeals", function () {
    let id = $(this).data("id");
    let checkbox = $(this);
    checkbox.prop("disabled", true);

    Swal.fire({
        icon: "warning",
        title: "Are you sure?",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, change it!"
    }).then(result => {
        if (result.isConfirmed) {
            $.ajax({
                url: "/admin/tour-packages/status/"+id,
                type: "PUT", // Corrected: type instead of "method" and "put"
                data: {
                    status: checkbox.prop("checked") ? "Active" : "InActive", // pass status value
                    _token: $('meta[name="csrf-token"]').attr("content") // ensure CSRF token is sent
                },
                success: function () {
                    table.draw();
                    checkbox.prop("disabled", false);
                },
                error: function () {
                    checkbox.prop("disabled", false);
                    checkbox.prop("checked", !checkbox.prop("checked")); // revert change on error
                }
            });
        } else {
            checkbox.prop("disabled", false);
            checkbox.prop("checked", !checkbox.prop("checked"));
        }
    });
});


    // Delete tour_package
    $(document).on("click", ".deleteData", function () {
        let id = $(this).data("id");

        Swal.fire({
            icon: "warning",
            title: "Are you sure?",
            text: "This action cannot be reversed!",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then(result => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "DELETE",
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    url: `/admin/tour-packages/delete/${id}`,
                    success: function (response) {
                        Swal.fire({
                            icon: "success",
                            title: "Deleted",
                            text: "tour_package deleted successfully",
                            showConfirmButton: false,
                            timer: 1500
                        });
                        table.draw();
                    },
                    error: function () {
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "Failed to delete tour_package",
                        });
                    }
                });
            }
        });
    });


 // Show Multiple Image Modal
// Show Multiple Image Modal
  $(document).on("click", ".imageListPopup", function () {
    $("#imageModal").modal("show");
    $("#postImageTitle").text("Image List");
    let id = $(this).data('id');
    $.ajax({
        type: "GET",  // Fix typo here
        url: "/admin/tour-packages/show/" + id,
        success: function (response) {
            $(".fetch-post-image-data").html("");

            // Access images inside response.message
            if (response.success && response.message.images && response.message.images.length > 0) {
                response.message.images.forEach((image, index) => {
                    $(".fetch-post-image-data").append(`
                        <div class="carousel-item ${index === 0 ? 'active' : ''}">
                            <img src="${image.image_url}" class="d-block w-100" alt="...">
                        </div>
                    `);
                });
            } else {
                $(".fetch-post-image-data").html("<p>No images found.</p>");
            }
        },
        error: function () {
            $(".fetch-post-image-data").html("<p>Failed to load images.</p>");
        }
    });
});


// delete media from Gallery edit button modal
$(document).on("click", ".remove-image", function () {
    let imageId = $(this).data("image-id");
    // console.log(id);

    $.ajax({
        type: "get",
        url: "/admin/tour-packages/image/delete",
        data: {
            // _token: $('meta[name="csrf-token"]').attr('content'),
            image_id: imageId
        },
        success: function (response) {
            if (response.success) {
                $(this).closest(".col-4").fadeOut(300, function () {
                    $(this).remove();
                });

                table.draw();
            }
        }.bind(this),
        error: function (response) {
            console.error("Failed to delete image.");
        }
    });
});

});
