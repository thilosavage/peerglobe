<?php

$f = "<span id='signup-form'>";
$f .= input::text('signup-email','','text-input','Your Email')."<br>";
$f .= input::text('signup-pass','','text-input','Your Password')."<br>";
$f .= input::submit('go','go','userSignupProcess');
$f .= "</span>";

echo $f;		
?>