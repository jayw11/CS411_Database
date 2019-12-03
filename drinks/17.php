<?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['user']; //assigns user value
?>
<html >
	<head>
		<title>Iced Chai Tea Latte</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main2.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>


	<body id="top" >

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="image avatar"><img src="../assets/images/avatar.jpg" alt="" /></a>
					<h1><strong>Hi <?php Print "$user"?>!</br></br></h1>
					<h2><a href="../select.php" style="text-decoration:none;">Search</strong></a></h2>
					<h2><a href="../edit.php" style="text-decoration:none;">Setting</strong></a></h2>
					<h2><a href="../rate.php" style="text-decoration:none;">Rate</strong></a></h2>
					<h2><a href="../recommendations.php" style="text-decoration:none;">Recommend</strong></a></h2>
					<br><br><br>

 				 	<h5><a href="../index.php">Log out</strong></a></h5>
 				</div>
			</header>

		<!-- Main -->
			<div id="main">

					<!-- One -->
					<section id="one">
						<header class="major">
							<h2>Iced Chai Tea Latte<br />
							 </h2>
						</header>
<!-- 
					</section> -->

    
						<!-- <section> -->
						<div class="box alt">
								<div class="row 50% uniform">
									<div class="12u$"><span class="image fit"><img src="../assets/images/thumbs/17.png" alt="" /></span></div>
									
								</div>
							</div>
						</section>


	<section>
	<div class="table-wrapper">
		<table class="alt">
			<thead>
				<tr>
					<th>Store</th>
					<th>Price</th>
				</tr>
			</thead>
		<tbody>
			<?php
				
					$link = mysqli_connect("localhost", "root", "", "first_db");
						$result = mysqli_query($link, "select distinct storeName, location, price from sells natural join stores where drinkID = 1"); 
					while($row = mysqli_fetch_array($result)){
						Print "<tr>";
						Print '<td align="center">'. $row['storeName']."</td>";
						Print '<td align="center">'. $row['location']."</td>";
						Print '<td align="center">'. $row['price']."</td>";
						Print "</tr>";
					}
				
			?>
									</tbody>
									<!-- <tfoot>
										<tr>
											<td colspan="2"></td>
									
										</tr>
									</tfoot> -->
								</table>
							<!-- </div> -->

			</section>


	<section>
						<h2>Recipe</h2>

						
							<h4>Step 1</h4>
							<p>Steep the tea: Combine the tea and water in a quart-sized jar. Cover and let steep at room temperature for at least 4 hours or up to 12 hours. The tea will become stronger and more infused the longer it stands.</p>
							<h4>Step 2</h4>
							<p>Make the honey syrup: Combine the honey and water in a small glass container. Microwave for 30 seconds. Stir to dissolve the honey. Allow to cool, then cover and refrigerate until needed. (Honey syrup will keep for about a week.)</p>
							<h4>Step 3</h4>
							<p>Remove the tea bags: Once the tea has infused to your liking, remove the tea bags. The tea is ready to be used immediately, or cover and refrigerate for a week or more.</p>
							<h4>Step 4</h4>
							<p>Assemble an iced chai latte: Place a few ice cubes in a glass. Pour 1 to 3 teaspoons of honey syrup over the ice cubes. Fill the glass with a cup or so of iced chai and top with as much milk as you like.</p>
	</section>


    <hr style="margin-top: 100px;">
    </div>
			</div>

		<!-- Footer -->
			<footer id="footer">
<!-- 				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
			</div>
           </footer> -->
		<!-- Footer -->
			

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.poptrox.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>

 
	</body>
</html>