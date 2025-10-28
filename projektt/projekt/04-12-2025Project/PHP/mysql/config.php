<?php
$server='localhost';
$username='name';
$password='';
$dbname='testdb';

try{
    $connect=new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
}catch(Exception $e){
    echo "Somthing went wrong";
}