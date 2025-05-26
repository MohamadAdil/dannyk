<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dany-Deftsoft
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <?php wp_head(); ?>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <!-- <a class="skip-link screen-reader-text" href="#primary"><?php //esc_html_e( 'Skip to content', 'dany-deftsoft' ); ?></a> -->
        <header>
         
                <nav class="navbar-main">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span id="toggle"><i class="fa-solid fa-bars me-2"></i>Menu</span>
                        <div class="offcanvas-body" id="sidebar">
                            <i class="fa-solid fa-xmark" id="cross"></i>
                            <?php
                            wp_nav_menu([
                                'menu' => 'Menu 1',
                                'menu_class' => 'mt-4',
                                'container' => false,
                            ]);
                            ?>
                            <!-- <ul class="mt-4">
                            <li><a href="">Home</a></li>
                            <li><a href="">Project</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">contact</a></li>
                        </ul> -->
                        </div>
                    </button>
                    <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                    <!-- <a class="navbar-brand" href="#">
                        <img src="<? php// echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="logo">
                    </a> -->
                    <div class="cart-usd">
                        <?php
                        // $items_count = WC()->cart->get_cart_contents_count(); 
                        // $cart_link = get_field('cart_link','option'); ?>
                        <!-- <div id="mini-cart-count"><? php// echo $items_count ? $items_count : '&nbsp;'; ?></div> -->
                        <!-- <a href="<?php //echo $cart_link['url']; ?>"><?php //echo $cart_link['title']; ?>(<span><?php //echo $items_count ? $items_count : '0'; ?></span>)</a> -->
                        <!-- <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            USD $
                        </a> -->

                        <!-- </div> -->
                        <div class="cart-usd">
                            <?php
                            $items_count = WC()->cart->get_cart_contents_count();
                            $cart_link = get_field('cart_link', 'option');
                            ?>
                            <a href="<?php echo esc_url($cart_link['url']); ?>">
                                <?php echo esc_html($cart_link['title']); ?>
                                ( <span
                                    id="mini-cart-count"><?php echo esc_html($items_count ? $items_count : '0'); ?></span>
                                )
                            </a>
                        </div>

                </nav>
          
        </header>
        </header>