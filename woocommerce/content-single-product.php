<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */
defined( 'ABSPATH' ) || exit;
global $product;
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );
if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<style>
.variations tr {
    display: flex;
    flex-direction: column;
    padding-bottom: 0px;
}
.variations label {
    display: none !important;
}
</style>
<div class="pt-half d-none d-lg-block"></div>
<div class="container">
    <div class="row pb-full">
        <?php
				/**
				 * Hook: woocommerce_before_single_product_summary.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				do_action( 'woocommerce_before_single_product_summary' );
				?>
        <div class="col-12 col-lg-6 productbody overflow p-left">
            <div class="pt-half d-lg-none d-block"></div>
            <?php
					/**
					 * Hook: woocommerce_single_product_summary.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 * @hooked WC_Structured_Data::generate_product_data() - 60
					 */
					do_action( 'woocommerce_single_product_summary' );
					?>
            <?php $short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?>
            <div class="row pt-blocks">
                <?php   global $post;
						$product_id = get_post_meta( $post->ID, 'productid', true ); //its perfect itemId
						$color_id = get_post_meta( $post->ID, 'colorid', true );  
						$related_products = new WP_Query(array(
						 'numberposts'	=> -1,
						 'post_type'		=> 'product',
						 'post_status' => 'publish',
						 'meta_query'	=> array(
							 'relation'		=> 'AND',
							 array(
								 'key'	 	=> 'colorid',
								 'value'	  	=> $color_id ,
								 'compare' 	=> 'NOT IN',
							 ),
							 array(
								 'key'	  	=> 'productid',
								 'value'	  	=> $product_id,
								 'compare' 	=> '=',
							 ),
							 'meta_query' => array(
                                array(
                                    'key' => '_stock_status',
                                    'value' => 'instock',
                                    'compare' => '=',
                                )
                                ),    
						 ),
					 	));
						?>
                <!-- <p class="pt-half pb-blocks"><?php if(ICL_LANGUAGE_CODE=='nl'): ?>Ook verkrijgbaar in de kleuren:<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>Also available in the colours:<?php elseif(ICL_LANGUAGE_CODE=='de'): ?>Auch erhältlich in den Farben:<?php endif; ?></p> -->
                <?php while ( $related_products->have_posts() ) : $related_products->the_post(); ?>
                <!-- Hier kan je HTML plaatsen -->
                <div class="col-3 col-md-3 pt-half">
                    <div class="img-relative">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                                        // Get gallery images IDs
                                        if( $gallery_image_ids = get_post_meta( $related_products->post->ID, '_product_image_gallery', true ) ) :
                                            // Convert a coma separated string of Ids to an array of Ids
                                            $gallery_image_ids = explode(',', $gallery_image_ids);
                                            // Display the first image (optional)
                                            ?><img
                                src="<?php echo get_the_post_thumbnail_url($related_products->post->ID); ?>"
                                class="responsive img-hover" data-id="<?php echo $related_products->post->ID; ?>">
                            <?php endif; ?>
                            <div class="overlay-img">
                            </div>
                        </a>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
            <div class="accordion accordion-flush pt-half" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <p><?php if(ICL_LANGUAGE_CODE=='nl'): ?><?php echo (get_global_option('optie_informatie_nl', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo (get_global_option('optie_informatie_en', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='de'): ?><?php echo (get_global_option('optie_informatie_de', 'option'));  ?><?php endif; ?>
                            </p>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body discription"><?php echo $short_description; // WPCS: XSS ok. ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <p><?php if(ICL_LANGUAGE_CODE=='nl'): ?><?php echo (get_global_option('optie_maattabel_nl', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo (get_global_option('optie_maattabel_en', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='de'): ?><?php echo (get_global_option('optie_maattabel_de', 'option'));  ?><?php endif; ?>
                            </p>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <p class="text-center">
                                                <?php if(ICL_LANGUAGE_CODE=='nl'): ?><?php echo (get_global_option('optie_maat_nl', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo (get_global_option('optie_maat_en', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='de'): ?><?php echo (get_global_option('optie_maat_de', 'option'));  ?><?php endif; ?>
                                            </p>
                                        </th>
                                        <th scope="col">
                                            <p class="text-center">
                                                <?php if(ICL_LANGUAGE_CODE=='nl'): ?><?php echo (get_global_option('optie_borst_nl', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo (get_global_option('optie_borst_en', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='de'): ?><?php echo (get_global_option('optie_borst_de', 'option'));  ?><?php endif; ?>
                                            </p>
                                        </th>
                                        <th scope="col">
                                            <p class="text-center">
                                                <?php if(ICL_LANGUAGE_CODE=='nl'): ?><?php echo (get_global_option('optie_taille_nl', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo (get_global_option('optie_taille_en', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='de'): ?><?php echo (get_global_option('optie_taille_de', 'option'));  ?><?php endif; ?>
                                            </p>
                                        </th>
                                        <th scope="col">
                                            <p class="text-center">
                                                <?php if(ICL_LANGUAGE_CODE=='nl'): ?><?php echo (get_global_option('optie_heup_nl', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo (get_global_option('optie_heup_en', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='de'): ?><?php echo (get_global_option('optie_heup_de', 'option'));  ?><?php endif; ?>
                                            </p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <p class="uppercase text-center">xs</p>
                                        </th>
                                        <td>
                                            <p class="text-center">80 – 82</p>
                                        </td>
                                        <td>
                                            <p class="text-center">64 – 66</p>
                                        </td>
                                        <td>
                                            <p class="text-center">92 – 94</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <p class="uppercase text-center">s</p>
                                        </th>
                                        <td>
                                            <p class="text-center">84 – 86</p>
                                        </td>
                                        <td>
                                            <p class="text-center">68 – 70</p>
                                        </td>
                                        <td>
                                            <p class="text-center">96 – 98</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <p class="uppercase text-center">m</p>
                                        </th>
                                        <td>
                                            <p class="text-center">88 – 90</p>
                                        </td>
                                        <td>
                                            <p class="text-center">72 – 74</p>
                                        </td>
                                        <td>
                                            <p class="text-center">100 – 102</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <p class="uppercase text-center">l</p>
                                        </th>
                                        <td>
                                            <p class="text-center">92 – 94</p>
                                        </td>
                                        <td>
                                            <p class="text-center">76 – 78</p>
                                        </td>
                                        <td>
                                            <p class="text-center">104 – 106</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <p class="uppercase text-center">xl</p>
                                        </th>
                                        <td>
                                            <p class="text-center">96 – 98</p>
                                        </td>
                                        <td>
                                            <p class="text-center">80 – 82</p>
                                        </td>
                                        <td>
                                            <p class="text-center">108 – 110</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <p class="uppercase text-center">xxl</p>
                                        </th>
                                        <td>
                                            <p class="text-center">100 – 102</p>
                                        </td>
                                        <td>
                                            <p class="text-center">84 – 86</p>
                                        </td>
                                        <td>
                                            <p class="text-center">112 – 114</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <p class="uppercase text-center">3xl</p>
                                        </th>
                                        <td>
                                            <p class="text-center">104 – 106</p>
                                        </td>
                                        <td>
                                            <p class="text-center">88 – 90</p>
                                        </td>
                                        <td>
                                            <p class="text-center">116 – 118</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="img-accordion pt-quarter pb-quarter">
                                <img class="responsive" src="/wp-content/themes/andcowoman-outlet/img/maattabel.png">
                            </div>
                            <div class="p-maat-accordion">
                                <ol class="margin-left-ol">
                                    <li>
                                        <p><?php if(ICL_LANGUAGE_CODE=='nl'): ?><?php echo (get_global_option('optie_borstomvang_nl', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo (get_global_option('optie_borstomvang_en', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='de'): ?><?php echo (get_global_option('optie_borstomvang_de', 'option'));  ?><?php endif; ?>
                                        </p>
                                    </li>
                                    <li>
                                        <p><?php if(ICL_LANGUAGE_CODE=='nl'): ?><?php echo (get_global_option('optie_tailleomvang_nl', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo (get_global_option('optie_tailleomvang_en', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='de'): ?><?php echo (get_global_option('optie_tailleomvang_de', 'option'));  ?><?php endif; ?>
                                        </p>
                                    </li>
                                    <li>
                                        <p><?php if(ICL_LANGUAGE_CODE=='nl'): ?><?php echo (get_global_option('optie_heupmaat_nl', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo (get_global_option('optie_heupmaat_en', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='de'): ?><?php echo (get_global_option('optie_heupmaat_de', 'option'));  ?><?php endif; ?>
                                        </p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            <p><?php if(ICL_LANGUAGE_CODE=='nl'): ?><?php echo (get_global_option('optie_verzending_nl', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo (get_global_option('optie_verzending_en', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='de'): ?><?php echo (get_global_option('optie_verzending_de', 'option'));  ?><?php endif; ?>
                            </p>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body discription">
                            <p><?php if(ICL_LANGUAGE_CODE=='nl'): ?><?php echo (get_global_option('optie_verzending_text_nl', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo (get_global_option('optie_verzending_text_en', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='de'): ?><?php echo (get_global_option('optie_verzending_text_de', 'option'));  ?><?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="bc-wrap pb-half">
            <a href="javascript:history.go(-1)">
                <svg xmlns="http://www.w3.org/2000/svg" width="13.481" height="7.65" viewBox="0 0 13.481 7.65">
                    <g id="Group_11" data-name="Group 11" transform="translate(3.781 0.53) rotate(90)">
                        <path id="Path_25" data-name="Path 25" d="M-923.381-351.164l-3.295,3.295-3.295-3.295"
                            transform="translate(929.971 350.59)" fill="none" stroke="#000" stroke-miterlimit="10"
                            stroke-width="1.5"></path>
                        <line id="Line_4" data-name="Line 4" y1="12.42" transform="translate(3.295 -9.7)" fill="none"
                            stroke="#000" stroke-miterlimit="10" stroke-width="1.5"></line>
                    </g>
                </svg>
                <p><?php if(ICL_LANGUAGE_CODE=='nl'): ?><?php echo (get_global_option('optie_terug_nl', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo (get_global_option('optie_terug_en', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='de'): ?><?php echo (get_global_option('optie_terug_de', 'option'));  ?><?php endif; ?>
                </p>
            </a>
        </div>
    </div>
</div>
</div>
<section>
    <div class="container">
        <hr>
    </div>
</section>
<!-- section same item other color -->
<!-- <section>
    <div class="container">
        <div class="row pb-full pt-full">
            <div class="col-12 col-md-4 col-lg-3 pb-quarter">
				<h3>Same item other color</h3>
            </div>
            <div class="col-12 col-md-8 col-lg-9">
            </div>
        </div>
    </div>
</section> -->
<!-- SHOP THE LOOK -->
<section>
    <div class="container">
        <div class="row pb-full pt-full">
            <div class="col-12 col-md-4 col-lg-3 pb-quarter">
                <h3>Shop<br> the look</h3>
            </div>
            <div class="col-12 col-md-8 col-lg-9">
                <div class="w-full">
                    <div class="swiper mySwiper-look">
                        <div class="swiper-wrapper">
                            <?php
                                $loop = new WP_Query( array(
                                    'post_type' => 'look',
                                    'posts_per_page' => -1,
                                    'orderby' => 'rand',
                                    ),
                                );
                            ?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
                            <!-- Hier kan je HTML plaatsen -->
                            <div class="swiper-slide">
                                <a href="<?php the_permalink();?>">
                                    <div class="aspect-[12/16] w-full overflow-hidden mb-[8px]">
                                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="h-full min-h-full min-w-full object-cover object-center">
                                    </div>
                                    <p class="fwbold fca uppercase"><?php the_title();?></p>
                                </a>
                            </div>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SHOP THE LOOK END -->
 <section>
    <div class="container">
        <hr>
    </div>
</section>
<section>
    <div class="container">
        <div class="row pb-full pt-full">
            <div class="col-12 col-md-4 col-lg-3 pb-quarter">
                <h3><?php if(ICL_LANGUAGE_CODE=='nl'): ?><?php echo (get_global_option('optie_gerelateerdeproducten_nl', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='en'): ?><?php echo (get_global_option('optie_gerelateerdeproducten_en', 'option'));  ?><?php elseif(ICL_LANGUAGE_CODE=='de'): ?><?php echo (get_global_option('optie_gerelateerdeproducten_de', 'option'));  ?><?php endif; ?>
                </h3>
            </div>
            <div class="col-12 col-md-8 col-lg-9">
                <div class="row">
                    <?php   global $post;
						$terms = get_the_terms( $post->ID, 'product_cat' );
						$nterms = get_the_terms( $post->ID, 'product_tag'  );
						foreach ($terms  as $term  ) {
							$product_cat_id = $term->term_id;
							$product_cat_name = $term->name;
							break;
						}
				?>
                    <?php                     
                        $loop = new WP_Query( array(
                            'post_type' => 'product',
                            'posts_per_page' => 6,
                            'orderby' => 'RAND',
							'product_cat' => $product_cat_name,
							'meta_query' => array(
                                array(
                                    'key' => '_stock_status',
                                    'value' => 'instock',
                                    'compare' => '=',
                                )
                                ),    
                        ));
                        ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                     
                        <!-- Start of product -->
                        <div class="col-6 col-md-4 pb-blocks">
                            <div class="relative hhover">
                                <a class="flipsection" href="<?php the_permalink(); ?>">
                                    <div class="kader-product-img">
                                        <?php
                                        if( $gallery_image_ids = get_post_meta( $loop->post->ID, '_product_image_gallery', true ) ) :
                                            $gallery_image_ids = explode(',', $gallery_image_ids);
                                        ?>
                                        <img src="<?php echo get_the_post_thumbnail_url($loop->post->ID); ?>" class="product-img" data-id="<?php echo $loop->post->ID; ?>">
                                        <div class="overlay">
                                            <?php if( isset( $gallery_image_ids[1] ) ) : ?>
                                            <img src="<?php echo wp_get_attachment_image_url( $gallery_image_ids[1], 'single-post-thumbnail'); ?>" class="product-img" data-id="<?php echo $loop->post->ID; ?>">
                                            <?php endif; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="pt-prod"></div>
                                    <p class="fcc italic catt">
                                        <?php echo wc_get_product_category_list( $product->get_id(), ', ','<span>','</span>' ); ?>
                                    </p>
                                    <h5 class="fwbold fca uppercase">
                                        <?php echo $loop->post->post_title; ?>
                                    </h5>
                                    <div class="btn-flip">
                                        <div class="message2"> 
                                            <?php if ( $price_html = $product->get_price_html() ) : ?>
                                            <span class="price">
                                                <p class="fbody large regular fca"><?php echo $price_html; ?></p>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </a> <!-- This closes the flipsection link -->
                            </div> <!-- This closes the relative hhover div -->
                        </div> <!-- This closes the column div -->
                        <!-- End of product -->
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- <?php
			/**
			 * Hook: woocommerce_after_single_product_summary.
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_upsell_display - 15
			 * @hooked woocommerce_output_related_products - 20
			 */
			do_action( 'woocommerce_after_single_product_summary' );
			?> -->
        </div>
    </div>
</div>
<?php do_action( 'woocommerce_after_single_product' ); ?>
<script>
$("ul.menu li:nth-child(5) a").addClass('active-border');
</script>