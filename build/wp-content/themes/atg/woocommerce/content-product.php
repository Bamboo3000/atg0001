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
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div <?php post_class('product-listing__products__item'); ?>>
	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
	<div class="content">
		<div class="img">
			<picture>
				<source srcset="<?= get_the_post_thumbnail_url( $post, 'atg-product-small'); ?>" media="(min-width: 767px)" type="image/jpeg">
				<source srcset="<?= get_the_post_thumbnail_url( $post, 'atg-product-medium'); ?>" media="(min-width: 640px)" type="image/jpeg">
				<source srcset="<?= get_the_post_thumbnail_url( $post, 'atg-product-small'); ?>" media="(min-width: 360px)" type="image/jpeg">
				<source srcset="<?= get_the_post_thumbnail_url( $post, 'atg-product-xsmall'); ?>" media="(min-width: 1px)" type="image/jpeg">
				<img src="<?= get_the_post_thumbnail_url( $post, 'atg-product-medium'); ?>" alt="">
			</picture>
		</div>
		<div class="description">
			<p class="title">
				<?= get_the_title(); ?>
			</p>
			<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
		</div>
	</div>
	<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
</div>
