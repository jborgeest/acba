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

		<section class="about-staff">
			<div class="container grid-parent clearfix">
			<?php 
			$staffKeys = array('staff1','staff2','staff3','staff4','staff5');
			foreach ($staffKeys as $staffKey){?>
				<div class="grid-20 col-center"/>
					<div class="col-center-image">
						<img src="/img/placeholder.png"/>
					</div>
					<h2><?php heading($staffKey) ?></h2>
					<?php content($staffKey) ?>
				</div>
			<?php } ?>
			</div>
			<hr class="about-gallery">
		</section>

        <?php include 'inc/footer.inc.php';