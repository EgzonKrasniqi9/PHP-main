<?php

Include_once('config.php');
$sql='SELECT * FROM USERS';
$getuser=$connect->prepare($sql);
$getuser->execute();
$user=$getuser->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 10</title>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php
                foreach($user as $user){
            ?>

                <tr>
                    <td><?= $user['id']?></td>
                    <td><?= $user['username']?></td>
                    <td><?= $user['name']?></td>
                    <td><?= $user['email-']?></td>
                </tr>


            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>