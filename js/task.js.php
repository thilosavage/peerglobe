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

function taskEditForm(task_id) {

	$.get(siteUrl+'task/ajax_editForm/'+task_id,function(d){
		lightboxOpen(d);
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


function taskGetTags(phrase) {

	$.get(siteUrl+'task/ajax_getTags/'+phrase,function(d){
	
		$('#task-tag-select').remove();
	
		var r = "<div id='task-tag-select' style='position: absolute; top: 21px; width: 200px; padding: 5px; left: 5px; border: 1px solid black; background-color: white;'>";
		r += d;
		r += "</div>";

		$('#task-tag-bin').append(r);	
	});	

}

function taskSkillAdd(skill_id) {
	
	$('#task-tags').val('');
	
	var b = '<div>';
	b += "<img src='"+siteUrl+"images/skillicon/"+skill_id+".png'> ";
	
	var ef = parseInt($('#slider').css('left'))
	if (!ef) {
		ef = 1;
	}
	else {
		ef = ef * 3;
	}
	
	b += "Exp: +<span class='tag-exp' id='"+skill_id+"'>"+ef+"</span>";
	b += "[Remove]";
	b += "</div>";
	
	$('#task-tag-bin').append(b);

	$('#task-tag-select').remove();

}

</script>