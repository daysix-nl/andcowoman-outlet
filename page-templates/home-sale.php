<?php
/**
 * Template name: Home Sale
 */
 get_header(); ?>
   <style>
/*  */
.background-img-locatie-co h2 {
    text-shadow: #000 0.1em 0.1em 0.2em !important;
}
</style>
<main id="content">
   <section>
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <div class="background-img-locatie-co ">
                        <div class="row p-left-right">
                            <div class="col-12 center-h2-about">
                                <h2 class="ml-[20px]">Outlet Store</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--  COLLECTIE BLOUSE -->
<section class="pt-full">
    <div class="container overflow-hidden">
       <div class="flex justify-between mb-[50px]">
            <h4 class="text-30 lg:text-40 xl:text-48 leading-35 lg:leading-40 xl:leading-50 font-bold">
                <?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                    Blouses
                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                    Blouses
                <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                    Bluses
                <?php endif; ?>
            </h4>
            <a class="uppercase h-4 px-[30px] flex justify-center items-center text-white bg-[#000000] w-fit hover:opacity-80 hover:bg-[#000000] text-14 font-bold" href="/product-category/blouse/">
                <?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                    BEKIJK MEER
                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                    VIEW MORE
                <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                    MEHR SEHEN
                <?php endif; ?>
            </a>
        </div> 
        <div class="w-full">
            <div class="swiper mySwiper-nieuwe-collectie">
                <div class="swiper-wrapper">
                    <?php
                        $loop = new WP_Query( array(
                            'post_type' => 'product',
                            'posts_per_page' => 8,
                            'orderby' => 'rand',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_cat', // Dit specificeert dat je een productcategorie filter wilt toepassen
                                    'field' => 'slug', // Dit bepaalt hoe je de categorie identificeert (slug of ID)
                                    'terms' => 'blouse', // Vervang 'jouw-categorie-slug' door de slug van de categorie die je wilt tonen
                                ),
                            ),
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

<div class="container pt-[60px] pb-[0px]">
    <hr>
</div>

<!--  COLLECTIE TOP -->
<section class="pt-full">
    <div class="container overflow-hidden">
       <div class="flex justify-between mb-[50px]">
            <h4 class="text-30 lg:text-40 xl:text-48 leading-35 lg:leading-40 xl:leading-50 font-bold">
                <?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                    Tops
                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                    Tops
                <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                    Tops
                <?php endif; ?>
            </h4>
            <a class="uppercase h-4 px-[30px] flex justify-center items-center text-white bg-[#000000] w-fit hover:opacity-80 hover:bg-[#000000] text-14 font-bold" href="/product-category/top/">
                <?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                    BEKIJK MEER
                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                    VIEW MORE
                <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                    MEHR SEHEN
                <?php endif; ?>
            </a>
        </div> 
        <div class="w-full">
            <div class="swiper mySwiper-nieuwe-collectie">
                <div class="swiper-wrapper">
                    <?php
                        $loop = new WP_Query( array(
                            'post_type' => 'product',
                            'posts_per_page' => 8,
                            'orderby' => 'rand',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_cat', // Dit specificeert dat je een productcategorie filter wilt toepassen
                                    'field' => 'slug',           // Dit bepaalt hoe je de categorie identificeert (slug of ID)
                                    'terms' => 'top', // Vervang 'jouw-categorie-slug' door de slug van de categorie die je wilt tonen
                                ),
                            ),
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

<div class="container pt-[60px] pb-[0px]">
    <hr>
</div>

