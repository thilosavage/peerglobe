<?php

class userController extends Controller {

	function ajax_signupProcess() {

		
		$this->vars('success',$success);
	}
	
	function ajax_loginProcess() {

		print_r($_POST);
		
		$userObj = new User;
		$userObj->load(array('email'=>$_POST['login']['email']));
		
		print_r($userObj->data);
		exit;	

		$this->vars('success',$success);
	
	}

}

?>