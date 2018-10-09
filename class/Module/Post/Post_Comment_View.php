<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Post;

Class Post_Comment_View extends PostViewAbstract
{
    public function render_module_back($attr, $column_class)
    {
        add_filter('comments_open', '__return_true');
        ob_start();
        comments_template();
        return "<div {$this->element_id($attr)} class='jnews_comment_container jeg_custom_comment_wrapper {$attr['scheme']} {$attr['el_class']}'>" . ob_get_clean() . "</div>";
    }

    public function render_module_front($attr, $column_class)
    {
        return $this->render_module_back($attr, $column_class);
    }
}