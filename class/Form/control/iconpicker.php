<div class="widget-wrapper type-iconpicker" data-field="<?php echo esc_attr($fieldkey); ?>" <?php echo !empty( $dependency ) ? 'data-dependency="' . esc_attr( json_encode( $dependency ) ) . '"' : ''; ?>>
	<label for="<?php echo esc_attr( $fieldid ); ?>"><?php echo esc_html( $title )  ?></label>
    <button class="btn btn-default iconpicker" id="<?php echo esc_attr( $fieldid ) ?>" name="<?php echo esc_attr( $fieldname ) ?>" data-iconset="fontawesome" data-icon="<?php echo esc_attr( $value ) ?>"></button>
    <i><?php echo wp_kses( $desc, wp_kses_allowed_html() ); ?></i>
</div>