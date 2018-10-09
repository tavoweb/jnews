<div class="jeg_content">
    <div class="jeg_vc_content custom_post_template">
        <?php
            if(have_posts()) : the_post();

                if( vp_metabox('jnews_single_post.override.0.single_blog_custom') ) {
                    $page_id = vp_metabox('jnews_single_post.override.0.single_blog_custom');
                } else {
                    $page_id = get_theme_mod('jnews_single_blog_custom');
                }

                if($page_id)
                {
                    echo jeg_render_builder_content($page_id);
                }
            endif;
        ?>
        <?php do_action('jnews_single_custom_post_after_content'); ?>
    </div>
</div>