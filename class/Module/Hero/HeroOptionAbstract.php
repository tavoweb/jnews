<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Hero;

use JNews\Module\ModuleOptionAbstract;

abstract Class HeroOptionAbstract extends ModuleOptionAbstract
{
    protected $number_post = 0;
    protected $margin = 0;
    protected $show_style = true;

    public function get_number_post()
    {
        return $this->number_post;
    }

	public function get_category()
	{
		return esc_html__('JNews - Hero', 'jnews');
	}

    public function compatible_column()
    {
        return array( 12 );
    }

    public function show_color_scheme()
    {
        return false;
    }

    public function set_options()
    {
        $this->set_hero_option();
        $this->set_content_filter_option($this->number_post, true);
        if($this->show_style) {
            $this->set_hero_design_option();
	        $this->set_hero_overlay_option();
            $this->set_hero_slider_option();
        }
        $this->set_style_option();
    }

    public function set_hero_overlay_option()
    {
        for($i = 1; $i <= $this->number_post; $i++)
        {
            $this->options[] = array(
                'type'          => 'checkbox',
                'param_name'    => 'hero_item_' . $i . '_enable',
                'heading'       => sprintf(esc_html__('Override overlay for item %s', 'jnews'), $i),
                'group'         => esc_html__('Hero Style', 'jnews'),
                'description'   => esc_html__('Override overlay style for this item', 'jnews'),
            );

            $this->options[] = array(
                'type'          => 'slider',
                'param_name'    => 'hero_item_' . $i . '_degree',
                'heading'       => sprintf(esc_html__('Hero Item %s : Overlay Gradient Degree', 'jnews'), $i),
                'group'         => esc_html__('Hero Style', 'jnews'),
                'min'           => 0,
                'max'           => 360,
                'step'          => 1,
                'std'           => 0,
                'dependency'    => array('element' => 'hero_item_' . $i . '_enable', 'value' => 'true')
            );

            $this->options[] = array(
                'type'          => 'colorpicker',
                'std'           => 'rgba(255,255,255,0.5)',
                'param_name'    => 'hero_item_' . $i . '_start_color',
                'group'         => esc_html__('Hero Style', 'jnews'),
                'heading'       => sprintf(esc_html__('Hero Item %s : Gradient Start Color', 'jnews'), $i),
                'dependency'    => array('element' => 'hero_item_' . $i . '_enable', 'value' => 'true')
            );

            $this->options[] = array(
                'type'          => 'colorpicker',
                'std'           => 'rgba(0,0,0,0.5)',
                'param_name'    => 'hero_item_' . $i . '_end_color',
                'group'         => esc_html__('Hero Style', 'jnews'),
                'heading'       => sprintf(esc_html__('Hero Item %s : Gradient End Color', 'jnews'), $i),
                'dependency'    => array('element' => 'hero_item_' . $i . '_enable', 'value' => 'true')
            );
        }
    }

    public function set_hero_design_option()
    {
        $this->options[] = array(
            'type'          => 'textfield',
            'param_name'    => 'hero_height_desktop',
            'heading'       => esc_html__('Hero Height on Dekstop', 'jnews'),
            'description'   => esc_html__('Height on pixel / px, leave it empty to use the default number.', 'jnews'),
            'group'         => esc_html__('Hero Design', 'jnews'),
        );
        $this->options[] = array(
            'type'          => 'textfield',
            'param_name'    => 'hero_height_1024',
            'heading'       => esc_html__('Hero Height on 1024px Width Screen', 'jnews'),
            'description'   => esc_html__('Height on pixel / px, leave it empty to use the default number.', 'jnews'),
            'group'         => esc_html__('Hero Design', 'jnews'),
        );
        $this->options[] = array(
            'type'          => 'textfield',
            'param_name'    => 'hero_height_768',
            'heading'       => esc_html__('Hero Height on 768px Width Screen', 'jnews'),
            'description'   => esc_html__('Height on pixel / px, leave it empty to use the default number.', 'jnews'),
            'group'         => esc_html__('Hero Design', 'jnews'),
        );
        $this->options[] = array(
            'type'          => 'textfield',
            'param_name'    => 'hero_height_667',
            'heading'       => esc_html__('Hero Height on 667px Width Screen', 'jnews'),
            'description'   => esc_html__('Height on pixel / px, leave it empty to use the default number.', 'jnews'),
            'group'         => esc_html__('Hero Design', 'jnews'),
        );
        $this->options[] = array(
            'type'          => 'textfield',
            'param_name'    => 'hero_height_568',
            'heading'       => esc_html__('Hero Height on 568px Width Screen', 'jnews'),
            'description'   => esc_html__('Height on pixel / px, leave it empty to use the default number.', 'jnews'),
            'group'         => esc_html__('Hero Design', 'jnews'),
        );
        $this->options[] = array(
            'type'          => 'textfield',
            'param_name'    => 'hero_height_480',
            'heading'       => esc_html__('Hero Height on 480px Width Screen', 'jnews'),
            'description'   => esc_html__('Height on pixel / px, leave it empty to use the default number.', 'jnews'),
            'group'         => esc_html__('Hero Design', 'jnews'),
        );
    }

    public function set_hero_option()
    {
        $this->options[] = array(
            'type'          => 'slider',
            'param_name'    => 'hero_margin',
            'heading'       => esc_html__('Hero Margin', 'jnews'),
            'description'   => esc_html__('Margin of each hero element.', 'jnews'),
            'group'         => esc_html__('Hero Setting', 'jnews'),
            'min'           => 0,
            'max'           => 30,
            'step'          => 1,
            'std'           => 0,
        );
        $this->options[] = array(
            'type'          => 'radioimage',
            'param_name'    => 'hero_style',
            'std'           => 'jeg_hero_style_1',
            'value'         => array(
                JNEWS_THEME_URL . '/assets/img/admin/hero-1.png'  => 'jeg_hero_style_1',
                JNEWS_THEME_URL . '/assets/img/admin/hero-2.png'  => 'jeg_hero_style_2',
                JNEWS_THEME_URL . '/assets/img/admin/hero-3.png'  => 'jeg_hero_style_3',
                JNEWS_THEME_URL . '/assets/img/admin/hero-4.png'  => 'jeg_hero_style_4',
                JNEWS_THEME_URL . '/assets/img/admin/hero-5.png'  => 'jeg_hero_style_5',
                JNEWS_THEME_URL . '/assets/img/admin/hero-6.png'  => 'jeg_hero_style_6',
                JNEWS_THEME_URL . '/assets/img/admin/hero-7.png'  => 'jeg_hero_style_7',
            ),
            'heading'       => esc_html__('Hero Style', 'jnews'),
            'description'   => esc_html__('Choose which hero style that fit your content design.', 'jnews'),
            'group'         => esc_html__('Hero Setting', 'jnews'),
        );
        $this->options[] = array(
            'type'          => 'dropdown',
            'param_name'    => 'date_format',
            'heading'       => esc_html__('Choose Date Format', 'jnews'),
            'description'   => esc_html__('Choose which date format you want to use.', 'jnews'),
            'std'           => 'default',
            'group'         => esc_html__('Hero Setting', 'jnews'),
            'value'         => array(
                esc_html__('Relative Date/Time Format (ago)', 'jnews')               => 'ago',
                esc_html__('WordPress Default Format', 'jnews')      => 'default',
                esc_html__('Custom Format', 'jnews')                 => 'custom',
            )
        );
        $this->options[] = array(
            'type'          => 'textfield',
            'param_name'    => 'date_format_custom',
            'heading'       => esc_html__('Custom Date Format', 'jnews'),
            'description'   => wp_kses(sprintf(__('Please write custom date format for your module, for more detail about how to write date format, you can refer to this <a href="%s" target="_blank">link</a>.', 'jnews'), 'https://codex.wordpress.org/Formatting_Date_and_Time'), wp_kses_allowed_html()),
            'std'           => 'Y/m/d',
            'group'         => esc_html__('Hero Setting', 'jnews'),
            'dependency'    => array('element' => 'date_format', 'value' => array('custom'))
        );
    }

	public function set_hero_slider_option()
	{
		$this->options[] = array(
			'type'          => 'checkbox',
			'param_name'    => 'hero_slider_enable',
			'heading'       => esc_html__('Hero Slider', 'jnews'),
			'description'   => esc_html__('Enable hero slider.', 'jnews'),
			'group'         => esc_html__('Hero Slider', 'jnews'),
		);

		$this->options[] = array(
			'type'          => 'checkbox',
			'param_name'    => 'hero_slider_auto_play',
			'heading'       => esc_html__('Slider Autoplay', 'jnews'),
			'description'   => esc_html__('Enable autoplay hero slider.', 'jnews'),
			'group'         => esc_html__('Hero Slider', 'jnews'),
			'dependency'    => array('element' => 'hero_slider_enable', 'value' => 'true')
		);

		$this->options[] = array(
			'type'          => 'slider',
			'param_name'    => 'hero_slider_delay',
			'heading'       => esc_html__('Autoplay Delay', 'jnews'),
			'description'   => esc_html__('Set your autoplay delay (in millisecond).', 'jnews'),
			'min'           => 1000,
			'max'           => 10000,
			'step'          => 500,
			'std'           => 3000,
			'group'         => esc_html__('Hero Slider', 'jnews'),
			'dependency'    => array('element' => 'hero_slider_auto_play', 'value' => 'true')
		);

		$this->options[] = array(
			'type'          => 'slider',
			'param_name'    => 'hero_slider_item',
			'heading'       => esc_html__('Slider Item', 'jnews'),
			'description'   => esc_html__('Set number of items of hero slider.', 'jnews'),
			'group'         => esc_html__('Hero Slider', 'jnews'),
			'min'           => 1,
			'max'           => 10,
			'step'          => 1,
			'std'           => 3,
			'dependency'    => array('element' => 'hero_slider_enable', 'value' => 'true')
		);
	}
}
