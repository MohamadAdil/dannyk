<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */
// exit;
defined( 'ABSPATH' ) || exit;
?>
<div class="container-fluid">
<?php
get_header( 'shop' );
?>

<h2 class="top-heading"><?php the_field('top_heading', get_option('woocommerce_shop_page_id'));?></h2>

<?php //echo do_shortcode( '[wcapf_form]' );?>
<?php 
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
// do_action( 'woocommerce_before_main_content' );

/**
 * Hook: woocommerce_shop_loop_header.
 *
 * @since 8.6.0
 *
 * @hooked woocommerce_product_taxonomy_archive_header - 10
 */
// do_action( 'woocommerce_shop_loop_header' );


if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );
?>
<!-- More collection -->
<section class="more-collection more-collection-2">
            <div class="container-fluid">
			<h2 class="common-h2"><?php the_field('gallery_heading', get_option('woocommerce_shop_page_id')); ?></h2>

                <div class="owl-carousel more-collection-slider">
	        	<?php
					$images = get_field('image_gallery', get_option('woocommerce_shop_page_id'));
					if ( $images ) :
						foreach ( $images as $image ) :
							// $image_src = $image['url'];
					?>
					<div class="item more-collection-item">
						<div class="more-collection-img">
							<img src="<?php echo esc_url($image); ?>" alt="">
						</div>
					</div>
					<?php
						endforeach;
					endif;
					?>                  <!-- <div class="item more-collection-item">
                        <div class="more-collection-img">
                            <img src="./images/more-collection1.png" alt="">
                        </div>
                    </div>
                    <div class="item more-collection-item">
                        <div class="more-collection-img">
                            <img src="./images/more-collection2.png" alt="">
                        </div>
                    </div>
                    <div class="item more-collection-item">
                        <div class="more-collection-img">
                            <img src="./images/more-collection3.png" alt="">
                        </div>
                    </div>
                    <div class="item more-collection-item">
                        <div class="more-collection-img">
                            <img src="./images/more-collection4.png" alt="">
                        </div>
                    </div> -->
                </div>
                <!-- <span id="carousel-counter" class="font-12 mt-5">1/5</span> -->


            </div>
        </section>	
</div>
<?php
get_footer( 'shop' );
?>
