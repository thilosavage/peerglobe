<?php 
class Tasks extends Model {

	protected $table = 'tasks';
	protected $id_field = 'task_id';
	protected $name_field = 'task_id';
	protected $order_by = 'time ASC';
	
	var $tasks = array();
	var $task = array();
	
	function getTask($task_id) {
		$this->logic = 'AND';
		$this->load($task_id);

		if (!empty($this->row)) {
			$skills_tasksObj = new Skills_tasks;
			$skillsObj = new Skills;
			$usersObj = new Users;	

			$skills_tasksObj->load(array('task_id'=>$this->row['task_id']));
			
			$skillRows = array();
			foreach ($skills_tasksObj->rows as $k => $skill_task) {
				$skillsObj->load($skill_task['skill_id']);
				$skillRows[] = array_merge($skills_tasksObj->rows[$k],$skillsObj->row);

			}
			
			if ($task_id == '4') {
				$skillRows[] = array('skill_id'=>'face','name'=>'Faces','exp'=>'8');
			}
			
			$usersObj->load($this->row['creator_id']);
			
			$this->task = $this->row;
			$this->task['creator'] = $usersObj->row['email'];
			$this->task['skills'] = $skillRows;
		
			return $this->task;
		}
		else {
			return false;
		}
	
	}
	
	function getAll() {
	
		$this->load('all');
		$skills_tasksObj = new Skills_tasks;
		$skillsObj = new Skills;
		$usersObj = new Users;

		
		foreach ($this->rows as $k => $task) {

			$skillRows = array();

			$skills_tasksObj->load(array('task_id'=>$task['task_id']));

			foreach ($skills_tasksObj->rows as $sk => $skill_task) {
				$skillsObj->load($skill_task['skill_id']);
				$skillRows[] = array_merge($skills_tasksObj->rows[$sk],$skillsObj->row);
			}
			
			$skills_tasksObj->clear();
			
			$usersObj->load($task['creator_id']);
			
			$this->tasks[$k] = $task;
			$this->tasks[$k]['creator'] = $usersObj->row['email'];
			$this->tasks[$k]['skills'] = $skillRows;

		}
		

		
		
		return $this->tasks;
	}
	
	
}
?>