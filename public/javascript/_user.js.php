<script>

function userLoginProcess() {
	var fields = {user:$('#login-email').val(),pass:$('#login-pass').val()}
	$.post(siteUrl+'user/ajax_signupProcess',fields,function(d){
		if (d.success) {
			location.href(siteUrl+'go');
		}
		else {
			$('#error').html(d.error);
		}
	},'json');
}

function userSignupProcess() {
	var fields = {user:$('#login-email').val(),pass:$('#login-pass').val()}
	console.log($('#si').val());
	
	$.post(siteUrl+'user/ajax_loginProcess',fields,function(d){
		if (d.success) {
			location.href(siteUrl+'go');
		}
		else {
			$('#error').html(d.error);
		}
	},'json');

}

</script>