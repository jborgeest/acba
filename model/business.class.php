<?php
require_once 'model.class.php';
class Business extends Model {
	
	public static function retrieveAll($lang = 'en'){
		$businesses = array();
		if ($res = self::conn()->query("select * from business;")){
			while ($row = $res->fetch_object()){
				$bus = new Business($row->id, $lang);
				$businesses[] = $bus;
			}
		}
		return $businesses;
	}
	
	private $id;
	private $data;
	
	public function __construct($id, $language = 'en'){
		$this->lang = $language == 'zh' ? 'zh' : 'en';
		$this->id = $id;
		if ($res = self::conn()->query("select * from business where id='$id';")){
			$this->data = $res->fetch_object();
		}
	}
	
	public function load($data){
		$this->data = $data;
	}
	
	public function name(){
		return $this->data->{'name_'.$this->lang};
	}
	
	public function nameBilingual(){
		return $this->data->name_zh.'<br><span>'.$this->data->name_en.'</span>';
	}
	
}