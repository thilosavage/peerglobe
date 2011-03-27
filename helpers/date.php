<?php


class date {


	function fancy($date) {
	
		if (strlen($date) > 8) {
			$date = date("F j, Y", $date);
		}
		else {
			$m = substr($date,4,2);
			$y = substr($date,0,4);
			$d = substr($date,6,2);
		
			$date = date("F j, Y", mktime(0, 0, 0, $m, $d, $y));
		}
		return $date;
	}
	
	function fancyTime($date) {
	
		if (strlen($date) > 8) {
			$date = date("F j, Y g:i:s A", $date);
		}
		else {
			$m = substr($date,4,2);
			$y = substr($date,0,4);
			$d = substr($date,6,2);
		
			$date = date("F j, Y g:i:s A", mktime(0, 0, 0, $m, $d, $y));
		}
		return $date;
	}	
	

	function minmax($dates) {
	
		
	
	}
	
}



?>