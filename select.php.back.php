<!DOCTYPE HTML>

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
					<h2><a href="select.php" style="text-decoration:none;">Search</strong></a></h2>
					<h2><a href="edit.php" style="text-decoration:none;">Setting</strong></a></h2>
<!-- 					h5>Back to <a href="http://www.google.com">Home page</strong></a></h5
 -->				</div>
			</header>

		<!-- Main -->
			<div id="main">

					<!-- One -->
					<section id="one">
						<header class="major">
							<h2>Go search for a drink!<br />
							 </h2>
						</header>
						<p>Select information below.</p>

					</section>

    
 <form class="form-horizontal" action="select.php" method="post" role="form" style="padding-top:60px;padding-left: 0px;">
 

<!-- cold/warm
 -->
	<section id="cold/warm">
	  <fieldset id="group1">
	<label for="tel" class="col-sm-2 control-label"> Cold/Hot </label>

			<div class="4u 12u$(small)">
				<input type="radio" id="demo-priority-low" name="coldhot" value="cold" checked>
				<label for="demo-priority-low">COLD</label>
				<input type="radio" id="demo-priority-normal" name="coldhot" value="hot">
				<label for="demo-priority-normal">HOT</label>
			</div>

</fieldset>
</section>

  
  <br><br>
<!-- sweetness
 -->     
<section id="sweetness">
  <fieldset id="group2">
 <label for="tel" class="col-sm-2 control-label"> Sweetness </label>
									<div class="4u 12u$(small)">
										<input type="radio" id="sweet25" name="sweetness" value="25" checked>
										<label for="sweet25">25</label>
			
										<input type="radio" id="sweet50" name="sweetness" value="50">
										<label for="sweet50">50</label>
									</div>
									<div class="6u$ 12u$(small)">
										<input type="radio" id="sweet75" name="sweetness" value="75">
										<label for="sweet75">75</label>
						
										<input type="radio" id="sweet100" name="sweetness" value="100">
										<label for="sweet100">100</label>
									</div>

  </fieldset>
  </section>

  <br><br>


<!-- toppings
 -->  <div class="form-group">
    <div class="row">
      <label for="tel" class="col-sm-2 control-label">What do you want</label>
      								</div>
									<div class="6u 12u$(small)">
										<input type="checkbox" id="demo-puddings" name="ingredients[]" value="puddings">
										<label for="demo-puddings">Puddings</label>
									</div>
									<div class="6u$ 12u$(small)">
										<input type="checkbox" id="demo-boba" name="ingredients[]" value="boba" >
										<label for="demo-boba">Boba</label>
									</div>
									<div class="6u$ 12u$(small)">
										<input type="checkbox" id="demo-jelly" name="ingredients[]" value="coconut" >
										<label for="demo-jelly">Coconut Jelly</label>
									</div>									
									<div class="6u$ 12u$(small)">
										<input type="checkbox" id="demo-milk" name="ingredients[]" value="milk" >
										<label for="demo-milk">Milk</label>
									</div>									
									<div class="6u$ 12u$(small)">
										<input type="checkbox" id="demo-jam" name="ingredients[]" value="jam" >
										<label for="demo-jam">Jam</label>
									</div>
									<br>

<!--       <div class="col-sm-7">
        <input type="text" class="form-control" id="tel" style="padding-right: 100px" placeholder="telephone">
      </div> -->
       <div class="form-group" style="padding-top: 30px;">
		<ul class="actions">
			<input type="submit" value="Search" class = "button special"/>
		</ul> 
  </div>
  <br><br>
</form>
<section id="one">
	<header class="major">
		<h2>Enjoy your drink!</h2>
	</header>
	<p>Here are the drinks you want based on your preference. You can either take your recipe and make your own drink, or go to the store selling the drink you want.</p>
</section>

<section>
	<div class="table-wrapper">
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
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					$link = mysqli_connect("localhost", "root", "", "first_db");
					//$username = mysqli_real_escape_string($link, $_POST['username']);
					$userid = 1;
					$item_num = 0;
					$i_id1 = -1;$i_id2 = -1;$i_id3 = -1;$i_id4 = -1;$i_id5 = -1;
					$coldhot =$_POST['coldhot'];
					$sweetness =(int)$_POST['sweetness'];

					if(!empty($_POST['ingredients'])){
					// Loop to store and display values of individual checked checkbox.
						foreach($_POST['ingredients'] as $selected){
							$result = mysqli_query($link, "select * from ingredient where name = '$selected' "); 
							$row = mysqli_fetch_array($result);
							if($i_id1==-1){$i_id1 = (int)$row['id'];$item_num=1;}
							elseif ($i_id2==-1) {$i_id2 = (int)$row['id'];$item_num=2;}
							elseif ($i_id3==-1) {$i_id3 = (int)$row['id'];$item_num=3;}
							elseif ($i_id4==-1) {$i_id4 = (int)$row['id'];$item_num=4;}
							elseif ($i_id5==-1) {$i_id5 = (int)$row['id'];$item_num=5;}
						}
					}

					if($item_num==0){
						$result = mysqli_query($link, "select drinkName, steps, storeName from drinks natural join sells natural join stores natural join recipes where sweetness = '$sweetness' and hot_cold = '$coldhot'"); 
						while($row = mysqli_fetch_array($result)){
							Print "<tr>";
							Print '<td align="center">'. $row['drinkName'] . "</td>";
							Print '<td align="center">'. $row['steps'] . "</td>";
							Print '<td align="center">'. $row['storeName']."</td>";
							Print "</tr>";
						}
					}
				}
			?>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2"></td>
									
										</tr>
									</tfoot>
								</table>
							</div>


						</section>

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