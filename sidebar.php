<?php 
/**
 * The sidebar containing the main widget area
 */
 ?>

<div id="sidebar1" class="sidebar lc-mw np small-12 large-4 cell" role="complementary">

	<?php if(is_page_template('page-templates/page-template-home.php')):?>

		<?php 
			$image = get_field('about_bio_image');
		if( !empty( $image ) ): ?>
		    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		    
		    <?php $image = get_field('about_bio_image'); ?>
		    <?php if($image): //dont output an empty image tag ?>
		    	<img src="<?php echo $image['sizes']['sidebar']; ?>" width="<?php echo $image['sizes']['sidebar-width']; ?>" height="<?php echo $image['sizes']['sidebar-height']; ?>" alt="<?php echo $image['caption']; ?>" />
		    <?php endif; ?>
		    		    
		    
		    <?php $image = get_field('about_bio_image'); 
		    $image_size = 'sidebar';
		    $image_url = $image['sizes'][$image_size];
		    if($image): //dont output an empty image tag ?>
		    	<img src="<?php echo $image_url; ?>" width="<?php echo $image['sizes']['sidebar-width']; ?>" height="<?php echo $image['sizes']['sidebar-height']; ?>" alt="<?php echo $image['caption']; ?>" />
		    <?php endif; ?>
		    
		    
		<?php endif; ?>
		
		<div class="content-header cell small-12 large-8 large-offset-4 hide-for-large text-center">
			
			<h1><?php the_field('about_heading');?></h1>
			
			<h2><?php the_field('about_sub-heading');?></h2>
			
		</div>
		
	<?php elseif(is_single()):?>
	
		<h3>Recent Posts</h3>

		<?php 			
			
		$args = array(  
	        'post_type' => 'post',
	        'post_status' => 'publish',
	        'posts_per_page' => 5, 
	        'order' => 'DESC',
	        'post__not_in' => array(get_the_ID())
	    );
	
	    $loop = new WP_Query( $args ); 
	        
	    while ( $loop->have_posts() ) : $loop->the_post();?>

		<div><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>

	    <?php endwhile;
	
	    wp_reset_postdata(); 
	    ?>

	<?php else:?>
	
		<?php if( have_rows('sidebar_image') ):?>
			<?php while ( have_rows('sidebar_image') ) : the_row();?>
			
			<?php 
				$image = get_sub_field('image');
			if( !empty( $image ) ): ?>
			    <img class="<?php the_sub_field('image_style'); ?>" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>	
		
			<?php endwhile;?>
		<?php endif;?>

		<div class="content-header cell small-12 large-8 large-offset-4 hide-for-large text-center">
			
			<h1><?php the_field('heading');?></h1>
			
			<h2><?php the_field('sub-heading');?></h2>
			
		</div>

	<?php endif;?>	

</div>