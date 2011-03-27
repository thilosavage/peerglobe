<?php
header("content-type: application/x-javascript");

// change your js folder if you want:
$css_folder = 'styles';

$at = explode('/',$_SERVER['PHP_SELF']);
$self = $css_folder.'/'.end($at);
$docRoot = str_replace($self,'',$_SERVER['SCRIPT_FILENAME']);
$docRoot = str_replace('public/','',$docRoot);

echo "/*";
require_once($docRoot.'config.php');
echo "*/";

$handler = opendir(site::root.'css/');
while ($file = readdir($handler)) {
	//if ($file != '.' && $file != '..' && substr($file,0,1)=="_")
	if ($file != '.' && $file != '..')
		$files[] = $file;
}
closedir($handler);

foreach ($files as $fileName){
	$path = site::root.'css/'.$fileName;
	
	ob_start();
	include($path);
	$output = ob_get_clean(); 	
	$output = str_replace("<style>","", $output);
	$output = str_replace("</style>","", $output);
	echo $output;	
}
?>