<?php if(!$is_compact) echo VP_View::instance()->load('control/template_control_head', $head_info); ?>

<?php foreach ($items as $item): ?>
<label>
	<?php $checked = ($item->value == $value); ?>
	<input type="radio" <?php if($checked) echo 'checked'; ?> class="vp-input<?php if($checked) echo " checked"; ?>" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr($item->value); ?>" />
	<img src="<?php echo VP_Util_Res::img($item->img); ?>" alt="<?php echo esc_attr($item->label); ?>" class="vp-js-tipsy image-item" style="<?php VP_Util_Text::print_if_exists($item_max_width, 'max-width: %spx; '); ?><?php VP_Util_Text::print_if_exists($item_max_height, 'max-height: %spx; '); ?>" original-title="<?php echo esc_attr($item->label); ?>" />
</label>
<?php endforeach; ?>

<?php if(!$is_compact) echo VP_View::instance()->load('control/template_control_foot', $head_info); ?>