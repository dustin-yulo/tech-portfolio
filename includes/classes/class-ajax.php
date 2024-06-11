<?php
/**
 * Register ajax functions
 *
 * @package DY_Tech_Portfolio
 */

namespace DY_Tech_Portfolio\Includes;

use DY_Tech_Portfolio\Includes\Traits\Singleton;

class Ajax {
	use Singleton;

	protected function __construct() {

		$this->setup_hooks();
	}

	protected function setup_hooks() {
        
        add_action( 'wp_ajax_load_projects', [ $this, 'load_projects' ] );
        add_action( 'wp_ajax_nopriv_load_projects', [ $this, 'load_projects' ] );
	}

    public function load_projects() {
        $page = isset( $_POST[ 'page' ] ) ? absint( $_POST[ 'page' ] ) : 1;
    
        $args = [
            'post_type'      => 'dy_tp_project',
            'post_status'    => 'publish',
            'paged'          => $page,
        ];

        $args = apply_filters( 'dy_query_args_filter', $args );
    
        $query = new \WP_Query( $args );
    
        ob_start();
    
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();
                get_template_part( 'template-parts/content/content', 'archive-project' );
            }
        }
    
        $html = ob_get_clean();
        $has_more_projects = $query->max_num_pages > $page;
    
        wp_reset_postdata();
    
        wp_send_json( [
            'html' => $html,
            'has_more_projects' => $has_more_projects
        ] );
    }
}
