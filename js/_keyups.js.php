<script>

$(function(){

	$('#login-form').keyup(function(e){
		if (e.which == 13) {
			userLoginProcess();
		}
	});
	
	$('#signup-form').keyup(function(e){
		if (e.which == 13) {
			userSignupProcess();
		}
	});
	
	$('.talk-submit').live('keyup', function(e) {
		if (e.which == 13) {
			var t = $(this);
			var fields = {
				text: t.val(),
				task_id: t.attr('task_id')
				}
			
			$.post(siteUrl+'talks/ajax_submit',fields,function(d){
				$('#talks').html(d.talks);
				t.val('');
			},'json');
			
		}
		
	});
});


</script>