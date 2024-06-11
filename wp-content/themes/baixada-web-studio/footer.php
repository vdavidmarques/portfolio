    </main>
    <footer class="my-20" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
        <div class="container">
            <div class="social-networks">
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
                    $email = get_field('e-mail');
                    $instagram = get_field('instagram');
                    $github = get_field('github');
                    $behance = get_field('behance');
                ?>
                    <a target="_blank" href="<?php echo $email ?>">
                        <img src="<?php echo  get_template_directory_uri() . '/library/icons/email.svg' ?>" alt="" itemprop="image">
                    </a>
                    <a target="_blank" href="<?php echo $instagram ?>">
                        <img src="<?php echo  get_template_directory_uri() . '/library/icons/instagram.svg' ?>" alt="" itemprop="image">
                    </a>
                    <a target="_blank" href="<?php echo $github ?>">
                        <img src="<?php echo  get_template_directory_uri() . '/library/icons/github.svg' ?>" alt="" itemprop="image">
                    </a>
                    <a target="_blank" href="<?php echo $behance ?>">
                        <img src="<?php echo  get_template_directory_uri() . '/library/icons/behance.svg' ?>" alt="" itemprop="image">
                    </a>
            </div>
            <div class="wpp-float">
                <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>">
                    <img src="<?php echo  get_template_directory_uri() . '/library/icons/whatsapp.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image">
                </a>
            </div>

            <button class="scroll-to-top-btn" id="scrollToTopBtn">
                Subir para o topo
            </button>
        <?php endwhile; ?>
        <div class="container after-footer">
            <div id="copyright" itemprop="copyrightHolder">
                &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
            </div>
            <a href="https://www.behance.net/viniciusdavidmarques" target="_blank" class="designer">
                By Vinícius Marques
            </a>
        </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri() . "/library/js/swiper/banner.min.js" ?>"></script>
    </body>

    </html>