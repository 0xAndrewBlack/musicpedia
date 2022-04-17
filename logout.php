<?php
include_once "classes/Felhasznalo.php";
$user=null;
session_start();
session_unset();
session_destroy();

usleep(5000);
header("Location: login.php");
?>
