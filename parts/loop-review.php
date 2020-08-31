<?php
/**
 * Template part for displaying reviews
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">	
	<div class="grid-x grid-padding-x">	
	
		<div class="right cell small-12 medium-8 medium-offset-4 large-6">
			
			<div class="single-review">
				
				<div class="stars">
					<?php if( get_field('star_count') == '5' ):?>
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
					<?php endif;?>
					
					<?php if( get_field('star_count') == '4' ):?>
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
					<?php endif;?>
					
					<?php if( get_field('star_count') == '3' ):?>
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
					<?php endif;?>
					
				</div>
				
				<div class="date"><?php $post_date = get_the_date( 'M j, Y' ); echo $post_date;?></div>
								
				<div class="author"><?php the_field('authors_name_for_page_footer');?></div>

				<div class="copy"><?php the_content();?></div>
				
			</div>
		
		</div>
		
	</div>		    						
</article> <!-- end article -->
