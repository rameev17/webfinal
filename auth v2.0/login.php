<?php 
 
$host="localhost";
$user="root";
$password="";
$db="123";
 
mysql_connect($host,$user,$password);
mysql_select_db($db);
 
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['pass'];
    
    $sql="select * from register where username='".$uname."'AND Pass='".$password."' limit 2";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login in</title>
	<meta charset="UTF-8">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<form action="#" method="POST">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic">
					<img src="images/logo.png" alt="IMG">
				</div>

				<form class="login100-form">
					<span class="login100-form-title">
						Sign in
					</span>

					<div class="wrap-input100">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>
					</div>
					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="forgetpassword.html">
							Username / Password?
						</a>
					</div>

					<div class="text-center">
						<a class="txt2" href="signup.html">
							Create your Account
							<i aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</form>
	<script src="js/main.js"></script>

</body>
</html>