
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>

	<style>

		form>input {
		    margin-bottom: 10px;
		    font-size: 20px;
		    padding: 5px;
		}

		button {
		    background: none;
		    border: none;
		    border: 1px solid black;
		    padding: 10px 40px;
		    font-size: 20px;
		    cursor: pointer;
		}
	</style>
</head>
<body>
	
	<form action="update.php" method="POST">
	<input type="number" name="id" readonly><br>
    <input type="text" name="username" ><br>
    <input type="text" name="name"><br>
    <input type="text" name="surname"><br>
    <input type="email" name="email"><br>

		<br><br>
		<button type="submit" name="update">UPDATE</button>
       
	</form>
    <a href="dashboard.php">Dashboard</a>
	</body>
</html>

