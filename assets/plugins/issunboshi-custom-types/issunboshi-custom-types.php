<?php
/*
Plugin Name: Bespoke custom types
Plugin URI: http://www.issunboshi.com
Description: Bespoke custom types for Bath Hacked
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
    
   register_post_type( 'candidate', array(
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'candidate' ),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'revisions'),
        'taxonomies' => array('post_tag', 'category'),
        'capability_type' => 'post',
        'capabilities' => array(),
        'exclude_from_search' => true,
        'labels' => array(
            'name' => __( 'Candiates', 'textdomain' ),
            'singular_name' => __( 'Candiate', 'textdomain' ),
            'add_new' => __( 'Add New Candiate', 'textdomain' ),
            'add_new_item' => __( 'Add New Candiate', 'textdomain' ),
            'edit_item' => __( 'Edit Candiate', 'textdomain' ),
            'new_item' => __( 'New Candiate', 'textdomain' ),
            'all_items' => __( 'All Candiates', 'textdomain' ),
            'view_item' => __( 'View Candiate', 'textdomain' ),
            'search_items' => __( 'Search Candiates', 'textdomain' ),
            'not_found' =>  __( 'No Candiates found', 'textdomain' ),
            'not_found_in_trash' => __( 'No Candiates found in Trash', 'textdomain' ),
            'parent_item_colon' => '',
            'menu_name' => 'Candiates'
        )
    ) );

     register_post_type( 'ward', array(
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'ward' ),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'revisions'),
        'taxonomies' => array('post_tag', 'category'),
        'capability_type' => 'post',
        'capabilities' => array(),
        'exclude_from_search' => true,
        'labels' => array(
            'name' => __( 'Wards', 'textdomain' ),
            'singular_name' => __( 'Ward', 'textdomain' ),
            'add_new' => __( 'Add New Ward', 'textdomain' ),
            'add_new_item' => __( 'Add New Ward', 'textdomain' ),
            'edit_item' => __( 'Edit Ward', 'textdomain' ),
            'new_item' => __( 'New Ward', 'textdomain' ),
            'all_items' => __( 'All Wards', 'textdomain' ),
            'view_item' => __( 'View Ward', 'textdomain' ),
            'search_items' => __( 'Search Wards', 'textdomain' ),
            'not_found' =>  __( 'No Wards found', 'textdomain' ),
            'not_found_in_trash' => __( 'No Wards found in Trash', 'textdomain' ),
            'parent_item_colon' => '',
            'menu_name' => 'Wards'
        )
    ) );
}

add_action('init', 'custom_content_types');
?>