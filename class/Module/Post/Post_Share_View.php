<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Post;

Class Post_Share_View extends PostViewAbstract
{
    public function module_filter($attr)
    {
        add_filter('jnews_allow_override_share', '__return_false');

        add_filter('jnews_show_view_tag', function() use ($attr){ return $attr['show_view'] === 'yes'; });
        add_filter('jnews_show_share_tag', function() use ($attr){ return $attr['show_share'] === 'yes'; });
    }

    public function render_module_back($attr, $column_class)
    {
        $this->module_filter($attr);
        ob_start();

        if(defined('JNEWS_SOCIAL_SHARE'))
        {
            if($attr['share_style'] === 'top_share') {
                jnews_share_top_bar(get_the_ID());
            } else if($attr['share_style'] === 'bottom_share') {
                jnews_share_bottom_bar(get_the_ID());
            }
        }

        return "<div class='jeg_custom_share_wrapper {$attr['scheme']}'>" . ob_get_clean() . "</div>";
    }

    public function render_module_front($attr, $column_class)
    {
        return $this->render_module_back($attr, $column_class);
    }
}