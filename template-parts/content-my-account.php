<?php

/**
 * Nombre del Archivo: 	content-my-account.php
 *Descripcion: 	Archivo donde se define el contenido de la pagina de Mi cuenta
 *
 * 
 * Fecha de modificacion: 	11/04/2025
 * 
 */

//variable del Archivo
$my_account_class = (!is_user_logged_in() ? 'my-account-page my-account-form' : 'my-account-page m-0');
get_header();
?>


<article id="post-<?php the_ID(); ?>" <?php post_class($my_account_class); ?>>
	<div class="container-fluid">
	<header class="my-account-page__header">
		<!--El titulo de la pagina-->
		<?php the_title('<h1 class="my-account-page__header-title nb-0">', '</h1>'); ?>
	</header>
	
	<?php if (get_the_content()): ?>
		<div class="my-account-page__content">
			<?php the_content(); ?>
		</div>
		<?php endif; ?>
		
	</div>
		
</article>
<?php
get_footer();
