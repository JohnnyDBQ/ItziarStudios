<?php
/**
* Nombre del archivo:               checkout.php
* Descripción:						Archivo en el que se define la 	estructura y el contenido de la página de Checkout.
*
* Fecha de modificación: 			15/04/2025
*/

// Variables del archivo
$checkout_page_image = get_post_thumbnail_id();

get_header();
?>

<article <?php post_class('checkout-page overflow-x-hidden'); ?> id="post-<?php the_ID(); ?>">
<header class="checkout-page__header">
    <?php the_title('<h1 class="checkout-page__header-title screen-reader-text">', '</h1>'); ?>
    
	</header>

	<div class="checkout-page__content">
		<div class="container">
            <?php if(get_the_content()): ?>
                <div class="checkout-page__content-content">
                    <?php the_content(); ?>
                </div>
            <?php endif; ?>
        </div>

	</div>
</article>
<?php
get_footer();