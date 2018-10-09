<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Footer;

use JNews\Module\ModuleOptionAbstract;

Class Footer_Social_Option extends ModuleOptionAbstract
{
    public function compatible_column()
    {
        return array(1,2,3,4,5,6,7,8,9,10,11,12);
    }

    public function get_module_name()
    {
        return esc_html__('JNews - Footer Social Icon', 'jnews');
    }

    public function get_category()
    {
        return esc_html__('JNews - Footer', 'jnews');
    }

    public function set_options()
    {
        $this->options[] = array(
            'type'          => 'textfield',
            'param_name'    => 'el_id',
            'heading'       => esc_html__('Element ID','jnews'),
            'description'   => wp_kses(sprintf(__('Enter element ID (Note: make sure it is unique and valid according to <a href="%s">w3c specification</a>).', 'jnews'), 'http://www.w3schools.com/tags/att_global_id.asp'), wp_kses_allowed_html()),
        );

        $this->options[] = array(
            'type'          => 'textfield',
            'param_name'    => 'el_class',
            'heading'       => esc_html__('Extra class name','jnews'),
            'description'   => esc_html__('Style particular content element differently - add a class name and refer to it in custom CSS.', 'jnews'),
        );

        $this->options[] = array(
            'type'          => 'dropdown',
            'param_name'    => 'social_icon',
            'heading'       => esc_html__('Social Icon Type', 'jnews'),
            'description'   => esc_html__('choose style for your social icon', 'jnews'),
            'default'       => 'nobg',
            'value'         => array(
                esc_attr__( 'Square', 'jnews' )             => 'square',
                esc_attr__( 'Rounded', 'jnews' )            => 'rounded',
                esc_attr__( 'Circle', 'jnews' )             => 'circle',
                esc_attr__( 'No Background', 'jnews' )      => 'nobg',
            )
        );

        $this->options[] = array(
            'type'          => 'colorpicker',
            'param_name'    => 'icon_text_color',
            'heading'       => esc_html__('Icon Color', 'jnews'),
            'description'   => esc_html__('Social icon text color.', 'jnews'),
        );

        $this->options[] = array(
            'type'          => 'colorpicker',
            'param_name'    => 'icon_text_hover_color',
            'heading'       => esc_html__('Icon Hover Color', 'jnews'),
            'description'   => esc_html__('Social icon hover text color.', 'jnews'),
        );

        $this->options[] = array(
            'type'          => 'colorpicker',
            'param_name'    => 'icon_background',
            'heading'       => esc_html__('Background Color', 'jnews'),
            'description'   => esc_html__('Social icon background.', 'jnews'),
        );

        $this->options[] = array(
            'type'          => 'colorpicker',
            'param_name'    => 'icon_hover_background',
            'heading'       => esc_html__('Background Hover Color', 'jnews'),
            'description'   => esc_html__('Social icon hover background.', 'jnews'),
        );
    }
}