<?php
/*Template Name:contact_information*/
get_header();
?>

<div class="container">
    <?php the_conent();?>
    <!-- <div class="row justify-content-center">
        <div class="col-lg-6">
            <h2 class=" form-heading"><?php the_field('form_heading'); ?></h2>
            <iframe src="https://api.leadconnectorhq.com/widget/form/rcLuVTiujoxI6rRnb0Bc"
                style="width:100%;height:100%;border:none;border-radius:3px" id="inline-rcLuVTiujoxI6rRnb0Bc"
                data-layout="{'id':'INLINE'}" data-trigger-type="alwaysShow" data-trigger-value=""
                data-activation-type="alwaysActivated" data-activation-value="" data-deactivation-type="neverDeactivate"
                data-deactivation-value="" data-form-name="Basic Form" data-height="518"
                data-layout-iframe-id="inline-rcLuVTiujoxI6rRnb0Bc" data-form-id="rcLuVTiujoxI6rRnb0Bc"
                title="Basic Form">
            </iframe>
            <script src="https://link.msgsndr.com/js/form_embed.js"></script>
            <?php //echo do_shortcode('[contact-form-7 id="c52fecd" title="Contact form 1"]'); ?>
        </div>
    </div> -->
</div>
<!-- <section class="location">
    <div class="container-fluid">
        <h2 class="text-center my-4"><?php // the_field('location_heading'); ?></h2>
            
    </div>
</section> -->


<?php get_footer(); ?>