<?php
// Include your database connection code here using mysqli.
include ("include/dbconn.php");
// Define the columns that can be sorted/searched in your DataTable
$columns = array('title', 'description', 'combined_details', 'status');

// Get the total number of records in the table
$totalRecords = $conn->query('SELECT COUNT(*) FROM event')->fetch_row()[0];

// Define the base query and count the rows
$sql = "SELECT (@row_number:=@row_number + 1) AS No, title, description, 
    CONCAT(
        '<b>DateTime Start: </b>', datetime_start, '<br>',
        '<b>DateTime End: </b>', datetime_end, '<br>',
        '<b>Assigned SCO: </b>', assigned_sco) AS combined_details, status
    FROM event, (SELECT @row_number:=0) AS rownum";

// Apply sorting and filtering
if (!empty($_POST['search']['value'])) {
    $sql .= " WHERE ";
    for ($i = 0; $i < count($columns); $i++) {
        $sql .= $columns[$i] . " LIKE '%" . $conn->real_escape_string($_POST['search']['value']) . "%' OR ";
    }
    $sql = substr($sql, 0, -3); // Remove the trailing " OR "
}

$result = $conn->query($sql);

$filteredRecords = $result->num_rows; // Total records after filtering

// Order the results based on user input
$columnIdx = $_POST['order'][0]['column'];
$columnName = $columns[$columnIdx];
$columnDirection = $_POST['order'][0]['dir'];
$sql .= " ORDER BY $columnName $columnDirection";

$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$response = array(
    "draw" => intval($_POST['draw']),
    "recordsTotal" => $totalRecords,
    "recordsFiltered" => $filteredRecords,
    "data" => $data,
);

echo json_encode($response);

$conn->close();
?>