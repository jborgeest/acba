<?php
require_once 'model.class.php';
class Page extends Model {
	
	private $pageId;
	private $pageContent;
	
	public function __construct($pageId = null){
		if ($pageId){
			$conn = self::conn();
			if ($res = $conn->query("select * from page_content where page_id = '$pageId';")){
				// $this->pageContent = $res->fetch_all(MYSQLI_ASSOC);
				// 
				// Construct array build by contentId
				//
				$this->pageId = $pageId;
			}
		}
	}
	
	public function getContent($contentId){
		return 
	}
	
}