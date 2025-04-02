<?php

/**
 * nombre del archivo:      content-main.php
 * 
 * Decripción:              Archivo en el que se define el contenido de la página principal.
 * 
 *Fecha de modificacion:    16/03/2025
 */



// Variables del archivo 
//DUDA(a tener el slider con un div y 4 imagenes hay que poner imagen destacada?)
$main_page_image = get_post_thumbnail_id();
$main_page_menu = wp_get_nav_menu_items('main-menu');


get_header();
?>


<!--adicionar classe presonalizada-->
<article <?php post_class('main-page overflow-x-hidden'); ?> id="post-<?php the_ID(); ?>">

    <header class="main-page__header">
        <!-- screen-reader-text para ocultar el titulo pero es visible para SEO -->
        <?php the_title('<h2 class="main-page__header-title screen-reader-text">', '</h2>'); ?>
    </header>


    <?php if (!empty($main_page_menu)): ?>
        <div class="main-page__content">
            <div class="main-page__content-images swiper">
                <div class="main-page__content-images--wrapper swiper-wrapper">
                    <?php
                    foreach ($main_page_menu as $element):
                        $element_id                 = $element->object_id;
                        $element_featured_image     = get_post_thumbnail_id($element_id);

                    ?>
                        <div class="main-page__content-images--image swiper-slide" data-slide="<?php $element_id ?>">
                            <?php echo wp_get_attachment_image($element_featured_image, 'full', false, array('class' => 'main-page__content-images--image-image')) ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="main-page__content-titles" data-slide="<?php $element_id ?>">
                <?php
                foreach ($main_page_menu as $element):
                    $element_id             = $element->object_id;
                    $element_title          = get_the_title($element_id);
                    $element_permalink      = get_permalink($element_id);

                ?>

                    <!--capa adicional de seguridad esc_url-->
                    <a class="main-page__content-titles--title" href="<?php echo esc_url($element_permalink) ?>">
                        <?php echo $element_title ?>
                    </a>

                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
    
    <?php get_footer();
