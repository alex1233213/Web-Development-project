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
			
			<h3 id="greeting">Bookshop.ie</h3>
		</header>
		
		<ul>
			<li><a href="login.php">Login</a></li>
			<li><a href="register.php">Register</a></li>
		</ul>
		
		<form id="inputform" action="PHP/action.php" method="post">
			<br>
			<div id="loginsection">
				<h3 class="formheading">Login</h3>
				<label for="username">Username</label>
				<input type="text" name="username" id="username">
				
				<label for="password">Password</label>
				<input type="password" name="password" id="password">
				
				<input id="button" type="submit" value="Log In">
			</div>
			
			<div id="createaccsection">
				<h3 class="formheading">Create an Account</h3>
				<label for="username">Username</label>
				<input type="text" name="username" id="username">
				
				<label for="password">Password</label>
				<input type="password" name="password" id="password">
				
				<label for="firstname">First Name</label>
				<input type="text" name="firstname" id="firstname">
				
				<label for="lastname">Last Name</label>
				<input type="text" name="lastname" id="lastname">
				
				<label for="addressline1">Address Line 1</label>
				<input type="text" name="addressline1" id="addressline1">
				
				<label for="addressline2">Address Line 2</label>
				<input type="text" name="addressline2" id="addressline2">
				
				<label for="city">City</label>
				<input type="text" name="city" id="city">
				
				<label for="telephone">Telephone</label>
				<input type="text" name="telephone" id="telephone">
				
				<label for="mobile">Mobile</label>
				<input type="text" name="mobile" id="mobile">
				
				<input id="button" type="submit" value="Create Account">
			</div>
		</form>
		
		<footer id="footer">
			Contact by phone : 0888-9999
			<br>
			Email : info@bookreservation.com
		</footer>
	</body>
</html>