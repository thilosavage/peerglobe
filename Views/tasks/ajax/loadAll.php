<?php

$data['tasks'] = inc::module('tasks',array('tasks'=>$tasks));

echo json_encode($data);


?>