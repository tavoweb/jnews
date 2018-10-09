<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Slider;

Class Slider_7_Option extends SliderOptionAbstract
{
    protected $default_number = 5;
    protected $design_option = true;

    public function get_module_name()
    {
        return esc_html__('JNews - Slider 7', 'jnews');
    }

    public function set_slider_option() {
	    parent::set_slider_option();

	    $this->options[] = array(
		    'type'          => 'slider',
		    'param_name'    => 'excerpt_length',
		    'heading'       => esc_html__('Excerpt Length', 'jnews'),
		    'description'   => esc_html__('Set word length of excerpt on post block.', 'jnews'),
		    'min'           => 0,
		    'max'           => 200,
		    'step'          => 1,
		    'std'           => 20,
	    );

	    $this->options[] = array(
		    'type'          => 'textfield',
		    'param_name'    => 'excerpt_ellipsis',
		    'heading'       => esc_html__('Excerpt Ellipsis', 'jnews'),
		    'description'   => esc_html__('Define excerpt ellipsis', 'jnews'),
		    'std'           => '...'
	    );
    }

	public function set_style_option()
    {
	    $this->options[] = array(
		    'type'          => 'dropdown',
		    'param_name'    => 'featured_position',
		    'heading'       => esc_html__('Featured Image Position', 'jnews'),
		    'description'   => esc_html__('Choose position for post featured image.', 'jnews'),
		    'std'           => 'left',
		    'group'         => esc_html__('Design', 'jnews'),
		    'value'         => array(
			    esc_html__('Left', 'jnews')  => 'left',
			    esc_html__('Right', 'jnews') => 'right',
		    )
	    );

    	parent::set_style_option();
    }
}
