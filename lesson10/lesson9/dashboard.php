<!DOCTYPE html>
<html>
    <head>
    <title>Dashboard</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px 20px;
        }
    </style>
</head>

<body>
    <?php
    include_once("config.php");
    $sql = "SELECT * FROM users";
    $getUsers = $conn->prepare($sql);
    $getUsers->execute();
    $users = $getUsers->fetchAll();
    ?>
    <br><br>

    <table >
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
        </tr>
        <?php 
        foreach ($users as $user) { 
            ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['name']; ?></td>
                <td><?= $user['surname']; ?></td>
                <td><?= $user['email']; ?></td>
            </tr>
        <?php } ?>

    </table>

    <a href="index.php">Index</a>
</body>
</html>