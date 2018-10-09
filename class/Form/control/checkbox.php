<div class="widget-wrapper type-checkbox" data-field="<?php echo esc_attr($fieldkey) ?>" <?php echo !empty( $dependency ) ? 'data-dependency="' . esc_attr( json_encode( $dependency ) ) . '"' : ''; ?>>
    <label for="<?php echo esc_attr( $fieldid ); ?>">
        <span class="customize-control-title"><?php echo esc_html( $title )  ?></span>
        <input type="checkbox" class="checkbox" name="<?php echo esc_attr( $fieldname ) ?>" id="<?php echo esc_attr( $fieldid ) ?>" value="1" <?php checked( (bool) $value ); ?> />
        <span class="switch"></span>
    </label>
    <i><?php echo wp_kses( $desc, wp_kses_allowed_html() ) ?></i>
</div>