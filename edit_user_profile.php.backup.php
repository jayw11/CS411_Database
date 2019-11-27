<!DOCTYPE HTML>

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
			Print '<script>window.location.assign("edit_user_profile.php");</script>'; // redirects to register.php
		}
	}

	if($bool) // checks if bool is true
	{
		mysqli_query($link, "INSERT INTO users (username, password) VALUES ('$username','$password')"); //Inserts the value to table users
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		Print '<script>window.location.assign("edit_user_profile.php");</script>'; // redirects to register.php
	}

}
?>

<html >
	<head>
		<title>EDIT profile</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body id="top" >

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="image avatar"><img src="assets/images/avatar.jpg" alt="" /></a>
					<h1><strong>Hi Jay!</br></br></h1>
	
					<h5>Back to <a href="http://www.google.com">Home page</strong></a></h5>
				</div>
			</header>

		<!-- Main -->
			<div id="main">

					<!-- One -->
					<section id="one">
						<header class="major">
							<h2>Register<br /></h2>
						</header>
						<p>Accumsan orci faucibus id eu lorem semper. Eu ac iaculis ac nunc nisi lorem vulputate lorem neque cubilia ac in adipiscing in curae lobortis tortor primis integer massa adipiscing id nisi accumsan pellentesque commodo blandit enim arcu non at amet id arcu magna. Accumsan orci faucibus id eu lorem semper nunc nisi lorem vulputate lorem neque cubilia.</p>

					</section>

    
 <form class="form-horizontal" role="form" action="edit_user_profile.php" method="post" style="padding-top:60px;padding-left: 0px;">
 
  <div class="form-group">
    <div class="row">
      <label for="username" class="col-sm-2 control-label">USER NAME</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="username" id="username" style="padding-right: 100px" placeholder="username">
      </div>
	</div>
  </div>
  
  <br><br>
   
  <div class="form-group">
    <div class="row">
      <label for="password" class="col-sm-2 control-label">PASS WORD</label>
      <div class="col-sm-7">
        <input type="password" class="form-control" name="password" id="password" style="padding-right: 100px" placeholder="password">
      </div>
	</div>
  </div>
  
  <br>
  <div class="form-group" style="padding-top: 30px;">
		<ul class="actions">
			<li><input type="submit" class="button special" value="Register"/><li>
		</ul>    

  </div>
</form>

    <hr style="margin-top: 100px;">
    </div>
			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
					<!--ul class="copyright">
						<li>&copy; Travelers</li><li> <a href="http://html5up.net">Edit Information</a></li>
					</ul-->
			</div>
           </footer>
		<!-- Footer -->
			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

 
	</body>
</html>