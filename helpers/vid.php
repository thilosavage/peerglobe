<?php
class vid {

	function render($str,$tar='user') {

		$ret = "<object id='nimbb".$tar."' classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' width='360' height='280'
			codebase='http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab'>";
		$ret .= "<param name='movie' value='http://player.nimbb.com/nimbb.swf?".$str."&lang=en' />";
		$ret .= "<param name='allowScriptAccess' value='always' />";
		$ret .= "<embed name='nimbb".$tar."' src='http://player.nimbb.com/nimbb.swf?".$str."&lang=en' width='360' height='280'
			allowScriptAccess='always' pluginspage='http://www.adobe.com/go/getflashplayer'>"; 
		$ret .= "</embed></object>";
		
		return $ret;

	}
}
?>