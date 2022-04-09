<?php
	require_once 'connection.php';

	session_start();

	if(!isset($_SESSION['loggedin'])) {
		header("location: ../login.php");
	}
?>