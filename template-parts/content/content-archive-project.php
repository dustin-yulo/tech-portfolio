<?php
/**
 * Template part for displaying projets grid
 *
 * @package DY_Tech_Portfolio
 */

 $dy_tp_project_post_meta = get_post_meta( get_the_ID() );
 $dy_tp_project_type = isset( $dy_tp_project_post_meta[ '_dy_tp_project_type' ][ 0 ] ) ? $dy_tp_project_post_meta[ '_dy_tp_project_type' ][ 0 ] : '';
 $dy_tp_project_snapshot = isset( $dy_tp_project_post_meta[ '_dy_tp_project_snapshot' ][ 0 ] ) ? $dy_tp_project_post_meta[ '_dy_tp_project_snapshot' ][ 0 ] : '';
 $dy_tp_project_snapshot_alt_text = !empty( $dy_tp_project_snapshot ) ? get_post_meta( attachment_url_to_postid( $dy_tp_project_snapshot ), '_wp_attachment_image_alt', true ) : '';
?>

<article id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<?php if( $dy_tp_project_snapshot ) { ?>
				<div class="project-snapshot">
					<img src="<?php echo esc_url( $dy_tp_project_snapshot ); ?>" alt="<?php echo esc_attr( $dy_tp_project_snapshot_alt_text ); ?>" />
				</div>
			<?php } else if( has_post_thumbnail() ) { ?>
				<div class="project-snapshot">
					<?php the_post_thumbnail( 'full' ); ?>
				</div>
			<?php } ?>
			<p class="project-type"><?php echo esc_html( $dy_tp_project_type ); ?></p>
			<?php the_title( '<h3 class="project-title">', '</h3>' ); ?>
		</a>
	</header>
</article>
