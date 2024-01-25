<?php
/**
 * The template for displaying single posts and pages
 *
 * @package DY_Tech_Portfolio
 */

get_header();

while ( have_posts() ) {
	the_post();
	get_template_part( 'template-parts/content/content', 'singular' );
}

get_footer();
