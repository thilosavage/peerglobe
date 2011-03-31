<?php

$task_id = '';

echo "<div style='text-align: center;'>";

echo "<h5>Optional stuff</h5>";

echo "<h5>Record a demonstration</h5>";
echo "<div style='text-align: center'>";
echo vid::render("mode=record&key=784552182c");
echo "</div>";
echo "<br><br>";

echo "Upload an image<br><input type='file'>";

echo "<div style='text-align: center;'><input task_id='".$task_id."' type='submit' class='taskEditSave'></div>";

echo "</div>";

echo "<br>";

?>