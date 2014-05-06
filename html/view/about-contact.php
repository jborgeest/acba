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

		<section class="tier-last">
			<div class="container grid-parent clearfix">
				<div class="grid-25 col-center">
					<div class="col-center-image">
						<img src="img/contact/postal.png"/>
					</div>
					<h2><?php heading('postal') ?></h2>
					<?php content('postal') ?>
				</div>
				<div class="grid-25 col-center">
					<div class="col-center-image">
						<img src="img/contact/email.png"/>
					</div>
					<h2><?php heading('email') ?></h2>
					<?php content('email') ?>
				</div>
				<div class="grid-25 col-center">
					<div class="col-center-image">
						<img src="img/contact/phone.png"/>
					</div>
					<h2><?php heading('phone') ?></h2>
					<?php content('phone') ?>
				</div>
				<div class="grid-25 col-center">
					<div class="col-center-image">
						<img src="img/contact/social.png"/>
					</div>
					<h2><?php heading('social') ?></h2>
					<?php content('social') ?>
				</div>
			</div>
		</section>

        <?php include 'inc/footer.inc.php';