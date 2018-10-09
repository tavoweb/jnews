<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Post;

use JNews\Module\ModuleOptionAbstract;

Class Post_Share_Option extends ModuleOptionAbstract
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
        return esc_html__('JNews - Post Share', 'jnews');
    }

    public function set_options()
    {
        $this->set_post_option();
        $this->set_style_option();
    }

    public function set_post_option()
    {
        $this->options[] = array(
            'type'          => 'dropdown',
            'param_name'    => 'share_style',
            'heading'       => esc_html__('Share Style', 'jnews'),
            'description'   => esc_html__('Choose your share style', 'jnews'),
            'std'           => 'share-normal',
            'value'         => array(
                esc_html__('Share Style 1', 'jnews')        => 'top_share',
                esc_html__('Share Style 2', 'jnews')        => 'bottom_share',
            ),
        );

        $this->options[] = array(
            'type'          => 'checkbox',
            'heading'       => esc_html__('Show Share Counter', 'jnews'),
            'param_name'    => 'show_share',
            'value'         => array( esc_html__("check to show share counter", 'jnews') => 'yes' ),
            'std'           => 'yes',
            'dependency'    => array('element' => 'share_style', 'value' => 'top_share')
        );

        $this->options[] = array(
            'type'          => 'checkbox',
            'heading'       => esc_html__('Show View Counter', 'jnews'),
            'param_name'    => 'show_view',
            'value'         => array( esc_html__("check to show view counter", 'jnews') => 'yes' ),
            'std'           => 'yes',
            'dependency'    => array('element' => 'share_style', 'value' => 'top_share')
        );
    }
}