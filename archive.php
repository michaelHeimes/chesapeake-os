<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>
			
	<div class="content content-row">
		
		<div class="grid-container">
	
			<div class="inner-content grid-x grid-padding-x">
				
				<div class="content-header cell small-12 medium-8 medium-offset-4 large-6">
					
					<h1><?php the_field('reviews_heading', 'option');?></h1>
					
					<h2><?php the_field('reviews_sub-heading', 'option');?></h2>
					
					<button type="button" id="show-review-form" class="button">Submit a Review</button>
					
					<div class="form-wrap" style="display:none;">
						<?php echo do_shortcode('[contact-form-7 id="290" title="Submit a Review"]');?>
					</div>
					
				</div>
		
			    <main class="main small-12 cell" role="main">			    
			    
				    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				 
						<!-- To see additional archive styles, visit the /parts directory -->
						<?php get_template_part( 'parts/loop', 'review' ); ?>
					    
					<?php endwhile; ?>	
	
						<?php joints_page_navi(); ?>
						
					<?php else : ?>
												
						<?php get_template_part( 'parts/content', 'missing' ); ?>
							
					<?php endif; ?>
																									
			    </main> <!-- end #main -->
			    
			</div> <!-- end #inner-content -->
			
		</div>

	</div> <!-- end #content -->
	
<?php get_footer(); ?>