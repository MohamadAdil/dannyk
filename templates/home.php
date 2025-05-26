<?php
/*Template Name:Home*/
get_header();

$url = get_field('banner_backgroung_image');
$youtube_url_pattern = '/^https:\/\/www\.youtube\.com\/embed\//';

$is_youtube_video = preg_match($youtube_url_pattern, $url);
?>
<style>
    .hero-banner {
        position: relative;
        width: 100%;
        height: 100vh;
        /* Adjust as needed */
        overflow: hidden;
        /* Hide overflow to keep the background tidy */
    }

    /* Video Background */
    .video-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        /* Ensure the video is behind other content */
        overflow: hidden;
    }

    .video-background iframe {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        transform: translate(-50%, -50%);
        pointer-events: none;
        /* Prevent interaction with the iframe */
    }

    /* Image Background */
    .image-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        z-index: -1;
        /* Ensure the image is behind other content */
    }
</style>

<section class="hero-banner">
    <?php if ($is_youtube_video): ?>
        <div class="video-background">
            <iframe src="<?php echo esc_url($url); ?>" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    <?php elseif (!empty($url)): ?>
        <div class="image-background" style="background-image: url('<?php echo esc_url($url); ?>');"></div>
    <?php endif; ?>
    <div class="container-fluid">
        <h1 class="main-heading"><?php the_field('banner_heading'); ?></h1>
        <div class="hero-btn">
            <?php
            $banner_button = get_field('banner_button');
            ?>
            <a href="<?php echo $banner_button['url']; ?>" class="btn-main"><?php echo $banner_button['title']; ?></a>
        </div>
    </div>
</section>
<!-- Banner-gallery -->

<section class="banner-gallery">
    <div class="container-fluid">

        <div class="banner-gallery-wrap">
            <?php
            if (function_exists('get_field')) {
                $products = get_field('products_listing');

                if ($products) {
                    foreach ($products as $product) {
                        // Get product details
                        $product_name = get_the_title($product->ID);
                        $product_price = wc_price(get_post_meta($product->ID, '_price', true));
                        $product_image = get_the_post_thumbnail_url($product->ID, 'full');

                        // Get secondary image from ACF field
                        $secondary_image_id = get_field('image_to_show_on_hover', $product->ID);
                        $secondary_image = $secondary_image_id ? wp_get_attachment_image_url($secondary_image_id, 'full') : '';

                        ?>
                        <div class="banner-gallery-item">
                            <a href="<?php echo get_the_permalink($product->ID); ?>">
                                <div class="banner-gallery-img">
                                    <img src="<?php echo $product_image ? $product_image : get_template_directory_uri() . '/placeholder-image.jpg'; ?>"
                                        alt="<?php echo esc_attr($product_name); ?>">
                                    <?php if ($secondary_image): ?>
                                        <img src="<?php echo esc_url($secondary_image); ?>" class="hover-image"
                                            alt="<?php echo esc_attr($product_name); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="banner-gallery-text">
                                    <h5 class="font-12"><?php echo $product_name; ?></h5>
                                    <p class="font-12"><?php echo $product_price; ?></p>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                } else {
                    echo 'No products selected';
                }
            } else {
                echo 'ACF plugin is not active or get_field function not available';
            }
            ?>
        </div>
        <div class="banner-gallery-btn">
            <?php
            $view_button = get_field('view_button');
            ?>
            <a href="<?php echo $view_button['url']; ?>"
                class="btn-main btn-border"><?php echo $view_button['title']; ?></a>
        </div>
    </div>
</section>

<!--  CAR GALLERY -->
<section class="car-gallery">
    <div class="container-fluid">
        <h2 class="common-h2"><?php the_field('gallery_heading'); ?></h2>
        <div class="car-gallery-grid">
            <?php
            $images = get_field('car_gallery_section');
            if ($images):
                $i = 1;
                foreach ($images as $image):
                    $image_src = $image['url'];
                    ?>
                    <div class="car-gallery-item<?php echo $i; ?>">
                        <img src="<?php echo esc_url($image_src); ?>" alt="">
                    </div>
                    <?php
                    $i++;
                endforeach;
            endif;
            ?>
        </div>
        <?php
        $gallery_link = get_field('gallery_link');
        ?>
        <div class="view-btn">
            <a href="<?php echo $gallery_link['url']; ?>"
                class="btn-main btn-border"><?php echo $gallery_link['title']; ?></a>
        </div>
    </div>
</section>
<!-- ============mobile gal=========== -->

<section class="more-collection mob-gal">
    <div class="container-fluid">
    <h2 class="common-h2"><?php the_field('gallery_heading'); ?></h2>
        <div class="owl-carousel more-collection-slider">
        <?php
            $images = get_field('car_gallery_section');
            if ($images):
                $i = 1;
                foreach ($images as $image):
                    $image_src = $image['url'];
                    ?>
                    <div class="car-gallery-item<?php echo $i; ?>">
                        <img src="<?php echo esc_url($image_src); ?>" alt="">
                    </div>
                    <?php
                    $i++;
                endforeach;
            endif;
            ?>

        </div>
        <div class="view-btn">
            <a href="<?php echo $gallery_link['url']; ?>"
                class="btn-main btn-border"><?php echo $gallery_link['title']; ?></a>
        </div>
    </div>
</section>


<!-- =========================== -->
<!-- More collection -->
<section class="more-collection">
    <div class="container-fluid">
        <h2 class="common-h2"><?php the_field('collection_heading'); ?></h2>
        <div class="owl-carousel more-collection-slider">
            <?php
            if (function_exists('get_field')) {
                $terms = get_field('product_collections'); // Get the repeater field for product collections
            
                if ($terms && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                        $category_name = $term->name;
                        $thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);
                        $hover_image = get_field('on_hover_image', $term); // Get the hover image URL (assuming 'on_hover_image' is the field name)
                        $image_html = wp_get_attachment_image($thumbnail_id, 'full', false, array('class' => 'your-custom-class'));
                        ?>
                        <div class="item more-collection-item">
                            <a href="<?php echo get_term_link($term); ?>">
                                <div class="more-collection-img banner-gallery-img">
                                    <?php echo $image_html; // Display the main image ?>
                                    <?php if ($hover_image): ?>
                                        <img src="<?php echo esc_url($hover_image); ?>" class="hover-image"
                                            alt="<?php echo esc_attr($category_name); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="more-collection-text">
                                    <h4 class="font-12"><?php echo esc_html($category_name); ?></h4>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                }
            }
            ?>

        </div>
    </div>
</section>
<!-- CHECk YOUTUBE -->
<section class="check-youtube">
    <div class="container-fluid">
        <h2 class="common-h2"><?php the_field('youtube_heading'); ?></h2>

        <iframe src="<?php the_field('youtube_link'); ?>" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</section>
<!-- Marque slider -->
<section class="marque-slider">
    <div class="container-fluid">
        <div class="owl-carousel marque-slider-wrap">
            <?php
            $slider_images = get_field('slider_images');
            if ($slider_images) {
                foreach ($slider_images as $slider) {
                    ?>

                    <div class="marque-slider-img">
                        <img src="<?php echo $slider['images_slider']; ?>" alt="Images">
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>