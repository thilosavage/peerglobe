<?php 
class Tasks extends Model {

	protected $table = 'tasks';
	protected $id_field = 'task_id';
	protected $name_field = 'task_id';
	protected $order_by = 'time ASC';
	
	var $tasks = array();
	var $task = array();
	
	function getTask($task_id) {
	
		$this->load($task_id);
		$skills_tasksObj = new Skills_tasks;
		$skillsObj = new Skills;
		$usersObj = new Users;	

		$skills_tasksObj->load(array('task_id'=>$this->row['task_id']));
		
		foreach ($skills_tasksObj->rows as $k => $skill_task) {
			$skillsObj->load($skill_task['skill_id']);
			$skillRows[] = array_merge($skills_tasksObj->rows[$k],$skillsObj->row);

		}
		
		$usersObj->load($this->row['creator_id']);
		
		$this->task = $this->row;
		$this->task['creator'] = $usersObj->row['email'];
		$this->task['skills'] = $skillRows;

		return $this->tasks;

	
	}
	
	function getAll() {
	
		$this->load('all');
		$skills_tasksObj = new Skills_tasks;
		$skillsObj = new Skills;
		$usersObj = new Users;
		
		foreach ($this->rows as $k => $task) {
			
			$skills_tasksObj->load(array('task_id'=>$task['task_id']));
			
			foreach ($skills_tasksObj->rows as $k => $skill_task) {
				$skillsObj->load($skill_task['skill_id']);
				$skillRows[] = array_merge($skills_tasksObj->rows[$k],$skillsObj->row);

			}
			
			$usersObj->load($task['creator_id']);
			
			$this->tasks[$k] = $task;
			$this->tasks[$k]['creator'] = $usersObj->row['email'];
			$this->tasks[$k]['skills'] = $skillRows;
			unset($skillRows);
			
		}	
		return $this->tasks;
	}
	
	
}
?>