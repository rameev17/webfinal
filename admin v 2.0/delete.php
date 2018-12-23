<?php
$dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $db = '123';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
	 $sql = "DELETE FROM cards WHERE ID=".$_GET['id'];
	         $result = mysqli_query($conn,$sql);
	?>
<!DOCTYPE html>
<html>
<head>
<title>Apple charity</title>
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic">
					<img src="images/logo.png" alt="IMG">
				</div>

				<form class="login100-form" action="delete.php">
					<span class="login100-form-title">
						Sign in
					</span>
					<div class="wrap-input100">
						<input class="input100" type="int" name="id" placeholder="id" required="Enter Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<a href="adminpage.php">Getback</a>
					
				</form>
			
			</div>
		</div>
	</div>
</body>