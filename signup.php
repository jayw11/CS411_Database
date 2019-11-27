<!DOCTYPE html>
<html lang="en">
<head>
	<title>BobaCoffee Sign Up</title>
	<meta charset="UTF-8">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/login_util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="container-login100" style="background-image: url('assets/images/bg1.jpg');">

		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<span class="login100-form-title p-b-37">
					BobaCoffee
			</span>
			<form class="login100-form validate-form" action="signup.php" method="post">
				<span class="login100-form-title p-b-37">
					
					Sign Up
				</span>

				<div class="wrap-input100 m-b-25">
					<input class="input100" type="text" name="username" placeholder="username" required="required">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 m-b-25">
					<input class="input100" type="password" name="password" placeholder="password" required="required">
					<span class="focus-input100"></span>
				</div>
				<br>
				<div class="container-login100-form-btn">
					<!-- <button class="login100-form-btn">
						Sign Up
					</button> -->
					<input class="login100-form-btn" type="submit" value="Sign Up"/>
				</div>
				
				<br>
			</form>

			
		</div>
	</div>
	
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$link = mysqli_connect("localhost", "root", "", "first_db");
	$username = mysqli_real_escape_string($link,$_POST['username']);
	$password = mysqli_real_escape_string($link,$_POST['password']);
    $bool = true;

	$query = mysqli_query($link, "Select * from users"); //Query the users table
	while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) //display all rows from query
	{
		$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($username == $table_users) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("signup.php");</script>'; // redirects to register.php
		}
	}

	if($bool) // checks if bool is true
	{
		mysqli_query($link, "INSERT INTO users (username, password) VALUES ('$username','$password')"); //Inserts the value to table users
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		$_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
		header("location: select.php"); // redirects the user to the authenticated home page
		//Print '<script>window.location.assign("signup.php");</script>'; // redirects to register.php
	}

}
?>