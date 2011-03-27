<?php
$talks = $data['talks'];

if (empty($talks)) {
	echo "Nobody has talked about this yet";
}
else {
	echo "<div style='width: 600px;'>";
	$i = 0;
	foreach ($talks as $talk) {
		echo "<div style='padding: 10px; border: 1px black solid; background-color: ";
		echo $i?'#e7e7e7':'#f2f2f2';
		echo "'>";
		echo "<div class='fakelink userProfileLoad' style='text-decoration: underline; font-size: 13px;'>".$talk['handle']."</div>";
		echo "<div style='font-size: 11px;'>".date::fancyTime($talk['time'])."</div>";
		echo "<div style='text-indent: 11px;'>".$talk['text']."</div>";
		echo "</div>";
		$i = $i?false:true;
	}
	echo "</div>";
	
}

?>