<?php
/*Template Name:Services*/
get_header();
?>
<section class="service-main">

    <img class="img-fluid" src="<?php echo the_field('service_image'); ?>" alt="">

</section>
<section class="service">
    <div class="container">
        <h2 class="text-center mb-4"><?php echo get_field('our_service_heading'); ?></h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            <?php
            // Check if there are rows in the main repeater field 'service_box'
            if (have_rows('service_box')):
                while (have_rows('service_box')):
                    the_row();
                    $section_heading = get_sub_field('service_box_heading'); // Get the section heading
                    ?>
                    <div class="col-lg-6">
                        <div class="service-box">
                            <h3><?php echo esc_html($section_heading); ?></h3>

                            <?php
                            // Check if there are rows in the nested repeater field 'service_list'
                            if (have_rows('service_list')):
                                // Start the <ul> element before the loop
                                echo '<ul>';
                                while (have_rows('service_list')):
                                    the_row();
                                    $description_one = get_sub_field('add_description');
                                    ?>

                                    <li><?php echo esc_html($description_one); ?></li>

                                    <?php
                                endwhile; // End of nested repeater loop
                                // Close the <ul> element after the loop
                                echo '</ul>';
                            endif; // End of check for nested repeater
                            ?>
                        </div>
                    </div>
                    <?php
                endwhile; // End of main repeater loop
            endif; // End of check for main repeater
            ?>



        </div>
    </div>
</section>

<section class="our-partner">
    <div class="container">
        <h2 class="common-h2"><?php the_field('our_partner_heading'); ?></h2>
        <div class="owl-carousel our-partner-slider">
            <?php
            $logo_slider = get_field('our_partner_logo');
            if ($logo_slider) {
                foreach ($logo_slider as $logo) {
                    ?>
                    <div class="our-partner-item">
                        <img src="<?php echo $logo['our_partner_image']; ?>" alt="">
                    </div>
                    <?php
                }
            }
            ?>


        </div>
    </div>
</section>


<section class="mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2 class=" form-heading"><?php the_field('contact_heading'); ?></h2>
            <iframe id="inline-rcLuVTiujoxI6rRnb0Bc"
                        style="width: 100%; height: 100%; border: none; border-radius: 3px;" title="Basic Form"
                        src="<?php the_field('iframe_link');?>"
                        data-layout="{'id':'INLINE'}" data-trigger-type="alwaysShow" data-trigger-value=""
                        data-activation-type="alwaysActivated" data-activation-value=""
                        data-deactivation-type="neverDeactivate" data-deactivation-value="" data-form-name="Basic Form"
                        data-height="518" data-layout-iframe-id="inline-rcLuVTiujoxI6rRnb0Bc"
                        data-form-id="rcLuVTiujoxI6rRnb0Bc"></iframe>
                
                <?php //echo do_shortcode('[contact-form-7 id="c52fecd" title="Contact form 1"]'); ?>
            </div>
        </div>
</section>
<!-- ==============contact page==================== -->
<!-- <section class="contact-form">
        <div class="container">

        </div>
    </section>
    <section class="location"></section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script> -->




<?php get_footer(); ?>