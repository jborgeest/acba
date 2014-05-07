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

		<section class="tier-blue">
			<div class="container grid-parent clearfix">
				<div class="grid-100">
					<h1><?php heading('mission') ?></h1>
				</div>
				<div class="grid-15 hide-on-tablet hide-on-mobile">
					<img src="/img/nsw-govt.jpg" class="wide-img"/>
				</div>
				<div class="grid-85">
				<?php echo content('mission') ?>
				</div>
			</div>
		</section>
		
		<section class="tier-last">
			<div class="container grid-parent clearfix">
				<aside class="grid-20">
				<?php sidebar('about') ?>
				</aside>
				<div class="grid-80">
					<h2><?php heading('information') ?></h2>
					<?php content('information') ?>
					
					<h2><?php heading('newbusiness') ?></h2>
					<?php content('newbusiness') ?>
				</div>				
			</div>
		</section>

        <?php include 'inc/footer.inc.php';