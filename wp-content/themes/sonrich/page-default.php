<?php
/*
Template Name: Default
*/

get_header();  ?>

<?php get_template_part('template-parts/inner', 'banner'); ?>

<div class="container py-5">
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>