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

<div id="sandm">
<div id="menu">
	<h3>some text</h3>
</div>
		<div id="services">
			<?php
				for ( $i = 0; $i < 13; $i++) {
			?>
				<div class="service-item-box"><a>
					<div class="service-item">
						<h3 class="item-name">Account <?php echo $i; ?></h3>
						<h2 class="price">Price: <?php echo $i.$i.$i.'€'; ?></h2>
					</a></div>
				</div>

			<?php } ?>
		</div>
</div>
		<div id="whatever">
			

		</div>
		
		<div id="about">
			

		</div>


	</div>

</body>
<link rel="stylesheet" type="text/css" href="./public/css/styles.css">
</html>