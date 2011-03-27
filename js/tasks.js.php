<script>
function tasksLoadAll() {
	$.getJSON(siteUrl+'tasks/ajax_loadAll',function(d){
		$('#go').html(d.tasks);
		//$(d.tasks).appendTo;
	});
}



</script>