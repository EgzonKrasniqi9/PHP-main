<?php 
/*
We will get the changed data from edit.php file and update them into the database.
*/
	include_once('config.php');

	if (isset($_POST['submit1'])) {
		$id = $_POST['id'];
		$Name = $_POST['Name'];
		$Engine = $_POST['Engine'];
		$Gas_power = $_POST['Gas_power'];
		$Gear = $_POST['Gear'];
        $Hp = $_POST['Hp'];

		// Remove the "Gas power" placeholder from the SQL statement as it's not needed
		$sql = "INSERT INTO car(id,Name,Engine, Gas_power, Gear,Hp) VALUES (:id,:Name,:Engine,:Gas_power,:Gear,:Hp)";

		$prep = $conn->prepare($sql);
		$prep->bindParam(':id', $id);
		$prep->bindParam(':Name', $Name);
		$prep->bindParam(':Engine', $Engine);
		$prep->bindParam(':Gas_power', $Gas_power);
		$prep->bindParam(':Gear', $Gear);
        $prep->bindParam(':Hp', $Hp);
		
		$prep->execute();
		header("Location: list_cars.php");
	}
?>
