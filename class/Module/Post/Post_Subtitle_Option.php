<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Post;

use JNews\Module\ModuleOptionAbstract;

Class Post_Subtitle_Option extends ModuleOptionAbstract
{
    public function get_category()
    {
        return esc_html__('JNews - Post', 'jnews');
    }

    public function compatible_column()
    {
        return array( 1,2,3,4,5,6,7,8,9,10,11,12 );
    }

    public function get_module_name()
    {
        return esc_html__('JNews - Post Subtitle', 'jnews');
    }

    public function set_options()
    {
        $this->set_style_option();
    }

}