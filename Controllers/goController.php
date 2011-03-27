<?php
class goController extends Controller {

	function _prepare() {
		$this->layout = '_go';
	}

	function index() {

		$skillsObj = new Skills('all');
		
		$this->vars('skills',$skillsObj->rows);
	
	}
	
	function ajax_loadState() {
		
		$this->layout = '_ajax';
		$data = array();
		
		$data['logged_in'] = empty($_SESSION['user'])?false:true;
		
		if (!empty($_SESSION['page'])) {
			if ($_SESSION['page'] == 'tasks') {
				$data['page'] = 'tasks';
			}
			else if (!empty($_SESSION['page']['task'])) {
				$data['page'] = 'task';
				$data['page_id'] = $_SESSION['page']['task'];
			}
		}
		else {
			$_SESSION['page'] = 'tasks';
			$data['page'] = 'tasks';
		}
			
		$this->vars('data',$data);
		
	}

}
?>