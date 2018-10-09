<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Post;

Class Post_Author_View extends PostViewAbstract
{
    public function render_module_back($attr, $column_class)
    {
        ob_start();
        get_template_part('fragment/post/author-box');
        return
            "<div {$this->element_id($attr)} class='jeg_custom_author_wrapper jnews_author_box_container {$attr['scheme']} {$attr['el_class']}'>" .
                ob_get_clean() .
            "</div>";
    }

    public function render_module_front($attr, $column_class)
    {
        return $this->render_module_back($attr, $column_class);
    }
}