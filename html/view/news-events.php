<?php
// Welcome to the TEMPLATE PAGE of 中澳商会 网店

// This project should use:

// unsemantic.com  for grid layout
// flatuicolors.com  for colours
// HTML5 BP for boilerplate and x-browser compat
		include 'inc/header.inc.php'; ?>

		<section class="tier-blue">
			<div class="container grid-parent clearfix">
				<h1><?php heading('events') ?></h1>
				<?php echo content('events') ?>
			</div>
		</section>
		
		<section class="tier-last">
			<div class="container grid-parent clearfix">
				<aside class="grid-20">
				<?php sidebar('') ?>
				</aside>
				<div class="grid-80">
					<h2><?php heading('') ?></h2>
					<?php content('') ?>
				</div>				
			</div>
		</section>

        <?php include 'inc/footer.inc.php';