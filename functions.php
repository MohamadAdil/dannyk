<?php

/**
 * Dany-Deftsoft functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dany-Deftsoft
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dany_deftsoft_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Dany-Deftsoft, use a find and replace
	 * to change 'dany-deftsoft' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('dany-deftsoft', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'dany-deftsoft'),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'dany_deftsoft_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'dany_deftsoft_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dany_deftsoft_content_width()
{
	$GLOBALS['content_width'] = apply_filters('dany_deftsoft_content_width', 640);
}
add_action('after_setup_theme', 'dany_deftsoft_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dany_deftsoft_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'dany-deftsoft'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'dany-deftsoft'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'dany_deftsoft_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function dany_deftsoft_scripts()
{
	wp_enqueue_style('dany-deftsoft-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('dany-deftsoft-style', 'rtl', 'replace');
	wp_enqueue_style('Font-Css', get_template_directory_uri() . '/assets/css/font.css');
	wp_enqueue_style('Font-Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css');
	wp_enqueue_style('Owl-Crousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style('Bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('css-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION);
	wp_enqueue_style('css-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION);
	wp_enqueue_script('js-jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), _S_VERSION);
	wp_enqueue_script('Owl-Crousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION);
	wp_enqueue_script('bootstrap-bundels', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION);

	wp_enqueue_script('Form-javascript','https://link.msgsndr.com/js/form_embed.js');

	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'dany_deftsoft_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(
		array(
			'page_title' => 'Theme General Settings',
			'menu_title' => 'Theme Settings',
			'menu_slug' => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect' => false
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title' => 'Theme Header Settings',
			'menu_title' => 'Header',
			'parent_slug' => 'theme-general-settings',
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title' => 'Theme Footer Settings',
			'menu_title' => 'Footer',
			'parent_slug' => 'theme-general-settings',
		)
	);
}

// function allow_svg_upload($mimes){
// 	$mimes['svg'] = 'image/svd+xml';
// 	$mimes['svgz'] = 'image/svd+xml';
//    return $mimes;
// }
// add_filter('upload_mimes','allow_svg_upload');
add_theme_support('woocommerce');

// Add this in your theme's functions.php or a custom plugin

// Remove Add to Cart button
add_action('woocommerce_after_shop_loop_item', 'hide_add_to_cart_button', 9);

function hide_add_to_cart_button()
{
	remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
}

// Remove Sale badge
add_action('woocommerce_before_shop_loop_item_title', 'hide_sale_badge', 9);

function hide_sale_badge()
{
	remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
}

// Remove product count from before shop loop
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);


// Register new endpoint (URL) for My Account page
// Note: Re-save Permalinks or it will give 404 error
function my_account_endpoints_init()
{
	add_rewrite_endpoint('wishlist', EP_ROOT | EP_PAGES);
}
add_action('init', 'my_account_endpoints_init');


function my_account_query_vars($vars)
{
	$vars[] = 'wishlist';
	return $vars;
}
add_filter('query_vars', 'my_account_query_vars', 0);


function add_endpoint_links_my_account($items)
{
	$items['wishlist'] = 'Wishlist';
	return $items;
}
add_filter('woocommerce_account_menu_items', 'add_endpoint_links_my_account');


function wishlist_endpoint_content()
{
	echo do_shortcode('[yith_wcwl_wishlist]');
}
add_action('woocommerce_account_wishlist_endpoint', 'wishlist_endpoint_content');


function customize_my_account_menu($menu_links)
{

	unset($menu_links['dashboard']);

	$new_menu_links = array(
		'edit-account' => __('Account Details', 'woocommerce'),
		'edit-address' => __('Addresses', 'woocommerce'),
		'orders' => __('Orders', 'woocommerce'),
		'wishlist' => __('Wishlist', 'woocommerce'),
		'customer-logout' => __('Logout', 'woocommerce'),
	);

	return $new_menu_links;
}
add_filter('woocommerce_account_menu_items', 'customize_my_account_menu');

function add_username_greeting()
{
	echo '<p>Welcome, ' . wp_get_current_user()->display_name . '!</p>';
}
add_action('woocommerce_before_account_navigation', 'add_username_greeting');


add_action('woocommerce_before_add_to_cart_quantity', 'add_custom_text_before_quantity');
function add_custom_text_before_quantity()
{
	echo '<p>Quantity</p>';
}

// remove 
function remove_product_additional_information_tab($tabs)
{
	unset($tabs['additional_information']);
	unset($tabs['description']);
	return $tabs;
}
add_filter('woocommerce_product_tabs', 'remove_product_additional_information_tab', 20);

// logout 
add_action('wp_footer', 'logout_confirmation_popup_script');

function logout_confirmation_popup_script()
{
	?>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {

			$('.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--customer-logout').on('click', function (e) {
				e.preventDefault();

				$('#logoutConfirmationModal').modal('show');
			});

			$('#logoutConfirmationModal').on('click', '#logoutConfirmButton', function () {
				var action = 'logout';

				$.ajax({
					url: '<?php echo admin_url('admin-ajax.php'); ?>',
					type: 'POST',
					data: {
						action: 'my_logout_action',
					},
					success: function (response) {
						window.location.replace('<?php echo site_url('login'); ?>');
					},
					error: function (xhr, status, error) {

						console.error('AJAX error:', error);
						alert('Logout failed. Please try again.');
					}
				});
			});
		});
	</script>

	<!-- Bootstrap Modal HTML -->
	<div id="logoutConfirmationModal" class="modal fade" tabindex="-1" role="dialog"
		aria-labelledby="logoutConfirmationModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="logoutConfirmationModalLabel">Logout Confirmation</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Are you sure you want to logout?
				</div>
				<div class="modal-footer">
					<button type="button" class="woocommerce-Button" value="no" data-dismiss="modal">No, Stay Here</button>
					<button id="logoutConfirmButton" type="button" value="yes" class="woocommerce-Button">Yes, Log
						Out</button>
				</div>
			</div>
		</div>
	</div>
	<?php
}


add_action('wp_ajax_my_logout_action', 'my_logout_action_handler');
add_action('wp_ajax_nopriv_my_logout_action', 'my_logout_action_handler');

function my_logout_action_handler()
{
	wp_logout();

	wp_send_json_success(array('message' => 'User logged out successfully.'));
}


function remove_product_meta_data()
{
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

	add_action('woocommerce_product_meta_start', function () {
		echo '<span class="product_meta">';
	});

	add_action('woocommerce_product_meta_end', function () {
		echo '</span>';
	});
}
add_action('wp', 'remove_product_meta_data');

add_action('woocommerce_shop_loop_item_title', 'mycode_add_size_above_product_title', 20);
function mycode_add_size_above_product_title()
{
	global $product;
	$size = $product->get_attribute('pa_size');
	if (!empty($size)) {
		echo '<div style="font-size:10px">' . $size . '</div>';
	}
}
// edit
add_action('woocommerce_after_add_to_cart_form', 'sizeguid_details');
function sizeguid_details()
{
	?>
	<div class="accordion">
		<div class="accordion-item">
			<div class="accordion-header">
				Size Guide
				<span class="icon">+</span>
			</div>
			<div class="accordion-content">
				<img src="<?php echo the_field('size_guide_image'); ?>">
			</div>
		</div>

		<div class="accordion-item">
			<div class="accordion-header">
				Details
				<span class="icon">+</span>
			</div>
			<div class="accordion-content">
				<p><?php echo get_field('details_data'); ?></p>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			// Initially hide all accordion content
			$('.accordion-content').hide();

			// Toggle accordion content and change plus/minus icon on click
			$('.accordion-header').click(function () {
				$(this).next('.accordion-content').slideToggle();
				$(this).find('.icon').text(function (_, text) {
					return text === '+' ? '-' : '+';
				});
			});
		});
	</script>
	<?php
}

add_action('woocommerce_before_shop_loop', 'filter_detail');
function filter_detail()
{
	?>
	<button onclick="openModal()" class="woocommerce-Button"><i class="fa fa-filter" aria-hidden="true"></i> Filter</button>

	<div class="side-modal" id="sideModal">
		<div class="modal-content">
			<div class="modal-header">
				<h2>Filter</h2>
				<button type="button" onclick="closeModal()" class="close-btn"><i class="fa fa-times"
						aria-hidden="true"></i></button>
			</div>
			<div class="modal-body mt-4">
				<?php echo do_shortcode('[wcapf_form]'); ?>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function openModal() {
			document.getElementById("sideModal").style.width = "100%";
		}

		function closeModal() {
			document.getElementById("sideModal").style.width = "0";
		}
	</script>

	<?php
}



add_filter('woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');

function wc_refresh_mini_cart_count($fragments)
{
	ob_start();
	$items_count = WC()->cart->get_cart_contents_count();
	?>
	<span id="mini-cart-count"><?php echo $items_count ? $items_count : '0'; ?></span>
	<?php
	$fragments['#mini-cart-count'] = ob_get_clean();
	return $fragments;
}

// Function to display secondary image on hover for WooCommerce shop page
function add_on_hover_shop_loop_image()
{
    $secondary_image_id = get_field('image_to_show_on_hover', get_the_ID());

    if ($secondary_image_id) {
        echo wp_get_attachment_image($secondary_image_id, 'full', false, ['class' => 'hover-image']);
    }
}
add_action('woocommerce_before_shop_loop_item_title', 'add_on_hover_shop_loop_image');


function woo_css_on_hover_shop()
{
    ?>
    <style>
        .woocommerce ul.products li.product a {
            position: relative;
            display: block;
            overflow: hidden;
        }

        .woocommerce ul.products li.product a img {
            object-fit: cover;
            width: 100%;
            height: auto;
            transition: opacity 0.3s ease-in-out;
        }

        .woocommerce ul.products li.product a .hover-image {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .woocommerce ul.products li.product a:hover .hover-image {
            opacity: 1;
        }

        .woocommerce ul.products li.product a:hover img {
            /* opacity: 0; */
        }
    </style>
    <?php
}
add_action('wp_head', 'woo_css_on_hover_shop');




function woo_css_on_hover_homepage() {
    ?>
    <style>
        .banner-gallery-item .banner-gallery-img {
            position: relative;
            overflow: hidden;
        }

        .banner-gallery-item .banner-gallery-img img {
            width: 100%;
            height: auto;
            display: block;
            transition: opacity 0.3s ease-in-out;
        }

        .banner-gallery-item .banner-gallery-img img.hover-image {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }

        .banner-gallery-item a:hover .banner-gallery-img img.hover-image {
            opacity: 1;
        }

        .banner-gallery-item a:hover .banner-gallery-img img:first-of-type {
            /* opacity: 0; */
        }

        .banner-gallery-item .banner-gallery-img img:not(.hover-image) {
            opacity: 1;
        }
    </style>
    <?php
}
add_action('wp_head', 'woo_css_on_hover_homepage');





