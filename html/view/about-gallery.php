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
		<section class="about-gallery">
			<div class="container grid-parent clearfix">
			
			<aside class="grid-20">
				<h1><?php heading('main') ?></h1>
					<?php sidebar('about') ?>
				</aside>
				
				<div class="grid-parent grid-80 clearfix gallery">
				
					<div class="spaced">
						<h1><?php heading('syd') ?></h1>
						<hr/>
						<figure class="grid-50"/>
							<a href="img/photo/syd/1.jpg" data-lightbox="gallery-sydney" data-title="The Chinese Gardens in Darling Harbour, Sydney, NSW"><img src="img/photo/thumb/syd/1.jpg" alt="image-1" /></a>
							<a href="img/photo/syd/2.jpg" data-lightbox="gallery-sydney" data-title="Sydney Botanical Gardens"><img src="img/photo/thumb/syd/2.jpg" alt="image-2" /></a>
							<a href="img/photo/syd/3.jpg" data-lightbox="gallery-sydney" data-title="An ANZAC Memorial in Martin Place, Sydney, NSW"><img src="img/photo/thumb/syd/3.jpg" alt="image-3" /></a>
						</figure>
						<figure class="grid-50"/>
							<a href="img/photo/syd/4.jpg" data-lightbox="gallery-sydney" data-title="The Rocks, a popular inner city stretch of Sydney with several restaurants and bars"><img src="img/photo/thumb/syd/4.jpg" alt="image-4" /></a>
							<a href="img/photo/syd/5.jpg" data-lightbox="gallery-sydney" data-title="The Opera House in Sydney, NSW, during the Vivid Lights Festival"><img src="img/photo/thumb/syd/5.jpg" alt="image-5" /></a>
							<a href="img/photo/syd/6.jpg" data-lightbox="gallery-sydney" data-title="Watsons Bay"><img src="img/photo/thumb/syd/6.jpg" alt="image-6" /></a>
						</figure>
						<hr/>
					</div>
					
					<div class="spaced">
						<h1><?php heading('mel') ?></h1>
						<hr/>
						<figure class="grid-50"/>
							<a href="img/photo/mel/1.jpg" data-lightbox="gallery-melbourne" data-title="Melbourne, VIC"><img src="img/photo/thumb/mel/1.jpg" alt="image-1" /></a>
							<a href="img/photo/mel/2.jpg" data-lightbox="gallery-melbourne" data-title="Melbourne, VIC"><img src="img/photo/thumb/mel/2.jpg" alt="image-2" /></a>
							<a href="img/photo/mel/3.jpg" data-lightbox="gallery-melbourne" data-title="Melbourne, VIC"><img src="img/photo/thumb/mel/3.jpg" alt="image-3" /></a>
						</figure>
						<figure class="grid-50"/>
							<a href="img/photo/mel/4.jpg" data-lightbox="gallery-melbourne" data-title="Melbourne, VIC"><img src="img/photo/thumb/mel/4.jpg" alt="image-4" /></a>
							<a href="img/photo/mel/5.jpg" data-lightbox="gallery-melbourne" data-title="Melbourne, VIC"><img src="img/photo/thumb/mel/5.jpg" alt="image-5" /></a>
							<a href="img/photo/mel/6.jpg" data-lightbox="gallery-melbourne" data-title="Melbourne, VIC"><img src="img/photo/thumb/mel/6.jpg" alt="image-6" /></a>
						</figure>
						<hr/>
					</div>
					
				</div>
			</div>
		</section>
		

        <?php include 'inc/footer.inc.php';