<?php
session_start();
$host = '127.0.0.1';
$user = 'root';
$password = '';
$dbname = 'iwp';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Query for hotels based on destination
$name = $_POST['tname'];
$username = $_POST['username'];
$hotel = $_POST['hotel'];
$destination = $_POST['destination'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$guests = $_POST['guests'];
$price = $_POST['price'];

$sql = "INSERT INTO hotel_booking (tname, username,hotel, destination,checkin, checkout, guests, price)
VALUES ('$name', '$username', '$hotel','$destination','$checkin', '$checkout', '$guests', '$price')";

if ($conn->query($sql) === TRUE) {
	echo "Booking submitted successfully!";
    header("Refresh: 3; URL=explore.php");
} else {
	echo "Error: ";}
?>