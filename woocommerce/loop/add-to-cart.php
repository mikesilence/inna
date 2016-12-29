<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>
<?php if (!$product->is_in_stock()) : ?>
	<a href="<?php echo apply_filters( 'out_of_stock_add_to_cart_url', get_permalink( $product->id ) ); ?>" class="product_type_soldout" data-toggle="tooltip" data-placement="top" title="<?php _e('Sold out','g5plus-wolverine'); ?>"><i class="wicon icon-svg-icon-14"></i></a>
<?php else : ?>
<?php
	$icon_class = '';
	$product_type = apply_filters( 'woocommerce_add_to_cart_handler', $product->product_type, $product );
	switch ($product_type) {
		case 'variable':
			$icon_class = 'wicon icon-svg-icon-12';
			break;
		case 'grouped':
			$icon_class = 'wicon icon-svg-icon-13';
			break;
		case 'external':
			$icon_class = 'fa fa-info';
			break;
		default:
			if ( $product->is_purchasable() && $product->product_type != "booking" ) {
				$icon_class = 'wicon icon-svg-icon-15';
			} else {
				$icon_class = 'wicon icon-svg-icon-14';
			}
			break;
	}

	global $g5plus_woocommerce_loop;
	$archive_product_style = isset($g5plus_woocommerce_loop['style']) ? $g5plus_woocommerce_loop['style'] : 'classic-1';

	echo '<div class="add-to-cart-wrap" data-style="'.$archive_product_style.'"  data-toggle="tooltip" data-placement="top" title="'. $product->add_to_cart_text() .'">';
	/*echo apply_filters( 'woocommerce_loop_add_to_cart_link',
	sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="%s product_type_%s"><i class="%s"></i></a>',
			esc_url( $product->add_to_cart_url() ),
			esc_attr( $product->id ),
			esc_attr( $product->get_sku() ),
			esc_attr( isset( $quantity ) ? $quantity : 1 ),
			$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
			esc_attr( $product->product_type ),
			$icon_class
	),
	$product );*/

	echo apply_filters( 'woocommerce_loop_add_to_cart_link',
		sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s"><i class="%s"></i></a>',
			esc_url( $product->add_to_cart_url() ),
			esc_attr( isset( $quantity ) ? $quantity : 1 ),
			esc_attr( $product->id ),
			esc_attr( $product->get_sku() ),
			esc_attr( isset( $class ) ? $class : 'button' ),
			esc_attr( $icon_class )
		),
		$product );

	echo '</div>';



?>
<?php endif; ?>
