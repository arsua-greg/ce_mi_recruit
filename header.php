<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php bloginfo('title'); ?></title>
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="<?php echo get_site_url(); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="" />
    <meta property="fb:app_id" content="">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>" />
    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;700&family=Zen+Kaku+Gothic+New:wght@400;500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <main>
        <div class="page__header">
            <div class="wrapper">
                <header class="header">
                    <nav class="header_main">
                        <div class="col-1">
                            <div class="logo">
                                <a href="<?php echo home_url(); ?>">
                                    <img src="<?php echo get_template_directory_uri() ?>/release/image/logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="links">
                                <ul class="link-list">
                                    <li class="link-list__item">
                                        <a href="<?php echo home_url() ?>/#friends">働く仲間達</a>
                                    </li>
                                    <li class=" link-list__item">
                                        <a href="<?php echo home_url() ?>/#about">みつばち会について</a>
                                    </li>
                                    <li class=" link-list__item">
                                        <a href="<?php echo home_url() ?>/#nursery">
                                            運営保育園
                                        </a>
                                    </li>
                                    <li class=" link-list__item">
                                        <a href="<?php echo get_permalink(get_page_by_path('faq')) ?>">よくある質問</a>
                                    </li>
                                    <li class="link-list__item">
                                        <a href="<?php echo get_permalink(get_page_by_path('job-description')) ?>">募集要項</a>
                                    </li>
                                </ul>
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLScyMhOKDYj0B3TZLC1JJ7u4MXG3byqfdAxIyOANVlA2S_E3LA/viewform" target="_blank">
                                    <button type="button" class="header_btn">
                                        <p>ENTRY</p>
                                    </button>
                                </a>
                            </div>
                            <div class="hamburger_menu" onclick="toggleMenu()">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="nav_sp">
                            <ul class="nav_sp__links">
                                <li class="nav_sp__links--item">
                                    <a href="<?php echo home_url() ?>/#friends">働く仲間達</a>
                                </li>
                                <li class=" nav_sp__links--item">
                                    <a href="<?php echo home_url(); ?>/#about">みつばち会について</a>
                                </li>
                                <li class="nav_sp__links--item">
                                    <a href="<?php echo home_url() ?>/#nursery"">運営保育園</a>
                                </li>
                                <li class=" nav_sp__links--item">
                                        <a href="<?php echo get_permalink(get_page_by_path('faq')) ?>">よくある質問</a>
                                </li>
                                <li class="nav_sp__links--item">
                                    <a href="<?php echo get_permalink(get_page_by_path('job-description')) ?>">募集要項</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
            </div>
        </div>