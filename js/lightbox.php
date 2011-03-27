<script>

function lightboxOpen(data) {

	$('#lightbox').remove();

	var w = $(document).width();
	var h = $(document).height();
	
	var closer = "<div id='lightbox-closer' class='fakelink lightboxClose lightbox-x'><img src='"+siteUrl+"images/x.png'></span></div>";	
	var box = "<div id='lightbox-box' style='top: "+top+"px'>"+data+closer+"</div>"; 
	var bg = "<div id='lightbox-bg' style='width: "+w+"px; height: "+h+"px; '></div>";

	$('#go').append("<div id='lightbox'>"+box+bg+"</div>");
	
	$('#lightbox-bg').fadeTo(100,.5);
	$('#lightbox-box').fadeTo(100,1);	

}

function lightboxClose() {
	$('#lightbox').remove();
}



</script>