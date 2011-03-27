<?php

class talksController extends Controller {

	function ajax_submit() {
		
		$talksObj = new Talks;
		
		$talksObj->set['user_id'] = 0;
		$talksObj->set['task_id'] = $_POST['task_id'];
		$talksObj->set['time'] = time();
		$talksObj->set['text'] = $_POST['text'];
		$talksObj->save();
		
		$talksObj->getTalks($_POST['task_id']);
		
		$this->vars('talks',$talksObj->talks);
	
	}


}

?>