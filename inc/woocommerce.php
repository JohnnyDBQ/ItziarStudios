<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package ItziarStudios
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)
 * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
 *
 * @return void
 */
function itziarstudios_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 150,
			'single_image_width'    => 300,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'default_columns' => 4,
				'min_columns'     => 1,
				'max_columns'     => 6,
			),
		)
	);
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'itziarstudios_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function itziarstudios_woocommerce_scripts() {
	wp_enqueue_style( 'itziarstudios-woocommerce-style', get_template_directory_uri() . '/woocommerce.css', array(), _S_VERSION );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'itziarstudios-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'itziarstudios_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function itziarstudios_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'itziarstudios_woocommerce_active_body_class' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function itziarstudios_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 3,
		'columns'        => 3,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'itziarstudios_woocommerce_related_products_args' );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'itziarstudios_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function itziarstudios_woocommerce_wrapper_before() {
		?>
			<main id="primary" class="site-main">
		<?php
	}
}
add_action( 'woocommerce_before_main_content', 'itziarstudios_woocommerce_wrapper_before' );

if ( ! function_exists( 'itziarstudios_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function itziarstudios_woocommerce_wrapper_after() {
		?>
			</main><!-- #main -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'itziarstudios_woocommerce_wrapper_after' );

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'itziarstudios_woocommerce_header_cart' ) ) {
			itziarstudios_woocommerce_header_cart();
		}
	?>
 */

if ( ! function_exists( 'itziarstudios_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function itziarstudios_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		itziarstudios_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'itziarstudios_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'itziarstudios_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function itziarstudios_woocommerce_cart_link() {
		?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'itziarstudios' ); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'itziarstudios' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo esc_html( $item_count_text ); ?></span>
		</a>
		<?php
	}
}

if ( ! function_exists( 'itziarstudios_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function itziarstudios_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php itziarstudios_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}

/**
 * x. Mi Cuenta 
 * 
 * Funciones personalizadas para  la edicio de los elementos de la pagina Mi cuenta
 */
add_filter('woocommerce_account_menu_items', 'itz_edit_dashboard');
function itz_edit_dashboard( $menu_links ){
	
	unset( $menu_links[ 'downloads' ] ); // Disable Downloads

	
	return $menu_links;
	
}

/**
 * x. Mi Cuenta 
 * 
 * Funciones personalizadas para  la edicio de los elementos de la pagina Mi cuenta
 */


 /*
 *x. Tienda
 *
 * Funciones personalizadas para  la edicio de los elementos de la pagina de tienda
 * */

 add_filter('body_class', 'itz_categories_class');
function itz_categories_class($classes){

    if(is_shop() || is_product_category()){
        $classes[] = 'shop-page';
    }

    return $classes;
}



add_action('wp', 'itz_remove_sidebar_category_pages');
function itz_remove_sidebar_category_pages(){

    if(is_shop() || is_product_category() || is_product()){
        remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
    }
}

/*
*x.
*
*
*/
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action('woocommerce_before_shop_loop_item_title', 'itz_fullsize_image', 10);
function itz_fullsize_image(){
    echo wp_get_attachment_image(get_post_thumbnail_id(), 'full');
}


remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
add_action( 'woocommerce_before_main_content', 'breadcrumb' );
function breadcrumb(){
	?> <div class="container">  <?php  
	woocommerce_breadcrumb(); 
}

do_action( 'woocommerce_after_main_content', 'breadcrumb_close' );
function breadcrumb_close(){
	?> </div> <?php  
}

/*
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );

add_action( 'woocommerce_before_single_product_summary', 'mostrar_imagen_full', 20 );

function mostrar_imagen_full() {
    global $product;
    $attachment_id = $product->get_image_id();
    echo wp_get_attachment_image( $attachment_id, 'full' );
}*/

remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );

add_filter( 'woocommerce_quantity_input_max', 'limitar_cantidad_maxima', 10, 2 );
function limitar_cantidad_maxima( $max, $product ) {
    return 10; }


add_filter('woocommerce_cart_empty_cross_sells_thumbnail_size', 'custom_cart_cross_sells_thumbnail_size');

function custom_cart_cross_sells_thumbnail_size($size) {
    return 'full'; 
}