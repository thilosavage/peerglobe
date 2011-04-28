<?php

$task = $data['task'];
$trys = $data['trys'];
$talks = $data['talks'];


echo "<div id='task'>";




if ($task['task_id'] == '4') {
	echo "<div style='background-color: #99ff99; border: 1px solid black; padding: 10px;'>";
	echo "<table><tr>";
	echo "<td width='33%' style='text-align: center;'>Challenges are recorded with your webcam</td>";
	echo "<td width='33%' style='text-align: center;'>Then points/awards are given by people better than you</td>";
	echo "<td width='33%' style='text-align: center;'>To accept this challenge, hit 'Try It'</td>";
	echo "</tr></table>";
	echo "</div>";
}
else {
	echo "<span class='tasksLoadAll fakelink'>Back to list</span>";
}


if ($task['tried']) {
	echo "<ul id='tasknav'>";
	echo "<li class='task-tab-off fakelink taskShowTab' tab='task-details'>Details</li>";
	echo "<li class='task-tab-on fakelink taskShowTab' tab='task-doit'>Your Results</li>";
	echo "<li class='task-tab-off fakelink taskShowTab' tab='task-tries'>Other Attempts</li>";
	echo "</ul>";
}
else {
	echo "<ul id='tasknav'>";
	echo "<li class='task-tab-on fakelink taskShowTab' tab='task-details'>Details</li>";
	echo "<li class='task-tab-off fakelink taskShowTab' tab='task-doit'>Try It</li>";
	echo "<li class='task-tab-off fakelink taskShowTab' tab='task-tries'>Other Attempts</li>";
	echo "</ul>";
}


echo "<div style='clear:both;'></div>";

echo "<div id='task-tabs' style='border: 1px black solid;'>";
	
	if ($task['tried']) {
		echo "<div id='task-details' class='task-tab' style='display: none;'>";		
	}
	else {
		echo "<div id='task-details' class='task-tab'>";
	}
		echo "<table><tr><td valign='top'>";
			echo "<h5>The Mission</h5>";
			echo "<div style='padding: 10px;'>";
			echo $task['desc']." (+".$task['exp']."exp) <br>";
			echo "<div class='task-subtext'>Created by: ".$task['creator']." on ".date::fancyTime($task['time'])."</div>";
			
			echo "<div class='task-skills'>";
			foreach ($task['skills'] as $skill) {
				echo $skill['name'].":  +".$skill['exp']."exp<br>";
			}	
			echo "</div>";
			
			echo "<div style='padding-top: 30px;'><h5>Instructions</h5>";
			echo $task['instructions'];
			echo "</div>";
			
			echo "</div>";
		echo "</td><td valign='top'>";
			
			
			if ($task['guid']) {
				echo "<h5>Expert Demonstration</h5>";
				echo vid::render("guid=".$task['guid']."&key=784552182c","demo");
				echo "<div style='text-align: center;'>";
				echo "<span tab='task-doit' style='padding: 14px; background-color: #005500; color: white;' class='fakelink taskShowTab'>Try it!</span>";
				echo "</div>";				
				
			}
			else {
				echo "<h5>There is no demonstration for this challenge</h5>";

			}
			//echo vid::render("mode=record&key=784552182c","demo");

		echo "</td></tr></table>";
		
	echo "</div>";

	if ($task['tried']) {
		echo "<div id='task-doit' class='task-tab'>";
	}
	else {
		echo "<div id='task-doit' class='task-tab' style='display: none;'>";
	}
	
	
		echo "<table><tr><td valign='top' width='360'>";

			if ($task['tried']) {
				echo "<h5>Your awards for this mission:</h5>";
				
				echo "<div>";
				echo "Still waiting on expert reviews<br>";
				echo "<span style='text-decoration: underline;'>Track one down</span>";
				echo "</div>";

				echo "<div id='submission-note-ct'>";
				
				if ($task['note']) {
					echo inc::module('task-note',
						array('note'=>$task['note'],'user_task_id'=>$task['task_user_id'])
						);
				}
				
				echo "</div>";

				
				echo "</td><td valign='top'>";
				echo vid::render("guid=".$task['tried']."&key=784552182c");
			}
			else {
				echo "<div id='submission-warning'>";
				
					if ($task['task_id'] == '4') {
						echo "<h5>Okay!</h5>";
						echo "To the right, hit 'accept'<br>";
						echo "You should see yourself.<br>";
						echo "If you don't, hit the settings icon and choose a camera.<br>";
						echo "Then press record, make a face, and hit 'save'.<br>";

					}			
					else {
						echo "<h5>When you record -</h5>";
						echo "<div style=''padding: 15px;'>";
						echo " - Read the instructions first<br>";
						echo " - Don't hit save until you have it down<br>";
						echo " - Do not cheat. You will be banned<br>";
						echo " - Good luck";
						echo "</div>";
					}
					
					echo "</div>";

				echo "</td><td valign='top'>";
				
				echo "<h5 id='giveitashot'>Give it a shot</h5>";
				echo vid::render("mode=record&key=784552182c");
			}
		echo "</td></tr></table>";
	

	echo "</div>";
	
	
	
	echo "<div id='task-tries' class='task-tab' style='display: none;'>";
	
	if (empty($trys)) {
		echo "Nobody has tried this yet";
	}
	else {
		print_r($trys);
	}
	
	echo "</div>";

echo "</div>";

echo "<h4>Discussion</h4>";

	echo "<div id='task-talks'>";
		echo "<div>";
			echo "<table><tr><td>";
			echo "Say something:";
			echo "</td></td>";
			echo "<textarea cols='60' rows='2' class='talk-submit' task_id='".$task['task_id']."'></textarea>";
			echo "<table>";
		echo "</div>";
	echo "</div>";

	echo "<div id='talks'>";
	echo inc::module('talks',array('talks'=>$talks));
	echo "</div>";




echo "</div>";

?>