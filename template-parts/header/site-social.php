<?php
/**
 * Displays the site social links with icon
 *
 * @package DY_Tech_Portfolio
 */

?>

<div class="site-social">
    <ul>
        <?php if( !empty( get_theme_mod( 'dy_linkedin' ) ) ) { ?>
            <li><a href="<?php echo esc_url( get_theme_mod( 'dy_linkedin' ) ); ?>">LinkedIn</a></li>
        <?php } ?>
    </ul>
</div>