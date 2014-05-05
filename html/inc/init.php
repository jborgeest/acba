<?php
/* ===== CONFIGURATIONS ======= */
require_once '../model/page.class.php';
require_once '../model/menu.class.php';
require_once '../model/business.class.php';

// Timezone
date_default_timezone_set(@date_default_timezone_get());	// We guess the timezone

// Router 
$request_link = !empty($_GET['page']) ? $_GET['page'] : '';
$page_id = Page::resolvePageId($request_link);


// Other config constants etc
$config = getConfig();

// 
$is_home = $page_id == 'home';

// Make the nav menus
$nav_menus = Menu::generate();

/* ============================ */

// # Go
$page = new Page($page_id);
include 'view/'.$page->filename();