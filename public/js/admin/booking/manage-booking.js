$(document).ready(function () {
    // Setup CSRF Token for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // ========================
    // booking table
      $('#bookingTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: `/admin/bookings/`,
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    }, // S.N
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }, // Action
                    {
                        data: 'package',
                        name: 'tourPackage.title'
                    }, // Package title
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'booking_type',
                        name: 'booking_type'
                    },
                    {
                        data: 'batch',
                        name: 'tourBatch.title',
                        render: function(data, type, row) {
                            return data ? data : 'N/A';
                        }
                    },
                    {
                        data: 'total_people',
                        name: 'total_people'
                    },
                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        render: function(data) {
                            return moment(data).format('D MMM, YYYY');
                        }
                    },
                ],
                order: [
                    [11, 'desc']
                ],
            });
});
