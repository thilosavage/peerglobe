<?php

$data['note'] = inc::module('task-note',
	array('note'=>$note,'user_task_id'=>$user_task_id)
	);

echo json_encode($data);

?>