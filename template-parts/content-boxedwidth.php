<?php

/**
 * Nombre del archivo:     content-boxedwidth.php
 * 
 * Decripción:              Archivo en el que se define el contenido de las páginas boxedwidth.
 * 
 *Fecha de modificacion:    19/05/2025
 */

get_header();
?>

<!--adicionar classe presonalizada-->
<article <?php post_class('boxedwidth-page overflow-x-hidden'); ?> id="post-<?php the_ID(); ?>">
    <div class="container">
        <header class="boxedwidth-page__header">
            <?php the_title('<h1 class="boxedwidth-page__header-title">', '</h1>'); ?>
        </header>

        <div class="boxedwidth-page__content">
            <?php if (get_the_content()): ?>
                <div class="boxedwidth-page__content-content">
                    <?php the_content(); ?>

                </div>
            <?php endif; ?>
        </div>

    </div>
</article>
<?php get_footer();
