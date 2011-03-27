<?php

if ($id) {
	$data['success'] = true;
}
else {
	$data['success'] = mysql_error();
}

$data['id'] = $id;

echo json_encode($data);
?>