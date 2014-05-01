<?php
/* ===== CONFIGURATIONS ======= */
$PAGE_ID = 'businessadd';
/* ============================ */

require_once '../model/page.class.php';
$page = new Page($PAGE_ID);

include 'view/'.$page->filename();