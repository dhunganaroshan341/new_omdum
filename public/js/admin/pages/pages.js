$(document).ready(function () {
    $(".summernote").summernote({ height: 300 });

    const table = $("#show-page-data").DataTable({
        processing: true,
        serverSide: true,
        ajax: "/admin/pages",
        order: [1, 'asc'],
        columns: [
            { data: "DT_RowIndex", name: "DT_RowIndex", orderable: false, searchable: false },
            { data: "title", name: "title" },
            { data: "slug", name: "slug" },
            { data: "status", name: "status", orderable: false, searchable: false },
            { data: "action", name: "action", orderable: false, searchable: false }
        ],
        dom: 'Blfrtip',
        buttons: [
            {
                extend: 'print',
                exportOptions: { columns: [0, 1, 2, 3] },
            },
            {
                extend: 'excel',
                title: '',
                exportOptions: { columns: [0, 1, 2, 3] }
            }
        ],
        dom: '<"toolbar">lfrtip',
    });

    $("div.toolbar").html(`
        <span id="btnPrint" class="btn btn-primary mdi mdi-printer mdi-icon"></span>
        <span id="btnExport" class="btn btn-success mdi mdi-file-export mdi-icon"></span>
    `);

    $('#btnPrint').on('click', () => table.button(0).trigger());
    $('#btnExport').on('click', () => table.button(1).trigger());

    // Clear modal
    function clearModal() {
        $("#pageForm")[0].reset();
        $(".summernote").summernote("code", "");
        $("#validationErrors").addClass("d-none").html("");
        $("#page_id").val("");
        $(".submitBtn").show();
        $(".updateBtn").addClass("d-none");
    }

    // Show create modal
    $("#addNewPageBtn").on("click", function () {
        clearModal();
        $("#formModal").modal("show");
    });

    // Edit page
    $(document).on("click", ".editPageBtn", function () {
        clearModal();
        let id = $(this).data("id");

        $.ajax({
            url: `/admin/pages/${id}`,
            type: "GET",
            success: function (res) {
                const data = res.data;

                $("#page_id").val(data.id);
                $("#title").val(data.title);
                $("#slug").val(data.slug);
                $("#content").summernote("code", data.content);

                $("#meta_title").val(data.meta_title);
                $("#meta_description").val(data.meta_description);
                $("#meta_keywords").val(data.meta_keywords);

                $("#title1").val(data.title1);
                $("#title2").val(data.title2);
                $("#short_desc1").val(data.short_desc1);
                $("#short_desc2").val(data.short_desc2);
                $("#desc1").summernote("code", data.desc1);
                $("#desc2").summernote("code", data.desc2);

                $(".submitBtn").hide();
                $(".updateBtn").removeClass("d-none");

                $("#formModal").modal("show");
            },
            error: function () {
                Swal.fire({ icon: "error", title: "Error", text: "Failed to load page data." });
            }
        });
    });

    // Submit Create or Update
    $(document).on("submit", "#pageForm", function (e) {
        e.preventDefault();

        let id = $("#page_id").val();
        let method = id ? "POST" : "POST";
        let url = id ? `/admin/pages/${id}` : "/admin/pages";
        let formData = new FormData(this);

        if (id) formData.append("_method", "PUT");

        $.ajax({
            url: url,
            type: method,
            data: formData,
            processData: false,
            contentType: false,
            success: function (res) {
                if (res.success) {
                    Swal.fire({ icon: "success", title: "Success", text: res.message, timer: 1200, showConfirmButton: false });
                    $("#formModal").modal("hide");
                    table.draw();
                } else {
                    Swal.fire({ icon: "warning", title: "Warning", text: res.message || "Please try again" });
                }
            },
            error: function (xhr) {
                const errors = xhr.responseJSON.errors;
                let errorHtml = "<ul>";
                for (let key in errors) {
                    errorHtml += `<li>${errors[key][0]}</li>`;
                }
                errorHtml += "</ul>";
                $("#validationErrors").removeClass("d-none").html(errorHtml);
            }
        });
    });

    // Toggle Status
    $(document).on("change", ".toggleStatus", function () {
        const id = $(this).data("id");
        const checkbox = $(this);
        checkbox.prop("disabled", true);

        Swal.fire({
            icon: "question",
            title: "Change status?",
            showCancelButton: true,
            confirmButtonText: "Yes, change it!",
            cancelButtonColor: "#d33",
            confirmButtonColor: "#3085d6",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `/admin/pages/${id}/status`,
                    type: "PUT",
                    data: { _token: $('meta[name="csrf-token"]').attr("content") },
                    success: function () {
                        table.draw();
                    },
                    complete: function () {
                        checkbox.prop("disabled", false);
                    }
                });
            } else {
                checkbox.prop("disabled", false);
                checkbox.prop("checked", !checkbox.prop("checked"));
            }
        });
    });

    // Delete Page
    $(document).on("click", ".deletePageBtn", function () {
        const id = $(this).data("id");

        Swal.fire({
            icon: "warning",
            title: "Are you sure?",
            text: "This action cannot be undone!",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonColor: "#d33",
            confirmButtonColor: "#3085d6"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `/admin/pages/${id}`,
                    type: "DELETE",
                    data: { _token: $('meta[name="csrf-token"]').attr("content") },
                    success: function (res) {
                        if (res.success) {
                            Swal.fire({ icon: "success", title: "Deleted", timer: 1000, showConfirmButton: false });
                            table.draw();
                        } else {
                            Swal.fire({ icon: "error", title: "Failed", text: res.message || "Something went wrong." });
                        }
                    }
                });
            }
        });
    });
});
