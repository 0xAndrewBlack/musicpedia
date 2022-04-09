<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "musicpedia";

$conn = new mysqli($hostname, $username, $password, $db);

if ($conn->connect_error) {
	die("Bruh moment: " . $conn->connect_error);
}

/* try {
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);

	if ($db != null) {
		echo "Sikeres csatlakozás.";
	}

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e) {
	$e->getMessage();
}
 */
?>