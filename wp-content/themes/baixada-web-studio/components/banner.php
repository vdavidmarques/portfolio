<section class="main-banner banners py-20">
    <div class="swiper-container relative overflow-hidden">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <?php
                $firstBanners = get_field("banner");
                $count = 0;
                if ($firstBanners) :
                    foreach ($firstBanners as $firstBanner) :
                        if ($firstBanner["main-banner-image"] || $firstBanner["main-banner-image-mobile"]) :
                ?>
                            <div class="bg-blue-hard-light pointer-events-none">&nbsp;</div>
                            <img src="<?php echo $firstBanner["main-banner-image"] ?>" alt="Desenvolvedor web - Vinícius Marques" itemprop="image" class="w-full h-full object-cover show-desktop">

                            <?php if ($firstBanner["main-banner-image-mobile"]) : ?>
                                <img src="<?php echo $firstBanner["main-banner-image-mobile"] ?>" alt="<?php echo $firstBanner["main-banner-image-mobile"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover show-mobile">

                            <?php else : ?>

                                <img src="<?php echo $firstBanner["main-banner-image"] ?>" alt="Desenvolvedor web - Vinícius Marques" itemprop="image" class="w-full h-full object-cover show-mobile">

                            <?php endif; ?>

                        <?php endif; ?>

                        <div class="container default-heading-title flex flex-col h-full">
                            <?php
                            if ($firstBanner["main-banner-main-text"]) :
                                echo  $firstBanner["main-banner-main-text"];
                            endif;

                            if ($firstBanner['main-banner-button']) : ?>

                                <a href="<?php echo $firstBanner['main-banner-button']['url'] ?>" itemprop="name" class="mt-6 button button-default">
                                    <?php echo $firstBanner['main-banner-button']['title'] ?>
                                </a>

                            <?php endif; ?>
                        </div>
                        <?php
                        $count = count($firstBanners);
                        if ($count > 1) :
                        ?>
                            <div class="swiper-button-prev arrow-swiper arrow-swiper-prev"></div>
                            <div class="swiper-button-next arrow-swiper arrow-swiper-next"></div>
                        <?php endif; ?>
                <?php endforeach;
                endif; ?>
            </div>
        </div>
    </div>
</section>