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
                                    <th class="border border-top border-secondary">#</th>
                                    <th class="border border-top border-secondary">Title</th>
                                    <th class="border border-top border-secondary">Description</th>
                                    <th class="border border-top border-secondary">Details</th>
                                    <th class="border border-top border-secondary">Status</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Your table data goes here -->
                                <tr>
                                    <td>No</td>
                                    <td>title</td>
                                    <td>description</td>
                                    <td>combined_details</td>
                                    <td>status</td>
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
                {"data": "No"}, // Auto-incremented "No" column
                {"data": "title"},
                {"data": "description"},
                {"data": "combined_details"},
                {"data": "status"},
            ]
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