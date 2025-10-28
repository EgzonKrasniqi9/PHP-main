<?php
session_start();

include_once('config.php');

$user_id=$_SESSION['id'];
$car_id=$_SESSION['car_id'];

$nr_days=$_POST['nr_days'];
$data=$_POST['date'];
$time=$_POST['time'];

$sql="INSERT INTO bookings(user_id,car_id,nr_days,price,date)VALUES (:user_id,:car_id,:nr_days,:price,:date)";

$insertBooking=$conn->prepare($sql);

$insertBooking->bindParam(':car_id',$car_id);
$insertBooking->bindParam(':nr_days',$nr_days);
$insertBooking->bindParam(':price',$price);
$insertBooking->bindParam(':date',$date);

$insertBooking->execute();
header('Location:home.php');
?>