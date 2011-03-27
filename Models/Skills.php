<?php 
class Skills extends Model {

	protected $table = 'skills';
	protected $id_field = 'skill_id';
	protected $name_field = 'name';
	protected $order_by = 'sort ASC';
	
	
	function getTagMatches($phrase) {
		$this->custom("SELECT * FROM `skills` WHERE name LIKE '".$phrase."%'");
	}
	
}
?>