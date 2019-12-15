<?php
/**
 * Content for job submission (`[submit_job_form]`) shortcode.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/job-submit.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @version     1.27.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $job_manager;
?>
<form action="<?php echo esc_url( $action ); ?>" method="post" id="submit-job-form" class="job-manager-form" enctype="multipart/form-data">
<?php 
			$user = wp_get_current_user(); 
			$user->membership_level = pmpro_getMembershipLevelForUser($user->ID);   
			$args = apply_filters(
				'job_manager_get_dashboard_jobs_args',
				[
					'post_type'           => 'job_listing',
					'post_status'         => [ 'publish', 'expired', 'pending', 'draft', 'preview' ],
					'ignore_sticky_posts' => 1, 
					'orderby'             => 'date',
					'order'               => 'desc',
					'author'              => get_current_user_id(),
				]
			);
			$jobs = new WP_Query();
			$allJobs = sizeof($jobs->query( $args ));	
 
			if($allJobs > 0 && $user->membership_level == null){ 
				header("Location: http://www.check-fit.com/testPage/user/");
				exit();
			}
			 
			?>
	 
			 <input type="hidden" id="user-role-hidden" value='<?php echo $user->membership_level->name; ?>'>
	 
	

	<?php
	if ( isset( $resume_edit ) && $resume_edit ) {
		printf(
        /* translators: %s: new job */
        '<p><strong>' . esc_html__( "You are editing an existing job. %s", 'robolist-lite' ) . '</strong></p>', '<a href="?new=1&key=' . esc_attr($resume_edit) . '">' . esc_html__( 'Create A New Job', 'robolist-lite' ) . '</a>' );
	}
	?>

	<?php do_action( 'submit_job_form_start' ); ?>

	<?php if ( apply_filters( 'submit_job_form_show_signin', true ) ) : ?>

		<?php get_job_manager_template( 'account-signin.php' ); ?>

	<?php endif; ?>

	<?php if ( job_manager_user_can_post_job() || job_manager_user_can_edit_job( $job_id ) ) : ?>

		<!-- Job Information Fields -->
		<?php do_action( 'submit_job_form_job_fields_start' ); ?>

		<?php foreach ( $job_fields as $key => $field ) : ?>
			<fieldset class="fieldset-<?php echo esc_attr( $key ); ?>">
				<label for="<?php echo esc_attr( $key ); ?>"><?php echo wp_kses_post($field['label'] . apply_filters( 'submit_job_form_required_label', $field['required'] ? '' : ' <small>' . esc_html__( '(optional)', 'robolist-lite' ) . '</small>', $field )); ?></label>
				<div class="field <?php echo $field['required'] ? 'required-field' : ''; ?>">
					<?php get_job_manager_template( 'form-fields/' . $field['type'] . '-field.php', array( 'key' => $key, 'field' => $field ) ); ?>
				</div>
			</fieldset>
		<?php endforeach; ?>

		<?php do_action( 'submit_job_form_job_fields_end' ); ?>

		<!-- Company Information Fields -->
		<?php if ( $company_fields ) : ?>
			<h2><?php echo esc_html__( 'Company Details', 'robolist-lite' ); ?></h2>

			<?php do_action( 'submit_job_form_company_fields_start' ); ?>

			<?php foreach ( $company_fields as $key => $field ) : ?>
				<fieldset class="fieldset-<?php echo esc_attr( $key ); ?>">
					<label for="<?php echo esc_attr( $key ); ?>"><?php echo wp_kses_post($field['label'] . apply_filters( 'submit_job_form_required_label', $field['required'] ? '' : ' <small>' . __( '(optional)', 'robolist-lite' ) . '</small>', $field )); ?></label>
					<div class="field <?php echo $field['required'] ? 'required-field' : ''; ?>">
						<?php get_job_manager_template( 'form-fields/' . $field['type'] . '-field.php', array( 'key' => $key, 'field' => $field ) ); ?>
					</div>
				</fieldset>
			<?php endforeach; ?>

			<?php do_action( 'submit_job_form_company_fields_end' ); ?>
		<?php endif; ?>

		<?php do_action( 'submit_job_form_end' ); ?>

		<p>
			<input type="hidden" name="job_manager_form" value="<?php echo esc_attr($form); ?>" />
			<input type="hidden" name="job_id" value="<?php echo esc_attr( $job_id ); ?>" />
			<input type="hidden" name="step" value="<?php echo esc_attr( $step ); ?>" />
			<input type="submit" name="submit_job" class="button" value="<?php echo esc_attr( $submit_button_text ); ?>" />
		</p>

	<?php else : ?>

		<?php do_action( 'submit_job_form_disabled' ); ?>

	<?php endif; ?>
</form>
<script>

function ready(callback){
    //TODO-filip TREBA JOS VALIDACIJA in case the document is already rendered
    if (document.readyState!='loading') callback();
    // modern browsers
    else if (document.addEventListener) document.addEventListener('DOMContentLoaded', callback);
    // IE <= 8
    else document.attachEvent('onreadystatechange', function(){
        if (document.readyState=='complete') callback();
    });
}

ready(function(){
	var role = document.getElementById("user-role-hidden").value
	if(role === 'Premium'){ 
		document.getElementsByClassName("add-job-description")[0].style.display = "none";
		document.getElementsByClassName("get-premium-role").style.display = "none";
	}else{
		document.getElementsByClassName("add-job-description-premium")[0].style.display = "none";
	}
});
 

</script>