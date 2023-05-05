<?php
/**
 * Register Meta Boxes
 *
 * @package DY_Tech_Portfolio
 */

namespace DY_Tech_Portfolio\Includes;

use DY_Tech_Portfolio\Includes\Traits\Singleton;

class Custom_Meta_Boxes {
	use Singleton;

    protected function __construct() {

		$this->setup_hooks();
	}

	protected function setup_hooks() {

		add_action( 'add_meta_boxes', [ $this, 'add_meta_box' ] );
        add_action( 'save_post', [ $this, 'save_meta_box' ] );
	}

    public function add_meta_box( $post_type ) {

        $custom_post_types = [
            'dy_tp_project' => __( 'Project details', 'dy-tech-portfolio' )
        ];
 
        if ( array_key_exists( $post_type, $custom_post_types ) ) {
            add_meta_box(
                'dy_tech_portfolio_custom_meta_box_' . $post_type,
                $custom_post_types[ $post_type ],
                [ $this, 'render_meta_box_content' ],
                $post_type,
                'advanced',
                'high'
            );
        }
    }

    public function render_meta_box_content( $post ) {

        wp_nonce_field( 'dy_tech_portfolio_custom_meta_box', 'dy_tech_portfolio_custom_meta_box_nonce' );
 
        if ( $post->post_type == 'dy_tp_project' ) {
            $dy_tp_project_type = get_post_meta( $post->ID, '_dy_tech_portfolio_custom_meta_key_project_type', true );
            $dy_tp_project_link = get_post_meta( $post->ID, '_dy_tech_portfolio_custom_meta_key_project_link', true );
            $dy_tp_project_link_new_tab = get_post_meta( $post->ID, '_dy_tech_portfolio_custom_meta_key_project_link_new_tab', true ) == '1' ? 'checked' : '';
            $dy_tp_project_link_rel_nofollow = get_post_meta( $post->ID, '_dy_tech_portfolio_custom_meta_key_project_link_rel_nofollow', true ) == '1' ? 'checked' : '';
            $dy_tp_project_link_rel_noreferrer = get_post_meta( $post->ID, '_dy_tech_portfolio_custom_meta_key_project_link_rel_noreferrer', true ) == '1' ? 'checked' : '';
        ?>
            <style>
                .dy-tech-portfolio-custom-meta-box__table .dy-tech-portfolio-custom-meta-box__table-header {
                    width: 1%;
                    white-space: nowrap;
                }

                .dy-tech-portfolio-custom-meta-box__table .dy-tech-portfolio-custom-meta-box__table-data input[type="text"],
                .dy-tech-portfolio-custom-meta-box__table .dy-tech-portfolio-custom-meta-box__table-data input[type="url"] {
                    width: 100%;
                    margin-bottom: 0.25rem;
                }

                .dy-tech-portfolio-custom-meta-box__table .dy-tech-portfolio-custom-meta-box__table-data input[type="checkbox"] {
                    margin-top: 0.25rem;
                    margin-bottom: 0.25rem;
                }
            </style>
            <table class='dy-tech-portfolio-custom-meta-box__table form-table'>
                <tr>
                    <th class='dy-tech-portfolio-custom-meta-box__table-header' scope='row'>
                        <label for='dy_tech_portfolio_custom_meta_box_project_type'><?php _e( 'Project type', 'dy-tech-portfolio' ) ?></label>
                    </th>
                    <td class='dy-tech-portfolio-custom-meta-box__table-data'>
                        <input type='text' id='dy_tech_portfolio_custom_meta_box_project_type' name='dy_tech_portfolio_custom_meta_box_project_type' value='<?php echo esc_attr( $dy_tp_project_type ); ?>' />
                    </td>
                </tr>
                <tr>
                    <th class='dy-tech-portfolio-custom-meta-box__table-header' scope='row'>
                        <label for='dy_tech_portfolio_custom_meta_box_project_link'><?php _e( 'Project link (URL)', 'dy-tech-portfolio' ) ?></label>
                    </th>
                    <td class='dy-tech-portfolio-custom-meta-box__table-data'>
                        <input type='url' id='dy_tech_portfolio_custom_meta_box_project_link' name='dy_tech_portfolio_custom_meta_box_project_link' value='<?php echo esc_attr( $dy_tp_project_link ); ?>' />
                        <br />
                        <input type='checkbox' id='dy_tech_portfolio_custom_meta_box_project_link_new_tab' name='dy_tech_portfolio_custom_meta_box_project_link_new_tab' value='1' <?php echo esc_attr( $dy_tp_project_link_new_tab ); ?> />
                        <label for='dy_tech_portfolio_custom_meta_box_project_link_new_tab'><?php _e( 'Open link in a new tab', 'dy-tech-portfolio' ) ?></label>
                        <br />
                        <input type='checkbox' id='dy_tech_portfolio_custom_meta_box_project_link_rel_nofollow' name='dy_tech_portfolio_custom_meta_box_project_link_rel_nofollow' value='1' <?php echo esc_attr( $dy_tp_project_link_rel_nofollow ); ?> />
                        <label for='dy_tech_portfolio_custom_meta_box_project_link_rel_nofollow'><?php _e( 'Add <code>rel="nofollow"</code> to link', 'dy-tech-portfolio' ) ?></label>
                        <br />
                        <input type='checkbox' id='dy_tech_portfolio_custom_meta_box_project_link_rel_noreferrer' name='dy_tech_portfolio_custom_meta_box_project_link_rel_noreferrer' value='1' <?php echo esc_attr( $dy_tp_project_link_rel_noreferrer ); ?> />
                        <label for='dy_tech_portfolio_custom_meta_box_project_link_rel_noreferrer'><?php _e( 'Add <code>rel="noreferrer"</code> to link', 'dy-tech-portfolio' ) ?></label>
                    </td>
                </tr>
            </table>
        <?php 
        }
    }

