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
		
	<div class="newsletter">
        <input type="email" id="email-input" placeholder="ÚNETE A NUESTRA NEWSLETTER - INTRODUCE TU EMAIL*">
        <p id="email-error" class="error-message" style="display: none; color: red;">Introduce un email válido</p>

        <div class="confirmation">
            <input type="checkbox" id="terms-checkbox">
            <label for="terms-checkbox">
                He podido leer y entiendo la información sobre el uso de mis datos personales explicada en la
                <a href="#">Política de privacidad</a> y acepto recibir comunicaciones comerciales personalizadas.
            </label>
        </div>
        <button id="subscribe-button" class="subscribe-button">SUSCRÍBETE</button>

    </div>

    <div class="social-qr">

        <div class="social">
            <p>Síguenos en</p>
            <div class="social-icons">
                <a href="#"><img src="assets/img/icons/facebook.svg" alt="Facebook"></a>
                <a href="#"><img src="assets/img/icons/instagram_light.svg" alt="Instagram"></a>
                <a href="#"><img src="assets/img/icons/pinterest.svg" alt="Pinterest"></a>
                <a href="#"><img src="assets/img/icons/youtube.svg" alt="YouTube"></a>
                <a href="#"><img src="assets/img/icons/spotify.svg" alt="Spotify"></a>
                <a href="#"><img src="assets/img/icons/tiktok.svg" alt="TikTok"></a>
            </div>

        </div>
    </div>

    <div class="footer-links">
        <div class="column">
            <h3>POLÍTICAS</h3>
            <a href="#">Términos y condiciones</a>
            <a href="#">Política de privacidad</a>
            <a href="#">Política de cookies</a>
            <a href="#">Configuración de cookies</a>
        </div>
        <div class="column">
            <h3>COMPAÑÍA</h3>
            <a href="#">Trabaja con nosotros</a>
            <a href="#">Prensa</a>
            <a href="#">Affinity Card</a>
            <a href="#">Ticket & Factura</a>
        </div>
        <div class="column">
            <h3>CONTACTO</h3>
            <a href="#">Contacto</a>
            <a href="#">Ayuda</a>
            <a href="#">Compra como invitado</a>
            <a href="#">Tiendas</a>
            <strong>123 456 789</strong>
        </div>
    </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
