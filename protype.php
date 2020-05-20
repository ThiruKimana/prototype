 <?php
  /**
  * Plugin Name: prototype
  * Author URI: http://geekedtype.com
  * Description: This is a basic plugin that creates custom posts
  * Author: Thiru Kimana <kimstilltheman@geekedtype.com>
  * Plugin Version: 0.0.1
  *	License: GNU General Public License version 3.0
  **/
function GT_custom_post_types() {
    $labels = array(
        'name'                  => _x( 'Photos', 'Post type general name', 'photo' ),
        'singular_name'         => _x( 'Photo', 'Post type singular name', 'photo' ),
        'menu_name'             => _x( 'Photos', 'Admin Menu text', 'photo' ),
        'name_admin_bar'        => _x( 'Photo', 'Add New on Toolbar', 'photo' ),
        'add_new'               => __( 'Add New', 'photo' ),
        'add_new_item'          => __( 'Add New photo', 'photo' ),
        'new_item'              => __( 'New photo', 'photo' ),
        'edit_item'             => __( 'Edit photo', 'photo' ),
        'view_item'             => __( 'View photo', 'photo' ),
        'all_items'             => __( 'All photos', 'photo' ),
        'search_items'          => __( 'Search photos', 'photo' ),
        'parent_item_colon'     => __( 'Parent photos:', 'photo' ),
        'not_found'             => __( 'No photos found.', 'photo' ),
        'not_found_in_trash'    => __( 'No photos found in Trash.', 'photo' ),
        'featured_image'        => _x( 'Photo Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'photo' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'photo' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'photo' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'photo' ),
        'archives'              => _x( 'Photo archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'photo' ),
        'insert_into_item'      => _x( 'Insert into photo', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'photo' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this photo', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'photo' ),
        'filter_items_list'     => _x( 'Filter photos list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'photo' ),
        'items_list_navigation' => _x( 'Photos list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'photo' ),
        'items_list'            => _x( 'Photos list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'photo' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Photo custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
		'menu_icon'			 => 'dashicons-pressthis',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'Photo', $args );
}
add_action( 'init', 'GT_custom_post_types' );
?>