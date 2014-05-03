<?php
/* ===== CONFIGURATIONS ======= */
require_once '../model/page.class.php';

// Router 
$REQUEST_LINK = !empty($_GET['page']) ? $_GET['page'] : 'home';
$PAGE_ID = Page::resolvePageId($REQUEST_LINK);


$is_home = $PAGE_ID == 'home';

/* ============================ */


// # Go
$page = new Page($PAGE_ID);
include 'view/'.$page->filename();