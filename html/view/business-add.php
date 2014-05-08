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
			<div class="container">
				<h1><?php heading('info')?></h1>
				<?php content('info') ?>
			</div>
		</section>
	
        <section class="tier-last">
			<div class="container">
				<h2><?php heading('tba') ?></h2>
				<?php content('tba') ?>
				
				<div class="spaced" style="font-size: 1.5em; display: inline-block; padding: 10px 15px; background: white;">
					<img src="img/icons/mail.png" class="inline-icon"/> <a href="mailto:<?php config('contact_email') ?>"><?php config('contact_email') ?></a>		
				</div>
			</div>
		</section>

        <?php include 'inc/footer.inc.php';