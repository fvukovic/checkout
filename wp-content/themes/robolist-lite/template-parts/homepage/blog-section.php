<?php
$robolist_lite_setting = robolist_lite_get_theme_options();
$blog_description = $robolist_lite_setting['blog_description'];
$cta_description = $robolist_lite_setting['cta_description'];
$cta_button = $robolist_lite_setting['cta_button'];
$cta_link = $robolist_lite_setting['cta_link'];
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post_status' => 'publish',
    'order' => 'desc',
    'orderby' => 'menu_order date',

);
$query = new WP_query($args);
$loop=1;
    if(($cta_button && $cta_link )|| $cta_description){?>

    <section id="promo" class="section promo text-center">
        <div class="container">
            <div class="row cta-wrap">
               <?php
             $cta_posts_args = array(
                'post_type' => 'page',
                'posts_per_page' => 1,
                'post__in' => (array)$cta_description,
            );
                 $cta_variable = get_posts($cta_posts_args);
                 foreach ($cta_variable as $key => $cta_value) {
                    echo '<div class="promo-content">';

                        echo '<h2>' . wp_kses_post(wp_trim_words($cta_value->post_title, 16)) . '</h2>';

                        echo '<p>' . wp_kses_post($cta_value->post_content) . '</p>';
                    echo '</div>';
                }
                if($cta_button && $cta_link){
                    echo '<div class="cta-btn-wrap">';
                    echo '<a href="'.esc_url($cta_link).'" class="btn btn-default" target="_blank">'.esc_html($cta_button).'</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>
<?php }?>
<?php if ($query->have_posts()):
    ?>
 
<?php endif;
