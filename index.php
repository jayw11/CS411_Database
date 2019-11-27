<!DOCTYPE html>
<html lang="en">
<head>
	<title>Boba Coffee</title>
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
			<form class="login100-form validate-form" action="checklogin.php" method="post">
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100 m-b-25">
					<input class="input100" type="text" name="username" placeholder="username">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 m-b-25">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<input class="login100-form-btn" type="submit" value="Sign In"/>
				</div>

				<br><br>

				<div class="text-center">
					<a href="signup.php" class="txt2 hov1">
						Sign Up
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
</body>
</html>