<script>

function taskShowTab(tab) {
	$('.task-tab').css('display','none');
	$('#'+tab).css('display','inline');
	
	$('.taskShowTab').removeClass('task-tab-on').addClass('task-tab-off');
	$('li[tab='+tab+']').removeClass('task-tab-off').addClass('task-tab-on');
	
}

function taskLoadModule(task_id) {
	$.getJSON(siteUrl+'task/ajax_loadModule/'+task_id,function(d){
		$('#go').html(d.task);
	});
}

function taskCreateNew() {
	
	$.get(siteUrl+'task/ajax_editForm/new',function(d){
		$('#go').html(d);
	});	

}

function taskNoteSave(task_user_id) {
	var fields = {
		note:$('#submission-note').val(),
		task_user_id:task_user_id
		}
	
	$.post(siteUrl+'task/ajax_noteSave',fields,function(d){
		$('#submission-note-ct').html(d.note);
	},'json');

}

function taskNoteEdit(task_user_id) {

		var note = $('#task-note').html();

		var notetext = "<div style='padding: 18px'>Attach a note to your submittion -<br><textarea id='submission-note'>"+note+"</textarea></div>";
		notetext += "<div style='text-align: center;' class='fakelink taskNoteSave' id='"+task_user_id+"'>Submit</div>";
		$('#submission-note-ct').html(notetext);

}




</script>