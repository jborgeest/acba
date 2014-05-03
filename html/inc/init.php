<?php
/* ===== CONFIGURATIONS ======= */
require_once '../model/page.class.php';
require_once '../model/menu.class.php';

// Router 
$REQUEST_LINK = !empty($_GET['page']) ? $_GET['page'] : '';
$PAGE_ID = Page::resolvePageId($REQUEST_LINK);

$is_home = $PAGE_ID == 'home';
$nav_menus = Menu::generate();

/* ============================ */

// echo '<pre>';
// foreach ($menus as $collation => $submenus){
	// echo "$collation has: ";
	// foreach ($submenus as $submenu){
		// echo "{$submenu->label()}[{$submenu->link()}], ";
	// }
	// echo PHP_EOL;
// }
// echo '</pre>';


// # Go
$page = new Page($PAGE_ID);
include 'view/'.$page->filename();