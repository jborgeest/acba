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
					<img class="img-center" src="img/banner/ausinfo.jpg" />
				</div>
				
				<?php content('info') ?>
				
				<hr/>
				
				<h2><?php heading('government') ?></h2>
				<?php content('government') ?>
					
				<hr/>
				
				<h2><?php heading('tourism') ?></h2>
				<?php content('tourism') ?>
					
				<hr/>
				
				<div class="">
					<h2><?php heading('visa') ?></h2>
					<?php content('visa') ?>				
				</div>
				
				<a href="http://www.immi.gov.au/Work/Pages/Work.aspx">Department of Immigration and Border Protection</a>			

				
				<h2><?php heading('population') ?></h2>
				<?php content('population') ?>
				
				<hr/>
				
				<h2><?php heading('education') ?></h2>
				<?php content('education') ?>
				
				<hr/>
				
				<h2><?php heading('economy') ?></h2>
				<?php content('economy') ?>
				
				<hr/>
				
				<h2><?php heading('seasons') ?></h2>
				<?php content('seasons') ?>
				
				<hr/>

				
			</div>
		</section>

        <?php include 'inc/footer.inc.php';