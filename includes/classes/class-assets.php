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

		// Actions
        add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
		add_action( 'enqueue_block_assets', [ $this, 'enqueue_editor_assets' ] );
	}

	public function register_styles() {

		// Register styles.
		wp_register_style( 'dy-tech-portfolio-fonts', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/library/google-fonts/fonts.css', [], false, 'all' );
		wp_register_style( 'font-awesome', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/library/font-awesome/css/fontawesome.min.css', [], false, 'all' );
		wp_register_style( 'font-awesome-brands', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/library/font-awesome/css/brands.min.css', [ 'font-awesome' ], false, 'all' );
		wp_register_style( 'font-awesome-solid', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/library/font-awesome/css/solid.min.css', [ 'font-awesome' ], false, 'all' );
		wp_register_style( 'dy-tech-portfolio-main', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/css/main.css', [ 'dy-tech-portfolio-fonts' ], filemtime( DY_TECH_PORTFOLIO_BUILD_DIR . '/css/main.css' ), 'all' );

		// Enqueue Styles.
		wp_enqueue_style( 'dy-tech-portfolio-fonts' );
		wp_enqueue_style( 'font-awesome' );
		wp_enqueue_style( 'font-awesome-brands' );
		wp_enqueue_style( 'font-awesome-solid' );
		wp_enqueue_style( 'dy-tech-portfolio-main' );
	}

	public function register_scripts() {

		// Register scripts.
		// wp_register_script( 'main-js', AQUILA_BUILD_JS_URI . '/main.js', ['jquery', 'slick-js'], filemtime( AQUILA_BUILD_JS_DIR_PATH . '/main.js' ), true );

		// Enqueue Scripts.
		// wp_enqueue_script( 'main-js' );

		// wp_localize_script( 'main-js', 'siteConfig', [
		// 	'ajaxUrl'    => admin_url( 'admin-ajax.php' ),
		// 	'ajax_nonce' => wp_create_nonce( 'loadmore_post_nonce' ),
		// ] );
	}

	public function enqueue_editor_assets() {
	
		if ( is_admin() ) {
			wp_enqueue_style( 'font-awesome', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/library/font-awesome/css/fontawesome.min.css', [], false, 'all' );
			wp_enqueue_style( 'font-awesome-brands', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/library/font-awesome/css/brands.min.css', [ 'font-awesome' ], false, 'all' );
			wp_enqueue_style( 'font-awesome-solid', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/library/font-awesome/css/solid.min.css', [ 'font-awesome' ], false, 'all' );

			wp_enqueue_script( 'dy-tech-portfolio-blocks', DY_TECH_PORTFOLIO_BUILD_DIR_URI . '/js/blocks.js', [], false, true );
		}
	}

}
