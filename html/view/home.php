<?php
// Welcome to the homepage of 中澳商会 网店

// This project should use:

// unsemantic.com  for grid layout
// flatuicolors.com  for colours
// HTML5 BP for boilerplate and x-browser compat

// Each page content-block needs to be switchable between English and Chinese
// This functionality is driven by a database table
// The Page() class takes care of this interaction.

include 'inc/header.inc.php';
		?>
		
		<section class="banner">
			<img class="banner-image" src="/img/banner/sydney-landscape.jpg" />
		</section>
		
		<section class="home-tier-blue">
			<div class="container grid-parent">
				<div class="grid-50">
					<h2><img src="/img/icons/aus.png" /> <?php heading('about') ?></h2>
					<?php content('about') ?>
					<a href="#">Read More &raquo;</a>
				</div>
				<div class="grid-50">
					<h2><img src="/img/icons/link.png" /></h2>
					<?php content('links') ?>
				</div>
			</div>
		</section>
		
		<section class="home-tier-3">
			<div class="container padding-b">
				<h1><img src="img/icons/handshake.png" /></h1>
			</div>
			<div class="container grid-parent padding-a">
				<div class="grid-33 about-2c-div">
					<img src="img/logo/tinjianbinhai.jpg"/>
				</div>
				<div class="grid-33 about-2c-div">
					<img src="img/logo/jinnaneda.gif"/>
					
				</div>
				<div class="grid-33 about-2c-div">
					
				</div>
			</div>
			
		</section>
		
		<section class="home-tier-4">
			<h2 class="container">LOREM IPSUM</h2>
			<div class="container">
				<img class="image4" src="/img/4.png" />Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
			</div>
		</section>
		
		
		<?php include 'inc/footer.inc.php';