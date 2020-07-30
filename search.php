<?php 
/**
 * The template for displaying search results pages
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */
 	
get_header(); ?>
			
	<div class="content">
		
		<div class="grid-container">

			<div class="inner-content grid-x grid-margin-x">
				
				<div class="lc-mw np cell small-0 large-4"></div>
				
				<div class="content-header cell small-12 large-8">

					<h1 class="archive-title"><?php _e( 'Search Results for:', 'jointswp' ); ?> <?php echo esc_attr(get_search_query()); ?></h1>
					
				</div>
								
			</div>
		
			<div class="inner-content grid-x grid-margin-x">
		
				<div class="lc-mw np cell small-0 large-4"></div>
				
					<main class="main small-12 large-8 cell" role="main">
	
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					 
							<!-- To see additional archive styles, visit the /parts directory -->
							<?php get_template_part( 'parts/loop', 'search' ); ?>
						    
						<?php endwhile; ?>	
		
							<?php joints_page_navi(); ?>
							
						<?php else : ?>
						
							<?php get_template_part( 'parts/content', 'missing' ); ?>
								
					    <?php endif; ?>
			
				    </main> <!-- end #main -->
					
			</div>	
						
			</div> <!-- end #inner-content -->
		
		</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>
