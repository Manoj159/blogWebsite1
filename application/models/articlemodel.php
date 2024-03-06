<?php 
class articlemodel extends CI_Model{
	function addart($new_article){
		$this->db->insert('articles',$new_article);
	}
}
?>