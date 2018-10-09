<?php
    $single = JNews\Single\SinglePost::getInstance();
    if(have_posts()) : the_post();
?>
    <div class="container">
        <div class="jeg_ad jeg_article_top jnews_article_top_ads">
            <?php do_action('jnews_article_top_ads'); ?>
        </div>
    </div>

    <div class="jeg_featured_big">
        <div class="jeg_featured_bg jeg_parallax">
            <div class="jeg_featured_img" style="background-image: url(<?php echo esc_url($single->get_featured_image_src('full')); ?>);"></div>
        </div>

        <?php if(jnews_can_render_breadcrumb()) : ?>
        <div class="jeg_fs_content">
            <div class="jeg_breadcrumbs">
                <div class="container jeg_breadcrumb_container">
                    <?php $single->render_breadcrumb(); ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

    </div>

    <div class="jeg_content jeg_singlepage">
        <div class="container">
            <div class="row">
                <div class="jeg_main_content col-md-<?php echo esc_attr($single->main_content_width()); ?>">

                    <div class="jeg_inner_content">
                        <div class="entry-header">
                            <?php do_action('jnews_single_post_before_title', get_the_ID());  ?>
                        
                            <h1 class="jeg_post_title"><span><?php the_title(); ?></span></h1>
                        
                            <?php if( ! $single->is_subtitle_empty() ) : ?>
                                <h2 class="jeg_post_subtitle"><span><?php echo esc_html($single->render_subtitle()); ?></span></h2>
                            <?php endif; ?>
                        
                            <div class="jeg_meta_container"><?php $single->render_post_meta(); ?></div>
                        </div>
                        
                        <?php do_action('jnews_share_top_bar', get_the_ID()); ?>
                        
                        <?php do_action('jnews_single_post_before_content'); ?>
                        
                        <div class="entry-content <?php echo esc_attr($single->share_float_additional_class()); ?>">
                        
                            <div class="jeg_share_button share-float jeg_sticky_share clearfix <?php $single->share_float_style_class(); ?>">
                                <?php do_action('jnews_share_float_bar', get_the_ID()); ?>
                            </div>
                        
                            <div class="content-inner <?php echo apply_filters('jnews_content_class', '', get_the_ID()) ?>">
                                <?php $single->render_featured_post_alternate(); ?>
                                <?php the_content(); ?>
                                <?php wp_link_pages(); ?>
                        
                                <?php if( has_tag() ) { ?>
                                    <div class="jeg_post_tags"><?php $single->post_tag_render(); ?></div>
                                <?php } ?>
                            </div>
                        
                            <?php do_action('jnews_share_bottom_bar', get_the_ID()); ?>
                        
                            <?php do_action('jnews_push_notification_single_post'); ?>
                        </div>
                        
                        <?php do_action('jnews_single_post_after_content'); ?>
                    </div>

                </div>
                <?php $single->render_sidebar(); ?>
            </div>

            <div class="jeg_ad jeg_article jnews_article_bottom_ads">
                <?php do_action('jnews_article_bottom_ads'); ?>
            </div>

        </div>
    </div>

    <?php endif; ?>