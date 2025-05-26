<?php
/* Template Name:Product-List */
get_header();
?>
<!-- Banner gallery -->
<section class="banner-gallery">
    <div class="container-fluid">
        <h2 class="common-h2">Shop<?php the_field(''); ?></h2>
        <?php //echo do_shortcode('[contact-form-7 id="c52fecd" title="Contact form 1"]');
        ?>
        <div class="flilter-shortby">
            <a href="#" class="font-12"><i class="fa-solid fa-sliders me-1"></i> Filter</a>
            <a href="#" class="font-12">Sort by: Featured <i class="
                        ms-1 fa-solid fa-plus"></i></a>
        </div>
        <div class="banner-gallery-wrap">
            <div class="banner-gallery-item">
                <div class="banner-gallery-img">
                    <img src="./images/banner-gallery-item1.png" alt="">
                </div>
                <div class="banner-gallery-text">
                    <h5 class="font-12">Slim Fit Single Breasted Moleskin Blazer</h5>
                    <p class="font-12">$75.00 USD</p>
                </div>
            </div>
            <div class="banner-gallery-item">
                <div class="banner-gallery-img">
                    <img src="./images/banner-gallery-item2.png" alt="">
                </div>
                <div class="banner-gallery-text">
                    <h5 class="font-12">Slim Fit Single Breasted Moleskin Blazer</h5>
                    <p class="font-12">$75.00 USD</p>
                </div>
            </div>
            <div class="banner-gallery-item">
                <div class="banner-gallery-img">
                    <img src="./images/banner-gallery-item3.png" alt="">
                </div>
                <div class="banner-gallery-text">
                    <h5 class="font-12">Slim Fit Single Breasted Moleskin Blazer</h5>
                    <p class="font-12">$75.00 USD</p>
                </div>
            </div>
            <div class="banner-gallery-item">
                <div class="banner-gallery-img">
                    <img src="./images/banner-gallery-item4.png" alt="">
                </div>
                <div class="banner-gallery-text">
                    <h5 class="font-12">Slim Fit Single Breasted Moleskin Blazer</h5>
                    <p class="font-12">$75.00 USD</p>
                </div>
            </div>
            <div class="banner-gallery-item">
                <div class="banner-gallery-img">
                    <img src="./images/banner-gallery-item5.png" alt="">
                </div>
                <div class="banner-gallery-text">
                    <h5 class="font-12">Slim Fit Single Breasted Moleskin Blazer</h5>
                    <p class="font-12">$75.00 USD</p>
                </div>
            </div>
            <div class="banner-gallery-item">
                <div class="banner-gallery-img">
                    <img src="./images/banner-gallery-item6.png" alt="">
                </div>
                <div class="banner-gallery-text">
                    <h5 class="font-12">Slim Fit Single Breasted Moleskin Blazer</h5>
                    <p class="font-12">$75.00 USD</p>
                </div>
            </div>
            <div class="banner-gallery-item">
                <div class="banner-gallery-img">
                    <img src="./images/banner-gallery-item7.png" alt="">
                </div>
                <div class="banner-gallery-text">
                    <h5 class="font-12">Slim Fit Single Breasted Moleskin Blazer</h5>
                    <p class="font-12">$75.00 USD</p>
                </div>
            </div>
            <div class="banner-gallery-item">
                <div class="banner-gallery-img">
                    <img src="./images/banner-gallery-item8.png" alt="">
                </div>
                <div class="banner-gallery-text">
                    <h5 class="font-12">Slim Fit Single Breasted Moleskin Blazer</h5>
                    <p class="font-12">$75.00 USD</p>
                </div>
            </div>
            <div class="banner-gallery-item">
                <div class="banner-gallery-img">
                    <img src="./images/banner-gallery-item9.png" alt="">
                </div>
                <div class="banner-gallery-text">
                    <h5 class="font-12">Slim Fit Single Breasted Moleskin Blazer</h5>
                    <p class="font-12">$75.00 USD</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- More collection -->
<section class="more-collection more-collection-2">
    <h2 class="common-h2">VIEW OUR CAR GALLERY</h2>
    <div class="owl-carousel more-collection-slider">
        <div class="item more-collection-item">
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
        </div>
    </div>
    <span class="font-12 mt-5">1/5</span>
</section>

<?php get_footer(); ?>