<?php

class tasksController extends Controller {

	function ajax_loadAll() {
	
		$_SESSION['page'] = 'tasks';
	
		$tasksObj = new Tasks;
		$tasksObj->getAll();
		
		$this->vars('tasks',$tasksObj->tasks);	
	
	}


	
	/*

	function ajax_loadBySkill($skill_id) {
	
		//$skillsObj = new Skills($skill_id);
		$tasksObj = new Tasks;
		$skills_tasksObj = new Skills_tasks(array('skill_id'=>$skill_id));
	
		
		if ($skills_tasksObj->rows) {
			foreach ($skills_tasksObj->rows as $skill_task) {
				$tasks_ids[] = $skill_task['task_id'];
			}	
			foreach ($tasks_ids as $task_id) {
				$tasksObj->load($task_id);
				$tasks[] = $tasksObj->row;
				$tasksObj->clear();
			}
		}
		
		
		
		$this->vars('skill',$skillsObj->row);
		$this->vars('tasks',$tasks);
		
	}
	
	*/

}

?>