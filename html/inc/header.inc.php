<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $is_home ? $page->titleBilingual() : $page->title() ?></title>
        <meta name="description" content="Auschina Business Association">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">        
		<link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
	<header <?php echo $is_home ? 'class="home-header"' : '' ?>>
		<div class="container header-container">
			<hgroup>
				<h1 class="header-logo-img-wrapper"><a href="<?php baseurl() ?>"><img src="/img/logo.png" alt="Auschina Business Association"/></a></h1>
			</hgroup>
			<nav class="header-nav">
				<ul class="header-nav-ul header-menu">
					<?php foreach ($nav_menus as $collation => $navMenuGroup){ 	// foreach #1
						$parentNavItem = array_shift($navMenuGroup);	// Grab the first one, we'll use it as the parentnav, remove it from the array.
						?>
					<li class="header-nav-li">
						<a class="header-nav-link" href="<?php echo $parentNavItem->link() ?>"><?php echo $parentNavItem->label() ?></a>
						<ul class="header-sub-menu">
						<?php foreach ($navMenuGroup as $navItem){	// foreach #2 ?>
							<li class="header-nav-li">
								<a class="header-nav-link" href="<?php echo $navItem->link() ?>"><?php echo $navItem->label() ?></a> 
							</li>
						<?php } // end foreach #2 ?>
						</ul>
					<!-- </li> Intentionally removed last li -->
					<?php 
					} // end foreach #1 ?>
				</ul>
			</nav>
			
		</div>
	</header>