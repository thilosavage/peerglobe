<script>


function tasksLoad(t) {

	var skill_id = t.attr('skill_id');
	$.getJSON(siteUrl+'tasks/ajax_loadBySkill/'+skill_id,function(d){
		
		$('#content').html(d.tasks);
		
	})
	
}

</script>