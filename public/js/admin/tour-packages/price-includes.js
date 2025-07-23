$(document).ready(function () {
    // Setup CSRF Token for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // ========================
    // Show Create Modal
    // ========================
    $(document).on('click', '.addPriceIncludeBtn', function () {
        const packageId = $(this).data('id');

        $('#priceIncludeModal').modal('show');
        $('.priceIncludeForm')[0].reset();
        $('#tour_package_id_price_include').val(packageId);

        $('#submitPriceIncludeBtn').show();
        $('#updatePriceIncludeBtn').hide();

        $('.priceIncludeForm').attr('id', 'createPriceIncludeForm').removeAttr('data-id');
    });

    // ========================
    // Show Edit Modal
    // ========================
    $(document).on('click', '.editPriceIncludeBtn', function () {
        const priceIncludeId = $(this).data('id');

        $.get(`/admin/price-includes/show/${priceIncludeId}`, function (response) {
            if (response.success) {
                const data = response.data;

                $('#priceIncludeTableModal').modal('hide');
                $('.priceIncludeForm')[0].reset();

                $('#title').val(data.title);
                $('#price').val(data.price);
                $('#description').val(data.description);
                $('#is_included').prop('checked', data.is_included); // assuming a checkbox for included/excluded
                $('#tour_package_id_price_include').val(data.tour_package_id);

                $('#priceIncludeModal').modal('show');
                $('#submitPriceIncludeBtn').hide();
                $('#updatePriceIncludeBtn').show();

                $('.priceIncludeForm')
                    .attr('id', 'updatePriceIncludeForm')
                    .attr('data-id', data.id);
            }
        });
    });

    // ========================
    // Load Price Includes Table (via DataTables)
    // ========================
    $(document).on('click', '.viewPriceIncludeBtn', function () {
        const packageId = $(this).data('id');
        loadPriceIncludeTable(packageId);
    });

    function loadPriceIncludeTable(tourPackageId) {
        $('#priceIncludeTableModal').modal('show');

        $('#price-include-data-show').DataTable({
            processing: true,
            serverSide: true,
            destroy: true,
            ajax: {
                url: `/admin/price-includes/${tourPackageId}`,
                type: 'GET'
            },
            columns: [
                { data: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'title' },
                { data: 'price' },
                { data: 'description' },
                { data: 'is_included', render: function(data) {
                    return data ? '<span class="badge bg-success">Included</span>' : '<span class="badge bg-danger">Excluded</span>';
                }},
                { data: 'action', orderable: false, searchable: false }
            ]
        });
    }

    // ========================
    // Handle Form Submission (Create/Update)
    // ========================
    $(document).off('submit', '.priceIncludeForm').on('submit', '.priceIncludeForm', function (e) {
        e.preventDefault();

        const form = $(this);
        const formData = new FormData(this);
        const isUpdate = form.attr('id') === 'updatePriceIncludeForm';
        const url = isUpdate
            ? `/admin/price-includes/${form.attr('data-id')}`
            : `/admin/price-includes`;

        if (isUpdate) {
            formData.append('_method', 'PUT');
        }

        $(".btn").prop("disabled", true);

        $.ajax({
            url,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                $(".btn").prop("disabled", false);

                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message,
                        timer: 1000,
                        showConfirmButton: false
                    });

                    $('#priceIncludeModal').modal('hide');
                    $('#price-include-data-show').DataTable().ajax.reload();
                } else {
                    Swal.fire("Error", response.message || "Something went wrong", "error");
                }
            },
            error: function () {
                $(".btn").prop("disabled", false);
                Swal.fire("Error", "Something went wrong!", "error");
            }
        });
    });

    // ========================
    // Delete Price Include
    // ========================
    $(document).on('click', '.deletePriceIncludeBtn', function () {
        const id = $(this).data('id');

        Swal.fire({
            icon: 'warning',
            title: 'Are you sure?',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `/admin/price-include/${id}`,
                    type: 'DELETE',
                    success: function (response) {
                        if (response.success) {
                            $('#price-include-data-show').DataTable().ajax.reload();
                        } else {
                            Swal.fire("Error", response.message || "Deletion failed", "error");
                        }
                    },
                    error: function () {
                        Swal.fire("Error", "Could not delete price include!", "error");
                    }
                });
            }
        });
    });

    // ========================
    // Toggle Status (Optional)
    // ========================
    $(document).on('change', '.togglePriceIncludeStatus', function () {
        const id = $(this).data('id');
        const newStatus = $(this).is(':checked') ? 1 : 0;

        $.ajax({
            url: `/admin/price-include/${id}`,
            method: 'PUT',
            data: { is_included: newStatus },
            success: function () {
                $('#price-include-data-show').DataTable().ajax.reload();
            }
        });
    });
});
