<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header">
        <div class="top-header light-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left">
                        <ul class="contact-info">
                            <?php
                            $phone_number = get_theme_mod('phone_number');
                            if ($phone_number) {
                                echo '<li class="phone"><a href="tel:' . $phone_number . '" title="' . $phone_number . '">' . $phone_number . '</a></li>';
                            }
                            $email = get_theme_mod('email');
                            if ($email) {
                                echo '<li class="email"><a href="mailto:' . $email . '" title="' . $email . '">' . $email . '</a>
                            </li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="col-md-6 right">
                        <ul class="social-links">
                            <?php
                            $social_links = [
                                'facebook_url'  => 'fa-facebook-f',
                                'twitter_url'   => 'fa-twitter',
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header white-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
                                <?php
                                $header_logo_id = get_theme_mod('header_logo');
                                $header_logo_url = wp_get_attachment_url($header_logo_id);
                                $header_logo_alt = get_post_meta($header_logo_id, '_wp_attachment_image_alt', true);
                                ?>
                                <img src="<?php echo esc_url($header_logo_url); ?>" alt="<?php echo esc_attr($header_logo_alt); ?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <nav>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                                'container' => 'ul',
                                'menu_class' => 'primary-menu'
                            ))
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>