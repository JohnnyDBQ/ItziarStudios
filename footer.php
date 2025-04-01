<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ItziarStudios
 */

?>

<footer id="colophon" class="site-footer">

    <div class="site-footer__newsletter">
        <?php echo do_shortcode('[contact-form-7 id="916986a" title="NewsLetter"]'); ?>
    </div>

    <div class="site-footer__social">

        <div class="site-footer__social-redes">
            <p>Síguenos en:</p>
            <div class="site-footer__social-redes--icons">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?>//asset/img/icons/instagram_light.svg" alt="Instagram">
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?>//asset/img/icons/spotify.svg" alt="Spotify">
                </a>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?>//asset/img/icons/tiktok.svg" alt="Tiktok">
                </a>

            </div>
        </div>
    </div>

    <div class="site-footer__menus">
        <div class="site-footer__menus-menu">
            <h3>Politícas</h3>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'polices-menu',
                    'menu_class' => 'site-footer__menus-menu--menu',
                    'container' => false,
                    'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
                )
            );
            ?>

        </div>

        <div class="site-footer__menus-menu">
            <h3>Compañia</h3>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'company-menu',
                    'menu_class' => 'site-footer__menus-menu--menu',
                    'container' => false,
                    'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
                )
            );
            ?>

        </div>

        <div class="site-footer__menus-menu">
            <h3>Contáctos</h3>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'contact-menu',
                    'menu_class' => 'site-footer__menus-menu--menu',
                    'container' => false,
                    'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
                )
            );
            ?>
        </div>
    </div>

    

</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>

</html>