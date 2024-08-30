<?php
/**
 * Template name: Home
 */
 get_header(); ?>
    <style>
        .img-header {
                object-fit: cover;
		}
		.scale-shadow {
background: rgb(215,220,222);
background: -moz-linear-gradient(96deg, rgba(215,220,222,0) 0%, rgba(0,0,0,0.3155856092436975) 100%);
background: -webkit-linear-gradient(96deg, rgba(215,220,222,0) 0%, rgba(0,0,0,0.3155856092436975) 100%);
background: linear-gradient(96deg, rgba(215,220,222,0) 0%, rgba(0,0,0,0.3155856092436975) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#d7dcde",endColorstr="#000000",GradientType=1);
		}
		.carousel-caption {
			position: absolute;
    top: 1.25rem;
    left: unset;
    right: 5%;
    padding-top: 5%;
    padding-bottom: 1.25rem;
    text-align: unset;
    bottom: unset;
    color: #000;
			
			    display: grid;
    justify-items: end;
		}
		
		.carousel-caption h2, .carousel-caption h3 {
			text-align: right !important;
		}
	
   </style> 
<main id="content">
<!-- Section 1: Header -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 min-h-[400px] md:min-h-[560px]">
                <div id="carouselExampleCaptions" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active relative" data-bs-interval="5000">
                        <div style="background-image: url('<?php the_field('home_section_1_slide_1_afbeelding');?>');" class="d-block w-100 img-header"></div>
<!--                         <video autoplay="" loop="" muted="" playsinline="" class="d-block img-header min-h-[400px] md:min-h-[560px]">
                            <source src="https://andcowoman.com/wp-content/uploads/2024/03/springsummer2.mp4">
                        </video> -->
                        <div class="carousel-caption caption-delay z-[2]" >
                            <h2 class="pb-blocks <?php the_field('home_section_1_slide_1_kleur');?> text-38 leading-38 md:text-50 md:leading-50"><?php the_field('home_section_1_slide_1_titel');?></h2>
                            <h3 class="<?php the_field('home_section_1_slide_1_kleur');?> text-28 leading-28 md:text-30 md:leading-30"><?php the_field('home_section_1_slide_1_tekst');?></h3>
                            <a href="<?php the_field('home_section_1_slide_1_cta_link');?>"><button class="bg-white h-[40px] w-[120px] flex items-center justify-center mt-4 hover:opacity-80 duration-300"><span class="uppercase font-bold text-14"><?php the_field('home_section_1_slide_1_cta_tekst');?></span></button></a>
                        </div>
                        <div class="absolute w-[50%] h-full top-0 right-0 bottom-0 bg-gradient-to-r from-[transparent] to-[0001] z-[1] scale-shadow"></div>
                        <!-- </div>
                        <div class="carousel-item" data-bs-interval="5000">
                        <div style="background-image: url('<?php the_field('home_section_1_slide_2_afbeelding');?>');" class="d-block w-100 img-header"></div>
                        <div class="carousel-caption caption-delay" >
                            <h2 class="pb-blocks <?php the_field('home_section_1_slide_2_kleur');?>"><?php the_field('home_section_1_slide_2_titel');?></h2>
                            <h3 class="<?php the_field('home_section_1_slide_2_kleur');?>"><?php the_field('home_section_1_slide_2_tekst');?></h3>
                           
                        </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                        <div style="background-image: url('<?php the_field('home_section_1_slide_3_afbeelding');?>');" class="d-block w-100 img-header"></div>
                        <div class="carousel-caption caption-delay" >
                            <h2 class="pb-blocks <?php the_field('home_section_1_slide_3_kleur');?>"><?php the_field('home_section_1_slide_3_titel');?></h2>
                            <h3 class="<?php the_field('home_section_1_slide_3_kleur');?>"><?php the_field('home_section_1_slide_3_tekst');?></h3>
                          
                        </div> -->
                        </div>
                    </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button> -->
                    </div>
            </div>
        </div>
    </div>
</section>
<!--  Nieuwe collectie -->
<section class="pt-full">
    <div class="container grid grid-cols-4 gap-3 items-center overflow-hidden">
        <div class="col-span-4 md:col-span-1">
            <h4 class="text-30 lg:text-40 xl:text-48 leading-35 lg:leading-40 xl:leading-50 font-bold max-w-[300px]">
                <?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                    Onze </br> nieuwe </br> collectie
                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                    Our </br> new </br> collection
                <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                    Unsere </br> neue  </br> kollektion
                <?php endif; ?>
            </h4>
            <a class="uppercase h-4 px-[30px] flex justify-center items-center text-white bg-[#000000] w-fit hover:opacity-80 hover:bg-[#000000] mt-3 text-14 font-bold" href="/shop">
                <?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                    BEKIJK MEER
                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                    VIEW MORE
                <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                    MEHR SEHEN
                <?php endif; ?>
            </a>
        </div>
        <div class="col-span-4 md:col-span-3">
            <div class="swiper mySwiper-nieuwe-collectie">
                <div class="swiper-wrapper">
                    <?php
        
                        $loop = new WP_Query( array(
                            'post_type' => 'product',
                            'orderby' => 'menu_order',
                            'order' => 'DESC',
                            'meta_query' => array(
                                array(
                                    'key' => '_sku', // The meta key to query. In this case, it's '_sku' which is the SKU of the product.
                                    'value' => array('2799-272', '2777-266', '2782-269'), // An array of SKUs
                                    'compare' => 'IN', // Compares if the SKU is in the array
                                ),
                            )
                        ));
                    ?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <!-- Hier kan je HTML plaatsen -->
                    <div class="swiper-slide">
                        <div class="relative hhover">
                            <a class="flipsection" href="<?php the_permalink(); ?>">
                                <div class="kader-product-img">
                                    <?php
                                    // Get gallery images IDs
                                    if( $gallery_image_ids = get_post_meta( $loop->post->ID, '_product_image_gallery', true ) ) :
                                        // Convert a coma separated string of Ids to an array of Ids
                                        $gallery_image_ids = explode(',', $gallery_image_ids);
                                        // Display the first image (optional)
                                        ?><img src="<?php echo get_the_post_thumbnail_url($loop->post->ID); ?>" class="product-img"
                                        data-id="<?php echo $loop->post->ID; ?>">
                                    <div class="overlay">
                                        <?php
                                        // Display the 2nd image (if it exists)
                                        if( isset( $gallery_image_ids[1] ) ) :
                                            ?><img src="<?php echo wp_get_attachment_image_url( $gallery_image_ids[1], 'single-post-thumbnail'); ?>"
                                            class="product-img" data-id="<?php echo $loop->post->ID; ?>">
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="pt-prod"></div>
                                <!-- Gerelateerde kleuren -->
                                
                                <!-- Einde gerelateerde kleuren                    -->
                        </div>
                        <p class="fcc italic catt">
                            <?php echo wc_get_product_category_list( $product->get_id(), ', ','<span>','</span>' ); ?>
                        </p>
                        <h5 class="fwbold fca uppercase">
                            
                            <?php   
                            /*
                                <? echo $loop->post->post_title; ?>
                                RJ 08-09-2022, bovenstaande is niet goed en heb ik aangepast. <?= zou kunnen maar dat is shortcode voor <?php echo. Beter gewoon <?php gebruiken. 
                                Ik heb dit aangepast omdat ik wilde controleren of alles goed ging en zag dat bij de shop archive de titels op 'POST->POST->TITLE?>' stonden
                            */
                            ?>
                                <?php echo $loop->post->post_title; ?>
                        </h5>
                        <div class="btn-flip">
                            <div class="message2"> <?php if ( $price_html = $product->get_price_html() ) : ?>
                                <span class="price">
                                    <p class="fbody large regular fca"><?php echo $price_html; ?></p>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section 2: Uitgelichte blokken -->
<section>
    <div class="container pt-full pb-full p-con">
        <div class="row">
        <div class="col-12 col-md-4">
        <div class="pt-full d-none d-md-block"></div>
                <div>
                    <img class="responsive" src="<?php the_field('home_section_2_blok_1_afbeelding');?>" alt="">
                    <div class="p-right">
                        <div class="pt-blocks"></div>
                        <h3><?php the_field('home_section_2_blok_1_titel');?></h3>
                        <div class="pt-text"></div>
                        <p><?php the_field('home_section_2_blok_1_tekst');?></p>
                        <div class="pt-blocks"></div>
                        <a href="<?php the_field('home_section_2_blok_1_cta_link');?>"><button class="button-shop_now"><?php the_field('home_section_2_blok_1_cta_tekst');?><div class="button-shop_now-bot"></div></button></a>
                    </div>
                </div>            
            </div>
            <div class="pt-full d-block d-md-none"></div>
            <div class="col-12 col-md-4">
                <div>
                    <img class="responsive" src="<?php the_field('home_section_2_blok_2_afbeelding');?>" alt="">
                    <div class="p-right">
                        <div class="pt-blocks"></div>
                        <h3><?php the_field('home_section_2_blok_2_titel');?></h3>
                        <div class="pt-text"></div>
                        <p><?php the_field('home_section_2_blok_2_tekst');?></p>
                        <div class="pt-blocks"></div>
                        <a href="<?php the_field('home_section_2_blok_2_cta_link');?>"><button class="button-shop_now"><?php the_field('home_section_2_blok_2_cta_tekst');?><div class="button-shop_now-bot"></div></button></a>
                    </div>
                </div>   
            </div>
            <div class="col-12 col-md-4 pt-full">
                <div>
                    <img class="responsive" src="<?php the_field('home_section_2_blok_3_afbeelding');?>" alt="">
                    <div class="p-right">
                        <div class="pt-blocks"></div>
                        <h3><?php the_field('home_section_2_blok_3_titel');?></h3>
                        <div class="pt-text"></div>
                        <p><?php the_field('home_section_2_blok_3_tekst');?></p>
                        <div class="pt-blocks"></div>
                        <a href="<?php the_field('home_section_2_blok_3_cta_link');?>"><button class="button-shop_now"><?php the_field('home_section_2_blok_3_cta_tekst');?><div class="button-shop_now-bot"></div></button></a>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>
<!-- Section 3: Tekst -->
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 p-right">
                <img class="responsive" src="<?php the_field('home_section_3_afbeelding');?>" alt="">
            </div>
            <div class="col-12 col-md-6 p-left p-right">
                <div class="p-right">
                    <div class="pt-blocks"></div>
                    <h3><?php the_field('home_section_3_titel');?></h3>
                    <div class="pt-text"></div>
                    <p><?php the_field('home_section_3_tekst');?></p>
                    <div class="pt-blocks"></div>
                    <a href="<?php the_field('home_section_3_cta-link');?>"><button class="button-shop_now"><?php the_field('home_section_3_cta_tekst');?><div class="button-shop_now-bot"></div></button></a> 
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 5: Nieuwsbrief -->
<section class="pt-full pb-full">
    <div class="container bgd pt-half pb-half ">
        <div class="row bgd  p-item-small align-items-center">
            <div class="col-12 col-lg-6 p-right">
                    <h2 class="fca"><?php the_field('home_section_5_titel');?></h2>
            </div>
            <div class="pt-half d-block d-lg-none"></div>
            <div class="col-12 col-lg-6">
                    <div class="row">
                            <div class="col-12 text-right pb-blocks ">
                                <!-- <h3 class="fca">De laatste nieuwtjes in je inbox</h3> -->
                            </div>
                            <div class="col-12 scroll-margin-form">
                                <?php echo do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>
                            </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- Section 6: Uitgelichte blokken -->
<section>
    <div class="container pb-full p-con">
        <div class="row">
        <div class="col-12 col-md-4">
        <div class="pt-full d-none d-md-block"></div>
            <div>
                    <img class="responsive" src="<?php the_field('home_section_6_blok_1_afbeelding');?>" alt="">
                    <div class="p-right">
                        <div class="pt-blocks"></div>
                        <h3><?php the_field('home_section_6_blok_1_titel');?></h3>
                        <div class="pt-text"></div>
                        <p><?php the_field('home_section_6_blok_1_tekst');?></p>
                        <div class="pt-blocks"></div>
                        <a href="<?php the_field('home_section_6_blok_1_cta_link');?>"><button class="button-shop_now"><?php the_field('home_section_6_blok_1_cta_tekst');?><div class="button-shop_now-bot"></div></button></a>
                    </div>
                </div>            
            </div>
            <div class="pt-full d-block d-md-none"></div>
            <div class="col-12 col-md-4">
                <div>
                    <img class="responsive" src="<?php the_field('home_section_6_blok_2_afbeelding');?>" alt="">
                    <div class="p-right">
                        <div class="pt-blocks"></div>
                        <h3><?php the_field('home_section_6_blok_2_titel');?></h3>
                        <div class="pt-text"></div>
                        <p><?php the_field('home_section_6_blok_2_tekst');?></p>
                        <div class="pt-blocks"></div>
                        <a href="<?php the_field('home_section_6_blok_2_cta_link');?>"><button class="button-shop_now"><?php the_field('home_section_6_blok_2_cta_tekst');?><div class="button-shop_now-bot"></div></button></a>
                    </div>
                </div>   
            </div>
            <div class="col-12 col-md-4 pt-full">
                <div>
                    <img class="responsive" src="<?php the_field('home_section_6_blok_3_afbeelding');?>" alt="">
                    <div class="p-right">
                        <div class="pt-blocks"></div>
                        <h3><?php the_field('home_section_6_blok_3_titel');?></h3>
                        <div class="pt-text"></div>
                        <p><?php the_field('home_section_6_blok_3_tekst');?></p>
                        <div class="pt-blocks"></div>
                        <a href="<?php the_field('home_section_6_blok_3_cta_link');?>"><button class="button-shop_now"><?php the_field('home_section_6_blok_3_cta_tekst');?><div class="button-shop_now-bot"></div></button></a>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>
</main>

<?php get_footer(); ?>

