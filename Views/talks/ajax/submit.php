<?php
$data['talks'] = inc::module('talks',array('talks'=>$talks));
echo json_encode($data);
?>