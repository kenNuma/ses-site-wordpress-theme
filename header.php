<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-inner">

        <div class="site-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/company-logo.svg'); ?>" alt="">
            </a>
        </div>

        <nav class="global-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'global',
                'container'      => false,
                'menu_class'     => 'global-menu',
            ));
            ?>
        </nav>

    </div>
</header>