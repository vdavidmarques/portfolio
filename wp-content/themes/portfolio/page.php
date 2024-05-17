<?php get_header(); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="page home">
            <?php the_content(); ?>
            <?php include 'components/banner.php' ?>
            <?php include 'components/about.php' ?>
        </section>
    <?php endwhile;
    endif; ?>
<?php get_footer(); ?>