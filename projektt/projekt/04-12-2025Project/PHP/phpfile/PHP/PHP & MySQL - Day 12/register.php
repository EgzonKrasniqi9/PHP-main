<?php

include_once('config.php');

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $username=$_POST['username'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $tempPass=$_POST['password'];
    $password=password_hash($tempPass, PASSWORD_DEFAULT);

    if(empty($name) ||empty($username) || empty($surname) || empty($email) ||empty($password))
    {
        echo "You need to fill all the fields";
    }else{
        $sql="SELECT username FROM users WHERE username=:username";

        $tempSQL=$conn->prepare($sql);
        $tempSQL->bindParam(':username',$username);
        $tempSQL->execute();

        if($tempSQL->rowCount()>0){
            echo "username exists!";
            header("refresh:2; url=signup.php");
        }else{
            $sql="INSERT into users(name,surname,username,email,password) values (:name,:surname,:username,:email,:password)";
            $insertSQL=$conn->prepare($sql);

            $insertSQL->bindParam(':username',$username);
            $insertSQL->bindParam(':name',$name);
            $insertSQL->bindParam(':surname',$surname);
            $insertSQL->bindParam(':email',$email);
            $insertSQL->bindParam(':password',$password);

            $insertSQL->execute();
            echo "Data saved successfully ...";
            header("refresh:2; url=login.php");

        }


    }


}