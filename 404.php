<?php
/**
 * The template for displaying missing posts or pages
 *
 * @package DY_Tech_Portfolio
 */

get_header();
?>

<header class="page-header">
    <h1 class="page-title"><?php _e( 'Error 404', 'dy-tech-portfolio' ) ?></h1>
    <h2><?php _e( 'Page Not Found', 'dy-tech-portfolio' ) ?></h2>
    <br>
    <p><?php _e( 'It looks like the page you\'re looking for doesn\'t exist.', 'dy-tech-portfolio' ) ?></p>
</header>

<?php get_footer(); ?>
