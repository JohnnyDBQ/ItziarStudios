<?php

/**
 * 
 * Nombre del archivo:      header.php
 * Decripción:              Archivo en el que se define el contenido de la cabecera de la página.
 * 
 * The header for our theme
 * 
 * fecha de modificacion:   06/03/2025
 *
 */


//variables del archivo

$site_tag                 = (is_front_page() ? 'h1' : 'p');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!--NO TOCAR-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="site" id="page">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'itziarstudios'); ?></a>


        <header class="site-header" id="masthead">
            <!--Primero bloc-->
            <div class="site-branding">

                <button class="hamburger-menu btn">
                    <img src="<?php echo get_template_directory_uri(); ?>
                    /asset/img/icons/menu_fino_black.png " alt="menu">
                </button>
                <<?= $site_tag ?> class="site-title m-0">
                    <a class="site-logo" href="<?php home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/logo_sinFondo_black.png " alt="Logo">
                    </a>
                </<?= $site_tag ?>>
            </div>



            <!--Segundo bloc-->
            <a class="site-shop" href="#">
                <span>Shop</span>

            </a>


            <!--Tercer bloc-->
            <nav class="main-navigation" id="site-navigation">

                <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/icons/user.png" alt="user">
                    <span>Login</span>
                </a>
                <a href="#" class="cart">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/icons/cesta.png" alt="carrito">
                    <span>Carrinto</span>
                </a>
            </nav>

        </header>


        <div class="nav-left">
            <!-- Ícono de Menú -->
            <div class="menu-icon" id="menuIcon">
                <img src="asset/img/icons/menu_fino_black.png" alt="menu">
            </div>

            <!-- Menú Lateral -->
            <aside class="sidebar" id="sidebar">
                <ul class="menu">
                    <li class="menu-item">
                        <!-- titulos sin ser clicables -->
                        <strong class="expandable">+ Ready to Ship</strong>
                        <ul class="submenu">
                            <li><a href="">Todos los productos</a></li>
                            <li><a href="">Menaje</a></li>
                            <li><a href="">Decoración</a></li>
                            <li><a href="">Iluminación</a></li>
                            <li><a href="">Accesorios de baño</a></li>
                            <li><a href="">Accesorios de baño</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <!-- titulos sin ser clicables -->
                        <strong class="expandable">+ El Estudio</strong>
                        <ul class="submenu">
                            <li><a href="">Encargos a Medida</a></li>
                            <li><a href="">Próximos Talleres</a></li>
                            <li><a href="">Proyectos Realizados</a></li>
                            <li><a href="">About me</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <strong class="expandable">+ Info</strong>
                        <ul class="submenu">
                            <li><a href="">Ayuda</a></li>
                            <li><a href="">Contacto</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
        </div>

        </header><!-- #masthead -->