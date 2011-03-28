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
$('.taskEditSave').live('click',function(){taskEditSave($(this).attr('task_id'));});

$('#task-tags').live('click',function(){
	var t = $(this);
	if (t.val() == '') {
		taskGetTags('');
	}
})

</script>