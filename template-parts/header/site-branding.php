<?php
/**
 * Displays header site branding
 *
 * @package DY_Tech_Portfolio
 */

$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( get_theme_mod( 'display_title_and_tagline', true ) === true );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>

<div class="site-branding">

	<?php if ( has_custom_logo() ) { ?>
		<div class="site-logo"><?php the_custom_logo(); ?></div>
	<?php } ?>

	<?php if ( $blog_info ) { ?>
		<?php if ( is_front_page() && !is_paged() ) { ?>
			<p class="<?php echo esc_attr( $header_class ); ?>"><?php echo esc_html( $blog_info ); ?></p>
		<?php } elseif ( is_front_page() && ! is_home() ) { ?>
			<p class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></p>
		<?php } else { ?>
			<p class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></p>
		<?php } ?>
	<?php } ?>

	<?php if ( $description && get_theme_mod( 'display_title_and_tagline', true ) === true ) { ?>
		<p class="site-description">
			<?php echo $description; ?>
		</p>
	<?php } ?>
</div>
