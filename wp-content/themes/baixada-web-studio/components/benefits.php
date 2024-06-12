<?php $id = $environment; ?>

<section class="benefits container">
    <h2 class="title scroll-effect"><?php echo get_field('offer-main-title', $id) ?></h2>
    <div class="lists scroll-effect">
        <?php
        $lists = get_field('list', $id);
        if ($lists) :
            foreach ($lists as $list) :
        ?>
            <div class="list">
                <?php
                if ($list['icon']) :
                ?>
                    <div class="icon">
                        <img src="<?php echo $list['icon'] ?>" alt="Baixada Web Studio" itemprop="image" class="bg-image">
                    </div>
                <?php endif; ?>
                <div class="text">
                    <?php echo $list['text'] ?>
                </div>
            </div>
        <?php
            endforeach;
        endif;
        ?>
    </div>
</section>