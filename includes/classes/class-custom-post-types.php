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

		$this->setup_hooks();
	}

	protected function setup_hooks() {

		// Actions
        add_action( 'init', [ $this, 'init_custom_post_types' ] );
	}

	public function init_custom_post_types() {

		$custom_post_types = [
            [
                'post_type'     => 'dy_tp_project',
                'singular'      => 'Project',
                'slug'          => 'projects',
                'description'   => 'Works that I did',
                'menu_icon'     => 'dashicons-archive',
                'supports'      => [ 'title', 'editor', 'thumbnail', 'custom-fields' ]
            ]
        ];

        foreach ( $custom_post_types as $key => $custom_post_type ) {
            $this->register_custom_post_type( $custom_post_type );
        }
	}

	public function register_custom_post_type( $data ) {
        $post_type      = $data[ 'post_type' ];
        $singular       = $data[ 'singular' ];
        $slug           = $data[ 'slug' ];
        $description    = $data[ 'description' ];
        $plural         = ( isset( $data[ 'plural' ] ) ) ? $data[ 'plural' ] : $singular . 's';
        $menu_icon      = ( isset( $data[ 'menu_icon' ] ) ) ? $data[ 'menu_icon' ] : 'dashicons-admin-generic';
        $supports       = ( isset( $data[ 'supports' ] ) ) ? $data[ 'supports' ] : [];

        $labels = [
            'name' => _x( $plural, 'Post Type General Name', 'dy-tech-portfolio' ),
            'singular_name' => _x( $singular, 'Post Type Singular Name', 'dy-tech-portfolio' ),
            'menu_name' => _x( $plural, 'Admin Menu text', 'dy-tech-portfolio' ),
            'name_admin_bar' => _x( $singular, 'Add New on Toolbar', 'dy-tech-portfolio' ),
            'archives' => __( $singular . ' Archives', 'dy-tech-portfolio' ),
            'attributes' => __( $singular . ' Attributes', 'dy-tech-portfolio' ),
            'parent_item_colon' => __( 'Parent ' . $singular . ':', 'dy-tech-portfolio' ),
            'all_items' => __( 'All ' . $plural, 'dy-tech-portfolio' ),
            'add_new_item' => __( 'Add New ' . $singular, 'dy-tech-portfolio' ),
            'add_new' => __( 'Add New', 'dy-tech-portfolio' ),
            'new_item' => __( 'New ' . $singular, 'dy-tech-portfolio' ),
            'edit_item' => __( 'Edit ' . $singular, 'dy-tech-portfolio' ),
            'update_item' => __( 'Update ' . $singular, 'dy-tech-portfolio' ),
            'view_item' => __( 'View ' . $singular, 'dy-tech-portfolio' ),
            'view_items' => __( 'View ' . $plural, 'dy-tech-portfolio' ),
            'search_items' => __( 'Search ' . $singular, 'dy-tech-portfolio' ),
            'not_found' => __( 'Not found', 'dy-tech-portfolio' ),
            'not_found_in_trash' => __( 'Not found in Trash', 'dy-tech-portfolio' ),
            'featured_image' => __( 'Featured Image', 'dy-tech-portfolio' ),
            'set_featured_image' => __( 'Set featured image', 'dy-tech-portfolio' ),
            'remove_featured_image' => __( 'Remove featured image', 'dy-tech-portfolio' ),
            'use_featured_image' => __( 'Use as featured image', 'dy-tech-portfolio' ),
            'insert_into_item' => __( 'Insert into ' . $singular, 'dy-tech-portfolio' ),
            'uploaded_to_this_item' => __( 'Uploaded to this ' . $singular, 'dy-tech-portfolio' ),
            'items_list' => __( $plural . ' list', 'dy-tech-portfolio' ),
            'items_list_navigation' => __( $plural . ' list navigation', 'dy-tech-portfolio' ),
            'filter_items_list' => __( 'Filter ' . $plural . ' list', 'dy-tech-portfolio' ),
        ];

        $args = [
            'label' => __( $singular, 'dy-tech-portfolio' ),
            'description' => __( $description, 'dy-tech-portfolio' ),
            'labels' => $labels,
            'menu_icon' => $menu_icon,
            'supports' => $supports,
            'taxonomies' => [],
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 20,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'exclude_from_search' => false,
            'show_in_rest' => true,
            'publicly_queryable' => true,
            'capability_type' => 'post',
            'rewrite' => [ 'slug' => $slug ],
        ];

        register_post_type( $post_type, $args );
    }

}
