<?php
	session_start();
	
	
	if(!isset($_SESSION['username']) ) {
		header('Location: login.php');
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Library Homepage</title>
		<meta charset="UTF-8">
		<meta name="description" content="Book Reservation From Library">
		<meta name="keywords" content="HTML, CSS , PHP">
		<meta name="author" content="Alex Bulgari">
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">
	</head>

	<body>
		<header>
			<h3><a href="index.php" id="greeting">Bookshop.ie</a></h3>
			<ul>
				<li><a href="logout.php">Log Out</a></li>
				<li><?php echo session_id(); ?> </li>
			</ul>
		</header>
		
		<div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		</div>


		<footer id="footer">
			Contact by phone : 0888-9999
			<br>
			Email : info@bookreservation.com
		</footer>
	</body>
</html>
