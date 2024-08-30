<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<div class="pt-text d-block d-lg-none"></div>
<p class=" uppercase bred-size"> <a class=" hover-bred uppercase"href="/"><?php _e('Home','woocommerce'); ?></a>  | <a class="hover-bred uppercase"href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>"><?php _e('Shop','attention-seekers'); ?></a>  | <span class="fwbold uppercase"><?php the_title(); ?><span></p>

<div class="pt-text d-block d-lg-none"></div>
<?php
the_title( '<h1 class="product_title entry-title">', '</h1>' );
?>