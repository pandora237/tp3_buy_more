<?php get_header(); ?>
<?php if (get_the_title()): ?>
    <h1><?php the_title(); ?></h1>
<?php endif; ?>
<section class="content">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</section>
<?php get_footer(); ?>