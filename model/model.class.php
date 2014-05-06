<?php
/*
 * Model defines our php - mysql underpinnings
 */
class Model {
	
	protected static $conn;
	protected static $lang;
	
	public static function conn(){
		self::$conn = new mysqli('localhost', 'auschina', 'auschina', 'auschina');
		self::$conn->set_charset("utf8");
		return self::$conn;
	}
	public static function close(){
		self::$conn->close();
	}
	
	public static function setLang($lang = 'en'){
		self::$lang = $lang == 'zh' ? 'zh' : 'en';
	}
	public static function lang(){
		return self::$lang;
	}
	
}
