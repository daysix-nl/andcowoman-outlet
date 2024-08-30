<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;


?> 

	<div class="col-12 col-lg-6">
		<div class="row">
			<div class="col-12">
				<div class="arrowrl relative">	
					<div class="slider-for">
						<?php if(get_the_post_thumbnail_url(get_the_ID())) { ?>
							<img id="myimage" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"  data-id="<?php echo get_the_ID(); ?>">
						<?php } ?>
						<?php
						$attachment_ids = $product->get_gallery_image_ids();
						if (is_array($attachment_ids)) {
							foreach ($attachment_ids as $attachment_id) { ?>
							<img id="myimage next-slide" class="" src="<?php echo wp_get_attachment_url($attachment_id); ?>" alt="">
							<?php }
						}
						?>
					</div>
					<div class="next_arrow">
						<img class="arrowproduct" src="/wp-content/themes/andcowoman-outlet/img/icons/arrow-r.svg">
					</div>
					<div class="arrow_prev">
						<img class="arrowproduct" src="/wp-content/themes/andcowoman-outlet/img/icons/arrow-l.svg">
					</div>
				
				</div>
			</div>
			<div class="col-12 pt-half">
				<div class="slider-nav d-flex-c">
					 <img class="responsive-product" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"  data-id="<?php echo get_the_ID(); ?>">
					<?php $attachment_ids = $product->get_gallery_image_ids();
					if (is_array($attachment_ids)) {
						foreach( $attachment_ids as $attachment_id ) { ?>
							<img class="responsive-product" src="<?php echo $Original_image_url = wp_get_attachment_url( $attachment_id ); ?>" alt="">
						<?php } 
					}
					?>
				</div>
			</div>
		</div>
	</div>

