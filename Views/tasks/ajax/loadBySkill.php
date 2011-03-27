<?php

$data['tasks'] = "Tasks:<br>";
if ($tasks) {
	foreach ($tasks as $task) {
		$data['tasks'] .= $task['name']."<br>";
	}
}
echo json_encode($data);

?>