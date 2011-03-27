<?php

echo "<div id='tasks'>";
echo "Missions";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<span style='font-size: 11px;'>Sort by: [<em>Recent</em>] [<em>Popular</em>] [<em>Easiest</em>] [<em>Hardest</em>]</span>";

echo "<div id='taskList'>";

foreach ($data['tasks'] as $task) {

	echo "<div task_id=".$task['task_id']." class='taskLoadModule task-row'>";
	
	echo $task['desc']." (+".$task['exp']."exp) <br>";
	echo "<div class='task-subtext'>Created by: ".$task['creator']." on ".date::fancyTime($task['time'])."</div>";
	
	echo "<div class='task-skills'>";
	foreach ($task['skills'] as $skill) {
		echo $skill['name'].":  +".$skill['exp']."exp<br>";
	}
	echo "</div>";
	
	echo "<div class='task-load-button'>LOAD</div>";
	
	echo "</div>";
	
}
echo "</div>";

echo "<span class='fakelink taskCreateNew' style='text-decoration: underline;'>Create A Mission</span>";

echo "</div>";
?>