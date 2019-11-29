<?php
	//make connection to database
	require_once "db.php";

	//declare variables
	$userErr = $passErr = $formErr = "";
	
	
	//start session 
	session_start();
	
	unset($_SESSION['username']);
	

	//check if button is set
	if(isset($_POST['username']) && isset($_POST['password']) ) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		//validate username
		if(empty($username)) {
			$userErr = "* No username has been entered";
		}
		//validate password
		else if(empty($password)) {
			$passErr = "* No password has been entered";
		} else {
			//handle user input
			$username = test_input($username);
			$password = test_input($password);

			//sql code to retrieve a specific user from database
			$sql = "select username, password from user where username='$username' and password='$password'";

			$result = mysqli_query($db, $sql);

			//check if sql statement is run
			if($result == False) {
				printf ("error: %s:", mysqli_error($db));
			} else {
				//check if rows are retrieved from database, i.e. user exists
				$row = mysqli_num_rows($result);

				if($row == 1) {
					//set session variables
					$_SESSION['username'] = $username;
					$_SESSION['success'] = "Logged in";
					
					//redirect to index page
					header("Location: index.php");
					return;
				} else {
					$_SESSION['error'] = "* Invalid username or password";
					header('Location: login.php');
					return;
				}

			}
		}
	}



	function test_input($data) {
		$data = trim($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	mysqli_close($db);
?>


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

		<form id="inputform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<br>
			<div style="background-image: url('Images/Book.jpg');" id="loginsection">
				<h3 class="formheading">Login</h3>
				<span class="error"><?php
					if(isset($_SESSION['error'])) {
						echo "Error: ". $_SESSION['error'];
						unset($_SESSION['error']);
					}
				?></span>
				<label for="username">Username</label>
				<input type="text" name="username" id="username">
				<span class="error"><?php echo $userErr; ?></span>

				<label for="password">Password</label>
				<input type="password" name="password" id="password">
				<span class="error"><?php echo $passErr; ?></span>

				<input id="button" name="login" type="submit" value="Log In">
			</div>
		</form>

		<footer id="footer">
			Contact by phone : 0888-9999
			<br>
			Email : info@bookreservation.com
		</footer>
	</body>
</html>
