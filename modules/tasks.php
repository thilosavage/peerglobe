<?php

echo "<div id='tasks'>";
$hideBits = $data['bits']?false:true;

if (!$hideBits) {
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<span style='font-size: 11px;'>Sort by: [<em>Recent</em>] [<em>Popular</em>] [<em>Easiest</em>] [<em>Hardest</em>]</span>";
}

echo "<div id='taskList' class='task-flipper'>";
echo "<ul>";

foreach ($data['tasks'] as $task) {

	echo "<li task_id=".$task['task_id']." class='taskLoadModule task-row'>";
	
	echo $task['desc']."<br>";
	//echo "<span style='font-size: 12px;'>This challenge is worth ".$task['exp']." exp) </span>";
	echo "<div class='task-subtext'>Created by: ".$task['creator']." on ".date::fancyTime($task['time'])."</div>";
	
	echo "<div class='task-skills'>";

	foreach ($task['skills'] as $skill) {
	
		echo "<span style='font-size: 28px;'>";
		echo "<img src='".site::im."skillicon/".$skill['skill_id'].".png' class='tooltip' name='".$skill['name']."'>";
		echo "+".$skill['exp']."<span style='font-size: 11px;'>exp</span>";
		echo"</span>";
		
	}
	echo "</div>";
	
	//echo "<div class='task-load-button'>LOAD</div>";
	
	echo "</li>";
	
}
echo "</ul>";

echo "</div>";

//echo "<button class='prev'>&lt;&lt;</button>";
//echo "<button class='next'>&gt;&gt;</button>";

if (!$hideBits) {
	if (empty($_SESSION['user'])) {
		echo "<em style='color: gray; text-decoration: underline;'>Create A Mission</em> You must log in to create a challenge";
	}
	else {
		echo "<span class='fakelink taskEditForm' style='text-decoration: underline;'>Create A Challenge</span>";
	}
}
echo "</div>";
?>