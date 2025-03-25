<?php
/**
* Nombre del archivo:               content-contact.php
* Descripción:						Archivo en el que se define la 	estructura y el contenido de la página de Contacto.
*
* Fecha de modificación: 			11/03/2025
*/

// Variables del archivo
$contact_page_image = get_post_thumbnail_id();

get_header();
?>

<article <?php post_class('contact-page overflow-x-hidden'); ?> id="post-<?php the_ID(); ?>">
	<header class="contact-page__header">
		<?php if($contact_page_image): ?>
			<div class="contact-page__header-image">
				<?= wp_get_attachment_image($contact_page_image, 'full', false, array('class' => 'contact-page__header-image--image')); ?>
			</div>
		<?php endif; ?>
	</header>
	<div class="contact-page__content">
		<?php the_title('<h1 class="contact-page__content-title">', '</h1>'); ?>
		<?php if(get_the_content()): ?>
			<div class="contact-page__content-content">
				<?php the_content(); ?>
			</div>
		<?php endif; ?>

		<div class="contact-page__content-form">
			<?php echo do_shortcode('[contact-form-7 id="7baea5a" title="Formulario de contacto"]'); ?>
		</div>
	</div>
</article>
<?php
get_footer();