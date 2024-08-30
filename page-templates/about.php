<?php
/**
 * Template name: About
 */
 get_header(); ?>
<style>
.background-img-company-co {
    background-image: url("<?php the_field('about_section_1_afbeelding');?>");
}
.background-img-planet-co {
    background-image: url("<?php the_field('about_section_2_afbeelding');?>");
}
.background-img-natural-co {
    background-image: url("<?php the_field('about_section_3_afbeelding');?>");
}
.background-img-about1-co {
    background-image: url("<?php the_field('about_section_4_afbeelding');?>");
}
.background-img-planet-co {
    color: #000 !important;
}
.background-img-natural-co {
    color: #000 !important;
}

</style>
<main id="content">
    <section>
        <div class="container pb-full">
            <div class="row">
                <div class="col-12 ">
                    <div class="background-img-company-co ">
                        <div class="row p-left-right">
                            <div class="col-12 center-h2-about">
                                <h2 class="d-none d-lg-block"><?php the_field('about_section_1_titel');?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row p-left-right">
                <div class="col-12 col-lg-3">
                    <h3 class="pb-quarter fwbold"><?php the_field('about_section_1_subtitel');?></h3>
                </div>
                <div class="col-12 col-lg-9">
                    <p><?php the_field('about_section_1_tekst');?></p>
                    <div class="pt-half"></div>
                    <h2><?php the_field('about_section_1_quote');?></h2>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container pb-full pt-full">
            <div class="row">
                <div class="col-12 ">
                    <div class="background-img-planet-co ">
                        <div class="row p-left-right">
                            <div class="col-12 center-h2-about">
                                <h2 class="d-none d-lg-block"><?php the_field('about_section_2_titel');?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row p-left-right">
                <div class="col-12 col-lg-3">
                    <div class="row d-flex align-items-center ">
                        <div class="col-6 col-lg-12">
                            <h3 class="fwbold"><?php the_field('about_section_2_subtitel');?></h3>
                        </div>
                        <div class="pb-quarter d-none d-lg-block"></div>
                        <!-- <div class="col-6 col-lg-12  d-flex justify-content-end  justify-content-lg-start">
                        <img class="img-icon-natural" src="/wp-content/themes/andcowoman-outlet/img/icons/and-co-woman-planet-and-co.svg">
                    </div> -->
                    </div>
                </div>
                <div class="pb-quarter d-block d-lg-none"></div>
                <div class="col-12 col-lg-9">
                    <p><?php the_field('about_section_2_tekst');?></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container pb-full pt-full">
            <div class="row">
                <div class="col-12 ">
                    <div class="background-img-natural-co ">
                        <div class="row p-left-right">
                            <div class="col-12 center-h2-about">
                                <h2 class="d-none d-lg-block"><?php the_field('about_section_3_titel');?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row p-left-right">
                <div class="col-12 col-lg-3">
                    <div class="row d-flex align-items-center ">
                        <div class="col-6 col-lg-12">
                            <h3 class="fwbold"><?php the_field('about_section_3_subtitel');?></h3>
                        </div>
                        <div class="pb-quarter d-none d-lg-block"></div>
                        <!-- <div class="col-6 col-lg-12 d-flex justify-content-end justify-content-lg-start">
                        <img class="img-icon-planet" src="/wp-content/themes/andcowoman-outlet/img/and-co-woman-pure-natural.svg">
                    </div> -->
                    </div>
                </div>
                <div class="pb-quarter d-block d-lg-none"></div>
                <div class="col-12 col-lg-9">
                    <p><?php the_field('about_section_3_tekst');?></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container pb-full pt-full">
            <div class="row">
                <div class="col-12 ">
                    <div class="background-img-about1-co ">
                        <div class="row p-left-right">
                            <div class="col-12 center-h2-about">
                                <h2 class="d-none d-lg-block"><?php the_field('about_section_4_titel');?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-full">
            <div class="row p-left-right">
                <div class="col-12 col-lg-3">
                    <div class="row d-flex align-items-center ">
                        <div class="col-6 col-lg-12">
                            <h3 class="fwbold"><?php the_field('about_section_4_subtitel');?></h3>
                        </div>
                        <div class="pb-quarter d-none d-lg-block"></div>
                        <!-- <div class="col-6 col-lg-12 d-flex justify-content-end justify-content-lg-start">
                        <img class="img-icon-planet" src="/wp-content/themes/andcowoman-outlet/img/and-co-woman-trvl.svg">    
                    </div> -->
                    </div>
                </div>
                <div class="pb-quarter d-block d-lg-none"></div>
                <div class="col-12 col-lg-9">
                    <p><?php the_field('about_section_4_tekst');?></p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>