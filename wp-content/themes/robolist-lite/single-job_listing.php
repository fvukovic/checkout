<?php

/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Robolist Lite
 */

get_header();
global $post;
$robolist_lite_setting = robolist_lite_get_theme_options();
$contact_form_enable = $robolist_lite_setting['single_joblist_form_enable'];
$contact_form_sc = $robolist_lite_setting['single_joblist_form'];
$contact_form_title = $robolist_lite_setting['single_form_title'];
$location = get_post_meta($post->ID, '_job_location');
$price = get_post_meta($post->ID, '_price_field');
$country = get_post_meta($post->ID, '_job_country');
$address = get_post_meta($post->ID, '_address_field');
$website = get_post_meta($post->ID, '_website_field');
$email = get_post_meta($post->ID, '_application');
$category = get_the_terms($post->ID, 'job_listing_category');
$description = get_post_meta($post->ID, '_job_description'); 
//$country = get_post_meta($post->ID, 'company_field'); 
$phone = get_post_meta($post->ID, '_company_phone');
$gallery = get_post_meta($post->ID, '_main_image');
$gallery_images = $gallery[0];
$searchString = ',';

if ((!is_array($gallery_images) && strpos($gallery_images, $searchString) !== false)) {
    $all_images = explode(',', $gallery_images);
    if (end($all_images) == '')
        $all_images[sizeof($all_images) - 1] = $all_images[0];
} else {
    $all_images = $gallery_images;
}
if (is_array($phone) && !empty($phone)) {
    $phone = $phone[0] ? $phone[0] : '';
}

if (is_array($location)  && !empty($location)) {
    $location = $location[0] ? $location[0] : '';
}
if (is_array($country)  && !empty($country)) {
    $country = $country[0] ? $country[0] : '';
}
if (is_array($price)  && !empty($price)) {
    $price = $price[0] ? $price[0] : '';
}

if (is_array($website)  && !empty($website)) {
    $website = $website[0] ? $website[0] : '';
}

if (is_array($email)  && !empty($email)) {
    $email = $email[0] ? $email[0] : '';
}

if (is_array($description)  && !empty($description)) {
    $description = $description[0] ? $description[0] : '';
} 

if (is_array($category)  && !empty($category)) {
    $category = $category[0] ? $category[0] : '';
}

if (is_array($address)  && !empty($address)) {
    $address = $address[0] ? $address[0] : '';
}

