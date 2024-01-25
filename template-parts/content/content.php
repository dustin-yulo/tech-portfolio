<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DY_Tech_Portfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<?php if( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); } ?>
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		</a>
	</header>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
</article>
