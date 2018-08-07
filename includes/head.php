<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--title>From Scratch<!?php if (!empty($title)) { echo $title; }?></title-->
	<title>From Scratch<?php $title = (empty($title)) ? "": $title; echo $title; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/media.css" type="text/css">
</head>
	<body>
		<div class="clearfix">
			<div class="wrapper">
				<h1>Start Project</h1>
				<?php
				echo 'You are currently running PHP version: ' . phpversion();
				?>
			<?php if (isset($_SESSION['id'])){?>
			<div class="logout_button">
				<a href="logout.php">Logout</a>
			</div>	
			<?php } ?>
			</div>	