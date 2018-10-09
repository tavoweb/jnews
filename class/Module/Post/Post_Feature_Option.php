<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Post;

use JNews\Module\ModuleOptionAbstract;

Class Post_Feature_Option extends ModuleOptionAbstract
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
        return esc_html__('JNews - Post Featured Image', 'jnews');
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
            'param_name'    => 'image_size',
            'heading'       => esc_html__('Featured Image Size', 'jnews'),
            'description'   => esc_html__('choose which feature image size','jnews'),
            'std'           => '',
            'value'         => array(
                esc_html__('1140x570', 'jnews')                => '1140x570',
                esc_html__('750x375', 'jnews')                 => '750x375',
                esc_html__('1140x815', 'jnews')                => '1140x815',
                esc_html__('750x536', 'jnews')                 => '750x536',
                esc_html__('Width 1140', 'jnews')              => 'featured-1140',
                esc_html__('Width 750', 'jnews')               => 'featured-750',
            )
        );

        $this->options[] = array(
            'type'          => 'dropdown',
            'param_name'    => 'gallery_size',
            'heading'       => esc_html__('Gallery Image Size', 'jnews'),
            'description'   => esc_html__('choose which gallery image size','jnews'),
            'std'           => '',
            'value'         => array(
                esc_html__('1140x570', 'jnews')                => '1140x570',
                esc_html__('750x375', 'jnews')                 => '750x375',
                esc_html__('1140x815', 'jnews')                => '1140x815',
                esc_html__('750x536', 'jnews')                 => '750x536',
                esc_html__('Width 1140', 'jnews')              => 'featured-1140',
                esc_html__('Width 750', 'jnews')               => 'featured-750',
            )
        );
    }
}