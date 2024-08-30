<?php 
/**
 * The single post template file
 * 
 * @package Day Six theme
 */



get_header(); ?>

<main id="content">
<div class="pt-half d-none d-lg-block"></div>
<section class="container grid grid-cols-1 lg:grid-cols-2 pb-full">
    <div class="aspect-[12/16] w-full lg:max-w-[565px] bg-black overflow-hidden">
        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="h-full min-h-full min-w-full object-cover object-center">
    </div>
    <div class="lg:pl-[90px] xl:pl-[100px] mt-[30px] lg:mt-[unset]">
        <p class="uppercase bred-size"> <a class=" hover-bred uppercase" href="/">Home</a>  | <span>Shop the look</span>  | <span class="fwbold uppercase"><?php the_title();?></span></p>
        <div class="pt-text d-block d-lg-none"></div>
        <h1 class="product_title entry-title"><?php the_title();?></h1>
        <div class="grid grid-cols-2 gap-[10px] mt-[30px]">
            <?php
                if (have_rows('producten')) :
                    while (have_rows('producten')) : the_row();
                        // Specifieke product ID ophalen
                        $product_id = get_sub_field('product');
                        
                        // Controleer of het een geldig product ID is
                        if ($product_id) {
                            // Maak een nieuwe WP_Query aan voor dit specifieke product
                            $args = array(
                                'post_type' => 'product',
                                'post__in' => array($product_id),  // Zet het ID in een array
                                'posts_per_page' => 1
                            );

                            $query = new WP_Query($args);

                            // Start de loop
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();

                                    // Hier kun je de informatie van elk product tonen
                                    $product = wc_get_product(get_the_ID()); ?>
                                    
                                        <!-- Start of product -->
                                        <div class="pb-[10px]">
                                            <div class="relative hhover">
                                                <a class="flipsection" href="<?php the_permalink(); ?>">
                                                    <div class="kader-product-img">
                                                        <?php
                                                        if( $gallery_image_ids = get_post_meta( $query->post->ID, '_product_image_gallery', true ) ) :
                                                            $gallery_image_ids = explode(',', $gallery_image_ids);
                                                        ?>
                                                        <img src="<?php echo get_the_post_thumbnail_url($query->post->ID); ?>" class="product-img" data-id="<?php echo $query->post->ID; ?>">
                                                        <div class="overlay">
                                                            <?php if( isset( $gallery_image_ids[1] ) ) : ?>
                                                            <img src="<?php echo wp_get_attachment_image_url( $gallery_image_ids[1], 'single-post-thumbnail'); ?>" class="product-img" data-id="<?php echo $query->post->ID; ?>">
                                                            <?php endif; ?>
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="pt-prod"></div>
                                                    <p class="fcc italic catt">
                                                        <?php echo wc_get_product_category_list( $product->get_id(), ', ','<span>','</span>' ); ?>
                                                    </p>
                                                    <h5 class="fwbold fca uppercase">
                                                        <?php echo $query->post->post_title; ?>
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

                                    <?php
                                }
                            } else {
                                echo '<p>Geen producten gevonden.</p>';
                            }

                            // Reset post data
                            wp_reset_postdata();
                        } else {
                            echo '<p>Ongeldig product ID.</p>';
                        }
                    endwhile;
                else :
                    echo '<p>Geen producten beschikbaar.</p>';
                endif;
                ?>

        </div>
    </div>
</section>
<section>
    <div class="container">
        <hr>
    </div>
</section>
<!-- SHOP THE LOOK -->
<section>
    <div class="container">
        <div class="row pb-full pt-full">
            <div class="col-12 col-md-4 col-lg-3 pb-quarter">
                <h3>Shop<br> other looks</h3>
            </div>
            <div class="col-12 col-md-8 col-lg-9">
                <div class="w-full">
                    <div class="swiper mySwiper-look">
                        <div class="swiper-wrapper">
                            <?php
                            $current_post_id = get_the_ID();  // Haal het ID van de huidige post op

                            $loop = new WP_Query( array(
                                'post_type' => 'look',
                                'posts_per_page' => -1,
                                'orderby' => 'rand',
                                'post__not_in' => array($current_post_id),  // Sluit de huidige post uit
                            ));
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
<!-- SHOP THE LOOK -->
</main>
<?php get_footer(); ?>