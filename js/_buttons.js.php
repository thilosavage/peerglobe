<script>

$('.userLoginProcess').live('click',function(){userLoginProcess();})
$('.userSignupProcess').live('click',function(){userSignupProcess();})
//$('.tasksLoadAll').live('click',function(){tasksLoadAll($(this));});
$('.tasksLoadAll').live('click',function(){tasksLoadAll();});
$('.taskLoadModule').live('click',function(){taskLoadModule($(this).attr('task_id'));});

$('.taskCreateNew').live('click',function(){taskCreateNew();});
$('.taskNoteSave').live('click',function(){taskNoteSave($(this).attr('id'));});
$('.taskNoteEdit').live('click',function(){taskNoteEdit($(this).attr('id'));});
$('.taskShowTab').live('click',function(){taskShowTab($(this).attr('tab'));});
</script>