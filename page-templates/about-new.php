<?php
/**
 * Template name: About 2.0
 */
 get_header(); ?>
 <?php
$image = get_field('about_2_section_1_afbeelding_1');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<?php
$image2 = get_field('about_2_section_1_afbeelding_2');
$image2_url = isset($image2['url']) ? esc_url($image2['url']) : '';
$image2_alt = isset($image2['alt']) ? esc_attr($image2['alt']) : '';
?>
<?php
$image3 = get_field('about_2_section_2_afbeelding_1');
$image3_url = isset($image3['url']) ? esc_url($image3['url']) : '';
$image3_alt = isset($image3['alt']) ? esc_attr($image3['alt']) : '';
?>
<?php
$image4 = get_field('about_2_section_3_afbeelding_1');
$image4_url = isset($image4['url']) ? esc_url($image4['url']) : '';
$image4_alt = isset($image4['alt']) ? esc_attr($image4['alt']) : '';
?>
<?php
$image5 = get_field('about_2_section_4_afbeelding_1');
$image5_url = isset($image5['url']) ? esc_url($image5['url']) : '';
$image5_alt = isset($image5['alt']) ? esc_attr($image5['alt']) : '';
?>
<?php
$image6 = get_field('about_2_section_4_afbeelding_2');
$image6_url = isset($image6['url']) ? esc_url($image6['url']) : '';
$image6_alt = isset($image6['alt']) ? esc_attr($image6['alt']) : '';
?>
<?php
$image7 = get_field('about_2_section_5_afbeelding_1');
$image7_url = isset($image7['url']) ? esc_url($image7['url']) : '';
$image7_alt = isset($image7['alt']) ? esc_attr($image7['alt']) : '';
?>
<?php
$image8 = get_field('about_2_section_5_afbeelding_2');
$image8_url = isset($image8['url']) ? esc_url($image8['url']) : '';
$image8_alt = isset($image8['alt']) ? esc_attr($image8['alt']) : '';
?>

