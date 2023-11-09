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
                        <button class="btn btn-primary">
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