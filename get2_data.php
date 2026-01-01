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
else {echo "connection establish here";}

// Get sensor value from the ESP8266
if (isset($_GET['sensor_value'])) {
    $sensor_value = $_GET['sensor_value'];

    // Prepare and execute SQL INSERT query
    $sql = "INSERT INTO $table (sensor_value) VALUES ('$sensor_value')";
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Sensor value not received";
}

$conn->close();
?>
