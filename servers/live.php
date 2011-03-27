<?php
/**********************************************

	Configuration for the live site
	
**********************************************/
class site extends config{
	const url = 'http://www.thilosavage.com/rps/';
	const root = '/home/jumping4/public_html/ts/rps/';
	const im = 'http://www.thilosavage.com/rps/images/';
	
	const user = 'thilo';
	const password = 'chicken';
	
	const homepage = 'home';
	const layout = '_default';
	
	const db_user = 'jumping4';
	const db_pass = 'MagicPowers!';
	const db_name = 'jumping4_rps';
	const db_url = 'localhost';
	
	const debug = 1;
	
	function __construct(){
		ini_set('display_errors', 0);
	}
}
?>