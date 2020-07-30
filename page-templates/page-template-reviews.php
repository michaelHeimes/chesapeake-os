<?php 
/**
 * Template Name: Reviews Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content content-row">
		<div class="inner-content">
		
		    <main class="main" role="main">
			    <div class="grid-container">
				    <div class="grid-x grid-padding-x">
				
						<section class="cell small-12 large-6 large-offset-4">
							
							<div class="content-header">
								
								<h1><?php the_field('heading');?></h1>
								
								<h2><?php the_field('sub-heading');?></h2>
								
							</div>
							
							<div class="contact-heading">
								<?php the_field('contact_heading');?>
							</div>
							
							<div class="contact-links">
								<div><a href ="tel:<?php the_field('contact_phone_number', 'option');?>"><i class="fas fa-phone"></i><?php the_field('contact_phone_number', 'option');?></a></div>
								<div><a href="mailto:<?php the_field('contact_email_address', 'option');?>"><i class="far fa-envelope"></i><?php the_field('contact_email_address', 'option');?></a></div>
							</div>
							
							<div class="hours">
								<h3>Hours</h3>
								<?php the_field('hours');?>
							</div>
							
							<div class="location">
								
							<?php if( have_rows('lutherville_location') ):?>
								<?php while ( have_rows('lutherville_location') ) : the_row();?>	
								
								<div class="break gray"></div>
								
								<h2><?php the_sub_field('heading');?></h2>
								
								<div class="address"><?php the_sub_field('address');?></div>
								
								<?php the_field('green_spring_station_map_embed', 'option');?>			
<!-- 								<?php the_field('swan_creek_map_embed', 'option');?> -->
								
								<div class="contact-directions"><?php the_sub_field('directions');?></div>
								
								<?php if( get_sub_field('directions_file_download') ): ?>
								    <a class="button" href="<?php the_field('file'); ?>" download>Download Directions</a>
								<?php endif; ?>
							
								<?php endwhile;?>
							<?php endif;?>
								
							</div>

							<div class="location">
								
							<?php if( have_rows('havre_de_grace_location') ):?>
								<?php while ( have_rows('havre_de_grace_location') ) : the_row();?>	
								
								<div class="break gray"></div>
								
								<h2><?php the_sub_field('heading');?></h2>
								
								<div class="address"><?php the_sub_field('address');?></div>
								
								<?php the_field('swan_creek_map_embed', 'option');?>
								
								<div class="contact-directions"><?php the_sub_field('directions');?></div>
								
								<?php if( get_sub_field('directions_file_download') ): ?>
								    <a class="button" href="<?php the_field('file'); ?>" download>Download Directions</a>
								<?php endif; ?>
							
								<?php endwhile;?>
							<?php endif;?>
								
							</div>
							
						</section>
	
				    </div>		
			    </div>	
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>

