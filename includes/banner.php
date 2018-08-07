<div id="banner">
	<div class="wrapper">
		<?php $currentpage = $_SERVER['REQUEST_URI']; 
		list ($a, $b, $c) = preg_split('[/]', $currentpage );
		?>
		<?php 
		if($c == "index.php"){?>
		<iframe src="https://www.youtube.com/embed/M_lIi1hb6WU?rel=0&vq=hd720&autoplay=0" style="border:none; height:315px; width:100%; max-width:100%;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<?php } else if($c == "about_us.php"){?>
		<iframe src="https://www.youtube.com/embed/0HKfjsM2hSw?rel=0&vq=hd720&autoplay=0" style="border:none; height:315px; width:100%; max-width:100%;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<?php } else if($c == "community.php"){?>
		<iframe src="https://www.youtube.com/embed/8JnfIa84TnU?rel=0&vq=hd720&autoplay=0" style="border:none; height:315px; width:100%; max-width:100%;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<?php } else if($c == "contact_us.php"){?>
		<iframe src="https://www.youtube.com/embed/R_q__oa_eNA?rel=0&vq=hd720&autoplay=0" style="border:none; height:315px; width:100%; max-width:100%;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<?php } else {
			echo "no out";
		}?>
	</div>
</div>