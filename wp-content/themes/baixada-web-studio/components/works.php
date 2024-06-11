<section class="works container">
    <article class="heading-title">
        <?php echo get_field('partners-title') ?>
    </article>
    <article class="slide container">
        <div class="swiper-container">
            <?php
                $args = array(
                    'post_type' => 'works',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                );

                $query = new WP_Query($args);
                $count = 0;
                if ($query->have_posts()) : ?>
                    <div class="swiper-wrapper">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="swiper-slide">
                                    <h3 class="title">
                                        <?php the_title(); ?>
                                    </h3>	
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                    <div class="mouse-hover">
                                        <div class="content">
                                        <?php 
                                            the_content(); 
                                            $link = get_field('works-link');
                                            if($link):
                                        ?>
                                            <a href="<?php echo $link['url'] ?>" alt="<?php the_title(); ?>" class="button button-default">
                                                <?php echo $link['title'] ?>
                                            </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                        <?php
                    wp_reset_postdata();
                    else :
                        echo '<p itemprop="articleBody">Nenhum parceiro encontrado.</p>';
                    endif;
            ?>
            <div class="show-mobile">
                <div class="swiper-button-prev arrow-swiper arrow-swiper-prev"></div>
                <div class="swiper-button-next arrow-swiper arrow-swiper-next"></div>
            </div>
        </div>
    </article>
</section>