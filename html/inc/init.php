<?php
/* ===== CONFIGURATIONS ======= */

$PAGE_ID = !empty($_GET['page']) ? $_GET['page'] : 'home';


/* ============================ */

require_once '../model/page.class.php';
$page = new Page($PAGE_ID);

include 'view/'.$page->filename();
