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
	
	
	$('#task-tags').live('keyup',function() {
	
			var phrase = $(this);
	
			$.getJSON(siteUrl+'task/ajax_getTag/'+phrase.val(),function(d){
			
				if (d.empty) {
					$('#task-tag-error').html("<span style='background-color: red;'>No tags exist starting with <em>"+phrase.val()+"</em></span>");
				}
				
				
				
				if (d.match) {
					$('#task-tag-bin').append(d.match);
					phrase.val('');
				}
				
			});		
	
	})
});


</script>