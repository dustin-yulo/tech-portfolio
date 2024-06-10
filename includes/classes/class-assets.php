<?php
/**
 * Enqueue theme assets
 *
 * @package DY_Tech_Portfolio
 */

namespace DY_Tech_Portfolio\Includes;

use DY_Tech_Portfolio\Includes\Traits\Singleton;

class Assets {
	use Singleton;

	protected function __construct() {

		$this->setup_hooks();
	}

	protected function setup_hooks() {

		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'admin_register_styles' ] );
	}

	public function register_styles() {

		// Register styles
		wp_register_style( 'dy-tech-portfolio-fonts', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/library/google-fonts/fonts.css', [], null, 'all' );
		wp_register_style( 'font-awesome', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/library/font-awesome/css/fontawesome.min.css', [], '6.2.1', 'all' );
		wp_register_style( 'font-awesome-brands', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/library/font-awesome/css/brands.min.css', [ 'font-awesome' ], '6.2.1', 'all' );
		wp_register_style( 'font-awesome-regular', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/library/font-awesome/css/regular.min.css', [ 'font-awesome' ], '6.2.1', 'all' );
		wp_register_style( 'font-awesome-solid', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/library/font-awesome/css/solid.min.css', [ 'font-awesome' ], '6.2.1', 'all' );
		wp_register_style( 'dy-tech-portfolio-main', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/css/main.css', [ 'dy-tech-portfolio-fonts' ], null, 'all' );

		// Enqueue Styles
		wp_enqueue_style( 'dy-tech-portfolio-fonts' );
		wp_enqueue_style( 'font-awesome' );
		wp_enqueue_style( 'font-awesome-brands' );
		wp_enqueue_style( 'font-awesome-regular' );
		wp_enqueue_style( 'font-awesome-solid' );
		wp_enqueue_style( 'dy-tech-portfolio-main' );
	}

	public function admin_register_styles() {
		// Register styles
		wp_register_style( 'dy-tech-portfolio-fonts', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/library/google-fonts/fonts.css', [], null, 'all' );

		// Enqueue Styles
		wp_enqueue_style( 'dy-tech-portfolio-fonts' );
	}

	public function register_scripts() {

		// Register scripts.
		wp_register_script( 'dy-tech-portfolio-main', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/js/main.js', [ 'jquery' ], null, true );
		wp_register_script( 'dy-tech-portfolio-archive', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/js/archive.js', [ 'jquery' ], null, true );

		// Enqueue Scripts
		if( is_archive() ) {
			wp_enqueue_script( 'dy-tech-portfolio-archive' );
			wp_localize_script( 'dy-tech-portfolio-archive', 'ajax_object', [ 'ajax_url' => admin_url( 'admin-ajax.php' ) ] );
		}

		wp_enqueue_script( 'dy-tech-portfolio-main' );
	}

}
