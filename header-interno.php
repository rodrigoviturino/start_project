<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Start Development - Header Interno</title>

    <meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php bloginfo('name'); ?>"/>
    <meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte."/>
    <meta property="og:url" content="http://bikcraft.com"/>
    <meta property="og:image" content="http://bikcraft.com/img/og-image.png"/>

    <?php wp_head(); ?>

</head>
<body>
    
<!-- Header -->
<header class="header-interno">
    <div class="container header__wrapper">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/logo.svg" alt="">
        </div>
        <nav id="nav-interno">
        <?php 
                if( has_nav_menu('menu-internal') ) {
                    wp_nav_menu([
                        'theme_location' => 'menu-internal',
                        'fallback_cb' => false,
                        'container_class' => null,
                        'container_id' => 'navbar1',
                        'menu_class' => 'menu'
                    ]);
                }
            ?>
            <!-- <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">1</a>
                    <ul>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">FAQs</a>
                        </li>
                        <li>
                            <a href="#">Careers</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">2</a>
                    <ul>
                        <li>
                            <a href="#">Negociação</a>
                        </li>
                        <li>
                            <a href="#">Single Services</a>
                        </li>
                        <li>
                            <a href="#">Careers</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul> -->
        </nav>
        <button>Free Trial</button>
    </div>
</header>
<!-- end Header -->

<!-- Banner Header -->
<section class="header-banner-interno" style="background-image:url(<?php echo get_template_directory_uri(); ?>/src/assets/images/background-home-office.jpg);">
    <div class="container">
        <div class="header-banner-interno-block-title">
            <h2>Pagina Interna</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>

        </div>
    </div>
</section>
<!-- end Banner Header -->