    public function save_meta_box( $post_id ) {
 
        // Check if our nonce is set.
        if ( ! isset( $_POST[ 'dy_tech_portfolio_custom_meta_box_nonce' ] ) ) {
            return $post_id;
        }
        
        // Verify that the nonce is valid.
        if ( ! wp_verify_nonce( $_POST[ 'dy_tech_portfolio_custom_meta_box_nonce' ], 'dy_tech_portfolio_custom_meta_box' ) ) {
            return $post_id;
        }
 
        /*
         * If this is an autosave, our form has not been submitted,
         * so we don't want to do anything.
         */
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return $post_id;
        }
 
        // Check the user's permissions.
        if ( 'page' == $_POST[ 'post_type' ] ) {
            if ( ! current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            }
        } else {
            if ( ! current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }
        }

        // Post type specific data sanitation and updating of meta field
        if ( $_POST[ 'post_type' ] == 'dy_tp_project' ) {
            if ( isset( $_POST[ 'dy_tech_portfolio_custom_meta_box_project_type' ] ) && ! empty( $_POST[ 'dy_tech_portfolio_custom_meta_box_project_type' ] ) ) {
                update_post_meta( $post_id, '_dy_tech_portfolio_custom_meta_key_project_type', sanitize_text_field( $_POST[ 'dy_tech_portfolio_custom_meta_box_project_type' ] ) );
            } else {
                delete_post_meta( $post_id, '_dy_tech_portfolio_custom_meta_key_project_type' );
            }

            if ( isset( $_POST[ 'dy_tech_portfolio_custom_meta_box_project_link' ] ) && ! empty( $_POST[ 'dy_tech_portfolio_custom_meta_box_project_link' ] ) ) {
                update_post_meta( $post_id, '_dy_tech_portfolio_custom_meta_key_project_link', esc_url_raw( $_POST[ 'dy_tech_portfolio_custom_meta_box_project_link' ] ) );
            } else {
                delete_post_meta( $post_id, '_dy_tech_portfolio_custom_meta_key_project_link' );
            }

            if ( isset( $_POST['dy_tech_portfolio_custom_meta_box_project_link_new_tab'] ) && $_POST['dy_tech_portfolio_custom_meta_box_project_link_new_tab'] == '1' ) {
                update_post_meta( $post_id, '_dy_tech_portfolio_custom_meta_key_project_link_new_tab', '1' );
            } else {
                delete_post_meta( $post_id, '_dy_tech_portfolio_custom_meta_key_project_link_new_tab' );
            }

            if ( isset( $_POST['dy_tech_portfolio_custom_meta_box_project_link_rel_nofollow'] ) && $_POST['dy_tech_portfolio_custom_meta_box_project_link_rel_nofollow'] == '1' ) {
                update_post_meta( $post_id, '_dy_tech_portfolio_custom_meta_key_project_link_rel_nofollow', '1' );
            } else {
                delete_post_meta( $post_id, '_dy_tech_portfolio_custom_meta_key_project_link_rel_nofollow' );
            }

            if ( isset( $_POST['dy_tech_portfolio_custom_meta_box_project_link_rel_noreferrer'] ) && $_POST['dy_tech_portfolio_custom_meta_box_project_link_rel_noreferrer'] == '1' ) {
                update_post_meta( $post_id, '_dy_tech_portfolio_custom_meta_key_project_link_rel_noreferrer', '1' );
            } else {
                delete_post_meta( $post_id, '_dy_tech_portfolio_custom_meta_key_project_link_rel_noreferrer' );
            }
        }
    }
}
