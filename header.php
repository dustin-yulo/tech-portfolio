<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DY_Tech_Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class( '[&:not(.custom-background)]:bg-theme-primary' ); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dy-tech-portfolio' ); ?></a>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content ml-[300px]">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
