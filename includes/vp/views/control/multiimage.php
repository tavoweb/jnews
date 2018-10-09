<?php if(!$is_compact) echo VP_View::instance()->load('control/template_control_head', $head_info); ?>

<div class="gallery clearfix">
    <?php
        if ( $value ) {
	        $images = explode( ',', $value );
            foreach ( $images as $image ) {
                $thumbnail = wp_get_attachment_image_src($image, 'thumbnail');
                echo '<span data-id="' . $image . '" title="' . 'title' . '"><img src="' . $thumbnail[0] . '" alt="" /><span class="close"></span></span>';
            }
        }
    ?>
</div>
<input class="vp-input" type="hidden" readonly id="<?php echo esc_attr($name); ?>" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr($value); ?>" />
<div class="buttons">
	<input class="vp-js-multiimage vp-button button" type="button" value="<?php echo 'Choose Image'; ?>" />
</div>

<?php if(!$is_compact) echo VP_View::instance()->load('control/template_control_foot', $head_info); ?>
