<?php
/**********************************************

	Configuration for the live site
	
**********************************************/
class site extends config{
	const url = 'http://rps.jumpingness.com/';
	const root = '/home/jumping4/public_html/rps.jumpingness.com/';
	const im = 'http://rps.jumpingness.com/public/images/';

	const db_user = 'jumping4';
	const db_pass = 'MagicPowers!';
	const db_name = 'jumping4_rps';
	
	function __construct(){
		ini_set('display_errors', 0);
	}
}
?>