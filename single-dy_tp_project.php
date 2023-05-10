<?php
/**
 * The template for displaying a project
 *
 * @package DY_Tech_Portfolio
 */

get_header();

while ( have_posts() ) {
	the_post();
	get_template_part( 'template-parts/content/content', 'project' );
}

get_footer();
