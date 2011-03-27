<?php
class input {

	public function start($action='',$method='post',$multipart=false,$extra='') {
		$action = $action?$action:site::url;
		$method = 'method="'.$method.'" ';
		$multipart = $multipart?'enctype="multipart/form-data" ':'';
		return '<form action="'.$action.'" '.$method.$multipart.$extra.'>';
	}
	
	public function checkbox($name,$value,$check='',$extra='',$id='') {
		$checked = (($check==='' && $_POST[$name]) || $check)?' checked':'';
		return '<input type="checkbox" '.self::_vars($id,$value,$name, $class).$extra.$checked.'>';
	}
	
	public function radio($name,$value,$check='',$extra='',$id='') { 
		$checked = (($check==='' && $_POST[$name]) || $check)?' checked':'';
		return '<input type="radio" '.self::_vars($id,$value,$name, $class).$extra.$checked.'>';	
	}
	
	public function text($name, $value='',$class='',$swap='',$extra='',$id='') {
		$meh = "<input type='text' ".self::_vars($id,$value,$name,$class,$swap)." ".$extra." ";
		if ($swap) {
			$meh .= " swap='".$swap."'";
		}
		$meh .= ">";
		return $meh;
	}
	
	public function file($name,$value='',$class='',$extra='',$id='') {
		return '<input type="file" '.self::_vars($id,$value,$name, $class).' '.$extra.'>';
	}	
	
	public function hidden($name,$value='',$length='',$maxlen='',$extra='',$id='') {
		return '<input type="hidden" '.self::_vars($id,$value,$name, $class).' '.$extra.'>';
	}	
	
	public function password($name, $value='',$class='',$extra='',$id='') {
		return '<input type="password" '.self::_vars($id,$value,$name, $class).' '.$extra.'>';
	}
	
	public function submit($name,$value,$class='',$extra='',$id='',$src='') {
		return '<input type="submit" '.self::_vars($id,$value,$name, $class).$extra.'>';
	}	

	public static function textbox($name,$value='',$class='',$extra='',$rows=5,$cols=35,$id='') {
		$rawName = htmlentities($name);
		$name = ' name="'.$rawName.'" ';
		$rows = ' rows="'.htmlentities($rows).'" ';
		$cols = ' cols="'.htmlentities($cols).'" ';
		$id = ' id="'.($id?htmlentities($id):$rawName).'" ';
		$class = ' class="'.htmlentities($class).'" ';
		return '<textarea '.$name.$rows.$cols.$id.$class.' wrap=auto '.$extra.'>'.stripslashes($value).'</textarea>';
	}
	
	public static function end(){
		return "</form>";
	}
	
	public function _vars($id,$value,$name,$class,$swap=''){
		$id = 'id="'.($id?htmlentities($id):htmlentities($name)).'" ';
		
		if (!$value && $swap) {
			$value = 'value="'.htmlentities($swap).'" ';
		}
		else {
			$value = 'value="'.htmlentities($value).'" ';
		}
		
		$name = 'name="'.htmlentities($name).'" ';

		$class = ' class="'.htmlentities($class).' ';
		if ($swap) {
			$class .='text-swap text-fake';
		}
		$class .= '"';
		
		return $id.$name.$value.$class;
	}	
	
	public static function select($id,$value,$data,$name='',$class='',$autosubmit=false) {
		$ret = "<select ";
		$ret .= self::_vars($id,$value,$name, $class).$extra;
		if ($autosubmit) {
			$ret .= " onchange='this.form.submit();'";
		}		
		$ret .= ">";		
		foreach ($data as $key => $val){
			$ret .= "<option name='".$key."'";
			if ($key == $value){
				$ret .= " selected";
			}
			$ret .= ">";
			$ret .= $val;
			$ret .= "</option>";
		}
		$ret .= "</select>";
		return $ret;
	}
}
?>
