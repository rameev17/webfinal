<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $db = '123';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
          $sql = "SELECT * FROM cards";
	$result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
        ?>
<!DOCTYPE html>
<html>
<head>
<title>Apple charity</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="css/mainstyle.css">
</head>
<body>
	<div class="all">
		<div class="background">
		<div class="navbar">
			<div class="logo">
				<a href="mainpage.php">
					<img src="images/logo.png">
				</a>
			</div>
			<div class="navbarmenu">
				<a href="mainpage.php">Home</a>
				<a href="#">My account</a>
				<a href="">Contact us</a>
			</div>	
	</div>
	<div class="cards">
		  <?php 
        for ($i = 0; $i < $num; $i++) {
            $row = mysqli_fetch_assoc($result);
            echo "<div class='card'>";
            echo "<img src='" . $row['url'] . "' style='width: 100px; height: 60px' id='image1 style='width:200px; height:200px;'>";
            echo "<div class='right'>";
            echo "<div class='title'>" .$row['name']. ' ' .$row['city']. '</div>';
            echo "<div class='attributes'>";
            echo "<div class='row'><div class='name'>Needs:</div><div>"  .$row['type']. '</div></div>';
            echo "<div class='row'><div class='name'>Price:</div><div>" .$row['price']. '</div></div></div></div></div>'; 
    }
        mysqli_close($conn);
        ?>
	</div>
</body>
</html>