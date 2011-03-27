<script>
function tasksLoadAll() {
	$.getJSON(siteUrl+'tasks/ajax_loadAll',function(d){
		$('#go').html(d.tasks);
		

		//$(".task-flipper").jCarouselLite({
		//	btnNext: ".next",
		//	btnPrev: ".prev",
		//	visible: 3
		//});

	});
}

</script>