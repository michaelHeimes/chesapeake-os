<?php 
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
		<div class="inner-content">
		
		    <main class="main" role="main">
				
				<section class="tab-nav">
					<div class="grid-container">
						<div class="grid-x grid-margin-x">
							<div class="cell small-12">
								<div class="inner">
									<div class="grid-x grid-margin-x grid-padding-x small-up-2 medium-up-4">
								
										<?php 
										$link = get_field('tn_link_1');
										if( $link ): 
										    $link_url = $link['url'];
										    $link_title = $link['title'];
										    $link_target = $link['target'] ? $link['target'] : '_self';
										    ?>
										    <a class="cell" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										<?php endif; ?>
				
										<?php 
										$link = get_field('tn_link_2');
										if( $link ): 
										    $link_url = $link['url'];
										    $link_title = $link['title'];
										    $link_target = $link['target'] ? $link['target'] : '_self';
										    ?>
										    <a class="cell" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										<?php endif; ?>
										
										<?php 
										$link = get_field('tn_link_3');
										if( $link ): 
										    $link_url = $link['url'];
										    $link_title = $link['title'];
										    $link_target = $link['target'] ? $link['target'] : '_self';
										    ?>
										    <a class="cell" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										<?php endif; ?>
										
										<?php 
										$link = get_field('tn_link_4');
										if( $link ): 
										    $link_url = $link['url'];
										    $link_title = $link['title'];
										    $link_target = $link['target'] ? $link['target'] : '_self';
										    ?>
										    <a class="cell" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										<?php endif; ?>
								
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>		
				
				<section class="intro">
					<div class="grid-container">
						<div class="grid-x grid-margin-x grid-margin-x">
							<div class="cell small-12">
						
								<?php if($subheading = get_field('intro_sub-heading')):?>
								<h2 class="standard text-center"><?php echo $subheading;?></h2>
								<?php endif;?>
			
								<?php if($heading = get_field('intro_heading')):?>
								<h1 class="standard text-center"><?php echo $heading;?></h1>
								<?php endif;?>
								
								<div class="break"></div>
			
								<?php if($copy = get_field('intro_copy')):?>
								<div class="copy-wrap"><?php echo $copy;?></div>
								<?php endif;?>
					
							</div>
						</div>
						
						<div class="logos-wrap grid-x grid-margin-x grid-margin-x align-center">
							<?php if( have_rows('intro_member_logos') ):?>
								<?php while ( have_rows('intro_member_logos') ) : the_row();?>	
								<div class="single-logo cell text-center small-12 medium-6 mobile-auto">
									
									<?php if( have_rows('single_logo') ):?>
										<?php while ( have_rows('single_logo') ) : the_row();?>	
									
										<?php 
										$image = get_sub_field('logo');
										if( !empty( $image ) ): ?>
										<div class="logo-wrap">
										    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										</div>
										<?php endif; ?>
									
										<?php if($text = get_sub_field('text')):?>
										<div><?php echo $text;?></div>
										<?php endif;?>
									
										<?php endwhile;?>
									<?php endif;?>
								
								</div>
								<?php endwhile;?>
							<?php endif;?>

						</div>
						
						<?php 
						$link = get_field('intro_cta_button');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						<div class="text-center">
						    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
						<?php endif; ?>
						
					</div>
				</section>			
				
				<section class="about">
					<div class="grid-container">
						<div class="grid-x grid-margin-x grid-margin-x">
							<div class="cell small-12">
								
								<?php 
								$image = get_field('about_full_width_image');
								if( !empty( $image ) ): ?>
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
								
								<div class="content-wrap grid-x grid-margin-x grid-margin-x">
									
									<?php get_sidebar(); ?>
									
									<div class="copy-wrap cell auto">
										<?php the_field('about_bio_copy');?>	
										
										<?php if( have_rows('about_about_ctas') ):?>
										<div class="buttons-wrap grid-x grid-margin-x grid-margin-x">
											<?php while ( have_rows('about_about_ctas') ) : the_row();?>	
										
												<?php 
												$link = get_sub_field('cta_link');
												if( $link ): 
												    $link_url = $link['url'];
												    $link_title = $link['title'];
												    $link_target = $link['target'] ? $link['target'] : '_self';
												    ?>
												    												    
												    <a class="button cell shrink" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
												<?php endif; ?>
										
											<?php endwhile;?>
										</div>
										<?php endif;?>
										
																	
									</div>
									
								</div>

																
							</div>
						</div>
					</div>
				</section>
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>