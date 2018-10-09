<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Footer;

use JNews\Module\ModuleOptionAbstract;

Class Footer_Header_Option extends ModuleOptionAbstract
{
    public function compatible_column()
    {
        return array(1,2,3,4,5,6,7,8,9,10,11,12);
    }

    public function get_module_name()
    {
        return esc_html__('JNews - Footer Header', 'jnews');
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
		    'type'          => 'textfield',
		    'param_name'    => 'first_title',
		    'holder'        => 'h3',
		    'heading'       => esc_html__('Title', 'jnews'),
		    'description'   => esc_html__('Insert title text.', 'jnews'),
	    );
	    $this->options[] = array(
		    'type'          => 'dropdown',
		    'param_name'    => 'header_align',
		    'heading'       => esc_html__('Header Align', 'jnews'),
		    'description'   => esc_html__('Choose which header alignment you want to use.', 'jnews'),
		    'std'           => 'left',
		    'value'         => array(
			    esc_html__('Left', 'jnews')     => 'left',
			    esc_html__('Center', 'jnews')   => 'center'
		    )
	    );
        $this->options[] = array(
            'type'          => 'colorpicker',
            'param_name'    => 'text_color',
            'heading'       => esc_html__('Text Color', 'jnews'),
            'description'   => esc_html__('Set text color.', 'jnews'),
        );
    }
}