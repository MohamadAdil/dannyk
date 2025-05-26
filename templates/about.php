<?php 
/* Template Name:About Page */
get_header();
?>
 <!-- hero -->
 <section class="image-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="image-content-text">
                            <h4 class="font-23"><?php the_field('banner_heading');?></h4>
                            <?php the_field('banner_description');?>
                            <!-- <p class="common-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                                hendrerit est vitae mi euismod molestie. Duis vehicula at purus et vestibulum.
                                Suspendisse potenti. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                posuere cubilia curae; Pellentesque eget dictum magna. Mauris purus libero, finibus non
                                augue at, porttitor porttitor urna. Sed sed dui sem. Mauris sagittis nibh quis sodales
                                luctus. Integer sollicitudin, sapien ullamcorper gravida dapibus, mauris velit molestie
                                lectus, sit amet hendrerit dolor orci vitae enim.</p>
                            <p class="common-p">Suspendisse accumsan mauris non velit mollis, eu tempor libero
                                consequat. Nulla facilisi. Curabitur a orci mauris. Etiam tellus metus, elementum in
                                rhoncus at, rhoncus id augue.</p> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-content-img">
                            <img src="<?php the_field('side_image');?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  CAR GALLERY -->
        <section class="car-gallery">
            <div class="container-fluid">
                <h2 class="common-h2"><?php the_field('gallery_heading');?></h2>
                <div class="car-gallery-grid">
                <?php 
                    $images = get_field('car_gallery_section');
                    if ( $images ) :
                        $i=1;
                        foreach ( $images as $image ) :
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

                    <!-- <div class="car-gallery-item1">
                        <img src="./images/car-gallery-1.png" alt="">
                    </div>
                    <div class="car-gallery-item2">
                        <img src="./images/car-gallery-2.png" alt="">
                    </div>
                    <div class="car-gallery-item3">
                        <img src="./images/car-gallery-3.png" alt="">
                    </div>
                    <div class="car-gallery-item4">
                        <img src="./images/car-gallery-4.png" alt="">
                    </div>
                    <div class="car-gallery-item5">
                        <img src="./images/car-gallery-5.png" alt="">
                    </div> -->
                </div>
                <?php 
            $gallery_link = get_field('gallery_link');
            ?>
            <div class="view-btn">
            <a href="<?php echo $gallery_link['url'];?>" class="btn-main btn-border"><?php echo $gallery_link['title'];?></a></div>
            </div>
        </section>
        <!-- image-content  -->
        <section class="image-content">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="image-content-img">
                            <img src="<?php the_field('content_image');?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-content-text"> 
                            <h4 class="font-23"><?php the_field('content_heading');?></h4>
                                <?php the_field('description_next');?>   
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our-partner -->
        <section class="our-partner">
            <div class="container">
                <h2 class="common-h2"><?php the_field('partner_heading');?></h2>
                <div class="owl-carousel our-partner-slider">
                    <?php 
                    $logo_slider = get_field('logo_slider');
                    if($logo_slider){
                        foreach($logo_slider as $logo){
                            ?>
                            <div class="our-partner-item">
                        <img src="<?php echo $logo['partner_logos'];?>" alt="">
                    </div>
                            <?php
                        }
                    }
                    ?>
                    
                    <!-- <div class="our-partner-item">
                        <img src="/images/partner-2.png" alt="">
                    </div>
                    <div class="our-partner-item">
                        <img src="/images/partner-3.png" alt="">
                    </div>
                    <div class="our-partner-item">
                        <img src="/images/partner-4.png" alt="">
                    </div>
                    <div class="our-partner-item">
                        <img src="/images/partner-5.png" alt="">
                    </div> -->
                </div>
            </div>
        </section>
        <!-- Location -->
        <!-- <section class="location">
            <div class="container-fluid">
                <div class="location-wrap">
                    <div class="location-img">
                        <img src="<?php //the_field('location_image');?>" alt="">
                    </div>
                    <div class="location-text" style="background-color: #000;">
                    <?php //the_field('location_address');?>
                        
                    </div>
                </div>
            </div>
        </section> -->

<?php get_footer(); ?>
