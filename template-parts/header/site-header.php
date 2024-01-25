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

?>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>">

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
	<?php get_template_part( 'template-parts/header/site', 'nav' ); ?>
	<?php get_template_part( 'template-parts/header/site', 'social' ); ?>

</header>

<header id="mobile-header" class="<?php echo esc_attr( $wrapper_classes ); ?>">

	<div id="mobile-topbar">
		<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
		<button class="menu-toggle">
			<div class="menu-toggler-inner"></div>
		</button>
	</div>
	
	<div id="mobile-topbar-dropdown">
		<?php get_template_part( 'template-parts/header/site', 'nav' ); ?>
		<?php get_template_part( 'template-parts/header/site', 'social' ); ?>
	</div>

</header>