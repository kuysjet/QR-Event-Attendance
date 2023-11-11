<?php
// Include your database connection code here using mysqli.
include ("include/dbconn.php");
// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the ID parameter from the AJAX request
$id = isset($_GET['id']) ? $_GET['id'] : 0;

// Fetch data from the database based on the provided ID
$sql = "SELECT title, description, DATE_FORMAT(datetime_start, '%b %d, %Y %h:%i %p'), DATE_FORMAT(datetime_end, '%b %d, %Y %h:%i %p'), assigned_sco FROM event WHERE id = ?"; // Replace with your table and column names

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($title, $description, $datetime_start, $datetime_end, $assigned_sco);
$stmt->fetch();

$data = [
    'field1' => $title,
    'field2' => $description,
    'field3' => $datetime_start,
    'field4' => $datetime_end,
    'field5' => $assigned_sco,
];

// Close the database connection
$stmt->close();
$conn->close();

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
