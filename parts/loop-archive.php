<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">	
	<div class="grid-x grid-padding-x">	
	
		<div class="left cell small-12 medium-4">
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
		</div>			
		
		<div class="right cell small-12 medium-8">
			
			<header class="article-header">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			</header> <!-- end article header -->
							
			<section class="entry-content" itemprop="text">
				<?php the_excerpt() ?>
			</section> <!-- end article section -->
								
			<footer class="article-footer">
		    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointswp') . '</span> ', ', ', ''); ?></p>
			</footer> <!-- end article footer -->	
		
		</div>
		
	</div>		    						
</article> <!-- end article -->
