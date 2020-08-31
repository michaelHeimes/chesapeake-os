(function($) {

// 	Search
	$(document).on('click', 'a.search-trigger', function(e){
		e.preventDefault();
		$('.search-wrap').fadeIn(300);
	});

	$(document).on('click', 'button#close-search', function(e){
		e.preventDefault();
		$('.search-wrap').fadeOut(300);
	});
	
	$(document).on('click', 'a.menu-toggle', function(e){
		e.preventDefault();
		$('.off-canvas').fadeIn(300);
	});	
	
	$(document).on('click', '.off-canvas-header i', function(e){
		e.preventDefault();
		$('.off-canvas').fadeOut(300);
	});		

// Ratings Form
	$('.form-wrap').slideUp();	
	
	$(document).on('click', '#show-review-form', function(e){
		e.preventDefault();
		$('.form-wrap').slideToggle(300);	
	});			

	$(document).on('click', '.rating-wrap .wpcf7-list-item input', function(e){
		$(this).parent().addClass('clicked');
		$(this).parent().prevAll().addClass('clicked');
		$(this).parent().nextAll().removeClass('clicked');
	});		
	
})( jQuery );