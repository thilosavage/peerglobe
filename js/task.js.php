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
	task_id = task_id===undefined?0:task_id;
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
	
		var r = "<div id='task-tag-select' style='position: absolute; z-index: 4; top: -1px; width: 200px; padding: 5px; left: 190px; border: 1px solid black; background-color: white;'>";
		r += d;
		r += "</div>";

		$('#task-tag-bin').append(r);	
	});	

}

function taskSkillAdd(skill_id) {
	
	$('#task-tags').val('');

	taskSkillRemove(skill_id);
	
	var b = "<div class='task-tag-item' style='padding: 8px;' skill_id='"+skill_id+"'>";
	b += "<img src='"+siteUrl+"images/skillicon/"+skill_id+".png'> ";
	
	var ef = parseInt($('#slider').css('left'))
	if (!ef) {
		ef = 1;
	}
	else {
		ef = ef * 3;
	}
	
	b += "<span style='font-size: 11px;'>+</span><span class='tag-exp' id='"+skill_id+"'>"+ef+"</span>";
	b += "<span style='font-size: 11px;'>exp</span>";
	b += "<span skill_id='"+skill_id+"' class='fakelink taskSkillRemove' style='font-size: 15px; padding: 5px; background-color: #000055; color: white; '> x </span>";
	b += "</div>";
	
	$('#task-tag-bin').append(b);

	$('#task-tag-select').remove();

}

function taskSkillRemove(skill_id) {
	$('.task-tag-item[skill_id='+skill_id+']').remove();
}


function taskEditSave(task_id) {

	var meh = new Array();

	$('#task-tag-bin').children('div.task-tag-item').each(function(){
		var t = $(this);
		var sid = t.children('span.tag-exp').attr('id');
		meh[sid] = {
			skill_id: sid,
			exp: t.children('span.tag-exp').html()
			}
	});

	var fields = {
		skills: meh,
		task_id: task_id,
		desc: $('#task-desc').val(),
		exp: $('#vv').val(),
		instructions: $('#task-instructions').val()
	}
	
	$.post(siteUrl+'task/ajax_editSave',fields,function(d){
		console.log(d);
	});
}

</script>