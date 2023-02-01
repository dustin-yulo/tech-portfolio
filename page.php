<?php
/**
 * The template for displaying pages
 *
 * @package DY_Tech_Portfolio
 */

get_header();

while ( have_posts() ) {
	the_post();
	get_template_part( 'template-parts/content/content', 'page' );
}

get_footer();
