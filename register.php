<?php
	//create database connection
	require_once "db.php";

	//declare variables
	$usernameErr = $passErr = $firstnameErr = $lastnameErr = $add1Err = $add2Err = $cityErr = $telErr = $mobileErr = $formErr = "";
	$username = $password = $fname = $lastname = $add1 = $add2 = $city = $telephone = $mobile = "";
	$formValid = True;

	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repeatpass'])
	&& isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['addressline1'])
	&& isset($_POST['addressline2']) && isset($_POST['city']) && isset($_POST['telephone']) && isset($_POST['mobile']) ) {

		//validate username
		if (empty($_POST['username'])) {
			$usernameErr = "* No username entered";
			$formValid = False;
		} else {
			$username = test_input($_POST['username'], $db);
		}

		//validate password
		if (empty($_POST['password'])) {
			$passErr = "* No password entered";
			$formValid = False;
		} else if(check_password($_POST['password'] ,$_POST['repeatpass']) == False){
			$passErr = "* Passwords do not match";
			$formValid = False;
		} else if(!strlen($_POST['password']) > 6 ) {
			$passErr = "* Password should be at least 6 characters long";
			$formValid = False;
		} else {
			$password = test_input($_POST['password'], $db);
		}


		//validate name
		if (empty($_POST['firstname'])) {
			$firstnameErr = "* No name entered";
			$formValid = False;
		} else {
			$fname = test_input($_POST['firstname'], $db);
		}


		//validate last name
		if (empty($_POST['lastname'])) {
			$lastnameErr = "* No surname name entered";
			$formValid = False;
		} else {
			$lastname = test_input($_POST['lastname'], $db);
		}


		//validate add1 field
		if (empty($_POST['addressline1'])) {
			$add1Err = "* Field required";
			$formValid = False;
		} else {
			$add1 = test_input($_POST['addressline1'], $db);
		}


		//validate add2 field
		if (empty($_POST['addressline2'])) {
			$add2Err = "* Field required";
			$formValid = False;
		} else {
			$add2 = test_input($_POST['addressline2'], $db);
		}

		//validate city
		if (empty($_POST['city'])) {
			$cityErr = "* Field required";
			$formValid = False;
		} else {
			$city = test_input($_POST['city'], $db);
		}


		//validate telephone
		if (empty($_POST['telephone'])) {
			$telErr = "* Field required";
			$formValid = False;
		} else if(is_numeric($_POST['telephone']) == False){
			$telErr = "* Enter a valid telephone number";
			$formValid = False;
		} else {
			$telephone = test_input($_POST['telephone'], $db);
		}


		//validate mobile
		if (empty($_POST['mobile'])) {
			$mobileErr = "* Field required";
			$formValid = False;
		} else if(is_numeric($_POST['mobile']) == False){
			$mobileErr = "* Enter a valid mobile number";
			$formValid = False;
		} else if(strlen((string) $_POST['mobile']) != 10) {
			$mobileErr = "* Mobile number must be 10 digits";
			$formValid = False;
		} else {
			$mobile = test_input($_POST['mobile'], $db);
		}


		//check if the user is not already registered
		$sql_check = "select username from user where username='$username'";
		$query_result = mysqli_query($db, $sql_check);

		if( mysqli_num_rows($query_result) == 1) {
			$formValid = False;
			$usernameErr = "User is already registered";
		}


		//sql statement
		$sql = "insert into User values ('$username', '$password', '$fname', '$lastname', '$add1',
		'$add2', '$city', '$telephone', '$mobile');";

		//check if form is valid
		if($formValid == True){
			//query to database $db
			header('Location: index.php');
			$_SESSION['index'] = True;
			//start a session
			session_start();
			$_SESSION['username'] = $username;


			//redirect
			header('Location: index.php');
			$_SESSION['index'] = True;

			//check if sql statement has been run
			if($result === False) {
				printf ("error: %s:", mysqli_error($db));
			}

		}


	}

	/*This function removes unwanted characters from the user input.
	Also protects against Cross side scripting using htmlspecialchars */
	function test_input($data, $db) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$data = mysqli_real_escape_string($db, $data);
		return $data;
	}

	/*this function checks if password input and confirm password match. If the two values match, returns True,
	otherwise False */
	function check_password($pass1, $pass2) {
		if($pass1 == $pass2) {
			return True;
		} else {
			return False;
		}
	}


	//Terminate connection to database
	mysqli_close($db);

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Library Registration</title>
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

		<form id="inputform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<br>
			<span class="error"><?php echo $formErr ;?></span>
			<div id="createaccsection">
				<h3 class="formheading">Create an Account</h3>


				<label for="username">Username</label>
				<input type="text" name="username" id="username">
				<span class="error"><?php echo $usernameErr;?></span>

				<label for="password">Password</label>
				<input type="password" name="password" id="password">
				<span class="error"><?php echo $passErr;?></span>

				<label for="repeatpass">Confirm Password</label>
				<input type="password" name="repeatpass" id="repeatpass">

				<label for="firstname">First Name</label>
				<input type="text" name="firstname" id="firstname">
				<span class="error"><?php echo $firstnameErr;?></span>

				<label for="lastname">Last Name</label>
				<input type="text" name="lastname" id="lastname">
				<span class="error"><?php echo $lastnameErr;?></span>

				<label for="addressline1">Address Line 1</label>
				<input type="text" name="addressline1" id="addressline1">
				<span class="error"><?php echo $add1Err;?></span>

				<label for="addressline2">Address Line 2</label>
				<input type="text" name="addressline2" id="addressline2">
				<span class="error"><?php echo $add2Err;?></span>

				<label for="city">City</label>
				<input type="text" name="city" id="city">
				<span class="error"><?php echo $cityErr;?></span>

				<label for="telephone">Telephone</label>
				<input type="text" name="telephone" id="telephone">
				<span class="error"><?php echo $telErr;?></span>

				<label for="mobile">Mobile</label>
				<input type="text" name="mobile" id="mobile">
				<span class="error"><?php echo $mobileErr;?></span>

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
