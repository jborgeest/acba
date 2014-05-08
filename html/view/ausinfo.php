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

		<hr class="container" />
		<section class="h2-strong">
		
			<div class="container grid-parent clearfix">
				
				<hr class="container" />
				
				<div class="grid-20">
				
					<img class="wide-img" src="img/photo/beach.jpg"/>
					<hr/>
					<h1 class=""><?php heading('info') ?></h1>
					
				</div>
				
				<div class="grid-80">
				
					<!-- <div class="spaced">
						<img class="img-center" src="img/banner/ausinfo.jpg" />
					</div> -->
					
					<p><?php content('info') ?></p>
					
					<hr/>
				
					<h2><?php heading('government') ?></h2>
					<?php content('government') ?>
						
					<hr/>
					
					<h2><?php heading('tourism') ?></h2>
					<?php content('tourism') ?>
					
					<a href="http://www.tourism.australia.com/">Tourism Australia</a>
						
					<hr/>
					
					<div class="">
						<h2><?php heading('visa') ?></h2>
						<?php content('visa') ?>				
					</div>
					
					<a href="http://www.immi.gov.au/Work/Pages/Work.aspx">Department of Immigration and Border Protection</a>			

					<hr/>
					
					<h2><?php heading('population') ?></h2>
					<?php content('population') ?>
					
					<a href="http://www.abs.gov.au/">Australian Bureau of Statistics</a>
					
					<hr/>
					
					<h2><?php heading('education') ?></h2>
					<?php content('education') ?>
					
					<a href="https://education.gov.au/">Department of Education</a>
					
					<hr/>
					
					<h2><?php heading('economy') ?></h2>
					<?php content('economy') ?>
					
					<a href="http://wits.worldbank.org/CountryProfile/Country/AUS/Year/2012/Summary">World Bank Trade Summary Australia 2012</a>
					
					<hr/>
					
					<h2><?php heading('seasons') ?></h2>
					<?php content('seasons') ?>
					
					<a href="http://www.bom.gov.au/">Bureau of Meteorology</a>

				</div>
					
			</div>
			
		</section>
		
		<hr class="container" />

        <?php include 'inc/footer.inc.php';