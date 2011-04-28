<script>

$(function(){
	
	
	$.getJSON(siteUrl+'go/ajax_loadState',function(d){

		if (d.loggedIn) {
			if (d.page == 'tasks') {
				tasksLoadAll();
			}
			else if (d.page == 'task'){
				taskLoadModule(d.page_id);
			}
		}
	});

	
});

var _Nimbb;



</script>