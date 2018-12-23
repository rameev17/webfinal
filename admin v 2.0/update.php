<?php
$dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $db = '123';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
	 $sql = "INSERT INTO cards ( id,name, city, type, price, url)
          VALUES (NULL, '".$_GET['name']."','".$_GET['city']."','".$_GET['type']."','".$_GET['price1']."','".$_GET['url1']."')";
          $result = mysqli_query($conn, $sql);
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

				<form class="login100-form" action="update.php">
					<span class="login100-form-title">
						Sign in
					</span>
					<div class="wrap-input100">
						<input class="input100" type="int" name="id" placeholder="id" required="Enter Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="name" placeholder="name" required="Enter Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="city" placeholder="city" required="Enter password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="type" placeholder="type" required="Enter password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="price1" placeholder="price" required="Enter password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="url1" placeholder="url" required="Enter password">
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
</html>