<?php
/**
 * Displays the site header.
 *
 * @package DY_Tech_Portfolio
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
$wrapper_classes .= ' w-[300px] fixed pt-[80px] shadow-[0_0_15px_rgba(0,0,0,0.2)] top-0 left-0 h-full z-10';
?>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>">

	<?php get_template_part( 'template-parts/header/site-branding' ); ?>
	<?php //get_template_part( 'template-parts/header/site-nav' ); ?>

	<!-- site logo / site title - tagline -->
	<!-- nav menu -->
	<!-- top divider - email address, contact number, social icons -->

</header>
