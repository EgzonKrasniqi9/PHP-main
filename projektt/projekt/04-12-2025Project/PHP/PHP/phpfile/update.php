<?php
include_once('config.php');
if(isset($_POST['upbate'])){
    $id=$_POST['id'];
    $username=$_POST['username'];
    $name=$_POST['name'];
    $email=$_POST['email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <form action="update.php" method="POST">
    <input type="hidden" name="id" value="<? echo $data['id']?>"> <br><br>
    <input type="text" name='username' value="<? echo $data['username']?>"> <br><br>
    <input type="text" name='name' value="<? echo $data['name']?>"> <br><br>
    <input type="text" name='email' value="<? echo $data['email']?>"><br><br>
    </form>
</body>
</html>