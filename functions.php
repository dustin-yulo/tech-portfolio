<?php
/**
 * Theme Functions.
 *
 * @package DY_Tech_Portfolio
 */


if ( ! defined( 'DY_TECH_PORTFOLIO_DIR' ) ) {
	define( 'DY_TECH_PORTFOLIO_DIR', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'DY_TECH_PORTFOLIO_DIR_URI' ) ) {
	define( 'DY_TECH_PORTFOLIO_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'DY_TECH_PORTFOLIO_BUILD_DIR' ) ) {
	define( 'DY_TECH_PORTFOLIO_BUILD_DIR', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'DY_TECH_PORTFOLIO_BUILD_DIR_URI' ) ) {
	define( 'DY_TECH_PORTFOLIO_BUILD_DIR_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

require_once DY_TECH_PORTFOLIO_DIR . '/includes/helpers/autoloader.php';
// require_once DY_TECH_PORTFOLIO_DIR . '/includes/helpers/template-tags.php';

function dy_tech_portfolio_get_theme_instance() {
	\DY_Tech_Portfolio\Includes\TECH_PORTFOLIO_THEME::get_instance();
}

dy_tech_portfolio_get_theme_instance();