<main id="content">
    <!-- SECTION 1 -->
    <section>
        <div class="w-full max-w-[390px] px-[15px] lg:max-w-[1200px] lg:px-[73px] mx-auto flex flex-col md:flex-row justify-between items-center">
            <div class="w-full md:max-w-[480px] pr-[30px]">
                <h1 class="text-30 md:text-38 font-bold"><?php the_field('about_2_section_1_titel');?></h1>
                <p><?php the_field('about_2_section_1_tekst');?></p>
            </div>
            <div class="w-full max-w-[333px] md:max-w-[500px] h-[318px] md:h-[480px] relative mt-[50px] md:mt-[unset]">
                <div class="absolute w-[186px] h-[278px] md:w-[280px] md:h-[420px] bg-black right-0 top-0 overflow-hidden">
                    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="min-h-full min-w-full object-cover object-center">
                </div>
                <div class="absolute w-[186px] h-[278px] md:w-[280px] md:h-[420px] bg-black left-0 bottom-0 overflow-hidden">
                    <img src="<?php echo $image2_url; ?>" alt="<?php echo $image2_alt; ?>" class="min-h-full min-w-full object-cover object-center">
                </div>
            </div>
        </div>
   </section>
    <!-- SECTION 2 -->
    <section>
        <div class="w-full max-w-[390px] px-[15px] lg:max-w-[1200px] lg:px-[73px] mx-auto flex flex-col md:flex-row justify-between items-center mt-[50px] md:mt-[75px]">
             <div class="w-full md:max-w-[500px] md:order-2">
                <h2 class="text-25 leading-35"><?php the_field('about_2_section_2_titel_1');?></h2>
                <p><?php the_field('about_2_section_2_tekst_1');?></p>
                <h2 class="text-25 leading-35 mt-[35px]"><?php the_field('about_2_section_2_titel_2');?></h2>
                <p><?php the_field('about_2_section_2_tekst_2');?></p>
            </div>
            <div class="w-full max-w-[270px] md:max-w-[480px] md:pr-[40px]  md:order-1 mt-[50px] md:mt-[unset] ml-auto mr-auto md:ml-[unset] md:mr-[unset]">
                <div class="aspect-[13/16] overflow-hidden">
                    <img src="<?php echo $image3_url; ?>" alt="<?php echo $image3_alt; ?>" class="min-h-full min-w-full object-cover object-center">
                </div>
            </div>
        </div>
   </section>
    <!-- SECTION 3 -->
   <section>
        <div class="w-full max-w-[390px] px-[15px] lg:max-w-[1200px] lg:px-[73px] mx-auto flex flex-col md:flex-row justify-between items-center mt-[40px]">
            <div class="w-full md:max-w-[480px] md:pr-[40px]">
                <h2 class="text-25 leading-35"><?php the_field('about_2_section_3_titel_1');?></h2>
                <p><?php the_field('about_2_section_3_tekst_1');?></p>
            </div>
            <div class="w-full max-w-[270px] md:max-w-[500px] mt-[50px] md:mt-[unset] ml-auto mr-auto md:ml-[unset] md:mr-[unset]">
                 <div class="aspect-[13/16] overflow-hidden">
                    <img src="<?php echo $image4_url; ?>" alt="<?php echo $image4_alt; ?>" class="min-h-full min-w-full object-cover object-center">
                </div>
            </div>
        </div>
   </section>
    <!-- SECTION 4 -->
   <section class="bg-[#FBF8F3] mt-[50px] md:mt-[80px]">
        <div class="w-full max-w-[390px] px-[15px] lg:max-w-[1200px] lg:px-[73px] mx-auto flex flex-col md:flex-row justify-between items-center py-[40px] md:py-[80px]">
            <div class="w-full md:max-w-[480px] pr-[40px] hidden md:block">
                <div class="h-[814px] relative">
                     <div class="absolute w-[360px] h-[430px] bg-black left-0 top-0 overflow-hidden">
                        <img src="<?php echo $image5_url; ?>" alt="<?php echo $image5_alt; ?>" class="min-h-full min-w-full object-cover object-center">
                    </div>
                    <div class="absolute w-[360px] h-[430px] bg-black right-0 bottom-0 overflow-hidden">
                        <img src="<?php echo $image6_url; ?>" alt="<?php echo $image6_alt; ?>" class="min-h-full min-w-full object-cover object-center">
                    </div>
                </div>
            </div>
            <div class="w-full md:max-w-[500px]">
                <h2 class="text-25 leading-35 max-w-[270px]"><?php the_field('about_2_section_4_titel_1');?></h2>
                <p><?php the_field('about_2_section_4_tekst_1');?></p>
                <div class="w-full max-w-[333px] mx-auto md:hidden mt-[50px]">
                    <div class="h-[541px] relative">
                        <div class="absolute w-[239px] h-[288px] bg-black left-0 top-0 overflow-hidden">
                            <img src="<?php echo $image5_url; ?>" alt="<?php echo $image5_alt; ?>" class="min-h-full min-w-full object-cover object-center">
                        </div>
                        <div class="absolute w-[239px] h-[288px] bg-black right-0 bottom-0 overflow-hidden">
                            <img src="<?php echo $image6_url; ?>" alt="<?php echo $image6_alt; ?>" class="min-h-full min-w-full object-cover object-center">
                        </div>
                    </div>
                </div>
                <h2 class="text-25 leading-35 mt-[40px] md:mt-[35px] max-w-[270px]"><?php the_field('about_2_section_4_titel_2');?></h2>
                <p class="mb-[10px] md:mb-[unset]"><?php the_field('about_2_section_4_tekst_2');?></p>
            </div>
        </div>
   </section>
    <!-- SECTION 5 -->
     <section>
        <div class="w-full max-w-[390px] px-[15px] lg:max-w-[1200px] lg:px-[73px] mx-auto flex flex-col md:flex-row justify-between items-start my-[50px] md:my-[80px]">
            <div class="w-full md:max-w-[480px] md:pr-[40px]">
                <div class="w-[270px] h-[408px] ml-auto mr-auto md:ml-[unset] md:mr-[unset] md:w-[280px] md:h-[420px] bg-black right-0 top-0 overflow-hidden">
                    <img src="<?php echo $image7_url; ?>" alt="<?php echo $image7_alt; ?>" class="min-h-full min-w-full object-cover object-center">
                </div>
                <h2 class="mt-[40px] md:mt-[10px] text-25"><?php the_field('about_2_section_5_titel_1');?></h2>
                <p class="max-w-[390px] mt-[0px]"><?php the_field('about_2_section_5_tekst_1');?></p>
            </div>
            <div class="w-full md:max-w-[500px] mt-[50px] md:mt-[unset]">
                <div class="w-[270px] h-[408px] ml-auto mr-auto md:ml-[unset] md:mr-[unset] md:w-[280px] md:h-[420px] bg-black right-0 top-0 overflow-hidden">
                    <img src="<?php echo $image8_url; ?>" alt="<?php echo $image8_alt; ?>" class="min-h-full min-w-full object-cover object-center">
                </div>
                <h2 class="mt-[40px] md:mt-[10px] text-25"><?php the_field('about_2_section_5_titel_2');?></h2>
                <p class="max-w-[390px] mt-[0px]"><?php the_field('about_2_section_5_tekst_2');?></p>
            </div>
        </div>
   </section>

</main>
<?php get_footer(); ?>