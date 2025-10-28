<?php
session_start();

include_once('config.php');

// Ensure session variables are set
if (!isset($_SESSION['id']) || !isset($_SESSION['movie_id'])) {
    die('Error: Missing session data.');
}

$user_id = $_SESSION['id'];
$car_id = $_SESSION['movie_id']; // Corrected to use 'movie_id' as per the session variable in details.php

// Ensure POST variables are set
if (!isset($_POST['nr_Days']) || !isset($_POST['price']) || !isset($_POST['date'])) {
    die('Error: Missing form data.');
}

$nr_days = $_POST['nr_Days']; // Corrected to match the input name in details.php
$price = $_POST['price'];
$date = $_POST['date'];

$sql = "INSERT INTO bookings(user_id, car_id, nr_days, price, date) VALUES (:user_id, :car_id, :nr_days, :price, :date)";

$insertBooking = $conn->prepare($sql);

$insertBooking->bindParam(':user_id', $user_id);
$insertBooking->bindParam(':car_id', $car_id); // Corrected to use 'car_id'
$insertBooking->bindParam(':nr_days', $nr_days);
$insertBooking->bindParam(':price', $price);
$insertBooking->bindParam(':date', $date);

$insertBooking->execute();
header('Location:home.php');
?>