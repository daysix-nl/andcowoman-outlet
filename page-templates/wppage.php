<?php
/**
 * Template name: WP Page
 */
 get_header(); ?>
<main id="content">
    <section>
        <?php the_content();?>
        <div class="pt-full"></div>
    </section>
</main>
<?php get_footer(); ?>