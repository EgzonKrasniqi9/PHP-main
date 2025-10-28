<?php
include_once('config.php');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $username=$_POST['username'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT into users(name,surname,username,email,password) values (:name,:surname,:username,:email,:password)";
    $insertSQL=$conn->prepare($sql);

    $insertSQL->bindParam(':username',$username);
    $insertSQL->bindParam(':name',$name);
    $insertSQL->bindParam(':surname',$surname);
    $insertSQL->bindParam(':email',$email);
    $insertSQL->bindParam(':password',$password);

    $insertSQL->execute();
    echo "The users has been added successfully";

    echo "<br>";

    echo "<a href='dashboard.php>Dashboard</a>";
}
