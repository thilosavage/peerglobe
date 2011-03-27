<?php

echo "<div id='tasks'>";
echo "Missions";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<span style='font-size: 11px;'>Sort by: [<em>Recent</em>] [<em>Popular</em>] [<em>Easiest</em>] [<em>Hardest</em>]</span>";

echo "<div id='taskList' class='task-flipper'>";
echo "<ul>";

foreach ($data['tasks'] as $task) {

	echo "<li task_id=".$task['task_id']." class='taskLoadModule task-row'>";
	
	echo $task['desc']." (+".$task['exp']."exp) <br>";
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


echo "<span class='fakelink taskEditForm' style='text-decoration: underline;'>Create A Mission</span>";

echo "</div>";
?>