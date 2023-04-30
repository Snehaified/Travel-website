<?php
// Connect to database
$host = '127.0.0.1';
$user = 'root';
$password = '';
$dbname = 'iwp';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
// Query for hotels based on destination
$destination = $_POST['destination'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$guests = $_POST['guests'];

$sql = "SELECT * FROM hotel_register WHERE destination = '$destination'";
$result = $conn->query($sql);
$data = array();
if ($result->num_rows > 0) {
    // Display available hotels to the user
    while ($row = $result->fetch_assoc()) {
        // Echo the name of the hotel
        $data[] = $row;
        echo "Hotel name: " . $row['hotel_name'] . "<br>";

}
} else {
    echo "No hotels found for the specified destination.";
}

// Close database connection
$conn->close();
?>
