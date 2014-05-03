<?php
require_once 'model.class.php';
class Menu extends Model {
	
	public static function load(){
		$menuCollations = array();
		if ($res = self::conn()->query("select distinct collation from menuentry;")){
			while ($row = $res->fetch_object()){
				$menuCollations[] = $row->collation;
			}
		}
		foreach ($menuCollations as $menuCollation){
			if ($res = self::conn()->query("select me.*, p.url_name link from menuentry me left join pages p on me.linked_page = p.id where collation = '$menuCollation' order by `order` asc;")){
				while ($row = $res->fetch_object()){
					$menu = new Menu($row->id);
					$menu->load($row);
				}
			}
		}
	}
	private $id;
	private $data;
	
	public function __construct($id){
		$this->id = $id;
	}
	
	public function load($data){
		$this->data = $data;
	}
	
	public function link(){
		return $this->data->link
	}
	
	public function labels(){
		return ( object ) array( 
			'zh' => $this->data->label_zh,
			'en' => $this->data->label_en
		);
	}
	
}