<script>
function Nimbb_initCompleted(idPlayer){
	_Nimbb = document[idPlayer];
	
	console.log(idPlayer);
	
}

function Nimbb_videoSaved(idPlayer) {

	if (idPlayer == 'nimbbuser') {
		_Nimbb.setMode('view');
		var t = _Nimbb.getGuid();
		
		var fields = {
			guid: t
			};
		$.getJSON(siteUrl+'task/ajax_submitNew',fields,function(d){
			$('#giveitashot').html("<h4 style='color: red'>Success!</h4>");
			$('#submission-warning').html("<h4>Cool! We've saved your submission.<br>It'll be evaluated soon by the creator.</h4>");
			taskNoteEdit(d.id);
		});
	}
	else if (idPlayer =='nimbbdemo') {
		//taskEditSave();
	}
	
	
}
</script>