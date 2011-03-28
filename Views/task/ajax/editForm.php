

<?php

//echo "<table><tr><td>";

echo "<div style='padding: 80px;'>";

echo "What is the mission?<br>";
echo "<textarea cols='52' id='task-desc'></textarea>";

echo "<br><br>";


?>

<?php
echo "What skills does it improve?<br>";

//echo "<textarea cols='35' id='task-tags'></textarea>";
echo "<input type='text' id='task-tags' style='height: 20px; width: 80px; padding: 3px;'>";

echo "<div id='task-tag-bin' style='position: relative;'>";

echo "</div>";

echo "<br>";


echo "<div>On a scale from total noob to you, how difficult is it?<br>";
?>

<div id='zone' style='position: relative; width: 500px; text-align: center;'>
<div style='height: 20px; width: 500px; background-color: gray;'></div>
<div id='slider' class='fakelink' style='position: absolute; left: 0px; top: -5px; width: 12px; height: 30px; background-color: blue;'></div>
<div id='vv' style='text-align: center;'>0</div>

<div style='position: absolute; top: 20px; left: 0px;'>Noob</div>
<div style='position: absolute; top: 20px; right: 0px;'>You</div>

</div></div>

<?php

echo "<br>";
echo "<hr shading='no' width='500'>";
echo "<br>";

echo "Extra instructions? Optional.<br>";
echo "<textarea cols='35' id='task-instructions'></textarea>";

echo "<br>";

echo "Upload an image? Optional.<br><input type='file'>";

echo "<div style='text-align: center;'><input type='submit' class='taskEditSave'></div>";


//echo "</td><td>";
echo "<h5>Record a demonstration? Optional.</h5>";
//echo vid::render("mode=record&key=784552182c");

//echo "</td></tr></table>";

echo "<input type='hidden' name='task_id' value='".$task_id."'>";

echo "</div>";

?>