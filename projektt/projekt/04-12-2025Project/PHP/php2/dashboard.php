<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        
        table
        {
            border: 1px solid black;
        }


        tr,td,th
        {
            border: 1px solid black;
            
        }
        table,tr,td
        {
            border-collapse: collapse;
        }
        td
        {
            padding: 10px;
        }


    </style>
</head>
<body>

<?php
    include_once('config.php');
    $getUser=$conn->prepare("SELECT * FROM users");

    $getUsers->execute();
    $users=$getUsers->fetchAll();
?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Email</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <?php
   foreach($users as $user){
  ?>
  <tbody>
    <tr>
      <td><?= $user['id']?></td>
      <td><?= $user['username']?></td>
      <td><?= $user['name']?></td>
      <td><?= $user['surname']?></td>
      <td><?= $user['email']?></td>
      <td><?= "<a href='delete.php?id=$user['id']>DELETE</a>|<a href='edit.php?id=$user['id']>UPDATE</a>"?></td>
    </tr>

    <?php
   }
    ?>
  
  </tbody>
</table>


     <a href="index.php">Add User</a>
    
</body>
</html>