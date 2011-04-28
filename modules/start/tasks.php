<?php
echo "<div>Click something you're interested in</div>";
echo "<div>";
	echo "<ul>";
	foreach ($skillsObj->rows as $skill) {
		echo "<li>";
		echo "<span class='fakelink startTasksLoad' skill_id='".$skill['skill_id']."'>".$skill['name']."</span>";
		echo "</li>";
	}
	echo "</ul>";
echo "</div>";
?>