<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "musicpedia";

$conn = new mysqli($hostname, $username, $password, $db);

if ($conn->connect_error) {
	die("Bruh moment: " . $conn->connect_error);
}

?>