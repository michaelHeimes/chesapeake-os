<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	
	
	
	
	<div class="mobile-header hide-for-max">
		<div class="grid-container">	
			<div class="top grid-x grid-padding-x align-justify">

				<ul class="menu align-left left cell shrink">
					<li><a href ="tel:<?php the_field('contact_phone_number', 'option');?>"><i class="fas fa-phone"></i><?php the_field('contact_phone_number', 'option');?></a></li>
					<li><a href="mailto:<?php the_field('contact_email_address', 'option');?>"><i class="far fa-envelope"></i>Email</a></li>
				</ul>
				
				<ul class="menu right cell shrink">
					<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
					<li><a class="menu-toggle" data-toggle="off-canvas"><span></span><span></span><span></span></a></li>
				</ul>
				
			</div>
			
			<div class="bottom grid-x grid-padding-x align-justify">
				
				<div class="cell small-12">
					<div class="break"></div>
				</div>
				
				<ul class="menu cell small-12">
					<li class="show-for-sr"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
					<li class="logo text-center">
						<a href="<?php echo home_url(); ?>">
							<?php 
							$image = get_field('header_logo', 'option');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						</a>
					</li>
				</ul>
				
			</div>
		</div>
	</div>
	
	
	
	
	<div class="tb-left show-for-max">
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
	
	<div class="tb-right show-for-max">
		
		<div class="search-wrap">
			<div class="grid-container">
				
				<form method="get" action="/">
					<input type="text" name="s" placeholder="Enter search terms here" class="">
					<input type="hidden" name="post_type" value="post">
					<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
					<button type="button" id="close-search">
						<i class="fal fa-times"></i>
					</button>
				</form>

			</div>			
		</div>
		
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle">
				
				<div class="cell small-12">
					<?php joints_top_nav(); ?>	
					
					<a href="#" class="search-trigger">
						<i class="fas fa-search"></i>
					</a>
					
				</div>
			</div>
		</div>
	</div>
	
</div>
