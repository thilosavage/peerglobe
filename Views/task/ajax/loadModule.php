<?php

$taskData = array('task'=>$task,'talks'=>$talks,'trys'=>$trys);

$data['task'] = inc::module('task',$taskData);

echo json_encode($data);


?>