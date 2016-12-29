<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop,$g5plus_options,$g5plus_woocommerce_loop;

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;



// Extra post classes
$classes = array();
$classes[] = 'product-item-wrap';
$product_rating = $g5plus_woocommerce_loop['rating'];
if ($product_rating === '') {
	$product_rating = $g5plus_options['product_show_rating'];
}

if ($product_rating == 0) {
    $classes[] = 'rating-visible';
}

$add_to_cart_animation = $g5plus_options['add_to_cart_animation'];
if ($add_to_cart_animation == 0) {
    $classes[] = 'add-to-cart-animation-visible';
}

$product_quick_view = $g5plus_options['product_quick_view'];
if ($product_quick_view == 0) {
	$classes[] = 'quick-view-visible';
}

?>
<div <?php post_class( $classes ); ?>>
    <div class="product-item-inner">
        <div class="product-thumb">
            <?php
            /**
             * woocommerce_before_shop_loop_item_title hook
             *
             * @hooked woocommerce_show_product_loop_sale_flash - 10
             * @hooked woocommerce_template_loop_product_thumbnail - 10
             * @hooked g5plus_woocomerce_template_loop_link - 20
             *
             */
            do_action( 'woocommerce_before_shop_loop_item_title' );
            ?>
			<div class="product-actions">
				<?php
				/**
				 * g5plus_woocommerce_product_action hook
				 *
				 * @hooked g5plus_woocomerce_template_loop_quick_view - 15
				 * @hooked g5plus_woocomerce_template_loop_link - 20
				 */
				do_action( 'g5plus_woocommerce_product_actions' );
				?>
			</div>
        </div>
        <div class="product-info">
            <?php
            /**
             * woocommerce_after_shop_loop_item_title hook
             *
             * @hooked g5plus_woocommerce_template_loop_name - 1
             * @hooked woocommerce_template_loop_price - 2
             * @hooked woocommerce_template_loop_rating - 5
             */
            do_action( 'woocommerce_after_shop_loop_item_title' );
            ?>
	        <div class="product-add-to-cart">
		        <?php
		        /**
		         * woocommerce_after_shop_loop_item hook
		         * @hooked woocommerce_template_loop_add_to_cart - 10
		         */
		        do_action( 'woocommerce_after_shop_loop_item' );
		        ?>
	        </div>
        </div>

    </div>
</div>

