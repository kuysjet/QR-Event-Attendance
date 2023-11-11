<?php include 'include/header.php'; ?>
<body>
    <?php include 'include/navbar.php'; ?>

    <div class="container-fluid pt-5 mt-5 vh-100 " style="background-color:#D9D9D9">
        <div class="row mx-5 h2">Event</div>
        <hr>
        <div class="row mx-5">
            <div class="col-md-9 mx-auto mt-1 px-5 border-5 border-top border-primary rounded bg-light">
                <div class="card-body">
                    <div class="pt-2 pb-2">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#showAddEvent">
                            <i class='bx bx-plus-circle'></i>
                            Add New
                        </button>
                    </div>
                    <div>
                       <!-- Your table structure -->
                        <table id="myTable" class="display table-bordered mb-1 pt-2" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="border border-top border-secondary d-none">primary id</th>
                                    <th class="border border-top border-secondary">#</th>
                                    <th class="border border-top border-secondary">Title</th>
                                    <th class="border border-top border-secondary">Description</th>
                                    <th class="border border-top border-secondary">Details</th>
                                    <th class="border border-top border-secondary">Status</th>
                                    <th class="border border-top border-secondary">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Your table data goes here -->
                                <tr>
                                    <td>id</td>
                                    <td>No</td>
                                    <td>title</td>
                                    <td>description</td>
                                    <td>combined_details</td>
                                    <td>status</td>
                                    <td>
                                        <button class="edit-button btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal">Edit</button>
                                        <button class="delete-button btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal for event -->
    <div class="modal fade" id="showAddEvent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">New Event</h1>
            </div>
            <div class="modal-body">
                <div class="mx-5 pt-1">
                    <label class="form-label h6">Title</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mx-5 pt-1">
                    <label class="form-label h6">Venue</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mx-5 pt-1">
                    <label class="form-label h6">Description</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mx-5 pt-1">
                    <label class="form-label h6">DateTime Start</label>
                    <input type="datetime-local" class="form-control">
                </div>
                <div class="mx-5 pt-1">
                    <label class="form-label h6">DateTime End</label>
                    <input type="datetime-local" class="form-control">
                </div>
                <div class="mx-5 pt-1">
                    <label class="form-label h6">Assign To</label>
                    <select class="form-select" data-live-search="true">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Event</h1>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                <!-- Your edit form elements go here -->
                    <input id="editFormInput1" type="text">
                    <input id="editFormInput2" type="text">
                    <input id="editFormInput3" type="text">
                    <input id="editFormInput4" type="text">
                    <input id="editFormInput5" type="text">
                </form>
            </div>
            <div class="modal-footer">
                <button id="saveEdit" type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
            </div>
        </div>
    </div>

</body>

<script>
    $(document).ready(function () {
        $('#myTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "eventListData.php",
                "type": "POST",
            },
            "columns": [
                {"data": "id", "visible": false}, // Hidden "id" column
                {"data": "No"}, // Auto-incremented "No" column
                {"data": "title"},
                {"data": "description"},
                {"data": "combined_details"},
                {"data": "status"},
                { // Action column
                "orderable": false, // Prevent sorting on this column
                "data": null, // We'll use render function for custom content
                "render": function (data, type, row) {
                    return '<button class="edit-button btn btn-primary" data-id="' + row.id + '" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button> ' +
                           '<button class="delete-button btn btn-danger">Delete</button>';
                    }
                }
            ]
        });

        // Handle edit button click
        $('#myTable tbody').on('click', '.edit-button', function () {
            var primaryId = $(this).data('id'); // Get the ID from the button's data-id attribute

            // Make an AJAX request to fetch the data to edit
            $.ajax({
                url: 'eventEditData.php', // Replace with the actual URL of your server-side script
                method: 'GET', // Use 'GET' or 'POST' as appropriate
                data: { id: primaryId }, // Pass the identifier to the server-side script
                success: function (response) {
                    // Handle the response from the server and populate the edit form
                    // Example: populate the edit form fields with the response data
                    $('#editFormInput1').val(response.field1);
                    $('#editFormInput2').val(response.field2);
                    $('#editFormInput3').val(response.field3);

                    // Show the edit modal
                    $('#editModal').modal('show');
                    
                },
                error: function (xhr, status, error) {
                    console.error('Error fetching data:', error);
                }
            });

            // Handle save button click in the edit modal
            $('#saveEdit').on('click', function () {
                // Collect the edited data from the form fields
                var editedData = {
                    field1: $('#editFormInput1').val(),
                    field2: $('#editFormInput2').val(),
                    field3: $('#editFormInput3').val(),
                    field4: $('#editFormInput4').val(),
                    field5: $('#editFormInput5').val()
                };

                // Make an AJAX request to save the edited data
                $.ajax({
                    url: 'saveEditedData.php', // Replace with the URL to save the edited data
                    method: 'POST', // Use 'GET' or 'POST' as appropriate
                    data: { id: primaryId, ...editedData }, // Include the identifier and edited data
                    success: function (response) {
                        // Handle the response from the server, e.g., show a success message
                        console.log('Data edited successfully.');
                        // Close the edit modal
                        $('#editModal').modal('hide');
                    },
                    error: function (xhr, status, error) {
                        console.error('Error saving data:', error);
                    }
                });
            });

        });

        // Handle delete button click
        $('#myTable tbody').on('click', '.delete-button', function () {
            var data = table.row($(this).parents('tr')).data();
            // Use data.ID or another identifier to delete the corresponding row
            // For example, you can make an AJAX call to delete the data
        });

    });
</script>

    <!-- <script>
        $(document).ready(function () {
        $('#myTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "data.php",
                "type": "POST",
            },
            "columns": [
                {"data": "No"}, // Auto-incremented "No" column
                {"data": "id"},
                {"data": "fullname"},
                {"data": "time_in"},
            ]
        });
    });
    </script> -->

    <!-- fixed footer -->
    <?php include 'include/footer.php'; ?>
</html>