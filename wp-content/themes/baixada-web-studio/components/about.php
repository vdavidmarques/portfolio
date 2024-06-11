<article class="about">
    <div class="container content">
        <div class="me">
            <?php
            $image = get_field('bout-image');
            if ($image) :
            ?>
                <div class="pic">
                    <div class="bg-blue-hard-light pointer-events-none">&nbsp;</div>
                    <img src="<?php echo $image['url'] ?>" alt="Vinícius marques">
                </div>
            <?php endif; ?>
            <div class="heading-title">
                <?php echo get_field('bout-main-title')  ?>
            </div>
            <?php if ($firstBanner['bout-button']) : ?>
                <a href="<?php echo $firstBanner['bout-button']['url'] ?>" itemprop="name" class="mt-6 button button-default">
                    <?php echo $firstBanner['bout-button']['title'] ?>
                </a>
            <?php endif; ?>
        </div>

    </div>
</article>