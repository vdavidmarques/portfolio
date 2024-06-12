<?php $id = $environment; ?>
<section class="offer">
    <article class="container">
        <div class="heading-title scroll-effect">
            <?php echo get_field('offer-titles', $id) ?>
        </div>
        <div class="packages">
            <?php
            $packages = get_field('offer_list', $id);
            if ($packages) :
                foreach ($packages as $package) :
            ?>
                    <div class="package scroll-effect">
                        <div class="title">
                            <?php echo $package['text']; ?>
                        </div>
                        <div class="options">
                            <?php
                            $options = $package['option'];
                            if ($options) :
                                foreach ($options as $option) :
                            ?>
                                    <div class="option">                                       
                                        <img src="<?php echo  get_template_directory_uri() . '/library/icons/check.svg' ?>" alt="O que oferecemos">
                                        <div class="text">
                                            <?php echo $option['text']; ?>
                                        </div>                                     
                                    </div>
                            <?php
                                endforeach;
                            endif;
                            ?>
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
                        ?>
                            
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $package['wpp-message'] ?>" class="button button-second">
                                <?php echo $package['button-label'] ?>
                            </a>
                           
                        <?php endwhile; ?>
                    </div>
            <?php
                endforeach;
            endif;
            ?>

        </div>
    </article>

</section>