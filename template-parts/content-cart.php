<?php
/**
* Nombre del archivo:               cart.php
* Descripción:						Archivo en el que se define la 	estructura y el contenido de la página de Cart.
*
* Fecha de modificación: 			16/04/2025
*/

get_header();
?>

<article <?php post_class('cart-page overflow-x-hidden'); ?> id="post-<?php the_ID(); ?>">
<div class="container">
<header class="cart-page__header">
    <?php the_title('<h1 class="cart-page__header-title">', '</h1>'); ?>
    
	</header>

	<div class="cart-page__content">
		
            <?php if(get_the_content()): ?>
                <div class="cart-page__content-content">
                    <?php the_content(); ?>
                </div>
            <?php endif; ?>
        </div>

	</div>
</article>
<?php
get_footer();