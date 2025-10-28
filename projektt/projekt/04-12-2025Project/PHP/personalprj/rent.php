<!-- <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve form data
//     $car_id = $_POST['car_id'];
//     $days = $_POST['days'];

//     // Database connection
//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $dbname = "car_rental";

//     $conn = new mysql($servername, $username, $password, $dbname);

//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     // Fetch car details from the database
//     $sql = "SELECT * FROM cars WHERE id = $car_id";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         // Get car details
//         $row = $result->fetch_assoc();
//         $car_name = $row['car_name'];
//         $price_per_day = $row['price_per_day'];
//         $total_cost = $price_per_day * $days;

//         // Display rental summary
//         echo "<div style='max-width: 600px; margin: auto; padding: 20px; background-color: white; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>";
//         echo "<h1>Your Rental Details</h1>";
//         echo "<p>Car: $car_name</p>";
//         echo "<p>Price per day: $$price_per_day</p>";
//         echo "<p>Number of days: $days</p>";
//         echo "<h3>Total Rental Cost: $$total_cost</h3>";
//         echo "</div>";
//     } else {
//         echo "Car not found.";
//     }

//     $conn->close();
// } else {
//     echo "Invalid request.";
// }
?> -->
