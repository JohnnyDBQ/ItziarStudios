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
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/icons/menu-fino-black.png" alt="menu">
                </button>
                <<?= $site_tag ?> class="site-title m-0">
                    <a class="site-logo" href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/logo-black.png" alt="Logo">
                    </a>
                </<?= $site_tag ?>>
            </div>



            <!--Segundo bloc-->
            <a class="site-shop" href="<?php echo home_url(); ?>/tienda">
                <span>Shop</span>

            </a>


            <!--Tercer bloc-->
            <nav class="main-navigation" id="site-navigation">

                <a href="<?php echo home_url(); ?>/mi-cuenta">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/icons/user.png" alt="user">
                    <span>Login</span>
                </a>
                <a href="<?php echo home_url(); ?>/carrito" class="cart">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/icons/cesta.png" alt="carrito">
                    <span>Carrinto</span>
                </a>
            </nav>

            <div class="nav-left">
                <!-- Menú Lateral -->
                <aside class="sidebar" id="sidebar">
                    <ul class="menu" id="menuCollapse">
                        <li class="menu-item">
                            <!-- titulos sin ser clicables -->
                            <button class="btn expandable" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMenu-1" aria-expanded="false" aria-controls="collapseMenu-1">
                                + Ready to Ship
                            </button>
                            <div class="collapse" id="collapseMenu-1" data-bs-parent="#menuCollapse">
                                <ul class="submenu">
                                    <li><a href="<?php echo  home_url('tienda') ?>">Todos los productos</a></li>
                                    <li><a href="<?php echo  home_url('categoria-producto/menaje') ?>">Menaje</a></li>
                                    <li><a href="<?php echo  home_url('categoria-producto/decoracion') ?>">Decoración</a></li>
                                    <li><a href="<?php echo home_url('categoria-producto/iluminacion') ?>">Iluminación</a></li>
                                    <li><a href="<?php echo  home_url('categoria-producto/accesorios-de-bano') ?>">Accesorios de baño</a></li>
                                </ul>
                            </div>
                        </li>

                        <?php /*
                        <li class="menu-item">
                            <!-- titulos sin ser clicables -->
                            <button class="btn expandable" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMenu-2" aria-expanded="false" aria-controls="collapseMenu-2">
                                + El Estudio
                            </button>
                            <!-- A los collapse no se puede dar margin nin padding-->
                            <div class="collapse" id="collapseMenu-2" data-bs-parent="#menuCollapse">
                                <ul class="submenu">
                                    <li><a href="">Encargos a Medida</a></li>
                                    <li><a href="">Próximos Talleres</a></li>
                                    <li><a href="">Proyectos Realizados</a></li>
                                    <li><a href="http://localhost:8848/about-me/">About me</a></li>
                                </ul>
                        </li>
                        */ ?>

                        <li class="menu-item">
                            <button class="btn expandable" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMenu-3" aria-expanded="false" aria-controls="collapseMenu-3">
                                + Info
                            </button>
                            <div class="collapse" id="collapseMenu-3" data-bs-parent="#menuCollapse">
                                <ul class="submenu">
                                    <li><a href="<?php echo home_url(); ?>/futuras-mejoras">Ayuda</a></li>
                                    <li><a href="<?php echo home_url(); ?>/contacto">Contacto</a></li>
                                </ul>
                            </div>
                        </li>

                        <div class="menu-item">

                            <img src="<?php echo get_template_directory_uri() ?>/asset/img/taza_barco.jpg" alt="imagen destacada">
                            <video src=""></video>
                        </div>

                    </ul>
                </aside>
            </div>

        </header><!-- #masthead -->