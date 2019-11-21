<?php 
	//create database connection
	require_once "db.php";
	
	//declare variables
	$usernameErr = $passErr = $firstnameErr = $lastnameErr = $add1Err = $add2Err = $cityErr = $telErr = $mobileErr = "";
	$username = $password = $fname = $lastname = $add1 = $add2 = $city = $telephone = $mobile = "";
	
	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repeatpass'])
	&& isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['addressline1'])
	&& isset($_POST['addressline2']) && isset($_POST['city']) && isset($_POST['telephone']) && isset($_POST['mobile']) ) {
		
		//validate username
		if (empty($_POST['username'])) {
			$usernameErr = "No username entered";
		} else {
			$username = test_input($_POST['username']);
		}
		
		//validate password
		if (empty($_POST['password'])) {
			$passErr = "No password entered";
		} else if(check_password($_POST['password'] ,$_POST['repeatpass'] == False)){
			$passErr = "Passwords do not match";
		} else if(strlen($_POST['password'] < 6) ) {
			$passErr = "Password should be at least 6 characters long";
		} else {
			$password = test_input($_POST['password']);
		}
		
		
		//validate name
		if (empty($_POST['firstname'])) {
			$firstnameErr = "No name entered";
		} else {
			$fname = test_input($_POST['firstname']);
		}
		
		
		//validate last name 
		if (empty($_POST['lastname'])) {
			$lastnameErr = "No surname name entered";
		} else {
			$lastname = test_input($_POST['lastname']);
		}
		
		
		//validate add1 field 
		if (empty($_POST['addressline1'])) {
			$add1Err = "Field required";
		} else {
			$add1 = test_input($_POST['addressline1']);
		}
		
		
		//validate add2 field 
		if (empty($_POST['addressline2'])) {
			$add2Err = "Field required";
		} else {
			$add2 = test_input($_POST['addressline2']);
		}
		
		//validate city
		if (empty($_POST['city'])) {
			$cityErr = "Field required";
		} else {
			$city = test_input($_POST['city']);
		}
		
		
		//validate telephone
		if (empty($_POST['telephone'])) {
			$telErr = "Field required";
		} else if(is_int($_POST['telephone']) == False){
			$telErr = "Enter a valid telephone number";
		} else {
			$telephone = test_input($_POST['telephone']);
		}
		
		
		//validate mobile
		if (empty($_POST['mobile'])) {
			$mobileErr = "Field required";
		} else if(is_int($_POST['telephone']) == False){
			$mobileErr = "Enter a valid mobile number";
		} else if(strlen((string) $_POST['mobile']) != 10) {
			$mobileErr = "Mobile number must be 10 digits";
		} else {
			$mobile = test_input($_POST['mobile']);
		}
		
		

		//sql statement
		$sql = "insert into User values ('$username', '$password', '$fname', '$lastname', '$add1', 
		'$add2', '$city', '$telephone', '$mobile');";
		
		//query to database $db
		$result = mysqli_query($db, $sql);
		
		//check if sql statement has been run
		if($result === false) {
			printf ("error: %s:", mysqli_error($db));
		} else {
			echo "success";
		}
	}
	
	/*This function removes unwanted characters from the user input.
	Also protects against Cross side scripting using htmlspecialchars */
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
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