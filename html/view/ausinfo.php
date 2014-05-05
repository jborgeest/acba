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

		<section>
			<div class="container">
				<h1><?php heading('info') ?></h1>
				
				<div class="spaced">
					<img class="img-center" src="img/4.png" />
				</div>
				
				<?php content('info') ?>
				
				<hr/>
				
				<h2><?php heading('tourism') ?></h2>
				<?php content('tourism') ?>
				
				<hr/>
				
				<h2><?php heading('seasons') ?></h2>
				<?php content('seasons') ?>
			
			</div>
		</section>

        <?php include 'inc/footer.inc.php';