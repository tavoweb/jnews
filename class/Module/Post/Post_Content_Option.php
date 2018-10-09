<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Post;

use JNews\Module\ModuleOptionAbstract;

Class Post_Content_Option extends ModuleOptionAbstract
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
        return esc_html__('JNews - Content', 'jnews');
    }

    public function set_options()
    {
        $this->set_post_option();
        $this->set_style_option();
    }

    public function set_post_option()
    {
        $this->options[] = array(
            'type'          => 'checkbox',
            'param_name'    => 'float_share',
            'heading'       => esc_html__('Enable Float Share on Content','jnews'),
            'value'         => array( "Check to enable float share on content" => 'yes' ),
        );


        $this->options[] = array(
            'type'          => 'dropdown',
            'param_name'    => 'float_style',
            'heading'       => esc_html__('Float Share Style', 'jnews'),
            'description'   => esc_html__('Choose your float share style.', 'jnews'),
            'std'           => 'share-normal',
            'value'         => array(
                esc_html__('Color', 'jnews')        => 'share-normal',
                esc_html__('Monochrome', 'jnews')   => 'share-monocrhome',
            ),
            'dependency'    => array('element' => 'float_share', 'value' => 'yes')
        );
    }
}