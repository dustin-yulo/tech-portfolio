<?php
/**
 * The template for displaying the projects list
 *
 * @package DY_Tech_Portfolio
 */

get_header();

$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>

	<header class="page-header">
		<h1 class="page-title"><?php _e( 'My projects', 'dy-tech-portfolio' ) ?></h1>
		<?php if ( $description ) : ?>
			<h2 class="archive-description"><?php echo wp_kses( $description, [ 'br' => [] ] ); ?></h2>
		<?php endif; ?>
	</header>

	<div class="projects-container">
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php get_template_part( 'template-parts/content/content', 'archive-project' ); ?>
		<?php endwhile; ?>
	</div>
	<?php get_template_part( 'template-parts/assets/loader-bouncing-squares' ); ?>

<?php else : ?>
	<?php //get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
