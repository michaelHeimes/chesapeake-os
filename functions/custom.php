<?php

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

if( function_exists('acf_set_options_page_title') ) {
    acf_set_options_page_title( __('Theme Options') );
}


// Redirect SIngle REview posts to Reviews Page
add_action( 'template_redirect', 'redirect_cpt_singular_posts' );
    function redirect_cpt_singular_posts() {
      if ( is_singular('review') ) {
        wp_redirect( '/patient-reviews/', 302 );
        exit;
      }
 	}


// Disable Gutenberg

if (version_compare($GLOBALS['wp_version'], '5.0-beta', '>')) {
	
	// WP > 5 beta
	add_filter('use_block_editor_for_post_type', '__return_false', 10);
	
} else {
	
	// WP < 5 beta
	add_filter('gutenberg_can_edit_post_type', '__return_false', 10);
	
}





 function save_posted_data( $posted_data ) {
	 
	global $wpdb;

	$args = array(
	'post_type' => 'review',
	'post_status'=>'pending',
	'post_title'=>$posted_data['your-name'],
	'post_content'=>$posted_data['your-review'],
	);
	$post_id = wp_insert_post($args);
		
	if(!is_wp_error($post_id)){
		
		$field_key1 = "field_5f1b8beca20aa";
		update_field( $field_key1, $posted_data['your-name'], $post_id );

		$field_key2 = "field_5f1b868e83ade";
		update_field( $field_key2, $posted_data['radio-108'], $post_id );		
		
		if( isset($posted_data['your-name']) ){
			update_post_meta($post_id, 'your-name', $posted_data['your-name']);
		}
		if( isset($posted_data['your-email']) ){
			update_post_meta($post_id, 'your-email', $posted_data['your-email']);
		}
		/*
		if( isset($posted_data['your-email']) ){
		update_post_meta($post_id, 'your-email', $posted_data['your-email']);
		}
		*/
		// if( isset($posted_data['your-subject']) ){
		//   update_post_meta($post_id, 'your-subject', $posted_data['your-subject']);
		// }
		if( isset($posted_data['your-message']) ){
			update_post_meta($post_id, 'your-message', $posted_data['your-message']);
		}
		//and so on ...
			return $posted_data;
	
	}
}

add_filter( 'wpcf7_posted_data', 'save_posted_data' );