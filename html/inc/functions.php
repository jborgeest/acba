<?php
// Function which gives us the configs
function getConfig(){
	require_once '../model/model.class.php';
	$config = new StdClass();
	if ($res = Model::conn()->query("select `key`, `value` from config;")){
		while ($row = $res->fetch_object()){
			$config->{$row->key} = $row->value;
		}
	}
	return $config;
}



// Echo-ers
function baseurl(){
	global $base_url;
	echo $base_url;
}
function heading($contentId){
	global $page;
	echo $page->getContent($contentId, 'heading');
}
function content($contentId){
	global $page;
	echo $page->getContent($contentId, 'content');
}