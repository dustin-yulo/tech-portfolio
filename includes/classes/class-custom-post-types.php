<?php
/**
 * Register Post Types
 *
 * @package DY_Tech_Portfolio
 */

namespace DY_Tech_Portfolio\Includes;

use DY_Tech_Portfolio\Includes\Traits\Singleton;

class Custom_Post_Types {
	use Singleton;

	protected function __construct() {

		add_action( 'init', [ $this, 'init_custom_post_types' ] );
	}

	protected function init_custom_post_types() {

		$custom_post_types = [
            [
                'post_type' => 'tech_portfolio_project',
                'singular'  => 'Project',
                'slug'      => 'project',
                'menu_icon' => 'dashicons-archive'
            ]
        ];

        foreach ($custom_post_types as $key => $custom_post_type) {
            $this->register_custom_post_type($custom_post_type);
        }
	}

	private function register_custom_post_type($data)
    {
        $post_type = $data['post_type'];
        $slug      = $data['slug'];
        $singular  = $data['singular'];
        $plural    = (isset($data['plural'])) ? $data['plural'] : $data['singular'] . 's';
        $menu_icon  = $data['menu_icon'];

        // $labels = array(
        //     'name' => _x( 'Projects', 'Post Type General Name', 'dy-tech-portfolio' ),
        //     'singular_name' => _x( 'Project', 'Post Type Singular Name', 'dy-tech-portfolio' ),
        //     'menu_name' => _x( 'Projects', 'Admin Menu text', 'dy-tech-portfolio' ),
        //     'name_admin_bar' => _x( 'Project', 'Add New on Toolbar', 'dy-tech-portfolio' ),
        //     'archives' => __( 'Project Archives', 'dy-tech-portfolio' ),
        //     'attributes' => __( 'Project Attributes', 'dy-tech-portfolio' ),
        //     'parent_item_colon' => __( 'Parent Project:', 'dy-tech-portfolio' ),
        //     'all_items' => __( 'All Projects', 'dy-tech-portfolio' ),
        //     'add_new_item' => __( 'Add New Project', 'dy-tech-portfolio' ),
        //     'add_new' => __( 'Add New', 'dy-tech-portfolio' ),
        //     'new_item' => __( 'New Project', 'dy-tech-portfolio' ),
        //     'edit_item' => __( 'Edit Project', 'dy-tech-portfolio' ),
        //     'update_item' => __( 'Update Project', 'dy-tech-portfolio' ),
        //     'view_item' => __( 'View Project', 'dy-tech-portfolio' ),
        //     'view_items' => __( 'View Projects', 'dy-tech-portfolio' ),
        //     'search_items' => __( 'Search Project', 'dy-tech-portfolio' ),
        //     'not_found' => __( 'Not found', 'dy-tech-portfolio' ),
        //     'not_found_in_trash' => __( 'Not found in Trash', 'dy-tech-portfolio' ),
        //     'featured_image' => __( 'Featured Image', 'dy-tech-portfolio' ),
        //     'set_featured_image' => __( 'Set featured image', 'dy-tech-portfolio' ),
        //     'remove_featured_image' => __( 'Remove featured image', 'dy-tech-portfolio' ),
        //     'use_featured_image' => __( 'Use as featured image', 'dy-tech-portfolio' ),
        //     'insert_into_item' => __( 'Insert into Project', 'dy-tech-portfolio' ),
        //     'uploaded_to_this_item' => __( 'Uploaded to this Project', 'dy-tech-portfolio' ),
        //     'items_list' => __( 'Projects list', 'dy-tech-portfolio' ),
        //     'items_list_navigation' => __( 'Projects list navigation', 'dy-tech-portfolio' ),
        //     'filter_items_list' => __( 'Filter Projects list', 'dy-tech-portfolio' ),
        // );
        // $rewrite = array(
        //     'slug' => 'tech_portfolio_project',
        //     'with_front' => true,
        //     'pages' => true,
        //     'feeds' => true,
        // );
        // $args = array(
        //     'label' => __( 'Project', 'dy-tech-portfolio' ),
        //     'description' => __( '', 'dy-tech-portfolio' ),
        //     'labels' => $labels,
        //     'menu_icon' => 'dashicons-admin-customizer',
        //     'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        //     'taxonomies' => array(),
        //     'public' => true,
        //     'show_ui' => true,
        //     'show_in_menu' => true,
        //     'menu_position' => 5,
        //     'show_in_admin_bar' => true,
        //     'show_in_nav_menus' => true,
        //     'can_export' => true,
        //     'has_archive' => true,
        //     'hierarchical' => false,
        //     'exclude_from_search' => false,
        //     'show_in_rest' => true,
        //     'publicly_queryable' => true,
        //     'capability_type' => 'post',
        //     'rewrite' => $rewrite,
        // );
        // register_post_type( 'tech_portfolio_project', $args );

        // $labels = array(
        //     'name'               => _x($plural, 'post type general name', 'kalimero'),
        //     'singular_name'      => _x($singular, 'post type singular name', 'kalimero'),
        //     'menu_name'          => _x($plural, 'admin menu', 'kalimero'),
        //     'name_admin_bar'     => _x($singular, 'add new on admin bar', 'kalimero'),
        //     'add_new'            => _x('Add New', $singular, 'kalimero'),
        //     'add_new_item'       => __('Add New ' . $singular, 'kalimero'),
        //     'new_item'           => __('New ' . $singular, 'kalimero'),
        //     'edit_item'          => __('Edit ' . $singular, 'kalimero'),
        //     'update_item'        => __('Update ' . $singular, 'kalimero'),
        //     'view_item'          => __('View ' . $singular, 'kalimero'),
        //     'all_items'          => __('All ' . $plural, 'kalimero'),
        //     'search_items'       => __('Search ' . $plural, 'kalimero'),
        //     'parent_item_colon'  => __('Parent ' . $plural . ':', 'kalimero'),
        //     'not_found'          => __('No ' . $plural . ' found.', 'kalimero'),
        //     'not_found_in_trash' => __('No ' . $plural . ' found in Trash.', 'kalimero')
        // );

        // $args = array(
        //     'labels'             => $labels,
        //     'description'        => __($singular . '.', 'kalimero'),
        //     'public'             => true,
        //     'publicly_queryable' => true,
        //     'show_ui'            => true,
        //     'show_in_menu'       => true,
        //     'query_var'          => true,
        //     'rewrite'            => array('slug' => $slug),
        //     'capability_type'    => 'post',
        //     'has_archive'        => false,
        //     'hierarchical'       => false,
        //     'menu_position'      => null,
        //     'supports'           => array('title', 'author', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),
        //     'menu_icon'          => $menu_icon,
        //     'show_in_rest'       => true,
        // );

        // register_post_type($post_type, $args);
    }

}
