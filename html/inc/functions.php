<?php
// Language functions
function lang(){
	return !empty($_SESSION['lang']) ? $_SESSION['lang'] : 'en';
}
function checkLanguageChange(){
	// Did anyone try to set the language?
	if (!empty($_GET['lang'])){
		$_SESSION['lang'] =  $_GET['lang'] == 'zh' ? 'zh' : 'en' ;
	}
}


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


// == Echo-ers

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
// Heading Generator (based on page + contentId)
function heading($contentId){
	global $page;
	echo $page->getContent($contentId, 'heading');
}
// Content Generator (based on page + contentId)
function content($contentId, $isSnippet = false){
	global $page;
	if ($isSnippet){
		echo $page->getContent($contentId, 'content');
	}
	elseif (strpos($contentId, '.') === false){
		echo '<div class="content">', nl2br($page->getContent($contentId, 'content')), '</div>';
	}
	else {
		echo '<div class="content">', nl2br(Page::getAnyContent($contentId)), '</div>';
	}
}
function snippet($contentId){
	return content($contentId, true);
}

// Sidebar generator
function sidebar($parentId){
	$menu = Menu::sidebar($parentId);
	if ($menu->heading){
		echo '<h3>', $menu->heading->label(), '</h3>';
		echo '<ul class="sidebar-nav">';
		foreach ($menu->pages as $page){
			echo '<li><a href="'.$page->url().'"> ', $page->label(), '</a></li>';
		}
		echo '</ul>';	
	}
}