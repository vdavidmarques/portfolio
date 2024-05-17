<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
    <title itemprop="name">
        Portólio Vinícius Marques <?php if (wp_title()) :  ' | ' . wp_title();
                                    endif; ?>
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="header-menu-itens container">
            <a href="/portfolio" class="logo">
                Portólio
            </a>
            <div class="open-menu-mobile">
                <button onclick="openMenu()" class="bg-menu-mobile">
                    Menu
                </button>
            </div>
            <div class="menu-items">
                <?php custom_header_menu(); ?>

                <button onclick="closeMenu()" class="bg-close-menu-mobile">
                    Fechar menu
                </button>
            </div>
        </div>
    </header>

    <main id="content" role="main">