<?php

/**
 * Filters in `[jobs]` shortcode.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/job-filters.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     wp-job-manager
 * @category    Template
 * @version     1.33.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

wp_enqueue_script('wp-job-manager-ajax-filters');

do_action('job_manager_job_filters_before', $atts);
?>

<form class="job_filters">
	<?php do_action('job_manager_job_filters_start', $atts); ?>

	<div class="search_jobs">
		<?php do_action('job_manager_job_filters_search_jobs_start', $atts); ?>
		<!--TODO-Filip-->
		<div class="search_keywords">
			<label for="search_keywords"><?php esc_html_e('Land', 'wp-job-manager'); ?></label>
			<select id="search_keywords" name="search_keywords" class="selectpicker select-country">
				<option value="">Land auswählen</option>
				<option value="Österreich">Österreich</option>
				<option value="Deutschland">Deutschland</option>
				<option value="Kroatien">Kroatien</option>
			</select>
		</div>

		<div class="search_location">
			<label for="search_location"><?php esc_html_e('Stadt / PLZ', 'wp-job-manager'); ?></label>
			<input type="text" name="search_location" id="search_location" placeholder="<?php esc_attr_e('Stadt / PLZ', 'wp-job-manager'); ?>" value="<?php echo esc_attr($location); ?>" />
		</div>

		<div style="clear: both"></div>

		<?php if ($categories) : ?>
			<?php foreach ($categories as $category) : ?>
				<input  type="hidden" name="search_categories[]" value="<?php echo esc_attr(sanitize_title($category)); ?>" />
			<?php endforeach; ?>
		<?php elseif ($show_categories && !is_tax('job_listing_category') && get_terms(['taxonomy' => 'job_listing_category'])) : ?>
			<div class="search_categories">
				<label for="search_categories"><?php esc_html_e('Category', 'wp-job-manager'); ?></label>
 					<?php job_manager_dropdown_categories(['taxonomy' => 'job_listing_category', 'hierarchical' => 1, 'show_option_all' => __('Any category', 'wp-job-manager'), 'name' => 'search_categories', 'orderby' => 'name', 'selected' => $selected_category, 'multiple' => false, 'hide_empty' => FALSE]); ?>
 			</div>
		<?php endif; ?>

		<?php
		/**
		 * Show the submit button on the job filters form.
		 *
		 * @since 1.33.0
		 *
		 * @param bool $show_submit_button Whether to show the button. Defaults to true.
		 * @return bool
		 */
		if (apply_filters('job_manager_job_filters_show_submit_button', true)) :
		?>
			<div class="search_submit">
				<input type="submit" value="<?php esc_attr_e('Search Jobs', 'wp-job-manager'); ?>">
			</div>
		<?php endif; ?>

		<?php do_action('job_manager_job_filters_search_jobs_end', $atts); ?>
	</div>

	<?php do_action('job_manager_job_filters_end', $atts); ?>
</form>
<script>
 
	jQuery(document).ready(function($) {
		let searchParams = new URLSearchParams(window.location.search) 
		$("#search_keywords").val(searchParams.get('search_keywords')).change(); 
 		 $('#search_keywords').select(searchParams.get('search_category')); 
		$("#search_location").val(searchParams.get("search_location"))  
		$("#search_location").text(searchParams.get("search_location"))  

		 $('#search_categories').val(searchParams.get('search_category'));  

	});
</script>
<?php do_action('job_manager_job_filters_after', $atts); ?>

<noscript><?php esc_html_e('Your browser does not support JavaScript, or it is disabled. JavaScript must be enabled in order to view listings.', 'wp-job-manager'); ?></noscript>