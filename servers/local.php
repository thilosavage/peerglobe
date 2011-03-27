<?php
/**********************************************

	Configuration for the local development site
	
**********************************************/
class site extends config{
	const url = 'http://localhost/rps/';
	const root = '/xampp/htdocs/rps/';
	const im = 'http://localhost/rps/images/';
	
	const folder = 'web';
	
	const user = 'thilo';
	const password = 'chicken';
	
	const homepage = 'home';
	const layout = '_default';
	
	const db_user = 'root';
	const db_pass = '';
	const db_name = 'rps';
	const db_url = 'localhost';
	
	const debug = 1;
	
}
?>