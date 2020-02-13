<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package robolist-lite
 */

?>
<footer>
    <?php if ( (is_active_sidebar('robolist_lite_footer_1') || is_active_sidebar('robolist_lite_footer_2') || is_active_sidebar('robolist_lite_footer_3')|| is_active_sidebar('robolist_lite_footer_4'))) { ?>

    <div class="prefooter">
        <div class="container">
            <div class="row">

                <?php if (is_active_sidebar('robolist_lite_footer_1')) :?>
                    <div class="col-md-3">
                        <?php dynamic_sidebar('robolist_lite_footer_1') ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('robolist_lite_footer_2')) :?>
                    <div class="col-md-3 col-sm-6">
                        <?php dynamic_sidebar('robolist_lite_footer_2') ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('robolist_lite_footer_3')) :?>
                    <div class="col-md-3 col-sm-6">
                        <?php dynamic_sidebar('robolist_lite_footer_3') ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('robolist_lite_footer_4')) :?>
                    <div class="col-md-3 col-sm-6">
                        <?php dynamic_sidebar('robolist_lite_footer_4') ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <?php } ?>

    <div class="botfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>				CHECK - FIT © 2019. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
