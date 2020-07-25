<?php 
/**
 * The sidebar containing the main widget area
 */
 ?>

<div id="sidebar1" class="sidebar small-12 medium-4 large-4 cell" role="complementary">

	<?php if(is_page_template('page-templates/page-template-home.php')):?>

		<?php 
			$image = get_field('about_bio_image');
		if( !empty( $image ) ): ?>
		    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>


	<?php endif;?>	

</div>