if (have_posts()) :
    while (have_posts()) :
        the_post();
        $feature_image = '';
        $image_style = '';
        add_filter('shortcode_atts_gallery', 'robolist_lite_shortcode_atts_gallery');
        $gallery = get_post_gallery_images($post);
        $post_thumbnail_id = get_post_thumbnail_id(get_the_ID());
        $image = wp_get_attachment_image_src($post_thumbnail_id, 'full');
        if ($image[0]) {
            $feature_image = $image[0];
        }
        $rating = '';
        if (in_array('comments-ratings/comments-ratings.php', apply_filters('active_plugins', get_option('active_plugins')))) {

            global $pixreviews_plugin;
            $rating = $pixreviews_plugin->get_average_rating($post->ID);
        }
        ?>

        <div class="listing-single-slider section">

            <?php
                    if (!empty($all_images) && count($all_images) > 2) { ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="listing-gallery-wrap">
                            <?php
                                        foreach ($all_images as $g) {
                                            $image_style = "style='background-image:url(" . esc_url($g) . ")'";
                                            echo '<div class="listing-gallery-holder" ' . wp_kses_post($image_style) . '"></div>';
                                        }
                                        ?>
                        </div>
                    </div>
                </div>
            <?php  } else {
                        ?>
                <div class="container-fluid">
                    <div class="row">
                        <?php
                                    $image_style = "style='background-image:url(" . esc_url($feature_image) . ")'";
                                    echo '<div class="listing-img-wrap" ' . wp_kses_post($image_style) . '"></div>';
                                    ?>
                    </div>
                </div>
            <?php
                    }
                    ?>

            <div class="listing-detail-wrap">
                <div class="container">
                    <div class="col-md-12">
                        <div class="rl-single-author">
                            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">

                                <?php echo get_avatar(get_the_author_meta('ID'), 32, '', '', array('class' => 'listing-auth')); ?>
                            </a>
                        </div>
                        <div class="rl-single-meta">
                            <h2><?php the_title(); ?></h2>
                            <?php
                                    if ($rating) {
                                        echo '<div class="cat-star">';
                                        for ($i = 1; $i <= 5; $i++) {
                                            if ($i <= $rating)
                                                echo '<i class="fa fa-star"></i>';
                                            else
                                                echo '<i class="fa fa-star rl-blank-star"></i>';
                                        }
                                        printf(
                                            /* translators: %s: review number */
                                            _n('<span>(%s Review)</span>', '<span>(%s Reviews</span>)', get_comments_number($post->ID), 'robolist-lite'),
                                            absint(number_format_i18n(get_comments_number($post->ID)))
                                        );
                                        echo '</div>';
                                    } else {
                                        echo '<div class="cat-star">';
                                        echo '<i class="fa fa-star rl-blank-star"></i>';
                                        echo '<i class="fa fa-star rl-blank-star"></i>';
                                        echo '<i class="fa fa-star rl-blank-star"></i>';
                                        echo '<i class="fa fa-star rl-blank-star"></i>';
                                        echo '<i class="fa fa-star rl-blank-star"></i>';
                                        printf(
                                            /* translators: %s: review number */
                                            _n('<span>(%s Review)</span>', '<span>(%s Reviews</span>)', get_comments_number($post->ID), 'robolist-lite'),
                                            absint(number_format_i18n(get_comments_number($post->ID)))
                                        );
                                        echo '</div>';
                                    }
                                    ?>
                            <?php
                                    if ($country)
                                        echo '<span class="listing-loc"><i class="ion-ios-location-outline"></i>' . esc_html($country) . '</span> <br/>';

                                    if ($location)
                                        echo '<span class="listing-loc"><i class="ion-ios-location-outline"></i>' . esc_html($location) . '</span>';
                                    if ($phone)
                                        echo '<span class="listing-tel"><i class="fa fa-phone"></i><a href="tel:' . esc_attr($phone) . '">' . esc_html($phone) . '</a></span>';
                                    //TODO-filip tu se dodaje u hearder PDP


                                    ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="details-container">
                <h3 class="title-review">Details</h3>
                <div class="listing-content section">
                            <div class="detail-wrapper">
                                <div class="detail-label">Land</div>
                                <div class="detail-value"> <?php echo $country; ?></div>
                            </div>
                            <div class="detail-wrapper">

                                <div class="detail-label">Stadt/PLZ</div>
                                <div class="detail-value"> <?php echo $location; ?></div>
                            </div>
                            <?php if(!is_array($address)){ ?>   
                            <div class="detail-wrapper">
                                <div class="detail-label">ADDRESSE</div>
                                <div class="detail-value"> <?php echo $address; ?></div>
                            </div>
                            <?php }?>
                            <div class="detail-wrapper">
                                <div class="detail-label">EMAIL ADDRESSE</div>
                                <div class="detail-value"> <?php echo $email; ?></div>
                            </div>
                            <?php if(!is_array($website)){ ?>   
                            <div class="detail-wrapper">
                                <div class="detail-label">WEBSITE</div>
                                <div class="detail-value"> <?php echo $website; ?></div>
                            </div>
                            <?php }?> 
                            <div class="detail-wrapper">

                                <div class="detail-label">KATEGORIE</div>
                                <div class="detail-value"> <?php echo esc_attr($category->name); ?></div>
                            </div>

                            <div class="detail-wrapper">

                                <div class="detail-label">TELEFON</div>
                                <div class="detail-value"> <?php echo $phone; ?></div>
                            </div>

                            <div class="detail-wrapper">

                                <div class="detail-label">ANGEBOT</div>
                                <div class="detail-value"> <?php echo $price; ?></div>
                            </div>

                            <?php if(!empty($description)){ ?>    
                            <div class="detail-wrapper"> 
                                    <div class="detail-label">BESCHREIBUNG</div> 
                                        <?php
                                                                                                                                        the_content();
                                                                                                                                        wp_link_pages(array(
                                                                                                                                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'robolist-lite'),
                                                                                                                                            'after'  => '</div>',
                                                                                                                                        ));
                                                                                                                                        if (comments_open() || get_comments_number()) :
                                                                                                                                            comments_template();
                                                                                                                                        endif;

                                        ?>  

                            </div>
                            <?php }?>
 
                </div>
            </div>
        </div>

<?php
    endwhile; // end while
endif; // end if
get_footer(); ?>