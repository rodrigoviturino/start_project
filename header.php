<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Start Development</title>

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
<header class="header">
    <div class="container header__wrapper">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/logo.svg" alt="">
        </div>
        <nav>
            <?php 
                if( has_nav_menu('main-menu') ) {
                    wp_nav_menu([
                        'theme_location' => 'main-menu',
                        'fallback_cb' => false,
                        'container_class' => null,
                        'container_id' => 'navbarResponsive',
                        'menu_class' => 'menu-item'
                    ]);
                }
            ?>
 
        </nav>
        <button>Free Trial</button>
    </div>
</header>
<!-- end Header -->