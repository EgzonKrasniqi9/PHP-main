<?php
session_start();
include_once('config.php');

if (isset($_POST['submit'])) {
    // Get data from POST request
    $id = $_POST['id'];
    $name = $_POST['name'];  // Corrected from 'username' to 'name'
    $username = $_POST['username'];
    $email = $_POST['email'];

    // SQL query to update the user's details
    $sql = "UPDATE users SET name=:name, username=:username, email=:email WHERE id=:id";

    // Prepare the SQL statement
    $prep = $conn->prepare($sql);
    $prep->bindParam(':id', $id);
    $prep->bindParam(':name', $name);
    $prep->bindParam(':username', $username);
    $prep->bindParam(':email', $email);

    // Execute the query
    $prep->execute();

    // Redirect to the dashboard after successful update
    header('Location: dashboard.php');
    exit;
}
?>