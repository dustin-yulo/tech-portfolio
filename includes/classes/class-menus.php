<?php
/**
 * Register Menus
 *
 * @package DY_Tech_Portfolio
 */

namespace DY_Tech_Portfolio\Includes;

use DY_Tech_Portfolio\Includes\Traits\Singleton;

class Menus {

	use Singleton;

	protected function __construct() {

		$this->setup_hooks();
	}

	protected function setup_hooks() {

		add_action( 'init', [ $this, 'register_menus' ] );
	}

	public function register_menus() {
		register_nav_menus( [
			'dy-tech-portfolio-primary-menu' => esc_html__( 'Primary menu', 'dy-tech-portfolio' )
		] );
	}

}
