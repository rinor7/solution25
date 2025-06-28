<?php 
/*
* Template Name: Contact
*/
get_header(); 
?>

    <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>

    <div class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <h1><?php echo ( get_field('contact')['title'] );?></h1>
                    <pre><?php echo ( get_field('contact')['text'] );?></pre>
                    <div class="contact-about">
                        <div class="row">
                            <div class="col-md-6">
                                <span><?php echo ( get_field('contact')['location_1_title'] );?></span>
                                <pre><?php echo ( get_field('contact')['location_1_text'] );?></pre>
                            </div>
                            <div class="col-md-6">
                                <span><?php echo ( get_field('contact')['location_2_title'] );?></span>
                                <pre><?php echo ( get_field('contact')['location_2_text'] );?></pre>
                            </div>
                            <div class="col-md-6">
                                <span><?php echo ( get_field('contact')['phone_title'] );?></span>
                                <a href="tel:<?php echo ( get_field('general', 5)['phone_number'] );?>"><?php echo ( get_field('general', 5)['phone_number'] );?></a>
                            </div>
                            <div class="col-md-6">
                                <span><?php echo ( get_field('contact')['social_media'] );?></span>
                                <?php if( get_field('contact')['facebook'] ): ?>
                                    <a href="<?php echo ( get_field('contact')['facebook'] );?>">Facebook</a>
                                <?php endif; ?>
                                <?php if( get_field('contact')['instagram'] ): ?>
                                    <a href="<?php echo ( get_field('contact')['instagram'] );?>">Instagram</a>
                                <?php endif; ?>
                                <?php if( get_field('contact')['linkedin'] ): ?>
                                    <a href="<?php echo ( get_field('contact')['linkedin'] );?>">Linkedin</a>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <span><?php echo ( get_field('contact')['email_title'] );?></span>
                                <a href="mailto:<?php echo ( get_field('general', 5)['email'] );?>"><?php echo ( get_field('general', 5)['email'] );?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">

 

                    <div class="contact-us" style="padding: 0">
                        <div class="cf-banner">
                            <div class="rightside">
                                <?php dynamic_sidebar('widget-4'); ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>