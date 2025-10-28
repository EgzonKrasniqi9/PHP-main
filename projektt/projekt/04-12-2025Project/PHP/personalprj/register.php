<?php
/*
  We will include config.php for connection with database.
  We will get datas from index.php file, and insert them into the database when the Sign-up button is clicked in index.php file.
  If any of the sessions are empty, we will get a message.
*/

include_once('config.php');

if (isset($_POST['submit'])) {

    // Getting form data
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $tempPass = $_POST['password'];
    $password = password_hash($tempPass, PASSWORD_DEFAULT);

    $tempConfirm = $_POST['confirm_password'];
    $confirm_password = $_POST['confirm_password']; // No need to hash the confirm password

    // Checking if any required fields are empty
    if (empty($name) || empty($username) || empty($email) || empty($tempPass) || empty($tempConfirm)) {
        echo "You have not filled in all the fields.";
    } 
    // Checking if the passwords match
    elseif ($tempPass !== $tempConfirm) {
        echo "Passwords do not match.";
    } else {

        // Prepare the SQL query to insert the data into the database
        $sql = "INSERT INTO users (name, username, email, password) VALUES (:name, :username, :email, :password)";

        $insertSql = $conn->prepare($sql);

        // Bind parameters to the SQL query
        $insertSql->bindParam(':name', $name);
        $insertSql->bindParam(':username', $username);
        $insertSql->bindParam(':email', $email);
        $insertSql->bindParam(':password', $password);

        // Execute the query
        $insertSql->execute();

        // Redirect to login page after successful insert
        header("Location: login.php");
        exit;
    }
}
?>
