<?php 
// registered get vars 
add_filter('query_vars', 'section_queryvars' );

function section_queryvars( $qvars )
{
  $qvars[] = 'section';
  return $qvars;
}

/* get urls segments */
function get_segments(){
	$current_uri = substr($_SERVER['REQUEST_URI'],1); // take off the initial /
	return explode('/',$current_uri);
}

/********************************************************************************************
 * Security snippets
 *******************************************************************************************/

/**
 * Remove the version numnber of the current WP installation to make it more secure
 * @return string Empty string is returned to prevent the version of WP being used being revealed
 */
function wpremove_version() {
	return '';
}
add_filter('the_generator', 'wpremove_version');

//Remove specific login errors to prevent hackers knowing that they got either the password or username correct. Renable if users are facing issues.

add_filter('login_errors',create_function('$a', "return null;"));

/********************************************************************************************
 * Remove unnecessary jQuery references, remove unused wp_head info
 *******************************************************************************************/

/**
 * Remove any other references to jQuery and add the version we specify. If parameter strings are empty no version will be loaded.
 * @return string Return a string which contains a link to a version of jQuery
 */
function mytheme_enqueue_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"), false, '1.9.1');
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');


// remove junk from wp_head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

$new_line = "/n";

/********************************************************************************************
 * Add additional features to post types
 *******************************************************************************************/
/**
 * Add Tags & Categories to the page post type
 */
function addcats_tags_settings() {
	// Add tag metabox to pages editor
	register_taxonomy_for_object_type('post_tag', 'page'); 

	// Add category metabox to pages editor
	register_taxonomy_for_object_type('category', 'page');  
}
// Add to the admin_init hook of your theme functions.php file 
add_action('admin_init', 'addcats_tags_settings');

/**
 * Add the exceprt field to the pages type. Not shown by default
 */
function add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'add_excerpts_to_pages' );

/********************************************************************************************
 * Change default excerpt output
 *******************************************************************************************/
/**
 * Alter the output of excerpts by changing the default string placed at the end of each one.
 * @param  String $more The excerpt text
 * @return String The altered excerpt string
 */
function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


function do_output_buffer() {
        ob_start();
}
add_action('init', 'do_output_buffer');

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

 ?>