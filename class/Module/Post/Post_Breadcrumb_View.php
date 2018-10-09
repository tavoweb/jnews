<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Post;

use JNews\Single\SinglePost;

Class Post_Breadcrumb_View extends PostViewAbstract
{
    public function render_module_back($attr, $column_class)
    {
        return
            "<div {$this->element_id($attr)} class='jeg_custom_breadcrumb_wrapper {$attr['scheme']} {$attr['el_class']}'>
                <div class=\"jeg_breadcrumbs jeg_breadcrumb_container\">
                    <div id=\"breadcrumbs\">
                        <span class=\"\">
                            <a href=\"#\" target=\"_self\">Home</a>
                        </span>
                        <i class=\"fa fa-angle-right\"></i>
                        <span class=\"\">
                            <a href=\"\" target=\"_self\">Category</a>
                        </span>
                        <i class=\"fa fa-angle-right\"></i>
                        <span class=\"breadcrumb_last_link\">
                            <a href=\"#\" target=\"_self\">Child Category</a>
                        </span>
                    </div>            
                </div>
            </div>";
    }

    public function render_module_front($attr, $column_class)
    {
        $single = SinglePost::getInstance();
        return "<div {$this->element_id($attr)} class='jeg_custom_breadcrumb_wrapper {$attr['scheme']} {$attr['el_class']}'>" . $single->render_breadcrumb(false) . "</div>";
    }
}