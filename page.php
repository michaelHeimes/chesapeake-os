<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
		<div class="grid-container">
	
			<div class="inner-content grid-x grid-margin-x">
				
				<div class="lc-mw np cell small-0 large-4"></div>
				
				<div class="content-header cell small-12 large-8 show-for-large">
					
					<h1><?php the_field('heading');?></h1>
					
					<h2><?php the_field('sub-heading');?></h2>
					
				</div>
	
			    <?php get_sidebar(); ?>
		
			    <main class="main small-12 large-8 cell" role="main">
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
				    	<?php get_template_part( 'parts/loop', 'page' ); ?>
				    
				    <?php endwhile; endif; ?>	
				    
					<?php if( have_rows('optional_cta_buttons_after_the_content') ):?>
					<div class="buttons-wrap grid-x grid-margin-x grid-margin-x">
						<?php while ( have_rows('optional_cta_buttons_after_the_content') ) : the_row();?>	
					
							<?php 
							$link = get_sub_field('cta_link');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
							    												    
							    <a class="button hvr-drk cell shrink" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
					
						<?php endwhile;?>
					</div>
					<?php endif;?>						
				    					
				</main> <!-- end #main -->
			    
			</div> <!-- end #inner-content -->
			
		</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>