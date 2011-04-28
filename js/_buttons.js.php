<script>

$('.userLoginProcess').live('click',function(){userLoginProcess();})
$('.userSignupProcess').live('click',function(){userSignupProcess();})
//$('.tasksLoadAll').live('click',function(){tasksLoadAll($(this));});
$('.tasksLoadAll').live('click',function(){tasksLoadAll();});
$('.taskLoadModule').live('click',function(){taskLoadModule($(this).attr('task_id'));});

$('.taskEditForm').live('click',function(){taskEditForm($(this).attr('task_id'));});
$('.taskNoteSave').live('click',function(){taskNoteSave($(this).attr('id'));});
$('.taskNoteEdit').live('click',function(){taskNoteEdit($(this).attr('id'));});
$('.taskShowTab').live('click',function(){taskShowTab($(this).attr('tab'));});
$('.lightboxClose').live('click',function(){lightboxClose();});

$('.taskSkillAdd').live('click',function(){taskSkillAdd($(this).attr('id'));});
$('.taskSkillRemove').live('click',function(){taskSkillRemove($(this).attr('skill_id'));});
$('.taskEditNext').live('click',function(){taskEditNext($(this).attr('task_id'));});

$('.startClickScore').live('click',function(){startClickScore();});

// no variables can be passed to taskEditSave.. sorry.. its nimbbs fault
$('.taskEditSave').live('click',function(){taskEditSave();});

$('#task-tags').live('click',function(){
	var t = $(this);
	if (t.val() == '') {
		taskGetTags('');
	}
})

</script>