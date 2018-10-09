<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Slider;

Class Slider_5_Option extends SliderOptionAbstract
{
    protected $default_number = 5;
	protected $gradient_option = true;
	protected $design_option = true;

    public function get_module_name()
    {
        return esc_html__('JNews - Slider 5', 'jnews');
    }
}