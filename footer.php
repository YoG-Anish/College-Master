<footer class="site-footer light-black-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer-1">
                    <div class="about-content">
                        <h2 class="title"><?php echo get_theme_mod('footer_text'); ?></h2>
                        <p>
                            <?php echo get_theme_mod('footer_description'); ?>
                        </p>
                    </div>
                    <ul class="contact-info">
                        <?php
                        $footer_phone = get_theme_mod('footer_phone');
                        if ($footer_phone) {
                            echo '<li class="phone"><a href="tel:' . $footer_phone . '" title="' . $footer_phone . '">' . $footer_phone . '</a></li>';
                        }
                        $footer_email = get_theme_mod('footer_email');
                        if ($footer_email) {
                            echo '<li class="email"><a href="mailto:' . $footer_email . '" title="' . $footer_email . '">' . $footer_email . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-2">
                    <h2 class="title"><?php echo get_theme_mod('footer_menu_title'); ?></h2>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'menu_class' => 'menu-lists d-flex flex-wrap',
                    ));
                    ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-3">
                    <h2 class="title"><?php echo get_theme_mod('footer_gallery_title'); ?></h2>
                    <ul class="photo-lists d-flex flex-wrap">
                        <li><a href="" title=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog1.jpg" alt="" class="img-cover"></a></li>
                        <li><a href="" title=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog2.jpg" alt="" class="img-cover"></a></li>
                        <li><a href="" title=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog3.jpg" alt="" class="img-cover"></a></li>
                        <li><a href="" title=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog.jpg" alt="" class="img-cover"></a></li>
                        <li><a href="" title=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog1.jpg" alt="" class="img-cover"></a></li>
                        <li><a href="" title=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog2.jpg" alt="" class="img-cover"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <h2 class="title"><?php echo get_theme_mod('footer_map_title'); ?></h2>
                <div class="map-iflame">
                    <?php
                    $footer_map_page_id = get_theme_mod('footer_map_page');
                    if ($footer_map_page_id) {
                        $footer_map_page_url = get_permalink($footer_map_page_id); ?>
                        <a href="<?php echo esc_url($footer_map_page_url); ?>" title="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-map.png" alt="">
                        </a>
                    <?php   } ?>
                </div>
            </div>
        </div>
        <div class="social-links ">
            <?php
            $social_links = [
                'facebook_url'  => 'fa-facebook-f',
                'twitter_url'   => 'fa-twitter',
                'youtube_url'   => 'fa-youtube',
                'instagram_url' => 'fa-instagram',
            ];

            foreach ($social_links as $setting_id => $icon_class) :
                $url = get_theme_mod($setting_id);

                if (! empty($url)) : ?>
                    <li>
                        <a href="<?php echo esc_url($url); ?>" target="_blank">
                            <i class="fab <?php echo esc_attr($icon_class); ?>"></i>
                        </a>
                    </li>
            <?php endif;
            endforeach;
            ?>
        </div>
    </div>
</footer>
<div class="bottom-footer">
    <div class="container">
        <p>Copyright &copy; 2002 - <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>