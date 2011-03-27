<script>

$('.text-swap').live('focus',function(){
	var t = $(this);
	if (t.val() == t.attr('swap')) {
		t.val('');
	}
	t.addClass('text-real').removeClass('text-fake');
});

$('.text-swap').live('blur',function(){
	var t = $(this);
	if (t.val() == '') {
		t.addClass('text-fake').removeClass('text-real').val(t.attr('swap'));
	}
});

</script>