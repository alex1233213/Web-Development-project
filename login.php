<!DOCTYPE html>
<html>
	<head>
		<title>Library Login</title>
		<meta charset="UTF-8">
		<meta name="description" content="Book Reservation From Library">
		<meta name="keywords" content="HTML, CSS , PHP">
		<meta name="author" content="Alex Bulgari">
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="CSS/stylesheet.css">
	</head>
	
	<body>
		<header>
			<h3><a href="login.php" id="greeting">Bookshop.ie</a></h3>
			
			<ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
			</ul>
		</header>
		
		<form id="inputform" action="action.php" method="post">
			<br>
			<div style="background-image: url('Images/Book.jpg');" id="loginsection">
				<h3 class="formheading">Login</h3>
				<label for="username">Username</label>
				<input type="text" name="username" id="username">
				
				<label for="password">Password</label>
				<input type="password" name="password" id="password">
				
				<input id="button" type="submit" value="Log In">
			</div>
		</form>
		
		<footer id="footer">
			Contact by phone : 0888-9999
			<br>
			Email : info@bookreservation.com
		</footer>
	</body>
</html>



