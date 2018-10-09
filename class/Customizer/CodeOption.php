<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Customizer;

/**
 * Class Theme JNews Customizer
 */
Class CodeOption extends CustomizerOptionAbstract
{
    /** section */

    public function __construct($customizer, $id)
    {
        parent::__construct($customizer, $id);
    }

    /**
     * Set Section
     */
    public function set_option()
    {
        $this->set_section();
        $this->set_code_field();
    }

    public function set_section()
    {
        $this->customizer->add_panel(array(
            'id' => 'jnews_code_panel',
            'title' => esc_html__('Additonal Javascript', 'jnews'),
            'priority' => 250,
        ));

        $this->customizer->add_section(array(
            'id' => 'jnews_header_code_section',
            'title' => esc_html__('Header Javascript', 'jnews'),
            'panel' => 'jnews_code_panel',
            'priority' => 250,
        ));

        $this->customizer->add_section(array(
            'id' => 'jnews_footer_code_section',
            'title' => esc_html__('Footer Javascript', 'jnews'),
            'panel' => 'jnews_code_panel',
            'priority' => 250,
        ));
    }

    public function set_code_field()
    {
        $this->customizer->add_field(array(
            'id'            => 'jnews_additional_header_js',
            'transport'     => 'refresh',
            'default'       => '',
            'sanitize'      => 'jnews_sanitize_by_pass',
            'type'          => 'jnews-textarea',
            'section'       => 'jnews_header_code_section',
            'label'         => esc_html__('Additional Javascript on Header', 'jnews'),
            'description'   => esc_html__('Put your additional javascript code right here. This code will be placed on header','jnews'),
        ));

        $this->customizer->add_field(array(
            'id'            => 'jnews_additional_js',
            'transport'     => 'refresh',
            'default'       => '',
            'sanitize'      => 'jnews_sanitize_by_pass',
            'type'          => 'jnews-textarea',
            'section'       => 'jnews_footer_code_section',
            'label'         => esc_html__('Additional Javascript on Footer', 'jnews'),
            'description'   => esc_html__('Put your additional javascript code right here. This code will be placed on footer','jnews'),
        ));
    }
}