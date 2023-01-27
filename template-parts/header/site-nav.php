<?php
/**
 * Displays the site navigation.
 *
 * @package DY_Tech_Portfolio
 */

?>

<?php if ( has_nav_menu( 'dy-tech-portfolio-primary-menu' ) ) { ?>
	<nav id="site-navigation" class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'dy-tech-portfolio' ); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'dy-tech-portfolio-primary-menu',
				'menu_class'      => 'menu-wrapper',
				'container_class' => 'primary-menu-container',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
	</nav>
	<?php
}
