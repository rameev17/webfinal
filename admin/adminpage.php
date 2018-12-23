<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $db = '123';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
         if(isset($_GET['delete'])) {
           $sql = "DELETE FROM cards WHERE ID=".$_GET['delete'];
	         $result = mysqli_query($conn,$sql);
         }
         if (isset($_GET['maker'])) {
          $sql = "INSERT INTO cards (ID, name, city, type, price, url)
          VALUES (NULL, '".$_GET['name']."','".$_GET['city']."','".$_GET['type']."','".$_GET['price']."','".$_GET['url']."')";
          $result = mysqli_query($conn, $sql);
         }
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
	<link rel="stylesheet" type="text/css" href="mainstyle.css">
</head>
<body>
	<div class="all">
		<div class="background">
		<div class="navbar">
			<div class="logo">
			</div>
			<div class="navbarmenu">
				<a href="adminpage.php">ADMIN PAGE</a>
			</div>	
	</div>
	<div class="cards">
		  <?php 
        for ($i = 0; $i < $num; $i++) {
            $row = mysqli_fetch_assoc($result);
            echo "<div class='card'>";
            echo "<img src='" . $row['url'] . "' style='width: 100px; height: 60px'>";
            echo "<div class='right'>";
            echo "<div class='title'>" .$row['name']. ' ' .$row['city']. '</div>';
            echo "<div class='attributes'>";
            echo "<div class='row'><div class='name'>Needs:</div><div>"  .$row['type']. '</div></div>';
            echo "<div class='row'><div class='name'>Price:</div><div>" .$row['price']. '</div></div></div></div></div>'; 
    }
        mysqli_close($conn);
        ?>
	</div>
	<a href="update.php">
		Update
	</a>
	<a href="delete.php">
		Delete
	</a>
</body>
</html>