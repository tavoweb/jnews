<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Block;

Class Block_11_Option extends BlockOptionAbstract
{
    protected $default_number_post = 4;
    protected $show_excerpt = false;
    protected $default_ajax_post = 4;

    public function get_module_name()
    {
        return esc_html__('JNews - Module 11', 'jnews');
    }

    public function additional_style()
    {
        parent::additional_style();

        $this->options[] = array(
            'type'          => 'colorpicker',
            'param_name'    => 'block_background',
            'group'         => esc_html__('Design', 'jnews'),
            'heading'       => esc_html__('Block Background', 'jnews'),
            'description'   => esc_html__('This option will change your Block Background', 'jnews'),
        );
    }
}