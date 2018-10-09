<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Post;

use JNews\Single\SinglePost;

Class Post_Tag_View extends PostViewAbstract
{
    public function render_module_back($attr, $column_class)
    {
        return
            "<div {$this->element_id($attr)} class='jeg_custom_tag_wrapper {$attr['scheme']} {$attr['el_class']}'>
                <div class=\"jeg_post_tags\">
                    <span>Tags:</span> 
                    <a href=\"#\" rel=\"tag\">First</a>
                    <a href=\"#\" rel=\"tag\">Second</a>
                    <a href=\"#\" rel=\"tag\">Third</a>
                    <a href=\"#\" rel=\"tag\">Forth</a>
                    <a href=\"#\" rel=\"tag\">Fifth</a>
                    <a href=\"#\" rel=\"tag\">Sixth</a>
                </div>
            </div>";
    }

    public function render_module_front($attr, $column_class)
    {
        if( has_tag() )
        {
            ob_start();
            SinglePost::getInstance()->render_post_tag();
            $tag = ob_get_clean();

            return
                "<div {$this->element_id($attr)} class='jeg_custom_tag_wrapper {$attr['scheme']} {$attr['el_class']}'>
                    <div class=\"jeg_post_tags\">
                        {$tag}
                    </div>
                </div>";
        }
    }
}