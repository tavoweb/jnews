/*jshint -W065 */
wp.customize.controlConstructor['jnews-ajax-select'] = wp.customize.controlConstructor.default.extend({
	ready: function() {

		'use strict';

		var control = this,
			section = jQuery(this.container).parents('.control-section').first();

		var element = control.container.find( 'select' ),
			multiple = parseInt( element.data( 'multiple' ) ),
			selectValue,
			action = $(element).data('action');

		jQuery( element ).selectize({
            plugins: ['drag_drop', 'remove_button'],
            persist: true,
            create: true,
            hideSelected: true,
            valueField: 'value',
            labelField: 'text',
            render: {
                option: function(item, escape) {
                    var text = item.text;
                    if(text === undefined) {
                        return '<div><span>' + item.value + '</span></div>';
                    } else {
                        return '<div><span>' + text + '</span></div>';
                    }
                }
            },
            load: function(query, callback) {
                if (!query.length || query.length < 3) return callback();
                $.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        'string' : encodeURIComponent(query),
                        'action'  : action
                    },
                    error: function() {
                        callback();
                    },
                    success: function(res) {
                        callback(res);
                    }
                });
            }
		});

		// Change value
		control.container.on( 'change', 'select', function() {
			selectValue = jQuery( this ).val();

			// If this is a multi-select, then we need to convert the value to an object.
			if ( multiple > 1 ) {
				selectValue = _.extend( {}, jQuery( this ).val() );
			}

			control.setting.set( selectValue );
		});
	}
});