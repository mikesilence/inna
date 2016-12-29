<?php
/**
 * Cross-sells
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

$crosssells = WC()->cart->get_cross_sells();

if ( sizeof( $crosssells ) == 0 ) return;

$meta_query = WC()->query->get_meta_query();

$args = array(
	'post_type'           => 'product',
	'ignore_sticky_posts' => 1,
	'no_found_rows'       => 1,
	'posts_per_page'      => apply_filters( 'woocommerce_cross_sells_total', $posts_per_page ),
	'orderby'             => $orderby,
	'post__in'            => $crosssells,
	'meta_query'          => $meta_query
);

$products = new WP_Query( $args );

//$woocommerce_loop['columns'] = apply_filters( 'woocommerce_cross_sells_columns', $columns );


global $g5plus_woocommerce_loop,$g5plus_options;


$related_product_display_columns = isset($_GET['columns']) ? $_GET['columns'] : '';
if (!in_array($related_product_display_columns, array('3','4','5','6'))) {
	$related_product_display_columns = $g5plus_options['related_product_display_columns'];
}

$related_product_style = isset($g5plus_options['related_product_style']) ? $g5plus_options['related_product_style'] : 'classic-3';
$g5plus_woocommerce_loop['style'] = $related_product_style;
$g5plus_woocommerce_loop['rating'] = 0;
$g5plus_woocommerce_loop['columns'] = $related_product_display_columns;
$g5plus_woocommerce_loop['layout'] = 'slider';

if ( $products->have_posts() ) : ?>

	<div class="cross-sells">

        <h4 class="widget-title"><span><?php _e( 'You may be interested in&hellip;', 'woocommerce' ) ?></span></h4>

		<?php woocommerce_product_loop_start(); ?>

			<?php while ( $products->have_posts() ) : $products->the_post(); ?>

				<?php wc_get_template_part( 'content', 'product' ); ?>

			<?php endwhile; // end of the loop. ?>

		<?php woocommerce_product_loop_end(); ?>

	</div>

<?php endif;

wp_reset_query();