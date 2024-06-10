<?php
/**
 * The template for displaying the post list
 *
 * @package DY_Tech_Portfolio
 */

get_header();

$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>

	<header class="page-header">
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		<?php if ( $description ) : ?>
			<h2 class="archive-description"><?php echo wp_kses( $description, [ 'br' => [] ] ); ?></h2>
		<?php endif; ?>
	</header>

	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<?php get_template_part( 'template-parts/content/content' ); ?>
	<?php endwhile; ?>

<?php else : ?>
	<h2><?php _e( 'No posts found', 'dy-tech-portfolio' ) ?></h2>
<?php endif; ?>

<?php get_footer(); ?>
