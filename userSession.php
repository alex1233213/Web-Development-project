<?php
	session_start();

	require_once "db.php";

	$_SESSION['reservations'] = False;

	if(!isset($_SESSION['username']) ) {
		header('Location: login.php');
	}

?>
