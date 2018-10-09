<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Post;

Class Post_Title_View extends PostViewAbstract
{
    public function render_module_back($attr, $column_class)
    {
        return
            "<div {$this->element_id($attr)} class='jeg_custom_title_wrapper {$attr['scheme']} {$attr['el_class']}'>
                <h1 class=\"jeg_post_title\">This is dummy title and will be replaced with real title of your post</h1>
            </div>";
    }

    public function render_module_front($attr, $column_class)
    {
        return
            "<div {$this->element_id($attr)} class='jeg_custom_title_wrapper {$attr['scheme']} {$attr['el_class']}'>
                <h1 class=\"jeg_post_title\">" . get_the_title() . "</h1>
            </div>";
    }
}