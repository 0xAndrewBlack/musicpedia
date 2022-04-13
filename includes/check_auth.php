<?php
	require_once 'connection.php';

	session_start();

	if(!isset($_SESSION['loggedin'])) {
		if (!(strpos($_SERVER['REQUEST_URI'], '/login.php'))) {
			header("location: login.php");
		}
	} else {
		if ((strpos($_SERVER['REQUEST_URI'], '/login.php')) || (strpos($_SERVER['REQUEST_URI'], '/register.php'))) {
			header("location: index.php");
		}
	}
?>