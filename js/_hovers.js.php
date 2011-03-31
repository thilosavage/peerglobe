<script>

$('.task-row').live('mouseover',function() {
	var t = $(this);
	t.addClass('skill-hover');
});
$('.task-row').live('mouseout',function() {
	var t = $(this);
	t.removeClass('skill-hover');
});

$('.taskSkillAdd').live('mouseover',function() {
	var t = $(this).attr('name');
	$('#task-tags').val(t);
});

</script>