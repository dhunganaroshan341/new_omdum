$(document).ready(function () {

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
// table



    let itineraryItems = [];
    let currentDay = 1;

$(document).on('click', '.viewItineraryBtn', function () {
        const id = $(this).data('id');
        // console.log("Tour Package ID:", modalEl);

        $("#itineraryTableModalUnique").modal("show");
        // const modalInstance = bootstrap.Modal.getOrCreateInstance(modalEl);
        // fetchItineraries(modalEl);
        $("#itinerary-data-album-show").DataTable().destroy(); // Destroy existing DataTable if any

        getItineraryTable(id);

    });
    $(document).on('click', '.addItineraryBtn', function () {
        $('.itineraryForm').attr('id', 'ItineraryForm');
        const id = $(this).data('id');
        // console.log("Tour Package ID:", modalEl);
    $('#tour_package_id').val(id);
        $("#itineraryModal").modal("show");

       $.ajax({
        url: `/admin/itineraries/latest-order/${id}`,
        type: 'GET',
        success: function (response) {
            // Populate form fields with data
            $('#order').val(response.latest_order + 1);


        },
        error: function (err) {
            console.error("Error fetching itinerary:", err);
            alert("Failed to fetch itinerary for editing.");
        }
    });



    });

   $(document).on('click', '.editItineraryBtn', function () {
    const itineraryId = $(this).data('id');
    $('.itineraryForm').attr('id', 'updateItineraryForm');
    $("#updateItineraryForm").attr("data-id", itineraryId); // ✅ Add this line
    // Open the modal
    $('#itineraryModal').modal('show');

    // Hide submit button and show update
    $('#submitItineraryBtn').attr('hidden', true);
    $('#updateItineraryBtn').removeAttr('hidden');

    // Set the ID on update button for reference


    // Fetch the itinerary data
    $.ajax({
        url: `/admin/itineraries/show/${itineraryId}`,
        type: 'GET',
        success: function (response) {
            // Populate form fields with data
            $('#day_number').val(response.day_number);
            $('#title').val(response.title);
            $('#description').val(response.description);
            $('#tour_package_id').val(response.tour_package_id);
            $('#order').val(response.order);

        },
        error: function (err) {
            console.error("Error fetching itinerary:", err);
            alert("Failed to fetch itinerary for editing.");
        }
    });



});

// Add itinerary item via AJAX
   $(document).off("submit","#updateItineraryForm").on("submit","#updateItineraryForm",function(e){
    e.preventDefault();
           $(".btn").prop("disabled", true);
    let formdata=new FormData(this);
    var id = $(this).attr("data-id");
    $.ajax({
        url: '/admin/itineraries/update/'+id,
        type: 'post',
        data: formdata,
        contentType: false,
        processData: false,
        success: function (response) {
            console.log("Itinerary item added successfully:", response);
           $('#updateItineraryForm')[0].reset();
                  $(".btn").prop("disabled", false);
            $(".itineraryForm").attr("id", "ItineraryForm");
            $("#itineraryModal").modal("hide");
        }
    })
   });

    // Open itinerary modal



    function getItineraryTable(id) {
        // Initialize DataTable
     $("#itinerary-data-album-show").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
        url: "/admin/itineraries/"+id,
        type: "GET"
    },
    columns: [
        { data: 'DT_RowIndex', orderable: false, searchable: false },
        { data: 'title', name: 'title' },
        { data: 'day_number', name: 'day_number' },
        { data: 'action', name: 'action', orderable: false, searchable: false }
    ]
    });
    }

    // Fetch itinerary items


    // Calculate next currentDay

    // Render the itinerary list to UI






 $(document).off("submit","#itineraryForm").on("submit","#itineraryForm",function(e){
    e.preventDefault();
    let formdata=new FormData(this);
    formdata.append('tour_package_id', $('#tour_package_id').val());
    $.ajax({
        url: '/admin/itineraries/store',
        type: 'POST',
        data: formdata,
        contentType: false,
        processData: false,
        success: function (response) {
            console.log("Itinerary item added successfully:", response);
            $('#itineraryForm')[0].reset();
            $("#itineraryModal").modal("hide");
        }
    })
   });




     // Status Update Toggle Button
    $(document).on("change", ".statusIdData", function () {
        let id = $(this).data("id");
        // console.log(id);
        let checkbox = $(this);
        checkbox.prop("disabled", true);
        Swal.fire({
            icon: "warning",
            title: "Are you sure ?",
            showCancelButton: true,
            cancelButtonColor: "#d33",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Yes, Change it !",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "get",
                    url: "/admin/itineraries/status/" + id,
                    success: function () {
                        // console.log(response);
                        checkbox.prop("disabled", false);
                        table.draw();
                    },
                    error: function (xhr) {
                        checkbox.prop("disabled", false);
                        console.log(xhr.responseJSON.message);
                    }
                })
            } else {
                checkbox.prop("disabled", false);
                checkbox.prop("checked", !checkbox.prop("checked"));
            }
        })

    })


    // Delete handler
    $(document).on('click', '.deleteItemBtn', function () {
        const id = $(this).data('id');
        $.ajax({
            url: `/admin/itineraries/delete/${id}`,
            type: 'DELETE',
            success: function () {
                fetchItineraries();
            },
            error: function (err) {
                console.error("Error deleting item:", err);
                alert("Failed to delete itinerary item.");
            }
        });
    });


});
