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

<?php if ( has_custom_logo() && $show_title ) { ?>
	<div class="site-logo"><?php the_custom_logo(); ?></div>
<?php } ?>

<div class="site-branding">

	<?php if ( has_custom_logo() && !$show_title ) { ?>
		<div class="site-logo"><?php the_custom_logo(); ?></div>
	<?php } ?>

	<?php if ( $blog_info ) { ?>
		<?php if ( is_front_page() && !is_paged() ) { ?>
			<h1 class="<?php echo esc_attr( $header_class ); ?>"><?php echo esc_html( $blog_info ); ?></h1>
		<?php } elseif ( is_front_page() && ! is_home() ) { ?>
			<h1 class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></h1>
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
