<?php
// Welcome to the homepage of 中澳商会 网店

// This project should use:

// unsemantic.com  for grid layout
// flatuicolors.com  for colours
// HTML5 BP for boilerplate and x-browser compat

// Each page content-block needs to be switchable between English and Chinese
// This functionality is driven by a database table
// The Page() class takes care of this interaction.
		include 'inc/header.inc.php'; ?>
		<section class="about-gallery">
			<div class="container grid-parent clearfix">
				<h1><?php heading('main') ?></h1>
				<aside class="grid-20">
					<?php sidebar('about') ?>
				</aside>
				<div class="grid-parent grid-80 clearfix">
					<figure class="grid-50 about-2c-div"/>
						<img src="/img/photo/i1.jpg" />
						<img src="/img/photo/i2.jpg" />
					</figure>
					<figure class="grid-50 about-2c-div"/>
						<img src="/img/photo/i3.jpg" />
						<img src="/img/photo/i4.jpg" />
					</figure>
				</div>
			</div>
		</section>
		

        <?php include 'inc/footer.inc.php';