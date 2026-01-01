<?php
$servername = "localhost";
$username = "id21522235_flexuser";
$password = "b7b)IoJRL0{|/Ma9";
$dbname = "id21522235_flex_sensor_db"; // Your database name
$table = "flex_data"; // Your table name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get latest sensor value from the database
$sql = "SELECT sensor_value FROM $table ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row["sensor_value"];
} else {
    echo "No data available";
}

$conn->close();
?>
