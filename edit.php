<!DOCTYPE HTML>

<html >
	<head>
		<title>EDIT profile</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main2.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
		<?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['user']; //assigns user value
	$id_exists = false;
	?>

	<body id="top" >

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="image avatar"><img src="assets/images/avatar.jpg" alt="" /></a>
					<h1><strong>Hi <?php Print "$user"?>!</br></br></h1>
					<h2><a href="select.php" style="text-decoration:none;">Search</strong></a></h2>
					<h2><a href="edit.php" style="text-decoration:none;">Setting</strong></a></h2>
				</div>
			</header>

		<!-- Main -->
			<div id="main">

					<!-- One -->
					<section id="one">
						<header class="major">
							<h2>Update your Account information.<br />
							 Let us know more about you!</h2>
						</header>
						<p>You can insert, delete or update your information here. The information includes friends ID, allergies, favorite drinks, favorite ingredients.</p>

					</section>

    
 <form class="form-horizontal" role="form" action="edit.php" method="post" style="padding-top:60px;padding-left: 0px;">
 
  <div class="form-group">
    <div class="row">

	  <label for="update info" class="col-sm-2 control-label">Insert</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="i_info" id="i_info" style="padding-right: 100px" placeholder="info">

	  </div>

	  <br><br>
	  <label for="update info" class="col-sm-2 control-label">Into  </label>

		<!-- <div class="12u$"> -->
			<div class="select-wrapper">
				<select name="insert" id="insert" >
					<option value="0">Select one</option>
					<!-- <option value="1">friends ID</option> -->
						    <option value="allergies">allergies</option>
						    <option value="favorite_drinks">favorite drinks</option>
						    <option value="favorite_ingredients">favorite ingredients</option>
				</select>
			</div>
		<!-- </div> -->

     </div>
   </div> 
	
	<br><br>

	

<!-- 	<form class="form-horizontal" role="form" style="padding-top:60px;padding-left: 0px;"> -->
 
		<div class="form-group">
		  <div class="row">
	  
			<label for="update info" class="col-sm-2 control-label">Delete</label>
			<div class="col-sm-7">
			  <input type="text" class="form-control" name="d_info" id="d_info" style="padding-right: 100px" placeholder="info">
			</div>
	  
			<br><br>
			<label for="update info" class="col-sm-2 control-label">From</label>
	  
			  <!-- <div class="12u$"> -->
				  <div class="select-wrapper">
					  <select name="delete" id="delete" >
						  <option value="0">Select one</option>
						  <!-- <option value="1">friends ID</option> -->
						    <option value="allergies">allergies</option>
						    <option value="favorite_drinks">favorite drinks</option>
						    <option value="favorite_ingredients">favorite ingredients</option>
					  </select>
				  </div>
			  </div>
	  
		  <!--  </div> -->
		 </div> 
  
  <br><br>
 
  <div class="form-group">
    <div class="row">
      <label for="update info" class="col-sm-2 control-label">Update</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="u1_info" id="u1_info" style="padding-right: 10px" placeholder="previous">
	  </div>
	  <div class="col-sm-7">
		<input type="text" class="form-control" name="u2_info" id="u2_info" style="padding-right: 10px" placeholder="new">
	   </div>
		<br><br>
				<label for="update info" class="col-sm-2 control-label">From</label>
		
				<!-- <div class="12u$"> -->
					<div class="select-wrapper">
						<select name="update" id="update" >
							<option value="0">Select one</option>
							<!-- <option value="Select one">friends ID</option> -->
						    <option value="allergies">allergies</option>
						    <option value="favorite_drinks">favorite drinks</option>
						    <option value="favorite_ingredients">favorite ingredients</option>
						</select>
					<!-- </div> -->
				</div>

	</div>
  </div>
  
  <br><br>
  <br>
 
  <div class="form-group" style="padding-top: 30px;">
		<ul class="actions">
			<input type="submit" value="Save Changes" class = "button special"/>
		</ul> 
  </div>
</form>
<br><br><br>
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


<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$link = mysqli_connect("localhost", "root", "", "first_db");
	//$username = mysqli_real_escape_string($link, $_POST['username']);
	$userid = 1;
	$i_info = $_POST['i_info'];
	$d_info = $_POST['d_info'];
	$u1_info = $_POST['u1_info'];
	$u2_info = $_POST['u2_info'];

	$selected_val1 = $_POST['insert'];  // Storing Selected Value In Variable
	//echo '<script type="text/javascript"> alert("'.$selected_val1.'")</script>';
	$selected_val2 = $_POST['delete'];  // Storing Selected Value In Variable
	//echo '<script type="text/javascript"> alert("'.$selected_val2.'")</script>';
	$selected_val3 =  $_POST['update'];  // Storing Selected Value In Variable
	//echo '<script type="text/javascript"> alert("'.$selected_val3.'")</script>';
	if( isset ( $i_info ) ) { 
		$result = mysqli_query($link, "select * from ingredients where ingredientName = '$i_info' "); 
		$row = mysqli_fetch_array($result);
		$row2 = (int)$row['ingredientID'];
		if ($selected_val1 == "allergies"){
			$query = mysqli_query($link, "INSERT INTO allergies (userID, ingredientID) VALUES ('$userid', '$row2')"); 
		}
		if ($selected_val1 == "favorite_drinks"){
			$query = mysqli_query($link, "INSERT INTO favorite_drinks (userID, drinkID) VALUES ('$userid', '$row2')"); 
		}
		if ($selected_val1 == "allergies"){
			$query = mysqli_query($link, "INSERT INTO favorite_ingredients (userID, ingredientID) VALUES ('$userid', '$row2')"); 
		}
	}

	if( isset ( $d_info ) ) { 
		$result2 = mysqli_query($link, "select * from ingredients where ingredientName = '$d_info' "); 
		$row3 = mysqli_fetch_array($result2);
		$row4 = (int)$row3['ingredientID'];
		if ($selected_val2 == "allergies"){
			$query = mysqli_query($link, "DELETE FROM allergies where ingredientID = '$row4'"); 
		}
		if ($selected_val2 == "favorite_drinks"){
			$query = mysqli_query($link, "DELETE FROM favorite_drinks where drinkID = '$row4'"); 
		}
		if ($selected_val2 == "allergies"){
			$query = mysqli_query($link, "DELETE FROM favorite_ingredients where ingredientID = '$row4'"); 
		}
	}
	if( isset ( $u1_info ) and  isset ( $u2_info )) { 
		$result3 = mysqli_query($link, "select * from ingredients where ingredientName = '$u1_info'"); 
		$result4 = mysqli_query($link, "select * from ingredients where ingredientName = '$u2_info'"); 
		$row5 = mysqli_fetch_array($result3);
		$row6 = (int)$row5['ingredientID'];
		$row7 = mysqli_fetch_array($result4);
		$row8 = (int)$row7['ingredientID'];
		if ($selected_val3 == "allergies"){
			$query = mysqli_query($link, "UPDATE allergies SET ingredientID = '$row8' where userID = '$userid' and ingredientID = '$row6'"); 
		}
		if ($selected_val3 == "favorite_drinks"){
			$query = mysqli_query($link, "UPDATE favorite_drinks SET drinkID = '$row8' where userID = '$userid'  and ingredientID = '$row6'");
		}
		if ($selected_val3 == "allergies"){
			$query = mysqli_query($link, "UPDATE favorite_ingredients SET ingredientID = '$row8' where userID = '$userid'  and ingredientID = '$row6'");  
		}
	}
}
?>