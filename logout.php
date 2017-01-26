<?php
	require "db.php";
$_firstname = $_SESSION['fname'];
session_destroy();
header("location: login.php");


?>