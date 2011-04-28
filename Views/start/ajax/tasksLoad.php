<?php
echo "<div>Here are some level 1 challenges for ".strtolower($skill['name'])."</div>";
echo "<div>Click on one you think you can do</div>";
echo inc::module('tasks',array('tasks'=>$tasks));
?>