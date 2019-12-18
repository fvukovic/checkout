<?php
/**
 * Notice when job has been submitted.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/job-submitted.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @version     1.20.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $wp_post_types;
echo '<div class="rl-listing-success section">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="steps"><ul class="steps-list"><li class="one">1</li><li class="two">2</li><li class="three">3</li><li class="four">4</li></ul></div>';
switch ( $job->post_status ) :
	case 'publish' :

		printf(
        /* translators: %s: new job */
        __( '%1$s listed successfully. To view your listing <a href="%2$s">click here</a>.', 'robolist-lite' ), $wp_post_types['job_listing']->labels->singular_name, esc_url( get_permalink( $job->ID ) ) );
	break;
	case 'pending' :
		header("Location: /testPage/membership-account/membership-confirmation/?level=1");
		break;
	default :
		do_action( 'job_manager_job_submitted_content_' . str_replace( '-', '_', sanitize_title( $job->post_status ) ), $job );
	break;
endswitch;
echo '</div>';
echo '</div>';
echo '</div>';
do_action( 'job_manager_job_submitted_content_after', sanitize_title( $job->post_status ), $job );