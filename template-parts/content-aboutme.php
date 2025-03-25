<?php

/**
 * Nombre del archivo:     content-aboutme.php
 * 
 * Decripción:              Archivo en el que se define el contenido de la página de about me.
 * 
 *Fecha de modificacion:    11/03/2025
 */



// Variables del archivo 

$aboutme_page_image = get_post_thumbnail_id();

get_header();
?>

<!--adicionar classe presonalizada-->
<article <?php post_class('aboutme-page overflow-x-hidden'); ?> id="post-<?php the_ID(); ?>">
	<header class="aboutme-page__header">
		<?php if ($aboutme_page_image): ?>
			<div class="aboutme-page__header-image">
				<?= wp_get_attachment_image($aboutme_page_image, 'full', false, array('class' => ' aboutme-page__header-image--image')) ?>
			</div>
		<?php endif; ?>
		<?php the_title('<strong><h1 class="aboutme-page__header-title">', '</h1></strong>'); ?>
	</header>

	<div class="aboutme-page__content">
		<?php if (get_the_content()): ?>
			<div class="aboutme-page__content-content">
				<?php the_content(); ?>
				
			</div>
		<?php endif; ?>

		<div class="aboutme-page__content-image">
			<img src="<?php echo get_template_directory_uri() ?>/asset/img/img3.jpg" alt="">
		</div>

		<div class="aboutme-page__content-image">
			<img src="<?php echo get_template_directory_uri() ?>/asset/img/img4.jpg" alt="">
		</div>

		<div class="aboutme-page__content-image">
			<img src="<?php echo get_template_directory_uri() ?>/asset/img/img2.jpg" alt="">
		</div>

	</div>
</article>
<?php get_footer();