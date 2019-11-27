<html>
	<head>
		<title>User profile</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main2.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="image avatar"><img src="assets/images/avatar.jpg" alt="" /></a>
					<h1><strong>Hi Jay!</br></br></h1>
					<h2><a href="select.php" style="text-decoration:none;">Search</strong></a></h2>
					<h2><a href="edit.php" style="text-decoration:none;">Setting</strong></a></h2>
<!-- 					<h4>Email: jay@travelers.com</br>
					Tel : +852 - 66666666</br></br></h4> -->
<!-- 					<h5>Back to <a href="http://www.google.com">Home page</strong></a></h5>
 -->				</div>
			</header>

		<!-- Main -->
			<div id="main">

				<!-- One -->
					<section id="one">
						<header class="major">
							<h2>Enjoy your drink!</h2>
						</header>
						<p>Here are the drinks you want based on your preference. You can either take your recipe and make your own drink, or go to the store selling the drink you want.</p>
<!-- 						<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul> -->
					</section>

						<section>
<!-- 							<h4>Table</h4>
 -->							<div class="table-wrapper">
								<table>
									<thead>
										<tr>
											<th>Drink</th>
											<th>recipe</th>
											<th>Store</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$link = mysqli_connect("localhost", "root", "", "first_db");
											$query = mysqli_query($link, "Select * from list"); // SQL Query
											while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
											{
												Print "<tr>";
													Print '<td align="center">'. $row['id'] . "</td>";
													Print '<td align="center">'. $row['details'] . "</td>";
													Print '<td align="center">'. $row['date_posted']. " - ". $row['time_posted']."</td>";
													Print '<td align="center">'. $row['date_edited']. " - ". $row['time_edited']. "</td>";
													Print '<td align="center"><a href="edit.php?id='. $row['id'] .'">edit</a> </td>';
													Print '<td align="center"><a href="#" onclick="myFunction('.$row['id'].')">delete</a> </td>';
													Print '<td align="center">'. $row['public']. "</td>";
												Print "</tr>";
											}
										?>
										<!-- <tr>
											<td>Item One</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Two</td>
											<td>Vis ac commodo adipiscing arcu aliquet.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Three</td>
											<td> Morbi faucibus arcu accumsan lorem.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Four</td>
											<td>Vitae integer tempus condimentum.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Five</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr> -->
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2"></td>
										</tr>
									</tfoot>
								</table>
							</div>


						</section>





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

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>