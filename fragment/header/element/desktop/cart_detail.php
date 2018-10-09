<div class="jeg_nav_item jeg_cart cartdetail woocommerce">

    <?php if ( class_exists( 'WooCommerce' ) ) : ?>
        <span class="carticon">
            <i class="fa fa-shopping-cart jeg_carticon"></i>
            <a class="cartlink" href="<?php echo wc_get_cart_url(); ?>" title="<?php jnews_print_translation( 'View your shopping cart', 'jnews', 'view_shopping_cart' ); ?>">
                <?php jnews_print_translation( 'Cart', 'jnews', 'cart' ) ?> / <?php echo WC()->cart->get_cart_total(); ?>
            </a>
        </span>

        <div class="jeg_cartcontent">
            <div class="widget_shopping_cart_content">
                <?php woocommerce_mini_cart(); ?>
            </div>
        </div>
    <?php else : ?>
        <i class="fa fa-shopping-cart jeg_carticon"></i>
        <div class="jeg_cartcontent_fallback">
            <div class="alert alert-error">
                <strong><?php esc_html_e('Plugin Install','jnews'); ?></strong> : <?php esc_html_e('Cart Detail need WooCommerce plugin to be installed.', 'jnews'); ?>
            </div>
        </div>
    <?php endif ?>

</div>