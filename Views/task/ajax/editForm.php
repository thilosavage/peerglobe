<?php

echo "<table><tr><td>";

echo "What are the tags?<br>";
echo "<div id='task-tag-bin'></div>";
//echo "<textarea cols='35' id='task-tags'></textarea>";
echo "<input type='text' id='task-tags'>";

echo "<div id='task-tag-error'></div>";

echo "<br>";

echo "What is the mission?<br>";
echo "<textarea cols='35' id='task-desc'></textarea>";

echo "<br>";

echo "Extra instructions? Optional.<br>";
echo "<textarea cols='35' id='task-instructions'></textarea>";

echo "<br>";

echo "Upload an image? Optional.<br><input type='file'>";

echo "<div style='text-align: center;'><input type='submit' class='taskEditSave'></div>";


echo "</td><td>";
echo "<h5>Record a demonstration? Optional.</h5>";
echo vid::render("mode=record&key=784552182c");

echo "</td></tr></table>";

echo "<input type='hidden' name='task_id' value='".$task_id."'>";


?>