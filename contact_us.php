<?php $title = " | Contact Us";?>
<?php require('connection.php'); ?>
<?php 
if (isset($_POST['login'])){
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	
	$check = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
	$sql = mysqli_query($con,$check) or die(mysqli_error());
	if (mysqli_num_rows($sql) >= 1){
		while($r = mysqli_fetch_assoc($sql)){
			$_SESSION['id'] = $r['user_id'];
			echo "<script>alert('You are now logged in!')</script>";
		}
	}else{
		echo "<script>alert('You entered Wrong credentials. Please try again.')</script>";
	}
}
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/nav.php'; ?>
<?php include 'includes/banner.php'; ?>
	<div class="main">
		<div class="wrapper">
		<main>
		<?php
		
		?>	
			<?php if (!isset($_SESSION['id'])){?>
			<div class="login_form">
			<h2>Login Here</h2>
			<form class="" role="form" method = "POST" action = "">
			  Username:<input type="text" class="form-control" placeholder="Username" name="username">
			  Password:<input type="password" class="form-control" placeholder="Password" name="password">
			  <button type="submit" class="btn btn-success" name="login">Login</button>
			</form>
			</div>
			<?php } ?>
		</main>
		</div>
	</div>
<?php include 'includes/footer.php';?>
	