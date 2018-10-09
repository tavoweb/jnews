<div class="widget-wrapper type-multitag" data-field="<?php echo esc_attr($fieldkey) ?>" <?php echo !empty( $dependency ) ? 'data-dependency="' . esc_attr( json_encode( $dependency ) ) . '"' : ''; ?>>
    <label for="<?php echo esc_attr( $fieldid ); ?>"><?php echo esc_html( $title )  ?></label>

	<?php
        $data = array();
        $ajax_class = '';

        if ( empty( $options ) )
        {
            $values = explode(',', $value);
            $ajax_class = 'jeg-ajax-load';

            foreach( $values as $val )
            {
                if ( ! empty( $val ) )
                {
                    $term = get_term( $val, 'post_tag' );
                    $data[] = array(
                        'value' => $val,
                        'text'  => $term->name
                    );
                }
            }
        } else {
	        foreach( $options as $key => $label )
	        {
		        $data[] = array(
			        'value' => $key,
			        'text'  => $label,
		        );
	        }
        }

        $data = wp_json_encode($data);
	?>

    <div class="multitag-wrapper <?php esc_attr_e($ajax_class); ?>">
        <input type="text" id="<?php echo esc_attr( $fieldid ); ?>"  class="input-sortable widefat code edit-menu-item-custom" name="<?php echo esc_attr( $fieldname ) ?>" value="<?php echo esc_html($value); ?>">
        <div class="data-option" style="display: none;">
	        <?php echo esc_html($data); ?>
        </div>
    </div>

    <i><?php echo wp_kses( $desc, wp_kses_allowed_html() ) ?></i>
</div>
