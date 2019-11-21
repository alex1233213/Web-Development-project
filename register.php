<?php include "action.php";?>


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
			<h3><a href="index.php" id="greeting">Bookshop.ie</a></h3>
			
			<ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
			</ul>
		</header>
		
		<form id="inputform" action="action.php" method="post">
			<br>
			<div style="background-image: url('Images/Book.jpg');" id="createaccsection">
				<h3 class="formheading">Create an Account</h3>
				<label for="username">Username</label>
				<input type="text" name="username" id="username">
				<span class="error">* <?php echo $$usernameErr;?></span>
				
				<label for="password">Password</label>
				<input type="password" name="password" id="password">
				<span class="error">* <?php echo $passErr;?></span>
				
				<label for="repeatpass">Confirm Password</label>
				<input type="password" name="repeatpass" id="repeatpass">
				
				<label for="firstname">First Name</label>
				<input type="text" name="firstname" id="firstname">
				<span class="error">* <?php echo $firstnameErr;?></span>
				
				<label for="lastname">Last Name</label>
				<input type="text" name="lastname" id="lastname">
				<span class="error">* <?php echo $lastnameErr;?></span>
				
				<label for="addressline1">Address Line 1</label>
				<input type="text" name="addressline1" id="addressline1">
				<span class="error">* <?php echo $add1Err;?></span>
				
				<label for="addressline2">Address Line 2</label>
				<input type="text" name="addressline2" id="addressline2">
				<span class="error">* <?php echo $add2Err;?></span>
				
				<label for="city">City</label>
				<input type="text" name="city" id="city">
				<span class="error">* <?php echo $cityErr;?></span>
				
				<label for="telephone">Telephone</label>
				<input type="text" name="telephone" id="telephone">
				<span class="error">* <?php echo $telErr;?></span>
				
				<label for="mobile">Mobile</label>
				<input type="text" name="mobile" id="mobile">
				<span class="error">* <?php echo $mobileErr;?></span>
				
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