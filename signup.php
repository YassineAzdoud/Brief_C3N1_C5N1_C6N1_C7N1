<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password))
		{

			//save to database
			
			$query = "insert into users (email,first_name,last_name,password) values ('$email','$first_name','$last_name','$password')";

			mysqli_query($con, $query);

			header("Location: form.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>
            <label for="">first name</label>
			<input type="text" name="first_name" required><br><br>
			<label for="">last name</label>
			<input type="text" name="last_name" required><br><br>
			<label for="">email</label>
			<input type="text" name="email" required><br><br>
			<label for="">password</label>
			<input  type="password" name="password" required><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>