<?php
session_start();

// Marrim të dhënat nga forma
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Shembull: përdorues dhe role të thjeshta
$users = [
    'admin' => ['password' => 'admin123', 'role' => 'admin'],
    'egzon' => ['password' => 'user123', 'role' => 'user']
];

// Kontrollojmë nëse përdoruesi ekziston
if(isset($users[$username]) && $users[$username]['password'] === $password){
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $users[$username]['role'];

    // Dërgo në faqe të ndryshme sipas rolit
    if($_SESSION['role'] === 'admin'){
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: user.php");
        exit();
    }
} else {
    // Login gabim, ridrejto te faqja e login-it me mesazh
    $_SESSION['error'] = "Username ose password gabim!";
    header("Location: login.php");
    exit();
}
?>
