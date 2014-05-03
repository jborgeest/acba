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
				<h1 class="header-logo-img"><img src="/img/logo.png" alt="Auschina Business Association"/></h1>
			</hgroup>
			
			<nav class="header-nav">
				<ul class="header-nav-ul">
					<li class="header-nav-li"><a class="header-nav-link" href="/1">Menu item 1</a></li>
					<li class="header-nav-li"><a class="header-nav-link" href="/2">Menu item 2</a></li>
					<li class="header-nav-li"><a class="header-nav-link" href="/3">Menu item 3</a></li>
					<li class="header-nav-li"><a class="header-nav-link" href="/4">Menu item 4</a></li>
				</ul>
			</nav>
		</div>
	</header>