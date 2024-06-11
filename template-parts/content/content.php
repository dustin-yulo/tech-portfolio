<?php
/**
 * Template part for displaying posts
 *
 * @package DY_Tech_Portfolio
 */

?>

<article id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<?php if( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); } ?>

			<?php if( !empty( get_the_title() ) ) { ?>
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
			<?php } else { ?>
				<h2 class="entry-title">
					<?php esc_html_e( '(no title)', 'dy-tech-portfolio' ) ?>
				</h2>
			<?php } ?>
		</a>
	</header>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
</article>
