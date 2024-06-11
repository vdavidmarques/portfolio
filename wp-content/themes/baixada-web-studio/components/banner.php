<section class="main-banner banners py-20">
    <div class="swiper-container relative overflow-hidden">
        <div class="swiper-wrapper">
            <?php
            $id = $environment;
            $banners = get_field("banner", $id);
            $count = 0;
            if ($banners) :
                foreach ($banners as $banner) :
                    if ($banner["main-banner-image"] || $banner["main-banner-image-mobile"]) :
            ?>
                    <div class="swiper-slide">
                            <div class="bg-blue-hard-light pointer-events-none">&nbsp;</div>
                            <img src="<?php echo $banner["main-banner-image"]['url'] ?>" alt="Baixada Web Studio" itemprop="image" class="w-full h-full object-cover show-desktop">

                            <?php if ($banner["main-banner-image-mobile"]) : ?>
                                <img src="<?php echo $banner["main-banner-image-mobile"]['url'] ?>" alt="<?php echo $banner["main-banner-image-mobile"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover show-mobile">

                            <?php else : ?>

                                <img src="<?php echo $banner["main-banner-image"] ?>" alt="Baixada Web Studio" itemprop="image" class="w-full h-full object-cover show-mobile">

                            <?php endif; ?>

                    <?php endif; ?>

                        <div class="default-heading-title flex flex-col h-full">
                    <?php
                        if ($banner["main-banner-main-text"]) :
                            echo  $banner["main-banner-main-text"];
                        endif;

                        $args = array(
                            'name' => 'informacoes-gerais',
                            'post_type' => 'page',
                        );

                        $query = new WP_Query($args);
                        while ($query->have_posts()) :
                            $query->the_post();
                            $whatsapp = get_field('whatsapp');
                            $whatsappNumber = get_field('whatsappNumber');
                            $whatsappMessage = get_field('whatsappMessage');
                    ?>
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>" class="button button-default">
                               demonstração gratuita
                            </a>
                        <?php endwhile; ?>
                        </div>
                        <?php
                            $count = count($banners);
                            if ($count > 1) :
                        ?>
                            <div class="swiper-button-prev arrow-swiper arrow-swiper-prev"></div>
                            <div class="swiper-button-next arrow-swiper arrow-swiper-next"></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>