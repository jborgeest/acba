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

		<section class="about-staff tier-last">
			<div class="container grid-parent clearfix">
			<?php 
			$staffKeys = array(
				'staff1'=>'../placeholder.png',
				'staff2'=>'../placeholder.png',
				'staff3'=>'../placeholder.png',
				'staff4'=>'yuxuechun300.jpg',
				'staff5'=>'wolf300.jpg'
			);
			foreach ($staffKeys as $staffKey=>$staffImage){?>
				<div class="grid-20 col-center"/>
					<div class="col-center-image">
						<img src="/img/profile/<?php echo $staffImage ?>"/>
					</div>
					<h2><?php heading($staffKey) ?></h2>
					<small><?php content($staffKey) ?></small>
				</div>
			<?php } ?>
			</div>
			<hr class="container">
			<div class="container grid-parent clearfix">			
				<div class="push-20 grid-60 col-center">
					<h2><?php heading('staffhonorary') ?></h2>
					<?php content('staffhonorary') ?>
				</div>
			</div>
		</section>

        <?php include 'inc/footer.inc.php';