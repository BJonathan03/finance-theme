<html lang="en-gb" dir="ltr">

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Site Properties -->
    <title>Examen CMS 2018 - 2019</title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ?>/images/apple-touch-icon.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/uikit.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/components/swiper.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/components/font-awesome.css"> </head>

<body>
<header>
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-2-5@l uk-width-1-3@m uk-width-1-4@s">
                <!-- logo header begin -->
                <div id="header-logo">
                    <a class="uk-logo" href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo_header.svg" alt="fina finance" /></a>
                </div>
                <!-- logo header end -->
            </div>
        </div>
        <div class="uk-width-1-1">
            <hr>
            <!-- Main navigation begin -->
            <nav class="uk-navbar-container uk-visible@m" data-uk-navbar style="z-index: 980;" data-uk-sticky="animation: uk-animation-slide-top; cls-active: uk-sticky; cls-inactive: uk-navbar-container; bottom: #offset">
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <?php
                        $args = array(
                            'menu' => 'Menu 1',
                            'container_class' => false,
                            'items_wrap' => '%3$s',
                            'container' => false,
                        );
                        wp_nav_menu($args);
                        ?>
                    </ul>
                </div>
            </nav>
            <!-- Main navigation end -->
            <!-- Mobile navigation begin -->
            <a class="uk-button uk-align-center idz-mobile-nav uk-hidden@m" href="#modal-full" data-uk-icon="icon: menu" data-uk-toggle>Menu</a>
            <div id="modal-full" class="uk-modal-full" data-uk-modal>
                <div class="uk-modal-dialog">
                    <button class="uk-modal-close-full uk-close-large" type="button" data-uk-close></button>
                    <div data-uk-height-viewport>
                        <div class="uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                            <ul class="uk-nav-primary uk-nav-parent-icon" data-uk-nav>
                                <?php
                                $args = array(
                                    'menu' => 'Menu 1',
                                    'container_class' => false,
                                    'items_wrap' => '%3$s',
                                    'container' => false,
                                );
                                wp_nav_menu($args);
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile navigation end -->
        </div>
    </div>
    </div>
</header>