<?php $id = $environment;?>
<?php
    $bgImage = get_field("bout-image", $id);
    $title = get_field("bout-main-title", $id);
?>
<section class="about">
    <article itemscope itemprop="articleBody">
        <div itemprop="articleBody" class="default-heading-title scroll-effect">
            <?php echo $title ?> 
        </div>

        <div class="relative grid grid-cols-12">
            <div class="blue-bg">&nbsp;</div>
            <?php if($bgImage): ?>
                <div class="bg-image">
                    <img src="<?php echo $bgImage['url'] ?>" alt="Baixada Web Studio" itemprop="image" class="bg-image">
                </div>
            <?php endif;?>
            <div class="content">
                <div class="scroll-effect">
                    <?php echo get_field('bout-description', $id) ?> 
                </div>

                <?php
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
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>" class="button button-default scroll-effect">
                        o que podemos fazer por você?
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
    </article>
</section>