<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="tb-left">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle">
				
				<ul class="left menu cell small-12 medium-6">
					<li class="show-for-sr"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
					<li class="logo">
						<a href="<?php echo home_url(); ?>">
							<?php 
							$image = get_field('header_logo', 'option');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						</a>
					</li>
				</ul>
				
				<div class="right cell small-12 medium-6">
					
					<?php if($tagline = get_field('header_tagline', 'option')):?>
					<div class="text-right show-for-medium"><?php echo $tagline;?></div>
					<?php endif;?>
				
					<ul class="menu align-right">
						<li><a href ="tel:<?php the_field('contact_phone_number', 'option');?>"><i class="fas fa-phone"></i><?php the_field('contact_phone_number', 'option');?></a></li>
						<li><a href="mailto:<?php the_field('contact_email_address', 'option');?>"><i class="far fa-envelope"></i><?php the_field('contact_email_address', 'option');?></a></li>
					</ul>
				
				</div>
			
			</div>
		
		</div>
	</div>
	<div class="tb-right show-for-medium">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				
				<div class="cell small-12">
					<?php joints_top_nav(); ?>	
				</div>
			</div>
		</div>
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>
</div>
