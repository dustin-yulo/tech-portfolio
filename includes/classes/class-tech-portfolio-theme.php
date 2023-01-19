<?php
/**
 * Bootstraps the Theme.
 *
 * @package DY_Tech_Portfolio
 */

namespace DY_Tech_Portfolio\Includes;

use DY_Tech_Portfolio\Includes\Traits\Singleton;

class TECH_PORTFOLIO_THEME {
	use Singleton;

	protected function __construct() {

		// Load classes
		Assets::get_instance();

		$this->setup_hooks();
	}

	protected function setup_hooks() {

		// Actions
		add_action( 'after_setup_theme', [ $this, 'theme_setup' ] );
	}

	public function theme_setup() {

		add_theme_support( 'title-tag' );

		add_theme_support(
			'custom-logo',
			[
				'header-text' => [
					'site-title',
					'site-description',
				],
				'height'      => 100,
				'width'       => 400,
				'flex-height' => true,
				'flex-width'  => true,
			]
		);

		add_theme_support(
			'custom-background',
			[
				'default-color' => '1f1f1f',
				'default-image' => '',
				'default-position-x' => 'center',
    			'default-position-y' => 'center',
				'default-size' => 'cover',
				'default-repeat' => 'no-repeat'
			]
		);

		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			]
		);

		add_theme_support( 'align-wide' );
	}

}
