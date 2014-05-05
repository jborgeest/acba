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
			if ($res = self::conn()->query("select me.*, p.url_name link from menuentry me left join page p on me.linked_page=p.id where collation='$menuCollation' order by `order` asc;")){
				while ($row = $res->fetch_object()){
					$menu = new Menu($row->collation, $row->linked_page, parent::lang());
					$menus[$menuCollation][] = $menu;
				}
			}
		}
		return $menus;
	}
	
	public static function sidebar($parentId){
		$pages = array();
		$queries = array(
			self::conn()->query("select * from page where id = '$parentId';"),
			self::conn()->query("select * from page where parent_id = '$parentId';")
		);
		
		foreach ($queries as $query){
			if ($query){
				while ($row = $query->fetch_object()){
					$pages[] = new Page($row->id);
				}
			}
		}
		
		return ( object ) array(
			'heading' => ucfirst($parentId),
			'pages' => $pages
		);
		
		
		if ($res = self::conn()->query("select * from page where id = '$parentId';")){
			while ($row = $res->fetch_object()){
				$pages[] = new Page($row->id);
			}
		}
		if ($res = self::conn()->query("select * from page where parentId = '$parentId';")){
			while ($row = $res->fetch_object()){
				$pages[] = new Page($row->id);
			}
		}
		
	}
	
	private $id;
	private $data;
	
	public function __construct($collation, $linked){
		$this->lang = parent::lang();
		$this->id = $collation.'.'.$linked;
		if ($res = self::conn()->query("select me.*, p.url_name link from menuentry me left join page p on me.linked_page = p.id where collation='$collation' and linked_page='$linked';")){
			$this->data = $res->fetch_object();
		}
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