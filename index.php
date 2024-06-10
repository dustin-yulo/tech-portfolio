<?php
/**
 * The main template file
 *
 * @package DY_Tech_Portfolio
 */

get_header();

?>

<?php if ( !is_front_page() && !empty( single_post_title( '', false ) ) ) { ?>
	<header class="page-header">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header>
<?php } ?>

<?php
if ( have_posts() ) {

	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content/content' );
	}

} else {
?>
	<h2><?php _e( 'No posts found', 'dy-tech-portfolio' ) ?></h2>
<?php
}

get_footer();