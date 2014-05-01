<?php
// Welcome to the homepage of 中澳商会 网店

// This project should use:

// unsemantic.com  for grid layout
// flatuicolors.com  for colours
// HTML5 BP for boilerplate and x-browser compat

// Each page content-block needs to be switchable between English and Chinese
// This functionality is driven by a database table
// The Page() class takes care of this interaction.
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Auschina Business Association</title>
        <meta name="description" content="Auschina Business Association">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">        
		<link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
	
		<?php include 'inc/header.inc.php'; ?>
		
		
		<section class="home-tier-1">
			<img src="/img/tierbg.jpg" />
		</section>
		
		<section class="home-tier-2">
		
			<div class="grid-50 home-tier-2"><img src="/img/icon/aus.png" /></div>
			<div class="grid-50 home-tier-2"><img src="/img/icon/link.png" /></div>
			
			<div class="grid-50 home-tier-2">about our work</div>
			<div class="grid-50 home-tier-2">
				<ul>
					<li>|</li>
					<li>|</li>
					<li>|</li>
				</ul>
			</div>
			<div class="grid-50 home-tier-2"><a href="/ourwork">Read More >> </a></div>
			<div class="grid-50 home-tier-2">a</div>
			
		</section>
		
		<section class="home-tier">3 partners of acba</section>
		
		<section class="home-tier">mugshot of president and then message from the president</section>
		
		
		<?php include 'inc/footer.inc.php'; ?>
		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
