$(document).ready(function () {

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
// table

        $(document).on("click", ".editUploads", function() {
            $("#uploadModal").modal("show");
        });

});
