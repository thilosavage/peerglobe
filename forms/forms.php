<?php

class form {

	function login() {
		$f = "<span id='login-form'>";
		$f .= input::text('login-email','','text-input','Email')."<br>";
		$f .= input::text('login-pass','','text-input','Pass')."<br>";
		$f .= input::submit('go','go','userLoginProcess');
		$f .= "</span>";
		return $f;
	}
	
	function signup() {
		$f = "<span id='signup-form'>";
		$f .= input::text('signup-email','','text-input','Your Email')."<br>";
		$f .= input::text('signup-pass','','text-input','Your Password')."<br>";
		$f .= input::submit('go','go','userSignupProcess');
		$f .= "</span>";	
		return $f;
	}

}

?>