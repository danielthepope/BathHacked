<?php
/*
Plugin Name: Bespoke custom types
Plugin URI: http://www.issunboshi.com
Description: Bespoke custom types for Orchard City Spa
Version: 0.6
Author: Cliff Williams
Author URI: http://www.issunboshi.com
License: GPL2

Copyright 2013  Cliff Williams  (email : cliffordw1987@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * Create the custom post types for a particluar site "ebooks".
 * 
 */

/**
 * Create the new content types to be used in the CMS e.g. e-books
 * @return Object Details for the new conent types to be used in the CMS
 */
function custom_content_types() {

   /** 
    * Register a custom post type
    *
    * Supplied is a "reasonable" list of defaults
    * @see register_post_type for full list of options for register_post_type
    * @see add_post_type_support for full descriptions of 'supports' options
    * @see get_post_type_capabilities for full list of available fine grained capabilities that are supported
    */
    
   register_post_type( 'package', array(
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'package' ),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'revisions'),
        'taxonomies' => array('post_tag', 'category'),
        'capability_type' => 'post',
        'capabilities' => array(),
        'exclude_from_search' => true,
        'labels' => array(
            'name' => __( 'Packages', 'textdomain' ),
            'singular_name' => __( 'Package Item', 'textdomain' ),
            'add_new' => __( 'Add New Package', 'textdomain' ),
            'add_new_item' => __( 'Add New Package', 'textdomain' ),
            'edit_item' => __( 'Edit Package', 'textdomain' ),
            'new_item' => __( 'New Package', 'textdomain' ),
            'all_items' => __( 'All Packages', 'textdomain' ),
            'view_item' => __( 'View Package', 'textdomain' ),
            'search_items' => __( 'Search Packages', 'textdomain' ),
            'not_found' =>  __( 'No Packages found', 'textdomain' ),
            'not_found_in_trash' => __( 'No Packages found in Trash', 'textdomain' ),
            'parent_item_colon' => '',
            'menu_name' => 'Packages'
        )
    ) );

    register_post_type( 'banner', array(
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'banners'),
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail'),
        'taxonomies' => array('post_tag', 'category'),
        'capability_type' => 'post',
        'capabilities' => array(),
        'exclude_from_search' => true,
        'labels' => array(
            'name' => __( 'Banners', 'textdomain' ),
            'singular_name' => __( 'Banner', 'textdomain' ),
            'add_new' => __( 'Add New Banner', 'textdomain' ),
            'add_new_item' => __( 'Add New Banner', 'textdomain' ),
            'edit_item' => __( 'Edit Banner', 'textdomain' ),
            'new_item' => __( 'New Banner', 'textdomain' ),
            'all_items' => __( 'All Banners', 'textdomain' ),
            'view_item' => __( 'View Banners', 'textdomain' ),
            'search_items' => __( 'Search Banners', 'textdomain' ),
            'not_found' =>  __( 'No Banners found', 'textdomain' ),
            'not_found_in_trash' => __( 'No Banners found in Trash', 'textdomain' ),
            'parent_item_colon' => '',
            'menu_name' => 'Banners'
        )
    ) );

    register_post_type( 'panel', array(
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'panels' ),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'revisions'),
        'taxonomies' => array('post_tag', 'category'),
        'capability_type' => 'post',
        'capabilities' => array(),
        'exclude_from_search' => true,
        'labels' => array(
            'name' => __( 'Panels', 'textdomain' ),
            'singular_name' => __( 'Panel', 'textdomain' ),
            'add_new' => __( 'Add New Panel', 'textdomain' ),
            'add_new_item' => __( 'Add New Panel', 'textdomain' ),
            'edit_item' => __( 'Edit Panel', 'textdomain' ),
            'new_item' => __( 'New Panel', 'textdomain' ),
            'all_items' => __( 'All Panels', 'textdomain' ),
            'view_item' => __( 'View Panels', 'textdomain' ),
            'search_items' => __( 'Search Panels', 'textdomain' ),
            'not_found' =>  __( 'No Panels found', 'textdomain' ),
            'not_found_in_trash' => __( 'No Panels found in Trash', 'textdomain' ),
            'parent_item_colon' => '',
            'menu_name' => 'Panels'
        )
    ) );

    register_post_type( 'testimonial', array(
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'testimonials' ),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'revisions'),
        'taxonomies' => array('post_tag', 'category'),
        'capability_type' => 'post',
        'capabilities' => array(),
        'exclude_from_search' => true,
        'labels' => array(
            'name' => __( 'Testimonials', 'textdomain' ),
            'singular_name' => __( 'Testimonial', 'textdomain' ),
            'add_new' => __( 'Add New Testimonial', 'textdomain' ),
            'add_new_item' => __( 'Add New Testimonial', 'textdomain' ),
            'edit_item' => __( 'Edit Testimonial', 'textdomain' ),
            'new_item' => __( 'New Testimonial', 'textdomain' ),
            'all_items' => __( 'All Testimonials', 'textdomain' ),
            'view_item' => __( 'View Testimonials', 'textdomain' ),
            'search_items' => __( 'Search Testimonials', 'textdomain' ),
            'not_found' =>  __( 'No Testimonials found', 'textdomain' ),
            'not_found_in_trash' => __( 'No Testimonials found in Trash', 'textdomain' ),
            'parent_item_colon' => '',
            'menu_name' => 'Testimonials'
        )
    ) );

    register_post_type( 'destination', array(
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'destination' ),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'revisions'),
        'taxonomies' => array('post_tag', 'category'),
        'capability_type' => 'post',
        'capabilities' => array(),
        'exclude_from_search' => true,
        'labels' => array(
            'name' => __( 'Destinations', 'textdomain' ),
            'singular_name' => __( 'Destination', 'textdomain' ),
            'add_new' => __( 'Add New Destination', 'textdomain' ),
            'add_new_item' => __( 'Add New Destination', 'textdomain' ),
            'edit_item' => __( 'Edit Destination', 'textdomain' ),
            'new_item' => __( 'New Destination', 'textdomain' ),
            'all_items' => __( 'All Destinations', 'textdomain' ),
            'view_item' => __( 'View Destinations', 'textdomain' ),
            'search_items' => __( 'Search Destinations', 'textdomain' ),
            'not_found' =>  __( 'No Destinations found', 'textdomain' ),
            'not_found_in_trash' => __( 'No Destinations found in Trash', 'textdomain' ),
            'parent_item_colon' => '',
            'menu_name' => 'Destinations'
        )
    ) );

    register_post_type( 'hotel', array(
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'hotel' ),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'revisions'),
        'taxonomies' => array('post_tag', 'category'),
        'capability_type' => 'post',
        'capabilities' => array(),
        'exclude_from_search' => true,
        'labels' => array(
            'name' => __( 'Hotels', 'textdomain' ),
            'singular_name' => __( 'Hotel', 'textdomain' ),
            'add_new' => __( 'Add New Hotel', 'textdomain' ),
            'add_new_item' => __( 'Add New Hotel', 'textdomain' ),
            'edit_item' => __( 'Edit Hotel', 'textdomain' ),
            'new_item' => __( 'New Hotel', 'textdomain' ),
            'all_items' => __( 'All Hotels', 'textdomain' ),
            'view_item' => __( 'View Hotels', 'textdomain' ),
            'search_items' => __( 'Search Hotels', 'textdomain' ),
            'not_found' =>  __( 'No Hotels found', 'textdomain' ),
            'not_found_in_trash' => __( 'No Hotels found in Trash', 'textdomain' ),
            'parent_item_colon' => '',
            'menu_name' => 'Hotels'
        )
    ) );
    
    register_post_type( 'style', array(
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'styles' ),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'revisions'),
        'taxonomies' => array('post_tag', 'category'),
        'capability_type' => 'post',
        'capabilities' => array(),
        'exclude_from_search' => true,
        'labels' => array(
            'name' => __( 'Styles', 'textdomain' ),
            'singular_name' => __( 'Style', 'textdomain' ),
            'add_new' => __( 'Add New Style', 'textdomain' ),
            'add_new_item' => __( 'Add New Style', 'textdomain' ),
            'edit_item' => __( 'Edit Style', 'textdomain' ),
            'new_item' => __( 'New Style', 'textdomain' ),
            'all_items' => __( 'All Styles', 'textdomain' ),
            'view_item' => __( 'View Styles', 'textdomain' ),
            'search_items' => __( 'Search Styles', 'textdomain' ),
            'not_found' =>  __( 'No Styles found', 'textdomain' ),
            'not_found_in_trash' => __( 'No Styles found in Trash', 'textdomain' ),
            'parent_item_colon' => '',
            'menu_name' => 'Styles'
        )
    ) );
    
    register_post_type( 'activity', array(
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'activities' ),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'revisions'),
        'taxonomies' => array('post_tag', 'category'),
        'capability_type' => 'post',
        'capabilities' => array(),
        'exclude_from_search' => true,
        'labels' => array(
            'name' => __( 'Activities', 'textdomain' ),
            'singular_name' => __( 'Activity', 'textdomain' ),
            'add_new' => __( 'Add New Activity', 'textdomain' ),
            'add_new_item' => __( 'Add New Activity', 'textdomain' ),
            'edit_item' => __( 'Edit Activity', 'textdomain' ),
            'new_item' => __( 'New Activity', 'textdomain' ),
            'all_items' => __( 'All Activities', 'textdomain' ),
            'view_item' => __( 'View Activities', 'textdomain' ),
            'search_items' => __( 'Search Activities', 'textdomain' ),
            'not_found' =>  __( 'No Activities found', 'textdomain' ),
            'not_found_in_trash' => __( 'No Activities found in Trash', 'textdomain' ),
            'parent_item_colon' => '',
            'menu_name' => 'Activities'
        )
    ) );

    register_post_type( 'offer', array(
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'offers' ),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'revisions'),
        'taxonomies' => array('post_tag', 'category'),
        'capability_type' => 'post',
        'capabilities' => array(),
        'exclude_from_search' => true,
        'labels' => array(
            'name' => __( 'Offers', 'textdomain' ),
            'singular_name' => __( 'Offer', 'textdomain' ),
            'add_new' => __( 'Add New Offer', 'textdomain' ),
            'add_new_item' => __( 'Add New Offer', 'textdomain' ),
            'edit_item' => __( 'Edit Offer', 'textdomain' ),
            'new_item' => __( 'New Offer', 'textdomain' ),
            'all_items' => __( 'All Offers', 'textdomain' ),
            'view_item' => __( 'View Offers', 'textdomain' ),
            'search_items' => __( 'Search Offers', 'textdomain' ),
            'not_found' =>  __( 'No Offers found', 'textdomain' ),
            'not_found_in_trash' => __( 'No Offers found in Trash', 'textdomain' ),
            'parent_item_colon' => '',
            'menu_name' => 'Offers'
        )
    ) );

}

add_action('init', 'custom_content_types');
?>