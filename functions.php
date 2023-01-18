<?php
/**
 * Theme Functions.
 *
 * @package DY_Tech_Portfolio
 */


if ( ! defined( 'DY_Tech_Portfolio_DIR_PATH' ) ) {
	define( 'DY_Tech_Portfolio_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

// if ( ! defined( 'AQUILA_DIR_URI' ) ) {
// 	define( 'AQUILA_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
// }

// if ( ! defined( 'AQUILA_BUILD_URI' ) ) {
// 	define( 'AQUILA_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
// }

// if ( ! defined( 'AQUILA_BUILD_PATH' ) ) {
// 	define( 'AQUILA_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
// }

// if ( ! defined( 'AQUILA_BUILD_JS_URI' ) ) {
// 	define( 'AQUILA_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
// }

// if ( ! defined( 'AQUILA_BUILD_JS_DIR_PATH' ) ) {
// 	define( 'AQUILA_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
// }

// if ( ! defined( 'AQUILA_BUILD_IMG_URI' ) ) {
// 	define( 'AQUILA_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
// }

// if ( ! defined( 'AQUILA_BUILD_CSS_URI' ) ) {
// 	define( 'AQUILA_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
// }

// if ( ! defined( 'AQUILA_BUILD_CSS_DIR_PATH' ) ) {
// 	define( 'AQUILA_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
// }

// if ( ! defined( 'AQUILA_BUILD_LIB_URI' ) ) {
// 	define( 'AQUILA_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
// }

// if ( ! defined( 'AQUILA_ARCHIVE_POST_PER_PAGE' ) ) {
// 	define( 'AQUILA_ARCHIVE_POST_PER_PAGE', 9 );
// }

// if ( ! defined( 'AQUILA_SEARCH_RESULTS_POST_PER_PAGE' ) ) {
// 	define( 'AQUILA_SEARCH_RESULTS_POST_PER_PAGE', 9 );
// }

require_once DY_Tech_Portfolio_DIR_PATH . '/includes/helpers/autoloader.php';
// require_once DY_Tech_Portfolio_DIR_PATH . '/includes/helpers/template-tags.php';

function dy_tech_portfolio_get_theme_instance() {
	\DY_Tech_Portfolio\Includes\TECH_PORTFOLIO_THEME::get_instance();
}

dy_tech_portfolio_get_theme_instance();



