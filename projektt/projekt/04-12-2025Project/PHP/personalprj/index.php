<?php

 session_start();

 if(!isset($_SESSION['logged_in'])){
     header("Location: login.php");
 }


 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "car_rental";

 $conn = new mysqli($servername, $username, $password, $dbname);


 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }


 $sql = "SELECT * FROM cars";
 $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .car-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        .car-item:last-child {
            border-bottom: none;
        }
        label, input[type="submit"], select {
            display: block;
            margin: 10px 0;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Rent a Car</h1>

    <form action="rent.php" method="POST">
        <h3>Select a car:</h3>


        <label for="days">Number of days:</label>
        <input type="number" id="days" name="days" min="1" required>

        <input type="submit" value="Calculate Rental Cost">
    </form>
</div>



</body>
</html>
