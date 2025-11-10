<?php
session_start();

// Marrim të dhënat nga forma
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Krijojmë lidhjen me databazën
$host = "127.0.0.1";
$user = "root";  // ndrysho nëse ke tjetër user
$pass = "";      // ndrysho nëse ke password
$db = "db";

$conn = new mysqli($host, $user, $pass, $db);

// Kontrollojmë lidhjen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Përgatitim query për të marrë përdoruesin me username të dhënë
$stmt = $conn->prepare("SELECT id, username, password, role FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows === 1){
    $row = $result->fetch_assoc();

    // Kontrollojmë password-in hashed
    if(password_verify($password, $row['password'])){
        // Login i suksesshëm
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        // Ridrejto sipas role
        if($_SESSION['role'] === 'admin'){
            header("Location: dashboard.php");
            exit();
        } else {
            header("Location: user.php");
            exit();
        }
    } else {
        // Password gabim
        $_SESSION['error'] = "Username ose password gabim!";
        header("Location: login.php");
        exit();
    }

} else {
    // Username nuk ekziston
    $_SESSION['error'] = "Username ose password gabim!";
    header("Location: login.php");
    exit();
}

$stmt->close();
$conn->close();
?>
