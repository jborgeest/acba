<?php
/*
 * Model defines our php - mysql underpinnings
 */
class Model {
	
	protected static $conn;
	public static function conn(){
		self::$conn = new mysqli('localhost', 'auschina', 'auschina', 'auschina');
		return self::$conn;
	}
	public static function close(){
		self::$conn->close();
	}
	
	
	public function __construct(){
	}
	
	
	
	
	
}
