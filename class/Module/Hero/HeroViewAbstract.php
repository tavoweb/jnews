<?php
/**
 * @author : Jegtheme
 */
namespace JNews\Module\Hero;

use JNews\Image\ImageBackgroundLoad;
use JNews\Module\ModuleViewAbstract;

abstract Class HeroViewAbstract extends ModuleViewAbstract
{
    protected $margin;

    public function get_number_post()
    {
        return $this->option_class->get_number_post();
    }

    public function render_content($result)
    {
        if(!empty($result)) {
            return $this->render_element($result);
        } else {
            return $this->empty_content();
        }
    }

    public function remove_px($string)
    {
        return str_replace('px', '', $string);
    }

    public function get_thumbnail($id, $size)
    {
        $image = ImageBackgroundLoad::getInstance();
        return $image->single_hero_image($id, $size);
    }

    public function generate_style($attr)
    {
        $style = '';

        if(!empty($attr['hero_height_desktop']))
        {
            $height = $this->remove_px($attr['hero_height_desktop']);
            $style .= "@media only screen and (min-width: 1025px) { .jeg_heroblock.{$this->unique_id} .jeg_heroblock_wrapper{ height: {$height}px; } }";
        }

        if(!empty($attr['hero_height_1024']))
        {
            $height = $this->remove_px($attr['hero_height_1024']);
            $style .= "@media only screen and (max-width: 1024px) and (min-width: 769px) { .jeg_heroblock.{$this->unique_id} .jeg_heroblock_wrapper{ height: {$height}px; } }";
        }

        if(!empty($attr['hero_height_768']))
        {
            $height = $this->remove_px($attr['hero_height_768']);
            $style .= "@media only screen and (max-width: 768px) and (min-width: 668px) { .jeg_heroblock.{$this->unique_id} .jeg_heroblock_wrapper{ height: {$height}px; } }";
        }

        if(!empty($attr['hero_height_667']))
        {
            $height = $this->remove_px($attr['hero_height_667']);
            $style .= "@media only screen and (max-width: 667px) and (min-width: 569px) { .jeg_heroblock.{$this->unique_id} .jeg_heroblock_wrapper{ height: {$height}px; } }";
        }

        if(!empty($attr['hero_height_568']))
        {
            $height = $this->remove_px($attr['hero_height_568']);
            $style .= "@media only screen and (max-width: 568px) and (min-width: 481px) { .jeg_heroblock.{$this->unique_id} .jeg_heroblock_wrapper{ height: {$height}px; } }";
        }

        if(!empty($attr['hero_height_480']))
        {
            $height = $this->remove_px($attr['hero_height_480']);
            $style .= "@media only screen and (max-width: 480px) { .jeg_heroblock.{$this->unique_id} .jeg_heroblock_wrapper{ height: {$height}px; } }";
        }

        for($i = 1; $i <= $this->get_number_post(); $i++)
        {
            if($attr['hero_item_' . $i . '_enable']) {
                if($attr['hero_style'] === 'jeg_hero_style_5') {
                    $style .=
                        ".jeg_heroblock.{$this->unique_id} .jeg_hero_item_{$i} .jeg_thumb a > div:after {
                            background: -moz-linear-gradient({$attr['hero_item_' . $i . '_degree']}deg, {$attr['hero_item_' . $i . '_start_color']} 0%, {$attr['hero_item_' . $i . '_end_color']} 100%);
                            background: -webkit-linear-gradient({$attr['hero_item_' . $i . '_degree']}deg, {$attr['hero_item_' . $i . '_start_color']} 0%, {$attr['hero_item_' . $i . '_end_color']} 100%);
                            background: linear-gradient({$attr['hero_item_' . $i . '_degree']}deg, {$attr['hero_item_' . $i . '_start_color']} 0%, {$attr['hero_item_' . $i . '_end_color']} 100%);
                        }";
                } else {
                	$hero_item_degree = isset($attr['hero_item_' . $i . '_degree']['size']) ? $attr['hero_item_' . $i . '_degree']['size'] : $attr['hero_item_' . $i . '_degree'];
                    $style .=
                        ".jeg_heroblock.{$this->unique_id} .jeg_hero_item_{$i} .jeg_thumb a > div:before {
                            background: -moz-linear-gradient({$hero_item_degree}deg, {$attr['hero_item_' . $i . '_start_color']} 0%, {$attr['hero_item_' . $i . '_end_color']} 100%);
                            background: -webkit-linear-gradient({$hero_item_degree}deg, {$attr['hero_item_' . $i . '_start_color']} 0%, {$attr['hero_item_' . $i . '_end_color']} 100%);
                            background: linear-gradient({$hero_item_degree}deg, {$attr['hero_item_' . $i . '_start_color']} 0%, {$attr['hero_item_' . $i . '_end_color']} 100%);
                        }";
                }
            }
        }

        if(!empty($style))
        {
            $style = "<style scoped>{$style}</style>";
        }

        return $style;
    }

    public function render_output($result, $attr, $column_class)
    {
	    $this->margin   = isset( $attr['hero_margin']['size'] ) ? $attr['hero_margin']['size'] : $attr['hero_margin'];
        $content        = $this->render_output_loop($result);
        $name           = str_replace('jnews_hero_','',$this->class_name);
        $hero_style     = $this->generate_style($attr);
        $data_attr      = $this->data_attr($attr);

        if ( isset($attr['hero_slider_enable']) && $attr['hero_slider_enable'] )
        {
        	$attr['el_class'] .= ' owl-carousel';
        }

        $output =
            "<div {$this->element_id($attr)} class=\"jeg_heroblock jeg_heroblock_{$name} {$column_class} {$attr['hero_style']} {$this->unique_id} {$this->get_vc_class_name()} {$attr['el_class']}\" data-margin=\"{$this->margin}\" {$data_attr}>
                {$content}
            </div>
            {$hero_style}";
        return $output;
    }

    public function render_output_loop($result)
    {
    	$output = '';
    	$result = array_chunk($result, $this->get_number_post());

    	foreach ( $result as $item )
	    {
		    $output .=
			    "<div class=\"jeg_heroblock_wrapper\" style='margin: 0px 0px -{$this->margin}px -{$this->margin}px;'>
	                " . $this->render_content($item) . "
	            </div>";
	    }

	    return $output;
    }

    public function data_attr($attr)
    {
	    $output = '';

	    if ( isset($attr['hero_slider_enable']) && $attr['hero_slider_enable'] )
	    {
	    	$hero_slider_delay = isset( $attr['hero_slider_delay']['size'] ) ? $attr['hero_slider_delay']['size'] : $attr['hero_slider_delay'];

		    $output .= isset($attr['hero_slider_auto_play']) && $attr['hero_slider_auto_play'] ? ' data-autoplay="' . $attr['hero_slider_auto_play'] . '""' : '';
		    $output .= ! empty( $hero_slider_delay ) ? ' data-delay="' . $hero_slider_delay . '""' : '';
	    }

    	return $output;
    }

    public function render_module($attr, $column_class)
    {
        $attr['number_post'] = $this->get_number_post();
        $attr['pagination_number_post'] = 1;

	    if ( isset($attr['hero_slider_enable']) && $attr['hero_slider_enable'] )
	    {
	    	$hero_slider_item = isset($attr['hero_slider_item']['size']) ? $attr['hero_slider_item']['size'] : $attr['hero_slider_item'];
		    $attr['number_post'] = $attr['number_post'] * $hero_slider_item;
	    }

        $results = $this->build_query($attr);
        return $this->render_output($results['result'], $attr, $column_class);
    }

    abstract public function render_element($result);
}

