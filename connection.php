<?php 
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con = mysqli_connect("localhost","root","","from_scratch") or die(mysqli_error());
	session_start();
?>