<?php

class taskController extends Controller {

	function ajax_loadModule($task_id) {
		
		$_SESSION['page']['task'] = $task_id;
		
		$tasksObj = new Tasks;
		$tasksObj->getTask($task_id);
		
		$tasks_usersObj = new Tasks_users;
		$tasks_usersObj->getTrys($task_id);
		$trys = $tasks_usersObj->trys;
		
		$talksObj = new Talks;
		$talksObj->getTalks($task_id);		
		
		$tasks_usersObj->clear();
		$tasks_usersObj->load(array('user_id'=>'2','task_id'=>$task_id));
		if ($tasks_usersObj->row) {
			$tasksObj->task['tried'] = $tasks_usersObj->row['guid'];
			$tasksObj->task['note'] = $tasks_usersObj->row['note'];
			$tasksObj->task['task_user_id'] = $tasks_usersObj->row['task_user_id'];
		}
		else {
			$tasksObj->task['tried'] = false;
			$tasksObj->task['note'] = false;
			$tasksObj->task['task_user_id'] = false;
		}
		
		
		$this->vars('talks',$talksObj->talks);
		$this->vars('trys',$trys);
		$this->vars('task',$tasksObj->task);
		
	}
	
	function ajax_submitNew() {
	
		$tasks_usersObj = new Tasks_users;
		$tasks_usersObj->set = array(
			'user_id' => '2',
			'guid'=>$_GET['guid'],
			'time'=>time(),
			'task_id'=>$_SESSION['page']['task']
			);
		$id = $tasks_usersObj->save();
	
		$this->vars('id',$id);

	}
	
	function ajax_noteSave() {

		$tasks_usersObj = new Tasks_users;
		$tasks_usersObj->set = array(
			'note'=>$_POST['note'],
			'task_user_id' => $_POST['task_user_id']
			);

		$tasks_usersObj->save();

		$this->vars('user_task_id',$_POST['task_user_id']);
		$this->vars('note',$_POST['note']);
	}
	
	function ajax_editForm($task_id) {

		if ($task_id) {
			$tasksObj = new Tasks($task_id);
			$this->vars('task',$tasksObj->row);
		}
		$this->vars('task_id',$task_id);
	
	}
	
	function ajax_getTag($phrase) {
	
		$skillsObj = new Skills;
	
		$skillsObj->getTagMatches($phrase);
		
		
		$empty = false;
		if (count($skillsObj->rows) == 1) {
			$match = $skillsObj->row['name'];
		}
		else {
			$match = null;
		}
		
		if (count($skillsObj->rows) == 0) {
			$empty = true;
		}
		
		$this->vars('empty',$empty);
		$this->vars('match',$match);
	}
	
	
/*
			task_id
			creator_id
			desc
			isntructions
			guid
			medium
			exp
			'medium' => $_POST['medium'];
			'exp' => rand(3,10)	
*/
	
}
?>