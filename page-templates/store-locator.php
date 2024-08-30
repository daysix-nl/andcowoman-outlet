<?php
/**
 * Template name: Store Locator
 */
 get_header(); ?>
<style>
.background-img-locatie-co {
    background-image: url(<?php the_field('locator_section_1_afbeelding');
    ?>);
}
.background-img-locatie-co h2 {
    text-shadow: #000 0.1em 0.1em 0.2em !important;
}
</style>
<main id="content">
    <section>
        <div class="container pb-full">
            <div class="row">
                <div class="col-12 ">
                    <div class="background-img-locatie-co ">
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
        <div class="container pb-full">
            <div class="row">
                <div class="col-12">
                    <?php echo do_shortcode('[wpsl]');?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>