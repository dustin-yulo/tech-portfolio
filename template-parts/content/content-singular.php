<?php
/**
 * Template part for displaying a single page or post content
 *
 * @package DY_Tech_Portfolio
 */

?>

<article id="post-<?php the_ID(); ?>">

	<?php if ( ! is_front_page() ) { ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ) ?>
			<?php if( has_post_thumbnail() ) { the_post_thumbnail( 'full' ); } ?>
		</header>
	<?php } ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	
</article>
