<?php
if ($_SERVER[ 'REQUEST_METHOD' ] === 'POST' && isset($_POST[ 'qrcode_data' ])) {
    // Get the QR code data from the POST request
    $qrcodeData = $_POST[ 'qrcode_data' ];

    // Insert the data into the database (you'll need to set up your database connection)
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'qr_ea';

    $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize the input
    $qrcodeData = $conn->real_escape_string($qrcodeData);

    // Check if the data already exists in the database
    $checkSql = "SELECT id FROM student WHERE fullname = '$qrcodeData'";
    $result = $conn->query($checkSql);

    if ($result->num_rows > 0) {
        echo "Data already exists in the database. It will not be inserted.";
    } else {
        // Data does not exist in the database, so insert it
        $sql = "INSERT INTO student (fullname) VALUES ('$qrcodeData')";

        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>