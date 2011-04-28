<?php
$f = "<span id='login-form'>";
$f .= input::text('login-email','','text-input','Email')."<br>";
$f .= input::text('login-pass','','text-input','Pass')."<br>";
$f .= input::submit('go','go','userLoginProcess');
$f .= "</span>";

echo $f;		
?>