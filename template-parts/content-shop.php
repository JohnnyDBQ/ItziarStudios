<?php
/**
* Nombre del archivo:               content-shop.php
* Descripción:						Archivo en el que se define la estrutura y el contenido de la página de Tienda.
*								
*
* Fecha de modificación: 			16/03/2025
*/

// Variables del archivo
$shop_page_image = get_post_thumbnail_id();

get_header();
?>

<article <?php post_class('shop-page overflow-x-hidden'); ?> id="post-<?php the_ID(); ?>">
    <header class="shop-page__header">
        <?php if($shop_page_image): ?>
            <div class="shop-page__header-image">
                <?= wp_get_attachment_image($shop_page_image, 'full', false, array('class' => 'shop-page__header-image--image')); ?>
            </div>

        <?php endif; ?>
        <?php the_title('<h1 class="shop-page__header-title">', '</h1>'); ?>
    </header>
    <div class="shop-page__content">
        <?php if(get_the_content()): ?>
            <div class="shop-page__content-content">
                <?php the_content(); ?>
            </div>
        <?php endif; ?>

        <div class="shop-page__content-products">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order' => 'DESC'
            );

            $products = new WP_Query($args);

            if($products->have_posts()): ?>
                <div class="shop-page__content-products-list">
                    <?php while($products->have_posts()): $products->the_post(); ?>
                        <div class="shop-page__content-products-list-item">
                            <a href="<?php the_permalink(); ?>" class="shop-page__content-products-list-item-link">
                                <?php the_post_thumbnail('medium', array('class' => 'shop-page__content-products-list-item-link--image')); ?>
                                <h2 class="shop-page__content-products-list-item-link--title"><?php the_title(); ?></h2>
                                <p class="shop-page__content-products-list-item-link--price"><?php echo wc_price(get_post_meta(get_the_ID(), '_price', true)); ?></p>
                            </a>    
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</article>

<?php
get_footer();
