
<script>
$('.startContentLoad').live('click',function(){startContentLoad($(this).attr('page'))});
$('.startTasksLoad').live('click',function(){startTasksLoad($(this).attr('skill_id'))});

function startContentLoad(page) {
	$.getJSON(siteUrl+'start/ajax_contentLoad/'+page,function(d){
		$('#start-content').html(d.html);
	});
}

function startTasksLoad(skill_id) {
	$.get(siteUrl+'start/ajax_tasksLoad/'+skill_id,function(d){
		$('#start-content').html(d);
	});
}

</script>

<div id='go' style='margin-left: auto; margin-right: auto; width: 780px; left: 0; right: 0;'>
<?php
echo "<div id='start-content' style='text-align: center;'>";
	echo "<h3>Welcome.</h3>";
	echo "<h3>By reading this, you have gained 13 experience points at 'reading.' </h3>";
	echo "<div>".im::age('skillicon/book.png')."+13</div>";
	echo "<h3>Well done.</h3>";
	echo "<span class='fakelink startContentLoad' page='2'>Click here to continue</span>";
echo "</div>";
?>
</div>