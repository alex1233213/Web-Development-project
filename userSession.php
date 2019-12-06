<?php
	session_start();

	require_once "db.php";

	$_SESSION['reservationPage'] = False;
	

	if(!isset($_SESSION['username']) ) {
		header('Location: login.php');
	}

?>
