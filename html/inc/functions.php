<?php
function zheading($contentId){
	heading($contentId, 'zh');
}
function zcontent($contentId){
	content($contentId, 'zh');
}
function heading($contentId, $lang = 'en'){
	global $page;
	$lang = 'heading_' . ($lang=='zh' ? 'zh' : 'en');
	echo $page->getContent($contentId)->$lang;
}
function content($contentId, $lang = 'en'){
	global $page;
	$lang = 'content_' . ($lang=='zh' ? 'zh' : 'en');
	echo $page->getContent($contentId)->$lang;
}