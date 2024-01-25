<?php
/**
 * The template for displaying a single project
 *
 * @package DY_Tech_Portfolio
 */

get_header();

while ( have_posts() ) {
	the_post();
	get_template_part( 'template-parts/content/content', 'single-project' );
}

get_footer();
