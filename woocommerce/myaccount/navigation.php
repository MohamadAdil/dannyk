<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>

<nav class="woocommerce-MyAccount-navigation" aria-label="<?php esc_html_e( 'Account pages', 'woocommerce' ); ?>">
    <ul>
        <?php
        // Define an array to map each endpoint to its corresponding icon
		$menu_items = array(
			'edit-account' => array(
				'label' => __('Account Details', 'woocommerce'),
				'icon'  => '<i class="fa-regular fa-circle-user"></i>'
			),
			'edit-address' => array(
				'label' => __('Addresses', 'woocommerce'),
				'icon'  => '<i class="fas fa-map-marker-alt"></i>'
			),
			'orders' => array(
				'label' => __('Orders', 'woocommerce'),
				'icon'  => '<i class="fa-solid fa-cart-shopping"></i>'
			),
			'wishlist' => array(
				'label' => __('Wishlist', 'woocommerce'),
				'icon'  => '<i class="fas fa-heart"></i>'
			),
			'customer-logout' => array(
				'label' => __('Logout', 'woocommerce'),
				'icon'  => '<i class="fas fa-sign-out-alt"></i>'
			),
		);
		

        // Loop through each menu item
        foreach ( $menu_items as $endpoint => $item ) :
            $label = $item['label'];
            $icon  = $item['icon'];
            ?>
            <li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
                <a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">
                    <?php echo $icon . esc_html( $label ); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>


<?php do_action( 'woocommerce_after_account_navigation' ); ?>
