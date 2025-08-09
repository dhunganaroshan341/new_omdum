$(document).ready(function () {
    $(".summernote").summernote({ height: 300 });

    var table = $("#show-achievement-data").DataTable({
        processing: true,
        serverSide: true,
        ajax: "/admin/achievements",
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
        order: [2, 'asc'],
        columns: [
            { data: "DT_RowIndex", orderable: false, searchable: false },
            { data: "image", orderable: false, searchable: false },
            { data: "title" },
            { data: "description" },
            { data: "status", orderable: false, searchable: false },
            { data: "action", orderable: false, searchable: false }
        ],
        dom: 'Blfrtip',
        buttons: [
            { extend: 'print', exportOptions: { columns: [0, 2, 3, 4] } },
            { extend: 'excel', title: '', exportOptions: { columns: [0, 2, 3, 4] } }
        ],
        dom: '<"toolbar">lfrtip',
    });

    $("div.toolbar").html(`
        <span id="btnPrint" class="btn btn-primary mdi mdi-printer mdi-icon"></span>
        <span id="btnExport" class="btn btn-success mdi mdi-file-export mdi-icon"></span>
    `);

    $('#btnPrint').click(() => table.button(0).trigger());
    $('#btnExport').click(() => table.button(1).trigger());

    function clearModal() {
        $("#achievementImage").html("");
        $("#validationErrors").addClass("d-none").html("");
        $("#description").summernote("code", "");
    }

    $(document).on("click", ".addAchievementBtn", function () {
        clearModal();
        $("#formModal").modal("show");
        $(".submitBtn").show();
        $(".updateBtn").hide();
        $(".form").attr("id", "addForm")[0].reset();
    });

    // ADD
    $(document).off("submit", "#addForm").on("submit", "#addForm", function (e) {
        e.preventDefault();
        $(".submitBtn").prop("disabled", true);
        let formdata = new FormData(this);
        $.ajax({
            type: "post",
            url: "/admin/achievements/store",
            data: formdata,
            contentType: false,
            processData: false,
            success: function (res) {
                if (res.success) {
                    Swal.fire({ icon: "success", title: "Achievement Created", timer: 1000, showConfirmButton: false });
                    table.draw();
                    $("#formModal").modal("hide");
                } else {
                    Swal.fire({ icon: "warning", title: "Something went wrong!" });
                }
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    let html = '<ul>';
                    $.each(errors, (k, v) => html += `<li>${v[0]}</li>`);
                    html += '</ul>';
                    $('#validationErrors').removeClass('d-none').html(html);
                }
            },
            complete: () => $(".submitBtn").prop("disabled", false)
        });
    });

    // EDIT
    $(document).on("click", ".editAchievementBtn", function () {
        clearModal();
        $("#formModal").modal("show");
        $(".submitBtn").hide();
        $(".updateBtn").show();
        $(".form").attr("id", "updateForm");

        var id = $(this).data("id");
        $.get(`/admin/achievements/detail/${id}`, function (res) {
            $("#title").val(res.message.title);
            $("#description").summernote('code', res.message.description);
            if (res.message.image) {
                $("#achievementImage").html(`<img src="/uploads/${res.message.image}" width="100" height="100">`);
            }
        });

        $("#updateForm").off("submit").on("submit", function (e) {
            e.preventDefault();
            $(".updateBtn").prop("disabled", true);
            let formdata = new FormData(this);
            $.ajax({
                type: "post",
                url: `/admin/achievements/update/${id}`,
                data: formdata,
                processData: false,
                contentType: false,
                success: function (res) {
                    if (res.success) {
                        Swal.fire({ icon: "success", title: "Updated Successfully", timer: 1000, showConfirmButton: false });
                        table.draw();
                        $("#formModal").modal("hide");
                    }
                },
                complete: () => $(".updateBtn").prop("disabled", false)
            });
        });
    });

    // STATUS TOGGLE
    $(document).on("change", ".statusIdData", function () {
        let id = $(this).data("id");
        let checkbox = $(this);
        checkbox.prop("disabled", true);
        Swal.fire({
            icon: "warning",
            title: "Are you sure?",
            showCancelButton: true
        }).then(result => {
            if (result.isConfirmed) {
                $.get(`/admin/achievements/status/${id}`, () => table.draw())
                    .always(() => checkbox.prop("disabled", false));
            } else {
                checkbox.prop("disabled", false).prop("checked", !checkbox.prop("checked"));
            }
        });
    });

    // DELETE
    $(document).on("click", ".deleteAchievementBtn", function () {
        let id = $(this).data("id");
        Swal.fire({
            icon: "warning",
            title: "Delete?",
            text: "This cannot be undone",
            showCancelButton: true
        }).then(result => {
            if (result.isConfirmed) {
                $.get(`/admin/achievements/delete/${id}`, function (res) {
                    if (res.success) {
                        Swal.fire({ icon: "success", title: "Deleted", timer: 1500, showConfirmButton: false });
                        table.draw();
                    }
                });
            }
        });
    });
});
