<?php
$robolist_lite_setting = robolist_lite_get_theme_options();
$listing_title = $robolist_lite_setting['listing_des'];
$args = array(
    'post_type' => 'job_listing',
    'posts_per_page' => 6,
);

$query = new WP_Query($args);
if ($query->have_posts()) {
    ?>
    <!-- Start of feature section -->
    
    <!-- End of feature section -->
<?php }

