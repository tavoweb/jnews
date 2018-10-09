<?php

namespace JNews\Elementor\Control;

use \Elementor\Base_Data_Control;

class Multitag extends Base_Data_Control
{

	public function get_type()
    {
		return 'multitag';
	}

	public function content_template()
    {
		$control_uid    = $this->get_control_uid();
	    $data           = array();
	    $tags           = jnews_get_all_tag_loop();
	    $ajax_load      = empty($tags) ? 'jeg-ajax-load' : '';

	    if ( ! empty($tags) )
	    {
		    foreach($tags as $val)
		    {
			    $data[] = array(
				    'value'     => $val['value'],
				    'text'      => $val['label'],
			    );
		    }
	    }

	    $data = wp_json_encode($data);
		?>
		<div class="elementor-control-field">
			<label for="<?php echo $control_uid; ?>" class="elementor-control-title">{{{ data.label }}}</label>
            <div class="elementor-control-input-wrapper type-multitag <?php echo esc_attr( $ajax_load ); ?>">
                <input id="<?php echo $control_uid; ?>" type="text" class="tooltip-target input-sortable" data-tooltip="{{ data.title }}" title="{{ data.title }}" data-setting="{{ data.name }}" placeholder="{{ data.placeholder }}" />
                <div class="data-option" style="display: none;">
		            <?php echo esc_html($data); ?>
                </div>
            </div>
		</div>
		<# if ( data.description ) { #>
			<div class="elementor-control-field-description">{{{ data.description }}}</div>
		<# } #>
        <script type="text/javascript">
            (function($)
            {
                window.open_control($('input#<?php echo $control_uid; ?>'));
            })(jQuery);
        </script>
		<?php
	}
}
