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
});


</script>