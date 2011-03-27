<?php 
class Tasks_users extends Model {

	protected $table = 'tasks_users';
	protected $id_field = 'task_user_id';
	protected $name_field = 'task_user_id';
	protected $order_by = 'time ASC';
	
	var $trys = array();
	
	function getTrys($task_id) {
	
		$this->load(array('task_id'=>$task_id));
		
		$this->trys = $this->rows;
	
	}
	
}
?>