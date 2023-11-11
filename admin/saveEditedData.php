<?php
// Include your database connection code here using mysqli.
include("include/dbconn.php");
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the ID parameter from the AJAX request
$id = isset($_POST['id']) ? $_POST['id'] : 0;

// Get the edited data from the AJAX request
$field1 = isset($_POST['field1']) ? $_POST['field1'] : '';
$field2 = isset($_POST['field2']) ? $_POST['field2'] : '';
$field3 = isset($_POST['field3']) ? $_POST['field3'] : '';
$field4 = isset($_POST['field4']) ? $_POST['field4'] : '';
$field5 = isset($_POST['field5']) ? $_POST['field5'] : '';

// Update the data in the database
$sql = "UPDATE event SET title = ?, description = ?, datatime_start = ? WHERE id = ?"; // Replace with your table and column names

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssi", $field1, $field2, $field3, $field4, $field5, $id);
if ($stmt->execute()) {
    echo "Data updated successfully.";
} else {
    echo "Error updating data: " . $stmt->error;
}

// Close the database connection
$stmt->close();
$conn->close();
?>
