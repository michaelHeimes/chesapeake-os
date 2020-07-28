<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas" id="off-canvas">
	
	<div class="inner grid-container">
	
		<div class="off-canvas-header text-right">
			
			<i class="fal fa-times"></i>
					
		</div>
		
		<?php joints_off_canvas_nav(); ?>
	
		<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>
	
			<?php dynamic_sidebar( 'offcanvas' ); ?>
	
		<?php endif; ?>
		
		
		<form method="get" action="/">
			<input type="text" name="s" placeholder="Enter search terms here" class="">
			<input type="hidden" name="post_type" value="post">
			<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
		</form>
			
	</div>
	
</div>
