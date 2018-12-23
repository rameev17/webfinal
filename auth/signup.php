<?php

$username = $_POST['username'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];
$pass1=$_POST['pass1'];
if ($pass=!$pass1) {
	exit();
}

if (!empty($username)||!empty($pass)||!empty($phone)) {
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="123";
	
	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
	$INSERT ="INSERT INTO register (username,pass,phone) VALUES(?,?,?)";
	$SELECT="SELECT username FROM register WHERE username=? LIMIT 1";
	if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}

	$stmt=$conn->prepare($SELECT);
	$stmt->bind_param("s",$username);
	$stmt->execute();
	$stmt->bind_result($username);
	$stmt->store_result();
	$rnum=$stmt->num_rows;

	if($rnum==0){
		$stmt->close();

		$stmt=$conn->prepare($INSERT);
		$stmt->bind_param("ssi",$username, $pass, $phone);
		$stmt->execute();
		header('location: login.php');
	}
	else{
		echo "email is used";
	}
}
else{
	echo "All field are required";
	die();
}
?>