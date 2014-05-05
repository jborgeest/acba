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
function config($key){
	global $config;
	if (property_exists($config, $key)){
		echo $config->$key;
	}
}
function baseurl(){
	global $config;
	echo $config->base_url;
}
function heading($contentId){
	global $page;
	echo $page->getContent($contentId, 'heading');
}
function content($contentId){
	global $page;
	if (strpos($contentId, '.') === false){
		echo '<div class="content">', nl2br($page->getContent($contentId, 'content')), '</div>';
	}
	else {
		echo '<div class="content">', nl2br(Page::getAnyContent($contentId)), '</div>';
	}
}

function sidebar($parentId){
	$menu = Menu::sidebar($parentId);
	echo '<h3>', $menu->heading, '</h3>';
	echo '<ul class="sidebar-nav">';
	foreach ($menu->pages as $page){
		echo '<li><a href="'.$page->url().'"> ', $page->label(), '</a></li>';
	}
	echo '</ul>';
}