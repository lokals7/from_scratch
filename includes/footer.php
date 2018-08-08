<footer>
	<div class="footer_nav">
		<div class="wrapper">
		<ul>
			<li><a class="to_act" href="index.php">Home</a></li>
			<li><a class="to_act" href="about_us.php">About Us</a></li>
			<li><a class="to_act" href="community.php">Community</a></li>
			<li><a class="to_act" href="contact_us.php">Contact Us</a></li>
		</ul>
		</div>
	</div>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript">
$(function(){
	$('.footer_nav a, nav a').filter(function(){
		return this.href==location.href
		}).parent().addClass('active').siblings().removeClass('active')
})
</script>
</body>
</html>