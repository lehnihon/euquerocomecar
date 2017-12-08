( function( $ ) {

	$('.veja-mais-btn').on('click',function(e){
		e.preventDefault();
		$(this).slideUp();
		$(this).next().slideDown();
	})


} )( jQuery );