<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas" id="off-canvas">
	
	<div class="inner">
	
		<div class="off-canvas-header text-right">
			
			<i class="fal fa-times"></i>
					
		</div>
		
		<?php joints_off_canvas_nav(); ?>
	
		<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>
	
			<?php dynamic_sidebar( 'offcanvas' ); ?>
	
		<?php endif; ?>
	
	</div>
	
</div>
