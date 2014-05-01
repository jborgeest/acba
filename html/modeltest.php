<?php
error_reporting(E_ALL);
header('content-type:text/plain');
require '../model/page.class.php';

$page = new Page('home');
$content1 = $page->getContent('a');
$content2 = $page->getContent('aboutourwork');
var_dump($content1, $content2);