<?php

	$db = mysqli_connect ('localhost', 'root', '') or die('Error connecting to the database');

	mysqli_select_db($db , "BookShopDb") or die("Error selecting the database");
?>