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
		<script src="Javascript/script.js"></script> 
	</head>

	<body>
		<header>
			<h3><a href="index.php" id="greeting">Bookshop.ie</a></h3>
			<ul>
				<li><a href="logout.php">Log Out</a></li>
				<div class="dropdown">
					<button onclick="myFunction()" class="dropbtn">Dropdown</button>
					<div id="myDropdown" class="dropdown-content">
						<a href="health.php">Health</a>
						<a href="business.php">Business</a>
						<a href="biography.php">Biography</a>
						<a href="tech.php">Technology</a>
						<a href="travel.php">Travel</a>
						<a href="selfhelp.php">Self-help</a>
						<a href="cookery.php">Cookery</a>
						<a href="fiction.php">Fiction</a>
					</div>
				</div> 
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
