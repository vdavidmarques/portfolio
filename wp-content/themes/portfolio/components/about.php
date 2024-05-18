<article class="about">
    <div class="container content">
        <div class="me">
            <?php 
                $image = get_field('image'); 
                if($image):
            ?>
                <div class="pic">
                    <div class="bg-blue-hard-light pointer-events-none">&nbsp;</div>
                    <img src="<?php echo $image['url'] ?>" alt="Vinícius marques">
                </div>
            <?php endif; ?>
            <div class="heading-title">
                <?php echo get_field('our-services-main-title')  ?>
            </div>
        </div>
        <div class="strong-points">
            <?php
                $service = get_field('our-services-service-image');
                $lists = $service['our-services-service'];
                if( $lists):
                    foreach ($lists as $list) :
                ?>
                    <div class="card">
                        <img src="<?php echo $list['icone']; ?>" alt="<?php echo $list['texto']; ?>" class="icon">
                        <p><?php echo $list['texto']; ?></p>
                    </div>
                <?php 
                    endforeach;
                endif; 
                ?>
        </div>
    </div>
</article>