<!--  COLLECTIE Blazer -->
<section class="pt-full">
    <div class="container overflow-hidden">
       <div class="flex justify-between mb-[50px]">
            <h4 class="text-30 lg:text-40 xl:text-48 leading-35 lg:leading-40 xl:leading-50 font-bold">
                <?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                    Blazers
                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                    Blazers
                <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                    Blazers
                <?php endif; ?>
            </h4>
            <a class="uppercase h-4 px-[30px] flex justify-center items-center text-white bg-[#000000] w-fit hover:opacity-80 hover:bg-[#000000] text-14 font-bold" href="/product-category/blazer/">
                <?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                    BEKIJK MEER
                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                    VIEW MORE
                <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                    MEHR SEHEN
                <?php endif; ?>
            </a>
        </div> 
        <div class="w-full">
            <div class="swiper mySwiper-nieuwe-collectie">
                <div class="swiper-wrapper">
                    <?php
                        $loop = new WP_Query( array(
                            'post_type' => 'product',
                            'posts_per_page' => 8,
                            'orderby' => 'rand',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_cat', // Dit specificeert dat je een productcategorie filter wilt toepassen
                                    'field' => 'slug',           // Dit bepaalt hoe je de categorie identificeert (slug of ID)
                                    'terms' => 'blazer', // Vervang 'jouw-categorie-slug' door de slug van de categorie die je wilt tonen
                                ),
                            ),
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


<div class="container pt-[60px] pb-[0px]">
    <hr>
</div>

<!--  COLLECTIE JURK -->
<section class="pt-full">
    <div class="container overflow-hidden">
       <div class="flex justify-between mb-[50px]">
            <h4 class="text-30 lg:text-40 xl:text-48 leading-35 lg:leading-40 xl:leading-50 font-bold">
                <?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                    Jurken
                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                    Dresses
                <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                    Kleids
                <?php endif; ?>
            </h4>
            <a class="uppercase h-4 px-[30px] flex justify-center items-center text-white bg-[#000000] w-fit hover:opacity-80 hover:bg-[#000000] text-14 font-bold" href="/product-category/jurk/">
                <?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                    BEKIJK MEER
                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                    VIEW MORE
                <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                    MEHR SEHEN
                <?php endif; ?>
            </a>
        </div> 
        <div class="w-full">
            <div class="swiper mySwiper-nieuwe-collectie">
                <div class="swiper-wrapper">
                    <?php
                        $loop = new WP_Query( array(
                            'post_type' => 'product',
                            'posts_per_page' => 8,
                            'orderby' => 'rand',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_cat', // Dit specificeert dat je een productcategorie filter wilt toepassen
                                    'field' => 'slug',           // Dit bepaalt hoe je de categorie identificeert (slug of ID)
                                    'terms' => 'jurk', // Vervang 'jouw-categorie-slug' door de slug van de categorie die je wilt tonen
                                ),
                            ),
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

<div class="container pt-[60px] pb-[0px]">
    <hr>
</div>

<!--  COLLECTIE BROEK -->
<section class="pt-full pb-full">
    <div class="container overflow-hidden">
       <div class="flex justify-between items-start mb-[50px]">
            <h4 class="text-30 lg:text-40 xl:text-48 leading-35 lg:leading-40 xl:leading-50 font-bold">
                <?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                    Broeken
                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                    Trousers
                <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                    Hose
                <?php endif; ?>
            </h4>
            <a class="uppercase h-4 px-[30px] flex justify-center items-center text-white bg-[#000000] w-fit hover:opacity-80 hover:bg-[#000000] text-14 font-bold" href="/product-category/broek/">
                <?php if(ICL_LANGUAGE_CODE=='nl'): ?>
                    BEKIJK MEER
                <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
                    VIEW MORE
                <?php elseif(ICL_LANGUAGE_CODE=='de'): ?>
                    MEHR SEHEN
                <?php endif; ?>
            </a>
        </div> 
        <div class="w-full">
            <div class="swiper mySwiper-nieuwe-collectie">
                <div class="swiper-wrapper">
                    <?php
                        $loop = new WP_Query( array(
                            'post_type' => 'product',
                            'posts_per_page' => 8,
                            'orderby' => 'rand',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_cat', // Dit specificeert dat je een productcategorie filter wilt toepassen
                                    'field' => 'slug',           // Dit bepaalt hoe je de categorie identificeert (slug of ID)
                                    'terms' => 'broek', // Vervang 'jouw-categorie-slug' door de slug van de categorie die je wilt tonen
                                ),
                            ),
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
</main>
<?php get_footer(); ?>

