<?php
class startController extends Controller {

	function _prepare() {
		//$this->layout = '_start';
		if (!empty($_SESSION['user'])) {
			header('location: '.site::url.'go');
		}
		
		
	}

	function index() {

	}
	
	function ajax_contentLoad($page) {
		$this->vars('page',$page);
	}
	
	function ajax_tasksLoad($skill_id) {
		$skillsObj = new Skills($skill_id);
		$tasksObj = new Tasks(array('skill_id'=>$skill_id));
		foreach ($tasksObj->rows as $task_id => $task) {
			$tasks[] = $tasksObj->getTask($task['task_id']);
		}
		$this->vars('skill',$skillsObj->row);
		$this->vars('tasks',$tasks);
	}
	function ajax_taskLoad($task_id) {
		$tasksObj = new Tasks($task_id);
		$this->vars('task',$tasksObj->row);
	}	
	
	
	function ajax_loadState() {
	
	}
}
?>