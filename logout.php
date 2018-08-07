<?php 
	error_reporting(E_ALL ^ E_DEPRECATED);
	require("connection.php");
	session_destroy();
	echo "<script>alert('You are now logged out.');</script>";
	echo "<script>window.location = 'index.php';</script>";
?>