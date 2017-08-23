<!DOCTYPE html>
<html>
<head>
	<title>aShop by iVictorious</title>
</head>

<body>
	<nav id="navbar">
		<div id="navbar-title">
			<a>aShop by iVictorious</a>
		</div>
		<div id="navbar-2">
			<a class="navbar-items">Services</a>
			<a lass="navbar-items">Whatever</a>
			<a class="navbar-items">About</a>
		</div>
	</nav>
	<div id="container-main">

		<div id="services">
			<?php
				for ( $i = 0; $i < 13; $i++) {
			?>
				<div class="service-item-box">
					<div class="service-item">
						<h3 class="item-name">Item <?php echo $i; ?></h3>
					</div>
				</div>

			<?php } ?>
		</div>

		<div id="Whatever">
			

		</div>
		
		<div id="About">
			

		</div>


	</div>

</body>
<link rel="stylesheet" type="text/css" href="./public/css/styles.css">
</html>