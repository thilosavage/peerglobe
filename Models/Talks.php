<?php 
class Talks extends Model {

	protected $table = 'talks';
	protected $id_field = 'talk_id';
	protected $name_field = 'talk_id';
	protected $order_by = 'time DESC';
	
	var $talks = array();
	
	function getTalks($task_id) {
	
		$usersObj = new Users;

		$this->load(array('task_id'=>$task_id));
		
		foreach($this->rows as $k => $talk) {
			$usersObj->load($talk['user_id']);
			$this->talks[$k] = $talk;
			
			if ($talk['user_id']) {
				$this->talks[$k]['handle'] = $usersObj->row['email'];
			}
			else {
				$this->talks[$k]['handle'] = 'Anon';
			}
		}

		return $this->talks;
	
	}
	
}
?>