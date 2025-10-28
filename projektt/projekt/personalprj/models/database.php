<?php
// Database credentials
$host = 'localhost';      // Database host (usually localhost)
$dbname = 'car_rental';   // Your database name
$username = 'root';       // Your database username
$password = '';           // Your database password

try {
    // Correctly instantiate the PDO object
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the error mode to exceptions
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If the connection fails, show an error message
    die("Connection failed: " . $e->getMessage());
}
?>
