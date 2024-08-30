<?php
/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.4
 */

defined( 'ABSPATH' ) || exit;

if ( ! wc_coupons_enabled() ) { // @codingStandardsIgnoreLine.
	return;
}

?>
<div class="woocommerce-form-coupon-toggle">
	<?php wc_print_notice( apply_filters( 'woocommerce_checkout_coupon_message', esc_html__( 'Have a coupon?', 'woocommerce' ) . ' <a href="#" class="showcoupon">' . esc_html__( 'Click here to enter your code', 'woocommerce' ) . '</a>' ), 'notice' ); ?>
</div>

<form class="checkout_coupon woocommerce-form-coupon text-center" method="post" style="display:none">

<div class="row justify-content-center">
	<div class="col-12 text-center">
		<div class="coupon">
			<input type="text" name="coupon_code" class="input-text medium" id="coupon_code"  value="" placeholder="<?php if(ICL_LANGUAGE_CODE=='nl'): ?><?php echo (get_global_option('optie_couponcode_nl', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo (get_global_option('optie_couponcode_en', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='de'): ?><?php echo (get_global_option('optie_couponcode_de', 'option'));  ?><?php endif; ?>" /> <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><p class=""><?php if(ICL_LANGUAGE_CODE=='nl'): ?><?php echo (get_global_option('optie_toevoegen_nl', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo (get_global_option('optie_toevoegen_en', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='de'): ?><?php echo (get_global_option('optie_toevoegen_de', 'option'));  ?><?php endif; ?></p></button><?php do_action( 'woocommerce_cart_coupon' ); ?>
		</div>
	</div>
</div>
		
</form>
