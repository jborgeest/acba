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
				<h1><?php heading('assoc') ?></h1>
			</div>
		</section>		
		
        <section>
			<div class="container grid-parent clearfix">
				<aside class="grid-20">
				<?php sidebar('business') ?>
				</aside>
				<div class="grid-80">				
					<?php content('assoc') ?>
					
					<?php foreach (Business::retrieveAll() as $bus){ ?>
					<div class="spaced">
						<?php echo $bus->nameBilingual() ?>
					</div>
					<?php } ?>
				</div>
			</div>
			
		</section>
		

        <?php include 'inc/footer.inc.php';