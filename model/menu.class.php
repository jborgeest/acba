<?php
require_once 'model.class.php';
class Menu extends Model {
	
	public static function generate(){
		$menuCollations = array();
		if ($res = self::conn()->query("select distinct collation from menuentry;")){
			while ($row = $res->fetch_object()){
				$menuCollations[] = $row->collation;
			}
		}
		$menus = array();
		foreach ($menuCollations as $menuCollation){
			if ($res = self::conn()->query("select me.*, p.url_name link from menuentry me left join page p on me.linked_page = p.id where collation = '$menuCollation' order by `order` asc;")){
				while ($row = $res->fetch_object()){
					$menuId = $row->collation.'.'.$row->linked_page;
					$menu = new Menu($menuId);
					$menu->load($row);
					$menus[$menuCollation][] = $menu;
				}
			}
		}
		return $menus;
	}
	
	private $id;
	private $data;
	
	public function __construct($id, $language = 'en'){
		$this->lang = $language == 'zh' ? 'zh' : 'en';
		$this->id = $id;
	}
	
	public function load($data){
		$this->data = $data;
	}
	
	public function link(){
		return $this->data->link;
	}
	
	public function label(){
		return $this->data->{'label_'.$this->lang};
	}
	
}