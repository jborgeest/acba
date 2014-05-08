<?php
// Welcome to the homepage of 中澳商会 网店

// This project should use:

// unsemantic.com  for grid layout
// flatuicolors.com  for colours
// HTML5 BP for boilerplate and x-browser compat

// Each page content-block needs to be switchable between English and Chinese
// This functionality is driven by a database table
// The Page() class takes care of this interaction.

include 'inc/header.inc.php';
		?>
		
		<section class="banner">
			<!-- <div class="">
				<div class="movie-caption-text">Welcome to Auschina Business Association, Inc.</div>
			</div> -->
			<div class="banner-inner">
				<div class="cycle-slideshow"
				data-cycle-fx="fade"
				data-cycle-timeout="4000"
				data-cycle-pause-on-hover="false"
				data-cycle-speed="500"
				data-cycle-overlay=".movie-caption .cycle-overlay"
				data-cycle-overlay-template="<div><h2>{{title}}</h2><div>{{desc}}</div>"
				>
					<div class="container">
						<div class="movie-caption">
							<div class="cycle-overlay"></div>
						</div>
					</div>
					<img class="banner-image" src="/img/banner/home/canberra.jpg" data-cycle-title="Canberra" data-cycle-desc="Australia's National Capital" />
					<img class="banner-image" src="/img/banner/home/barangaroo.jpg" data-cycle-title="Barangaroo, Sydney" data-cycle-desc="The site of Sydney's second casino." />
					<img class="banner-image" src="/img/banner/home/goldcoast.jpg" data-cycle-title="Gold Coast" data-cycle-desc="High growth lifestyle investment" />
					<img class="banner-image" src="/img/banner/home/sydney-landscape.jpg" data-cycle-title="Sydney" data-cycle-desc="Australia's Business Capital" />
					<img class="banner-image" src="/img/banner/home/shanghai2.jpg" data-cycle-title="Shanghai" data-cycle-desc="Asian Trade Capital" />
				</div>			
			</div>
		</section>
		
		<section class="tier-blue home-tier-first">
			<div class="container grid-parent clearfix">
				<div class="grid-33">
					<h2><img src="/img/icons/aus.png" /> <?php heading('about') ?></h2>
					<?php content('about') ?>
					<div class="spaced">
						<a href="about"><?php snippet('readmore') ?> &raquo;</a>
					</div>
				</div>
				<div class="grid-66 home-connections">
					<h2><img src="/img/icons/link.png" /> <?php heading('links') ?></h2>
					<?php foreach (Business::retrieve(4) as $bus){ ?>
						<div class="business-tag">
							<a href="#"><?php echo $bus->nameBilingual() ?></a>
						</div>
					<?php } ?>
				</div>
			</div>
		</section>
		
		<section class="home-tier-partners">
			<div class="container padding-b">
				<h1><img src="img/icons/handshake.png" /> <?php heading('partners') ?></h1>
			</div>
			<div class="container grid-parent clearfix">
				<div class="grid-33">
					<img class="home-partner-logo" src="img/logo/tinjianbinhai.jpg"/>
				</div>
				<div class="grid-33">
					<img class="home-partner-logo" src="img/logo/jinnaneda.gif"/>
				</div>
				<div class="grid-33">
					<img class="home-partner-logo" src="img/logo/sagovt.jpg"/>
				</div>
			</div>
			
		</section>
		
		<section class="tier-red tier-last">
			<div class="container grid-parent clearfix">
				<div class="grid-100">
					<h2><?php heading('president') ?></h2>
				</div>
				<div class="grid-15 hide-on-tablet hide-on-mobile">
					<img class="wide-img" src="/img/placeholder-profile.jpg" />
				</div>
				<div class="grid-85">
					<?php content('president') ?>
					<div class="spaced">
						<a href="about"><?php snippet('readmore') ?> &raquo;</a>
					</div>
				</div>
			</div>
		</section>
		
		
		<?php include 'inc/footer.inc.php';