<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dany-Deftsoft
 */
?>

<section class="location">
    <div class="container-fluid">
        <div class="location-wrap">
            <div class="location-img">
                <img src="<?php the_field('location_image', 'option'); ?>" alt="Location Image">
            </div>
            <div class="location-text" style="background-color: #000;">
                <?php the_field('location_address', 'option'); ?>
            </div>
        </div>
    </div>
</section>

  <footer>
            <div class="container">
                <div class="footer-top">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
                    <!-- <a href="#">
                        <img src="<?php //echo get_template_directory_uri();?>/assets/images/logo-footer.svg" alt="">
                    </a> -->
                    <div class="news-letter">
                        <h3><?php //the_title(); ?>Subscribe to our newsletter</h3>
                        <div class="news-letter-input">
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter email address">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/next-slide.svg" alt="">
                                </a>
                        </div>
                    </div>
                    <?php
                        wp_nav_menu([
                            'menu' => 'Footer Menu',
                            'menu_class' => 'footer-nav',
                            'container' => false, 
                        ]);
                        ?>
                    <!-- <ul class="footer-nav">
                        <li>
                            <a href="#">Refund policy</a>
                        </li>
                        <li>
                            <a href="#">Privacy policy</a>
                        </li>
                        <li>
                            <a href="#">Terms of service</a>
                        </li>
                        <li>
                            <a href="#">Shipping policy</a>
                        </li>
                        <li>
                            <a href="#">Contact information</a>
                        </li>
                    </ul> -->
                </div>
                </div>
                <div class="container-fluid">
                <div class="footer-bottom">
                    <?php 
                    $copyright_footer = get_field('copyright_footer','option');
                    ?>
                    <a href="<?php echo $copyright_footer['url'];?>" class="font-12"><?php echo $copyright_footer['title'];?></a>
                    <ul class="social-link">
                        
                        <li>
                            <?php 
                            $facebook_link = get_field('facebook_link','option');
                            ?>
                            <a href="<?php echo $facebook_link['url'];?>" class="font-12" target="__blank"> <i class="fa-brands fa-facebook-f"></i> <?php //echo $facebook_link['title'];?></a>
                        </li>
                        <li>
                        <?php 
                         $instagram_link = get_field('instagram_link','option');
                        ?>
                            <a href="<?php echo $instagram_link['url'];?>" class="font-12" target="_blank"><i class="fa-brands fa-instagram"></i> <?php //echo $instagram_link['title'];?></a>
                        </li>
                        <li>
                        <?php 
                         $twitter_link = get_field('twitter_link','option');
                        ?>
                            <a href="<?php echo $twitter_link['url'];?>" class="font-12" target="_blank"><i class="fa-brands fa-x-twitter"></i> <?php //echo $twitter_link['title'];?></a>
                        </li>
                    </ul>
                    <ul class="payment-link">
                        <?php 
                        $payment_link = get_field('payment_link','option');
                         
                        if($payment_link){
                            foreach($payment_link as $payment){
                                ?>
                                <li>
                                 <a href="<?php echo $payment['payment_links'];?>" class="font-12">
                                <img src="<?php echo $payment['payment_logo'];?>" alt="">
                            </a>
                        </li>
                                <?php
                            }
                        }
                        ?>
                        <!-- <li>
                            <a href="#">
                                <img src="<?php //echo get_template_directory_uri();?>/assets/images/amex.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php// echo get_template_directory_uri();?>/assets/images/rupay.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?php //echo get_template_directory_uri();?>/assets/images/visa.png" alt="">
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </footer>
<?php wp_footer(); ?>

</body>
</html>
