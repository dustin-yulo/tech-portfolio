<?php
/**
 * Register Taxonomies
 *
 * @package DY_Tech_Portfolio
 */

namespace DY_Tech_Portfolio\Includes;

use DY_Tech_Portfolio\Includes\Traits\Singleton;

class Custom_Taxonomies {
	use Singleton;

    protected function __construct() {

		$this->setup_hooks();
	}

	protected function setup_hooks() {

		add_action( 'init', [ $this, 'init_custom_taxonomies' ] );
	}

	public function init_custom_taxonomies() {

		$custom_taxonomies = [
            [
                'taxonomy_key'      => 'dy_tp_project_category',
                'singular'          => 'Category',
                'plural'            => 'Categories',
                'post_type_keys'    => [ 'dy_tp_project' ],
            ]
        ];

        foreach ( $custom_taxonomies as $key => $custom_taxonomy ) {
            $this->register_custom_taxonomy( $custom_taxonomy );
        }
	}

	public function register_custom_taxonomy( $data ) {
        $taxonomy_key   = $data[ 'taxonomy_key' ];
        $singular       = $data[ 'singular' ];
        $plural         = ( isset( $data[ 'plural' ] ) ) ? $data[ 'plural' ] : $singular . 's';
        $post_type_keys = ( isset( $data[ 'post_type_keys' ] ) ) ? $data[ 'post_type_keys' ] : [];

        $labels = [
            'name'              => _x( $plural, 'taxonomy general name', 'dy-tech-portfolio' ),
            'singular_name'     => _x( $singular, 'taxonomy singular name', 'dy-tech-portfolio' ),
            'search_items'      => __( 'Search ' . $plural, 'dy-tech-portfolio' ),
            'all_items'         => __( 'All ' . $plural, 'dy-tech-portfolio' ),
            'parent_item'       => __( 'Parent ' . $singular, 'dy-tech-portfolio' ),
            'parent_item_colon' => __( 'Parent ' . $singular . ':', 'dy-tech-portfolio' ),
            'edit_item'         => __( 'Edit ' . $singular, 'dy-tech-portfolio' ),
            'update_item'       => __( 'Update ' . $singular, 'dy-tech-portfolio' ),
            'add_new_item'      => __( 'Add New ' . $singular, 'dy-tech-portfolio' ),
            'new_item_name'     => __( 'New ' . $singular . ' Name', 'dy-tech-portfolio' ),
            'menu_name'         => __( $plural, 'dy-tech-portfolio' ),
        ];

        $args = [
            'labels' => $labels,
            'description' => __( '', 'dy-tech-portfolio' ),
            'hierarchical' => true,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud' => true,
            'show_in_quick_edit' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
        ];

        register_taxonomy( $taxonomy_key, $post_type_keys, $args );
    }

}
