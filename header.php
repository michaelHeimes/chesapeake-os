<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<script src="https://kit.fontawesome.com/c9bcacdc95.js" crossorigin="anonymous"></script>
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<?php if($head_snippets = get_field('tracking_code_placed_after_opening_head', 'option')):
			echo $head_snippets;
		endif;?>

		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">
			<!-- Load off-canvas container. Feel free to remove if not using. -->			
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<header class="header" role="banner">
							
					 <!-- This navs will be applied to the topbar, above all content 
						  To see additional nav styles, visit the /parts directory -->
					 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
	 	
				</header> <!-- end .header -->
				
				<?php if(is_page() || is_home() || is_archive()):?>

				<div class="grid-container">
					<div class="grid-x grid-padding-x">
		
						<div class="banner cell small-12">
							<div class="grid-container">
								<div class="col-rev grid-x grid-padding-x">
								
									<div class="left lc-mw cell small-12 large-auto">
										
										<?php if(is_page()):?>
											
											<?php if($heading = get_field('banner_heading')):?>
												<h1 class="text-center"><?php echo $heading;?></h1>
											<?php endif;?>
											
											<?php 
											$link = get_field('banner_cta_link');
											if( $link ): 
											    $link_url = $link['url'];
											    $link_title = $link['title'];
											    $link_target = $link['target'] ? $link['target'] : '_self';
											    ?>
											    
											    <div class="break show-for-large"></div>
											    
											    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
											<?php endif; ?>
												
										<?php endif;?>
										
										<?php if(is_home()):?>
	
											<?php if($heading = get_field('banner_heading', 'option')):?>
												<h1 class="text-center"><?php echo $heading;?></h1>
											<?php endif;?>
											
											<?php 
											$link = get_field('banner_cta_link', 'option');
											if( $link ): 
											    $link_url = $link['url'];
											    $link_title = $link['title'];
											    $link_target = $link['target'] ? $link['target'] : '_self';
											    ?>
											    
											    <div class="break show-for-large"></div>
											    
											    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
											<?php endif; ?>
											
										<?php endif;?>

										<?php if(is_archive()):?>
	
											<?php if($heading = get_field('reviews_banner_heading', 'option')):?>
												<h1 class="text-center"><?php echo $heading;?></h1>
											<?php endif;?>
											
											<?php 
											$link = get_field('reviews_banner_cta_link', 'option');
											if( $link ): 
											    $link_url = $link['url'];
											    $link_title = $link['title'];
											    $link_target = $link['target'] ? $link['target'] : '_self';
											    ?>
											    
											    <div class="break show-for-large"></div>
											    
											    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
											<?php endif; ?>
											
										<?php endif;?>
									
									</div>
																														
									
									<?php if(is_page()):?>	
			
										<?php
											$imgID = get_field('banner_image');
											$imgSize = "banner";
											$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
										
										?>
										
										<div class="right cell small-12 large-auto" style="background-image: url(<?php echo $imgArr[0]; ?> );"></div>
												
									<?php endif;?>
										
																			
									<?php if(is_home()):?>
										<?php
											$imgID = get_field('banner_image', 'option');
											$imgSize = "banner";
											$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
										
										?>
									
										<div class="right cell small-12 medium-auto" style="background-image: url(<?php echo $imgArr[0]; ?> );"></div>
										
									<?php endif;?>
									

									<?php if(is_archive()):?>
										<?php
											$imgID = get_field('reviews_banner_image', 'option');
											$imgSize = "banner";
											$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
										
										?>
									
										<div class="right cell small-12 medium-auto" style="background-image: url(<?php echo $imgArr[0]; ?> );"></div>
										
									<?php endif;?>
								
								</div>
							</div>
						</div>
			
					</div>
				</div>
				
				<?php endif;?>