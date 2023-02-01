<?php
/**
 * Displays the site social links with icon
 *
 * @package DY_Tech_Portfolio
 */

$social_links = [
    [ 
        'label' => 'Dribbble',
        'class' => 'fa-dribbble'
    ],
    [ 
        'label' => 'Facebook',
        'class' => 'fa-facebook-f'
    ],
    [ 
        'label' => 'GitHub',
        'class' => 'fa-github'
    ],
    [ 
        'label' => 'Instagram',
        'class' => 'fa-instagram'
    ],
    [ 
        'label' => 'LinkedIn',
        'class' => 'fa-linkedin-in'
    ],
    [ 
        'label' => 'Twitter',
        'class' => 'fa-twitter'
    ],
    [ 
        'label' => 'YouTube',
        'class' => 'fa-youtube'
    ]
];

?>

<div class="site-social">
    <?php if( !empty( get_theme_mod( 'dy_email' ) ) ) { ?>
        <a href="mailto:<?php echo esc_attr( get_theme_mod( 'dy_email' ) ); ?>" class="email">
            <?php echo esc_html( get_theme_mod( 'dy_email' ) ); ?>
        </a>
    <?php } ?>
    <ul>
        <?php 
        foreach ( $social_links as $key => $social_link ) {
            $social_link_id = strtolower( $social_link['label'] );

            if( !empty( get_theme_mod( 'dy_' . $social_link_id ) ) ) {
            ?>
                <li>
                    <a href="<?php echo esc_url( get_theme_mod( 'dy_' . $social_link_id ) ); ?>"
                       class="<?php echo strtolower( esc_attr( $social_link['label'] ) ); ?>"
                       title="<?php echo esc_attr( $social_link['label'] ); ?>"
                       target="_blank"
                    >
                        <i class="fa-brands <?php echo esc_attr( $social_link['class'] ); ?>"></i>
                    </a>
                </li>
            <?php 
            }
        } 
        ?>
    </ul>
</div>