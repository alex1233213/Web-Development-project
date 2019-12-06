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

				<li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">Book Categories</a>
					<div class="dropdown-content">
						<a href="bookCategories.php?id=1">Health</a>
						<a href="bookCategories.php?id=2">Business</a>
						<a href="bookCategories.php?id=3">Biography</a>
						<a href="bookCategories.php?id=4">Technology</a>
						<a href="bookCategories.php?id=5">Travel</a>
						<a href="bookCategories.php?id=6">Self-help</a>
						<a href="bookCategories.php?id=7">Cookery</a>
						<a href="bookCategories.php?id=8">Fiction</a></li>
					</div>

				<li><a href="viewRes.php">View Reservations</a></li>
			</ul>

			<form action="srchAuthorBook.php" method="post">
				<input id="searchbar" type="text" name="searchinput" placeholder="Search for book">
				<button id="searchbutton" type="submit" onclick="goToPage()">Search</button>
			</form>
		</header>


		<div class="main-content">
