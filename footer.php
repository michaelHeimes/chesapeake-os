<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>

 			<?php if( get_field('show_reviews') == 'true' ):?>
 				<section class="featured-reviews">
	 				<div class="grid-container">
						<div class="grid-x grid-margin-x grid-margin-x">
							
							<div class="cell small-12 text-center">
								
								<div class="break gray"></div>
								
								<img class="mark" src="wp-content/themes/cos/assets/images/mark.svg"/>
								
								<h2 class="standard"><?php the_field('fr_sub-heading', 'option');?></h2>
								<h1 class="standard"><?php the_field('fr_heading', 'option');?></h1>
								
							</div>
				
							<?php 				
							$args = array(  
						        'post_type' => 'review',
						        'post_status' => 'publish',
						        'posts_per_page' => 3, 
						        'order' => 'DESC',
					            'meta_query' => array(
							        array(
							            'key'   => 'featured',
							            'value' => '1',
							        )
								)
						    );
						
						    $loop = new WP_Query( $args ); 
						        
						    while ( $loop->have_posts() ) : $loop->the_post();?>
			
							<div class="single-review cell small-12 medium-4">
								
								<div class="copy"><?php the_content();?></div>
								
								<div class="author text-center"><?php the_field('authors_name');?></div>

								<div class="stars text-center">
									<?php if( get_field('star_count') == 'five' ):?>
										<img src="wp-content/themes/cos/assets/images/stars-5.svg"/>
									<?php endif;?>
								</div>

								
							</div>
			
						    <?php endwhile;
						
						    wp_reset_postdata(); 
						    ?>
						    
						    <?php 
							$link = get_field('fr_read_more_cta', 'option');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
							<div class="cell small-12 text-center">
							    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							</div>
							<?php endif; ?>
	 				
						</div>
					</div>
				</section>
			<?php endif;?>

			<?php if( get_field('show_reviews') == 'true' ):?>
				<section class="featured-blogs">
					<div class="grid-container">
						<div class="grid-x grid-margin-x grid-margin-x">
							
							<div class="cell small-12 text-center">
								
								<div class="break gray"></div>
																
								<h2 class="standard"><?php the_field('fr_sub-heading', 'option');?></h2>
								<h1 class="standard"><?php the_field('fr_heading', 'option');?></h1>
								
							</div>
				
							<?php 				
							$args = array(  
						        'post_type' => 'post',
						        'post_status' => 'publish',
						        'posts_per_page' => 3, 
						        'order' => 'DESC',
						    );
						
						    $loop = new WP_Query( $args ); 
						        
						    while ( $loop->have_posts() ) : $loop->the_post();?>
			
							<a href="<?php echo get_permalink();?>" class="single-post cell small-12 medium-4">
																
								<?php echo get_the_post_thumbnail( $post_id, 'thumbnail');?>
								
								<h3><?php the_title();?></h3>
								
								<div class="copy"><?php the_excerpt();?></div>
								


								
							</a>
			
						    <?php endwhile;
						
						    wp_reset_postdata(); 
						    ?>
						    	 				
						</div>
					</div>
				</section>
			<?php endif;?>
 
				<section class="directions">
					<div class="grid-container">
						<div class="grid-x grid-margin-x grid-margin-x">		
							
							<div class="cell small-12 text-center">
								
								<h2 class="standard"><?php the_field('dm_sub_heading', 'option');?></h2>
								<h1 class="standard"><?php the_field('dm_heading', 'option');?></h1>
								
							</div>
							
							<div class="half small-12 medium-6 cell"> 	
								
								<?php the_field('green_spring_station_map_embed', 'option');?>			

								<div class="address text-center">
									<div><i class="fas fa-map-marker-alt"></i></div>
									<?php the_field('green_spring_address', 'option');?>			
								</div>
	 				
							</div>

							<div class="half small-12 medium-6 cell"> 	
								
								<?php the_field('swan_creek_map_embed', 'option');?>			

								<div class="address text-center">
									<div><i class="fas fa-map-marker-alt"></i></div>
									<?php the_field('swan_creek_address', 'option');?>			
								</div>
	 				
							</div>

						</div>
	 				</div>
 				</section>
					
				<footer class="footer" role="contentinfo">
					
					<div class="grid-container">
					
						<div class="inner-footer grid-x grid-margin-x grid-padding-x">
							
							<div class="small-12 medium-12 large-12 cell">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
		    				
		    				<div class="small-12 medium-12 large-12 cell">
			    				
			    				<div class="break"></div>
			    				
			    				<div class="footer-logos-wrap grid-x grid-margin-x grid-padding-x align-center align-top">
			    				<?php if( have_rows('footer_logos', 'option') ):?>
			    					<?php while ( have_rows('footer_logos', 'option') ) : the_row();?>	
										<?php 
										$image = get_sub_field('single_logo');
										if( !empty( $image ) ): ?>
										    <img class="cell shrink" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
	
			    					<?php endwhile;?>
			    				<?php endif;?>
			    				</div>
		    				</div>
							
						</div> <!-- end #inner-footer -->
												
					</div>
					
					<div class="footer-bottom">
						<div class="grid-container">
							<div class="grid-x grid-margin-x grid-padding-x align-middle">
								<div class="small-12 medium-12 large-12 cell">
									<div class="source-org copyright"><?php the_field('footer_copyright', 'option');?></div>
								</div>
							</div>
						</div>
					</div>
				
				</footer> <!-- end .footer -->
				
	
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
<!-- 		<script type="text/javascript">var _userway_config={account:'VkTXh5ZAya'};</script> <script type="text/javascript" src="https://cdn.userway.org/widget.js"></script> -->

	</body>
	
	
</html> <!-- end page -->