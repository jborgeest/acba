<?php
require_once 'model.class.php';
class Page extends Model {

	public static function resolvePageId($requestLink){
		if ($res = self::conn()->query("select id from page where url_name = '$requestLink';")){
			return $res->fetch_object()->id;
		}
		return 'home';
	}
	
	public static function getPage($pageId, $language = 'en'){
		return new Page($pageId, $language);
	}
	
	public static function getAnyContent($pageContentId, $language = 'en'){
		$col = "content_$language";
		if ($res = self::conn()->query("select $col from pagecontent where id = '$pageContentId';")){
			return $res->fetch_object()->$col;
		}
		return '';
	}
	
	private $pageId;
	private $pageHead = array();	// assoc
	private $pageContent = array();		// assoc
	
	public function __construct($pageId = null, $language = 'en'){
		$this->lang = $language == 'zh' ? 'zh' : 'en';
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
	
	public function getContent($id = false, $key = 'content'){
		if ($id){
			$langKey = $key.'_'.$this->lang;
			return $this->getContentById($id)->$langKey;
		}
		return '';
	}
	
	protected function getContentById($id){
		$this->reloadContent();
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
	public function parentId(){
		return $this->pageHead->parent_id;
	}
	public function link(){
		return $this->url();
	}
	public function url(){
		return $this->pageHead->url_name;
	}
	public function filename(){
		return $this->pageHead->filename;
	}
	public function title(){
		return $this->pageHead->{'title_'.$this->lang};
	}
	public function titleBilingual(){
		return $this->pageHead->title_zh . ' | ' . $this->pageHead->title_en;
	}
	public function description(){
		return $this->pageHead->{'description_'.$this->lang};
	}
	public function label(){
		return $this->pageHead->{'label_'.$this->lang};
	}
	
}
