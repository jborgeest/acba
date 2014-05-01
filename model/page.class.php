<?php
require_once 'model.class.php';
class Page extends Model {
	
	private $pageId;
	private $pageHead = array();	// assoc
	private $pageContent = array();		// assoc
	
	public function __construct($pageId = null){
		if ($pageId){
			$this->pageId = $pageId;
			if ($res = self::conn()->query("select * from page where id = '$pageId';")){
				$this->pageHead = $res->fetch_object();
			}
		}
		else {
			trigger_error('No page ID was defined for this Page', E_USER_WARNING);
		}
	}
	
	public function getHead(){
		return $this->pageHead;
	}
	
	public function getContent($id = false){
		$this->reloadContent();
		if ($id){
			return $this->getContentById($id);
		}
		return $this->pageContent;
	}
	
	protected function getContentById($id){
		$contentFullId = $this->pageId.'.'.$id;
		if (array_key_exists($contentFullId, $this->pageContent)){
			return $this->pageContent[$contentFullId];
		}
		else {
			foreach (array_keys($this->pageContent) as $key){
				if (strpos($key, $contentFullId) === 0){
					return $this->pageContent[$key];
				}
			}
		}
		trigger_error('ACBA: Asked for non-existent content ID', E_USER_WARNING);
	}
	
	public function reloadContent(){
		if (empty($pageContent)){
			if ($res = self::conn()->query("select id, heading_en, heading_zh, content_en, content_zh from pagecontent where id like '{$this->pageId}%'")){
				while ($row = $res->fetch_object()){
					$this->pageContent[$row->id] = $row;
				}
			}
		}		
		return $this->pageContent;
	}
	
	// Settings getters
	public function url(){
		return $this->pageHead->url_name;
	}
	public function filename(){
		return $this->pageHead->filename;
	}
	
}