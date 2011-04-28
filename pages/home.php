<style>
.center {
	width: 770;
	margin-left: auto;
	margin-right: auto;
	left: 0;
	right: 0;
	position: absolute;
	border: 1px solid black;
}
.left-content, .right-content {
	padding-top: 80px;
	text-align: center;
	width: 380;
	min-height: 200px;
}
.left-content {
	border: 1px solid red;
	float: left;
}
.right-content {
	border: 1px solid blue;
	float: right;
}
</style>
<div class='center'>
	<div class=''>
		<div class='left-content'>One</div>
		<div class='right-content'>Two</div>
	</div>
</div>

<?php

/*
echo "<table><tr><td>";
*/
/*
echo "</td><td style='width: 2px; background-color: black'></td><td>";
echo "<div>Signup</div>";
echo form::signup();
echo "</td></tr></table>";

echo "<div style='width: 780px; margin-left: auto; margin-right: auto; left: 0; right: 0;'>";
//echo "<a href='".site::url."go'><img border='0' src='".site::im."mainscreen.jpg'></a>";
echo "<a href='".site::url."go'><img border='0' src='".site::im."mainscreen2.jpg'></a>";
echo "<div>Login</div>";
echo form::login();
echo "</div>";

*/
?>