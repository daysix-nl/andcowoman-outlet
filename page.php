<?php 
/**
 * The page template file
 * 
 * @package Day Six theme
 */


get_header(); ?>

<style>
    .background-img-contact-co {
    background-image: url(<?php the_field('page_section_1_afbeelding');?>);
}
.background-img-contact-co h2 {
    color: #fff !important;
    text-shadow: #000 0.1em 0.1em 0.2em !important;
}
</style>

<main id="content">

<section>
    <div class="container pb-full">
        <div class="row ">
            <div class="col-12 ">
                <div class="background-img-contact-co ">
                        <div class="row p-left-right">
                            <div class="col-12 center-h2-about">
                                <h2 class="d-none d-lg-block"><?php echo get_the_title(); ?></h2>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <?php

    // Check rows exists.
    if( have_rows('page_section_1_repeater') ):

        // Loop through rows.
        while( have_rows('page_section_1_repeater') ) : the_row(); ?>

        <div class="container pb-full">
            <div class="row p-left-right">
                <div class="col-12 col-lg-3 pb-quarter">
                    <h3 class="fwbold"><?php the_sub_field('page_section_1_repeater_titel');?></h3>
                </div>
                <div class="col-12 col-lg-9">
                    <p><?php the_sub_field('page_section_1_repeater_tekst');?></p>
                </div>
            </div>
        </div>
    <?php
        // End loop.
        endwhile;

    // No value.
    else :
        // Do something...
    endif; ?>
</section>





</main>
<?php get_footer(); ?>