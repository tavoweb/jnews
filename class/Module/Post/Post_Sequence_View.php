<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Post;

use JNews\Single\SinglePost;

Class Post_Sequence_View extends PostViewAbstract
{
    public function render_module_back($attr, $column_class)
    {
        return
            "<div {$this->element_id($attr)} class='jeg_custom_prev_next_wrapper jnews_prev_next_container {$attr['scheme']} {$attr['el_class']}'>                
                <div class=\"jeg_prevnext_post\">
                    <a href=\"#\" class=\"post prev-post\">
                        <span class=\"caption\">Previous Post</span>
                        <h3 class=\"post-title\">Lorem ipsum dolor sit amet consectetur adipiscing elit conubia nostra</h3>
                    </a>
        
                    <a href=\"#\" class=\"post next-post\">
                        <span class=\"caption\">Next Post</span>
                        <h3 class=\"post-title\">Nunc eu iaculis mi nulla facilisi aenean a risus sed luctus arcu </h3>
                    </a>
                </div>
            </div>";
    }

    public function render_module_front($attr, $column_class)
    {
        ob_start();
        SinglePost::getInstance()->prev_next_post();
        $prevnext = ob_get_clean();

        return
            "<div {$this->element_id($attr)} class='jeg_custom_prev_next_wrapper jnews_prev_next_container {$attr['scheme']} {$attr['el_class']}'>                
                {$prevnext}                
            </div>";
    }
}