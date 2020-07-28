<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>
			
	<div class="content content-row">
	
		<div class="inner-content grid-x grid-padding-x">
			
			<div class="content-header cell small-12 medium-8 medium-offset-4">
				
				<h1><?php the_field('heading', 'option');?></h1>
				
				<h2><?php the_field('sub-heading', 'option');?></h2>
				
			</div>
	
		    <main class="main small-12 cell" role="main">
		    
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
																								
		    </main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
	
<?php get_footer(); ?>