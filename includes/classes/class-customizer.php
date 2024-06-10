<?php
/**
 * Theme customizer options
 *
 * @package DY_Tech_Portfolio
 */

namespace DY_Tech_Portfolio\Includes;

use DY_Tech_Portfolio\Includes\Traits\Singleton;

class Customizer {
	use Singleton;

	protected function __construct() {

        if( is_customize_preview() ) {

            $this->setup_hooks();
        }
	}

	protected function setup_hooks() {

		add_action( 'customize_register', [ $this, 'dy_customizer_sections' ] );
        add_action( 'customize_register', [ $this, 'dy_register_social_links' ] );
        add_action( 'customize_register', [ $this, 'dy_register_random_fields' ] );
	}

	public function dy_customizer_sections( $wp_customize ) {

        // social links section
        $wp_customize->add_section( 'dy_social_links', [
            'title'       => __( 'Social Links', 'dy-tech-portfolio' ),
            'priority'    => 100,
        ] );
	}

    public function dy_register_social_links( $wp_customize ) {
        $social_links = [
            'Dribbble',
            'Facebook',
            'GitHub',
            'Instagram',
            'LinkedIn',
            'Skype',
            'Twitter',
            'YouTube',
        ];

        foreach ( $social_links as $social_link ) {
            $social_link_id = strtolower( $social_link );

            // add setting
            $wp_customize->add_setting( 'dy_' . $social_link_id, [
                'default'           => '',
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => 'esc_url_raw',
            ] );

            // add control
            $wp_customize->add_control( 'dy_' . $social_link_id, [
                'label'       => sprintf( __( '%s', 'dy-tech-portfolio' ), $social_link ),
                'section'     => 'dy_social_links',
                'type'        => 'url',
            ] );
        }
    }

    public function dy_register_random_fields( $wp_customize ) {

        // setting for email field in site identity
        $wp_customize->add_setting( 'dy_email', [
            'default'           => '',
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_email',
        ] );

        // control for email field in site identity
        $wp_customize->add_control( 'dy_email', [
            'label'       => __( 'Email Address', 'dy-tech-portfolio' ),
            'section'     => 'title_tagline',
            'type'        => 'email',
        ] );
    }

}
