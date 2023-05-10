<?php
/**
 * Template part for displaying project content in single-dy_tp_project.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DY_Tech_Portfolio
 */

 $dy_tp_project_post_meta = get_post_meta( get_the_ID() );
 $dy_tp_project_type = isset( $dy_tp_project_post_meta[ '_dy_tech_portfolio_custom_meta_key_project_type' ][ 0 ] ) ? $dy_tp_project_post_meta[ '_dy_tech_portfolio_custom_meta_key_project_type' ][ 0 ] : '';
 $dy_tp_project_type_longer = isset( $dy_tp_project_post_meta[ '_dy_tech_portfolio_custom_meta_key_project_type_longer' ][ 0 ] ) ? $dy_tp_project_post_meta[ '_dy_tech_portfolio_custom_meta_key_project_type_longer' ][ 0 ] : '';
 $dy_tp_project_link = isset( $dy_tp_project_post_meta[ '_dy_tech_portfolio_custom_meta_key_project_link' ][ 0 ] ) ? $dy_tp_project_post_meta[ '_dy_tech_portfolio_custom_meta_key_project_link' ][ 0 ] : '';
 $dy_tp_project_link_new_tab = isset( $dy_tp_project_post_meta[ '_dy_tech_portfolio_custom_meta_key_project_link_new_tab' ][ 0 ] ) && $dy_tp_project_post_meta[ '_dy_tech_portfolio_custom_meta_key_project_link_new_tab' ][ 0 ] == '1' ? '_blank' : '';
 $dy_tp_project_link_rel_nofollow = isset( $dy_tp_project_post_meta[ '_dy_tech_portfolio_custom_meta_key_project_link_rel_nofollow' ][ 0 ] ) && $dy_tp_project_post_meta[ '_dy_tech_portfolio_custom_meta_key_project_link_rel_nofollow' ][ 0 ] == '1' ? 'nofollow' : '';
 $dy_tp_project_link_rel_noreferrer = isset( $dy_tp_project_post_meta[ '_dy_tech_portfolio_custom_meta_key_project_link_rel_noreferrer' ][ 0 ] ) && $dy_tp_project_post_meta[ '_dy_tech_portfolio_custom_meta_key_project_link_rel_noreferrer' ][ 0 ] == '1' ? 'noreferrer' : '';
 $dy_tp_project_status = isset( $dy_tp_project_post_meta[ '_dy_tech_portfolio_custom_meta_key_project_status' ][ 0 ] ) && $dy_tp_project_post_meta[ '_dy_tech_portfolio_custom_meta_key_project_status' ][ 0 ] == 'demo' ? 'demo' : 'live';
 $dy_tp_project_button_text = isset( $dy_tp_project_post_meta[ '_dy_tech_portfolio_custom_meta_key_project_button_text' ][ 0 ] )
 								? $dy_tp_project_post_meta[ '_dy_tech_portfolio_custom_meta_key_project_button_text' ][ 0 ]
								: ( $dy_tp_project_status == 'demo' ? __( 'View demo', 'dy-tech-portfolio' )
								: __( 'Visit website', 'dy-tech-portfolio' ) );
 $dy_tp_project_button_icon = $dy_tp_project_status == 'demo' ? 'fa-desktop' : 'fa-globe';

 $dy_tp_project_link_rel_attr = '';
 if( !empty( $dy_tp_project_link_rel_nofollow ) && !empty( $dy_tp_project_link_rel_noreferrer ) ) {
	$dy_tp_project_link_rel_attr = 'rel="' . esc_attr( $dy_tp_project_link_rel_nofollow ) . ' ' . esc_attr( $dy_tp_project_link_rel_noreferrer ) . '"';
 } elseif( !empty( $dy_tp_project_link_rel_nofollow ) ) {
	$dy_tp_project_link_rel_attr = 'rel="' . esc_attr( $dy_tp_project_link_rel_nofollow ) . '"';
 } elseif( !empty( $dy_tp_project_link_rel_noreferrer ) ) {
	$dy_tp_project_link_rel_attr = 'rel="' . esc_attr( $dy_tp_project_link_rel_noreferrer ) . '"';
 }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h1><?php echo get_post_type_object( get_post_type() )->labels->singular_name ?></h1>
		<?php the_title( '<h2 class="entry-title">', '</h2>' ) ?>
		<?php if( has_post_thumbnail() ) { ?>
			<div class="post-thumbnail"><?php the_post_thumbnail( 'full' ); ?></div>
		<?php } ?>
	</header>

	<div class="entry-content">
		<?php if( !empty( $dy_tp_project_type_longer ) || !empty( $dy_tp_project_link ) ) { ?>
			<div class="project-type-column">
				<div class="project-type-row">
					<h4 class="project-column-title"><?php _e( 'Project type:', 'dy-tech-portfolio' ); ?></h4>
					<p><?php echo esc_html( $dy_tp_project_type_longer ); ?></p>
				</div>
				<?php if( !empty( $dy_tp_project_link ) ) { ?>
				<div class="project-link-row">
					<a 
						href="<?php echo esc_url( $dy_tp_project_link ) ?>"
						<?php echo !empty( $dy_tp_project_link_new_tab ) ? 'target="' . esc_attr( $dy_tp_project_link_new_tab ) . '"' : ''; ?>
						<?php echo $dy_tp_project_link_rel_attr; ?>
						role="button"
						class="project-link filled-button <?php echo $dy_tp_project_button_icon; ?>"
					>
						<?php echo $dy_tp_project_button_text; ?>
					</a>
				</div>
				<?php } ?>
			</div>
		<?php } ?>

		<?php if( !empty( get_the_content() ) ) { ?>
			<div class="project-details-column">
				<h4 class="project-column-title"><?php _e( 'Details:', 'dy-tech-portfolio' ); ?></h4>
				<?php the_content(); ?>
			</div>
		<?php } ?>
	</div>
	
</article>
