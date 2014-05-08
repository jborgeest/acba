<?php
// Welcome to the TEMPLATE PAGE of 中澳商会 网店

// This project should use:

// unsemantic.com  for grid layout
// flatuicolors.com  for colours
// HTML5 BP for boilerplate and x-browser compat
		include 'inc/header.inc.php'; ?>

		<section class="tier-blue">
			<div class="container grid-parent clearfix">
				<h1><?php heading('immi') ?></h1>
				<?php echo content('immi') ?>
			</div>
		</section>
		
		<section>
			<div class="container grid-parent clearfix">
				<aside class="grid-20">
				<?php sidebar('ausinfo') ?>
				</aside>
				<div class="grid-80">
					<img src="img/visa.jpg"/>

					<h2><?php heading('visaneed') ?></h2>
					<?php content('visaneed') ?>
				</div>
			</div>
		</section>
					
		<section class="tier-white">
			<div class="container grid-parent clearfix">
				<div class="push-20 grid-80">
					<h2>Which Visa do I need to visit Australia for business purposes?</h2>
					<div class="content">
						<table class="content-table">
							<tbody>
								<tr>
									<td class="ausinfo-visa-name"><?php heading('600') ?></td>
									<td><?php content('600') ?></td>
									<td>AUD$130 &mdash; $335</td>
								</tr>
								<tr>
									<td class="ausinfo-visa-name"><?php heading('601') ?></td>
									<td><?php content('601') ?></td>
									<td>AUD$20</td>
								</tr>
								<tr>
									<td class="ausinfo-visa-name"><?php heading('651') ?></td>
									<td><?php content('651') ?></td>
									<td>FREE</td>
								</tr>
							</tbody>
						</table>
						
						<?php content('visa-required') ?>
					</div>
				</div>
			</div>
		</section>	
		
		<section class="tier-last">
			<div class="container grid-parent clearfix">
				<div class="push-20 grid-80">
					<h2><?php heading('visa-pay') ?></h2>
					<?php content('visa-pay') ?>
					
					<h2><?php heading('visa-transit') ?></h2>
					<?php content('visa-transit') ?>
										
				</div>				
			</div>
		</section>

        <?php include 'inc/footer.inc.php';