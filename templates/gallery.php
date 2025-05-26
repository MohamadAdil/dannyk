<?php 
/*Template Name:Gallery*/
get_header();
?>
<section class="gallery-main">
   
   <img class="img-fluid"
   src="<?php echo the_field('gallery_image');?>" alt="">

</section>

<section class="gallery-section">
      
            <h2 class="text-center mb-4"><?php echo get_field('our_gallery_heading'); ?></h2>
            <div class="gallery-grid">
                <?php
                    if( have_rows('our_gallery_images') ):
                        while( have_rows('our_gallery_images') ) : the_row();
                ?>
                <div class="gallery-item">
                    <img src="<?php echo the_sub_field('our_gallery_image');?>" alt="Audi Front Grill">
                </div>
                <?php
                        endwhile;
                    endif;
                ?>
                <!-- <div class="gallery-item">
                    <img src="http://49.249.236.30/Dany/wp-content/uploads/2024/06/car2.png" alt="Vintage Race Car">
                </div>
                <div class="gallery-item large">
                    <img src="http://49.249.236.30/Dany/wp-content/uploads/2024/06/car3.png" alt="Orange Lamborghini">
                </div>
                <div class="gallery-item">
                    <img src="http://49.249.236.30/Dany/wp-content/uploads/2024/06/car4.png" alt="Red Sports Car in Nature">
                </div>
                <div class="gallery-item">
                    <img src="http://49.249.236.30/Dany/wp-content/uploads/2024/06/car5.png" alt="Orange McLaren Front">
                </div>
                <div class="gallery-item large">
                    <img src="http://49.249.236.30/Dany/wp-content/uploads/2024/06/car6.png" alt="Blue BMW i8">
                </div>
                <div class="gallery-item">
                    <img src="http://49.249.236.30/Dany/wp-content/uploads/2024/06/car7.png" alt="Green Lamborghini at Night">
                </div>
                <div class="gallery-item">
                    <img src="http://49.249.236.30/Dany/wp-content/uploads/2024/06/car8.png" alt="Green Porsche">
                </div>
                <div class="gallery-item">
                    <img src="http://49.249.236.30/Dany/wp-content/uploads/2024/06/car9.png" alt="Silver Sports Car">
                </div>
                <div class="gallery-item">
                    <img src="http://49.249.236.30/Dany/wp-content/uploads/2024/06/car10.png" alt="Green Lamborghini Front">
                </div>
                <div class="gallery-item">
                    <img src="http://49.249.236.30/Dany/wp-content/uploads/2024/06/car11.png" alt="Red Lamborghini">
                </div>
                <div class="gallery-item">
                    <img src="http://49.249.236.30/Dany/wp-content/uploads/2024/06/car12.png" alt="Red Sports Car Detail">
                </div> -->
            </div>
        
    </section>

    <section class="video-section">
        <h2 class="text-center"><?php echo get_field('check_out_youtube_heading'); ?></h2>
        <div class="main-video">
            <iframe src="<?php echo the_field('check_out_youtube_url'); ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>
    <section class="marque-slider">
            <div class="container-fluid">
                <div class="owl-carousel marque-slider-wrap">
                <?php
                    if( have_rows('slider_images') ):
                        while( have_rows('slider_images') ) : the_row();
                ?>

                        <div class="marque-slider-img">
                             <img src="<?php echo the_sub_field('single_image');?>" alt="Images">
                             <!-- <img src="http://49.249.236.30/Dany/wp-content/uploads/2024/06/412motorsport.png" alt="Images"> -->
                        </div>
                        <?php
                        endwhile;
                    endif;
                ?>
                    
                    <!-- <div class="marque-slider-img">
                        <img src="<?php //echo get_template_directory_uri();?>/assets/images/412motorsport.png" alt="">
                    </div>
                    <div class="marque-slider-img">
                        <img src="<?php //echo get_template_directory_uri();?>/assets/images/412motorsport.png" alt="">
                    </div> -->
                </div>
            </div>
        </section>


<?php get_footer();?>