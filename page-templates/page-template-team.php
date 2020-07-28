<?php 
/**
 * Template Name: Team Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content content-row">
		<div class="inner-content">
		
		    <main class="main" role="main">
				
				<section class="team-members">
					<div class="grid-container">
						<div class="grid-x grid-margin-x">
							
							<div class="content-header cell small-12 medium-8 medium-offset-4">
								
								<h1><?php the_field('heading');?></h1>
								
								<h2><?php the_field('sub-heading');?></h2>
								
							</div>
								
							<?php 				
							$args = array(  
						        'post_type' => 'team_member',
						        'post_status' => 'publish',
						        'posts_per_page' => -1, 
						        'order' => 'DESC'
						    );
						
						    $loop = new WP_Query( $args ); 
						        
						    while ( $loop->have_posts() ) : $loop->the_post();?>
			
							<div class="single-team-member cell small-12">
								
								<div class="grid-x grid-margin-x align-middle">	
									
									<div class="left cell small-12 medium-4">
										<?php 
										$image = get_field('photo');
										if( !empty( $image ) ): ?>
										    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
									</div>
									
									<div class="right cell small-12 medium-8 large-6">
										
										<h2><?php the_field('name');?></h2>
										
										<h3><?php the_field('position');?></h3>
										
										<div class="bio"><?php the_field('bio');?></div>
										
									</div>
								
								</div>
								
							</div>
			
						    <?php endwhile;
						
						    wp_reset_postdata(); 
						    ?>
						  
							<?php if( have_rows('teamwork') ):?>
								<?php while ( have_rows('teamwork') ) : the_row();?>

								<div class="single-team-member teamwork cell small-12">
									
									<div class="break gray"></div>
									
									<div class="grid-x grid-padding-x align-middle">	
										
										<div class="left cell small-12 medium-4">
											<?php 
											$image = get_sub_field('image');
											if( !empty( $image ) ): ?>
											    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											<?php endif; ?>
										</div>
										
										<div class="right cell small-12 medium-8 large-6">
											
											<h2><?php the_sub_field('heading');?></h2>
											
											<h3><?php the_sub_field('sub-heading');?></h3>
											
											<div class="copy-wrap"><?php the_sub_field('copy');?></div>
											
										</div>
									
									</div>
									
								</div>
							
								<?php endwhile;?>
							<?php endif;?>

						</div>
					</div>
				</section>		
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>

