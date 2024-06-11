<?php get_header(); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="page home">
            <?php the_content(); ?>
            <?php include 'components/banner.php'; ?>
            <?php include 'components/about.php'; ?>
            <?php include 'components/works.php'; ?>
        </div>
    <?php endwhile;
    endif; ?>
<?php get_footer(); ?>