<?php
/**
 * Displays the site navigation.
 *
 * @package DY_Tech_Portfolio
 */

?>

<?php if ( has_nav_menu( 'dy-tech-portfolio-primary-menu' ) ) { ?>
	<nav class="site-navigation">
		<?php
		wp_nav_menu(
			[
				'theme_location'  => 'dy-tech-portfolio-primary-menu',
				'menu_class'      => 'menu-wrapper',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			]
		);
		?>
	</nav>
	<?php
}
