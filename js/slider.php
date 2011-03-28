<script>
var clickt = false;
var mousedown = null;
$('#zone').live('mousemove',function(e){
	if (clickt) {
		var left = e.pageX - mousedown;

		if (left <=1) {
			left = 1;
		}
		if (left >= 500) {
			left = 500;
		}		
		
		if (left > 420) {
			val = left * 20
		}
		else if (left > 300) {
			val = left * 8;
		}
		else if (left > 200) {
			val = left * 4;
		}
		else if (left > 100) {
			val = left * 2;
		}
		else {
			val = left;
		}
		
		
		$('#task-tag-bin').children('div').children('.tag-exp').each(function(){
			
			var hvalue = left  * 3;
			
			$(this).html(hvalue);
		
		});
		
		$('#slider').css('left',left);
		
		$('#vv').html(val);
	}

	return false;
});

$('#slider').live('mousedown',function(e){
	clickt = true;
	mousedown = e.pageX - parseInt($('#slider').css('left'));
	return false;
});
$('#slider').live('mouseup',function(){
	clickt = false;
	return false;
});