<?php
get_header();
the_post();
?>
    <div class="jeg_main">
        <div class="jeg_container">
            <div class="jeg_content">
                <div class="jeg_vc_content custom_post_template">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php do_action('jnews_after_main'); ?>
        </div>
    </div>
<?php get_footer(); ?>