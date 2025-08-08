$(document).ready(function () {
    $(".summernote").summernote({
        height: 300
    });

    var table = $("#show-booking-data").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "", // or your actual route
        },
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
        order: [[11, 'desc']], // Sort by Submitted At (created_at)
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'action', name: 'action', orderable: false, searchable: false },
            { data: 'package', name: 'tourPackage.title', orderable: false, searchable: false },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'phone', name: 'phone' },
            { data: 'booking_type', name: 'booking_type' },
            { data: 'batch', name: 'tourBatch.title', orderable: false, searchable: false },
            { data: 'total_people', name: 'total_people' },
            { data: 'price', name: 'price' },
            { data: 'status', name: 'status' },
            {
                data: 'created_at',
                name: 'created_at',
                render: function(data) {
                    return moment(data).format('D MMM, YYYY');
                }
            }
        ],
        dom: 'Blfrtip',
        buttons: [
            { extend: 'print', exportOptions: { columns: [0, 2, 3, 4, 5] } },
            { extend: 'excel', title: '', exportOptions: { columns: [0, 2, 3, 4, 5] } }
        ],
    });
});
